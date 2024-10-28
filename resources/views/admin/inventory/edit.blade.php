@extends('layouts.admin')

@section('content')
<div class="card card-outline card-info">
    <div class="card-header">
        <h3 class="card-title">{{ isset($inventory) ? 'Editează ' : 'Creează un nou ' }} Inventar</h3>
    </div>
    <div class="card-body">
        <form id="product-form" action="{{ route('admin.inventory.update', $inventory->id) }}"
     method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="product_id" class="control-label">Produs</label>
                <select name="product_id" id="product_id" class="custom-select select2" required>
                    <option value=""></option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" {{ isset($inventory) && $inventory->product_id == $product->id ? 'selected' : '' }}>
                            {{ $product->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="quantity" class="control-label">Cantitatea inițială</label>
                <input type="number" class="form-control" name="quantity"
                    value="{{ isset($inventory) ? $inventory->quantity : '' }}" required>
            </div>
            <div class="form-group">
                <label for="price" class="control-label">Preț</label>
                <input type="number" step="any" class="form-control" name="price"
                    value="{{ isset($inventory) ? $inventory->price : '' }}" required>
            </div>
            <div class="form-group">
                <label for="sale_price" class="control-label">Preț redus</label>
                <input type="number" step="any" class="form-control" name="sale_price"
                    value="{{ isset($inventory) ? $inventory->sale_price : '' }}">
            </div>
            <div class="card-footer">
                <button type="submit" form="product-form"
                    class="btn btn-flat btn-primary">{{ isset($inventory) ? 'Editează' : 'Salvează' }}</button>
                <a href="{{ route('admin.inventory.index') }}" class="btn btn-flat btn-default">Ieșire</a>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('.select2').select2({
                placeholder: "Please select here",
                width: 'resolve'
            });
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
                            window.location.href = '{{ route('admin.products.index') }}';
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