@extends('layouts.admin')

@section('content')
<div class="card card-outline card-info">
    <div class="card-header">
        <h3 class="card-title">{{ isset($inventory) ? 'Editează' : 'Creează ' }} Inventar</h3>
    </div>
    <div class="card-body">
        <form action="{{ isset($inventory) ? route('admin.inventory.update', $inventory->id) : route('inventory.store') }}"
            method="POST">
            @csrf
            @if(isset($inventory))
                @method('PUT')
            @endif
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
                <button type="submit"
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
        });
    </script>
@endpush