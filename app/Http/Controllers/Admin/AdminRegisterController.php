<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AdminRegisterController extends Controller
{
    public function index(){
        
        // Kiểm tra nếu người dùng đã đăng nhập
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.index');
        }

        return view('admin.register');    
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
            return redirect()->back()->withInput()->withErrors(['password' => 'Password need less than 6 charaters.']);
        }
         // Kiểm tra xác nhận mật khẩu
        if ($password !== $confirmPassword) {
            return redirect()->back()->withInput()->withErrors(['confirm-password' => 'Confirm password invalid.']);
        }

        // Kiểm tra email không được trùng
        if (Admin::where('email', $email)->exists()) {
            return redirect()->back()->withInput()->withErrors(['email' => 'Email is exist.']);
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
