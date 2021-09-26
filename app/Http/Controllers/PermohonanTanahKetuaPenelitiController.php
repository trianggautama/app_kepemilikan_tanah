<?php

namespace App\Http\Controllers;

use App\Models\PermohonanTanah;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PermohonanTanahKetuaPenelitiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PermohonanTanah::whereIn('status', [2, 3, 4])->get();

        return view('ketua_peneliti.permohonan_tanah.index', compact('data'));
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
        //
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

        return view('ketua_peneliti.permohonan_tanah.show', compact('data'));
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
        $permohonan = PermohonanTanah::findOrFail($id);

        $input = $request->all();

        $now = Carbon::now();
        $input['verif_ketua'] = $now;
        $permohonan->update($input);

        return back()->withSuccess('Data berhasil diverifikasi');

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
