<?php

namespace App\Http\Controllers;

use App\Models\JenisBangunan;
use App\Models\Kelurahan;
use App\Models\PeminjamanBerkas;
use App\Models\Permohonan;
use App\Models\Survei;
use App\Models\User;
use PDF;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function pegawai()
    {
        $data   = User::whereNotIn('role', ['0','1'])->get();
        $pdf    = PDF::loadView('report.pegawai', ['data'=>$data]);
        $pdf->setPaper('a4', 'landscape'); 
        
        return $pdf->stream('Laporan Pegawai.pdf');
    }

    public function biodata_pemohon($id)
    {
        $data   = User::findOrFail($id);
        $pdf    = PDF::loadView('report.biodata_pemohon', ['data'=>$data]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan Biodata Pemohon.pdf');
    }

    public function riwayat_berkas($id)
    {
        $data   = Permohonan::findOrFail($id);
        $pdf    = PDF::loadView('report.riwayat_berkas', ['data'=>$data]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan Riwayat Berkass.pdf');
    }

    public function ba($id)
    {
        $data   = Permohonan::findOrFail($id);
        $kadis  = User::where('role',5)->first();
        $pdf    = PDF::loadView('report.berita_acara', ['data'=>$data,'kadis'=>$kadis]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Berita Acara.pdf');
    }

    public function sertifikat($id)
    {
        $data   = Permohonan::findOrFail($id);
        $kadis  = User::where('role',5)->first();
        $pdf    = PDF::loadView('report.sertifikat', ['data'=>$data,'kadis'=>$kadis]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Sertifikat.pdf');
    }

    public function laporan_survei($id)
    {
        $data   = Survei::findOrFail($id);
        $ketua  = User::where('role',3)->first();
        $pdf    = PDF::loadView('report.laporan_survei', ['data'=>$data,'ketua'=>$ketua]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan Survey.pdf');
    }

    public function peminjaman_berkas()
    {
        $data   = PeminjamanBerkas::latest()->get();
        $pdf    = PDF::loadView('report.peminjaman', ['data'=>$data]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan Peminjaman.pdf');
    }

    public function statistik()
    {
        $data   = Permohonan::latest()->get();
        $kelurahan = Kelurahan::latest()->pluck('nama_kelurahan');
        // dd($kelurahan);
        return view('report.statistik',compact('data','kelurahan'));
        // $pdf    = PDF::loadView('report.statistik', ['data'=>$data]);
        // $pdf->setPaper('a4', 'potrait'); 
        
        // return $pdf->stream('Laporan Statistik.pdf');
    }

    public function biodata_filter()
    {
        $data = User::whereRole(0)->get();
        return view('admin.pemohon.filter',compact('data'));
    }


    public function biodata_filter_post(Request $req)
    {
        $data   = User::findOrFail($req->pemohon_id);
        $pdf    = PDF::loadView('report.biodata_pemohon', ['data'=>$data]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan Biodata Pemohon.pdf');
    }


    public function riwayat_berkas_filter()
    {
        $data = Permohonan::latest()->get();
        return view('admin.pemohon.riwayat_berkas_filter',compact('data'));
    }

    public function riwayat_berkas_filter_post(Request $req)
    {
        $data   = Permohonan::findOrFail($req->permohonan_id)->first();
        $pdf    = PDF::loadView('report.riwayat_berkas', ['data'=>$data]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan Riwayat Berkas.pdf');
    }

    public function laporan_survei_filter()
    {
        $data = Permohonan::latest()->get();
        return view('admin.pemohon.laporan_survei_filter',compact('data'));
    }

    public function laporan_survei_filter_post(Request $req)
    {
        $data   = Survei::where('permohonan_id',$req->permohonan_id)->first();
        $ketua  = User::where('role',3)->first();
        $pdf    = PDF::loadView('report.laporan_survei', ['data'=>$data,'ketua'=>$ketua]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan Riwayat Berkas.pdf');
    }
    
    public function ba_filter()
    {
        $data = Permohonan::latest()->get();
        return view('admin.pemohon.ba_filter',compact('data'));
    }

    public function ba_filter_post(Request $req)
    {
        $data   = Permohonan::findOrFail($req->permohonan_id);
        $kadis  = User::where('role',5)->first();
        $pdf    = PDF::loadView('report.berita_acara', ['data'=>$data,'kadis'=>$kadis]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan Beita Acara.pdf');
    }

    public function sertifikat_filter()
    {
        $data = Permohonan::latest()->get();
        return view('admin.pemohon.sertifikat_filter',compact('data'));
    }

    public function sertifikat_filter_post(Request $req)
    {
        $data   = Permohonan::findOrFail($req->permohonan_id);
        $kadis  = User::where('role',5)->first();
        $pdf    = PDF::loadView('report.sertifikat', ['data'=>$data,'kadis'=>$kadis]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan Beita Acara.pdf');
    }
 
}
  