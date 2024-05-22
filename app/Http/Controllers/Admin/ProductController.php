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
    public function index()
    {
        $Tproducts = Product::count();
        return view('admin.index',['Tproducts'=>$Tproducts]);
    }

    public function products()
    {
        $products = Product::paginate(5);
        return view('admin.products',['products'=>$products]);
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

        foreach ($request->file('img') as $imagefile) {
            $imagename = str()->uuid().'.webp';
            $imagedetails = new ProductImage;

            
            $manager = new ImageManager(new Driver());
            $image = $manager->read($imagefile);
            $image = $image->scale(360,360);
            $image->toWebp()->save(storage_path('app/public/products/'.$imagename));
            //$path =  $imagefile->store('products');
            //$path =Storage::disk('public')->put('products',$imagefile);
            $imagedetails->url = 'products/'.$imagename;
            $imagedetails->product_id = $product->id;
            $imagedetails->save();
        }
        return back()->with('success','Product added successfully');
    }

    public function edit($product)
    {
        $product = Product::find($product);
        return view('admin.editproduct',['product'=>$product]);
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
        Toastr::success('Products details updated successfully', 'Update', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.products.list')->with('success','Details updated successfully');
    }

    public function destroy($product):RedirectResponse
    {
        $product = Product::find($product);
        
            $product->delete();
        Toastr::warning('Product deleted!', 'Delete', ["positionClass" => "toast-top-right"]);
        return back();
    }
}
