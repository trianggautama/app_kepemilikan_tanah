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
                        <li class="breadcrumb-item" aria-current="page">Edit</li>
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
                        <a href="{{Route('peneliti.permohonan_peneliti.index')}}" class="nav-link"><i
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
                                    <div class="col-md text-right">
                                        @if ($permohonan->status == 3)

                                        <form action="{{route('kasi.permohonan_kasi.update',$permohonan->id)}}"
                                            method="POST">
                                            @csrf
                                            @method('put')
                                            <input type="hidden" name="status" value="4" id="" required>
                                            <button type="submit" class="btn btn-primary"><i
                                                    class="fa fa-check"></i>Verifikasi
                                                permohonan</button>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <tr>
                                        <td width="20%">Nama</td>
                                        <td width="2%">:</td>
                                        <td>{{$permohonan->user->nama}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tempat, Tanggal lahir</td>
                                        <td>:</td>
                                        <td>{{$permohonan->user->tempat_lahir}},
                                            {{carbon\carbon::parse($permohonan->user->tanggal_lahir)->translatedFormat('d F Y')}}

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>KTP</td>
                                        <td>:</td>
                                        <td><a href="{{url('lampiran/permohonan/'.$permohonan->ktp)}}" target="_blank"
                                                class="btn btn-sm btn-success"><i class="fa fa-paperclip"></i>
                                                KTP</a></td>
                                    </tr>
                                    <tr>
                                        <td>Surat Kuasa</td>
                                        <td>:</td>
                                        <td><a href="{{url('lampiran/permohonan/'.$permohonan->surat_kuasa)}}"
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
                                <div class="row">
                                    <div class="col-md">Data Permohonan Izin</div>
                                    <div class="col-md text-right">
                                        @if ($permohonan->status == 3)

                                        <form action="{{route('kasi.permohonan_kasi.update',$permohonan->id)}}"
                                            method="POST">
                                            @csrf
                                            @method('put')
                                            <input type="hidden" name="status" value="4" id="" required>
                                            <button type="submit" class="btn btn-primary"><i
                                                    class="fa fa-check"></i>Verifikasi
                                                permohonan</button>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <tr>
                                        <td width="20%">Jenis Bangunan</td>
                                        <td width="2%">:</td>
                                        <td>{{$permohonan->jenis_bangunan->nama_jenis}}</td>
                                    </tr>
                                    <tr>
                                        <td>Kelurahan</td>
                                        <td>:</td>
                                        <td>{{$permohonan->kelurahan->nama_kelurahan}}</td>
                                    </tr>
                                    <tr>
                                        <td>No fisik</td>
                                        <td>:</td>
                                        <td>{{$permohonan->no_fisik}}</td>
                                    </tr>
                                    <tr>
                                        <td>No Yuridis</td>
                                        <td>:</td>
                                        <td>{{$permohonan->no_yuridis}}</td>
                                    </tr>
                                    <tr>
                                        <td>NIB</td>
                                        <td>:</td>
                                        <td>{{$permohonan->nib}}</td>
                                    </tr>
                                    <tr>
                                        <td>Letak Tanah</td>
                                        <td>:</td>
                                        <td>{{$permohonan->letak_tanah}}</td>
                                    </tr>
                                    <tr>
                                        <td>Dikuasai Awal</td>
                                        <td>:</td>
                                        <td>{{$permohonan->dikuasai_awal}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tahun</td>
                                        <td>:</td>
                                        <td>{{$permohonan->tahun}}</td>
                                    </tr>
                                    <tr>
                                        <td>Dikuasai Pemohon</td>
                                        <td>:</td>
                                        <td>{{$permohonan->dikuasai_awal}}</td>
                                    </tr>
                                    <tr>
                                        <td>Dengan Dasar</td>
                                        <td>:</td>
                                        <td>{{$permohonan->dengan_dasar}}</td>
                                    </tr>
                                    <tr>
                                        <td>Dasar</td>
                                        <td>:</td>
                                        <td>{{$permohonan->dengan_dasar}}</td>
                                    </tr>
                                    <tr>
                                        <td>No Register</td>
                                        <td>:</td>
                                        <td>{{$permohonan->no_register}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>:</td>
                                        <td>{{carbon\carbon::parse($permohonan->tanggal_register)->translatedFormat('d F Y')}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Luas</td>
                                        <td>:</td>
                                        <td>{{$permohonan->luas_tanah}}</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>:</td>
                                        <td>
                                            @switch($permohonan->status)
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
                                            <div class="badge badge-primary">Selesai Pengarsipan</div>
                                            @endswitch
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        @if($permohonan->survei == null)
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md">
                                        Data Survei Lapangan
                                    </div>
                                    <div class="col-md text-right">
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                            data-target="#modal-add-event">
                                            <i class="fa fa-plus mr-1"></i> Tambah Data Survei
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <table class="table table-striped">
                                    <tr>
                                        <td width="20%">Tanggal Survei</td>
                                        <td width="2%">:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Petugas Survei</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Surat Ukur</td>
                                        <td>:</td>
                                        <td>
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Gambar Denah</td>
                                        <td>:</td>
                                        <td>-
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>:</td>
                                        <td>
                                            <div class="badge badge-warning">menunggu verifikasi ketua tim peneliti
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        @else
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md">
                                        Data Survei Lapangan
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <tr>
                                        <td width="20%">Tanggal Survei</td>
                                        <td width="2%">:</td>
                                        <td>{{carbon\carbon::parse($permohonan->tanggal_survei)->translatedFormat('d F Y')}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Petugas Survei</td>
                                        <td>:</td>
                                        <td>{{$permohonan->survei->nama_petugas}}</td>
                                    </tr>
                                    <tr>
                                        <td>Surat Ukur</td>
                                        <td>:</td>
                                        <td>
                                            <a href="{{asset('lampiran/'.$permohonan->survei->surat_ukur)}}"
                                                class="btn btn-sm btn-success"><i class="fa fa-paperclip"></i>
                                                Surat Ukur</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Gambar Denah</td>
                                        <td>:</td>
                                        <td><a href="{{asset('lampiran/'.$permohonan->survei->gambar_denah)}}"
                                                class="btn btn-sm btn-success"><i class="fa fa-paperclip"></i>
                                                Gambar Denah</a></td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>:</td>
                                        <td>
                                            @switch($permohonan->status)
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
                                            <div class="badge badge-primary">Selesai Pengarsipan</div>

                                            @endswitch
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>

        @endsection
        @section('script')
        <script>

        </script>
        @endsection