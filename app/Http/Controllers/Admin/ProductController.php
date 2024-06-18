<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
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
        $Tcustomers = Customer::count();
        $Torders = Order::count();

        $productsIncrease = Product::query()
                            ->whereDate("created_at",">=", Carbon::yesterday())
                            ->whereDate("created_at","<=", Carbon::now())
                            ->count();
        if ($Tproducts==0) {
            $pIncrease = 0;
        }else{
            $pIncrease = $this->getIncrease($productsIncrease,$Tproducts);
        }

        $ordersIncrease = Order::query()
                            ->whereDate("created_at",">=", Carbon::yesterday())
                            ->whereDate("created_at","<=", Carbon::now())
                            ->count();
        if ($Torders==0) {
            $cIncrease = 0;
        }else{
            $oIncrease = $this->getIncrease($ordersIncrease,$Torders);
        }
        
        $customersIncrease = Customer::query()
                            ->whereDate("created_at",">=", Carbon::yesterday())
                            ->whereDate("created_at","<=", Carbon::now())
                            ->count();
        if ($Tcustomers==0) {
            $cIncrease = 0;
        }else{
            $cIncrease = $this->getIncrease($customersIncrease,$Tcustomers);
        }

        $user = $request->user();
        return view('admin.index',[
            'Tproducts'=>$Tproducts,
            'productsIncrease'=> $pIncrease,
            'ordersIncrease'=> $oIncrease,
            'customersIncrease'=> $cIncrease,
            'Tcustomers'=> $Tcustomers,
            'Torders' => $Torders,
            'user'=>$user
        ]);
    }

    public function products(Request $request)
    {
        $user = $request->user();
        $products = Product::with('images')->paginate(10);
        return view('admin.products',[
            'products'=>$products,
            'user'=>$user
        ]);
    }

    public function customers()
    {
        $user=request()->user();
        $customers = Customer::paginate(20);
        return view('admin.customers',[
                'user'=>$user,
                'customers'=>$customers
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
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

    public function edit($product)
    {
        $user = request()->user();
        $product = Product::find($product);
        $images = ProductImage::where('product_id','=',$product->id)->get();
        return view('admin.editproduct',[
            'product'=>$product,
            'images'=>$images,
            'user'=>$user
        ]);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'sometimes|string',
            'price'=>'sometimes',
            'retail_price'=>'sometimes',
            'description'=>'sometimes|string'
        ]);
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->retail_price = $request->retail_price;
        $product->description = $request->description;
        $product->save();
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
