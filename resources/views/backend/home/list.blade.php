@extends('backend.layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <!-- Highlighting rows and columns -->
    <div class="card">
        <div class="card-header">
            {{-- <h5 class="card-title">Highlighting rows and columns</h5> --}}
            <a href="{{ route('home.create') }}" class="btn btn-info add-new" style="float: right;">Add New</a>
        </div>
        {{-- table class= "datatable-highlight || datatable-button-init-basic || datatable-button-init-custom" --}}
        <table class="data-list table table-bordered table-hover datatable-highlight">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Job Title</th>
                    <th>DOB</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Marth</td>
                    <td><a href="#">Enright</a></td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 1972</td>
                    <td><span class="badge badge-success">Active</span></td>

                    {{-- # = {{ route('home.show', [$employees->id]) }}
                    # = {{ route('home.edit', [$employees->id]) }}
                    # = {{ route('home.destroy', [$employees->id]) }} --}}

                    <td>
                        <ul class="list-inline mb-0">
                            <li class="dropdown">
                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                    <i class="icon-menu9 "></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-header">Options</div>
                                    <a href="#" class="dropdown-item text-success"><i class="icon-eye"></i>View
                                        entry</a>
                                    <a href="#" class="dropdown-item text-primary"><i class="icon-pencil7"></i>Edit
                                        entry</a>
                                    <a href="#" class="dropdown-item text-danger"><i id="delete" delete-link="#"
                                            class="icon-bin"></i>@csrf Remove entry</a>
                                    <div class="dropdown-header">Export</div>
                                    <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /highlighting rows and columns -->
@endsection

{{-- @push('script')
    <script type="text/javascript">
        $('#studentTable').DataTable({
            dom: 'lBfrtip',
            "iDisplayLength": 10,
            "lengthMenu": [10, 25, 30, 50],
            columnDefs: [{
                'orderable': false,
                "targets": 3
            }]
        });
    </script>
@endpush --}}
