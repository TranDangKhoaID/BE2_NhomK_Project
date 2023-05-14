<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    public function index()
    {
        // Xử lý logic cho trang đăng nhập của quản trị viên
        // Kiểm tra nếu người dùng đã đăng nhập
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.index');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {

        

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Đăng nhập thành công, chuyển hướng đến trang index
            return redirect()->route('admin.index');
        }else {
            // Đăng nhập không thành công, xử lý thông báo lỗi và chuyển hướng trở lại trang đăng nhập
            return redirect()->route('admin.login')->withErrors('Thông tin đăng nhập không chính xác');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
