<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyController extends Controller
{
    public function index()
    {
        // Lấy danh sách sản phẩm từ cơ sở dữ liệu hoặc bất kỳ nguồn dữ liệu nào khác
        $products = Product::all();
        $loggedInUserId = Auth::id();

        // Trả về view index.blade.php và truyền biến products vào view
        return view('index', ['products' => $products, 'loggedInUserId' => $loggedInUserId]);

    }
}
