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
        
        $grandTotal = 0;

        foreach ($carts as $cart) {
            $cart->subtotal = $cart->price * $cart->quantity;
            $grandTotal += $cart->subtotal;
        }
        return view('cart', compact('carts','grandTotal'));
    }
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        $name = $request->input('name');
        $price = $request->input('price');
        $image = $request->input('image');
        $userID = $request->input('userID');

        // Kiểm tra sản phẩm đã tồn tại trong giỏ hàng hay chưa
        $existingCartItem = Cart::where('user_id', $userID)
                                ->where('product_id', $productId)
                                ->first();

        if ($existingCartItem) {
            // Nếu sản phẩm đã tồn tại, cộng dồn số lượng sản phẩm
            $existingCartItem->quantity += $quantity;
            $existingCartItem->subtotal = $existingCartItem->quantity * $price;
            $existingCartItem->save();

            return redirect()->back()->with('success', 'Product quantity updated in cart successfully.');
        } else {
            // Nếu sản phẩm chưa tồn tại, thêm sản phẩm vào giỏ hàng
            $cart = new Cart();
            $cart->name = $name;
            $cart->image = $image;
            $cart->price = $price;
            $cart->quantity = $quantity;
            $cart->user_id = $userID;    
            $cart->product_id = $productId;
            $cart->subtotal = $cart->quantity * $price;
        
            $cart->save();

            return redirect()->back()->with('success', 'Product added to cart successfully.');
        }
    }
    public function removeFromCart(Request $request)
    {
        $productId = $request->input('product_id');
        $userID = $request->input('userID');
        
        $cart = Cart::where('user_id', $userID)->first();

        if ($cart) {
            // Tìm và xóa sản phẩm khỏi giỏ hàng
            $cartItem = Cart::where('user_id', $userID)
                ->where('product_id', $productId)
                ->delete();
            
            if ($cartItem) {
                return redirect()->back()->with('success', 'Product removed from cart.');
            }
        }
        
        return redirect()->back()->with('error', 'Product not found in cart.');
    }


}
