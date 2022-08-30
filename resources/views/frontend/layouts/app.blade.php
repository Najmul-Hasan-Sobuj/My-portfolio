<!DOCTYPE html>
<html lang="en">
<!--HTML START-->

<head>
    <!--HEAD START-->
    <title>MD Najmul</title>
    <!--::::: support meta :::::::-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--:::::icon Calling:::::::-->
    <link rel="icon" href="">

    <!--::::: ALL CSS CALLING :::::::-->
    <link rel="stylesheet" href="{{ asset('front_end/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/plugins/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/plugins/modal-video.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/plugins/stellarnav.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/plugins/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/button.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/inner.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/css/responsive.css') }}">
    <link href="{{ asset('global_assets/js/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css">


</head>
<!--HEADE END-->

<body>
    <!--BODY START-->

    <!--PLACEHOLDER AREA START-->
    <div class="preloader">
        <div class="lds-dual-ring"></div>
    </div>
    <!--PLACEHOLDER AREA END-->

    <div class="site site-white">
        <!--::::: SITE AREA START :::::::-->
        <!--::::: HEADER AREA START :::::::-->
        @include('frontend.layouts.components.header')
        <!--::::: HEADER AREA END :::::::-->
        @yield('content')
        <!--:::::FOOTER AREA START :::::::-->
        @include('frontend.layouts.components.footer')
        <!--:::::FOOTER AREA END :::::::-->

    </div>
    <!--:::::SITE AREA END :::::::-->



    <!--:::::ALL JS FILES :::::::-->
    <script src="{{ asset('front_end/js/plugins/jQuery.2.1.0.min.js') }}"></script>
    <script src="{{ asset('front_end/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front_end/js/plugins/jquery.nav.js') }}"></script>
    <script src="{{ asset('front_end/js/plugins/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('front_end/js/plugins/jquery-modal-video.min.js') }}"></script>
    <script src="{{ asset('front_end/js/plugins/stellarnav.js') }}"></script>
    <script src="{{ asset('front_end/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('front_end/js/plugins/owl.carousel.js') }}"></script>
    <script src="{{ asset('front_end/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('front_end/js/plugins/appear.js') }}"></script>
    <script src="{{ asset('front_end/js/plugins/easypiechart.min.js') }}"></script>
    <script src="{{ asset('front_end/js/plugins/animatenumber.min.js') }}"></script>
    <script src="{{ asset('front_end/js/plugins/bars.js') }}"></script>
    <script src="{{ asset('front_end/js/plugins/circle-progress.js') }}"></script>
    <script src="{{ asset('front_end/js/plugins/jquery.hoverdir.js') }}"></script>
    <script src="{{ asset('front_end/js/plugins/isotop.v3.0.4.min.js') }}"></script>
    <script src="{{ asset('front_end/js/main.js') }}"></script>
    <script src="{{ asset('global_assets/js/toastr/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
    @stack('script')

</body>
<!--BODY END-->

</html>
<!--HTML END-->
