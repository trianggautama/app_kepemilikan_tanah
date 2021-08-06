<?php

namespace App\Http\Controllers;

use App\Models\ArsipBerkas;
use App\Models\Permohonan;
use App\Models\Rak;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ArsipBerkasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permohonan = Permohonan::where('status', 5)->latest()->get();

        $rak = Rak::all();
        return view('arsip.arsip_berkas.index', compact('permohonan', 'rak'));
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
        ArsipBerkas::create($request->all());

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
        return view('arsip.arsip_berkas.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ArsipBerkas::findOrFail($id);
        $rak = Rak::all();

        return view('arsip.arsip_berkas.edit', compact('data', 'rak'));
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

        return redirect()->route('arsip.arsip_berkas.index')->withSuccess('Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ArsipBerkas::findOrFail($id);

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
