@extends('layout')

@section('header')
    @include('header')

@section('content')
        <!-- blog  banner start -->
        <div class="blog-banner">
            <img src="img/product/banner.jpg" alt="">
        </div>
        <!-- blog banner end -->
        <!-- blog area start -->
        <div class="blog-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.html" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong> blog</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="product-sidebar">
                            <div class="sidebar-title">
                                <h2>Blogging Options</h2>
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
                                    <h2>Blog Posts</h2>
                                </div>
                                <div class="blog-area">
                                    @foreach ($blogs as $blog)
                                    <div class="single-blog-post-page">
                                        <div class="blog-img">
                                            <a href="blog-details.html">
                                                <img src="{{ asset('img/blog/' . $blog->image) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <a href="blog-details.html" class="blog-title">{{$blog->title}}</a>
                                            <span><a href="#">By {{$blog->author}} - </a>17 Aug 2015 ( 0 comments )</span>
                                            <p>{{ Str::limit($blog->content, 300, '...') }}</p>
                                            <a href="{{route('blog.showBlogDetail', ['id' => $blog->id]) }}" class="readmore">read more ></a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-12">
                            {{ $blogs->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog area end -->

@section('footer')
        @include('footer')
@endsection
          