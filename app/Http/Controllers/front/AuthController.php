<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'email'=> 'required|max:255|unique:users',
            'password'=>'required | min:4',
            'password_confirmation'=>'required_with:password|same:password'
        ]);
        $user=new User();
        $user->email=$request->email;
        $user->name=$request->name;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('front.home');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
//        $remember = $request->has('remember');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('front.products');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('front.home');
    }

}
