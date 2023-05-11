<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from preview.hasthemes.com/james-preview/james/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jan 2021 00:37:41 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Home || James </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

        <!-- Google Fonts
        ============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Norican' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- All css -->

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <!-- owl.carousel CSS -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
        <!-- jquery-ui CSS -->
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
        <!-- meanmenu CSS -->
        <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
        <!-- nivoslider CSS -->
        <link rel="stylesheet" href="{{ asset('lib/css/nivo-slider.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/css/preview.css') }}">
        <!-- animate CSS -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <!-- magic CSS -->
        <link rel="stylesheet" href="{{ asset('css/magic.css') }}">
        <!-- normalize CSS -->
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <!-- main CSS -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <!-- style CSS -->
        <link rel="stylesheet" href="{{ asset('style.css') }}">
        <!-- responsive CSS -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <!-- modernizr JS -->
        <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>

</head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!-- header area start -->
        <header>
            <div class="top-link">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-3 col-sm-9 hidden-xs">
                            <div class="call-support">
                                <p>Call support free: <span> (800) 123 456 789</span></p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <div class="dashboard">
                                <div class="account-menu">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <ul>
                                                @guest
                                                    <li><a href="{{ route('login') }}">Login</a></li>
                                                @endguest
                                                @auth
                                                    <!-- Hiển thị các mục menu cho người dùng đã đăng nhập -->
                                                    <li><a href="my-account.html">my account</a></li>
                                                    <li><a href="wishlist.html">my wishlist</a></li>
                                                    <li><a href="cart.html">my cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li>
                                                    <form action="{{ route('logout') }}" method="post">
                                                        @csrf
                                                        <button type="submit">Logout</button>
                                                    </form>
                                                    </li>
                                                @endauth
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                @auth
                                <div class="cart-menu">
                                    <ul>
                                        <li><a href="#"> <img src="{{ asset('img/icon-cart.png')}}" alt=""> <span>2</span> </a>
                                            
                                        </li>
                                    </ul>
                                </div>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mainmenu-area product-items">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="logo">
                                <a href="">
                                    <img src="{{ asset('img/logo.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="mainmenu">
                                <nav>
                                    <ul>                                      
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/shop">Shops</a></li>
                                        <li><a href="/shop">Blogs</a></li> 
                                        <li><a href="/shop">About us</a></li> 
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mobile-menu">
                                <nav>
                                    <ul>
                                        <li><a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="index-2.html">Home 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">Women</a>
                                            <ul>
                                                <li><a href="#">Dresses</a>
                                                    <ul>
                                                        <li><a href="#">Coctail</a></li>
                                                        <li><a href="#">day</a></li>
                                                        <li><a href="#">evening</a></li>
                                                        <li><a href="#">sports</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">shoes</a>
                                                    <ul>
                                                        <li><a href="#">Sports</a></li>
                                                        <li><a href="#">run</a></li>
                                                        <li><a href="#">sandals</a></li>
                                                        <li><a href="#">boots</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">handbags</a>
                                                    <ul>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">table</a></li>
                                                        <li><a href="#">coats</a></li>
                                                        <li><a href="#">kids</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">clothing</a>
                                                    <ul>
                                                        <li><a href="#">T-shirts</a></li>
                                                        <li><a href="#">coats</a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">jeans</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">Men</a>
                                            <ul>
                                                <li><a href="#">Bags</a>
                                                    <ul>
                                                        <li><a href="#">Bootees bag</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">clothing</a>
                                                    <ul>
                                                        <li><a href="#">coats</a></li>
                                                        <li><a href="#">T-shirts</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Lingerie</a>
                                                    <ul>
                                                        <li><a href="#">Bands</a></li>
                                                        <li><a href="#">Furniture</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">Foorwear</a>
                                            <ul>
                                                <li><a href="#">footwear men</a>
                                                    <ul>
                                                        <li><a href="#">gifts</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">footwear women</a>
                                                    <ul>
                                                        <li><a href="#">boots</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">Jewellery</a>
                                            <ul>
                                                <li><a href="#">Rings</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">Accessories</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="about-us.html">About us</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="my-account.html">My account</a></li>
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-list.html">Shop list</a></li>
                                                <li><a href="single-product.html">Single Shop</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="login.html">login page</a></li>
                                                <li><a href="register.html">register page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end -->