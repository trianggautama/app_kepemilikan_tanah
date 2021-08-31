@extends('layouts.main') 
@section('content')
<div class="content-wrapper">
    <div class="content p-4">
        <div class="breadcrumb-wrapper d-flex justify-content-between align-items-center mb-0">
            <div>
                <h1>Permohonan Sertifikat Tanah</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <span class="mdi mdi-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            Permohonan Sertifikat Tanah
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Detail</li>
                    </ol>
                </nav>
            </div>
            <div>
            </div>
        </div>
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
                        <a href="{{Route('ketua_peneliti.permohonan_tanah_ketua_peneliti.index')}}" class="nav-link"><i
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
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Tempat, Tanggal lahir</td>
                                        <td>:</td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>KTP</td>
                                        <td>:</td>
                                        <td><a href=""
                                                target="_blank" class="btn btn-sm btn-success"><i
                                                    class="fa fa-paperclip"></i>
                                                KTP</a></td>
                                    </tr>
                                    <tr>
                                        <td>KK</td>
                                        <td>:</td>
                                        <td><a href=""
                                                target="_blank" class="btn btn-sm btn-success"><i
                                                    class="fa fa-paperclip"></i>
                                                Kartu Keluarga</a></td>
                                    </tr>
                                    <tr>
                                        <td>SKT / SPORADIK Asli</td>
                                        <td>:</td>
                                        <td><a href=""
                                                target="_blank" class="btn btn-sm btn-success"><i
                                                    class="fa fa-paperclip"></i>
                                                    SKT / SPORADIK Asli</a></td>
                                    </tr>
                                    <tr>
                                        <td>Segel Tanah / Sporadik ASM (Lurah)</td>
                                        <td>:</td>
                                        <td><a href=""
                                                target="_blank" class="btn btn-sm btn-success"><i
                                                    class="fa fa-paperclip"></i>
                                                    Segel Tanah / Sporadik ASM (Lurah)</a></td>
                                    </tr>
                                    <tr>
                                        <td>NPWP</td>
                                        <td>:</td>
                                        <td><a href=""
                                                target="_blank" class="btn btn-sm btn-success"><i
                                                    class="fa fa-paperclip"></i>
                                                    NPWP</a></td>
                                    </tr>
                                    <tr>
                                        <td>Riwayat Perolehan Tanah</td>
                                        <td>:</td>
                                        <td><a href="s"
                                                target="_blank" class="btn btn-sm btn-success"><i
                                                    class="fa fa-paperclip"></i>
                                                Riwayat Perolehan Tanah</a></td>
                                    </tr>
                                    <tr>
                                        <td>SPPT PBB</td>
                                        <td>:</td>
                                        <td><a href="s"
                                                target="_blank" class="btn btn-sm btn-success"><i
                                                    class="fa fa-paperclip"></i>
                                                SPPT PBB</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md">Data Permohonan Izin</div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <tr>
                                        <td width="20%">Jenis Bangunan</td>
                                        <td width="2%">:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Kelurahan</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>No fisik</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>No Yuridis</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>NIB</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Letak Tanah</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Dikuasai Awal</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Tahun</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Dikuasai Pemohon</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Dengan Dasar</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Dasar</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>No Register</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>:</td>
                                        <td>-
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Luas</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>:</td>
                                        <td>
                                            @switch(1)
                                            @case(0)
                                            <div class="badge badge-warning">Verifikasi ( Admin )</div>
                                            @break
                                            @case(1)
                                            <div class="badge badge-warning">Pelaksanaan Pengukuran dan Pemetaan
                                                Kadastral (Peneliti / Petugas Lapangan)</div>
                                            @break
                                            @case(2)
                                            <div class="badge badge-warning">Verifikasi Kepala Survey, Seksi dan
                                                Pemetaan (Ketua Peneliti / Petugas Lapangan)</div>
                                            @break
                                            @case(3)
                                            <div class="badge badge-warning">Verifikasi Sub Seksi Pemetaan Hak Tanah dan
                                                Pemberdayaan Masyarakat (Kepala Seksi)</div>
                                            @break
                                            @case(4)
                                            <div class="badge badge-warning">Verifikasi Kepala Kantor Pertanahan (Kepala
                                                Kantor Pertanahan)</div>
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
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                            data-target="#modal-add-event">
                                            <i class="fa fa-check-circle mr-1"></i> Verifikasi Data Survei
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <tr>
                                        <td width="20%">Tanggal Survei</td>
                                        <td width="2%">:</td>
                                        <td>-
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Petugas Survei</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Luas Bidang (m <sup>2</sup> )</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Kepekaan Erosi</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat Erosi</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Drainase</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Kerikil / bebatuan</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Ancaman Banjir</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Surat ukur</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Surat Ukur</td>
                                        <td>:</td>
                                        <td>
                                            <a href="#"
                                                class="btn btn-sm btn-success"><i class="fa fa-paperclip"></i>
                                                Surat Ukur</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Gambar Denah</td>
                                        <td>:</td>
                                        <td><a href="#"
                                                class="btn btn-sm btn-success"><i class="fa fa-paperclip"></i>
                                                Gambar Denah</a></td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>:</td>
                                        <td>
                                            @switch(0)
                                            @case(0)
                                            <div class="badge badge-warning">Verifikasi Admin</div>
                                            @break
                                            @case(1)
                                            <div class="badge badge-warning">Pelaksanaan Pengukuran dan Pemetaan
                                                Kadastral</div>
                                            @break
                                            @case(2)
                                            <div class="badge badge-warning">Verifikasi Kepala Survey, Seksi dan
                                                Pemetaan</div>
                                            @break
                                            @case(3)
                                            <div class="badge badge-warning">Verifikasi Sub Seksi Pemetaan Hak Tanah dan
                                                Pemberdayaan Masyarakat</div>

                                            @break
                                            @case(4)
                                            <div class="badge badge-warning">Verifikasi Kepala Kantor Pertanahan</div>
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
                </div>
            </div>
        </div>
        @endsection
        @section('script')
        <script>

        </script>
        @endsection