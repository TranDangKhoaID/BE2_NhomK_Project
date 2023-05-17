<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Billing;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function showAcountForm(){

        $userId = Auth::id();
        $billings = Billing::where('user_id', $userId)->get();
        
        return view('auth.my-account', compact('billings'));
    }
    public function showBillingForm($id){

        $billing = Billing::find($id);
        $orderItems = OrderItem::where('billing_id', $id)->get();
        
        return view('billing', compact('billing','orderItems'));
    }
}
