@extends('layout')

@section('header')
    @include('header')

@section('content')
        <!-- wishlist area start -->
        <div class="wishlist-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.html" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong> wishlist </strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="product-sidebar">
                            <div class="sidebar-title">
                                <h2>WishList Options</h2>
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
                        </div>
                    </div>
                    <div class="col-sm-9">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="wishlist-banner">
                            <a href="#">
                                <img src="img/checkout/checkout_banner.jpg" alt="">
                            </a>
                        </div>
                        <div class="wishlist-heading">
                            <h2>Wishlist</h2>
                        </div>
                        <div class="wishlist-content">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Unit Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($wishs as $wish)      
                                        <tr>
                                            <td><a href="#" class="text-center"><img src="{{ asset('img/product/' . $wish->image) }}" alt=""  width="80" height="80"> </a></td>
                                            <td>
                                                <a href="single-product.html">{{ $wish->name }}</a>
                                            </td>
                                            <td class="unit-price">${{ $wish->price }}</td>
                                            <td>
                                                <div class="wishlist-actions">
                                                    <form action="{{ route('wishlist.remove', ['productId' => $wish->product_id]) }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $wish->product_id }}">
                                                        <input type="hidden" name="userID" value="{{ $wish->user_id }}">
                                                        <button type="submit" data-toggle="tooltip" title="Remove"> <i class="fa fa-times"></i> </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <button type="submit" value="Continue" class="check-button">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wishlist area end -->

@section('footer')
        @include('footer')
@endsection