@extends('backend.layouts.app')
@section('title')
    service
@endsection
@section('content')
    <!-- Highlighting rows and columns -->
    <div class="card">
        <div class="card-header">
            <a href="{{ route('testimonial.create') }}" class="btn btn-info add-new float-right">Add New</a>
        </div>
        <div class="row mx-1 data-list">
            {{-- @if ($service)
                @foreach ($service as $services) --}}
            <div class="col-sm-6 col-xl-12">
                <div class="card card-body">
                    <div class="media flex-column flex-sm-row">
                        <div class="mr-sm-3 mb-2 mb-sm-0">
                            <a href="#">
                                <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded"
                                    width="44" height="44" alt="">
                            </a>
                        </div>

                        <div class="media-body">
                            <h6 class="media-title font-weight-semibold">
                                <a href="#">Interaction UX/UI Industrial Designer</a>
                            </h6>

                            <ul class="list-inline list-inline-dotted text-muted mb-2">
                                <li class="list-inline-item"><a href="#" class="text-muted">Dell</a></li>
                                <li class="list-inline-item">Amsterdam, Netherlands</li>
                            </ul>

                            Extended kindness trifling remember he confined outlived if. Assistance sentiments yet
                            unpleasing say. Open they an busy they my such high. An active dinner wishes at unable
                            hardly no talked on. Immediate him her resolving his favourite. Wished denote abroad at
                            branch at. Mind what no by kept.
                        </div>

                        <div class="ml-sm-3 mt-2 mt-sm-0">
                            <span class="badge badge-primary">New</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endforeach
            @endif --}}

        </div>
    </div>
    <!-- /highlighting rows and columns -->
@endsection
