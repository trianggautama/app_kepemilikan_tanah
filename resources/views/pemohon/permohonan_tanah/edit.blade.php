@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content p-4">
        <div class="breadcrumb-wrapper d-flex justify-content-between align-items-center mb-0">
            <div>
                <h1>Edit Permohonan Sertifikat Bangunan </h1>
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
                    <form action="#"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('put')
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">Kelurahan</label>
                                        <select name="kelurahan_id" id="" class="form-control" required>
                                            <option value="">- pilih kelurahans -</option>
                                            @foreach ($kelurahan as $d)
                                            <option value="{{$d->id}}">
                                                {{$d->nama_kelurahan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">No Fisik</label>
                                        <input type="text" name="no_fisik" value=""
                                            class="form-control form-control-sm" placeholder="No Fisik" required>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">No Yuridis</label>
                                        <input type="text" name="no_yuridis" value=""
                                            class="form-control form-control-sm" placeholder="No Yuridis" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName">NIB</label>
                                <input type="text" name="nib" value=""
                                    class="form-control form-control-sm" placeholder="NIB" required>
                            </div>
                            <div class="form-group">
                                <label for="firstName">Letak Tanah</label>
                                <input type="text" name="letak_tanah" value=""
                                    class="form-control form-control-sm" placeholder="Letak Tanah" required>
                            </div>
                            <div class="form-group">
                                <label for="firstName">Dikuasai Awal</label>
                                <input type="text" name="dikuasai_awal" value=""
                                    class="form-control form-control-sm" placeholder="Dikuasai Awal" required>
                            </div>
                            <div class="form-group">
                                <label for="firstName">Tahun</label>
                                <input type="text" name="tahun" value=""
                                    class="form-control form-control-sm" placeholder="Tahun" required>
                            </div>
                            <div class="form-group">
                                <label for="firstName">Dengan Dasar</label>
                                <input type="text" name="dengan_dasar" value=""
                                    class="form-control form-control-sm" placeholder="Dengan Dasar" required>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">No Register</label>
                                        <input type="text" name="no_register"
                                            value=""
                                            class="form-control form-control-sm" placeholder="No Register" required>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">Tanggal Register</label>
                                        <input type="date" name="tanggal_register"
                                            value=""
                                            class="form-control form-control-sm" placeholder="Nama Jabatan" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstName">luas Tanah</label>
                                <input type="text" name="luas_tanah" value=""
                                    class="form-control form-control-sm" placeholder="Luas Tanah" required>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">KK</label>
                                        <input type="file" name="kk" class="form-control form-control-sm"
                                            placeholder="Nama Jabatan" required>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">KTP</label> 
                                        <input type="file" name="ktp" class="form-control form-control-sm"
                                            placeholder="Nama Jabatan" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">SKT / SPORADIK Asli</label>
                                        <input type="file" name="skt" class="form-control form-control-sm"
                                            placeholder="Nama Jabatan" required>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">Segel Tanah / Sporadik ASM (Lurah)</label>
                                        <input type="file" name="segel_tanah" class="form-control form-control-sm"
                                            placeholder="Nama Jabatan" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">NPWP</label>
                                        <input type="file" name="segel_tanah" class="form-control form-control-sm"
                                            placeholder="Nama Jabatan" required>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">Riwayat Perolehan Tanah</label>
                                        <input type="file" name="keterangan_tanah" class="form-control form-control-sm"
                                            placeholder="Nama Jabatan" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">SPPT PBB</label>
                                        <input type="file" name="keterangan_tanah" class="form-control form-control-sm"
                                            placeholder="Nama Jabatan" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <a href="{{Route('pemohon.permohonan_pemohon.index')}}"
                                class="btn btn-sm btn-secondary">kembali</a>
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
        @endsections