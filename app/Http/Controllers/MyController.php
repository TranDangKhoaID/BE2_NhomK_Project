<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Slider;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyController extends Controller
{
    public function index()
    {
        // Lấy danh sách sản phẩm từ cơ sở dữ liệu hoặc bất kỳ nguồn dữ liệu nào khác
        $products = Product::all();
        $newProducts = Product::latest('created_at')->take(10)->get();
        $loggedInUserId = Auth::id();
        $sliders = Slider::all();
        $blogs = Blog::paginate(4);
        $carts = Cart::where('user_id', $loggedInUserId)->get();
        $productCount = [];

        foreach ($products as $product) {
            $count = $carts->where('product_id', $product->id)->count();
            $productCount[$product->id] = $count;
        }

        return view('index', compact('blogs','sliders','newProducts','products', 'loggedInUserId', 'productCount'));

    }
}
