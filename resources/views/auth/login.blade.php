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
                                <li><strong>Login page</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="login-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="login">
                            <div class="login-form-container">
                                <div class="login-text">
                                    <h2>login</h2>
                                    <span>Please login using account detail bellow.</span>
                                </div>
                                <div class="login-form">
                                    <form action="{{ route('login') }}" method="post">
                                        @csrf
                                        <input type="text" name="email" placeholder="Email">
                                        <input type="password" name="password" placeholder="Password">
                                        @if (Session::has('success'))
                                            <div class="alert alert-success">
                                                {{ Session::get('success') }}
                                            </div>
                                        @endif
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox" id="remember">
                                                <label for="remember">Remember me</label>
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                            <button type="submit" class="default-btn">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@section('footer')
    @include('footer')
@endsection