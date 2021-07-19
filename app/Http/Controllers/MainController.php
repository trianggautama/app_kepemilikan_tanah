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

    public function ketua_peneliti_index()
    {
        return view('ketua_peneliti.index'); 
    }

    public function ketua_peneliti_profil()
    {
        return view('ketua_peneliti.profil'); 
    }

    public function ketua_peneliti_profil_update(Request $request, $id)
    {
        $req = $request->except('password');
        if (isset($request->password)) {
            $req['password'] = Hash::make($request->password);
        }
        $user = User::findOrFail($id);
        $user->update($req);

        return redirect()->route('ketua_peneliti.profil')->withSuccess('Data berhasil diubah');
    }

    public function peneliti_index()
    {
        return view('tim_peneliti.index'); 
    }

    public function peneliti_profil()
    {
        return view('tim_peneliti.profil'); 
    }

    public function peneliti_profil_update(Request $request, $id)
    {
        $req = $request->except('password');
        if (isset($request->password)) {
            $req['password'] = Hash::make($request->password);
        }
        $user = User::findOrFail($id);
        $user->update($req);

        return redirect()->route('peneliti.profil')->withSuccess('Data berhasil diubah');
    }
}
