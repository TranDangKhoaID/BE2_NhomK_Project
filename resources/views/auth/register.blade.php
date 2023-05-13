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
                                <li><strong>Register page</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="login-area ptb-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="login">
                            <div class="login-form-container">
                                <div class="login-text">
                                    <h2>Register</h2>
                                    <span>Please Register using account detail bellow.</span>
                                </div>
                                <div class="login-form">
                                    <form action="{{ route('register') }}" method="post">
                                        @csrf
                                        <input type="text" name="user-name" placeholder="Username">
                                        <input name="user-email" placeholder="Email" type="email">
                                        <input type="password" name="user-password" placeholder="Password">
                                        <input type="password" name="confirm-password" placeholder="Confirm Password">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="button-box">
                                            <button type="submit" class="default-btn">Register</button>
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