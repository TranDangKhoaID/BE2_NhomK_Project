<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
class AdminSliderController extends Controller
{
    public function index()
    {
        return view('admin.addslider');
    }
    public function addSlider(Request $request){
        $request->validate([
            'title1' => 'required',
            'title2' => 'required',
            'title3' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $slider = new Slider;
        $slider->title1 = $request->input('title1');
        $slider->title2 = $request->input('title2');
        $slider->title3 = $request->input('title3');
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName(); // Đính kèm thời gian vào tên tệp
            $image->move(public_path('img/slider'), $imageName);
            $slider->image = $imageName;
        } 
        $slider->save();
        return redirect()->route('admin.addslider')->with('success', 'Slider added successfully.');
    }
}
