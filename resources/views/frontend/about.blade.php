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
                            <h2>About Us</h2>
                            <h3><a href="index.html">home</a>&nbsp;/&nbsp;About</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="inner-filltext">
                            <h1>About</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--::::: WELCOME CAROUSEL END:::::::-->
    </div>
    <!--:::::WELCOME AREA END :::::::-->


    <!--:::::ABOUT AREA START :::::::-->
    <div class="about-area about-area-primery section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="about-shape">
                        <div class="about-img-section about-img-section1 text-center">
                            <a id="play-video" class="video-play-button"
                                href="https://www.youtube.com/watch?v=POg_AuFtUlA&list=RDPOg_AuFtUlA&start_radio=1"><span></span></a>
                            <div id="video-overlay" class="video-overlay">
                                <a class="video-overlay-close"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 align-self-center">
                    <div class="primery-heading">
                        <strong class="filltext">About us</strong>
                        @if (!empty($about))
                            <h2>{{ $about->title }}</span></h2>
                            <div class="space-20"></div>
                            <p>{{ $about->details }}</p>
                            <div class="space-40"></div>
                            <a href="{{ route('about.res') }}" class="cbtn cbnt1 fadeInDown animated">download cv <i
                                    class="fal fa-angle-right"></i></a>
                        @else
                            <span>Data not found</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--:::::ABOUT AREA END :::::::-->

    {{-- <div class="modal-video" tabindex="-1" role="dialog" aria-label="You just openned the modal video" id="L7CBM8H6XI9SP">
        <div class="modal-video-body">
            <div class="modal-video-inner">
                <div class="modal-video-movie-wrap" style="padding-bottom:56.25%">
                    <button class="modal-video-close-btn js-modal-video-dismiss-btn"
                        aria-label="Close the modal by clicking here"></button>
                    <iframe width="460" height="230"
                        src="//www.youtube.com/embed/undefined?autoplay=1&amp;cc_load_policy=1&amp;color=null&amp;controls=1&amp;disablekb=0&amp;enablejsapi=0&amp;end=null&amp;fs=1&amp;h1=null&amp;iv_load_policy=1&amp;list=null&amp;listType=null&amp;loop=0&amp;modestbranding=null&amp;origin=null&amp;playlist=null&amp;playsinline=null&amp;rel=0&amp;showinfo=1&amp;start=0&amp;wmode=transparent&amp;theme=dark&amp;nocookie=false"
                        frameborder="0" allowfullscreen="true" tabindex="-1">
                    </iframe>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
