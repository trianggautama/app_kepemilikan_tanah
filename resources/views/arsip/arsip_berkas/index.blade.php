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
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="basic-data-table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama Pemohon / NIK</td>
                                    <td>Jenis Bangunan</td>
                                    <td>No Fisik</td>
                                    <td>No Yuridis</td>
                                    <td>Letak Tanah</td>
                                    <td>Status Arsip</td>
                                    <td class="text-center">Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permohonan as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->user->nama}} / {{$d->user->nip}}</td>
                                    <td>{{$d->jenis_bangunan->nama_jenis}}</td>
                                    <td>{{$d->no_fisik}}</td>
                                    <td>{{$d->no_yuridis}}</td>
                                    <td>{{$d->letak_tanah}}</td>
                                    <td>
                                        @isset($d->arsip_berkas)
                                        <div class="badge badge-primary">Selesai Pengarsipan
                                            ({{$d->arsip_berkas->rak->nama_rak}})</div>
                                        @else
                                        <div class="badge badge-warning">Data Arsip Belum di input</div>
                                        @endisset
                                    </td>
                                    <td class="text-center">
                                        <!-- <a href="{{Route('arsip.arsip_berkas.show',$d->id)}}"
                                            class="btn btn-sm btn-info">
                                            <i class="fa fa-info-circle"></i> Detail</a> -->
                                        @isset($d->arsip_berkas)
                                        -
                                        @else

                                        <button id="tambah" data-id="{{$d->id}}" data-nama="{{$d->user->nama}}"
                                            data-fisik="{{$d->no_fisik}}" type="button" class="btn btn-sm btn-primary"
                                            data-toggle="modal" data-target="#modal-add-event">
                                            <i class="mdi mdi-plus mr-1"></i>Data Arsip
                                        </button>
                                        @endisset
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-add-event" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <form action="{{route('arsip.arsip_berkas.store')}}" method="POST">
                        @csrf
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data Arsip</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body px-4">
                            <div class="form-group">
                                <label for="firstName">Nama Pemohon</label>
                                <p id="nama_pemohon">- dummy</p>
                            </div>
                            <div class="form-group">
                                <label for="firstName">Nomor Fisik</label>
                                <p id="nomor_fisik">- dummy</p>
                            </div>
                            <input id="permohonan_id" type="hidden" name="permohonan_id">
                            <div class="form-group">
                                <label for="firstName">Rak</label>
                                <select name="rak_id" id="" class="form-control">
                                    <option value="">- pilih rak -</option>
                                    @foreach ($rak as $d)
                                    <option value="{{$d->id}}">{{$d->nama_rak}}</option>

                                    @endforeach
                                </select>
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
            $('#tambah').on('click',function(e){
                var id = $(this).data(id);
                var nama = $(this).data(nama);
                var fisik = $(this).data(fisik);

                $('#nama_pemohon').text(nama.nama);
                $('#nomor_fisik').text(fisik.fisik);
                $('#permohonan_id').val(id.id);


            });
        </script>
        @endsection