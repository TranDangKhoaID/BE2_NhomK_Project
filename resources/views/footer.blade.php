<div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="footer-contact">
                            <img src="img/logo-white.png" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                            <ul class="address">
                                <li>
                                    <span class="fa fa-fax"></span>
                                    (800) 123 456 789
                                </li>
                                <li>
                                    <span class="fa fa-phone"></span>
                                    (800) 123 456 789
                                </li>
                                <li>
                                    <span class="fa fa-envelope-o"></span>
                                    Nhóm K - Backend 2
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="footer-support">
                            <div class="footer-title">
                                <h3>Our support</h3>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Your Account</a></li>
                                    <li><a href="#">Advanced Search</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="footer-info">
                            <div class="footer-title">
                                <h3>Our information</h3>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="/about-us">About Us</a></li>
                                    <li><a href="#">Customer Service</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Orders and Returns</a></li>
                                    <li><a href="#">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer top area end -->
        <!-- footer area start -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="footer-copyright">
                            <p>Copyright &copy; 2016 <a href="#"> Bootexperts</a>. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="payment-icon">
                            <img src="img/payment.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" id="scrollUp"><i class="fa fa fa-arrow-up"></i></a>
        </footer>
        <!-- footer area end -->
        <!-- quickview product start -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="" src="img/product/quick-view.jpg">
                                    </div>
                                </div>

                                <div class="product-info">
                                    <h1>Diam quis cursus</h1>
                                    <div class="price-box">
                                        <p class="price"><span class="special-price"><span class="amount">$132.00</span></span></p>
                                    </div>
                                    <a href="shop.html" class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form method="post" class="cart">
                                            <div class="numbers-row">
                                                <input type="number" id="french-hens" value="3">
                                            </div>
                                            <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                    </div>
                                    <div class="share-post">
                                        <div class="share-title">
                                            <h3>share this product</h3>
                                        </div>
                                        <div class="share-social">
                                            <ul>
                                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-pinterest"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- quickview product start -->

        <!-- jquery -->
        <script src="{{ asset('js/vendor/jquery-1.12.1.min.js') }}"></script>
        <!-- bootstrap JS -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- wow JS -->
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <!-- price-slider JS -->
        <script src="{{ asset('js/jquery-price-slider.js') }}"></script>
        <!-- nivoslider JS -->
        <script src="{{ asset('lib/js/jquery.nivo.slider.js') }}"></script>
        <script src="{{ asset('lib/home.js') }}"></script>
        <!-- meanmenu JS -->
        <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
        <!-- owl.carousel JS -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!-- elevatezoom JS -->
        <script src="{{ asset('js/jquery.elevatezoom.js') }}"></script>
        <!-- scrollUp JS -->
        <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
        <!-- plugins JS -->
        <script src="{{ asset('js/plugins.js') }}"></script>
        <!-- main JS -->
        <script src="{{ asset('js/main.js') }}"></script>

        <script>
            // Hiển thị thông báo "Bạn cần đăng nhập"
            function showLoginAlert() {
                alert("Bạn cần đăng nhập");
            }
        </script>

    </body>

<!-- Mirrored from preview.hasthemes.com/james-preview/james/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jan 2021 00:38:50 GMT -->
</html>
