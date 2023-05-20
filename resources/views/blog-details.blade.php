@extends('layout')

@section('header')
    @include('header')

@section('content')
        <!-- blog details area start -->
        <div class="blog-details-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.html" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong> blog details</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="product-sidebar">
                            <div class="sidebar-title">
                                <h2>Blog Options</h2>
                            </div>
                            <div class="single-sidebar">
                                <div class="single-sidebar-title">
                                    <h3>Category</h3>
                                </div>
                                <div class="single-sidebar-content">
                                    <ul>
                                        <li><a href="#">Dresses (4)</a></li>
                                        <li><a href="#">shoes (6)</a></li>
                                        <li><a href="#">Handbags (1)</a></li>
                                        <li><a href="#">Clothing (3)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="banner-left">
                                <a href="#">
                                    <img src="img/product/banner_left.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-md-12">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                <div class="sidebar-title">
                                    <h2>Details Post</h2>
                                </div>
                                <div class="blog-area">
                                    <div class="blog-post-details">
                                        <div class="blog-img">
                                            <a href="#">
                                                <img src="{{ asset('img/blog/' . $blog->image) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <a href="#" class="blog-title">{{$blog->title}}</a>
                                            <span><a href="#">By {{$blog->author}} - </a>17 Aug 2015 ( {{$count}} comments )</span>
                                            <p>{{$blog->content}}.</p>
                                            <div class="share-post">
                                                <div class="share-title">
                                                    <h3>share this post</h3>
                                                </div>
                                                <div class="share-social">
                                                    <ul>
                                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                                        <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                                        <li><a href="#"> <i class="fa fa-pinterest"></i> </a></li>
                                                        <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                                        <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="comment-box">
                                                        <div class="comment-title">
                                                            <h3>{{$count}} comments</h3>
                                                        </div>
                                                        <div class="comment-list">
                                                            <ul>
                                                                @foreach($comments as $comment)
                                                                <li>
                                                                    @if($comment->user->profile && isset($comment->user->profile->image))
                                                                    <div class="author-img">
                                                                        <img src="{{ asset('img/profile/' . $comment->user->profile->image) }}" alt="" width="50" height="50">
                                                                    </div>
                                                                    @else
                                                                    <div class="author-img">
                                                                        <img src="{{ asset('img/profile/user.jpg')}}" alt="">
                                                                    </div>
                                                                    @endif

                                                                    <div class="author-comment">
                                                                        @if($comment->user->profile && isset($comment->user->profile->fname) && isset($comment->user->profile->lname))
                                                                            <h5><a href="#">{{ $comment->user->profile->fname }} {{ $comment->user->profile->lname }} #{{ $comment->user_id }}</a><a href="{{ route('comment.reported', ['id' => $comment->id]) }}"><i class="fa fa-flag" aria-hidden="true"></i>Report</a></h5>
                                                                        @else
                                                                            <h5><a href="#">User #{{ $comment->user_id }}</a><a href="{{ route('comment.reported', ['id' => $comment->id]) }}"><i class="fa fa-flag" aria-hidden="true"></i>Report</a></h5>
                                                                        @endif
                                                                        <p> {{ $comment->content }} </p>
                                                                    </div>
                                                                </li>
                                                               @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="leave-reply">
                                                        <div class="reply-title">
                                                            <h3>leave a reply</h3>
                                                        </div>
                                                        @if (Auth::guest())
                                                            <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="post-comment">
                                                                            <button type="button" class="cart-btn" title="Add to cart" onclick="showLoginAlert()"> You need to login! </button>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                           <span id="login-message" style="display: none;">Bạn cần đăng nhập</span>
                                                        @else
                                                        <div class="reply-form">
                                                            <p>Your email address will not be published. Required fields are marked *</p>
                                                            <form action="{{ route('add.comment') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                                                <input type="hidden" name="user_id" value="{{$userID}}">
                                                                <div class="row">
                                                                    <div class="col-md-12 text-area">
                                                                        <label> comment </label>
                                                                        <textarea name="content" cols="30" rows="10"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="post-comment">
                                                                            <button type="submit"> post a comment </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="toolbar-bottom">
                                    {{$comments->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog details area end -->

@section('footer')
    @include('footer')
@endsection
      