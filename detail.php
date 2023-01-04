<?php session_start(); include 'koneksi.php'; ?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />

    <!--====== Title ======-->
    <title>Homepage</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--====== Favicon Icon ======-->
    <link
      rel="shortcut icon"
      href="assets/images/favicon.png"
      type="image/png"
    />

    <!--====== CSS Files LinkUp ======-->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/lineIcons.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>

  <body style="background-color: #3160e0;">
    <!--[if IE]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!--====== PRELOADER PART START ======-->
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->
    <header class="header-area">
      <div class="navbar-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.php">
                  <img src="assets/images/logo/logo.svg" alt="Logo" />
                </a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="toggler-icon"> </span>
                  <span class="toggler-icon"> </span>
                  <span class="toggler-icon"> </span>
                </button>

                <div
                  class="collapse navbar-collapse sub-menu-bar"
                  id="navbarSupportedContent"
                >
                  <ul id="nav" class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="active" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="" href="pesananku.php">Pesanan</a>
                    </li>
                  </ul>
                </div>
                <!-- navbar collapse -->

                <div class="navbar-btn d-none d-sm-inline-block">
<?php if (!isset($_SESSION['uname'])) { ?>
                  <a class="main-btn" data-scroll-nav="0" href="login.php" rel="nofollow">Login</a>
<?php }else{ ?>
                  <a class="main-btn" data-scroll-nav="0" href="logout.php" rel="nofollow">Logout</a>
                  <a href="#" class="text-light m-4"><?php echo $_SESSION['uname']; ?></a>
<?php } ?>                  
                </div>
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->

      <div
        id="home"
        class="header-hero bg_cover"
        style=""
      >
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              
              <!-- header hero content -->
            </div>
          </div>

          <div class="row mt-70">
            <div class="col-6">
              <div class="subscribe-content mt-45">
                <img src="images/ml.webp">
                <h4 class="mt-2">
                  Mobile Legends
                </h4>
                <small class="main-btn">Pembayaran yang Aman</small>

                <p class="m-1 mt-3"><span>Harga sudah termasuk PPN</span></p>
                <p class="m-1 mt-3"><span>Top up Apex Legends Mobile Syndicate Gold Pack hanya dalam hitungan detik!</span></p>
                <p class="m-1 mt-3"><span>Cukup masukan ID Apex Legends Mobile Anda, pilih top up Apex Legends Mobile yang Anda inginkan, selesaikan pembayaran, dan top up akan secara langsung ditambahkan ke akun Apex Legends Mobile Anda.</span></p>
                <p class="m-1 mt-3"><span>Bayarlah menggunakan Codacash, QRIS, GoPay, OVO, DANA, Bank Transfer, Telkomsel, Indosat, Tri, XL, Smartfren, ShopeePay, LinkAja, Kredivo, Alfamart, Indomaret, DOKU, dan kartu kredit. Tanpa perlu registrasi ataupun log-in.</span></p>
              </div>
            </div>

            <div class="col-6">
                <div class="subscribe-form mt-50">
                <div class="card">
                  <form action="#">
                  <input type="text" placeholder="Enter Email" />
                  <button class="main-btn">Subscribe</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- row -->
          <div class="subscribe-area wow fadeIn mt-120" data-wow-duration="1s" data-wow-delay="0.5s">
          
          <div class="row">
            <div class="col-lg-6">
              
            </div>
            <div class="col-lg-6">
              
            </div>
          </div>
          
        </div>
          <!-- row -->

        </div>
        <!-- container -->
        <div id="particles-1" class="particles"></div>
      </div>
      <!-- header hero -->
    </header>
    <!--====== HEADER PART ENDS ======-->

    
   

   

    <!--====== FOOTER PART START ======-->
    <footer id="footer" class="footer-area pt-120">
      <div class="container">
        
        <!-- subscribe area -->
        <div class="footer-widget pb-100">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8">
              <div
                class="footer-about mt-50 wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.2s"
              >
                <a class="logo" href="javascript:void(0)">
                  <img src="assets/images/logo/logo.svg" alt="logo" />
                </a>
                <p class="text">
                  Lorem ipsum dolor sit amet consetetur sadipscing elitr,
                  sederfs diam nonumy eirmod tempor invidunt ut labore et dolore
                  magna aliquyam.
                </p>
                <ul class="social">
                  <li>
                    <a href="javascript:void(0)">
                      <i class="lni lni-facebook-filled"> </i>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <i class="lni lni-twitter-filled"> </i>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <i class="lni lni-instagram-filled"> </i>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <i class="lni lni-linkedin-original"> </i>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- footer about -->
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12">
              <div class="footer-link d-flex mt-50 justify-content-sm-between">
                <div
                  class="link-wrapper wow fadeIn"
                  data-wow-duration="1s"
                  data-wow-delay="0.4s"
                >
                  <div class="footer-title">
                    <h4 class="title">Quick Link</h4>
                  </div>
                  <ul class="link">
                    <li><a href="javascript:void(0)">Road Map</a></li>
                    <li><a href="javascript:void(0)">Privacy Policy</a></li>
                    <li><a href="javascript:void(0)">Refund Policy</a></li>
                    <li><a href="javascript:void(0)">Terms of Service</a></li>
                    <li><a href="javascript:void(0)">Pricing</a></li>
                  </ul>
                </div>
                <!-- footer wrapper -->
                <div
                  class="link-wrapper wow fadeIn"
                  data-wow-duration="1s"
                  data-wow-delay="0.6s"
                >
                  <div class="footer-title">
                    <h4 class="title">Resources</h4>
                  </div>
                  <ul class="link">
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li><a href="javascript:void(0)">Page</a></li>
                    <li><a href="javascript:void(0)">Portfolio</a></li>
                    <li><a href="javascript:void(0)">Blog</a></li>
                    <li><a href="javascript:void(0)">Contact</a></li>
                  </ul>
                </div>
                <!-- footer wrapper -->
              </div>
              <!-- footer link -->
            </div>
            <div class="col-lg-3 col-md-5 col-sm-12">
              <div
                class="footer-contact mt-50 wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.8s"
              >
                <div class="footer-title">
                  <h4 class="title">Contact Us</h4>
                </div>
                <ul class="contact">
                  <li>+809272561823</li>
                  <li>info@gmail.com</li>
                  <li>www.yourweb.com</li>
                  <li>
                    123 Stree New York City , United <br />
                    States Of America 750.
                  </li>
                </ul>
              </div>
              <!-- footer contact -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- footer widget -->
        <div class="footer-copyright">
          <div class="row">
            <div class="col-lg-12">
              <div class="copyright d-sm-flex justify-content-between">
                <div class="copyright-content">
                  <p class="text">
                    Designed and Developed by
                    <a href="https://uideck.com" rel="nofollow">UIdeck</a>
                  </p>
                </div>
                <!-- copyright content -->
              </div>
              <!-- copyright -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- footer copyright -->
      </div>
      <!-- container -->
      <div id="particles-2"></div>
    </footer>
    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->
    <a href="#" class="back-to-top"> <i class="lni lni-chevron-up"> </i> </a>
    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== Javascript Files ======-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/particles.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
