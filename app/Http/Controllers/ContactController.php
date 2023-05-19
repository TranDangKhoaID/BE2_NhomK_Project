<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function showContactForm(){
        return view('contact');        
    }
    public function addContact(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'comment' => 'required',
        ]);        
        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->comment = $request->input('comment');
        $contact->save();
        return redirect()->route('contact')->with('success', 'Contact added successfully.');
    }
}
