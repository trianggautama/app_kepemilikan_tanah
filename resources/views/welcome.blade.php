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
          <a href="/" class="navbar-brand"><img src="{{asset('ATR.png')}}" alt="" style="max-width:40px;"> <small>BPN Kota Banjarbaru</small></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav ml-auto w-100 justify-content-right clearfix">
            <li class="nav-item active">
              <a class="nav-link" href="#hero-area">
                Halaman Depan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">
                Jenis Bangunan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#feature">
                Alur Pelayanan
              </a>
            </li>
          </ul>
          <div class="btn-sing float-right">
            <a class="btn btn-border" href="{{Route('auth.login')}}">Login / Register</a>
          </div>
        </div>
      </div>

      <!-- Mobile Menu Start -->
      <ul class="mobile-menu navbar-nav">
        <li>
          <a class="page-scroll" href="#hero-area">
            Halaman Depan
          </a>
        </li>
        <li>
          <a class="page-scroll" href="#services">
            Jenis Bangunan
          </a>
        </li>
        <li>
          <a class="page-scroll" href="#feature">
            Alur Pelayanan
          </a>
        </li>
        <li>
          <a class="page-scroll" href="#contact">
            <a class="btn btn-border" href="{{Route('auth.login')}}">Login / Register</a>
          </a>
        </li>
      </ul>
      <!-- Mobile Menu End -->

    </nav>
    <!-- Navbar End -->

    <!-- Hero Area Start -->
    <div id="hero-area" class="hero-area-bg">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="contents text-center">
              <h2 class="head-title wow fadeInUp">Aplikasi Layanan Pendaftaran dan pengarsipan sertifikat berbasis web
                pada BPN Kota Banjarbaru</h2>
              <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                <a href="{{Route('auth.login')}}" class="btn btn-common">Login / Register</a>
              </div>
            </div>
            <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
              <img class="img-fluid" src="{{asset('hero.png')}}" alt="" width="80%">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero Area End -->

  </header>
  <!-- Header Area wrapper End -->

  <!-- Services Section Start -->
  <section id="services" class="section-padding mt-2">
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Jenis Bangunan</h2>
      </div>
      <div class="row">
        <!-- Services item -->
        <div class="col-md-6 col-lg-4 col-xs-12">
          <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
            <div class="icon">
              <i class="lni-cog"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">Web   </a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae
                quaerat quia incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-4 col-xs-12">
          <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
            <div class="icon">
              <i class="lni-bar-chart"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">Graphic Design</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae
                quaerat quia incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-4 col-xs-12">
          <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
            <div class="icon">
              <i class="lni-briefcase"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">Business Branding</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae
                quaerat quia incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-4 col-xs-12">
          <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
            <div class="icon">
              <i class="lni-pencil-alt"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">Content Writing</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae
                quaerat quia incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-4 col-xs-12">
          <div class="services-item wow fadeInRight" data-wow-delay="1.5s">
            <div class="icon">
              <i class="lni-mobile"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">App Development</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae
                quaerat quia incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-4 col-xs-12">
          <div class="services-item wow fadeInRight" data-wow-delay="1.8s">
            <div class="icon">
              <i class="lni-layers"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">Digital Marketing</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae
                quaerat quia incidunt laborum aspernatur...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Services Section End -->


  <!-- Feature Section Start -->
  <div id="feature">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="text-wrapper">
            <div>
              <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s">Alur Perizinan</h2>
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="features-box wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="features-icon">
                      <i class="lni-layers"></i>
                    </div>
                    <div class="features-content">
                      <h4>
                        Bootstrap 4
                      </h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam tempora quidem vel sint.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="features-box wow fadeInLeft" data-wow-delay="0.6s">
                    <div class="features-icon">
                      <i class="lni-briefcase"></i>
                    </div>
                    <div class="features-content">
                      <h4>
                        100% Free
                      </h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam tempora quidem vel sint.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="features-box wow fadeInLeft" data-wow-delay="0.9s">
                    <div class="features-icon">
                      <i class="lni-cog"></i>
                    </div>
                    <div class="features-content">
                      <h4>
                        Responsive
                      </h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam tempora quidem vel sint.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="features-box wow fadeInLeft" data-wow-delay="1.2s">
                    <div class="features-icon">
                      <i class="lni-leaf"></i>
                    </div>
                    <div class="features-content">
                      <h4>
                        Easy to Use
                      </h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam tempora quidem vel sint.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 padding-none">
          <div class="feature-thumb wow fadeInRight" data-wow-delay="0.3s">
            <img src="{{asset('depan//img/feature/img-1.jpg')}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Feature Section End -->

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