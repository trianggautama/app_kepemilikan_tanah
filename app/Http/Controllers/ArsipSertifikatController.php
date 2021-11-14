<?php

namespace App\Http\Controllers;

use App\Models\ArsipSertifikat;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ArsipSertifikatController extends Controller
{
    public function store(Request $request)
    {
        ArsipSertifikat::create($request->all());

        return back()->withSuccess('Data berhasil disimpan');
    }

    public function edit($id)
    {
        $data = ArsipSertifikat::findOrFail($id);
        $rak = Rak::all();

        return view('arsip.arsip_berkas.edit', compact('data', 'rak'));
    }

    // public function update(Request $request, $id)
    // {
    //     $data = PeminjamanBerkas::findOrFail($id);
    //     $data->update($request->all());

    //     return redirect()->route('arsip.arsip_berkas.index')->withSuccess('Data berhasil diubah');

    // }

    public function destroy($id)
    {
        $data = ArsipSertifikat::findOrFail($id);

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
