<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showAll()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }
    public function showAllShop()
    {
        $products = Product::all();
        return view('shop', compact('products'));
    }
    public function showProductDetail($id)
    {
        // Lấy thông tin sản phẩm từ CSDL dựa trên $id
        $product = Product::find($id);

        // Kiểm tra xem sản phẩm có tồn tại hay không
        if (!$product) {
             abort(404);
        }

        // Lấy danh sách sản phẩm có cùng manu_id
            $productsWithSameManuId = Product::where('manu_id', $product->manu_id)
            ->where('id', '!=', $product->id) // Loại bỏ sản phẩm hiện tại khỏi danh sách
            ->get();

        // Trả về view single-product.blade.php và truyền dữ liệu sản phẩm cùng danh sách sản phẩm có cùng manu_id
        return view('single-product', compact('product', 'productsWithSameManuId'));
    }
   
}
