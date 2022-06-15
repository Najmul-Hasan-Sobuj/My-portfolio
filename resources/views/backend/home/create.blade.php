@extends('backend.layouts.app')
@section('content')
    <!-- Basic layout-->
    <div class="card">
        <div class="card-body">
            <form id="myform" action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data">
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
                                <label for="t_word">Title Word</label>
                                <input type="text" id="t_word" name="t_word" minlength="5" class="form-control"
                                    placeholder="Colorful Word. IMAGINATION">
                            </div>

                            <div class="form-group row">
                                <label for="s_title">Second Title</label>
                                <input type="text" id="s_title" name="s_title" minlength="20" class="form-control"
                                    placeholder="IS MORE IMPORTANT THAN KNOWLEDGE">
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
                                <label for="description">Description</label>
                                <input type="text" id="description" name="description" minlength="50" class="form-control"
                                    placeholder="Together we the people achieve more than any single person could ever do alone.">
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

@push('script')
    <script type="text/javascript">
        // $('input').keyup(function() {
        //     console.log(this.value.length);
        // });

        // console.log(this.value.length);
        $(document).ready(function() {
            $('input').keyup(function() {
                jQuery.validator.setDefaults({
                    debug: true,
                    success: "valid"
                });
                $("#myform").validate({
                    rules: {
                        // t_word: "required", if only field are required 
                        t_word: {
                            required: true,
                            maxlength: 15 + value.length,
                        },
                        s_title: {
                            required: true,
                            maxlength: 45,
                        },
                        description: {
                            required: true,
                            maxlength: 100,
                        },
                    }
                });
            });
        });
    </script>
@endpush
