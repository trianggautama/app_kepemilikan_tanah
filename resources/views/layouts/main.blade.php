
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">
  
    <title>Aplikasi Pengelolaan Kepemilikan Tanah</title>
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
  
    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('adminassets/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('adminassets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  
    <!-- No Extra plugin used -->
    
    <link href="{{asset('adminassets/plugins/daterangepicker/daterangepicker.css')}}" rel='stylesheet'>
    
    
    
    
    <link href="{{asset('adminassets/plugins/fullcalendar/core-4.3.1/main.min.css')}}" rel='stylesheet'>
    <link href="{{asset('adminassets/plugins/fullcalendar/daygrid-4.3.0/main.min.css')}}"" rel='stylesheet'>
    
    
    

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{asset('admin/css/sleek.css')}}" />
  
    <!-- FAVICON -->
    <link href="{{asset('admin/assets/img/favicon.png')}}" rel="shortcut icon" />
  
    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{asset('admin/plugins/nprogress/nprogress.js')}}"></script>
  </head>

  <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">




        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index.html" title="Sleek Dashboard">
                <img src="{{asset('pemko.png')}}" alt="" width="30px">
                <span class="brand-name text-truncate">Aplikasi Pengelolaan Kepemilikan Tanah</span>
              </a>
            </div>

            <!-- begin sidebar scrollbar -->
            <div class="" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub ">
                    <a class="sidenav-item-link" href="{{Route('admin.index')}}">
                      <i class="mdi mdi-home"></i>
                      <span class="nav-text">Beranda</span>
                    </a>
                  </li>
                <li class="has-sub ">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                    aria-expanded="false" aria-controls="dashboard">
                    <i class="mdi mdi-folder-outline"></i>
                    <span class="nav-text">Master Data</span> <b class="caret"></b>
                  </a>

                  <ul class="collapse " id="dashboard" data-parent="#sidebar-menu">
                    <div class="sub-menu">
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
                    <i class="mdi mdi-account-multiple"></i>
                    <span class="nav-text">User Aplikasi</span> <b class="caret"></b>
                  </a>

                  <ul class="collapse " id="users" data-parent="#sidebar-menu">
                    <div class="sub-menu">
                      <li class="">
                        <a class="sidenav-item-link" href="{{route('admin.user.index')}}">
                          <span class="nav-text">User Pegawai</span>
                        </a>
                      </li>
                      <li class="">
                        <a class="sidenav-item-link" href="{{route('admin.user.index')}}">
                          <span class="nav-text">User Pemohon</span>
                        </a>
                      </li>
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </aside>
        <div class="page-wrapper">
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <div class="search-form d-none d-lg-inline-block">
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="{{asset('admin//img/user/user.png')}}" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block">Abdus Salam</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-header">
                        <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          Abdus Salam <small class="pt-1">iamabdus@gmail.com</small>
                        </div>
                      </li>
                      <li>
                        <a href="user-profile.html">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-email"></i> Message
                        </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                      </li>
                      <li class="right-sidebar-in">
                        <a href="javascript:0"> <i class="mdi mdi-settings"></i> Setting </a>
                      </li>
                      <li class="dropdown-footer">
                        <a href="index.html"> <i class="mdi mdi-logout"></i> Log Out </a>
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
    <script src="{{asset('admin/plugins/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admin/plugins/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('admin/js/date-range.js')}}"></script>
    <script src="{{asset('admin/plugins/fullcalendar/core-4.3.1/main.min.js')}}"></script>
    <script src="{{asset('admin/plugins/fullcalendar/daygrid-4.3.0/main.min.js')}}"></script>
    <script src="{{asset('admin/js/app.calendar.js')}}"></script>
    <script src="{{asset('admin/js/sleek.js')}}"></script>
    <link href="{{asset('admin/options/optionswitch.css')}}" rel="stylesheet">
    <script src="{{asset('admin/options/optionswitcher.js')}}"></script>
    @yield('script')
</body>
</html>
