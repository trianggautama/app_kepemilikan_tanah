<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
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

}
 