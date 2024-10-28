@extends('layouts.admin')

@section('content')
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>

<div class="card card-outline card-info">
    <div class="card-header">
        <h3 class="card-title">Editează detaliile clientului</h3>
    </div>
    <div class="card-body">
        <form id="product-form" action="{{ route('admin.clients.update', $clients->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           
            <input type="hidden" name="id" id="client-id" value="{{ $clients->id }}">
            <div class="form-group">
                <label for="name" class="control-label">Nume</label>
                <input type="text" name="name" class="form-control" id="client-name" required value="{{ $clients->name }}">
            </div>
            <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <input type="email" name="email" class="form-control" id="client-email" required value="{{ $clients->email }}">
            </div>
            <div class="form-group">
                <label for="role" class="control-label">Rol</label>
                <select name="role" id="client-role" class="custom-select" required>
                    <option value="client" {{ $clients->role == 'client' ? 'selected' : '' }}>Client</option>
                    <option value="admin" {{ $clients->role == 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password" class="control-label">Parola nouă</label>
                <input type="password" name="password" class="form-control" id="client-password"
                    placeholder="(Introduceți o valoare pentru a schimba parola)">
                <small class="text-muted"><i>Lăsați acest câmp gol dacă nu doriți să actualizați parola.</i></small>
            </div>
           
        </form>
    </div>
    <div class="card-footer">
        <button class="btn btn-flat btn-primary" form="product-form">Salvează</button>
        <a class="btn btn-flat btn-default" href="{{ route('admin.clients.index') }}">Ieșire</a>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function () {

            $('#product-form').submit(function (e) {
                e.preventDefault();
                var form = $(this);
                $('.err-msg').remove();
                start_loader();

                $.ajax({
                    url: form.attr('action'),
                    data: new FormData(form[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    method: 'POST',
                    dataType: 'json',
                    error: function (err) {
                        console.log(err);
                        alert_toast("An error occurred", 'error');
                        end_loader();
                    },
                    success: function (resp) {
                        if (resp.status === 'success') {
                            window.location.href = '{{ route('admin.clients.index') }}';
                        } else if (resp.status === 'failed' && resp.msg) {
                            var el = $('<div>').addClass("alert alert-danger err-msg").text(resp.msg);
                            form.prepend(el);
                            el.show('slow');
                            $("html, body").animate({ scrollTop: form.closest('.card').offset().top }, "fast");
                            if (resp.id) {
                                $('[name="id"]').val(resp.id);
                            }
                            end_loader();
                        } else {
                            alert_toast("An error occurred", 'error');
                            end_loader();
                        }
                    }
                });
            });
        });
    </script>
@endpush

@endsection
