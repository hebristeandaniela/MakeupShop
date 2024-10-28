@extends('layouts.admin')

@section('content')
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Lista de clienți</h3>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <table class="table table-hover table-striped" id="list">
                    <colgroup>
                        <col width="5%">
                        <col width="15%">
                        <col width="35%">
                        <col width="20%">
                        <col width="10%">
                        <col width="15%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Data</th>
                            <th>Nume</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Acțiune</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $client->created_at->format('Y-m-d H:i') }}</td>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->email }}</td>
                                <td class="text-center">
                                    <span class="badge badge-success px-3 rounded-pill">{{ ucfirst($client->role) }}</span>
                                </td>
                                <td align="center">
                                    <div class="dropdown">
                                     <button class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon"
                                        type="button" data-toggle="dropdown">
                                        Acțiune
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item"
                                            href="{{ route('admin.clients.edit', $client->id) }}"><span
                                                class="fa fa-edit text-primary"></span> Editează</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item delete_data" href="javascript:void(0)"
                                            data-id="{{ $client->id }}"><span class="fa fa-trash text-danger"></span>
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
</div>


<script>
    $(document).ready(function () {
        $('#list').DataTable({
            columnDefs: [
                { orderable: false, targets: [4, 5] }
            ],
            order: [[0, 'asc']]
        });

        $(document).on('click', '.edit_data', function () {
            let clientId = $(this).data('id');
            $.get("{{ url('admin/clients') }}/" + clientId + " /edit", function(data){
                $('#client-id').val(data.id);
                $('#client-name').val(data.name);
                $('#client-email').val(data.email);
                $('#client-role').val(data.role);
                $('#editModal').modal('show');
            });
        });

        $('#save-btn').click(function () {
            let clientId = $('#client-id').val();
            let formData = $('#update-client').serialize();
            $.ajax({
                url: "{{ url('admin/clients') }}/" + clientId,
                method: 'POST',
                data: formData,
                success: function (response) {
                    if (response.status == 'success') {
                        location.reload();
                    } else {
                        alert(response.msg);
                    }
                }
            });
        });

        $(document).on('click', '.delete_data', function () {
            if (confirm('Are you sure to delete this client permanently?')) {
                let clientId = $(this).data('id');
                $.ajax({
                    url: "{{ url('admin/clients') }}/" + clientId,
                    method: 'DELETE',
                    data: { _token: '{{ csrf_token() }}'},
                    success: function (response) {
                        if (response.status == 'success') {
                            location.reload();
                        } else {
                            alert('An error occurred while deleting the client.');
                        }
                    }
                });
            }
        });
    });
</script>
@endsection