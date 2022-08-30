@extends('backend.layouts.app')
@section('title')
    service
@endsection
@section('content')
    <!-- Highlighting rows and columns -->
    <div class="card">
        <div class="card-header">
            <a href="{{ route('provider.service.create') }}" class="btn btn-info add-new float-right">Add New</a>
        </div>
        <div class="row mx-1 data-list">
            @if ($service)
                @foreach ($service as $services)
                    <div class="col-sm-6 col-xl-4">
                        <!-- Multiple titles -->
                        <div class="card">

                            <div class="card-img-actions">
                                <img style="height:440px; object-fit: cover;" class="card-img img-fluid"
                                    src="{{ asset('global_assets/uploads/' . $services->icon) }}" alt="">
                                <div class="card-img-actions-overlay">
                                    <a href="{{ asset('global_assets/uploads/' . $services->icon) }}"
                                        class="btn btn-outline-white border-2" data-popup="lightbox">
                                        Preview
                                    </a>
                                </div>
                            </div>

                            <div class="card-body">
                                <h6 class="card-title font-weight-semibold">{{ $services->title }}</h6>
                                <p class="card-text">{{ $services->description }}
                                </p>
                            </div>

                            <div class="card-footer bg-transparent d-flex justify-content-between border-top-0 pt-0">
                                <ul class="list-inline mb-0 mr-2">
                                    <li class="list-inline-item">
                                        <a href="#" class="text-pink"><i class="icon-heart5"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="text-body"><i class="icon-bubble2"></i></a>
                                    </li>
                                </ul>

                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a
                                            href="{{ route('provider.service.edit', [$services->id]) }}">Edit</a></li>

                                    <li class="list-inline-item"><a href="#" class="list-icons-item text-danger"><i
                                                class="delete icon-bin"
                                                delete-link="{{ route('provider.service.destroy', [$services->id]) }}">@csrf</i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /multiple titles -->
                    </div>
                @endforeach
            @endif

        </div>
    </div>
    <!-- /highlighting rows and columns -->
@endsection
