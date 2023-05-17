<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Billing;
use App\Models\OrderItem;

class AdminBillingController extends Controller
{
    public function showBillingsChoXacNhan()
    {
        $billings = Billing::where('status', 'wait for confirmation')->get();
        return view('admin.billings-choxacnhan',compact('billings'));
    }
    public function showBillingsHuy()
    {
        $billings = Billing::where('status', 'cancel')->get();
        return view('admin.billings-huy',compact('billings'));
    }
    public function cancelBilling(Request $request, $id)
    {
        // Retrieve the user based on the provided user ID
        $billing = Billing::findOrFail($id);
        
        // Block the user
        $billing->status = 'cancel';
        $billing->save();
        
        // Redirect back to the users list or wherever you want
        return redirect()->back()->with('success', 'Billing cancel');
    }
    public function xacNhanBilling(Request $request, $id)
    {
        // Retrieve the user based on the provided user ID
        $billing = Billing::findOrFail($id);
        
        // Block the user
        $billing->status = 'confirmed';
        $billing->save();
        
        // Redirect back to the users list or wherever you want
        return redirect()->back()->with('success', 'Billing confirmed');
    }
    public function showBillingsXacNhan()
    {
        $billings = Billing::where('status', 'confirmed')->get();
        return view('admin.billings-xacnhan',compact('billings'));
    }
    public function doneBilling(Request $request, $id)
    {
        // Retrieve the user based on the provided user ID
        $billing = Billing::findOrFail($id);
        
        // Block the user
        $billing->status = 'delivered';
        $billing->save();
        
        // Redirect back to the users list or wherever you want
        return redirect()->back()->with('success', 'Billing done');
    }
    public function showBillingsDone()
    {
        $billings = Billing::where('status', 'delivered')->get();
        return view('admin.billings-done',compact('billings'));
    }
}
