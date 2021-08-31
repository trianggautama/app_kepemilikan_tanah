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
                        <div class="row">
                            <div class="col-md">Tabel Data</div>
                            <div class="col-md">
                                <a href="{{Route('pemohon.permohonan_pemohon.create')}}"
                                    class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
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
                                            <form action="{{Route('pemohon.permohonan_pemohon.destroy',$d->id)}}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{Route('pemohon.permohonan_pemohon.show',$d->id)}}"
                                                    class="btn btn-sm btn-info">
                                                    <i class="fa fa-info-circle"></i> Detail</a>
                                                @if($d->status != 5)
                                                <a href="{{Route('pemohon.permohonan_pemohon.edit',$d->id)}}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="fa fa-edit"></i> Edit</a>
                                                <button type="submit" class="btn btn-sm btn-danger"><i
                                                        class="fa fa-trash"></i> Hapus</button>
                                                @endif
                                            </form>
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
        @endsection