@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content p-4">
        <div class="breadcrumb-wrapper d-flex justify-content-between align-items-center mb-0">
            <div>
                <h1>Tambah Permohonan </h1>
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
                        <li class="breadcrumb-item" aria-current="page">Tambah</li>
                    </ol>
                </nav>
            </div>
            <div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <form action="{{Route('pemohon.permohonan_pemohon.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="firstName">Jenis Bangunan</label>
                                <select name="jenis_bangunan" id="" class="form-control">
                                    <option value="">- pilih jenis bagunan -</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">Kecamatan</label>
                                        <select name="kecamatan" id="" class="form-control">
                                            <option value="">- pilih Kecamatan -</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">Kelurahan</label>
                                        <select name="kelurahans" id="" class="form-control">
                                            <option value="">- pilih kelurahans -</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">No Fisik</label>
                                        <input type="text" name="no_fisik" class="form-control form-control-sm" placeholder="Nama Jabatan">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">No Yuridis</label>
                                        <input type="text" name="no_yuridis" class="form-control form-control-sm" placeholder="Nama Jabatan">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName">NIB</label>
                                <input type="text" name="nib" class="form-control form-control-sm" placeholder="Nama Jabatan">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Letak Tanah</label>
                                <input type="text" name="nib" class="form-control form-control-sm" placeholder="Nama Jabatan">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Dikuasai Awal</label>
                                <input type="text" name="nib" class="form-control form-control-sm" placeholder="Nama Jabatan">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Tahun</label>
                                <input type="text" name="nib" class="form-control form-control-sm" placeholder="Nama Jabatan">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Dengan Dasar</label>
                                <input type="text" name="nib" class="form-control form-control-sm" placeholder="Nama Jabatan">
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">No Register</label>
                                        <input type="text" name="nib" class="form-control form-control-sm" placeholder="Nama Jabatan">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">Tanggal Register</label>
                                        <input type="date" name="nib" class="form-control form-control-sm" placeholder="Nama Jabatan">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName">luas Tanah</label>
                                <input type="text" name="luas_tanah" class="form-control form-control-sm" placeholder="Nama Jabatan">
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">Surat Kuasa</label>
                                        <input type="file" name="surat_kuasa" class="form-control form-control-sm" placeholder="Nama Jabatan">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">KTP</label>
                                        <input type="file" name="ktp" class="form-control form-control-sm" placeholder="Nama Jabatan">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <a href="{{Route('pemohon.permohonan_pemohon.index')}}" class="btn btn-sm btn-secondary">kembali</a>
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