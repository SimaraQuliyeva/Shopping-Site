<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function formCheck(){
//        $orders = new Order();
//        $cartItems = Cart::where('user_id', auth()->id())->with('product')->get();
//        $totalPrice=$cartItems->sum(function ($cart){
//            return $cart->product->price*$cart->quantity;
//        });
        return view('front.pages.thankyou');
    }
    public function checkout (){
        $carts = Cart::where('user_id', auth()->id())->with('product')->get();
//        $cartController = new CartController();
//        $totalPrice = $cartController->calculateTotalPrice($carts);
//        dd($carts);
//        $user=auth()->user();
//        $carts=Cart::query()->whereUserId($user->id)-get();
        $totalPrice=$carts->sum(function ($cart){
            return $cart->product->price*$cart->quantity;
        });
return view('front.pages.checkout', compact(['carts','totalPrice']));
//        return redirect()->route('front.checkout')->with('totalPrice', $totalPrice);
    }


    public function showThankYou (){
//        dd($request->all());
        return view('front.pages.thankyou');
    }

        public function thankYou(Request $request)
        {
//            dd($request->all());
            $cartItems = Cart::where('user_id', auth()->id())->with('product')->get();
            $totalPrice=$cartItems->sum(function ($cart){
                return $cart->product->price*$cart->quantity;
            });

            // Sifariş yaradıram
            $orders = new Order();
            $orders=Order::with('products');
//            dd($orders);
            $orders->user_id = auth()->id();
            $orders->firstName = $request->input('fName');
            $orders->lastName = $request->input('lName');
            $orders->phone = $request->input('phoneNumb');
            $orders->email = $request->input('email');
            $orders->address = $request->input('address');
            $orders->totalPrice = $totalPrice;
//          $order->status = 'default';
            $orders->save();
            $orderId = $orders->id;
            $orderedProducts = $orders->products;


            // infoları əlavə edirəm
            foreach ($cartItems as $cartItem) {
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $orders->id;
                $orderDetail->product_id = $cartItem->product_id;
                $orderDetail->quantity = $cartItem->quantity;
                $orderDetail->size = $cartItem->size;
                $orderDetail->save();
            }

            // Digərlərini əlavə edirəm
//            $order->firstName = $request->input('fName');
//            $order->lastName = $request->input('lName');
//            $order->phone = $request->input('phoneNumb');
//            $order->email = $request->input('email');
//            $order->address = $request->input('address');
//            $order->save();

            // Sipariş alındıqdan sonra səbəti boşaldıram
            Cart::where('user_id', auth()->id())->delete();

//            return view('front.pages.thankyou', compact('orders', 'totalPrice'));

            return redirect()->route('front.thankyou')->with('totalPrice', $totalPrice);
//            return redirect()->route('front.thankyou', compact('orders', 'totalPrice', $totalPrice));

        }

    }


