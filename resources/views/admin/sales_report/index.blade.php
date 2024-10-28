@extends('layouts.admin')

@section('content')
<style>
    table td,
    table th {
        padding: 3px !important;
    }

    .m-0 {
        margin: 0;
    }

    .text-center {
        text-align: center;
    }

    .text-right {
        text-align: right;
    }

    .table {
        border-collapse: collapse;
        width: 100%
    }

    .table tr,
    .table td,
    .table th {
        border: 1px solid gray;
    }
</style>
<div class="card card-primary card-outline">
    <div class="card-header">
        <h5 class="card-title">Raport Vânzări</h5>
    </div>
    <div class="card-body">
        <form id="filter-form" method="GET" action="{{ route('admin.sales-report.index') }}">
            <div class="row align-items-end">
                <div class="form-group col-md-3">
                    <label for="date_start">Dată Început</label>
                    <input type="date" class="form-control form-control-sm" name="date_start" value="{{ $date_start }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="date_end">Dată Sfârșit</label>
                    <input type="date" class="form-control form-control-sm" name="date_end" value="{{ $date_end }}">
                </div>
                <div class="form-group col-md-1">
                    <button type="submit" class="btn btn-flat btn-block btn-primary btn-sm"><i class="fa fa-filter"></i>
                        Filtrare</button>
                </div>
                <div class="form-group col-md-1">
                    <button type="button" class="btn btn-flat btn-block btn-success btn-sm" id="printBTN"><i
                            class="fa fa-print"></i> Tipărire</button>
                </div>
            </div>
        </form>
        <hr>
        <div id="printable">
            <div class="row row-cols-2 justify-content-center align-items-center" id="print_header"
                style="display:none">
                <div class="col-1">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="{{ config('app.name') }}" width="210px"
                        height="95px">
                </div>
                <div class="col-7">
                    <h4 class="text-center m-0">Makeup Shop - Daniela</h4>
                    <h3 class="text-center m-0"><b>Raport Vânzări</b></h3>
                    @if($date_start != $date_end)
                        <p class="text-center m-0">Perioada {{ date("d M, Y", strtotime($date_start)) }} -
                            {{ date("d M, Y", strtotime($date_end)) }}
                        </p>
                    @else
                        <p class="text-center m-0">La data de {{ date("d M, Y", strtotime($date_start)) }}</p>
                    @endif
                </div>
            </div>
            <hr>
            <table class="table table-bordered">
                <colgroup>
                    <col width="5%">
                    <col width="10%">
                    <col width="8%">
                    <col width="15%">
                    <col width="25%">
                    <col width="8%">
                </colgroup>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Data și Ora</th>
                        <th>ID Client</th>
                        <th>Nume Client</th>
                        <th>Detalii Comandă</th>
                        <th>Metodă Plată</th>
                        <th>Status Plată</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sales as $index => $sale)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $sale->created_at }}</td>
                            <td>{{ $sale->client_id }}</td>
                            <td>{{ $sale->client_name }}</td>
                            <td>
                                <ul>
                                    @foreach (json_decode($sale->order_details) as $item)
                                        <li>{{ $item->name }} - {{ $item->quantity }} x {{ $item->price }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>{{ $sale->payment_method }}</td>
                            <td>{{ $sale->payment_status }}</td>
                            <td>{{ $sale->amount }} {{ $sale->currency }}</td>
                        </tr>
                    @endforeach
                    @if ($sales->isEmpty())
                        <tr>
                            <td class="text-center" colspan="8">Nu există date...</td>
                        </tr>
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="7" class="font-weight-bold text-center">TOTAL VÂNZĂRI</th>
                        <th class="text-right font-weight-bold">{{ number_format($total_sales, 2) }}</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<script>
    $(function () {
        $('table th, table td').addClass("px-1 py-2 align-middle");

        $('#filter-form').submit(function (e) {
            e.preventDefault();
            let url = new URL("{{ route('admin.sales-report.index') }}");
            url.searchParams.set('date_start', $('[name="date_start"]').val());
            url.searchParams.set('date_end', $('[name="date_end"]').val());
            location.href = url;
        });

        $('#printBTN').click(function () {
            var rep = $('#printable').clone(); // Clonează zona imprimabilă

            // Afișează antetul pentru imprimare
            rep.find('#print_header').show();

            // Construiește documentul pentru tipărire
            var head = '<head><meta charset="utf-8"><title>Raport Vânzări</title>' +
                '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">' +
                '<style>table td, table th { padding: 3px !important; } ' +
                '.m-0 { margin: 0; } .text-center { text-align: center; } ' +
                '.text-right { text-align: right; } .table { border-collapse: collapse; width: 100%; } ' +
                '.table tr, .table td, .table th { border: 1px solid gray; }</style></head>';
            var body = '<body>' + rep.html() + '</body>';
            var content = '<!DOCTYPE html><html>' + head + body + '</html>';

            var nw = window.open('', '_blank', 'width=900,height=600');
            nw.document.write(content);
            nw.document.close();

            // Așteaptă puțin pentru ca documentul să se încarce în fereastra nouă
            setTimeout(function () {
                nw.print(); // Tipărește documentul
                nw.close(); // Închide fereastra după tipărire
            }, 300);
        });
    });

</script>


@endsection