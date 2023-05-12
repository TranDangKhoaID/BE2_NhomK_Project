@extends('layout')

@section('header')
    @include('header')

@section('content')
        <!-- checkout area start -->
        <div class="checkout-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.html" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong> checkout</strong></li>
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
                           
                            <div class="banner-left">
                                <a href="#">
                                    <img src="img/product/banner_left.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        @error('fname')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                        @error('lname')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                        @error('phone')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                        @error('address')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                        @error('city')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                        <div class="checkout-heading">
                            <h2>Checkout</h2>
                        </div>
                        <form method="post" action="{{ route('cart.processCheckout')}}">
                        @csrf
                            <div class="checkout-accordion">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Step 1: Delivery Details
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="delivery-details">
                                                            <div class="list-style">
                                                                    <div class="form-name">
                                                                        <label>First Name <em>*</em> </label>
                                                                        <input type="text" name="fname" placeholder="First Name">
                                                                    </div>
                                                                    <div class="form-name">
                                                                        <label>Last Name <em>*</em> </label>
                                                                        <input type="text" name="lname" placeholder="Last Name">
                                                                    </div>
                                                                    <div class="form-name">
                                                                        <label>Phone <em>*</em></label>
                                                                        <input type="text" name="phone" placeholder="Phone">
                                                                    </div>

                                                                    <div class="form-name">
                                                                        <label>Address  <em>*</em> </label>
                                                                        <input type="text" name="address" placeholder="Address">
                                                                    </div>
                                                                    
                                                                    <div class="form-name">
                                                                        <label>City <em>*</em> </label>
                                                                        <input type="text" name="city" placeholder="City">
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFive">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    Step 2: Payment Method
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                            <div class="panel-body">
                                                <div class="patment-method">
                                                    <p>Please select the preferred payment method to use on this order.</p>
                                                    <div class="radio">
                                                        <input type="radio" checked="" value="shipping-method">Cash On Delivery
                                                    </div>
                                                    <p> <strong> Add Comments About Your Order</strong></p>
                                                    <p> <textarea name="saysomething" rows="8"></textarea> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingSix">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                    Step 3: Confirm Order
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                            <div class="panel-body">
                                                <div class="confirm-order">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>Product Name</th>
                                                                    <th>Quantity</th>
                                                                    <th>Unit Price</th>
                                                                    <th>Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach ($carts as $cart)
                                                                <tr>
                                                                    <td>
                                                                        {{$cart->name}}
                                                                    </td>
                                                                    
                                                                    <td>{{$cart->quantity}}</td>
                                                                    <td>{{$cart->price}}</td>
                                                                    <td>{{$cart->subtotal}}</td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <td class="text-right" colspan="4">
                                                                        <strong>Sub-Total:</strong>
                                                                    </td>
                                                                    <td>{{$grandTotal}}</td>
                                                                </tr>

                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    <button type="submit" value="Continue" class="check-button">Confirm Order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="total" value="{{$grandTotal}}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout area end -->
@section('footer')
    @include('footer')
@endsection
      