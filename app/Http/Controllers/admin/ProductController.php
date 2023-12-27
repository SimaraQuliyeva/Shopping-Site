<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        // Validate elemek
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'description' => 'required',
//            'image'=>'required'
        ]);

        // productu save etmek
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->input('price');
        $product->description = $request->input('description');
//        $product->image = $request->input('image');
        $product->save();

        return redirect()->route('admin.products')->with('success', 'Added.');

    }

    public function destroy(Request $request)
    {
        $productId = $request->input('productId');
//        dd($request->all());
        $product = Product::where('id', $productId)->first();
//        dd($product);
//        if ($product->img) {
//            Storage::delete($product->img);
//        }
        Product::where('id', $productId)->delete();

        return redirect()->route('admin.products')->with('success', 'Deleted.');
    }

    public function  updateProducts(Request $request){
        $product = Product::find($request->productId);
//        dd($product->title);
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request){

        $credentials = $request->validate([
            'name' =>'required',
            'price' =>'required',
//            'discount' =>'required',
            'description' =>'required',
//            'summary_text' =>'required',
//            'status' =>'required',
        ]);
        $product = Product::find($request->productId);
//        dd($product);
//        $oldImage = $product->img;

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
//            'discount' =>$request->discount,
            'description' => $request->description,
//            'summary_text' => $request->summary_text,
//            'status' => $request->status,
        ]);

//        if ($request->hasFile('image')) {
//            $newImage = $request->file('image')->store('uploads');
//            $product->update(['img' => $newImage]);
//            Storage::delete($oldImage);
//        } else {
//            $product->update(['img' => $oldImage]);
//        }

        return redirect()->route('admin.products');
    }
}
