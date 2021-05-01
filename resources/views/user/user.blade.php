@extends('user.layout.master')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 mb-2 order-last">
                <h3>{{ $title }}</h3>
                {{-- <p class="text-subtitle text-muted">For user to check they list</p> --}}
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">@lang('title.dashboard.title')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-backdrop="static" data-bs-target="#backdrop" title="{{ Lang::get('table.add') }} data">{{ Lang::get('table.add') }}</button>
            </div>
            <div class="card-body table-responsive">
                <table class="table datatable table-striped table-hover table-borderless">
                    <thead>
                        <tr>
                            <th>{{ Lang::get('table.name') }}</th>
                            <th>{{ Lang::get('table.email') }}</th>
                            <th>{{ Lang::get('table.date') }}</th>
                            <th>{{ Lang::get('table.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($data as $i)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $i->name }}</td>
                                <td>{{ $i->email }}</td>
                                <td>{{ $i->created_at }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" title="{{ Lang::get('table.edit') }} data">{{ Lang::get('table.edit') }}</button>
                                        <button type="button" class="btn btn-danger"                                         data-bs-toggle="tooltip" title="{{ Lang::get('table.delete') }} data">{{ Lang::get('table.delete') }}</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
@endsection
@section('js')
<script>
    $(function () {
        var table = $('.datatable').DataTable({
            stateSave: true,
            "language": {
                "decimal": "{{ Lang::get('datatable.decimal') }}",
                "emptyTable": "{{ Lang::get('datatable.emptyTable') }}",
                "info": "{{ Lang::get('datatable.info') }}",
                "infoEmpty": "{{ Lang::get('datatable.infoEmpty') }}",
                "infoFiltered": "{{ Lang::get('datatable.infoFiltered') }}",
                "infoPostFix": "{{ Lang::get('datatable.infoPostFix') }}",
                "thousands": "{{ Lang::get('datatable.thousands') }}",
                "lengthMenu": "{{ Lang::get('datatable.lengthMenu') }}",
                "loadingRecords": "{{ Lang::get('datatable.loadingRecords') }}",
                "processing": "{{ Lang::get('datatable.processing') }}",
                "search": "{{ Lang::get('datatable.search') }}",
                "zeroRecords": "{{ Lang::get('datatable.zeroRecords') }}",
                "paginate": {
                    "first": "{{ Lang::get('datatable.first') }}",
                    "last": "{{ Lang::get('datatable.last') }}",
                    "next": "{{ Lang::get('datatable.next') }}",
                    "previous": "{{ Lang::get('datatable.previous') }}"
                },
                "aria": {
                    "sortAscending": "{{ Lang::get('datatable.sortAscending') }}",
                    "sortDescending": "{{ Lang::get('datatable.sortDescending') }}"
                }
            },
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.user') }}",
            columns: [
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    });
</script>
@endsection
@section('modal')
<div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable"
        role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel4">Disabled Backdrop
                </h4>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="bi bi-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Candy oat cake topping topping chocolate cake. Icing pudding
                    jelly beans
                    I love chocolate carrot
                    cake wafer candy canes. Biscuit croissant fruitcake bonbon
                    soufflé.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary"
                    data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="button" class="btn btn-primary ml-1"
                    data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Accept</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection