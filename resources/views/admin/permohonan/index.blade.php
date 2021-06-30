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
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama Pemohon</td>
                                    <td>Jenis Bangunan</td>
                                    <td>No Fisik</td>
                                    <td>No Yuridis</td>
                                    <td>Letak Tanah</td>
                                    <td>Status</td>
                                    <td class="text-center">Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nama Pemohon</td>
                                    <td>Ruko</td>
                                    <td>232173612</td>
                                    <td>273561211</td>
                                    <td>Jl.A.yani km 31</td>
                                    <td>
                                        <div class="badge badge-warning">Verifikasi Petugas Lapangan</div>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{Route('admin.permohonan.destroy',1)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{Route('admin.permohonan.show',1)}}"
                                                class="btn btn-sm btn-primary">
                                                <i class="fa fa-info-circle"></i> Detail</a>
                                            <button type="submit" class="btn btn-sm btn-danger"><i
                                                    class="fa fa-trash"></i> Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
                                    placeholder="Nama Pemohon">
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