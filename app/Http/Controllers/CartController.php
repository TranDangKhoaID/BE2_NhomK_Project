<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function showCartForm(){

        $userId = Auth::id();
        $carts = Cart::where('user_id', $userId)->get();

        return view('cart', compact('carts'));
    }
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        $name = $request->input('name');
        $price = $request->input('price');
        $image = $request->input('image');
        $userID = $request->input('userID');

        $cart = new Cart();
        $cart->name = $name;
        $cart->image = $image;
        $cart->price = $price;
        $cart->quantity = $quantity;
        $cart->user_id = $userID;
        $cart->product_id = $productId;
 
        $cart->save();

        return redirect()->back()->with('success', 'Product added to cart successfully.');
    }
}
