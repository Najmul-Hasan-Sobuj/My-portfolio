<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('global_assets/css/icons/icomoon/styles.min.css') }} " rel="stylesheet" type="text/css">
    <link href="{{ asset('global_assets/css/all.min.css') }} " rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
</head>

<body>

    <!-- Main navbar -->
    @include('backend.layouts.components.main_navbar')
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- User menu -->
                @include('backend.layouts.components.user_menu')
                <!-- /user menu -->


                <!-- Main navigation -->
                @include('backend.layouts.components.main_navigation')
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                <!-- Page header -->
                @include('backend.layouts.components.page_header')
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">
                    @yield('content')
                </div>
                <!-- /content area -->


                <!-- Footer -->
                @include('backend.layouts.components.footer')
                <!-- /footer -->

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

    <!-- Core JS files -->
    <script src="{{ asset('global_assets/js/main/jquery.min.js') }} "></script>
    <script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js') }} "></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('global_assets/js/plugins/visualization/d3/d3.min.js') }} "></script>
    <script src="{{ asset('global_assets/js/plugins/visualization/d3/d3_tooltip.js ') }} "></script>
    <script src="{{ asset('global_assets/js/plugins/ui/moment/moment.min.js') }} "></script>
    <script src="{{ asset('global_assets/js/plugins/pickers/daterangepicker.js') }} "></script>

    <script src="{{ asset('global_assets/js/app.js') }} "></script>
    <!-- /theme JS files -->
</body>

</html>
