@extends('backend.layouts.app')
@section('content')
    <!-- Basic layout-->
    <div class="card">
        <div class="card-body">
            <form id="myform" action="{{ route('provider.home.update') }}" method="POST" enctype="multipart/form-data"
                class="from-prevent-multiple-submits">
                @csrf
                <fieldset class="mb-3">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <div class="card">
                                <div class="card-img-actions m-1">
                                    <img id="previewImg" class="card-img img-fluid "
                                        style="height:440px; object-fit: cover;"
                                        src="{{ asset('global_assets/uploads/' . @$home->image) }}" alt="">
                                    <div class="card-img-actions-overlay card-img">
                                        <a href="{{ asset('global_assets/uploads/' . @$home->image) }}"
                                            class="btn btn-outline-white border-2 btn-icon rounded-pill"
                                            data-popup="lightbox" data-gallery="gallery1">
                                            <i class="icon-plus3"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-8">
                            <!-- Basic layout-->
                            <div class="form-group row">
                                <label for="color_word">Single Word Colorful Title</label>
                                <input type="text" id="color_word" name="color_word" maxlength="10"
                                    class="form-control maxlength-options" value="{{ @$home->color_word }}" required>
                            </div>

                            <div class="form-group row">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" maxlength="80"
                                    class="form-control maxlength-options" value="{{ @$home->title }}" required>
                            </div>

                            <div class="form-group row">
                                <label for="quote">Quote</label>
                                <input type="text" id="quote" name="quote" maxlength="80"
                                    class="form-control maxlength-options" value="{{ @$home->quote }}" required>
                            </div>

                            <!-- /basic layout -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Your Photo:</label>
                        <label class="custom-file">if
                            <input type="file" id="image" name="image" class="custom-file-input"
                                onchange="previewFile(this);">
                            <span class="custom-file-label">Choose file</span>
                        </label>
                    </div>
                </fieldset>
                <div class="d-flex justify-content-end align-items-center">
                    <button id="submit" class="btn btn-primary ml-3 from-prevent-multiple-submits">Submit <i
                            class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /basic layout -->
@endsection
