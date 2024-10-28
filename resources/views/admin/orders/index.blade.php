@extends('layouts.admin')

@section('content')
<div class="container">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="card">
       <div class="card-header">
    <h3 class="card-title">Lista de comenzi</h3>
</div>
<div class="card-body">
    <table class="table table-bordered table-stripped">
        <thead>
            <tr>
                <th>#</th>
                <th>Data comenzii</th>
                <th>Client</th>
                <th>Suma totală</th>
                <th>Metoda de plată</th>

                <th>Acțiune</th>
            </tr>
        </thead>
                <tbody>
                    @foreach($processings as $processing)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $processing->created_at->format('Y-m-d H:i') }}</td>
                                    <td>{{ $processing->client_name }}</td>
                                    <td class="text-right">{{ number_format($processing->amount, 2) }} {{ $processing->currency }}</td>
                        <td>{{ $processing->payment_method }}</td>

                                    <td align="center">
                                        <form action="{{ route('admin.orders.delete', $processing->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Șterge</button>
                                        </form>
                                        @if($processing->payment_method == 'CARD')
                                            <button type="button" class="btn btn-success btn-sm disabled">Plătit</button>
                                        @elseif($processing->payment_method == 'CASH')
                                            <form action="{{ route('admin.orders.pay', $processing->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-primary btn-sm">Marchează ca plătit</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
