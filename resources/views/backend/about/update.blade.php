@extends('backend.layouts.app')
@section('content')
    <!-- Basic layout-->
    <div class="card">
        <div class="card-body">
            <form id="myform" action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset class="mb-3">
                    <div class="row">
                        <div class="col-sm-6 col-lg-12">
                            <!-- Basic layout-->
                            <div class="form-group">
                                <label class="col-form-label">URL</label>
                                <input class="form-control" type="url" name="video_url" value="{{ @$about->video_url }}"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" maxlength="80"
                                    class="form-control maxlength-options" value="{{ @$about->title }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="details">Details</label>
                                <textarea rows="3" cols="3" maxlength="225" name="details" class="form-control maxlength-textarea"
                                    placeholder="This textarea has a limit of 225 chars." required>{{ @$about->details }}</textarea>
                            </div>
                            <!-- /basic layout -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Resume:</label>
                        <label class="custom-file">
                            <input type="file" id="resume" name="resume" class="custom-file-input"
                                onchange="previewFile(this);">
                            <span class="custom-file-label">Choose file</span>
                        </label>
                        <span class="form-text text-muted">Accepted formats: zip, rar, pdf.</span>
                    </div>
                </fieldset>
                <div class="d-flex justify-content-end align-items-center">
                    <button id="reset" type="reset" class="btn btn-light">Reset <i
                            class="icon-reload-alt ml-2"></i></button>
                    <a id="back" href="{{ route('about.index') }}" class="btn btn-success ml-3">Back <i
                            class="fas fa-backward ml-2"></i></a>
                    <button id="submit" class="btn btn-primary ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /basic layout -->
@endsection
