@extends('frontend.layouts.app')
@section('content')
    <!--:::::WELCOME ATRA START :::::::-->
    <div class="welcome-area-wrap"
        style="background: url(front_end/img/bg/inner-header-bg.jpg);background-size: cover;background-position: center;"
        id="home">

        <!--::::: WELCOME CAROUSEL START :::::::-->
        <div class="welcome-area inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="inner-wlc">
                            <h2>Contact Us</h2>
                            <h3><a href="index.html">home</a>&nbsp;/&nbsp;Contact Us</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="inner-filltext">
                            <h1>Contact</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--::::: WELCOME CAROUSEL END:::::::-->
    </div>
    <!--:::::WELCOME AREA END :::::::-->


    <!--:::::CONTACT AREA START :::::::-->
    <div class="contact-page-area inner-bg-shpes section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 text-center">
                    <div class="contact__card">
                        <div class="contact__card__icon">
                            <i class="far fa-map-marker-alt"></i>
                        </div>
                        <h4>Address Line</h4>
                        <ul>
                            <li><a href="#">sekhertek road #7,Mohammadpur,Dhaka</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="contact__card">
                        <div class="contact__card__icon">
                            <i class="far fa-phone"></i>
                        </div>
                        <h4>Phone</h4>
                        <ul>
                            <li><a href="phoneto:+2546133254">+88 01722707693</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="contact__card">
                        <div class="contact__card__icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <h4>Email</h4>
                        <ul>
                            <li><a href="mailto:email@example.com">najmulhasansobuj.com</a></li>
                            <li><a href="mailto:email@example.com">najmulhasansobuj87.com</a></li>
                            <li><a href="mailto:einfo@yourdomain.com">najmul35-25981@diu.edu.bd</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="space-100"></div>
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="map mr-lg-4">
                        <img src="front_end/img/contact/contact-map.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="primery-heading">
                        <strong class="filltext">Contact Us</strong>
                        <small>EXPLORE THE FEATURES</small>
                        <h2>Get In one tuch</h2>
                    </div>
                    <div class="space-20"></div>
                    <div class="contact-form">
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <input type="text" name="name" placeholder="Name">
                            <input type="email" name="email" placeholder="Email">
                            <textarea name="message" id="message" cols="30" rows="3" placeholder="Message"></textarea>
                            <button class="btn btn-lg btn-success ml-3">sent now <i
                                    class="fal fa-comments-alt"></i></button>
                            {{-- <a href="#" class="subscribe-btn">sent now <i class="fal fa-comments-alt"></i></a> --}}
                        </form>
                        <div class="space-20"></div>
                    </div>
                </div>
            </div>
        </div>
        <img src="front_end/img/bg/service-bg.svg" alt="" class="inner-shape1">
        <img src="front_end/img/bg/inner-bg1.svg" alt="" class="inner-shape2">
    </div>
    <!--:::::CONTACT AREA END :::::::-->

    <!--:::::CALL TO ACTION AREA START :::::::-->
    <div class="cta-area padding-top cta-primery"
        style="background-image: url(front_end/img/bg/world-map.svg);background-position: center;background-size: cover;background-repeat: no-repeat;"
        id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="primery-heading cta-heading">
                        <small>Newsletter</small>
                        <div class="space-20"></div>
                        <h2>Stay up to date, subscribe to the free <span>newsletter !</span></h2>
                    </div>
                    <div class="space-40"></div>
                    <div class="cta-form">
                        <form action="#">
                            <input type="email" placeholder="Enter Your Email..">
                            <a href="#" class="subscribe-btn">subscribe <i class="fal fa-comments-alt"></i></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-100"></div>

        <!--:::::SOCIAL AREA START :::::::-->
        <div class="social-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        <div class="single-social">
                            <div class="sinlge-social-hover"
                                style="background: url(front_end/img/social/social4.png);background-position: center;-webkit-background-size: cover;
                                background-size: cover;">
                                <a href="">
                                    <span class="single-social-icon">
                                        <i class="fab fa-linkedin-in"></i>
                                    </span>
                                    <p class="single-soicial-text">
                                        join our
                                        instagram
                                        community!
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="single-social">
                            <div class="sinlge-social-hover"
                                style="background: url(front_end/img/social/social1.png);background-position: center;-webkit-background-size: cover;
                                background-size: cover;">
                                <a href="">
                                    <span class="single-social-icon">
                                        <i class="fab fa-facebook-f"></i>
                                    </span>
                                    <p class="single-soicial-text">
                                        join our
                                        instagram
                                        community!
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="single-social">
                            <div class="sinlge-social-hover"
                                style="background: url(front_end/img/social/social2.png);background-position: center;-webkit-background-size: cover;
                                background-size: cover;">
                                <a href="">
                                    <span class="single-social-icon">
                                        <i class="fas fa-basketball-ball"></i>
                                    </span>
                                    <p class="single-soicial-text">
                                        join our
                                        instagram
                                        community!
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="single-social">
                            <div class="sinlge-social-hover"
                                style="background: url(front_end/img/social/social3.png);background-position: center;-webkit-background-size: cover;
                                background-size: cover;">
                                <a href="">
                                    <span class="single-social-icon">
                                        <i class="fab fa-twitter"></i>
                                    </span>
                                    <p class="single-soicial-text">
                                        join our
                                        instagram
                                        community!
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="single-social">
                            <div class="sinlge-social-hover"
                                style="background: url(front_end/img/social/social2.png);background-position: center;-webkit-background-size: cover;
                                background-size: cover;">
                                <a href="">
                                    <span class="single-social-icon">
                                        <i class="fab fa-instagram"></i>
                                    </span>
                                    <p class="single-soicial-text">
                                        join our
                                        instagram
                                        community!
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--:::::SOCIAL AREA END :::::::-->
        <img src="front_end/img/icon/cta1.png" alt="" class="cta-shape cta-shap1">
        <img src="front_end/img/icon/cta2.png" alt="" class="cta-shape cta-shap2">
        <img src="front_end/img/icon/cta3.png" alt="" class="cta-shape cta-shap3">
        <img src="front_end/img/icon/cta4.png" alt="" class="cta-shape cta-shap4">
        <img src="front_end/img/icon/cta5.png" alt="" class="cta-shape cta-shap5">
    </div>
    <!--:::::CALL TO ACTION AREA END :::::::-->
@endsection
