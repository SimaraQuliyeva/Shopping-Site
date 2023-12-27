<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
//        $addtocart=Cart::query()->get();
        return view('front.pages.cart');
    }

    public function calculateTotalPrice($products)
    {
        $totalPrice = 0;

        foreach ($products as $product) {
//            dd($products);
            $totalPrice += $product->quantity * $product->price;
        }

        return $totalPrice;
    }

    public function productForm(Request $request)
    {
        if ($request->id && $request->quantity > 0 && $request->option) {
            $existingCartItems = Cart::where('product_id', $request->id)
                ->where('user_id', auth()->id())
                ->where('size', $request->option)
                ->first();

            if (!$existingCartItems) {
                Cart::create([
                    'product_id' => $request->id,
                    'quantity' => $request->quantity,
                    'size' => $request->option,
                    'user_id' => Auth::id(),
                ]);
            } else {
                $existingCartItems->quantity += $request->quantity;
                $existingCartItems->save();
            }
        }


//        $user = Auth::user();
//        $products = Cart::where('user_id', auth()->id())->get();
//        dd($catrs);
        $products = Cart::join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', auth()->id())
            ->select('products.*', 'carts.*')
            ->get();
        $totalPrice = $this->calculateTotalPrice($products);

//        dd($products);
        return view('front.pages.cart', compact('products','totalPrice'));


//        return view('front.pages.cart', compact('products'));
    }

}
