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
}
