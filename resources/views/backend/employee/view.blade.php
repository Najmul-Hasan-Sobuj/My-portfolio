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
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" value="{{ $employee->name }}"
                                    maxlength="100" class="form-control" disabled>
                            </div>

                            <div class="form-group row">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="{{ $employee->email }}"
                                    class="form-control" disabled>
                            </div>

                            <div class="form-group row">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" name="phone" value="{{ $employee->phone }}"
                                    class="form-control" disabled>
                            </div>

                            <div class="form-group row">
                                <label for="address">Address</label>
                                <input type="text" id="address" name="address" value="{{ $employee->address }}"
                                    class="form-control" disabled>
                            </div>

                            <div class="form-group row">
                                <label for="experience">Experience</label>
                                <input type="text" id="experience" name="experience"
                                    value="{{ $employee->experience }}" class="form-control" disabled>
                            </div>

                            <!-- /basic layout -->
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="salary">Salary</label>
                        <input type="text" id="salary" name="salary" value="{{ $employee->salary }}"
                            class="form-control" disabled>
                    </div>

                    <div class="form-group row">
                        <label for="vacation">Vacation</label>
                        <input type="text" id="vacation" name="vacation" value="{{ $employee->vacation }}"
                            class="form-control" disabled>
                    </div>

                    <div class="form-group row">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" value="{{ $employee->city }}"
                            class="form-control" disabled>
                    </div>
                </fieldset>
                <div class="d-flex justify-content-end align-items-center">
                    <a href="{{ route('employee.index') }}" id="back" class="btn btn-success ml-3">Back <i
                            class="fas fa-backward ml-2"></i></a>
                </div>
            </form>
        </div>
    </div>
    <!-- /basic layout -->
@endsection
