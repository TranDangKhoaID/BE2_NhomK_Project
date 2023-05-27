@extends('layout')

@section('header')
    @include('header')
@section('content')
        <!-- single product area start -->
        <div class="Single-product-location home2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.html" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong>{{$product->name}}</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single product area end -->
        <!-- single product details start -->
        <div class="single-product-details">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="single-product-img tab-content">
                            <div class="single-pro-main-image tab-pane active" id="pro-large-img-1">
                                <a href="#"><img class="optima_zoom" src="{{ asset('img/product/' . $product->image) }}" data-zoom-image="{{ asset('img/product/' . $product->image) }}" alt="optima"/></a>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-sm-6">
                        <div class="single-product-details">
                            <a href="#" class="product-name">{{$product->name}}</a>                   
                            <div class="item-price">
                                <span>${{$product->price}}.00</span>
                            </div>
                            <div class="single-product-info">
                                <p>{{$product->description}} </p>
                                <div class="share">
                                    <img src="{{ asset('img/product/share.png')}}" alt="">
                                </div>
                            </div>
                            <div class="cart-item">                    
                                <div class="single-cart">
                                    <form method="POST" action="{{ route('cart.add') }}">
                                        @csrf
                                    <div class="cart-plus-minus">
                                        <label>Qty: </label>
                                        <input class="cart-plus-minus-box" type="text" name="quantity" value="1">
                                    </div>
                                    @if (Auth::guest())
                                        <button type="button" class="cart-btn" title="Add to cart" onclick="showLoginAlert()">add to cart</button>
                                        <span id="login-message" style="display: none;">Bạn cần đăng nhập</span>
                                    @else
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="name" value="{{ $product->name }}">
                                        <input type="hidden" name="price" value="{{ $product->price }}">
                                        <input type="hidden" name="image" value="{{ $product->image }}">
                                        <input type="hidden" name="userID" value="{{ $loggedInUserId }}">
                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button> 
                                    </form>
                                   @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single product details end -->
        <!-- single product tab start -->
        <div class="single-product-tab-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="single-product-tab">
                            <ul class="single-product-tab-navigation" role="tablist">
                                <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Product Description</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content single-product-page">
                                <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                                    <div class="single-p-tab-content">
                                        <p>{{$product->description}}  </p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single product tab end -->
        <!-- upsell product area start-->
        
        <!-- upsell product area end-->
        <!-- related product area start-->
        <div class="related-product home2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-title">
                            <h2>Related products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="related-slider">
                        @foreach ($productsWithSameManuId as $product)
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <img src="{{ asset('img/product/' . $product->image) }}" alt="" class="secondary-img">
                                </div>
                                <div class="product-price">
                                    <div class="product-name">
                                        <a href="{{route('products.showProductDetail', ['id' => $product->id]) }}" title="{{$product->name}}">{{$product->name}}</a>
                                    </div>
                                    <div class="price-rating">
                                        <span>{{$product->price}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach 
                    </div>
                </div>
            </div>
        </div>
        <!-- related product area end-->
        @include('footer')
@endsection