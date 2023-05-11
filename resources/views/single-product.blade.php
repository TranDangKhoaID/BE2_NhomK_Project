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
                                <span>{{$product->price}}</span>
                            </div>
                            <div class="single-product-info">
                                <p>{{$product->description}} </p>
                                <div class="share">
                                    <img src="{{ asset('img/product/share.png')}}" alt="">
                                </div>
                            </div>
                            <div class="cart-item">                    
                                <div class="single-cart">
                                    <div class="cart-plus-minus">
                                        <label>Qty: </label>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="0">
                                    </div>
                                    <button class="cart-btn">Add to cart</button>
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
                            <h2>related products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="related-slider">
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/25.png" alt="" class="primary-img">
                                        <img src="img/product/26.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-price">
                                    <div class="product-name">
                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                    </div>
                                    <div class="price-rating">
                                        <span>$170.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/23.png" alt="" class="primary-img">
                                        <img src="img/product/24.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-price">
                                    <div class="product-name">
                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                    </div>
                                    <div class="price-rating">
                                        <span>$170.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/21.png" alt="" class="primary-img">
                                        <img src="img/product/22.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-price">
                                    <div class="product-name">
                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                    </div>
                                    <div class="price-rating">
                                        <span>$170.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/19.png" alt="" class="primary-img">
                                        <img src="img/product/20.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-price">
                                    <div class="product-name">
                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                    </div>
                                    <div class="price-rating">
                                        <span>$170.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/17.png" alt="" class="primary-img">
                                        <img src="img/product/18.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-price">
                                    <div class="product-name">
                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                    </div>
                                    <div class="price-rating">
                                        <span>$170.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/15.png" alt="" class="primary-img">
                                        <img src="img/product/16.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-price">
                                    <div class="product-name">
                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                    </div>
                                    <div class="price-rating">
                                        <span>$170.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/13.png" alt="" class="primary-img">
                                        <img src="img/product/14.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-price">
                                    <div class="product-name">
                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                    </div>
                                    <div class="price-rating">
                                        <span>$170.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/11.png" alt="" class="primary-img">
                                        <img src="img/product/12.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-price">
                                    <div class="product-name">
                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                    </div>
                                    <div class="price-rating">
                                        <span>$170.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- related product area end-->
        @include('footer')
@endsection