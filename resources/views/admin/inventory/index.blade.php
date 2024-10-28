@extends('layouts.admin')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">Lista de inventar</h3>
        <div class="card-tools">
            <a href="{{ route('admin.inventory.create') }}" class="btn btn-flat btn-primary"><span class="fas fa-plus"></span>
                Creează un nou inventar</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Produs</th>
                    <th>Preț</th>
                    <th>Preț redus</th>
                    <th>Stoc</th>
                    <th>Acțiune</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inventories as $index => $inventory)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>
                            <b>{{ $inventory->product->name }}</b> <br>
                            </td>
                        <td class="text-right">{{ $inventory->price }}</td>
                        <td class="text-right">{{ $inventory->sale_price }}</td>
                        <td class="text-right">{{ $inventory->quantity }}</td>
                        <td align="center">
                            <div class="dropdown">
                                <button class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon" type="button"
                                    data-toggle="dropdown">
                                    Acțiune
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="{{ route('admin.inventory.edit', $inventory->id) }}"><span
                                            class="fa fa-edit text-primary"></span> Editează</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item delete_data" href="javascript:void(0)"
                                        data-id="{{ $inventory->id }}"><span class="fa fa-trash text-danger"></span>
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
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('.delete_data').click(function () {
                var id = $(this).data('id');
                if (confirm("Sunteți sigur că doriți să ștergeți acest inventar permanent?")) {
                    $.ajax({
                        url: "{{ route('admin.inventory.destroy', '') }}/" + id,
                        method: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            _method: "DELETE"
                        },
                        success: function (response) {
                            if (response.status === 'success') {
                                alert('Inventar șters cu succes.');
                                location.reload();
                            } else {
                                alert('A apărut o eroare.');
                            }
                        },
                        error: function (xhr) {
                            alert('A apărut o eroare.');
                        }
                    });
                }
            });
        });
    </script>
@endpush