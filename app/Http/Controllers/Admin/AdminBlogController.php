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
    public function indexListBlogs()
    {
        $blogs = Blog::paginate(4);;
        return view('admin.blogs', compact('blogs'));
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
    public function deleteBlog($id)
    {
        // Tìm sản phẩm cần xóa
        $blog = Blog::findOrFail($id);

        // Xóa sản phẩm
        $blog->delete();

        // Chuyển hướng về trang danh sách sản phẩm hoặc trang khác
        return redirect()->route('admin.blogs')->with('success', 'Sản phẩm đã được xóa thành công.');
    }
}
