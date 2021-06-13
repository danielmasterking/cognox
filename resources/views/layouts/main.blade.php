{{-- <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Coinlayer</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/one-page-wonder.min.css') }}" rel="stylesheet">

  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Coinlayer</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('documentation') }}">Documentation</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Log In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('seccion')
  

  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; Daniel Mercado 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Cryptos - Cryptocurrency &amp; Mining Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style_template.css') }}">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="top-header-content h-100 d-flex align-items-center justify-content-between">
                            <!-- Top Headline -->
                            <div class="top-headline">
                                <p>Welcome to <span>Cryptos</span></p>
                            </div>
                            <!-- Top Login & Faq & Earn Monery btn -->
                            <div class="login-faq-earn-money">
                                <a href="{{ route('login') }}">Login | Register</a>
                                <a href="#">FAQ</a>
                                <a href="#" class="active">Earn Money</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="cryptos-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="cryptosNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="{{ route('documentation') }}">Documentation</a></li>
                                    {{-- <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="blog.html">Articles</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                            <li><a href="#">Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><a href="about-us.html">About Us</a></li>
                                                    <li><a href="blog.html">Articles</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                    <li><a href="elements.html">Elements</a></li>
                                                    <li><a href="#">Dropdown</a>
                                                        <ul class="dropdown">
                                                            <li><a href="index.html">Home</a></li>
                                                            <li><a href="about-us.html">About Us</a></li>
                                                            <li><a href="blog.html">Articles</a></li>
                                                            <li><a href="contact.html">Contact</a></li>
                                                            <li><a href="elements.html">Elements</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">- Home</a></li>
                                                <li><a href="#">- About us</a></li>
                                                <li><a href="#">- Services</a></li>
                                                <li><a href="#">- Testimonials</a></li>
                                                <li><a href="#">- News</a></li>
                                                <li><a href="#">- About us</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">- Contact</a></li>
                                                <li><a href="#">- Faq</a></li>
                                                <li><a href="#">- Terms &amp; Conditions</a></li>
                                                <li><a href="#">- Careers</a></li>
                                                <li><a href="#">- Newsletter &amp; Exchange</a></li>
                                                <li><a href="#">- Terms &amp; Conditions</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">- About us</a></li>
                                                <li><a href="#">- Testimonials</a></li>
                                                <li><a href="#">- Contact</a></li>
                                                <li><a href="#">- Terms &amp; Conditions</a></li>
                                                <li><a href="#">- Newsletter &amp; Exchange</a></li>
                                                <li><a href="#">- Contact</a></li>
                                            </ul>
                                            <div class="single-mega cn-col-4">
                                                <div class="megamenu-slides owl-carousel">
                                                    <img src="img/bg-img/bg-1.jpg" alt="">
                                                    <img src="img/bg-img/bg-1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#">Currencies</a></li>
                                    <li><a href="contact.html">Contact</a></li> --}}
                                </ul>

                                <!-- Newsletter Form -->
                                <div class="header-newsletter-form">
                                    <form action="#" method="post">
                                        <input type="email" name="email" id="email" placeholder="Newsletter">
                                        <button type="submit">Subscribe</button>
                                    </form>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    @yield('seccion')
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area section-padding-100-0 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-1.jpg);">
            <div class="container">
                <div class="row">

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                            </div>
                            <p>Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis. Ut in iaculis enim, et pulvinar mauris. Etiam tristique magna eget velit consectetur, a tincidunt velit dictum.</p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Recent Posts</h6>
                            </div>
                            <!-- Single Blog Post -->
                            <div class="single--blog-post">
                                <a href="#">
                                    <p>Aliquam ac eleifend metus</p>
                                </a>
                                <span>March 10, 2018</span>
                            </div>
                            <!-- Single Blog Post -->
                            <div class="single--blog-post">
                                <a href="#">
                                    <p>Donec in libero sit amet mi vulputate</p>
                                </a>
                                <span>March 10, 2018</span>
                            </div>
                            <!-- Single Blog Post -->
                            <div class="single--blog-post">
                                <a href="#">
                                    <p>Aliquam ac eleifend metus</p>
                                </a>
                                <span>March 10, 2018</span>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Quick Links</h6>
                            </div>
                            <nav>
                                <ul class="useful-links d-flex justify-content-between flex-wrap">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Faq</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Newsletter &amp; Exchange</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Exchange</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('js/active.js') }}"></script>
</body>

</html>