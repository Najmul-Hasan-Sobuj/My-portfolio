<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('global_assets/css/icons/icomoon/styles.min.css') }} " rel="stylesheet" type="text/css">
    <link href="{{ asset('global_assets/css/all.min.css') }} " rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
</head>

<body>

    <!-- Main navbar -->
    {{-- <div class="navbar navbar-expand-lg navbar-dark navbar-static">
        <div class="navbar-brand ml-2 ml-lg-0">
            <a href="index.html" class="d-inline-block">
                <img src="../../../../global_assets/images/logo_light.png" alt="">
            </a>
        </div>

        <div class="d-flex justify-content-end align-items-center ml-auto">
            <ul class="navbar-nav flex-row">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link">
                        <i class="icon-lifebuoy"></i>
                        <span class="d-none d-lg-inline-block ml-2">Support</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link">
                        <i class="icon-user-plus"></i>
                        <span class="d-none d-lg-inline-block ml-2">Register</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link">
                        <i class="icon-user-lock"></i>
                        <span class="d-none d-lg-inline-block ml-2">Login</span>
                    </a>
                </li>
            </ul>
        </div>
    </div> --}}
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        @yield('content')

    </div>
    <!-- /page content -->

    <!-- Core JS files -->
    <script src="{{ asset('global_assets/js/main/jquery.min.js') }} "></script>
    <script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js') }} "></script>
    <!-- /core JS files -->

    <script src="{{ asset('global_assets/js/app.js') }} "></script>
    <!-- /theme JS files -->
</body>

</html>
