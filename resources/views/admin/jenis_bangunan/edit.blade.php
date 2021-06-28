@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content p-4">
        <div class="breadcrumb-wrapper d-flex justify-content-between align-items-center mb-0">
            <div>
                <h1>Jenis Bangunan</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <span class="mdi mdi-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            Jenis Bnagunan
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
                <div class="card">
                    <form action="{{Route('admin.jenis_bangunan.update',$jenisBangunan->id)}}" method="POST">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="firstName">Kode Jenis</label>
                                <input type="text" name="kode_jenis" value="{{$jenisBangunan->kode_jenis}}"
                                    class="form-control form-control-sm" placeholder="Kode Jenis">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Nama Jenis</label>
                                <input type="text" name="nama_jenis" value="{{$jenisBangunan->nama_jenis}}"
                                    class="form-control form-control-sm" placeholder="Nama Jenis">
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <a href="{{Route('admin.jabatan.index')}}" class="btn btn-sm btn-secondary">kembali</a>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan Data</button>
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