<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            switch (Auth::user()->role) {
                case 1:
                    return redirect()->route('admin.index');
                    break;
                case 0:
                    return redirect()->route('pemohon.index');
                    break;
                case 2:
                    return redirect()->route('peneliti.index');
                    break;
                case 3:
                    return redirect()->route('ketua_peneliti.index');
                    break;
                case 4:
                    return redirect()->route('kasi.index');
                    break;
                case 5:
                    return redirect()->route('kadis.index');
                    break;
                case 6:
                    return redirect()->route('arsip.index');
                    break;
            }
        } 

        return back()->withErrors([
            'username' => 'Username atau password salah',
        ]);
    }

    public function logout(Request $req)
    {
        Auth::logout();
        return redirect()->route('welcome')->withSuccess('Anda berhasil logout');
    }
}
