<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $totalStocks = DB::table('inventory')->sum('quantity') ;

        $pendingOrders = DB::table('processings')->where('payment_status', 'pending')->count();

        $totalSalesToday = DB::table('processings')
            ->whereDate('created_at', now()->format('Y-m-d'))
            ->sum('amount');

        $registeredClients = DB::table('users')->where('role', 'client')->count();

        $banners = array_diff(scandir(public_path('assets/images/slider/')), array('.', '..', '.DS_Store'));

        return view('admin.dashboard', compact('totalStocks', 'pendingOrders', 'totalSalesToday', 'registeredClients', 'banners'));
    }
  
}