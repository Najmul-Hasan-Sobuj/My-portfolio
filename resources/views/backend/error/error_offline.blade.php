@extends('backend.layouts.app')
@section('content')
    <!-- Content area -->
    <div class="content d-flex justify-content-center align-items-center">

        <!-- Container -->
        <div class="flex-fill">

            <!-- Error title -->
            <div class="text-center mb-4">
                <img src="../../../../global_assets/images/error_bg.svg" class="img-fluid mb-4" height="230" alt="">
                <h1 class="display-3 font-weight-semibold line-height-1 mb-2">Offline</h1>
                <h5>Sorry, our website is temporarily offline. <br> We'll be back shortly.</h5>
            </div>
            <!-- /error title -->


            <!-- Error content -->
            <div class="text-center">
                <a href="{{ route('dashboard') }}" class="btn btn-primary"><i class="icon-home4 mr-2"></i> Return to
                    dashboard</a>
            </div>
            <!-- /error wrapper -->

        </div>
        <!-- /container -->

    </div>
    <!-- /content area -->
@endsection
