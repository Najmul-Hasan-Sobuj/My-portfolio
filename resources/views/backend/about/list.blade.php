@extends('backend.layouts.app')
@section('title')
    Admin About
@endsection
@section('content')
    <!-- Highlighting rows and columns -->
    <div class="card">
        <div class="card-header">
            <a href="{{ route('about.create') }}" class="btn btn-info add-new float-right">Add New</a>
        </div>
        {{-- table class= "datatable-highlight || datatable-button-init-basic || datatable-button-init-custom" --}}
        <table id="table" class="data-list table table-bordered table-hover datatable-highlight">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Job Title</th>
                    <th>DOB</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Marth</td>
                    <td><a href="#">Enright</a></td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 1972</td>
                    <td class="text-center">
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

@push('script')
    <script type="text/javascript">
        $('#table').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            // "iDisplayLength": 10,
            // "lengthMenu": [10, 25, 30, 50],
            // columnDefs: [{
            //     'orderable': true,
            //     "targets": 5
            // }]

            autoWidth: false,
            columnDefs: [{
                orderable: false,
                width: 100,
                targets: [4],
            }, ],
        });
    </script>
@endpush
