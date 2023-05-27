@extends('layout')

@section('header')
    @include('header')

@section('content')
        <!-- contact area start -->
        <div class="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.html" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong> contact</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="product-sidebar">
                            <div class="sidebar-title">
                                <h2>Contact Options</h2>
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
                    <div id="googleMap"></div>
                        <div class="contact-info">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <div class="contact-details">
                                <form action="{{ route('add.contact') }}" method="POST"> 
                                    @csrf 
                                    <div class="contact-title">
                                        <h3>contact us</h3>
                                    </div>
                                    <div class="contact-form">
                                        <div class="form-title">
                                            <h4>contact information</h4>
                                        </div>
                                        <div class="form-content">
                                            <ul>
                                                
                                                    <li>
                                                        <div class="form-box">
                                                            <div class="form-name">
                                                                <label>Name <em>*</em> </label>
                                                                <input name="name" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="form-box">
                                                            <div class="form-name">
                                                                <label>Email <em>*</em> </label>
                                                                <input name="email" type="email">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-box">
                                                            <div class="form-name">
                                                                <label>telephone </label>
                                                                <input name="phone" type="text">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-box">
                                                            <div class="form-name">
                                                                <label>Comment <em>*</em> </label>
                                                                <textarea name="comment" cols="5" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="buttons-set">
                                        <p> <em>*</em> Required Fields</p>
                                        <button type="submit">submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area end -->
@section('footer')
    @include('footer')
@endsection