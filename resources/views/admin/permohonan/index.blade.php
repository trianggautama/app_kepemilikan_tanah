@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content p-4">
        <div class="breadcrumb-wrapper d-flex justify-content-between align-items-center mb-0">
            <div>
                <h1>Permohonan Sertifikat Bangunan</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <span class="mdi mdi-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            Permohonan Sertifikat Bangunan
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
            <div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-header text-right">

                    </div>
                    <div class="card-body">
                        <div class="basic-data-table">
                            <table id="basic-data-table" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Jenis Bangunan</td>
                                        <td>No Fisik</td>
                                        <td>No Yuridis</td>
                                        <td>Letak Tanah</td>
                                        <td>Status</td>
                                        <td class="text-center">Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$d->jenis_bangunan->nama_jenis}}</td>
                                        <td>{{$d->no_fisik}}</td>
                                        <td>{{$d->no_yuridis}}</td>
                                        <td>{{$d->letak_tanah}}</td>
                                        <td>
                                            @switch($d->status)
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
                                        <td class="text-center">
                                                <a href="{{Route('admin.permohonan.show',$d->id)}}"
                                                    class="btn btn-sm btn-info">
                                                    <i class="fa fa-info-circle"></i> Detail</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
                            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body px-4">
                            <div class="form-group">
                                <label for="firstName">Nama</label>
                                <input type="text" name="nama" class="form-control form-control-sm"
                                    placeholder="Nama admin">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control form-control-sm"
                                    placeholder="Nama Kota / Kabupaten">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Username</label>
                                <input type="text" name="username" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Password</label>
                                <input type="password" name="password" class="form-control form-control-sm">
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