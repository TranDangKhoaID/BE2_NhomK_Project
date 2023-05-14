<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Billing;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout()
    {
        if (!Auth::check()) {
            return redirect()->route('login'); // Chuyển hướng đến trang đăng nhập
        }
        // Lấy thông tin giỏ hàng từ database
        $userId = Auth::id();
        $carts = Cart::where('user_id', $userId)->get();// Lấy các sản phẩm trong giỏ hàng của user_id
        $grandTotal = 0;

        foreach ($carts as $cart) {
            $cart->subtotal = $cart->price * $cart->quantity;
            $grandTotal += $cart->subtotal;
        } 
         // Kiểm tra nếu giỏ hàng trống
        if ($carts->isEmpty()) {
            return redirect()->route('cart')->with('error', 'You have not purchased the product yet');
        }
        // Truyền thông tin giỏ hàng sang trang checkout.blade.php
        return view('checkout', compact('carts', 'grandTotal', 'userId'));
    }
    public function processCheckout(Request $request)
    {
        // Kiểm tra các trường không được để trống
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
        ], [
            'fname.required' => 'Please enter your first name.',
            'lname.required' => 'Please enter your last name.',
            'phone.required' => 'Please enter your phone number.',
            'address.required' => 'Please enter your address.',
            'city.required' => 'Please enter your city.',
        ]);
        // Lưu thông tin thanh toán vào bảng "billings" trong phpMyAdmin
        $userId = Auth::id();
        $billing = new Billing;
        $billing->user_id = $userId;
        $billing->fname = $request->input('fname');
        $billing->lname = $request->input('lname');
        $billing->phone = $request->input('phone');
        $billing->address = $request->input('address');
        $billing->city = $request->input('city');
        $billing->saysomething = $request->input('saysomething');
        $billing->amount = $request->input('total');
        // Lưu các trường khác
        $billing->save();

         // Lấy danh sách sản phẩm từ giỏ hàng
        $cartItems = Cart::where('user_id', $userId)->get();

        // Lưu thông tin sản phẩm vào bảng "order_items"
        foreach ($cartItems as $cartItem) {
            $orderItem = new OrderItem;
            $orderItem->billing_id = $billing->id;
            $orderItem->product_name = $cartItem->name;
            $orderItem->quantity = $cartItem->quantity;
            $orderItem->price = $cartItem->price;
            $orderItem->save();
        }
        // Xóa hết sản phẩm trong giỏ hàng
        Cart::where('user_id', $userId)->delete();

        // Chuyển hướng đến trang index.blade.php
        return redirect()->route('index')->with('success', 'Checkout done');
    }


}
