@extends('backend.layouts.app')
@section('title')
    Employee
@endsection
@section('content')
    <!-- Highlighting rows and columns -->
    <div class="card">
        <div class="card-header">
            <a href="{{ route('employee.create') }}" class="btn btn-info add-new float-right">Add New</a>
        </div>
        {{-- table class= "datatable-highlight || datatable-button-init-basic || datatable-button-init-custom" --}}
        <table class="data-list table table-bordered table-hover datatable-highlight">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Phones</th>
                    <th>Salary</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            @if ($employee)
                <tbody>
                    @foreach ($employee as $key => $employees)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>
                                <div class="mr-3">
                                    <img src="{{ asset('global_assets/uploads/thumb/' . $employees->photo) }}"
                                        class="rounded-circle" width="40" height="40" alt="">
                                    {{ $employees->name }}
                                </div>
                            </td>
                            <td> {{ $employees->phone }}</td>
                            <td> {{ $employees->salary }}</td>
                            <td class="text-center">
                                <div class="list-icons">
                                    <a href="{{ route('employee.show', [$employees->id]) }}"
                                        class="list-icons-item text-success"><i class="icon-eye"></i></a>
                                    <a href="{{ route('employee.edit', [$employees->id]) }}"
                                        class="list-icons-item text-primary"><i class="icon-pencil7"></i></a>
                                    <a href="#" class="list-icons-item text-danger"><i class="delete icon-bin"
                                            delete-link="{{ route('employee.destroy', [$employees->id]) }}">@csrf</i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @endif
        </table>
    </div>
    <!-- /highlighting rows and columns -->
@endsection

@push('script')
    <script type="text/javascript">
        $('.data-list').DataTable({
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
