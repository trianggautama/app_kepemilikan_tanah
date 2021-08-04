<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use App\Models\Survei;
use Illuminate\Http\Request;

class PermohonanPenelitiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Permohonan::where('status', '>', '0')->get();
        return view('tim_peneliti.permohonan.index', compact('data'));
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
        $data = new Survei;
        $data->permohonan_id = $request->permohonan_id;
        $data->nama_petugas = $request->nama_petugas;
        $data->tanggal_survei = $request->tanggal_survei;

        if (isset($request->surat_ukur)) {
            $file = $request->file('surat_ukur');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $data->surat_ukur = $file_name;
        }

        if (isset($request->gambar_denah)) {
            $file = $request->file('gambar_denah');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $data->gambar_denah = $file_name;
        }

        $data->save();

        $permohonan = Permohonan::findOrFail($request->permohonan_id);

        $permohonan->status = 2;

        $permohonan->update();

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
        $permohonan = Permohonan::findOrFail($id);
        return view('tim_peneliti.permohonan.show', compact('permohonan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
