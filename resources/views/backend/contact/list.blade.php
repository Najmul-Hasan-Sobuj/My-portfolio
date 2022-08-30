@extends('backend.layouts.app')
@section('content')
    <div class="card">
        {{-- table class= "datatable-highlight || datatable-button-init-basic || datatable-button-init-custom" --}}
        <table id="myTable" class="data-list table table-bordered table-hover datatable-highlight">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            @if ($contact)
                <tbody>
                    @foreach ($contact as $key => $contacts)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $contacts->name }}</td>
                            <td>{{ $contacts->email }}</td>
                            <td>{{ $contacts->message }}</td>
                            <td class="text-center">
                                <div class="list-icons">
                                    <a href="#" class="list-icons-item text-danger"><i class="delete icon-bin"
                                            delete-link="{{ route('provider.contact.destroy', [$contacts->id]) }}">@csrf</i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @endif
        </table>
    </div>
@endsection

@push('script')
    <script type="text/javascript">
        $('.data-list').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            "iDisplayLength": 8,
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
