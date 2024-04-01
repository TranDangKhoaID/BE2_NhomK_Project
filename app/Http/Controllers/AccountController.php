<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Billing;
use App\Models\ProfileUser;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
    public function showChangePass(){
        return view('auth.changepassword');
    }

    public function updateProfile(Request $request)
    {
        // Xử lý lưu thông tin cá nhân được gửi từ form
        $validatedData = $request->validate([
            'fname' => 'required|max:50',
            'lname' => 'required|max:50',
            'address' => 'required|max:50',
            'city' => 'required|max:100',
            'phone' => 'required|max:10',
            'post_code' => 'required|max:50',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName(); // Đính kèm thời gian vào tên tệp
            $image->move(public_path('img/profile'), $imageName);
            $profile->image = $imageName;
        }  
        $profile->save();
    
        // Lưu thông báo thành công vào session flash
        $request->session()->flash('success', 'Profile updated successfully.');
    
        // Chuyển hướng về trang account
        return redirect()->route('account');
    }    
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|max:50',
            'password' => 'required|min:6|confirmed|max:50',
        ]);

        $user = Auth::user();

        // Kiểm tra mật khẩu hiện tại
        if (!Hash::check($request->input('current_password'), $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Mật khẩu hiện tại không chính xác.']);
        }

        // Cập nhật mật khẩu mới
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->route('account')->with('success', 'Mật khẩu đã được thay đổi thành công.');
    }

}
