@extends('layout')

@section('header')
    @include('header')

@section('content')
        <!-- slider area start -->
        <div class="slider-area home1">
            <div class="bend niceties preview-2">
                
                <div id="nivoslider" class="slides">
                    @foreach ($sliders as $slider)
                    <img src="{{ asset('img/slider/' . $slider->image) }} " alt="" title="#slider-direction-{{ $slider->id }}" height="410"  />
                    @endforeach
                </div>
                
                <!-- direction -->
                @foreach ($sliders as $slider)
                <div id="slider-direction-{{ $slider->id }}" class="t-cn slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-lfl s-tb slider-{{ $slider->id }}">
                        <div class="title-container s-tb-c title-compress">
                            <h1 class="title1">{{ $slider->title1 }}</h1>
                            <h2 class="title2" >{{ $slider->title2 }}</h2>
                            <h3 class="title3" >{{ $slider->title3 }}</h3>
                        </div>
                    </div>
                </div> 
                @endforeach             
            </div>
        </div>
        <!-- slider area end -->
       
        <!-- products area start -->
        
        <!-- products area end -->
        <!-- feature products area start -->
        <div class="features-product-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>FEATURED PRODUCTS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">                
                    <div class="feature-product-slider">                       
                        @foreach ($products as $product)
                        <div class="col-md-12">                           
                            <div class="single-product">                               
                                <div class="product-img">
                                    <img src="{{ asset('img/product/' . $product->image) }}" alt="" class="primary-img">
                                </div>
                                <div class="product-name">
                                    <a href="{{route('products.showProductDetail', ['id' => $product->id]) }}" title="{{$product->name}}">{{$product->name}}</a>
                                </div>
                                <div class="price-rating">                                  
                                    <span>{{$product->price}}</span>
                                </div>
                                <div class="actions">
                                    @if (Auth::guest())
                                        <button type="button" class="cart-btn" title="Add to cart" onclick="showLoginAlert()">add to cart</button>
                                        <span id="login-message" style="display: none;">Bạn cần đăng nhập</span>
                                    @else
                                    <form method="POST" action="{{ route('cart.add') }}">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1" min="1">
                                        <input type="hidden" name="name" value="{{ $product->name }}">
                                        <input type="hidden" name="price" value="{{ $product->price }}">
                                        <input type="hidden" name="image" value="{{ $product->image }}">
                                        <input type="hidden" name="userID" value="{{ $loggedInUserId }}">
                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button> 
                                    @endif
                                    <ul class="add-to-link">
                                        <li><a href="{{route('products.showProductDetail', ['id' => $product->id]) }}"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>               
                                    </ul>
                                    </form>
                                </div>
                            </div>                           
                        </div>
                        @endforeach    
                    </div>
                    
                </div>
               
            </div>
        </div>
        <!-- feature products area end -->
        <!-- another banner area start -->
        
        <!-- another banner area end -->
        <!-- new products area start -->
        <div class="new-products-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>NEW PRODUCTS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="new-product-slider">
                        @foreach ($newProducts as $product)
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-new">
                                    <span>new</span>
                                </div>
                                <div class="product-img">
                                    <img src="{{ asset('img/product/' . $product->image) }}" alt=""  class="primary-img">
                                </div>
                                <div class="product-name">
                                    <a href="{{route('products.showProductDetail', ['id' => $product->id]) }}" title="Fusce aliquam">{{$product->name}}</a>
                                </div>
                                <div class="price-rating">         
                                    <span>{{$product->price}}</span>
                                </div>
                                <div class="actions">
                                    @if (Auth::guest())
                                        <button type="button" class="cart-btn" title="Add to cart" onclick="showLoginAlert()">add to cart</button>
                                        <span id="login-message" style="display: none;">Bạn cần đăng nhập</span>
                                    @else
                                    <form method="POST" action="{{ route('cart.add') }}">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1" min="1">
                                        <input type="hidden" name="name" value="{{ $product->name }}">
                                        <input type="hidden" name="price" value="{{ $product->price }}">
                                        <input type="hidden" name="image" value="{{ $product->image }}">
                                        <input type="hidden" name="userID" value="{{ $loggedInUserId }}">
                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button> 
                                    @endif
                                    <ul class="add-to-link">
                                        <li><a href="{{route('products.showProductDetail', ['id' => $product->id]) }}"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>               
                                    </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- new products area end -->
        <!-- testimonial area start -->
        
        <!-- testimonial area end -->
        <!-- blog area start -->
        <div class="blog-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-heading">
                            <h2>From <strong> The Blog</strong></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-post">
                        <div class="single-blog-post">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="img/blog/1.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a href="blog-details.html" class="blog-title">Lorem ipsum dolor sit amet</a>
                                <span><a href="#">By plaza themes - </a>17 Aug 2015 ( 0 comments )</span>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna...</p>
                                <a href="blog-details.html" class="readmore">read more ></a>
                            </div>
                        </div>
                            <div class="single-blog-post">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="img/blog/2.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a href="blog-details.html" class="blog-title">Lorem ipsum dolor sit amet</a>
                                <span><a href="#">By plaza themes - </a>17 Aug 2015 ( 0 comments )</span>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna...</p>
                                <a href="blog-details.html" class="readmore">read more ></a>
                            </div>
                            </div>
                        </div>
                        <div class="single-blog-post">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="img/blog/3.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a href="blog-details.html" class="blog-title">Lorem ipsum dolor sit amet</a>
                                <span><a href="#">By plaza themes - </a>17 Aug 2015 ( 0 comments )</span>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna...</p>
                                <a href="blog-details.html" class="readmore">read more ></a>
                            </div>
                        </div>
                        <div class="single-blog-post">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="img/blog/4.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a href="blog-details.html" class="blog-title">Lorem ipsum dolor sit amet</a>
                                <span><a href="#">By plaza themes - </a>17 Aug 2015 ( 0 comments )</span>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna...</p>
                                <a href="blog-details.html" class="readmore">read more ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog area end -->
        <!-- newsleter area start -->
        <div class="newsleter-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="newsleter">
                            <h3>newsletter</h3>
                            <p>Subscribe to the james mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                            <div class="Subscribe">
                                <form action="#">
                                    <input type="text" title="Sign up">
                                    <button type="submit" title="Subscribe">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="follow">
                            <h3>follow</h3>
                            <p>Subscribe to the james mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                            <ul class="follow-link">
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-rss"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsleter area end -->

@section('footer')
    @include('footer')
@endsection
      