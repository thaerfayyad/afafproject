<!DOCTYPE html>
<html lang="ar" direction="rtl", dir="rtl">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>جمعية العفاف للتوفيق بين الراغبين في الزواج</title>
    <meta content="قال رسول الله(صلى الله عليه وسلم) : ما بني بناء في الاسلام أحب الى الله من التزويج" name="description">
    <meta content="" name="keywords">
    <meta property="og:site_name" content="جمعية العفاف  للتوفيق بين الراغبين في الزواج " />
    <meta property="og:title" content=" جمعية العفاف  للتوفيق بين الراغبين في الزواج" />
    <meta property="og:description"
        content="قال رسول الله(صلى الله عليه وسلم) : ما بني بناء في الاسلام أحب الى الله من التزويج " />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="جمعية العفاف  للتوفيق بين الراغبين في الزواج " />

    <meta property="og:image" content="{{ asset('front/assets/img/logo.png') }}" />



    <!-- Favicons -->
    <link href="{{ asset('front/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('front/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="{{ asset('front/assets/css/variables.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('front/assets/css/variables-blue.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('front/assets/css/variables-green.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('front/assets/css/variables-orange.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('front/assets/css/variables-purple.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('front/assets/css/variables-red.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('front/assets/css/variables-pink.css') }}" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="{{ asset('front/assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: HeroBiz - v2.2.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="{{ asset('front/assets/img/logo.png') }}" alt=""> -->
                <h1><span><img src="{{ asset('front/assets/img/logo.png') }}"></span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>



                    <li><a class="nav-link scrollto" href="{{  url('') }}">الصفحة الرئيسية</a></li>
                    <li><a class="nav-link scrollto" href="index.html#services">من نحن</a></li>
                    <li class="dropdown"><a href="#"><span>الاجتماعت والشراكات</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="{{ route('team') }}">مجلس الادارة</a></li>
                            <li><a href="index-2.html" class="active">شركاء الجمعية</a></li>
                            <li><a href="{{ route('association') }}">الجمعية العمومية</a></li>
                            <li><a href="{{ route('adminsrations') }}">الأنظمة الادارية والسياسات</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="index.html#portfolio">المتجر الالكتروني</a></li>
                    <li class="dropdown"><a href="#"><span>البرامج</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="#">اللقاءات والدورات </a></li>
                            <li><a href="#">الاستشارات </a></li>

                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="index.html#team">استبيان وقياس</a></li>
                    <li><a href="blog.html">المركز الاعلامي</a></li>


                    <li><a class="nav-link scrollto" href="index.html#contact">اتصل بنا</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->



        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->





    <!-- ======= hero Section ======= -->




    <!-- End Hero Section -->
  @yield('content')


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>HeroBiz</h3>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="footer-legal text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>HeroBiz</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>

            </div>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/php-email-form/validate.j') }}s"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('front/assets/js/main.js') }}"></script>

</body>

</html>