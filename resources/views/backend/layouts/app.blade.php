<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('global_assets/images/logo_icon_dark.png') }}">
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('global_assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('global_assets/css/icons/material/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('global_assets/css/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('global_assets/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('global_assets/js/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css">
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
    <script src="{{ asset('global_assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    {{-- <script src="{{ asset('global_assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/visualization/d3/d3_tooltip.js ') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/pickers/daterangepicker.js') }}"></script> --}}

    <script src="{{ asset('global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/tables/datatables/extensions/buttons.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/notifications/sweet_alert.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/media/glightbox.min.js') }}"></script>

    <script src="{{ asset('global_assets/js/plugins/forms/inputs/inputmask.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/forms/inputs/autosize.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/forms/inputs/formatter.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/forms/inputs/typeahead/handlebars.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/forms/inputs/passy.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/forms/inputs/maxlength.min.js') }}"></script>

    <!-- Theme JS files -->
    <script src="{{ asset('global_assets/js/plugins/ui/prism.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/notifications/bootbox.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/editors/summernote/summernote.min.js') }}"></script>

    <script src="{{ asset('global_assets/js/app.js') }}"></script>

    <script src="{{ asset('global_assets/js/demo_pages/blog_single.js') }}"></script>
    <script src="{{ asset('global_assets/js/demo_pages/components_modals.js') }}"></script>
    <script src="{{ asset('global_assets/js/demo_pages/form_select2.js') }}"></script>

    <script src="{{ asset('global_assets/js/custom.js') }}"></script>
    <script src="{{ asset('global_assets/js/demo_pages/content_cards_content.js') }}"></script>

    <script src="{{ asset('global_assets/js/demo_pages/extra_sweetalert.js') }}"></script>

    <script src="{{ asset('global_assets/js/demo_pages/form_controls_extended.js') }}"></script>

    <script src="{{ asset('global_assets/js/demo_pages/gallery.js') }}"></script>
    <script src="{{ asset('global_assets/js/demo_pages/form_layouts.js') }}"></script>
    <script src="{{ asset('global_assets/js/demo_pages/datatables_advanced.js') }}"></script>
    <script src="{{ asset('global_assets/js/demo_pages/datatables_extension_buttons_init.js') }}"></script>

    <script src="{{ asset('global_assets/js/toastr/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
    <!-- /theme JS files -->
    @stack('script')

</body>

</html>
