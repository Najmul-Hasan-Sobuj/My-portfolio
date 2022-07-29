@extends('backend.layouts.app')
@section('title')
    500
@endsection
@section('content')
    <!-- Content area -->
    <div class="content d-flex justify-content-center align-items-center">

        <!-- Container -->
        <div class="flex-fill">

            <!-- Error title -->
            <div class="text-center mb-4">
                <img src="../../../../global_assets/images/error_bg.svg" class="img-fluid mb-3" height="230" alt="">
                <h1 class="display-2 font-weight-semibold line-height-1 mb-2">500</h1>
                <h6 class="w-md-25 mx-md-auto">Oops, an error has occurred. <br> The server encountered an internal error and
                    was unable to complete your request.</h6>
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
