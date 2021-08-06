@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content p-4">
        <div class="breadcrumb-wrapper d-flex justify-content-between align-items-center mb-0">
            <div>
                <h1>Permohonan</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <span class="mdi mdi-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            Permohonan
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Detail</li>
                    </ol>
                </nav>
            </div>
            <div>
            </div>
        </div>
        @if($permohonan_pemohon->status == 5)
            <div class="row">
                <div class="col-md">
                    <div class="alert alert-success">
                        <h5 class="mb-1">Informasi Pengambilan</h5>
                        <p>Pengambilan sertifikat dapat langsung di ambil di kantor BPN Banjarbaru dengan membwa fotocoy lampiran KTP , dan Surat Kuasa (Jika ada), jam pelayanan kantor buka setiap hari Senin - Jum'at Jam 09.00 - 13.00 , khusus hari jum'at pelayanan buka 08.00 - 10.00</p>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                            aria-controls="nav-home" aria-selected="true">Biodata Pemohon</a>
                        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                            aria-controls="nav-profile" aria-selected="false">Data Permohonan</a>
                        <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                            aria-controls="nav-contact" aria-selected="false">Data Survei</a>
                        <a href="{{Route('pemohon.permohonan_pemohon.index')}}" class="nav-link"><i
                                class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md">
                                        Data Permohonan
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <tr>
                                        <td width="20%">Nama</td>
                                        <td width="2%">:</td>
                                        <td>{{$permohonan_pemohon->user->nama}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tempat, Tanggal lahir</td>
                                        <td>:</td>
                                        <td>{{$permohonan_pemohon->user->tempat_lahir}},
                                            {{carbon\carbon::parse($permohonan_pemohon->user->tanggal_lahir)->translatedFormat('d F Y')}}

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>KTP</td>
                                        <td>:</td>
                                        <td><a href="{{url('lampiran/permohonan/'.$permohonan_pemohon->ktp)}}"
                                                target="_blank" class="btn btn-sm btn-success"><i
                                                    class="fa fa-paperclip"></i>
                                                KTP</a></td>
                                    </tr>
                                    <tr>
                                        <td>Surat Kuasa</td>
                                        <td>:</td>
                                        <td><a href="{{url('lampiran/permohonan/'.$permohonan_pemohon->surat_kuasa)}}"
                                                target="_blank" class="btn btn-sm btn-success"><i
                                                    class="fa fa-paperclip"></i>
                                                Surat Kuasa</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="card">
                            <div class="card-header">
                                Data Permohonan Izin
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <tr>
                                        <td width="20%">Jenis Bangunan</td>
                                        <td width="2%">:</td>
                                        <td>{{$permohonan_pemohon->jenis_bangunan->nama_jenis}}</td>
                                    </tr>
                                    <tr>
                                        <td>Kelurahan</td>
                                        <td>:</td>
                                        <td>{{$permohonan_pemohon->kelurahan->nama_kelurahan}}</td>
                                    </tr>
                                    <tr>
                                        <td>No fisik</td>
                                        <td>:</td>
                                        <td>{{$permohonan_pemohon->no_fisik}}</td>
                                    </tr>
                                    <tr>
                                        <td>No Yuridis</td>
                                        <td>:</td>
                                        <td>{{$permohonan_pemohon->no_yuridis}}</td>
                                    </tr>
                                    <tr>
                                        <td>NIB</td>
                                        <td>:</td>
                                        <td>{{$permohonan_pemohon->nib}}</td>
                                    </tr>
                                    <tr>
                                        <td>Letak Tanah</td>
                                        <td>:</td>
                                        <td>{{$permohonan_pemohon->letak_tanah}}</td>
                                    </tr>
                                    <tr>
                                        <td>Dikuasai Awal</td>
                                        <td>:</td>
                                        <td>{{$permohonan_pemohon->dikuasai_awal}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tahun</td>
                                        <td>:</td>
                                        <td>{{$permohonan_pemohon->tahun}}</td>
                                    </tr>
                                    <tr>
                                        <td>Dikuasai Pemohon</td>
                                        <td>:</td>
                                        <td>{{$permohonan_pemohon->dikuasai_awal}}</td>
                                    </tr>
                                    <tr>
                                        <td>Dengan Dasar</td>
                                        <td>:</td>
                                        <td>{{$permohonan_pemohon->dengan_dasar}}</td>
                                    </tr>
                                    <tr>
                                        <td>Dasar</td>
                                        <td>:</td>
                                        <td>{{$permohonan_pemohon->dengan_dasar}}</td>
                                    </tr>
                                    <tr>
                                        <td>No Register</td>
                                        <td>:</td>
                                        <td>{{$permohonan_pemohon->no_register}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>:</td>
                                        <td>{{carbon\carbon::parse($permohonan_pemohon->tanggal_register)->translatedFormat('d F Y')}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Luas</td>
                                        <td>:</td>
                                        <td>{{$permohonan_pemohon->luas_tanah}}</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>:</td>
                                        <td>
                                            @switch($permohonan_pemohon->status)
                                            @case(0)
                                                <div class="badge badge-warning">Verifikasi ( Admin )</div>
                                            @break
                                            @case(1)
                                                <div class="badge badge-warning">Pelaksanaan Pengukuran dan Pemetaan  Kadastral (Peneliti / Petugas Lapangan)</div>
                                            @break
                                            @case(2)
                                                <div class="badge badge-warning">Verifikasi Kepala Survey, Seksi dan Pemetaan (Ketua Peneliti / Petugas Lapangan)</div>
                                            @break
                                            @case(3)
                                                <div class="badge badge-warning">Verifikasi Sub Seksi Pemetaan Hak Tanah dan Pemberdayaan Masyarakat (Kepala Seksi)</div>
                                            @break
                                            @case(4)
                                                <div class="badge badge-warning">Verifikasi Kepala Kantor Pertanahan (Kepala Kantor Pertanahan)</div>
                                            @break
                                            @default
                                                <div class="badge badge-primary">Pengarsipan</div>
                                            @endswitch
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md">
                                        Data Survei Lapangan
                                    </div>
                                    <div class="col-md text-right">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>belum di input</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @endsection
        @section('script')
        <script>

        </script>
        @endsection