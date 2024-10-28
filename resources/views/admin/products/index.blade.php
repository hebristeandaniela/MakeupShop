@extends('layouts.admin')

@section('content')

<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">Lista de produse</h3>
        <div class="card-tools">
            <a href="{{ route('admin.products.create') }}" class="btn btn-flat btn-primary"><span
                    class="fas fa-plus"></span> Creează un produs nou</a>
        </div>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <table class="table table-hover table-strip">
                <colgroup>
                    <col width="5%">
                    <col width="20%">
                    <col width="20%">
                    <col width="30%">
                    <col width="10%">
                    <col width="15%">
                </colgroup>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nume</th>
                        <th>Descriere</th>
                        <th>Imagine</th>
                        <th>Preț</th>
                        <th>Preț redus</th>
                        <th>Creare</th>
                        <th>Actualizare</th>
                        <th>Acțiune</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $index => $product)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td><img src="{{ $product->image_name }}" alt="{{ $product->name }}" width="100"></td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->sale_price }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>{{ $product->updated_at }}</td>
                            <td align="center">
                                <div class="dropdown">
                                     <button class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon"
                                        type="button" data-toggle="dropdown">
                                        Acțiune
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item"
                                            href="{{ route('admin.products.edit', $product->id) }}"><span
                                                class="fa fa-edit text-primary"></span> Editează</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item delete_data" href="javascript:void(0)"
                                            data-id="{{ $product->id }}"><span class="fa fa-trash text-danger"></span>
                                            Șterge</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('.delete_data').click(function () {
                let id = $(this).data('id');
                if (confirm("Sunteți sigur că doriți să ștergeți acest produs definitiv?")) {
                    $.ajax({
                        url: "{{ route('admin.products.destroy', '') }}/" + id,
                        method: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            _method: "DELETE"
                        },
                        success: function (response) {
                            location.reload();
                        },
                        error: function (error) {
                            alert("An error occurred.");
                        }
                    });
                }
            });
            $('.dropdown-toggle').dropdown();
            $('.table').DataTable({
                columnDefs: [
                    { orderable: false, targets: [8] }
                ],
                order: [[0, 'asc']]
            });

            $('.dataTable td, .dataTable th').addClass('py-1 px-2 align-middle');
        });
    </script>
@endpush
