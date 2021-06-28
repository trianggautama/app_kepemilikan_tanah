@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content p-4">
        <div class="breadcrumb-wrapper d-flex justify-content-between align-items-center mb-0">
            <div>
                <h1>Kecamatan</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <span class="mdi mdi-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            Kecamatan
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
                    <form action="{{Route('admin.kecamatan.update',$kecamatan->id)}}" method="POST">
                        @csrf
                        @method('put')

                        <div class="card-body">
                            <div class="form-group">
                                <label for="firstName">Kode Kecamatan</label>
                                <input type="text" name="kode_kecamatan" value="{{$kecamatan->kode_kecamatan}}"
                                    class="form-control form-control-sm" placeholder="Kode Kecamatan">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Nama Kecamatan</label>
                                <input type="text" name="nama_kecamatan" value="{{$kecamatan->nama_kecamatan}}"
                                    class="form-control form-control-sm" placeholder="Nama Kecamatan">
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <a href="{{Route('admin.kecamatan.index')}}" class="btn btn-sm btn-secondary">kembali</a>
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