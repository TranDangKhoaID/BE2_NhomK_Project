<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm(){
        {
            return view('auth.login');
        }
    }
    public function login(Request $request)
    {
        // Kiểm tra thông tin đăng nhập
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Kiểm tra trạng thái block của người dùng
            $user = Auth::user();
            if ($user->is_blocked) {
                // Người dùng bị block, hiển thị thông báo
                return redirect()->back()->withInput()->withErrors(['auth.login' => 'Your account has been locked.']);
            }
    
            // Đăng nhập thành công, chuyển hướng đến trang index
            return redirect()->route('index');
        }

        // Đăng nhập thất bại, chuyển hướng trở lại trang login với thông báo lỗi
        return redirect()->back()->withInput()->withErrors(['auth.login' => 'Đăng nhập không thành công. Vui lòng kiểm tra lại thông tin đăng nhập.']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}