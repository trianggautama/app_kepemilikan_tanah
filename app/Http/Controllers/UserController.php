<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRegisterController;
use App\Http\Requests\PostRegisterRequest;
use App\Models\Jabatan;
use App\Models\Pangkat;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::whereNotIn('role', ['0','1'])->get();

        $pangkat = Pangkat::all();
        $jabatan = Jabatan::all();
        return view('admin.user.index', compact('data', 'pangkat', 'jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRegisterRequest $request)
    {
        $req = $request->all();
        $req['password'] = Hash::make($request->password);
        $data = User::create($req);

        if ($data->role == 0) {
            if(Auth::check()){
                return back()->withSuccess('Data berhasil disimpan');
            }else{
                return redirect()->route('auth.login')->withSuccess('Pendaftaran Berhasil');
            }
        } else {
            return back()->withSuccess('Data berhasil disimpan');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if ($user->role == 0) {
            return view('admin.pemohon.edit', compact('user'));
        } else {
            $pangkat = Pangkat::all();
            $jabatan = Jabatan::all();
            return view('admin.user.edit', compact('user', 'pangkat', 'jabatan'));

        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $req = $request->except('password');
        if (isset($request->password)) {
            $req['password'] = Hash::make($request->password);
        }

        $user->update($req);

        if ($user->role == 0) {
            return redirect()->route('admin.pemohon.index')->withSuccess('Data berhasil diubah');
        } else {
            return redirect()->route('admin.user.index')->withSuccess('Data berhasil diubah');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        try {
            $user->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withError('Data gagal dihapus');
            }
        }

    }
}
