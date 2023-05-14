<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminHomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth.admin:admin');
    // }

    public function index()
    {
        // Kiểm tra xem admin đã đăng nhập hay chưa
        // if (!Auth::guard('admin')->check()) {
        //     return redirect()->route('admin.login');
        // }

        return view('admin.index');
    }
}
