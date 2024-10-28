<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $inventories = Inventory::with(['product'])->get();
        return view('admin.inventory.index', compact('inventories'));
    }

    public function create()
    {
        $products = Product::where('delete_flag', 0)->orderBy('name', 'asc')->get();
        return view('admin.inventory.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'sale_price' => 'nullable|numeric', // Optional sale price
        ]);

        Inventory::create($request->all());
        return redirect()->route('admin.inventory.index')->with('success', 'Inventory created successfully.');
    }

    public function edit($id)
    {
        $inventory = Inventory::findOrFail($id);
        $products = Product::where('delete_flag', 0)->orderBy('name', 'asc')->get();
        return view('admin.inventory.edit', compact('inventory', 'products'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_id' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'sale_price' => 'nullable|numeric', // Optional sale price
        ]);
        $inventory = Inventory::findOrFail($id);
        $inventory->product_id = $request->input('product_id');
        $inventory->quantity = $request->input('quantity');
        $inventory->price = $request->input('price');
        $inventory->sale_price = $request->input('sale_price');

        $inventory->save();
        return redirect()->route('admin.inventory.index')->with('success', 'Inventory updated successfully.');
    }

    public function destroy($id)
    {
        $inventory = Inventory::findOrFail($id);
        $inventory->delete();

        return response()->json(['status' => 'success']);
    }
}
