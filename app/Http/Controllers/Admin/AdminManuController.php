<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manufacture;

class AdminManuController extends Controller
{
    public function index()
    {
        $manufactures = Manufacture::all();
        return view('admin.manufactures',compact('manufactures'));
    }
    public function indexAdd()
    { 
        return view('admin.addmanufacture');
    }
    public function indexEdit(Request $request, $manu_id)
    { 
        $manufacture = Manufacture::where('manu_id', $manu_id)->firstOrFail();
        return view('admin.editmanufacture', compact('manufacture'));
    }
    public function addManu(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        $manuName = $request->input('name');

        // Kiểm tra nếu tên nhà sản xuất đã tồn tại
        $existingManu = Manufacture::where('manu_name', $manuName)->first();
        if ($existingManu) {
            return redirect()->route('admin.addmanufacture')->with('error', 'Manufacture already exists.');
        }

        $manu = new Manufacture;
        $manu->manu_name = $request->input('name');
        $manu->save();

        return redirect()->route('admin.addmanufacture')->with('success', 'Manufacture added successfully.');
    }
    public function editManu(Request $request, $manu_id)
    {
        $manufacture = Manufacture::where('manu_id', $manu_id)->firstOrFail();

        $request->validate([
            'name' => 'required',
        ]);

        // Cập nhật thông tin
        $manufacture->manu_name = $request->input('name');
        $manufacture->save();

        // Chuyển hướng về trang danh sách
        return redirect()->route('admin.manufactures')->with('success', 'Đã cập nhật thành công.');
    }
    public function deleteManu($manu_id)
    {
        // Tìm sản phẩm cần xóa
        $manufacture = Manufacture::where('manu_id', $manu_id)->firstOrFail();

        // Xóa sản phẩm
        $manufacture->delete();

        // Chuyển hướng về trang danh sách sản phẩm hoặc trang khác
        return redirect()->route('admin.manufactures')->with('success', 'Xóa thành công.');
    }

}
