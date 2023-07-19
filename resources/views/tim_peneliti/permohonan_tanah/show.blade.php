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
                        <a href="{{Route('peneliti.permohonan_tanah_pemohon.index')}}" class="nav-link"><i
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
                                        <td>{{$data->user->nama}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tempat, Tanggal lahir</td>
                                        <td>:</td>
                                        <td>{{$data->user->tempat_lahir}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>KTP</td>
                                        <td>:</td>
                                        <td><a href="{{asset('lampiran/permohonan-tanah/'.$data->ktp)}}" target="_blank"
                                                class="btn btn-sm btn-success"><i class="fa fa-paperclip"></i>
                                                KTP</a></td>
                                    </tr>
                                    <tr>
                                        <td>KK</td>
                                        <td>:</td>
                                        <td><a href="{{asset('lampiran/permohonan-tanah/'.$data->kk)}}" target="_blank"
                                                class="btn btn-sm btn-success"><i class="fa fa-paperclip"></i>
                                                Kartu Keluarga</a></td>
                                    </tr>
                                    <tr>
                                        <td>SKT / SPORADIK Asli</td>
                                        <td>:</td>
                                        <td><a href="{{asset('lampiran/permohonan-tanah/'.$data->skt)}}" target="_blank"
                                                class="btn btn-sm btn-success"><i class="fa fa-paperclip"></i>
                                                SKT / SPORADIK Asli</a></td>
                                    </tr>
                                    <tr>
                                        <td>Segel Tanah / Sporadik ASM (Lurah)</td>
                                        <td>:</td>
                                        <td><a href="{{asset('lampiran/permohonan-tanah/'.$data->segel_tanah)}}"
                                                target="_blank" class="btn btn-sm btn-success"><i
                                                    class="fa fa-paperclip"></i>
                                                Segel Tanah / Sporadik ASM (Lurah)</a></td>
                                    </tr>
                                    <tr>
                                        <td>NPWP</td>
                                        <td>:</td>
                                        <td><a href="{{asset('lampiran/permohonan-tanah/'.$data->npwp)}}"
                                                target="_blank" class="btn btn-sm btn-success"><i
                                                    class="fa fa-paperclip"></i>
                                                NPWP</a></td>
                                    </tr>
                                    <tr>
                                        <td>Riwayat Perolehan Tanah</td>
                                        <td>:</td>
                                        <td><a href="{{asset('lampiran/permohonan-tanah/'.$data->riwayat_peroleh_tanah)}}"
                                                target="_blank" class="btn btn-sm btn-success"><i
                                                    class="fa fa-paperclip"></i>
                                                Riwayat Perolehan Tanah</a></td>
                                    </tr>
                                    <tr>
                                        <td>SPPT PBB</td>
                                        <td>:</td>
                                        <td><a href="{{asset('lampiran/permohonan-tanah/'.$data->sppt)}}"
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
                                        <td>Kelurahan</td>
                                        <td>:</td>
                                        <td>{{$data->kelurahan->nama_kelurahan}}</td>
                                    </tr>
                                    <tr>
                                        <td>No fisik</td>
                                        <td>:</td>
                                        <td>{{$data->no_fisik}}</td>
                                    </tr>
                                    <tr>
                                        <td>No Yuridis</td>
                                        <td>:</td>
                                        <td>{{$data->no_yuridis}}</td>
                                    </tr>
                                    <tr>
                                        <td>NIB</td>
                                        <td>:</td>
                                        <td>{{$data->nib}}</td>
                                    </tr>
                                    <tr>
                                        <td>Letak Tanah</td>
                                        <td>:</td>
                                        <td>{{$data->letak_tanah}}</td>
                                    </tr>
                                    <tr>
                                        <td>Dikuasai Awal</td>
                                        <td>:</td>
                                        <td>{{$data->dikuasai_awal}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tahun</td>
                                        <td>:</td>
                                        <td>{{$data->tahun}}</td>
                                    </tr>
                                    <tr>
                                        <td>Dikuasai Pemohon</td>
                                        <td>:</td>
                                        <td>{{$data->dikuasai_awal}}</td>
                                    </tr>
                                    <tr>
                                        <td>Dengan Dasar</td>
                                        <td>:</td>
                                        <td>{{$data->dengan_dasar}}</td>
                                    </tr>
                                    <tr>
                                        <td>Dasar</td>
                                        <td>:</td>
                                        <td>{{$data->dengan_dasar}}</td>
                                    </tr>
                                    <tr>
                                        <td>No Register</td>
                                        <td>:</td>
                                        <td>{{$data->no_register}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>:</td>
                                        <td>{{carbon\carbon::parse($data->tanggal_register)->translatedFormat('d F Y')}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Luas</td>
                                        <td>:</td>
                                        <td>{{$data->luas_tanah}}</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>:</td>
                                        <td>
                                            @switch($data->status)
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
                                            <i class="fa fa-plus mr-1"></i> Tambah Data Survei
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if($data->survei_tanah)
                                <table class="table table-striped">
                                    <tr>
                                        <td width="20%">Tanggal Survei</td>
                                        <td width="2%">:</td>
                                        <td>{{carbon\carbon::parse($data->tanggal_survei)->translatedFormat('d F Y')}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Petugas Survei</td>
                                        <td>:</td>
                                        <td>{{$data->survei_tanah->nama_petugas}}</td>
                                    </tr>
                                    <tr>
                                        <td>Luas Bidang (m <sup>2</sup> )</td>
                                        <td>:</td>
                                        <td>{{$data->survei_tanah->luas_bidang}}</td>
                                    </tr>
                                    <tr>
                                        <td>Kepekaan Erosi</td>
                                        <td>:</td>
                                        <td>{{$data->survei_tanah->kepekaan_erosi}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat Erosi</td>
                                        <td>:</td>
                                        <td>{{$data->survei_tanah->tingkat_erosi}}</td>
                                    </tr>
                                    <tr>
                                        <td>Drainase</td>
                                        <td>:</td>
                                        <td>{{$data->survei_tanah->drainase}}</td>
                                    </tr>
                                    <tr>
                                        <td>Kerikil / bebatuan</td>
                                        <td>:</td>
                                        <td>{{$data->survei_tanah->kerikil}}</td>
                                    </tr>
                                    <tr>
                                        <td>Ancaman Banjir</td>
                                        <td>:</td>
                                        <td>{{$data->survei_tanah->ancaman_banjir}}</td>
                                    </tr>
                                    <tr>
                                        <td>Lereng Permukaan</td>
                                        <td>:</td>
                                        <td>{{$data->survei_tanah->lereng_permukaan}}</td>
                                    </tr>
                                    <tr>
                                        <td>Surat Ukur</td>
                                        <td>:</td>
                                        <td>
                                            <a href="{{asset('lampiran/'.$data->survei_tanah->surat_ukur)}}"
                                                class="btn btn-sm btn-success"><i class="fa fa-paperclip"></i>
                                                Surat Ukur</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Gambar Denah</td>
                                        <td>:</td>
                                        <td><a href="{{asset('lampiran/'.$data->survei_tanah->gambar_denah)}}"
                                                class="btn btn-sm btn-success"><i class="fa fa-paperclip"></i>
                                                Gambar Denah</a></td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>:</td>
                                        <td>
                                            @switch($data->status)
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
                                @else
                                <p>belum di input</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Event Button  -->
        <div class="modal fade" id="modal-add-event" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <form action="{{Route('peneliti.permohonan_tanah_peneliti.store')}}" enctype="multipart/form-data"
                        method="POST">
                        @csrf
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data Survei</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body px-4">
                            <input type="hidden" name="permohonan_tanah_id" value="{{$data->id}}">
                            <div class="form-group">
                                <label for="firstName">Nama Petugas </label>
                                <input type="text" name="nama_petugas" class="form-control form-control-sm"
                                    placeholder="Nama Petugas" value="{{Auth::user()->nama}}" required readonly>
                            </div>
                            <div class=" form-group">
                                <label for="firstName">Tanggal Survei</label>
                                <input type="date" name="tanggal_survei" class="form-control form-control-sm"
                                    placeholder="Tanggal Survei" value="{{Carbon\carbon::now()->format('Y-m-d')}}"
                                    required readonly>
                            </div>
                            <div class="form-group">
                                <label for="firstName">Luas Bidang (m <sup>2</sup> )</label>
                                <input type="text" name="luas_bidang" class="form-control form-control-sm"
                                    placeholder="Nama Kecamatan" required>
                            </div>
                            <div class="form-group">
                                <label for="firstName">Lereng Permukaan</label>
                                <input type="text" name="lereng_permukaan" class="form-control form-control-sm"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="firstName">Kepekaan Erosi</label>
                                <input type="text" name="kepekaan_erosi" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="firstName">tingkat Erosi</label>
                                <input type="text" name="tingkat_erosi" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="firstName">Drainase</label>
                                <input type="text" name="drainase" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="firstName">Kerikil / Bebatuan</label>
                                <input type="text" name="kerikil" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="firstName">Ancaman Banjir</label>
                                <input type="text" name="ancaman_banjir" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="firstName">Surat Ukur</label>
                                <input type="file" name="surat_ukur" class="form-control form-control-sm"
                                    placeholder="Nama Kecamatan" required>
                            </div>
                            <div class="form-group">
                                <label for="firstName">Gambar Denah</label>
                                <input type="file" name="gambar_denah" class="form-control form-control-sm"
                                    placeholder="Nama Kecamatan" value="" required>
                            </div>
                        </div>
                        <div class="modal-footer border-top-0 px-4 pt-0">
                            <button type="submit" class="btn btn-sm btn-primary  m-0">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection
        @section('script')
        <script>

        </script>
        @endsection