<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Manufacture;
use App\Models\Protype;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showAll()
    {
        $products = Product::all();
        $loggedInUserId = Auth::id();
        return view('index', compact('products','loggedInUserId'));
    }
    public function showAllShop()
    {
        //$products = Product::all();
        $products = Product::paginate(6);
        $manufactures = Manufacture::all();
        $protypes = Protype::all();
        $loggedInUserId = Auth::id();
        return view('shop', compact('products','manufactures','protypes','loggedInUserId'));
    }
    //sap xep sp
    public function sortProducts(Request $request)
    {
        $sort = $request->input('sort');
        $loggedInUserId = Auth::id();
        
        if ($sort === 'name') {
            $products = Product::orderBy('name')->paginate(6);
        } elseif ($sort === 'price_low_to_high') {
            $products = Product::orderBy('price')->paginate(6);
        } elseif ($sort === 'price_high_to_low') {
            $products = Product::orderBy('price', 'desc')->paginate(6);
        } else {
            $products = Product::paginate(6);
        }
        
        $manufactures = Manufacture::all();
        $protypes = Protype::all();

        return view('shop', compact('products', 'manufactures', 'protypes', 'loggedInUserId'));
    }



    public function showProductDetail($id)
    {
        // Lấy thông tin sản phẩm từ CSDL dựa trên $id
        $product = Product::find($id);
        $loggedInUserId = Auth::id();
        // Kiểm tra xem sản phẩm có tồn tại hay không
        if (!$product) {
             abort(404);
        }

        // Lấy danh sách sản phẩm có cùng manu_id
            $productsWithSameManuId = Product::where('manu_id', $product->manu_id)
            ->where('id', '!=', $product->id) // Loại bỏ sản phẩm hiện tại khỏi danh sách
            ->get();

        // Trả về view single-product.blade.php và truyền dữ liệu sản phẩm cùng danh sách sản phẩm có cùng manu_id
        return view('single-product', compact('product', 'productsWithSameManuId','loggedInUserId'));
    }
   
}
