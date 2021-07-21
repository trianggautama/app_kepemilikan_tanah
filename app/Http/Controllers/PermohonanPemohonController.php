<?php

namespace App\Http\Controllers;

use App\Models\JenisBangunan;
use App\Models\Kelurahan;
use App\Models\Permohonan;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermohonanPemohonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Permohonan::whereUserId(Auth::id())->get();
        return view('pemohon.permohonan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenisBangunan = JenisBangunan::all();
        $kelurahan = Kelurahan::all();

        return view('pemohon.permohonan.create', compact('jenisBangunan', 'kelurahan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = $request->all();
        $req['user_id'] = Auth::id();
        $data = Permohonan::create($req);

        if ($request->file('surat_kuasa') != null) {

            $file = $request->file('surat_kuasa');

            $file_name = $file->getClientOriginalName();

            $file->move('lampiran/permohonan', $file_name);
            $data->surat_kuasa = $file_name;
        }

        if ($request->file('ktp') != null) {

            $file = $request->file('ktp');

            $file_name = $file->getClientOriginalName();

            $file->move('lampiran/permohonan', $file_name);
            $data->ktp = $file_name;
        }

        $data->update();

        return redirect()->route('pemohon.permohonan_pemohon.index')->withSuccess('Permohonan berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Permohonan $permohonan_pemohon)
    {
        return view('pemohon.permohonan.show', compact('permohonan_pemohon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Permohonan $permohonan_pemohon)
    {
        $jenisBangunan = JenisBangunan::all();
        $kelurahan = Kelurahan::all();

        return view('pemohon.permohonan.edit', compact('permohonan_pemohon', 'kelurahan', 'jenisBangunan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permohonan $permohonan_pemohon)
    {
        $permohonan_pemohon->update($request->all());
        if ($request->file('surat_kuasa') != null) {

            $file = $request->file('surat_kuasa');

            $file_name = $file->getClientOriginalName();

            $file->move('lampiran/permohonan', $file_name);
            $permohonan_pemohon->surat_kuasa = $file_name;
        }

        if ($request->file('ktp') != null) {

            $file = $request->file('ktp');

            $file_name = $file->getClientOriginalName();

            $file->move('lampiran/permohonan', $file_name);
            $permohonan_pemohon->ktp = $file_name;
        }

        $permohonan_pemohon->update();

        return redirect()->route('pemohon.permohonan_pemohon.index')->withSuccess('Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permohonan $permohonan_pemohon)
    {
        try {
            $permohonan_pemohon->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withError('Data gagal dihapus');
            }
        }

    }
}
