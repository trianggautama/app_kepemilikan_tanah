<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Aplikasi Kepemilikan Tanah</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('depan/css/bootstrap.min.css')}}">
  <!-- Icon -->
  <link rel="stylesheet" type="text/css" href="{{asset('depan/fonts/line-icons.css')}}">
  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="{{asset('depan/css/slicknav.css')}}">
  <!-- Owl carousel -->
  <link rel="stylesheet" type="text/css" href="{{asset('depan/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('depan/css/owl.theme.css')}}">
  <!-- Slick Slider -->
  <link rel="stylesheet" type="text/css" href="{{asset('depan/css/slick.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('depan/css/slick-theme.css')}}">
  <!-- Animate -->
  <link rel="stylesheet" type="text/css" href="{{asset('depan/css/animate.css')}}">
  <!-- Main Style -->
  <link rel="stylesheet" type="text/css" href="{{asset('depan/css/main.css')}}">
  <!-- Responsive Style -->
  <link rel="stylesheet" type="text/css" href="{{asset('depan/css/responsive.css')}}">

</head>

<body>

  <!-- Header Area wrapper Starts -->
  <header id="header-wrap">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"
            aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="icon-menu"></span>
            <span class="icon-menu"></span>
            <span class="icon-menu"></span>
          </button>
          <a href="/" class="navbar-brand"><img src="{{asset('ATR.png')}}" alt="" style="max-width:40px;"> <small>BPN
              Kota Banjarbaru</small></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav mr-auto w-100 justify-content-left clearfix">
            <li class="nav-item active">
              <a class="nav-link" href="#hero-area">
                Halaman Depan
              </a>
            </li>
          </ul>
          <div class="btn-sing float-right">
            <a class="btn btn-border" href="{{Route('auth.login')}}">Login</a>
          </div>
        </div>
      </div>

      <!-- Mobile Menu Start -->
      <ul class="mobile-menu navbar-nav">
        <li>
          <a class="btn btn-border" href="{{Route('auth.login')}}">Login</a>
        </li>
        <li>
          <a class="page-scroll" href="#contact">
            Kembali
          </a>
        </li>
      </ul>
      <!-- Mobile Menu End -->

    </nav>
    <!-- Navbar End -->

  </header>
  <!-- Header Area wrapper End -->
  <!-- Subscribe Section Start -->
  <section id="Subscribes" class="subscribes section-padding" style="padding-top:150px;padding-bottom:150px;">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-10 col-lg-5">
          <h4 class="wow fadeInUp" data-wow-delay="0.3s">Pendaftaran Pemohon</h4>
          <br>
          <form action="{{route('auth.storeRegister')}}" method="POST">
            @csrf
            <div class="subscribe wow fadeInDown" data-wow-delay="0.3s">
              <input type="text" class="form-control" name="nama" placeholder="Nama" required>
            </div>
            <div class="subscribe wow fadeInDown" data-wow-delay="0.3s">
              <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required>
            </div>
            <div class="subscribe wow fadeInDown" data-wow-delay="0.3s">
              <input type="date" class="form-control" name="tanggal_lahir" placeholder="Username" required>
            </div>
            <div class="subscribe wow fadeInDown" data-wow-delay="0.3s">
              <select name="jenis_kelamin" id="" class="form-control" style="height: 50px;" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
              {{-- <input type="text" class="form-control" name="jenis_kelamin" placeholder="Username" required> --}}
            </div>
            <div class="subscribe wow fadeInDown" data-wow-delay="0.3s">
              <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
            </div>
            <div class="subscribe wow fadeInDown" data-wow-delay="0.3s">
              <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="subscribe wow fadeInDown" data-wow-delay="0.3s">
              <input type="password" class="form-control" name="password" placeholder="Password" required>
              <a href="{{route('welcome')}}" class="btn btn-secondary"><i class="fa fa-arrow-right"></i>Kembali</a>
              <button type="submit" class="btn btn-primary"><i class="fa fa-arrow-right"></i>Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Subscribe Section End -->

  <!-- Footer Section Start -->
  <footer id="footer" class="footer-area section-padding">
    <div class="container">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
            <div class="footer-logo mb-3">
              <img src="assets/img/logo.png" alt="">
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam excepturi quasi, ipsam voluptatem.</p>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
            <h3 class="footer-titel">Company</h3>
            <ul>
              <li><a href="#">Press Releases</a></li>
              <li><a href="#">Mission</a></li>
              <li><a href="#">Strategy</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
            <h3 class="footer-titel">About</h3>
            <ul>
              <li><a href="#">Career</a></li>
              <li><a href="#">Team</a></li>
              <li><a href="#">Clients</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.8s">
            <h3 class="footer-titel">Find us on</h3>
            <div class="social-icon">
              <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
              <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
              <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
              <a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->

  <section id="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Copyright © 2018 UIdeck All Right Reserved</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Go to Top Link -->
  <a href="#" class="back-to-top">
    <i class="lni-arrow-up"></i>
  </a>

  <!-- Preloader -->
  <div id="preloader">
    <div class="loader" id="loader-1"></div>
  </div>
  <!-- End Preloader -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{asset('depan/js/jquery-min.js')}}"></script>
  <script src="{{asset('depan/js/popper.min.js')}}"></script>
  <script src="{{asset('depan/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('depan/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('depan/js/slick.min.js')}}"></script>
  <script src="{{asset('depan/js/wow.js')}}"></script>
  <script src="{{asset('depan/js/jquery.nav.js')}}"></script>
  <script src="{{asset('depan/js/scrolling-nav.js')}}"></script>
  <script src="{{asset('depan/js/jquery.easing.min.js')}}"></script>
  <script src="{{asset('depan/js/jquery.slicknav.js')}}"></script>
  <script src="{{asset('depan/js/main.js')}}"></script>
  <script src="{{asset('depan/js/form-validator.min.js')}}"></script>
  <script src="{{asset('depan/js/contact-form-script.min.js')}}"></script>
  <script src="{{asset('depan/js/map.js')}}"></script>
  <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM">
  </script>

</body>

</html>