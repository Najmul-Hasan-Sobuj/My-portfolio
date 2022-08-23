@extends('backend.layouts.app')
@section('content')
    <!-- Basic layout-->
    <div class="card">
        <div class="card-body">
            <form id="myform" action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data"
                class="from-prevent-multiple-submits">
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
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" maxlength="20"
                                    class="form-control maxlength-options" placeholder="Enter Your Full title" required>
                            </div>

                            <div class="form-group row">
                                <label for="description">Description</label>
                                <input type="text" id="description" name="description" maxlength="110"
                                    class="form-control maxlength-options"
                                    placeholder="Together we the people achieve more than any single person could ever do alone."
                                    required>
                            </div>

                            <div class="form-group row">
                                <label>Your Photo:</label>
                                <label class="custom-file">
                                    <input type="file" id="icon" name="icon" class="custom-file-input"
                                        onchange="previewFile(this);" required>
                                    <span class="custom-file-label">Choose file</span>
                                </label>
                                <span class="form-text text-muted">Accepted formats: gif, png, jpg, jpeg.</span>
                            </div>
                            <!-- /basic layout -->

                            <div class="d-flex justify-content-end align-items-center">
                                <button id="reset" type="reset" class="btn btn-light">Reset <i
                                        class="icon-reload-alt ml-2"></i></button>
                                <a id="back" href="{{ route('service.index') }}" class="btn btn-success ml-3">Back <i
                                        class="fas fa-backward ml-2"></i></a>
                                <button id="submit" class="btn btn-primary ml-3 from-prevent-multiple-submits">Submit <i
                                        class="icon-paperplane ml-2" value="Validate!"></i></button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <!-- /basic layout -->
@endsection
