<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function index()
    {
        $clients = User::all();
        return view('admin.clients.index', compact('clients'));
    }

    public function edit($id)
    {
        $clients = User::findOrFail($id);
        return view('admin.clients.edit', compact('clients'));

    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'role' => 'required|string|max:20',
            'password' => 'nullable|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'failed', 'msg' => $validator->errors()->first()]);
        }

        $client = User::findOrFail($id);
        $client->name = $request->name;
        $client->email = $request->email;
        $client->role = $request->role;
        if ($request->password) {
            $client->password = bcrypt($request->password);
        }
        $client->save();

        return response()->json(['status' => 'success']);
    }

    public function destroy($id)
    {
        $client = User::findOrFail($id);
        $client->delete();
        return response()->json(['status' => 'success']);
    }
}
