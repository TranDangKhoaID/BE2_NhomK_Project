<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class AdminBlogController extends Controller
{
    public function index()
    {
        return view('admin.addblog');
    }
    public function addBlog(Request $request){
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
            'author' => 'required',
        ]);
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->author = $request->input('author');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName(); // Đính kèm thời gian vào tên tệp
            $image->move(public_path('img/blog'), $imageName);
            $blog->image = $imageName;
        } 
        $blog->save();
        return redirect()->route('admin.addblog')->with('success', 'Blog added successfully.');
    }
}
