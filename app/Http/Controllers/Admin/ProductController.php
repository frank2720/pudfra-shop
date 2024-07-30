<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
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
        $categories = Category::all();
        $Tcustomers = Customer::count();
        $TCustomerBusiness = Customer::where("type","B")->count();
        $TCustomerIndividual = Customer::where("type","I")->count();
        $Torders = Order::count();

        $yesterday =  Carbon::yesterday();
        $today = Carbon::now();

        $startDate = Carbon::now()->subMonths(8)->startOfMonth();
        $endDate = Carbon::now()->endOfMonth();


        $productsIncrease = Product::whereBetween('created_at',[$yesterday,$today])->count();
        $Tproducts==0?$pIncrease = 0:$pIncrease = $this->getIncrease($productsIncrease,$Tproducts);
        
        $ordersIncrease = Order::whereBetween('created_at',[$yesterday,$today])->count();
        $Torders==0?$cIncrease = 0:$oIncrease = $this->getIncrease($ordersIncrease,$Torders);
        
        $customersIncrease = Customer::whereBetween('created_at',[$yesterday,$today])->count();
        $Tcustomers==0?$cIncrease = 0:$cIncrease = $this->getIncrease($customersIncrease,$Tcustomers);

        $products = Product::whereBetween('created_at', [$startDate, $endDate])
                        ->selectRaw('MONTH(created_at) as month, COUNT(*) as total')
                        ->groupBy('month')
                        ->pluck('total', 'month')
                        ->toArray();
        
        $orders = Order::whereBetween('created_at', [$startDate, $endDate])
                    ->selectRaw('MONTH(created_at) as month, COUNT(*) as total')
                    ->groupBy('month')
                    ->pluck('total', 'month')
                    ->toArray();

        $customers = Customer::whereBetween('created_at', [$startDate, $endDate])
                        ->selectRaw('MONTH(created_at) as month, COUNT(*) as total')
                        ->groupBy('month')
                        ->pluck('total', 'month')
                        ->toArray();

        $months = collect(range(0, 8))->map(function ($i) {
            return Carbon::now()->subMonths($i)->format('M');
        })->reverse()->values()->all();

        $monthlyProducts = $this->formatMonthlyData($products, 9);
        $monthlyOrders = $this->formatMonthlyData($orders, 9);
        $monthlyCustomers = $this->formatMonthlyData($customers, 9);

        /*$data = DB::table('products')
                    ->join('categories', 'products.category_id', '=', 'categories.id')
                    ->select('categories.category as category', DB::raw('count(*) as total'))
                    ->groupBy('categories.category')
                    ->get();*/

        $categoryData = Category::withCount('products')
                            ->get()
                            ->map(function($category) {
                                return [
                                    'category' => $category->category,
                                    'total' => $category->products_count
                                ];
                            });
        

        $user = $request->user();
        return view('admin.index',[
            'Tproducts'=>$Tproducts,
            'productsIncrease'=> $pIncrease,
            'ordersIncrease'=> $oIncrease,
            'customersIncrease'=> $cIncrease,
            'Tcustomers'=> $Tcustomers,
            'TCustomerIndividual'=> $TCustomerIndividual,
            'TCustomerBusiness'=>$TCustomerBusiness,
            'Torders' => $Torders,
            'user'=>$user,
            'categoryData'=>$categoryData,
            'categories'=>$categories,

            'months' => $months,
            'monthlyProducts' => $monthlyProducts,
            'monthlyOrders' => $monthlyOrders,
            'monthlyCustomers' => $monthlyCustomers
        ]);
    }

    private function formatMonthlyData($data, $months)
    {
        $formatted = array_fill(0, $months, 0);
        foreach ($data as $month => $count) {
            $formatted[$month - 1] = $count;
        }
        return $formatted;
    }

    public function products(Request $request)
    {
        $user = $request->user();
        $products = Product::with(['images','category'])->paginate(10);
        $categories = Category::all();
        return view('admin.products',[
            'products'=>$products,
            'categories' => $categories,
            'user'=>$user
        ]);
    }

    public function customers()
    {
        $user=request()->user();
        $customers = Customer::orderBy('name')->paginate(20);
        $categories = Category::all();
        return view('admin.customers',[
                'user'=>$user,
                'customers'=>$customers,
                'categories' => $categories,
        ]);
    }

    public function categories()
    {
        $user=request()->user();
        $categories = Category::all();
        return view('admin.categories',[
                'user'=>$user,
                'categories' => $categories,
        ]);
    }

    public function edit_category($category)
    {
        $user = request()->user();
        $categories = Category::all();
        $category = Category::find($category);
        return view('admin.editcategory',[
            'category'=>$category,
            'categories'=>$categories,
            'user'=>$user
        ]);
    }

    public function update_category(Request $request,$id)
    {
        $request->validate([
            'name'=>'sometimes|string',
        ]);
        $product = Category::find($id);
        $product->category = $request->name;
        $product->save();
        return back()->with('success','updated successfully!');
    }

    public function destroy_category($category):RedirectResponse
    {
        $category = Category::find($category);
        $category->delete();
        return back()->with('success','deleted successfully!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'category'=>'required',
            'price'=>'required',
            'retail_price'=>'required',
            'description'=>'required|string',
            'img.*'=>'required|image',
        ],
        [
            'name.required'=>'Product name required',
            'price.required'=>'Product price required',
            'retail_price.required'=>'Product retail price required',
            'description.required'=>'Product description required',
            'img.required'=>'Upload product image',
            'img.image'=>'file must be an image'

        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->category_id = $request->category;
        $product->price = $request->price;
        $product->retail_price = $request->retail_price;
        $product->description = $request->description;
        $product->save();

        foreach ($request->file('img') as $productImg) {
            $imagename = str()->uuid().'.webp';
            $manager = new ImageManager(new Driver());
            $manager->read($productImg)->scale(360,360)->toWebp()->save(storage_path('app/public/products/'.$imagename));
            //$path =  $productImg->store('products');
            //$path =Storage::disk('public')->put('products',$productImg);
            $image = new ProductImage;
            $image->url = 'products/'.$imagename;
            $image->product_id = $product->id;
            $image->save();
        }
        return back()->with('success','added successfully!');
    }

    public function markAsRead(){
        Auth::user()->unreadNotifications->markAsRead();
        return redirect()->back();
    }
    

    public function edit($product)
    {
        $user = request()->user();
        $categories = Category::all();
        $product = Product::with(['category'])->find($product);
        $images = ProductImage::where('product_id','=',$product->id)->get();
        return view('admin.editproduct',[
            'product'=>$product,
            'images'=>$images,
            'categories'=>$categories,
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

    public function moreImages(Request $request, $id)
    {
        $request->validate([
            'img.*'=> 'required|image'
        ]);

        foreach ($request->file('img') as $productImg) {
            $imagename = str()->uuid().'.webp';
            $manager = new ImageManager(new Driver());
            $manager->read($productImg)->scale(360,360)->toWebp()->save(storage_path('app/public/products/'.$imagename));
            $image = new ProductImage;
            $image->url = 'products/'.$imagename;
            $image->product_id = $id;
            $image->save();
        }
        return back()->with('success','added successfully!');
    }

    public function destroy($product):RedirectResponse
    {
        $product = Product::find($product);
        $images = ProductImage::where('product_id','=',$product->id)->get();
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
    }
}
