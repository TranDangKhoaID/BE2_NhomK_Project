<?php

namespace App\Http\Controllers;

use Dotenv\Util\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class LoginController extends Controller
{
    public function showLoginForm(){
        if (Auth::check()) {
            return redirect()->route('index'); // Chuyển hướng đến trang đăng nhập
        }
        return view('auth.login');        
    }
    public function showForgotPasswordForm(){
        if (Auth::check()) {
            return redirect()->route('index'); // Chuyển hướng đến trang đăng nhập
        }
        return view('auth.forgotpassword');    
    }
    public function showResetForm($token)
    {
        if (Auth::check()) {
            return redirect()->route('index'); // Chuyển hướng đến trang đăng nhập
        }
        return view('auth.resetpassword', ['token' => $token]);
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
    
    //send link password
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with('status', trans($status))
            : back()->withErrors(['email' => trans($status)]);
    }
    //reset
   
}
