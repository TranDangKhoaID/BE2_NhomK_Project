<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

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
        $userID = Auth::id();
        $blog = Blog::find($id);
        $comments = Comment::where('blog_id', $id)->paginate(5);
        $count = Comment::where('blog_id', $id)->count(); // Đếm số lượng comment
        // Kiểm tra xem sản phẩm có tồn tại hay không
        if (!$blog) {
            return redirect()->route('blog');
        }

        return view('blog-details', compact('blog','userID','comments','count'));
    }
    public function addComment(Request $request){
        $request->validate([
            'content' => 'required',
        ]);
        $comment = new Comment;
        $comment->content = $request->input('content');
        $comment->user_id = $request->input('user_id');
        $comment->blog_id = $request->input('blog_id');

        $comment->save();
        return redirect()->back()->with('success', 'Comment added to cart successfully.');
    }
    public function reportComment(Request $request, $id)
    {
        // Retrieve the user based on the provided user ID
        $comment = Comment::findOrFail($id);
        
        // Block the user
        $comment->is_reported = true;
        $comment->save();
        
        // Redirect back to the users list or wherever you want
        return redirect()->back()->with('success', 'Comment has been reported successfully.');
    }
}
