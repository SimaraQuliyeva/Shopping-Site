<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::query()->get();
        return view('front.pages.shop', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function show(string $id)
    {
        $product = Product::where('id', $id)->first();
        $products = Product::all();
        return view('front.pages.shop-single-page', compact('products', 'product'));

    }


    public function removeProduct(Request $request)
    {
        $productId = $request->product_id;
//        $size = $request->input('size');
//        $userId = Auth::id();
//        dd($productId);
        Cart::where('product_id', $productId)
//            ->where('size', $size)
            ->where('user_id', Auth::id())
            ->delete();

        return redirect()->back();
    }

}
