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
        $password = $request->input('user-password');
        $confirmPassword = $request->input('confirm-password');
        $email = $request->input('user-email');

        // Kiểm tra mật khẩu phải có ít nhất 6 ký tự
        if (strlen($password) < 6) {
            return redirect()->back()->withInput()->withErrors(['password' => 'Mật khẩu phải có ít nhất 6 ký tự.']);
        }
         // Kiểm tra xác nhận mật khẩu
        if ($password !== $confirmPassword) {
            return redirect()->back()->withInput()->withErrors(['confirm-password' => 'Xác nhận mật khẩu không khớp.']);
        }

        // Kiểm tra email không được trùng
        if (User::where('email', $email)->exists()) {
            return redirect()->back()->withInput()->withErrors(['email' => 'Email đã tồn tại.']);
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
