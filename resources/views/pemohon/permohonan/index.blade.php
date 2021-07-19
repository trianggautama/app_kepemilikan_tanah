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
                        <div class="row">
                            <div class="col-md">Tabel Data</div>
                            <div class="col-md">
                                <a href="{{Route('pemohon.permohonan_pemohon.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
                            </div> 
                        </div>
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
                                <tr>
                                    <td>1</td>
                                    <td>Ruko</td>
                                    <td>232173612</td>
                                    <td>273561211</td>
                                    <td>Jl.A.yani km 31</td>
                                    <td>
                                        <div class="badge badge-warning">Verifikasi Petugas Lapangan</div>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{Route('pemohon.permohonan_pemohon.destroy',1)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{Route('pemohon.permohonan_pemohon.show',1)}}"
                                                class="btn btn-sm btn-info">
                                                <i class="fa fa-info-circle"></i> Detail</a>
                                            <a href="{{Route('pemohon.permohonan_pemohon.edit',1)}}"
                                                class="btn btn-sm btn-primary">
                                                <i class="fa fa-edit"></i> Edit</a>
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
        </div>
        @endsection