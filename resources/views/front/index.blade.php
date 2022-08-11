@extends('front.parent')

@section('content')
    <section class=" " data-bs-ride="carousel" data-bs-interval="  ">

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('front/assets/img/slider.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>.eeeeeeeeeeeeee..</h5>
                        <p>..xxxxxxxxxxx.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('front/assets/img/slider2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>.wwwwwwwwwwwwwww..</h5>
                        <p>..wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwxxxxxxxxxxxxxxxxxx.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('front/assets/img/blog/blog-3.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>..wwwwwwwwwwww.</h5>
                        <p>...xxxxxxxxxx</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section><!-- End Hero Section -->

    <main id="main">


        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-balloon-heart-fill icon"></i></div>
                            <h4><a href="" class="stretched-link">خدمة التوفيق</a></h4>
                            <p>تقدم الجمعية خدمة التوفيق بين الراغبين في الزواج </p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-card-checklist icon"></i></div>
                            <h4><a href="" class="stretched-link"> الاستشارات </a></h4>
                            <p>جمعية العفاف لديها قسم خاص بالاستشارات الاسرية واختيارات شريك الحياة </p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                            <h4><a href="" class="stretched-link">البرامج والدورات</a></h4>
                            <p>هنالك العديد من البرامج والدورات التي تقدمها جمعية العفاف</p>
                        </div>
                    </div><!-- End Service Item -->

                    <!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h1>من نحن</h1>
                    <h6>جمعية خيرية غير هادفة للربح، تعنى بالمساهمة مع الأسرة المسلمة في اختيار الزوجة أو الزوج الكفء
                        لأبنائهم وبناتهم، وفقاً للمعايير والشروط الشرعية.</h6>
                </div>

                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-5">
                        <div class="about-img">
                            <img src="{{ asset('front/assets/img/100.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <h4 class="pt-0 pt-lg-5">ما هي جمعية العفاف ؟ </h4>

                        <!-- Tabs -->
                        <ul class="nav nav-pills mb-3">
                            <li><a class="nav-link active  " data-bs-toggle="pill" href="#tab1"> الرؤية</a></li>
                            <li style=" margin-right: 20px; margin-left: 5%"><a class="nav-link " data-bs-toggle="pill"
                                    href="#tab2"> الرسالة</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">قيمنا وشعارنا</a></li>

                        </ul><!-- End Tabs -->

                        <!-- Tab Content -->
                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="tab1">



                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>رؤية جمعية العفاف</h4>
                                </div>
                                <p>الوجهة الآمنة و الموثوقة للراغبين في الزواج</p>




                            </div><!-- End Tab 1 Content -->

                            <div class="tab-pane fade show" id="tab2">



                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>رسالة جمعية العفاف</h4>
                                </div>
                                <p>نمنح النصح و الاستشارة الآمنة ، بسرية تامة حول اختيار الشريك الكفؤ من خلال المعايير
                                    الدقيقة و الضوابط الشرعية لتحقيق التوافق الامثل و الاستدامة الاسرية بين الطرفين </p>


                            </div><!-- End Tab 2 Content -->

                            <div class="tab-pane fade show" id="tab3">



                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>قيمنا</h4>
                                </div>
                                <p> المصداقية ، الامانة ، النزاهة ، الالتزام ، التميز و الاحترافية</p>

                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>شعارنا</h4>
                                </div>
                                <p>حيث الاختيار الآمن</p>



                            </div><!-- End Tab 3 Content -->

                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" >
                <div class="section-header">
                    <h2>أعضاء مجلس الادارة</h2>
                    <p>مجلس ادارة الجمعية</p>
                </div>
                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        

                        <div class="swiper-slide">
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="{{ asset('front/assets/img/odw4.jpeg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="member-info">

                                    <h4>الشيخ</h4>
                                    <h6>رئيس مجلس الادارة</h6>
                                </div>
                            </div>

                        </div>

                     

                    </div>
                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>أعضاء مجلس الادارة</h2>
                    <p>مجلس ادارة الجمعية</p>
                </div>

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('front/assets/img/odw4.jpeg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>الشيخ</h4>
                                <span>رئيس مجلس الادارة</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->


                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('front/assets/img/odw4.jpeg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>الشيخ</h4>
                                <span>رئيس مجلس الادارة</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('front/assets/img/odw4.jpeg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>الشيخ</h4>
                                <span>رئيس مجلس الادارة</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-header mb-3">
                    <h1>اللقاءات والدورات</h1>
                    <h6> البرامج والدورات التي تقدمها الجمعية </>
                </div>

                <div class="row gy-5 mt-4">

                    <div class="col-xl-4 col-mt-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item mt-2">
                            <div class="img">
                                <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-diagram-3-fill"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>دورة التطوع</h3>
                                </a>
                                <p> تقدم خدمة التطوع والارشاد</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6 mt-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-file-earmark-play-fill"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>دورة العمل الجماعي</h3>
                                </a>
                                <p>تساعد الشباب الجمعية على اكتساب مهارة العمل الجماعي </p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6 mt-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-heart-half"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>اختيار شريك الحياة</h3>
                                </a>
                                <p>تقدم خدمة اختيار شريك الحياة ومساعدة الشخص على الاختيار المناسب</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

 

                </div>

            </div>
        </section><!-- End Services Section -->


        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{ asset('front/assets/img/clientS.jpg') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('front/assets/img/clients/client-2.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('front/assets/img/clients/client-3.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('front/assets/img/clients/client-4.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('front/assets/img/clients/client-5.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('front/assets/img/clients/client-6.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('front/assets/img/clients/client-7.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('front/assets/img/clients/client-8.png') }}"
                                class="img-fluid" alt=""></div>
                    </div>
                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-out">

                <div class="row g-5">

                    <div
                        class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                        <h3>خدمة التوفيق</em> </h3>
                        <p> ابحث عن شريك العمر</p>
                        <a class="cta-btn align-self-start" href="#">قدم طلبك الأن</a>
                    </div>

                    <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                        <div class="img">
                            <img src="{{ asset('front/assets/img/cta.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= On Focus Section ======= -->
        <section id="onfocus" class="onfocus">
            <div class="container-fluid p-0" data-aos="fade-up">

                <div class="row g-0">
                    <div class="col-lg-6 video-play position-relative">
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                    </div>
                    <div class="col-lg-6">
                        <div class="content d-flex flex-column justify-content-center h-100">
                            <h3>التبرع للجمعية </h3>
                            <p class="fst-italic">
                                قال رسول الله : «مَا نَقَصَ مَالُ عَبْدٍ مِنْ صَدَقَة..»
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> الحسابات الخاصة بالجمعية</li>
                                <li><i class="bi bi-check-circle"></i> 000000000000455</li>
                                <li><i class="bi bi-check-circle"></i> 0752400000000000</li>
                            </ul>
                            <a href="#" class="read-more align-self-start"><span> تبرع الآن</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End On Focus Section -->




        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="testimonials-slider swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('front/assets/img/odw.png') }}" class="testimonial-img"
                                    alt="">
                                <h3>الشيخ القاضي/ عبدلله بن عبدالرحمن العثيم</h3>
                                <h4> رئيسا</h4>

                                <p>

                                    رئيس مجلس الادارة

                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('front/assets/img/odw2.png') }}" class="testimonial-img"
                                    alt="">
                                <h3>الشيخ د. محمد بن مجدوع الشهري</h3>
                                <h4>نائب الرئيس</h4>

                                <p>
                                    نائب رئيس مجلس الادارة
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('front/assets/img/odw3.png') }}" class="testimonial-img"
                                    alt="">
                                <h3>
                                    الأستاذ/ إبراهيم بن عبدالحميد الشيخ </h3>
                                <h4>المشرف المالي</h4>

                                <p>
                                    المشرف المالي
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('front/assets/img/odw4.jpeg') }}" class="testimonial-img"
                                    alt="">
                                <h3>م. رشيد عبدالله الدوسري</h3>
                                <h4>عضو مجلس الادارة </h4>

                                <p>
                                    عضو مجلس الادارة
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Pricing Section ======= -->

        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Pricing</h2>
                    <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam
                        voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pricing-item">

                            <div class="pricing-header">
                                <h3>Free Plan</h3>
                                <h4><sup>$</sup>0<span> / month</span></h4>
                            </div>

                            <ul>
                                <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
                                <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
                                <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</span></li>
                                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span>
                                </li>
                                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span>
                                </li>
                            </ul>

                            <div class="text-center mt-auto">
                                <a href="#" class="buy-btn">Buy Now</a>
                            </div>

                        </div>
                    </div>End Pricing Item -->
                    <!--
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="pricing-item featured">

                    <div class="pricing-header">
                        <h3>Business Plan</h3>
                        <h4><sup>$</sup>29<span> / month</span></h4>
                    </div>

                    <ul>
                        <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
                        <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
                        <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</spa>
                        </li>
                        <li><i class="bi bi-dot"></i> <span>Pharetra massa massa ultricies</spa>
                        </li>
                        <li><i class="bi bi-dot"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                    </ul>

                    <div class="text-center mt-auto">
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>

                    </div>
                </div>End Pricing Item -->

                    <!-- <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
                    <div class="pricing-item">

                    <div class="pricing-header">
                        <h3>Developer Plan</h3>
                        <h4><sup>$</sup>49<span> / month</span></h4>
                    </div>

                    <ul>
                        <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
                        <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
                        <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</span></li>
                        <li><i class="bi bi-dot"></i> <span>Pharetra massa massa ultricies</span></li>
                        <li><i class="bi bi-dot"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                    </ul>

                    <div class="text-center mt-auto">
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>

                    </div>
                </div>
                End Pricing Item -->

                    <!-- </div>

            </div>
        </section>



        <!-- ======= F.A.Q Section ======= -->
                    <section id="faq" class="faq">
                        <div class="container-fluid" data-aos="fade-up">

                            <div class="row gy-4">

                                <div
                                    class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                                    <div class="content px-xl-5">
                                        <h3> <strong>الأنظمة الادارية والسياسات</strong></h3>
                                        <p>
                                            لوائح السياسات والانظمة الخاصة بالجمعية
                                        </p>
                                    </div>

                                    <div class="accordion accordion-flush px-xl-5" id="faqlist">

                                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                                            <h3 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                                    <i class="bi bi-question-circle question-icon"></i>
                                                    قوائم الإداريين في جمعية العفاف
                                                </button>
                                            </h3>
                                            <div id="faq-content-1" class="accordion-collapse collapse"
                                                data-bs-parent="#faqlist">
                                                <div class="accordion-body">
                                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat
                                                    lacus
                                                    laoreet non curabitur gravida. Venenatis lectus magna fringilla urna
                                                    porttitor
                                                    rhoncus dolor purus non.
                                                </div>
                                            </div>
                                        </div><!-- # Faq item-->

                                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                                            <h3 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                                    <i class="bi bi-question-circle question-icon"></i>
                                                    اللائحة الأساسية والأهداف في جمعية العفاف
                                                </button>
                                            </h3>
                                            <div id="faq-content-2" class="accordion-collapse collapse"
                                                data-bs-parent="#faqlist">
                                                <div class="accordion-body">
                                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi.
                                                    Id
                                                    interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                                    scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper
                                                    dignissim.
                                                    Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                                </div>
                                            </div>
                                        </div><!-- # Faq item-->

                                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                                            <h3 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                                    <i class="bi bi-question-circle question-icon"></i>
                                                    التقارير الإدارية والمالية في جمعية العفاف
                                                </button>
                                            </h3>
                                            <div id="faq-content-3" class="accordion-collapse collapse"
                                                data-bs-parent="#faqlist">
                                                <div class="accordion-body">
                                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis
                                                    orci.
                                                    Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit
                                                    amet nisl
                                                    suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis
                                                    convallis
                                                    convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi
                                                    quis
                                                </div>
                                            </div>
                                        </div><!-- # Faq item-->

                                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                                            <h3 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                                                    <i class="bi bi-question-circle question-icon"></i>
                                                    السياسات واللوائح في جمعية العفاف
                                                </button>
                                            </h3>
                                            <div id="faq-content-4" class="accordion-collapse collapse"
                                                data-bs-parent="#faqlist">
                                                <div class="accordion-body">
                                                    <i class="bi bi-question-circle question-icon"></i>
                                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi.
                                                    Id
                                                    interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                                    scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper
                                                    dignissim.
                                                    Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                                </div>
                                            </div>
                                        </div><!-- # Faq item-->

                                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                                            <h3 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                                                    <i class="bi bi-question-circle question-icon"></i>
                                                    السياسات واللوائح في جمعية قمم الشبابية
                                                </button>
                                            </h3>
                                            <div id="faq-content-5" class="accordion-collapse collapse"
                                                data-bs-parent="#faqlist">
                                                <div class="accordion-body">
                                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim
                                                    suspendisse in est ante in. Nunc vel risus commodo viverra maecenas
                                                    accumsan.
                                                    Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis
                                                    blandit
                                                    turpis cursus in
                                                </div>
                                            </div>
                                        </div><!-- # Faq item-->

                                    </div>

                                </div>

                                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                                    style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
                            </div>

                        </div>
                    </section><!-- End F.A.Q Section -->






                    <!-- ======= Contact Section ======= -->
                    <section id="contact" class="contact">
                        <div class="container">

                            <div class="section-header">
                                <h2>اتصل بنا</h2>
                                <p>تواصل معنا</p>
                            </div>

                        </div>

                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                frameborder="0" allowfullscreen></iframe>
                        </div><!-- End Google Maps -->

                        <div class="container">

                            <div class="row gy-5 gx-lg-5">

                                <div class="col-lg-4">

                                    <div class="info">
                                        <h3>Get in touch</h3>
                                        <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad
                                            mollitia
                                            commodi minus.</p>

                                        <div class="info-item d-flex">
                                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                                            <div>
                                                <h4>الموقع:</h4>
                                                <p>A108 Adam Street, New York, NY 535022</p>
                                            </div>
                                        </div><!-- End Info Item -->

                                        <div class="info-item d-flex">
                                            <i class="bi bi-envelope flex-shrink-0"></i>
                                            <div>
                                                <h4>الايميل:</h4>
                                                <p>info@example.com</p>
                                            </div>
                                        </div><!-- End Info Item -->

                                        <div class="info-item d-flex">
                                            <i class="bi bi-phone flex-shrink-0"></i>
                                            <div>
                                                <h4>رقم الجوال:</h4>
                                                <p>+1 5589 55488 55</p>
                                            </div>
                                        </div><!-- End Info Item -->

                                    </div>

                                </div>

                                <div class="col-lg-8">
                                    <form action="forms/contact.php" method="post" role="form"
                                        class="php-email-form">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <input type="text" name="name" class="form-control" id="name"
                                                    placeholder="Your Name" required>
                                            </div>
                                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Your Email" required>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="text" class="form-control" name="subject" id="subject"
                                                placeholder="Subject" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                                        </div>
                                        <div class="my-3">
                                            <div class="loading">Loading</div>
                                            <div class="error-message"></div>
                                            <div class="sent-message">Your message has been sent. Thank you!</div>
                                        </div>
                                        <div class="text-center"><button type="submit">Send Message</button></div>
                                    </form>
                                </div><!-- End Contact Form -->

                            </div>

                        </div>
                    </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
