@extends('backend.layouts.app')
@section('content')
    <!-- Basic layout-->
    <div class="card">
        <div class="card-body">
            <form id="myform" action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset class="mb-3">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <div class="card">
                                <div class="card-img-actions m-1">
                                    <img id="previewImg" class="card-img img-fluid " style="height:440px; object-fit: cover;"
                                        src="{{ asset('global_assets/images/placeholders/placeholder.jpg') }}" alt="">
                                    <div class="card-img-actions-overlay card-img">
                                        <a href="{{ asset('global_assets/images/placeholders/placeholder.jpg') }}"
                                            class="btn btn-outline-white border-2 btn-icon rounded-pill"
                                            data-popup="lightbox" data-gallery="gallery1">
                                            <i class="icon-plus3"></i>
                                        </a>

                                        {{-- <a href="#" class="btn btn-outline-white border-2 btn-icon rounded-pill ml-2">
                                            <i class="icon-link"></i>
                                        </a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-8">
                            <!-- Basic layout-->
                            <div class="form-group row">
                                <label for="f_title">First Title</label>
                                <input type="text" id="f_title" name="f_title" maxlength="80"
                                    class="form-control maxlength-options"
                                    placeholder="FAILURE IS THE CONDIMENT THAT GIVES SUCCESS SUCCESS" required>
                            </div>

                            <div class="form-group row">
                                <label for="t_word">Title Word</label>
                                <input type="text" id="t_word" name="t_word" maxlength="15"
                                    class="form-control maxlength-options" placeholder="Colorful Word. IT'S FLAVOR"
                                    required>
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
                                <label for="description">Your message:</label>
                                <textarea rows="5" id="description" name="description" cols="5" maxlength="225" class="form-control maxlength-textarea"
                                    placeholder="This textarea has a limit of 225 chars." required></textarea>
                            </div>
                            <!-- /basic layout -->
                        </div>
                    </div>
                </fieldset>
                <div class="d-flex justify-content-end align-items-center">
                    <button id="reset" type="reset" class="btn btn-light">Reset <i
                            class="icon-reload-alt ml-2"></i></button>
                    <a id="back" class="btn btn-success ml-3">Back <i class="fas fa-backward ml-2"></i></a>
                    <button id="submit" class="btn btn-primary ml-3">Submit <i class="icon-paperplane ml-2"
                            value="Validate!"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /basic layout -->
@endsection