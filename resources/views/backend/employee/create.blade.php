@extends('backend.layouts.app')
@section('content')
    <!-- Basic layout-->
    <div class="card">
        <div class="card-body">
            <form id="myform" action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset class="mb-3">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <div class="card">
                                <div class="card-img-actions m-1">
                                    <img id="previewImg" class="card-img img-fluid "
                                        style="height:440px; object-fit: cover;"
                                        src="{{ asset('global_assets/images/placeholders/placeholder.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-8">
                            <!-- Basic layout-->
                            <div class="form-group row">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" maxlength="100"
                                    class="form-control maxlength-options" placeholder="Enter Your Full Name" required>
                            </div>

                            <div class="form-group row">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" maxlength="150"
                                    class="form-control maxlength-options" placeholder="Enter Your Email Address" required>
                            </div>

                            <div class="form-group row">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" name="phone" maxlength="30"
                                    class="form-control maxlength-options" placeholder="Enter Your Phone Number" required>
                            </div>

                            <div class="form-group row">
                                <label for="address">Address</label>
                                <input type="text" id="address" name="address" maxlength="255"
                                    class="form-control maxlength-options" placeholder="Enter Your Current Address"
                                    required>
                            </div>

                            <div class="form-group row">
                                <label for="experience">Experience</label>
                                <input type="text" id="experience" name="experience" maxlength="50"
                                    class="form-control maxlength-options" placeholder="Enter Your Experience" required>
                            </div>

                            <!-- /basic layout -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Your Photo:</label>
                        <label class="custom-file">
                            <input type="file" id="image" name="image" class="custom-file-input"
                                onchange="previewFile(this);">
                            <span class="custom-file-label">Choose file</span>
                        </label>
                        <span class="form-text text-muted">Accepted formats: gif, png, jpg, heic. File
                            height:475 * width:822</span>
                    </div>

                    <div class="form-group row">
                        <label for="salary">Salary</label>
                        <input type="text" id="salary" name="salary" maxlength="50"
                            class="form-control maxlength-options" placeholder="Enter Your Number of Salary" required>
                    </div>

                    <div class="form-group row">
                        <label for="vacation">Vacation</label>
                        <input type="text" id="vacation" name="vacation" maxlength="50"
                            class="form-control maxlength-options" placeholder="Enter Your Number of Vacation" required>
                    </div>

                    <div class="form-group row">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" maxlength="100"
                            class="form-control maxlength-options" placeholder="Enter Your City" required>
                    </div>
                </fieldset>
                <div class="d-flex justify-content-end align-items-center">
                    <button id="reset" type="reset" class="btn btn-light">Reset <i
                            class="icon-reload-alt ml-2"></i></button>
                    <a id="back" href="{{ route('employee.index') }}" class="btn btn-success ml-3">Back <i
                            class="fas fa-backward ml-2"></i></a>
                    <button id="submit" class="btn btn-primary ml-3">Submit <i class="icon-paperplane ml-2"
                            value="Validate!"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /basic layout -->
@endsection
