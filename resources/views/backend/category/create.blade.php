@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <form id="myform" action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset class="mb-3">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="form-group">
                                <label for="category_title">Category Name</label>
                                <input type="text" id="category_title" name="category_title" maxlength="20"
                                    class="form-control maxlength-options" placeholder="Enter a Category Name"value=""
                                    required>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-4">
                            <div class="d-flex justify-content-end align-items-center">
                                <button id="reset" type="reset" class="btn btn-light">Reset <i
                                        class="icon-reload-alt ml-2"></i></button>
                                <button id="submit" class="btn btn-primary ml-3">Submit <i class="icon-paperplane ml-2"
                                        value="Validate!"></i></button>
                            </div>
                        </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
