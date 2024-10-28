<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Processing;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $processings = Processing::orderBy('created_at', 'desc')->get();
        return view('admin.orders.index', compact('processings'));
    }

    public function payOrder($id)
    {
        $processing = Processing::findOrFail($id);
        $processing->payment_status = 'success';
        $processing->save();
        return redirect()->route('admin.orders.index')->with('success', 'Comanda a fost marcată ca plătită.');
    }

    public function deleteOrder($id)
    {
        $processing = Processing::findOrFail($id);
        $processing->delete();
        return redirect()->route('admin.orders.index')->with('success', 'Comanda a fost ștearsă cu succes.');
    }
}
