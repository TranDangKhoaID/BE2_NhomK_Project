@extends('layout')

@section('header')
    @include('header')

@section('content')
        <!-- product items banner start -->
        <!-- product items banner end -->
        <!-- product main items area start -->
        <div class="product-main-items">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="/" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong> shop</strong></li>
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
                            <div class="single-sidebar price">
                                <div class="single-sidebar-title">
                                    <h3>Price</h3>
                                </div>
                                <div class="single-sidebar-content">
                                    <div class="price-range">
                                        <div class="price-filter">
                                            <div id="slider-range"></div>
                                            <div class="price-slider-amount">
                                                <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                            </div>
                                        </div>
                                        <button type="submit"> <span>search</span> </button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="product-bar">
                            <ul class="product-navigation" role="tablist">
                                <li role="presentation" class="active gird">

                                    <a href="#gird" aria-controls="gird" role="tab" data-toggle="tab">
                                        <span>
                                            <img class="primary" src="img/product/grid-primary.png" alt="">
                                            <img class="secondary" src="img/product/grid-secondary.png" alt="">
                                        </span>
                                        Gird
                                    </a>
                                </li>
                                <li role="presentation" class="list">
                                    <a href="#list" aria-controls="list" role="tab" data-toggle="tab">
                                        <span>
                                            <img class="primary" src="img/product/list-primary.png" alt="">
                                            <img class="secondary" src="img/product/list-secondary.png" alt="">
                                        </span>
                                        List
                                     </a>
                                </li>
                            </ul>
                            <div class="sort-by">
                                <label>Sort By</label>
                                <select name="sort" >
                                    <option value="#" selected >Position</option>
                                    <option value="#">Name</option>
                                    <option value="#">Price</option>
                                </select>
                                <a href="#" title="Set Descending Direction">
                                    <img src="img/product/i_asc_arrow.gif" alt="">
                                </a>
                            </div>
                            <div class="limit-product">
                                <label>Show</label>
                                <select name="show">
                                    <option value="#" selected>9</option>
                                    <option value="#">12</option>
                                    <option value="#">24</option>
                                    <option value="#">36</option>
                                </select>
                                per page
                            </div>
                        </div>
                        <div class="row">
                            <div class="product-content">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active fade in home2" id="gird">
                                        @foreach ($products as $product)
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <img src="{{ asset('img/product/' . $product->image) }}" alt="" class="primary-img">
                                                </div>
                                                <div class="actions">
                                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                    <ul class="add-to-link">
                                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-price">
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">{{$product->name}}</a>
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
        <!-- product main items area end -->

@section('footer')
        @include('footer')
@endsection