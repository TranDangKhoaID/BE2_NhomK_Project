<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Protype;

class AdminProtypeController extends Controller
{
    public function index()
    {
        $protypes = Protype::all();
        return view('admin.protypes',compact('protypes'));
    }
    public function indexAdd()
    { 
        return view('admin.addprotype');
    }
    public function indexEdit(Request $request, $type_id)
    { 
        $protype = Protype::where('type_id', $type_id)->first();
        if(!$protype){
            return redirect()->route('admin.protypes');
        }
        return view('admin.editprotype', compact('protype'));
    }
    public function addManu(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        $manuName = $request->input('name');

        // Kiểm tra nếu tên nhà sản xuất đã tồn tại
        $existingManu = Protype::where('type_name', $manuName)->first();
        if ($existingManu) {
            return redirect()->route('admin.addmanufacture')->with('error', 'Protype already exists.');
        }

        $manu = new Protype;
        $manu->type_name = $request->input('name');
        $manu->save();

        return redirect()->route('admin.addprotype')->with('success', 'Protype added successfully.');
    }
    public function editManu(Request $request, $type_id)
    {
        $protype = Protype::where('type_id', $type_id)->firstOrFail();

        $request->validate([
            'name' => 'required',
        ]);

        // Cập nhật thông tin
        $protype->type_name = $request->input('name');
        $protype->save();

        // Chuyển hướng về trang danh sách
        return redirect()->route('admin.protypes')->with('success', 'Đã cập nhật thành công.');
    }
    public function deleteManu($type_id)
    {
        // Tìm sản phẩm cần xóa
        $protype = Protype::where('type_id', $type_id)->first();
        if(!$protype){
            return redirect()->route('admin.protypes');
        }
        // Xóa sản phẩm
        $protype->delete();

        // Chuyển hướng về trang danh sách sản phẩm hoặc trang khác
        return redirect()->route('admin.protypes')->with('success', 'Xóa thành công.');
    }
}
