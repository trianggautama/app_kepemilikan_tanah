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
                    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Biodata Pemohon</a>
                    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Data Permohonan</a>
                    <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Data Survei</a>
                    <a href="{{Route('peneliti.permohonan_peneliti.index')}}" class="nav-link"><i class="fa fa-arrow-left"></i> Kembali</a>
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
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>No Hp</td>
                                    <td>:</td>
                                    <td>-</td>
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
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Luas</td>
                                    <td>:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td>-</td>
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
                                    <td><a href="" class="btn btn-sm btn-success"><i class="fa fa-paperclip"></i> Surat Ukur</a></td>
                                </tr>
                                <tr>
                                    <td>Gambar Denah</td>
                                    <td>:</td>
                                    <td><a href="" class="btn btn-sm btn-success"><i class="fa fa-paperclip"></i> Gambar Denah</a></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td><div class="badge badge-warning">menunggu verifikasi ketua tim peneliti</div></td>
                                </tr>
                            </table>
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
                    <form action="{{Route('admin.kecamatan.store')}}" method="POST">
                        @csrf
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data Survei</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body px-4">
                            <div class="form-group">
                                <label for="firstName">Nama Petugas </label>
                                <input type="text" name="kode_kecamatan" class="form-control form-control-sm"
                                    placeholder="Kode Kecamatan" value="{{Auth::user()->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Tanggal Survei</label>
                                <input type="date" name="nama_kecamatan" class="form-control form-control-sm"
                                    placeholder="Nama Kecamatan" value="{{Carbon\carbon::now()->format('Y-m-d')}}">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Surat Ukur</label>
                                <input type="file" name="nama_kecamatan" class="form-control form-control-sm"
                                    placeholder="Nama Kecamatan">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Gambar Denah</label>
                                <input type="file" name="nama_kecamatan" class="form-control form-control-sm"
                                    placeholder="Nama Kecamatan" value="}">
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