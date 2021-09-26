<?php

namespace App\Http\Controllers;

use App\Models\PermohonanTanah;
use App\Models\SurveiTanah;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PermohonanTanahPenelitiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PermohonanTanah::where('status', '>', '0')->get();

        return view('tim_peneliti.permohonan_tanah.index', compact('data'));
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
        {
            $data = new SurveiTanah;
            $data->permohonan_tanah_id = $request->permohonan_tanah_id;
            $data->nama_petugas = $request->nama_petugas;
            $data->tanggal_survei = $request->tanggal_survei;
            $data->luas_bidang = $request->luas_bidang;
            $data->lereng_permukaan = $request->lereng_permukaan;
            $data->kepekaan_erosi = $request->kepekaan_erosi;
            $data->tingkat_erosi = $request->tingkat_erosi;
            $data->drainase = $request->drainase;
            $data->kerikil = $request->kerikil;
            $data->ancaman_banjir = $request->ancaman_banjir;

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

            $permohonan = PermohonanTanah::findOrFail($request->permohonan_tanah_id);

            $permohonan->status = 2;
            $now = Carbon::now();
            $permohonan->verif_tim = $now;

            $permohonan->update();

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
        $data = PermohonanTanah::findOrFail($id);
        return view('tim_peneliti.permohonan_tanah.show', compact('data'));
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
