@extends('backend.layouts.app')
@section('content')
    <!-- Basic layout-->
    <div class="card">
        <div class="card-body">
            <form id="myform" action="{{ route('provider.icon.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset class="mb-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group row">
                                <div class="col-lg-9">
                                    <label>Upload Icon:</label>
                                    <label class="custom-file">
                                        <input type="file" id="icon" name="icon" class="custom-file-input"
                                            onchange="previewFile(this);">
                                        <span class="custom-file-label">Choose file</span>
                                    </label>
                                    <span class="form-text text-muted">Accepted formats: gif, png, jpg, heic.</span>
                                </div>
                                <div class="col-lg-3 mt-4">
                                    <div class="d-flex justify-content-end align-items-center">
                                        <button id="reset" type="reset" class="btn btn-light">Reset <i
                                                class="icon-reload-alt ml-2"></i></button>
                                        <button id="submit" class="btn btn-primary ml-3">Submit <i
                                                class="icon-paperplane ml-2" value="Validate!"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </fieldset>
            </form>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Mini size -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title">Service Category Card</h6>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                    <a class="list-icons-item" data-action="reload"></a>
                                    <a class="list-icons-item" data-action="remove"></a>
                                </div>
                            </div>
                        </div>
                        <div class="collapse show">
                            <div class="row mx-1">
                                @if ($pickIcon)
                                    @foreach ($pickIcon as $pickIcons)
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="card">
                                                <div class="card-img-actions mx-1 mt-1">
                                                    <img style="height:440px; object-fit: cover;" class="card-img img-fluid"
                                                        src="{{ asset('global_assets/uploads/' . $pickIcons->icon) }}"
                                                        alt="">
                                                    <div class="card-img-actions-overlay card-img">
                                                        <a href="{{ asset('global_assets/uploads/' . $pickIcons->icon) }}"
                                                            class="btn btn-outline-white border-2 btn-icon rounded-pill"
                                                            data-popup="lightbox" data-gallery="gallery1">
                                                            <i class="icon-plus3"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <div class="d-flex align-items-start flex-nowrap">
                                                        <div>
                                                            <div class="font-weight-semibold mr-2">He it otherwise</div>
                                                            <span class="font-size-sm text-muted">Size: 329kb
                                                                {{ $pickIcons->id }}</span>
                                                        </div>

                                                        <div class="list-icons list-icons-extended ml-auto">
                                                            <a href="#" class="list-icons-item"><i
                                                                    class="icon-download top-0"></i></a>
                                                            <a href="#" class="list-icons-item"><i
                                                                    class="delete icon-bin top-0"
                                                                    delete-link="{{ route('provider.icon.destroy', $pickIcons->id) }}">@csrf</i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                        </div>
                    </div>
                    <!-- /mini size -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <p class="font-weight-semibold">Happy Client</p>
                    <pre class="mb-3" data-line="">
                    <code class="language-markup">
                        &lt;i class="far fa-smile"></i>
                    </code>
                    </pre>
                </div>
                <div class="col-lg-3">
                    <p class="font-weight-semibold">Support Team</p>
                    <pre class="mb-3" data-line="">
                    <code class="language-markup">
                        &lt;i class="far fa-clock"></i>
                    </code>
                    </pre>
                </div>
                <div class="col-lg-3">
                    <p class="font-weight-semibold">Sales Count</p>
                    <pre class="mb-3" data-line="">
                    <code class="language-markup">
                        &lt;i class="far fa-sliders-h"></i>
                    </code>
                    </pre>
                </div>
                <div class="col-lg-3">
                    <p class="font-weight-semibold">Awward</p>
                    <pre class="mb-3" data-line="">
                    <code class="language-markup">
                        &lt;i class="far fa-trophy"></i>
                    </code>
                    </pre>
                </div>
            </div>

        </div>
    </div>
    <!-- /basic layout -->
@endsection


{{-- @push('script')
    <script type="text/javascript">
        $(".delete").click(function() {
            alert("Handler for .click() called.");
        });
    </script>
@endpush --}}
