<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('admin.profile', compact('user'));
    }

    public function update(Request $request, $id)
    {
       

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'nullable|string',
              ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
      
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }


        $user->save();
        return redirect()->route('admin.profile')->with('success', 'Profilul a fost actualizat cu succes!');

    }
}
