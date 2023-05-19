<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function showAll()
    {
        $blogs = Blog::paginate(4);
        return view('blog', compact('blogs'));
    }
    public function showBlogDetail($id)
    {
        // Lấy thông tin sản phẩm từ CSDL dựa trên $id
        $blog = Blog::find($id);
        // Kiểm tra xem sản phẩm có tồn tại hay không
        if (!$blog) {
             abort(404);
        }

        return view('blog-details', compact('blog'));
    }
}
