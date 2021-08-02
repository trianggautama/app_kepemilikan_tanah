@extends('layouts.main')
@section('content')
<div class="content-wrapper">
        <div class="content p-4">
            <div class="breadcrumb-wrapper d-flex justify-content-between align-items-center mb-0">
                <div>
                    <h1>Profil</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">
                            <a href="index.html">
                                <span class="mdi mdi-home"></span>                
                            </a>
                            </li>
                            <li class="breadcrumb-item">
                            Pemohon
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Profil</li>
                        </ol>
                    </nav>
                </div>
            <div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card mt-6">
                <div class="card-body text-center">
                    <a href="javascript:0" data-toggle="modal" data-target="#modal-contact" class="text-secondary d-inline-block mb-3">
                        <div class="image mb-3 mt-n9">
                            <img src="{{asset('admin/img/user/u-xl-12.jpg')}}" class="img-fluid rounded-circle" alt="Avatar Image">
                        </div>

                        <h5 class="card-title text-dark">{{Auth::user()->nama}}</h5>

                        <ul class="list-unstyled text-center">
                            <li class="d-flex mb-1">
                                <i class="mdi mdi-map mr-1"></i>
                                <span>{{Auth::user()->nip}}</span>
                            </li>
                            <li class="d-flex text-center">
                                <i class="mdi mdi-email mr-4"></i>
                                <span>User Pemohon</span>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>s
        </div>
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">Biodata</div>
                        <div class="col-md text-right">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#modal-add-event">
                                <i class="fa fa-edit mr-1"></i> Edit Profil
                            </button>                            
                            <a href="{{Route('pemohon.index')}}" class="btn btn-sm btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                       <tr>
                            <td width="25%">NIK</td>
                            <td width="2%">:</td>
                            <td>{{Auth::user()->nip}}</td>
                       </tr>
                       <tr>
                            <td width="25%">Nama</td>
                            <td width="2%">:</td>
                            <td>{{Auth::user()->nama}}</td>
                       </tr>
                       <tr>
                            <td width="25%">Tempat , tanggal lahir</td>
                            <td width="2%">:</td>
                            <td>{{Auth::user()->tempat_lahir}}, {{Auth::user()->tanggal_lahir}}</td>
                       </tr>
                       <tr>
                            <td width="25%">Alamat</td>
                            <td width="2%">:</td>
                            <td>{{Auth::user()->alamat}}</td>
                       </tr>
                       <tr>
                            <td width="25%">Username</td>
                            <td width="2%">:</td>
                            <td>{{Auth::user()->username}}</td>
                       </tr>
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
                    <form action="{{Route('pemohon.profil.update',Auth::user()->id)}}" method="POST">
                        @csrf
                        @method('PUT')
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
                                    placeholder="Nama Pemohon" required value="{{Auth::user()->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control form-control-sm"
                                    placeholder="Tempat Lahir" required value="{{Auth::user()->tempat_lahir}}">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control form-control-sm" required value="{{Auth::user()->tanggal_lahir}}">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Alamat</label>
                                <input type="text" name="alamat" class="form-control form-control-sm" required value="{{Auth::user()->alamat}}">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="" class="form-control" required>
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki" {{Auth::user()->jenis_kelamin == 'Laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                                    <option value="Perempuan" {Auth::user()->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                                </select> 
                            </div>
                            <div class="form-group">
                                <label for="firstName">Username</label>
                                <input type="text" name="username" class="form-control form-control-sm" value="{{Auth::user()->username}}">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Password</label>
                                <input type="password" name="password" class="form-control form-control-sm">
                                <small class="text-danger">isi jika ingin merubah password</small>
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