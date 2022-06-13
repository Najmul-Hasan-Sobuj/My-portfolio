@extends('backend.layouts.app')
@section('content')
    <!-- Basic layout-->
    <div class="card">
        <div class="card-body">
            <form action="#">
                <fieldset class="mb-3">

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Name</label>
                        <div class="col-lg-10">
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label class="col-form-label col-lg-2">Password</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Input with placeholder</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" placeholder="Enter your username...">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Read only field</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" readonly value="read only">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Disabled field</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" disabled value="disabled">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Predefined value</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" value="https://">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Disabled autocomplete</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" placeholder="Autocomplete is off" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Maximum value</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" maxlength="4" placeholder="Maximum 4 characters">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2 cursor-pointer" for="clickable-label">Focus on label
                            click</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="clickable-label"
                                placeholder="Field focus on label click">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Static text</label>
                        <div class="col-lg-10">
                            <div class="form-control-plaintext">This is a static text</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Textarea</label>
                        <div class="col-lg-10">
                            <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"></textarea>
                        </div>
                    </div> --}}
                </fieldset>
                <div class="d-flex justify-content-end align-items-center">
                    <button id="reset" type="reset" class="btn btn-light">Reset <i class="icon-reload-alt ml-2"></i></button>
                    <button id="submit" class="btn btn-primary ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /basic layout -->
@endsection
