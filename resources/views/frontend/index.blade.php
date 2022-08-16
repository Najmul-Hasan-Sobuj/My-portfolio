@extends('frontend.layouts.app')
@section('content')
    <!--:::::WELCOME ATRA START :::::::-->
    <div class="welcome-area-wrap welcome__wrap2">
        @include('frontend.layouts.home')
    </div>
    <!--:::::WELCOME AREA END :::::::-->

    <!--:::::SERVICE AREA START :::::::-->
    <div class="service-area service-primery padding-top" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-service pricing2">
                        <div class="service-icon">
                            <img src="front_end/img/icon/service1.svg" alt="">
                        </div>
                        <div class="service-text">
                            <h4>design principales</h4>
                            <p>Need a project completed by an expert? Let’s go! Access a Human Resources Consultant
                                to answer questions</p>
                        </div>
                        <div class="circles-wrap">
                            <div class="circles">
                                <span class="circle circle-1"></span>
                                <span class="circle circle-2"></span>
                                <span class="circle circle-3"></span>
                                <span class="circle circle-4"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-service active pricing2">
                        <div class="service-icon">
                            <img src="front_end/img/icon/service2.svg" alt="">
                        </div>
                        <div class="service-text">
                            <h4>Product Design</h4>
                            <p>Need a project completed by an expert? Let’s go! Access a Human Resources Consultant
                                to answer questions</p>
                        </div>

                        <div class="circles-wrap">
                            <div class="circles">
                                <span class="circle circle-1"></span>
                                <span class="circle circle-2"></span>
                                <span class="circle circle-3"></span>
                                <span class="circle circle-4"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-service pricing2">
                        <div class="service-icon">
                            <img src="front_end/img/icon/service3.svg" alt="">
                        </div>
                        <div class="service-text">
                            <h4>Branding Design</h4>
                            <p>Need a project completed by an expert? Let’s go! Access a Human Resources Consultant
                                to answer questions</p>
                        </div>

                        <div class="circles-wrap">
                            <div class="circles">
                                <span class="circle circle-1"></span>
                                <span class="circle circle-2"></span>
                                <span class="circle circle-3"></span>
                                <span class="circle circle-4"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--:::::SERVICE AREA END :::::::-->

    <!--:::::SKILL AREA START :::::::-->
    @include('frontend.experience ')
    <!--:::::SKILL AREA END :::::::-->

    <div class="container">
        <div class="border_separatior"></div>
    </div>


    <!--:::::PROJECT AREA START :::::::-->
    <div class="project-area project-area2 project-area-primery padding-top" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="primery-heading">
                        <strong class="filltext">our projects</strong>
                        <small>WORKING PROCESS</small>
                        <h2>lastet working <span>project</span></h2>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="primery-info-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ratione reprehenderit </p>
                    </div>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row">
                <ul id="da-thumbs" class="da-thumbs portfolio-carousel2 owl-carousel">
                    <li>
                        <a href="portfolio.html">
                            <img src="front_end/img/project/project1.png" alt="">
                            <div><span>Menu by Simon Jensen</span></div>
                        </a>
                    </li>
                    <li>
                        <a href="portfolio.html">
                            <img src="front_end/img/project/project2.png" alt="">
                            <div><span>Menu by Simon Jensen</span></div>
                        </a>
                    </li>
                    <li>
                        <a href="portfolio.html">
                            <img src="front_end/img/project/project3.png" alt="">
                            <div><span>Menu by Simon Jensen</span></div>
                        </a>
                    </li>
                    <li>
                        <a href="portfolio.html">
                            <img src="front_end/img/project/project4.png" alt="">
                            <div>
                                <span>Menu by Simon Jensen</span>

                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="portfolio.html">
                            <img src="front_end/img/project/project2.png" alt="">
                            <div>
                                <span>Menu by Simon Jensen</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--:::::PROJECT AREA END :::::::-->

    <!--:::::TESTIMONIALS AREA START :::::::-->
    @include('frontend.testimonials')
    <!--:::::TESTIMONIALS AREA END :::::::-->

    <!--:::::COUNTER AREA START :::::::-->
    <div class="fun-facts center section-padding" id="facts">
        <div class="pattern"></div>
        <div class="container">
            <div class="row">
                <!-- Fact No. 1 -->
                <div class="col-md-3 col-sm-6">
                    <div class="fact Client">
                        <i class="far fa-smile"></i>
                        <h2 id="number_1">0</h2>
                        <span>Happy Client</span>
                    </div>
                </div>
                <!-- Fact No. 2 -->
                <div class="col-md-3 col-sm-6">
                    <div class="fact Team">
                        <i class="far fa-clock"></i>
                        <h2 id="number_2">0</h2>
                        <span>Support Team</span>
                    </div>
                </div>
                <!-- Fact No. 3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="fact Count">
                        <i class="far fa-sliders-h"></i>
                        <h2 id="number_3">0</h2>
                        <span>Sales Count</span>
                    </div>
                </div>
                <!-- Fact No. 4 -->
                <div class="col-md-3 col-sm-6">
                    <div class="fact Awward">
                        <i class="far fa-trophy"></i>
                        <h2 id="number_4">0</h2>
                        <span>Awward</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--:::::COUNTER AREA END :::::::-->

    <!--:::::PRICING AREA START :::::::-->
    <div class="pricing-area padding-top" id="price">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="primery-heading">
                        <strong class="filltext">payment</strong>
                        <small>SPECIFICATIONS</small>
                        <h2>All OUR PAYMENT <span>options</span></h2>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="primery-info-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ratione reprehenderit </p>
                    </div>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-service pricing2">
                        <div class="service-icon">
                            <img src="front_end/img/icon/service1.svg" alt="">
                        </div>
                        <div class="service-text">
                            <h3>Influencer</h3>
                            <h5>best for small investors</h5>
                        </div>
                        <div class="separator"></div>
                        <div class="service-text">
                            <h3>$104</h3>
                            <h5>Per month</h5>
                        </div>

                        <a href="#" class="cbtn pricing-btn">read more <i class="fal fa-angle-right"></i></a>
                        <div class="circles-wrap">
                            <div class="circles">
                                <span class="circle circle-1"></span>
                                <span class="circle circle-2"></span>
                                <span class="circle circle-3"></span>
                                <span class="circle circle-4"></span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="single-service active pricing2">
                        <div class="service-icon">
                            <img src="front_end/img/icon/service2.svg" alt="">
                        </div>
                        <div class="service-text">
                            <h3>AGENCY</h3>
                            <h5>best for small investors</h5>
                        </div>
                        <div class="separator"></div>
                        <div class="service-text">
                            <h3>$204</h3>
                            <h5>Per month</h5>
                        </div>
                        <a href="#" class="cbtn pricing-btn">read more <i class="fal fa-angle-right"></i></a>
                        <div class="circles-wrap">
                            <div class="circles">
                                <span class="circle circle-1"></span>
                                <span class="circle circle-2"></span>
                                <span class="circle circle-3"></span>
                                <span class="circle circle-4"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-service pricing2">
                        <div class="service-icon">
                            <img src="front_end/img/icon/service3.svg" alt="">
                        </div>
                        <div class="service-text">
                            <h3>ENTERPRISE</h3>
                            <h5>best for small investors</h5>
                        </div>
                        <div class="separator"></div>
                        <div class="service-text">
                            <h3>LET’S CHART</h3>
                            <h5>Per month</h5>
                        </div>

                        <a href="#" class="cbtn pricing-btn">read more <i class="fal fa-angle-right"></i></a>
                        <div class="circles-wrap">
                            <div class="circles">
                                <span class="circle circle-1"></span>
                                <span class="circle circle-2"></span>
                                <span class="circle circle-3"></span>
                                <span class="circle circle-4"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--:::::PRICING AREA END :::::::-->

    <!--:::::BLOG AREA START :::::::-->
    <div class="blog-area section-padding" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="primery-heading">
                        <strong class="filltext">news & blog</strong>
                        <small>RECENT NEWS DESK</small>
                        <h2>lastet news & <span>blogs</span></h2>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="primery-info-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ratione reprehenderit </p>
                    </div>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row">
                <div class="blogs owl-carousel">
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <img src="front_end/img/blog/team__1.png" alt="">
                        </div>
                        <div class="blog-description">
                            <p>September 28, 2019</p>
                            <a href="single-blog.html">Hypnosis 12 Steps To Acquire Mind Power...</a>
                            <a href="single-blog.html" class="readmore-btn"><i class="fal fa-arrow-right"></i>
                                read
                                more</a>
                        </div>

                    </div>
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <div class="single-blog-img">
                                <img src="front_end/img/blog/team__2.png" alt="">
                            </div>
                        </div>
                        <div class="blog-description">
                            <p>September 28, 2019</p>
                            <a href="single-blog.html">Addiction When Gambling Becomes...</a>
                            <a href="single-blog.html" class="readmore-btn"><i class="fal fa-arrow-right"></i>
                                read
                                more</a>
                        </div>

                    </div>
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <div class="single-blog-img">
                                <img src="front_end/img/blog/team__3.png" alt="">
                            </div>
                        </div>
                        <div class="blog-description">
                            <p>September 28, 2019</p>
                            <a href="single-blog.html">Harness The Power Of Your Dreams...</a>
                            <a href="single-blog.html" class="readmore-btn"><i class="fal fa-arrow-right"></i>
                                read
                                more</a>
                        </div>

                    </div>
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <div class="single-blog-img">
                                <img src="front_end/img/blog/team__4.png" alt="">
                            </div>
                        </div>
                        <div class="blog-description">
                            <p>September 28, 2019</p>
                            <a href="single-blog.html">Addiction When Gambling Becomes...</a>
                            <a href="single-blog.html" class="readmore-btn"><i class="fal fa-arrow-right"></i>
                                read
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--:::::BLOG AREA END :::::::-->


    <!--:::::CALL TO ACTION AREA START :::::::-->
    <div class="cta-area cta-are2 padding-top cta-primery"
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
        <div class="space-20"></div>
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
