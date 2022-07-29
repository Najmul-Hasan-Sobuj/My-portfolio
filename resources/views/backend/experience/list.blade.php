@extends('backend.layouts.app')
@section('title')
    experience
@endsection
@section('content')
    <!-- Highlighting rows and columns -->
    <div class="card">
        <div class="card-header">
            <a href="{{ route('experience.create') }}" class="btn btn-info add-new float-right">Add New</a>
        </div>
        <div class="row mx-1 data-list">
            @if ($experience)
                @foreach ($experience as $experiences)
                    <div class="col-sm-4 col-xl-4">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <span class="text-muted">{{ $experiences->starting_year }} --
                                    {{ $experiences->ending_year }}
                                    <b>({{ strtoupper($experiences->designation) }})</b></span>
                                <span class="font-weight-semibold">
                                    <a class="list-icons-item mr-1"
                                        href="{{ route('experience.edit', [$experiences->id]) }}">Edit</a>
                                    <a href="#" class="list-icons-item text-danger">
                                        <i class="delete icon-bin"
                                            delete-link="{{ route('experience.destroy', [$experiences->id]) }}">@csrf</i>
                                    </a>
                                </span>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><strong>{{ $experiences->title }}</strong></h6>
                                <p class="card-text">{{ $experiences->details }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    {{-- </div> --}}
    <!-- /highlighting rows and columns -->
@endsection
