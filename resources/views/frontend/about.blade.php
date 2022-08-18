@extends('frontend.layouts.app')
@section('content')
    <style>
        .vid-wrapper {
            text-align: center;
            padding: 20px;
        }

        .vid {
            display: inline-block;
            vertical-align: top;
            position: relative;
            border: 1px solid;
            padding: 2px;
            cursor: pointer;
        }

        .vid::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        h2.vid-head {
            font-size: 20px;
            color: #333;
        }

        /* Video Popup */
        .video-popup {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 998;
            background: rgba(0, 0, 0, .7);
            cursor: pointer;
            display: none !important;
        }

        .video-popup.show-video {
            display: flex !important;
        }

        .iframe-wrapper {
            position: relative;
        }

        .iframe-wrapper .close-video {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            top: -20px;
            right: 0;
            background: url(https://image.flaticon.com/icons/svg/149/149690.svg) #fff;
            border-radius: 50%;
            background-size: cover;
        }
    </style>
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
                        <iframe type="text/html" height="380" src="{{ $about->video_url }}" frameborder="0"></iframe>
                        <div id="video-overlay" class="video-overlay">
                            <a class="video-overlay-close"></a>
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
@endsection

@push('script')
    <script src="">
        $(document).ready(function() {
            $('.vid-slider .vid').on('click', function() {
                // get required DOM Elements
                var iframe_src = $(this).children('iframe').attr('src'),
                    iframe = $('.video-popup'),
                    iframe_video = $('.video-popup iframe'),
                    close_btn = $('.close-video');
                iframe_src = iframe_src + '?autoplay=1&rel=0'; // for autoplaying the popup video

                // change the video source with the clicked one
                $(iframe_video).attr('src', iframe_src);
                $(iframe).fadeIn().addClass('show-video');

                // remove the video overlay when clicking outside the video
                $(document).on('click', function(e) {
                    if ($(iframe).is(e.target) || $(close_btn).is(e.target)) {
                        $(iframe).removeClass('show-video');
                        $(iframe_video).attr('src', '');
                    }
                });

            });

        });
    </script>
@endpush
