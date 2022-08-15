@extends('front.parent')

@section('content')

<section class="meetings_details system" style="margin:0">
    <div class="overlay">
        <div class="container">

            <h3 style="font-size:60px">الاْنظمة الاْدارية والسياسية</h3>


        </div>
    </div>
</section>

<section class="meetings_boxes">
    <div class="container">


        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        قوائم الإداريين في جمعية قمم الشبابية
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>اْعضاء مجلس الاْداره</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>اْعضاء الجمعية العمومية</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>قائمة بلجان الجمعية</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>بيانات التواصل مع المدير التنفيذي</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!------------------------ 2 ------------------------>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        اللائحة الأساسية والأهداف في جمعية قمم الشبابية
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>اللائحة الأساسية للجمعية</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>الأهداف التشغيلية</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>الأهداف الإستراتيجية</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>إقرار بعدم وجود إستثمار أو تملك</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!------------------------ 3 ------------------------>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                        التقارير الإدارية والمالية في جمعية قمم الشبابية
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>تقرير البرامج التوعوية للعاملين في الجمعية</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>تقرير البرامج التوعوية لأعضاء مجلس الإدارة</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>التقرير السنوي لأنشطة وبرامج الجمعية</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>تقرير المراجع والقوائم المالية</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!------------------------ 4 ------------------------>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                        السياسات واللوائح في جمعية قمم الشبابية
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>اْعضاء مجلس الاْداره</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>اْعضاء الجمعية العمومية</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>قائمة بلجان الجمعية</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>بيانات التواصل مع المدير التنفيذي</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!------------------------ 5 ------------------------>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                        السياسات واللوائح في جمعية قمم الشبابية
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>سياسة الإبلاغ عن المخالفات وحماية مقدمي البلاغ</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>سياسة خصوصية البيانات والإفصاح عنها</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>سياسة تنظيم العلاقة مع المستفيدين</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>سياسة الإحتفاض بالوثائق وإتلافها</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>سياسة تعارض المصالح</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>سياسة جمع التبرعات</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="manager-box">
                                    <div class="image">
                                        <img src="{{ asset('front/assets/img/adminstrative.jpg') }}" alt="">
                                    </div>
                                    <h4>إستمارة قياس رضى المستفيدين في جمعية قمم الشبابية</h4>
                                    <a href="" class="main-button" style="margin:auto;height:40px">
                                        <span><i class="fa fa-download fa-fw"></i> تنزيل الملف</span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection