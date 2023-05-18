<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Billing;
use App\Models\ProfileUser;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function showAcountForm(){

        $userId = Auth::id();
        $billings = Billing::where('user_id', $userId)->get();
        $profile = ProfileUser::where('user_id', $userId)->first();
        
        return view('auth.my-account', compact('billings','profile'));
    }
    public function showBillingForm($id){

        $billing = Billing::find($id);
        $orderItems = OrderItem::where('billing_id', $id)->get();
        
        return view('billing', compact('billing','orderItems'));
    }

    public function updateProfile(Request $request)
    {
        // Xử lý lưu thông tin cá nhân được gửi từ form
        $validatedData = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'post_code' => 'required',
        ]);
    
        $user_id = Auth::id();
    
        // Kiểm tra xem đã có profile_users cho user_id hiện tại hay chưa
        $existingProfile = ProfileUser::where('user_id', $user_id)->first();
    
        // Nếu đã tồn tại, xóa bản ghi cũ
        if ($existingProfile) {
            $existingProfile->delete();
        }
    
        // Lưu thông tin vào cơ sở dữ liệu
        $profile = new ProfileUser;
        $profile->fname = $request->input('fname');
        $profile->lname = $request->input('lname');
        $profile->address = $request->input('address');
        $profile->city = $request->input('city');
        $profile->phone = $request->input('phone');
        $profile->post_code = $request->input('post_code');
        $profile->user_id = $user_id;
        $profile->save();
    
        // Lưu thông báo thành công vào session flash
        $request->session()->flash('success', 'Profile updated successfully.');
    
        // Chuyển hướng về trang account
        return redirect()->route('account');
    }    

}
