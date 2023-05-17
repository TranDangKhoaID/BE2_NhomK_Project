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
                                        @foreach($protypes as $protype)
                                        <li><a href="#">{{ $protype->type_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar">
                                <div class="single-sidebar-title">
                                    <h3>Manufacturer</h3>
                                </div>
                                <div class="single-sidebar-content">
                                    <ul>
                                        @foreach($manufactures as $manufacture)
                                        <li><a href="#">{{ $manufacture->manu_name}}</a></li>
                                        @endforeach
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
                            </ul>
                            <div class="sort-by">
                                <label>Sort By</label>
                                <form action="{{ route('sort.products') }}" method="GET">
                                    <select name="sort">
                                        <option value="default" @if(request('sort') === 'default') selected @endif>Default</option>
                                        <option value="name" @if(request('sort') === 'name') selected @endif>Name</option>
                                        <option value="price" @if(request('sort') === 'price') selected @endif>Price</option>
                                    </select>
                                    <button type="submit" title="Sort">
                                        <img src="img/product/i_asc_arrow.gif" alt="">
                                    </button>
                                </form>
                            </div>
                            <div class="search-box">
                                    <form action="#">
                                        <input type="text">
                                        <button type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
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
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product main items area end -->

@section('footer')
        @include('footer')
@endsection