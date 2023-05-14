<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminHomeController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user()->email;
        return view('admin.index', compact('admin'));
    }
}
