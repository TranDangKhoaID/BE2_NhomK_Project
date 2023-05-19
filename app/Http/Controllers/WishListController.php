<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WishList;
use Illuminate\Support\Facades\Auth;

class WishListController extends Controller
{
    public function showWishListForm(){ 
        $userId = Auth::id();
        $wishs = WishList::where('user_id', $userId)->get();
        
        return view('wishlist', compact('wishs'));
    }
    public function addToWishList(Request $request)
    {
        $productId = $request->input('product_id');
        $name = $request->input('name');
        $price = $request->input('price');
        $image = $request->input('image');
        $userID = $request->input('userID');

        // Kiểm tra sản phẩm đã tồn tại trong wish list hay chưa
        $existingCartItem = WishList::where('user_id', $userID)
                                ->where('product_id', $productId)
                                ->first();

        if ($existingCartItem) {
            WishList::where('user_id', $userID)
                    ->where('product_id', $productId)
                    ->delete();
        }
       $lists = new WishList();
       $lists->name = $name;
       $lists->image = $image;
       $lists->price = $price;
       $lists->user_id = $userID;    
       $lists->product_id = $productId;
   
       $lists->save();

       return redirect()->back()->with('success', 'Product added to wish list successfully.');
    }
    public function removeFromWishList(Request $request)
    {
        $productId = $request->input('product_id');
        $userID = $request->input('userID');
        
        $lists = WishList::where('user_id', $userID)->first();

        if ($lists) {
            // Tìm và xóa sản phẩm khỏi giỏ hàng
            $listItem = WishList::where('user_id', $userID)
                ->where('product_id', $productId)
                ->delete();
            
            if ($listItem) {
                return redirect()->back()->with('success', 'Product removed from wishlist.');
            }
        }
        
        return redirect()->back()->with('error', 'Product not found in wishlist.');
    }
}
