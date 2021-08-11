@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content p-4">
        <div class="breadcrumb-wrapper d-flex justify-content-between align-items-center mb-0">
            <div>
                <h1>Detail Pemohon</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <span class="mdi mdi-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            Detail Pemohon
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
                    <form action="{{Route('report.biodata.filter.post')}}" method="POST" target="__blank">
                        @csrf 
                        <div class="card-body">
                            <div class="form-group">
                                <label for="firstName">Nama/ NIK</label>
                                <select name="pemohon_id" id="" class="form-control form-control-sm select2">
                                    <option value="">- pilih role -</option>
                                    @foreach($data as $d)
                                    <option value="{{$d->id}}">{{$d->nama}}/ {{$d->nip}}</option>
                                    @endforeach
                                </select> 
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <a href="{{Route('admin.index')}}" class="btn btn-sm btn-secondary">kembali</a>
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-print"></i> Cetak Detail Pemohon</button>
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