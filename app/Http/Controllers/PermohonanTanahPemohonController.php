<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use App\Models\PermohonanTanah;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermohonanTanahPemohonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->kelurahan = Kelurahan::latest()->get();
    }
    public function index()
    {
        $data = PermohonanTanah::whereUserId(Auth::id())->latest()->get();
        return view('pemohon.permohonan_tanah.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelurahan = $this->kelurahan;
        return view('pemohon.permohonan_tanah.create', compact('kelurahan'));
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
            $req = $request->all();
            $req['user_id'] = Auth::id();
            $data = PermohonanTanah::create($req);

            if ($request->file('kk') != null) {

                $file = $request->file('kk');

                $file_name = $file->getClientOriginalName();

                $file->move('lampiran/permohonan-tanah', $file_name);
                $data->kk = $file_name;
            }

            if ($request->file('ktp') != null) {

                $file = $request->file('ktp');

                $file_name = $file->getClientOriginalName();

                $file->move('lampiran/permohonan-tanah', $file_name);
                $data->ktp = $file_name;
            }

            if ($request->file('segel_tanah') != null) {

                $file = $request->file('segel_tanah');

                $file_name = $file->getClientOriginalName();

                $file->move('lampiran/permohonan-tanah', $file_name);
                $data->segel_tanah = $file_name;
            }
            if ($request->file('skt') != null) {

                $file = $request->file('skt');

                $file_name = $file->getClientOriginalName();

                $file->move('lampiran/permohonan-tanah', $file_name);
                $data->skt = $file_name;
            }

            if ($request->file('npwp') != null) {

                $file = $request->file('npwp');

                $file_name = $file->getClientOriginalName();

                $file->move('lampiran/permohonan-tanah', $file_name);
                $data->npwp = $file_name;
            }

            if ($request->file('riwayat_peroleh_tanah') != null) {

                $file = $request->file('riwayat_peroleh_tanah');

                $file_name = $file->getClientOriginalName();

                $file->move('lampiran/permohonan-tanah', $file_name);
                $data->riwayat_peroleh_tanah = $file_name;
            }

            if ($request->file('sppt') != null) {

                $file = $request->file('sppt');

                $file_name = $file->getClientOriginalName();

                $file->move('lampiran/permohonan-tanah', $file_name);
                $data->sppt = $file_name;
            }

            $data->update();

            return redirect()->route('pemohon.permohonan_tanah_pemohon.index')->withSuccess('Permohonan berhasil disimpan');
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
        return view('pemohon.permohonan_tanah.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelurahan = $this->kelurahan;
        $data = PermohonanTanah::findOrFail($id);
        return view('pemohon.permohonan_tanah.edit', compact('kelurahan', 'data'));
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
        $data = PermohonanTanah::findOrFail($id);
        $data->update($request->all());

        if ($request->file('kk') != null) {

            $file = $request->file('kk');

            $file_name = $file->getClientOriginalName();

            $file->move('lampiran/permohonan-tanah', $file_name);
            $data->kk = $file_name;
        }

        if ($request->file('ktp') != null) {

            $file = $request->file('ktp');

            $file_name = $file->getClientOriginalName();

            $file->move('lampiran/permohonan-tanah', $file_name);
            $data->ktp = $file_name;
        }

        if ($request->file('segel_tanah') != null) {

            $file = $request->file('segel_tanah');

            $file_name = $file->getClientOriginalName();

            $file->move('lampiran/permohonan-tanah', $file_name);
            $data->segel_tanah = $file_name;
        }
        if ($request->file('skt') != null) {

            $file = $request->file('skt');

            $file_name = $file->getClientOriginalName();

            $file->move('lampiran/permohonan-tanah', $file_name);
            $data->skt = $file_name;
        }

        if ($request->file('npwp') != null) {

            $file = $request->file('npwp');

            $file_name = $file->getClientOriginalName();

            $file->move('lampiran/permohonan-tanah', $file_name);
            $data->npwp = $file_name;
        }

        if ($request->file('riwayat_peroleh_tanah') != null) {

            $file = $request->file('riwayat_peroleh_tanah');

            $file_name = $file->getClientOriginalName();

            $file->move('lampiran/permohonan-tanah', $file_name);
            $data->riwayat_peroleh_tanah = $file_name;
        }

        if ($request->file('sppt') != null) {

            $file = $request->file('sppt');

            $file_name = $file->getClientOriginalName();

            $file->move('lampiran/permohonan-tanah', $file_name);
            $data->sppt = $file_name;
        }

        $data->update();

        return redirect()->route('pemohon.permohonan_tanah_pemohon.index')->withSuccess('Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PermohonanTanah::FindOrFail($id);
        try {
            $permohonan_pemohon->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->with('warning', 'Data gagal dihapus karna ada yang berelasi');
            }
        }

    }
}
