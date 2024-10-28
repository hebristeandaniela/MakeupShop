<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;

class SalesReportController extends Controller
{
    public function index(Request $request)
    {
        $date_start = $request->get('date_start', date('Y-m-d', strtotime('-7 days')));
        $date_end = $request->get('date_end', date('Y-m-d'));

        // Query pentru a selecta datele din tabela 'processings'
        $sales = DB::table('processings')
            ->select('id', 'client_name', 'client_id', 'client_address', 'order_details', 'amount', 'currency', 'created_at', 'updated_at', 'payment_method', 'payment_status', 'stripe_checkout_session_id')
            ->whereBetween('created_at', [$date_start, $date_end])
            ->orderByDesc('created_at')
            ->get();

        $total_sales = $sales->sum('amount');


        return view('admin.sales_report.index', compact('sales', 'date_start', 'date_end', 'total_sales'));
    }
}
