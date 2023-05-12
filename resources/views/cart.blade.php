@extends('layout')

@section('header')
    @include('header')

@section('content')
        <!-- cart item area start -->
        <div class="shopping-cart">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.html" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong> Shopping cart</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table-bordered table table-hover">
                                <thead>
                                    <tr>
                                        <th class="image"></th>
                                        <th class="cart-product-name">Product Name</th>
                                        <th class="move-wishlist">Move to Wishlist</th>
                                        <th class="unit-price">Unit Price</th>
                                        <th class="quantity">Qty</th>
                                        <th class="subtotal">Subtotal</th>
                                        <th class="remove-icon"></th>
                                    </tr>
                                </thead>
                                
                                <tbody class="text-center"> 
                                    @foreach ($carts as $cart)             
                                        <tr>
                                        <td class="cart-item-img">
                                            <a href="single-product.html">
                                                <img src="{{ asset('img/product/' . $cart->image) }}" alt="" width="70" height="70">
                                            </a>
                                        </td>
                                            <td class="cart-product-name">
                                                <a href="single-product.html">{{$cart->name}}</a>
                                            </td>
                                            <td class="move-wishlist">
                                                <a href="#">Move</a>
                                            </td>
                                            <td class="unit-price">
                                                <span>{{$cart->price}}</span>
                                            </td>
                                            <td class="quantity">
                                                <span>{{$cart->quantity}}</span>
                                            </td>
                                            <td class="subtotal">
                                                <span>{{$cart->subtotal }}</span>
                                            </td>
                                            <td class="remove-icon">
                                                <a href="#">
                                                    <img src="img/cart/btn_remove.png" alt="">
                                                </a>
                                            </td>        
                                        </tr>       
                                   @endforeach    
                                </tbody>    
                            </table>
                            <div class="shopping-button">
                                <div class="continue-shopping">
                                    <button type="submit">continue shopping</button>
                                </div>
                                <div class="shopping-cart-left">
                                    <button type="submit">Clear Shopping Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="discount-code">
                            <h3>Discount Codes</h3>
                            <p>Enter your coupon code if you have one.</p>
                            <input type="text">
                            <div class="shopping-button">
                                <button type="submit">apply coupon</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="totals">
                            <h3>Grand Total <span>{{$grandTotal}} VND</span></h3>
                            <div class="shopping-button">
                                <button type="submit">proceed to checkout</button>
                            </div>
                            <a href="#">Checkout with Multiple Addresses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart item area end -->
@section('footer')
    @include('footer')
@endsection
      