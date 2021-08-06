@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content p-4">
        <div class="breadcrumb-wrapper d-flex justify-content-between align-items-center mb-0">
            <div>
                <h1>Peminjaman Berkas</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <span class="mdi mdi-home"></span>
                            </a> 
                        </li>
                        <li class="breadcrumb-item">
                            Peminjaman Berkas
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
                    <form action="{{Route('arsip.peminjaman_berkas.update',1)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="firstName">Berkas</label>
                                <select name="" id="" class="form-control">
                                    <option value="">- pilih berkas (yang sudah di arsipkan)-</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="firstName">Nama </label>
                                <input type="text" name="nama" class="form-control form-control-sm"
                                    placeholder="Nama Peminjam">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Keperluan </label>
                                <input type="text" name="keperluan" class="form-control form-control-sm"
                                    placeholder="keperluan peminjaman">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Tanggal Peminjaman </label>
                                <input type="date" name="keperluan" class="form-control form-control-sm"
                                    placeholder="keperluan peminjaman">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Tanggal Pengembalian </label>
                                <input type="date" name="keperluan" class="form-control form-control-sm"
                                    placeholder="keperluan peminjaman">
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