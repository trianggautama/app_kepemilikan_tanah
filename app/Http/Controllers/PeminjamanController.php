<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanBerkas;
use App\Models\Permohonan;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PeminjamanBerkas::all();
        $permohonan = Permohonan::whereStatus(5)->whereHas('arsip_berkas')->get();
        return view('arsip.peminjaman.index', compact('data', 'permohonan'));
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
    public function store(Request $request)
    {
        PeminjamanBerkas::create($request->all());

        return back()->withSuccess('Data berhasil disimpan');
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
    public function edit($id)
    {
        $data = PeminjamanBerkas::findOrFail($id);
        $permohonan = Permohonan::whereStatus(5)->whereHas('arsip_berkas')->get();

        return view('arsip.peminjaman.edit', compact('data', 'permohonan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = PeminjamanBerkas::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('arsip.peminjaman_berkas.index')->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PeminjamanBerkas::findOrFail($id);

        try {
            $data->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withError('Data gagal dihapus');
            }
        }

    }
}
