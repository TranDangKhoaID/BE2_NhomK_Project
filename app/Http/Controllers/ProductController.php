<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Manufacture;
use App\Models\Protype;
use Illuminate\Support\Facades\DB;


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
        //$products = Product::all();
        $products = Product::paginate(6);
        $manufactures = Manufacture::all();
        $protypes = Protype::all();

        
        return view('shop', compact('products','manufactures','protypes'));
    }
    //sap xep sp
    public function sortProducts(Request $request)
    {
        $sort = $request->input('sort');
        
        // Xử lý sắp xếp dựa trên giá trị của biến $sort
        if ($sort === 'name') {
            $products = Product::orderBy('name')->paginate(6); // Phân trang với 6 sản phẩm/trang
        } elseif ($sort === 'price') {
            $products = Product::orderBy('price')->paginate(6); // Phân trang với 6 sản phẩm/trang
        } else {
            $products = Product::paginate(6); // Phân trang với 6 sản phẩm/trang, giữ nguyên danh sách ban đầu nếu không có sắp xếp
        }
        // Lấy danh sách các nhà sản xuất và các loại sản phẩm (nếu cần)
        $manufactures = Manufacture::all();
        $protypes = Protype::all();

        return view('shop', compact('products', 'manufactures', 'protypes'));
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
