<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\ImageManager;
use App\Models\Image as ProductImage;
use Illuminate\Http\RedirectResponse;
use Intervention\Image\Drivers\Gd\Driver;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $Tproducts = Product::count();
        $user = $request->user();
        return view('admin.index',[
            'Tproducts'=>$Tproducts,
            'user'=>$user
        ]);
    }

    public function products(Request $request)
    {
        $user = $request->user();
        $products = Product::paginate(5);
        return view('admin.products',[
            'products'=>$products,
            'user'=>$user
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
        return back()->with('success','Product added successfully');
    }

    public function edit($product)
    {
        $user = request()->user();
        $product = Product::find($product);
        return view('admin.editproduct',[
            'product'=>$product,
            'user'=>$user
        ]);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required|string',
            'price'=>'required',
            'retail_price'=>'required',
            'description'=>'required|string'
        ],
        [
            'name.required'=>'Product name required',
            'price.required'=>'Product price required',
            'retail_price.required'=>'Product retail price required',
            'description.required'=>'Product description required',
        ]);
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->retail_price = $request->retail_price;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('admin.products.list')->with('success','Details updated successfully');
    }

    public function destroy($product):RedirectResponse
    {
        $product = Product::find($product);
        $product->delete();
        return back();
    }
}
