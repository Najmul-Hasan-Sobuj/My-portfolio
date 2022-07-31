@extends('backend.layouts.app')
@section('title')
    testimonial
@endsection
@section('content')
    <!-- Highlighting rows and columns -->
    <div class="card">
        <div class="card-header">
            <a href="{{ route('testimonial.create') }}" class="btn btn-info add-new float-right">Add New</a>
        </div>
        <div class="row mx-1 data-list">
            @if ($testimonial)
                @foreach ($testimonial as $testimonials)
                    <div class="col-sm-6 col-xl-12">
                        <div class="card card-body">
                            <div class="media flex-column flex-sm-row">
                                <div class="mr-sm-3 mb-2 mb-sm-0">
                                    <a href="#">
                                        <img src="{{ asset('global_assets/uploads/thumb/' . $testimonials->image) }}"
                                            class="rounded" width="44" height="44" alt="">
                                    </a>
                                </div>

                                <div class="media-body">
                                    <h6 class="media-title font-weight-semibold">
                                        {{ $testimonials->clients_statement }}
                                    </h6>

                                    <ul class="list-inline list-inline-dotted text-muted mb-2">
                                        <li class="list-inline-item"><a href="#" class="text-muted">
                                                <strong> {{ $testimonials->name }}</strong></a></li>
                                        <li class="list-inline-item"> {{ $testimonials->country }}</li>
                                    </ul>
                                </div>

                                <div class="ml-sm-3 mt-2 mt-sm-0">
                                    <a class="list-icons-item mr-1"
                                        href="{{ route('testimonial.edit', [$testimonials->id]) }}">Edit</a>
                                    <a href="#" class="list-icons-item text-danger">
                                        <i class="delete icon-bin"
                                            delete-link="{{ route('testimonial.destroy', [$testimonials->id]) }}">@csrf</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <!-- /highlighting rows and columns -->
@endsection
