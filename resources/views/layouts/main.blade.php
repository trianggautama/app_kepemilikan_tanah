<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Aplikasi Pengelolaan Kepemilikan Tanah</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
    rel="stylesheet" />
  <link href="{{asset('admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
  <link href="{{asset('admin/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('admin/plugins/data-tables/datatables.bootstrap4.min.css')}}" rel="stylesheet">
  <link id=" sleek-css" rel="stylesheet" href="{{asset('admin/css/sleek.css')}}" />
  <link href="{{asset('admin/img/favicon.png')}}" rel="shortcut icon" />
  <link rel="stylesheet" href="{{asset('iziToast/iziToast.css')}}" />
  <link rel="stylesheet" href="{{asset('iziToast/iziToast.min.css')}}" />
  <script src="{{asset('admin/plugins/nprogress/nprogress.js')}}"></script>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
  <script>
    NProgress.configure({ showSpinner: false });
      NProgress.start();
  </script>
  <div class="wrapper">
    <aside class="left-sidebar bg-sidebar">
      <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
          <a href="/index.html" title="Sleek Dashboard">
            <img src="{{asset('atr.png')}}" alt="" width="30px">
            <span class="brand-name text-truncate">Aplikasi Tanah</span>
          </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="" data-simplebar style="height: 100%;">
          <!-- sidebar menu -->
          <ul class="nav sidebar-inner" id="sidebar-menu">
            @if(Auth::user()->role == 1)
            <li class="has-sub ">
              <a class="sidenav-item-link" href="#">
                <span class="nav-text">Menu Admin</span>
              </a>
            </li>
            <li class="has-sub ">
              <a class="sidenav-item-link" href="{{Route('admin.index')}}">
                <i class="fa fa-home"></i>
                <span class="nav-text">Beranda</span>
              </a>
            </li>
            <li class="has-sub ">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                aria-expanded="false" aria-controls="dashboard">
                <i class="fa fa-folder"></i>
                <span class="nav-text">Master Data</span> <span class="fa fa-sort-down"></span>
              </a>

              <ul class="collapse " id="dashboard" data-parent="#sidebar-menu">
                <div class="sub-menu">
            </li>
            <li class="">
              <a class="sidenav-item-link" href="{{route('admin.pangkat.index')}}">
                <span class="nav-text">Pangkat/Golongan</span>
              </a>
            </li>
            <li class="">
              <a class="sidenav-item-link" href="{{route('admin.jabatan.index')}}">
                <span class="nav-text">Jabatan</span>
              </a>
            </li>

            <li class="">
              <a class="sidenav-item-link" href="{{route('admin.jenis_bangunan.index')}}">
                <span class="nav-text">Jenis Bangunan</span>
              </a>
            </li>
            <li class="">
              <a class="sidenav-item-link" href="{{route('admin.kecamatan.index')}}">
                <span class="nav-text">Kecamatan</span>
              </a>
            </li>
            <li class="">
              <a class="sidenav-item-link" href="{{route('admin.kelurahan.index')}}">
                <span class="nav-text">Kelurahan</span>
              </a>
            </li>
        </div>
        </ul>
        </li>
        <li class="has-sub ">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users"
            aria-expanded="false" aria-controls="dashboard">
            <i class="fa fa-users"></i>
            <span class="nav-text">User Aplikasi</span> <span class="fa fa-sort-down">
          </a>

          <ul class="collapse " id="users" data-parent="#sidebar-menu">
            <div class="sub-menu">
              <li class="">
                <a class="sidenav-item-link" href="{{route('admin.user.index')}}">
                  <span class="nav-text">User Pegawai</span>
                </a>
              </li>
              <li class="">
                <a class="sidenav-item-link" href="{{route('admin.pemohon.index')}}">
                  <span class="nav-text">User Pemohon</span>
                </a>
              </li>
            </div>
          </ul>
        </li>
        <li class="has-sub ">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pemohonan"
            aria-expanded="false" aria-controls="dashboard">
            <i class="fa fa-file-text"></i>
            <span class="nav-text">Permohonan</span> <span class="fa fa-sort-down">
          </a>
          <ul class="collapse " id="pemohonan" data-parent="#sidebar-menu">
            <div class="sub-menu">
              <li class="">
                <a class="sidenav-item-link" href="{{route('admin.permohonan.index')}}">
                  <span class="nav-text">Data Permohonan</span>
                </a>
              </li>
              <li class="">
                <a class="sidenav-item-link" href="{{route('admin.pemohon.index')}}">
                  <span class="nav-text">Arsip Permohonan</span>
                </a>
              </li>
              <li class="">
                <a class="sidenav-item-link" href="{{route('admin.peminjaman.index')}}">
                  <span class="nav-text">Peminjaman Arsip</span>
                </a>
              </li>
            </div>
          </ul>
        </li>
        @endif
        @if(Auth::user()->role == 0)
        <li class="has-sub ">
          <a class="sidenav-item-link" href="#">
            <span class="nav-text">Menu Pemohon</span>
          </a>
        </li>
        <li class="has-sub ">
          <a class="sidenav-item-link" href="{{Route('pemohon.profil')}}">
            <i class="fa fa-user"></i>
            <span class="nav-text">Profil</span>
          </a>
        </li>
        <li class="has-sub ">
            <a class="sidenav-item-link" href="{{Route('pemohon.permohonan_pemohon.index')}}">
              <i class="fa fa-file-text"></i>
              <span class="nav-text">Permohonan</span>
            </a>
          </li>
          <li class="has-sub ">
            <a class="sidenav-item-link" href="">
              <i class="fa fa-file-text"></i>
              <span class="nav-text">Riwayat Permohonan</span>
            </a>
          </li>
          @endif
          @if(Auth::user()->role == 2)
            <li class="has-sub ">
              <a class="sidenav-item-link" href="#">
                <span class="nav-text">Menu Peneliti</span>
              </a>
            </li>
            <li class="has-sub ">
                <a class="sidenav-item-link" href="{{Route('peneliti.profil')}}">
                  <i class="fa fa-user"></i>
                  <span class="nav-text">Profil</span>
                </a>
              </li>
            <li class="has-sub ">
                <a class="sidenav-item-link" href="{{Route('peneliti.permohonan_peneliti.index')}}">
                  <i class="fa fa-file-text"></i>
                  <span class="nav-text">Permohonan</span>
                </a>
              </li>
              <li class="has-sub ">
                <a class="sidenav-item-link" href="">
                  <i class="fa fa-file-text"></i>
                  <span class="nav-text">Riwayat Permohonan</span>
                </a>
              </li>
            @endif
            @if(Auth::user()->role == 3)
            <li class="has-sub ">
              <a class="sidenav-item-link" href="#">
                <span class="nav-text">Menu Ketua Peneliti</span>
              </a>
            </li>
            <li class="has-sub ">
                <a class="sidenav-item-link" href="{{Route('ketua_peneliti.profil')}}">
                  <i class="fa fa-user"></i>
                  <span class="nav-text">Profil</span>
                </a>
              </li>
            <li class="has-sub ">
                <a class="sidenav-item-link" href="{{Route('ketua_peneliti.permohonan_ketua_peneliti.index')}}">
                  <i class="fa fa-file-text"></i>
                  <span class="nav-text">Permohonan</span>
                </a>
              </li>
              <li class="has-sub ">
                <a class="sidenav-item-link" href="">
                  <i class="fa fa-file-text"></i>
                  <span class="nav-text">Riwayat Permohonan</span>
                </a>
              </li>
            @endif
            @if(Auth::user()->role == 4)
            <li class="has-sub ">
              <a class="sidenav-item-link" href="#">
                <span class="nav-text">Menu Kepala Seksi</span>
              </a>
            </li>
            <li class="has-sub ">
                <a class="sidenav-item-link" href="{{Route('kasi.profil')}}">
                  <i class="fa fa-user"></i>
                  <span class="nav-text">Profil</span>
                </a>
              </li>
            <li class="has-sub ">
                <a class="sidenav-item-link" href="{{Route('kasi.permohonan_kasi.index')}}">
                  <i class="fa fa-file-text"></i>
                  <span class="nav-text">Permohonan</span>
                </a>
              </li>
              <li class="has-sub ">
                <a class="sidenav-item-link" href="">
                  <i class="fa fa-file-text"></i>
                  <span class="nav-text">Riwayat Permohonan</span>
                </a>
              </li>
            @endif
            @if(Auth::user()->role == 5)
            <li class="has-sub ">
              <a class="sidenav-item-link" href="#">
                <span class="nav-text">Menu Kepala BPN</span>
              </a>
            </li>
            <li class="has-sub ">
                <a class="sidenav-item-link" href="{{Route('kadis.profil')}}">
                  <i class="fa fa-user"></i>
                  <span class="nav-text">Profil</span>
                </a>
              </li>
            <li class="has-sub ">
                <a class="sidenav-item-link" href="{{Route('kadis.permohonan_kadis.index')}}">
                  <i class="fa fa-file-text"></i>
                  <span class="nav-text">Permohonan</span>
                </a>
              </li>
              <li class="has-sub ">
                <a class="sidenav-item-link" href="">
                  <i class="fa fa-file-text"></i>
                  <span class="nav-text">Riwayat Permohonan</span>
                </a>
              </li>
            @endif
            @if(Auth::user()->role == 6)
            <li class="has-sub ">
              <a class="sidenav-item-link" href="#">
                <span class="nav-text">Menu Admin Arsip</span>
              </a>
            </li>
            <li class="has-sub ">
                <a class="sidenav-item-link" href="{{Route('arsip.profil')}}">
                  <i class="fa fa-user"></i>
                  <span class="nav-text">Profil</span>
                </a>
              </li>
              <li class="has-sub ">
                <a class="sidenav-item-link" href="{{Route('arsip.rak.index')}}">
                  <i class="fa fa-archive"></i>
                  <span class="nav-text">Rak</span>
                </a>
              </li>
            <!-- <li class="has-sub ">
                <a class="sidenav-item-link" href="{{Route('kadis.permohonan_kadis.index')}}">
                  <i class="fa fa-file-text"></i>
                  <span class="nav-text">Permohonan</span>
                </a>
              </li>
              <li class="has-sub ">
                <a class="sidenav-item-link" href="">
                  <i class="fa fa-file-text"></i>
                  <span class="nav-text">Arsip Berkas</span>
                </a>
              </li> -->
            @endif
        </ul>
      </div>
  </div>
  </aside>
  <div class="page-wrapper">
    <header class="main-header " id="header">
      <nav class="navbar navbar-static-top navbar-expand-lg">
        <button id="sidebar-toggler" class="sidebar-toggle">
          <i class="fa fa-arrow-left"></i>
        </button>
        <div class="search-form d-none d-lg-inline-block">
        </div>

        <div class="navbar-right ">
          <ul class="nav navbar-nav">
            <li class="dropdown user-menu">
              <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <img src="{{asset('admin/img/user/user.png')}}" class="user-image" alt="User Image" />
                <span class="d-none d-lg-inline-block">{{Auth::user()->nama}}</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-right">
                <li class="dropdown-header">
                  <img src="{{asset('admin/img/user/user.png')}}" class="img-circle" alt="User Image" />
                  <div class="d-inline-block">
                    {{Auth::user()->nama}} <small class="pt-1">{{Auth::user()->nip}}</small>
                  </div>
                </li>
                <li>
                  <a href="{{ route('auth.logout') }}"
                    onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                    <i class="fa fa-sign-out"></i> Logout
                  </a>
                  <form id="frm-logout" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    @yield('content')
  </div>
  </div>
  <!-- Footer -->
  <footer class="footer mt-auto">
    <div class="copyright bg-white">
      <p>
        &copy; <span id="copy-year"></span> Copyright Sleek Dashboard Bootstrap Template by <a class="text-primary"
          href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
      </p>
    </div>
    <script>
      var d = new Date();
        var year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;
    </script>
  </footer>

  </div> <!-- End Page Wrapper -->
  </div> <!-- End Wrapper -->

  <!-- Javascript -->
  <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/plugins/daterangepicker/moment.min.js')}}"></script>
  <script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <script src="{{asset('admin/js/date-range.js')}}"></script>
  <script src="{{asset('admin/plugins/fullcalendar/core-4.3.1/main.min.js')}}"></script>
  <script src="{{asset('admin/plugins/fullcalendar/daygrid-4.3.0/main.min.js')}}"></script>
  <script src="{{asset('admin/plugins/data-tables/jquery.datatables.min.js')}}"></script>
  <script src="{{asset('admin/plugins/data-tables/datatables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('admin/js/sleek.js')}}"></script>
  <script src="{{asset('iziToast/iziToast.js')}}"></script>
  <script>
    jQuery(document).ready(function() {
      jQuery('#basic-data-table').DataTable();
    });
  </script>
  @include('layouts.alert')
  @include('layouts.alert_error')
  @yield('script')
</body>

</html>