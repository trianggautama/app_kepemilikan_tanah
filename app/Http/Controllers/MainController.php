<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function admin_index()
    {
        return view('admin.index'); 
    }

    public function pemohon_index()
    {
        return view('pemohon.index'); 
    }

    public function pemohon_profil()
    {
        return view('pemohon.profil'); 
    }

    public function pemohon_profil_update(Request $request, $id)
    {
        $req = $request->except('password');
        if (isset($request->password)) {
            $req['password'] = Hash::make($request->password);
        }
        $user = User::findOrFail($id);
        $user->update($req);

        if ($user->role == 0) {
            return redirect()->route('pemohon.profil')->withSuccess('Data berhasil diubah');
        } else {
            return redirect()->route('admin.user.index')->withSuccess('Data berhasil diubah');
        }
    }
}
