<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Slider;
use App\Models\Blog;
use App\Models\NewsLetter;
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
    public function addNewsLetter(Request $request){
        $request->validate([
            'email' => 'required|email|max:255',
        ]);

        $email = $request->input('email');

        // Kiểm tra nếu tên nhà sản xuất đã tồn tại
        $existingLetter = NewsLetter::where('email', $email)->first();
        if ($existingLetter) {
            return redirect()->route('index')->with('error', 'Email already exists.');
        }

        $letter = new NewsLetter;
        $letter->email = $request->input('email');
        $letter->save();

        return redirect()->route('index')->with('success', 'Email added successfully.');
    }
}
