<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }
    public function blockUser(Request $request, $userId)
    {
        // Retrieve the user based on the provided user ID
        $user = User::findOrFail($userId);
        
        // Block the user
        $user->is_blocked = true;
        $user->save();
        
        // Redirect back to the users list or wherever you want
        return redirect()->back()->with('success', 'User has been blocked successfully.');
    }
}
