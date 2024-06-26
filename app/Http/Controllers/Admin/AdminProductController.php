<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Manufacture;
use App\Models\Protype;

class AdminProductController extends Controller
{
    public function index()
    {
        $manufactures = Manufacture::all();
        $protypes = Protype::all();
        return view('admin.addproduct',compact('manufactures','protypes'));
    }
    public function indexEdit($id)
    {
        $product = Product::find($id);
        if(!$product){
            return redirect()->route('admin.products');
        }
        $manufactures = Manufacture::all();
        $protypes = Protype::all();
        return view('admin.editproduct',compact('product','manufactures','protypes'));
    }
    public function showProducts()
    {
        $products = Product::all();
        
        $products = Product::paginate(5);
        $manufactures = Manufacture::all();
        $protypes = Protype::all();
        return view('admin.products',compact('products','manufactures','protypes'));
    }
    //add product
    public function addProduct(Request $request)
    {
        // Kiểm tra các trường không được để trống
        $request->validate([
            'name' => 'required|max:50',
            'price' => 'required|max:50',
            'manufacture' => 'required|max:50',
            'protype' => 'required|max:50',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|max:255',
            'feature' => 'required|max:50',
        ]);
        $product = new Product;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->manu_id = $request->input('manufacture');
        $product->type_id = $request->input('protype');
        $product->description = $request->input('description');
        $product->feature = $request->input('feature');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName(); // Đính kèm thời gian vào tên tệp
            $image->move(public_path('img/product'), $imageName);
            $product->image = $imageName;
        }                      
        $product->save();
        return redirect()->route('admin.addproduct')->with('success', 'Product added successfully.');
    }
    public function editProduct(Request $request, $id)
    {
        $product = Product::find($id);
        if(!$product){
            return redirect()->route('admin.products');
        }
        
        $request->validate([
            'name' => 'required|max:50',
            'price' => 'required|max:50',
            'manufacture' => 'required|max:50',
            'protype' => 'required|max:50',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|max:255',
            'feature' => 'required|max:50',
        ]);

        // Cập nhật thông tin sản phẩm
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->manu_id = $request->input('manufacture');
        $product->type_id = $request->input('protype');
        $product->description = $request->input('description');
        $product->feature = $request->input('feature');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName(); // Đính kèm thời gian vào tên tệp
            $image->move(public_path('img/product'), $imageName);
            $product->image = $imageName;
        }                 
        // Lưu thông tin sản phẩm
        $product->save();

        // Chuyển hướng về trang danh sách sản phẩm hoặc trang chi tiết sản phẩm
        return redirect()->route('admin.editproducts', ['id' => $product->id])->with('success', 'Sản phẩm đã được cập nhật thành công.');
    }
    public function deleteProduct($id)
    {
        // Tìm sản phẩm cần xóa
        $product = Product::find($id);
        if(!$product){
            return redirect()->route('admin.products');
        }
        // Xóa sản phẩm
        $product->delete();

        // Chuyển hướng về trang danh sách sản phẩm hoặc trang khác
        return redirect()->route('admin.products')->with('success', 'Sản phẩm đã được xóa thành công.');
    }

}
