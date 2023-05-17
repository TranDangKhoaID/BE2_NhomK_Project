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
                                <h2>Shopping Options</h2>
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
                            <div class="single-sidebar">
                                <div class="single-sidebar-title">
                                    <h3>Color</h3>
                                </div>
                                <div class="single-sidebar-content">
                                    <ul>
                                        <li><a href="#">Black (2)</a></li>
                                        <li><a href="#">Blue (2)</a></li>
                                        <li><a href="#">Green (4)</a></li>
                                        <li><a href="#">Grey (2)</a></li>
                                        <li><a href="#">Red (2)</a></li>
                                        <li><a href="#">White (2)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar">
                                <div class="single-sidebar-title">
                                    <h3>Manufacturer</h3>
                                </div>
                                <div class="single-sidebar-content">
                                    <ul>
                                        <li><a href="#">Calvin Klein (2)</a></li>
                                        <li><a href="#">Diesel (2)</a></li>
                                        <li><a href="#">option value (1)</a></li>
                                        <li><a href="#">Polo (2)</a></li>
                                        <li><a href="#">store view (4)</a></li>
                                        <li><a href="#">Tommy Hilfiger (2)</a></li>
                                        <li><a href="#">will be used (1)</a></li>
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
                                            <span><a href="#">By {{$blog->author}} - </a>17 Aug 2015 ( 0 comments )</span>
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
                                                            <h3>4 comments</h3>
                                                        </div>
                                                        <div class="comment-list">
                                                            <ul>
                                                                <li>
                                                                    <div class="author-img">
                                                                        <img src="{{ asset('img/blog/user.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="author-comment">
                                                                        <h5><a href="#">admin</a> Post author February 6, 2016 at 1:38 am <a href="#">Reply</a></h5>
                                                                        <p>just a nice post</p>
                                                                    </div>
                                                                </li>
                                                                <li class="comment-reply">
                                                                    <div class="author-img">
                                                                        <img src="{{ asset('img/blog/admin.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="author-comment">
                                                                        <h5><a href="#">demo</a> Post author February 6, 2016 at 2:38 am <a href="#">Reply</a></h5>
                                                                        <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="author-img">
                                                                        <img src="{{ asset('img/blog/user.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="author-comment">
                                                                        <h5><a href="#">admin</a> Post author February 6, 2016 at 1:38 am <a href="#">Reply</a></h5>
                                                                        <p>just a nice post</p>
                                                                    </div>
                                                                </li>
                                                                <li class="comment-reply">
                                                                    <div class="author-img">
                                                                        <img src="{{ asset('img/blog/admin.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="author-comment">
                                                                        <h5><a href="#">demo</a> Post author February 6, 2016 at 2:38 am <a href="#">Reply</a></h5>
                                                                        <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="leave-reply">
                                                        <div class="reply-title">
                                                            <h3>leave a reply</h3>
                                                        </div>
                                                        <div class="reply-form">
                                                            <p>Your email address will not be published. Required fields are marked *</p>
                                                            <form action="#">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label> Name * </label>
                                                                        <input type="text">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label> Email * </label>
                                                                        <input type="email">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label> Website </label>
                                                                        <input type="text">
                                                                    </div>
                                                                    <div class="col-md-12 text-area">
                                                                        <label> comment </label>
                                                                        <textarea cols="30" rows="10"></textarea>
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
                                    <ul>
                                        <li><span>Pages:</span></li>
                                        <li class="current"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"> <img src="img/product/pager_arrow_right.gif" alt=""> </a></li>
                                    </ul>
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
      