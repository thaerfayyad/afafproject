
@extends('front.parent')


@section('content')
 <section id="hero-fullscreen" class="hero-fullscreen d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center position-relative" data-aos="zoom-out">
      <h2>محاضر إجتماعات الجمعية العمومية</span></h2>
      <p> اهلا وسهلا .</p>
 
    </div>
  </section>

<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container" data-aos="fade-up">

    <ul class="nav nav-tabs row gy-4 d-flex">

      <li class="nav-item col-6 col-md-4 col-lg-2">
        <a class="nav-link   show" data-bs-toggle="tab" data-bs-target="#tab-1">
          <i class="bi bi-download color-cyan"></i>
          <h4>الاجتماع الاول </h4>
          <button class="btn btn-info mt-2">تنزيل</button>
        </a>
      </li><!-- End Tab 1 Nav -->

      <li class="nav-item col-6 col-md-4 col-lg-2">
        <a class="nav-link   show" data-bs-toggle="tab" data-bs-target="#tab-1">
          <i class="bi bi-download color-cyan"></i>
          <h4>الاجتماع التاني </h4>
          <button class="btn btn-info mt-2">تنزيل</button>
        </a>
      </li><!-- End Tab 1 Nav -->

      <li class="nav-item col-6 col-md-4 col-lg-2">
        <a class="nav-link   show" data-bs-toggle="tab" data-bs-target="#tab-1">
          <i class="bi bi-download color-cyan"></i>
          <h4>الاجتماع التالت </h4>
          <button class="btn btn-info mt-2">تنزيل</button>
        </a>
      </li><!-- End Tab 1 Nav -->
    </ul>


  </div>
</section><!-- End Features Section -->

@endsection
