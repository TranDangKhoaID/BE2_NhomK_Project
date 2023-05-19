@extends('layout')

@section('header')
    @include('header')

@section('content')
        <!-- cart item area start -->
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.html" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong> About us</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="about-page">
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="about-page-content">
                                <h3>Back-end Programming 2 - E-commerce Website Project</h3>
                                <p>Our Ecommerce Website project is the result of a combination of extensive back-end programming knowledge and creative thinking. We have applied popular programming languages and frameworks to build a powerful and flexible back-end system.</p>
                                <blockquote>
                                    <p>Back-end 2 programming is a fascinating and interesting subject in the IT curriculum. In this course, we collaborated and created a remarkable project - a potential e-commerce website. Our Ecommerce Website project is the result of a combination of extensive back-end programming knowledge and creative thinking. We have applied popular programming languages and frameworks to build a powerful and flexible back-end system.</p>
                                </blockquote>
                                <p>With the knowledge and skills learned from Back-end 2 programming, we are confident that the E-commerce website project will be an impressive and remarkable product. We have put effort and passion into every detail to ensure that our website delivers real value to our customers and contributes to the growth of e-commerce.</p>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <div class="about-img">
                                <img src="img/about/about.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="team-title">
                                <h3>meet the team</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <div class="single-member">
                                <div class="member-info">
                                    <img src="img/about/khoa.jpg" alt="">
                                    <div class="member-social-profile">
                                        <a href="https://www.facebook.com/khoasilvertail/"> <i class="fa fa-facebook"></i> </a>
                                    </div>
                                </div>
                                <h3>Trần Đăng Khoa</h3>
                                <p>Mobile Developer (Leader)</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="single-member">
                                <div class="member-info">
                                    <img src="img/about/hieu.jpg" alt="">
                                    <div class="member-social-profile">
                                        <a href="https://www.facebook.com/lee.hiu.71"> <i class="fa fa-facebook"></i> </a>
                                       
                                    </div>
                                </div>
                                <h3>Lê Minh Hiếu</h3>
                                <p>Website Developer</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="single-member">
                                <div class="member-info">
                                    <img src="img/about/phan.jpg" alt="">
                                    <div class="member-social-profile">
                                        <a href="https://www.facebook.com/tranphanleader"> <i class="fa fa-facebook"></i> </a>
                                       
                                    </div>
                                </div>
                                <h3>Trần Đức Hưng Phấn</h3>
                                <p>Mobile Developer</p>
                            </div>
                        </div>
                        <div class="col-md-3 hidden-sm">
                            <div class="single-member">
                                <div class="member-info">
                                    <img src="img/about/lananh.jpg" alt="">
                                    <div class="member-social-profile">
                                        <a href="https://www.facebook.com/EmmaLananh"> <i class="fa fa-facebook"></i> </a>
                                        
                                    </div>
                                </div>
                                <h3>Nguyễn Thị Lan Anh</h3>
                                <p>Tester</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart item area end -->

@section('footer')
    @include('footer')
@endsection
      