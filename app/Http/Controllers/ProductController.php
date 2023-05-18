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
        $newProducts = Product::latest('created_at')->take(10)->get();
        $loggedInUserId = Auth::id();
        return view('index', compact('products','newProducts','loggedInUserId'));
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
    //Lan Anh
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
    //Lan Anh
    //tìm kiếm sản phẩm theo tên
    public function searchProducts(Request $request)
    {
        $searchTerm = $request->input('search');
        $products = Product::where('name', 'LIKE', '%' . $searchTerm . '%')->paginate(6);
        $manufactures = Manufacture::all();
        $protypes = Protype::all();

        return view('shop', compact('products', 'manufactures', 'protypes'));
    }
    //Lan Anh
    //Lấy tất cả sản phẩm theo manufactures
    public function manufactureProduct($manu_id)
    {
        $manufacture = Manufacture::findOrFail($manu_id); 
        $loggedInUserId = Auth::id();
        // Lấy danh sách sản phẩm của nhà sản xuất
        $products = Product::where('manu_id', $manu_id)->paginate(6);

        $manufactures = Manufacture::all();
        $protypes = Protype::all();

        return view('shop', compact('manufacture', 'products', 'manufactures', 'protypes','loggedInUserId'));
    }
    //Lan Anh
    //Lấy tất cả sản phẩm theo protype
    public function protypeProduct($type_id)
    {
        $protype = Protype::findOrFail($type_id);
        $loggedInUserId = Auth::id();
        // Lấy danh sách sản phẩm của nhà sản xuất
        $products = Product::where('type_id', $type_id)->paginate(6);

        $manufactures = Manufacture::all();
        $protypes = Protype::all();

        return view('shop', compact('protype', 'products', 'manufactures', 'protypes','loggedInUserId'));
    }
    //tìm kiếm sản phẩm theo slider price
    public function searchSliderPriceProducts(Request $request)
    {
        $price = $request->input('price');

        // Loại bỏ dấu "$" và khoảng trắng trong giá trị price

        // Tách giá trị tối thiểu và tối đa từ giá nhập vào
        $priceRange = explode('--', $price);
        $minPrice = (float) trim($priceRange[0]);
        $maxPrice = (float) trim($priceRange[1]);

        // Truy vấn các sản phẩm có giá trong khoảng từ minPrice đến maxPrice
        $products = Product::whereBetween('price', [$minPrice, $maxPrice])->paginate(6);
        $manufactures = Manufacture::all();
        $protypes = Protype::all();

        return view('shop', compact('products', 'manufactures', 'protypes'));
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
