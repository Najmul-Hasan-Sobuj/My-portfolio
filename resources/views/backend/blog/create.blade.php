@extends('backend.layouts.app')
@section('content')
    <form id="myform" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <fieldset class="mb-3">
            <div class="d-flex align-items-stretch align-items-lg-start flex-column flex-lg-row">
                <!-- Left content -->
                <div class="flex-1 order-2 order-lg-1">

                    <!-- Post -->
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="mb-3 text-center">
                                    <a href="#" class="d-inline-block">
                                        <img id="previewImg" src="../../../../global_assets/images/placeholders/cover.jpg"
                                            class="img-fluid" alt="" style="height:440px; object-fit: cover;">
                                    </a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Select Category</label>
                                <select id="category_name" name="category_name" class="form-control select-search" data-fouc
                                    required>
                                    <option value="">select</option>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->category_title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" maxlength="50"
                                    class="form-control maxlength-options" placeholder="Enter Your Title" required>
                            </div>
                            <div class="form-group">
                                <label>Blog Cover Photo</label>
                                <label class="custom-file">
                                    <input type="file" id="cover_image" name="cover_image" class="custom-file-input"
                                        onchange="previewFile(this);" required>
                                    <span class="custom-file-label">Choose file</span>
                                </label>
                                <span class="form-text text-muted">Accepted formats: jpeg, png, jpg.</span>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-lg-3">
                                    <label>Profile Picture</label>
                                    <input type="file" id="pro_pic" name="pro_pic"class="form-control" required>
                                </div>

                                <div class="col-sm-6 col-lg-3">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" name="name" maxlength="20"
                                            class="form-control maxlength-options" placeholder="Enter Your Name" required>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /post -->
                        <!-- Comments -->
                        <div class="card-header header-elements-sm-inline">
                            <h6 class="card-title font-weight-semibold">Blog Post</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <textarea id="add-comment" placeholder="the" name="post" id="" cols="30" rows="10"></textarea>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary"><i class="icon-plus22 mr-1"></i> Post
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /comments -->
                </div>
                <!-- /left content -->
            </div>
        </fieldset>
    </form>
    <!-- /basic layout -->
@endsection
