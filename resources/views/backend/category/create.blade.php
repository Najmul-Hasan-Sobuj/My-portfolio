@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <form id="myform" class="from-prevent-multiple-submits" action="{{ route('category.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <fieldset class="mb-3">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="form-group">
                                <label for="category_title">Category Name</label>
                                <input type="text" id="category_title" name="category_title" maxlength="20"
                                    class="form-control maxlength-options" placeholder="Enter a Category Name"value=""
                                    required>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-4">
                            <div class="d-flex justify-content-end align-items-center">
                                <button id="reset" type="reset" class="btn btn-light">Reset <i
                                        class="icon-reload-alt ml-2"></i></button>
                                <button type="submit" id="submit"
                                    class="btn btn-primary ml-3 from-prevent-multiple-submits">Submit <i
                                        class="icon-paperplane ml-2" value="Validate!"></i></button>
                            </div>
                        </div>
                </fieldset>
            </form>
        </div>
    </div>
    <div class="card">
        {{-- table class= "datatable-highlight || datatable-button-init-basic || datatable-button-init-custom" --}}
        <table id="myTable" class="data-list table table-bordered table-hover datatable-highlight">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            @if ($category)
                <tbody>
                    @foreach ($category as $key => $categorys)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $categorys->category_title }}</td>
                            <td class="text-center">
                                <div class="list-icons">
                                    {{-- <a href="{{ route('category.edit', [$categorys->id]) }}"
                                        class="list-icons-item text-info"><i class="icon-pencil7"></i></a> --}}

                                    <a id="editBtn" href="#" class="list-icons-item text-primary edit"
                                        data-toggle="modal" data-target="#editModal"><i class="icon-pencil7"></i></a>

                                    <a href="#" class="list-icons-item text-danger"><i class="delete icon-bin"
                                            delete-link="{{ route('category.destroy', [$categorys->id]) }}">@csrf</i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @endif
        </table>
    </div>

    {{-- modal start --}}
    <div id="editModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form id="editForm" action="category" method="post" class="modal-body form-inline justify-content-center">
                    @csrf
                    @method('PUT')
                    <label>Category Name:</label>
                    <input type="text" value="" class="form-control w-50 mb-2 mr-sm-2 ml-sm-2 mb-sm-0">
                    <button type="submit" class="btn btn-primary ml-sm-2 mb-sm-0">Submit</button>
                </form>
            </div>
        </div>
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
                targets: [2],
            }, ],
        });

        $(document).ready(function() {
            var table = $('#myTable').DataTable();

            table.on('click', '.edit', function() {

                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }

                var data = table.row($tr).data();
                console.log(data);

                $('#category_title').val(data[1]);

                $('#editForm').attr('action', '/category' + data[0]);
                $('#editModal').modal('show');
            });
        });
    </script>
@endpush
