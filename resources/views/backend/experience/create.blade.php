@extends('backend.layouts.app')
@section('content')
    <!-- Basic layout-->
    <div class="card">
        <div class="card-body">
            <form id="myform" action="{{ route('experience.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset class="mb-3">
                    <div class="row">
                        <div class="col-sm-6 col-lg-12">
                            <div class="form-group row">
                                <label>Start Date:</label>
                                <input class="form-control" type="date" name="starting_year" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-12">
                            <div class="form-group row">
                                <label>End Date:</label>
                                <input class="form-control" type="date" name="ending_year" required>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12 col-lg-12">
                            <div class="form-group row">
                                <label for="designation">Designation</label>
                                <input type="text" id="designation" name="designation" maxlength="20"
                                    class="form-control maxlength-options" placeholder="Enter Your Designation" required>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12 col-lg-12">
                            <div class="form-group row">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" maxlength="30"
                                    class="form-control maxlength-options" placeholder="Enter Your Title" required>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12 col-lg-12">
                            <div class="form-group row">
                                <label for="details">Details</label>
                                <input type="text" id="details" name="details" maxlength="110"
                                    class="form-control maxlength-options" placeholder="Enter Details" required>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="d-flex justify-content-end align-items-center">
                    <button id="reset" type="reset" class="btn btn-light">Reset <i
                            class="icon-reload-alt ml-2"></i></button>
                    <a id="back" href="{{ route('experience.index') }}" class="btn btn-success ml-3">Back
                        <i class="fas fa-backward ml-2"></i></a>
                    <button id="submit" class="btn btn-primary ml-3">Submit <i class="icon-paperplane ml-2"
                            value="Validate!"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /basic layout -->
@endsection
