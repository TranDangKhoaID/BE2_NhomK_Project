<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;

class AdminRegisterController extends Controller
{
    public function index(){
        {
            return view('admin.register');
        }
    }
    public function AdminRegister(Request $request)
    {
        // Kiểm tra mật khẩu và email
        $fname =  $request->input('fname');
        $password = $request->input('password');
        $confirmPassword = $request->input('confirm-password');
        $email = $request->input('email');

        // Kiểm tra mật khẩu phải có ít nhất 6 ký tự
        if (strlen($password) < 6) {
            return redirect()->back()->withInput()->withErrors(['password' => 'Mật khẩu phải có ít nhất 6 ký tự.']);
        }
         // Kiểm tra xác nhận mật khẩu
        if ($password !== $confirmPassword) {
            return redirect()->back()->withInput()->withErrors(['confirm-password' => 'Xác nhận mật khẩu không khớp.']);
        }

        // Kiểm tra email không được trùng
        if (Admin::where('email', $email)->exists()) {
            return redirect()->back()->withInput()->withErrors(['email' => 'Email đã tồn tại.']);
        }

        // Lưu dữ liệu vào bảng users
        $admin = new Admin();
        $admin->name = $request->input('fname');
        $admin->password = bcrypt($password);
        $admin->email = $email;
        $admin->save();

        // Chuyển hướng đến trang login
        Session::flash('success', 'Đăng ký thành công!');
        return redirect()->route('admin.login');
    }

}
