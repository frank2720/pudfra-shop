<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductSize;
use App\Models\ProductColor;
use Illuminate\Http\Request;
use App\Models\ProductEntity;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use App\Models\Image as ProductImage;
use Illuminate\Http\RedirectResponse;
use Intervention\Image\Drivers\Gd\Driver;

class ProductController extends Controller
{
    public function getIncrease($rise,$cVal)
    {
        $percentageIncrease = round(($rise/$cVal)*100,1);
        return $percentageIncrease;
    }

    public function index(Request $request)
    {
        $Tproducts = Product::count();

        $yesterday =  Carbon::yesterday();
        $today = Carbon::now();

        $startDate = Carbon::now()->subMonths(8)->startOfMonth();
        $endDate = Carbon::now()->endOfMonth();


        $productsIncrease = Product::whereBetween('created_at',[$yesterday,$today])->count();
        $Tproducts==0?$pIncrease = 0:$pIncrease = $this->getIncrease($productsIncrease,$Tproducts);

        $products = Product::whereBetween('created_at', [$startDate, $endDate])
                        ->selectRaw('MONTH(created_at) as month, COUNT(*) as total')
                        ->groupBy('month')
                        ->pluck('total', 'month')
                        ->toArray();

        $months = collect(range(0, 8))->map(function ($i) {
            return Carbon::now()->subMonths($i)->format('M');
        })->reverse()->values()->all();

        $monthlyProducts = $this->formatMonthlyData($products, 9);

        /*$data = DB::table('products')
                    ->join('categories', 'products.category_id', '=', 'categories.id')
                    ->select('categories.category as category', DB::raw('count(*) as total'))
                    ->groupBy('categories.category')
                    ->get();*/

        /*$categoryData = Category::withCount('products')
                            ->get()
                            ->map(function($category) {
                                return [
                                    'category' => $category->category,
                                    'total' => $category->products_count
                                ];
                            });*/
        $categories = Category::get()->all();
        $colors = ProductColor::get()->all();
        $sizes = ProductSize::get()->all();
        $user = $request->user();
        return view('admin.index',[
            'Tproducts'=>$Tproducts,
            'productsIncrease'=> $pIncrease,
            'user'=>$user,
            'categories'=>$categories,
            'colors'=>$colors,
            'sizes'=>$sizes,
            'months' => $months,
            'monthlyProducts' => $monthlyProducts,
        ]);
    }


    public function products(Request $request)
    {
        $categories = Category::get()->all();
        $colors = ProductColor::get()->all();
        $sizes = ProductSize::get()->all();
        $user = $request->user();
        $products = Product::with(['entity'])->paginate(10);
        return view('admin.products',[
            'categories'=>$categories,
            'colors'=>$colors,
            'sizes'=>$sizes,
            'products'=>$products,
            'user'=>$user
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:255',
            'img.*'=>'image|mimes:jpeg,png,jpg,gif,svg,webp',
            'category'=>'required',
            'description'=>'required|string',
            'color'=>'integer',
            'size'=>'integer',
            'sku'=>'required|string|max:255',
            'price'=>'required',
            'retail_price'=>'required',
            'quantity'=>'required|integer'
        ]);

        $imageUrls = [];

        if($request->hasFile('img'))
        {
            foreach ($request->file('img') as $productImg) {
                $imagename = str()->uuid().'.webp';
                $manager = new ImageManager(new Driver());
                $manager->read($productImg)->toWebp()->save(storage_path("app/public/products/$imagename"));
                $imageUrls[] = "products/$imagename";
            }
        }

        $product = new Product;
        $product->name = $request->name;
        $product->img_urls = ['urls' => $imageUrls];
        $product->category_id = $request->category;
        $product->description = $request->description;
        $product->save();

        $product_entity = new ProductEntity;
        $product_entity->product_id = $product->id;
        $product_entity->color_attribute_id = $request->color;
        $product_entity->size_attribute_id = $request->size;
        $product_entity->sku = $request->sku;
        $product_entity->price = $request->price;
        $product_entity->retail_price = $request->retail_price;
        $product_entity->quantity = $request->quantity;
        $product_entity->save();

        return back()->with('success','added successfully!');
    }


    private function formatMonthlyData($data, $months)
    {
        $formatted = array_fill(0, $months, 0);
        foreach ($data as $month => $count) {
            $formatted[$month - 1] = $count;
        }
        return $formatted;
    }

    public function categories()
    {
        $user=request()->user();
        //$categories = Category::all();
        return view('admin.categories',[
                'user'=>$user,
               // 'categories' => $categories,
        ]);
    }

    public function edit_category($category)
    {
        $user = request()->user();
      //  $categories = Category::all();
       // $category = Category::find($category);
        return view('admin.editcategory',[
            'category'=>$category,
          //  'categories'=>$categories,
            'user'=>$user
        ]);
    }

    public function update_category(Request $request,$id)
    {
        $request->validate([
            'name'=>'sometimes|string',
        ]);
       // $product = Category::find($id);
       // $product->category = $request->name;
      //  $product->save();
        return back()->with('success','updated successfully!');
    }

    public function destroy_category($category):RedirectResponse
    {
      //  $category = Category::find($category);
        $category->delete();
        return back()->with('success','deleted successfully!');
    }

    public function edit($product)
    {
        $user = request()->user();
      //  $categories = Category::all();
        $product = Product::with(['category'])->find($product);
      //  $images = ProductImage::where('product_id','=',$product->id)->get();
        return view('admin.editproduct',[
            'product'=>$product,
          ///  'images'=>$images,
           // 'categories'=>$categories,
            'user'=>$user
        ]);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'sometimes|string',
            'category_id'=>'sometimes',
            'price'=>'sometimes',
            'retail_price'=>'sometimes',
            'description'=>'sometimes|string'
        ]);
        $product = Product::find($id);
        $product->name = $request->name;
        $product->category_id = $request->category;
        $product->price = $request->price;
        $product->retail_price = $request->retail_price;
        $product->description = $request->description;
        $product->update();
        return back()->with('success','updated successfully!');
    }
/*
    public function moreImages(Request $request, $id)
    {
        $request->validate([
            'img.*'=> 'required|image'
        ]);

        foreach ($request->file('img') as $productImg) {
            $imagename = str()->uuid().'.webp';
            $manager = new ImageManager(new Driver());
            $manager->read($productImg)->scaleDown(360,388)->toWebp()->save(storage_path('app/public/products/'.$imagename));
           // $image = new ProductImage;
           // $image->url = 'products/'.$imagename;
           // $image->product_id = $id;
           // $image->save();
        }
        return back()->with('success','added successfully!');
    }

    public function destroy($product):RedirectResponse
    {
        $product = Product::find($product);
       /* $images = ProductImage::where('product_id','=',$product->id)->get();
        if(!$product&&$images) abort(404);
        $product->delete();
        foreach ($images as $image) {
            unlink(storage_path('app/public/'.$image->url));
            $image->delete();
        }
        return back()->with('success','deleted successfully!');
    }

    public function imgDelete($id)
    {
        $img = ProductImage::find($id);
        if(!$img) abort(404);
    
        $imgCount = ProductImage::where('product_id','=',$img->product_id)->count();
        if ($imgCount <= 1) {
            return back()->with('warning','Product need an image!');
        }else{
            unlink(storage_path('app/public/'.$img->url));
            $img->delete();
            return back()->with('success','image deleted!');
        }
    }*/
}
