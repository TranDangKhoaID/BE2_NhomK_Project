<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth.admin:admin');
    // }
    public function index()
    {
        // Xử lý logic cho trang chính của trang quản trị viên
        return view('admin.index');
    }
}
