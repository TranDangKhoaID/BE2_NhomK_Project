<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegisterForm(){
        
        if (Auth::check()) {
            return redirect()->route('index'); // Chuyển hướng đến trang đăng nhập
        }
        return view('auth.register');
        
    }
    public function register(Request $request)
    {
        // Kiểm tra mật khẩu và email
        $name = $request->input('user-name');
        $password = $request->input('user-password');
        $confirmPassword = $request->input('confirm-password');
        $email = $request->input('user-email');

        if (!$name) {
            return redirect()->back()->withInput()->withErrors(['user-name' => 'Nhập user-name.']);
        }
        if (!$email) {
            return redirect()->back()->withInput()->withErrors(['email' => 'Nhập email.']);
        }
        // Kiểm tra mật khẩu phải có ít nhất 6 ký tự
        if (strlen($password) < 6) {
            return redirect()->back()->withInput()->withErrors(['password' => 'Password less than 6 charaters.']);
        }
        if (strlen($password) > 50) {
            return redirect()->back()->withInput()->withErrors(['password' => 'Password more than 50 charaters.']);
        }
         // Kiểm tra xác nhận mật khẩu
        if ($password !== $confirmPassword) {
            return redirect()->back()->withInput()->withErrors(['confirm-password' => 'Xác nhận mật khẩu không khớp.']);
        }

        // Kiểm tra email không được trùng
        if (User::where('email', $email)->exists()) {
            return redirect()->back()->withInput()->withErrors(['email' => 'Email is exists.']);
        }

        // Lưu dữ liệu vào bảng users
        $user = new User();
        $user->name = $request->input('user-name');
        $user->password = bcrypt($password);
        $user->email = $email;
        $user->save();

        // Chuyển hướng đến trang login
        Session::flash('success', 'Đăng ký thành công!');
        return redirect()->route('login');
    }

}
