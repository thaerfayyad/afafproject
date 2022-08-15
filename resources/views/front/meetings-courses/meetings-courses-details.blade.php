@extends('front.parent')

@section('content')

<section class="meetings_details" style="margin:0">
    <div class="overlay">
        <div class="container">

            <h3 style="font-size:60px">البرامج والدورات</h3>


        </div>
    </div>
</section>

<section class="meetings_boxes">
    <div class="container">

        <form action="">
            <div class="search-box">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""><b>عنوان الدورة</b></label>
                            <input type="text" name="course_name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""><b>التصنيف</b></label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="" style="font-weight:bold">-اْختر-</option>
                                <option value="">اْرشيف الدورات</option>
                                <option value="">اْونلاين</option>
                                <option value="">حضورية</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-danger">بحث</button>
                    </div>
                </div>
            </div>
            <div class="courses-box">
                
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-sm-12">
                        <div class="course-box">
                            <div class="image">
                                <img src="{{ asset('front/assets/img/1912.i109.028_meeting_room_isometric_set-05.jpg') }}" alt="">
                            </div>
                            <h4>عنوان الكورس</h4>
                            <p>نبذه مختصره عن الكورس نبذه مختصره عن الكورس نبذه مختصره عن الكورس نبذه مختصره عن الكورس</p>
                            <a href="{{ route('course.details') }}" class="main-button">
                                <span>تفاصيل الدورة</span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-12">
                        <div class="course-box">
                            <div class="image">
                                <img src="{{ asset('front/assets/img/1912.i109.028_meeting_room_isometric_set-05.jpg') }}" alt="">
                            </div>
                            <h4>عنوان الكورس</h4>
                            <p>نبذه مختصره عن الكورس نبذه مختصره عن الكورس نبذه مختصره عن الكورس نبذه مختصره عن الكورس</p>
                            <a href="{{ route('course.details') }}" class="main-button">
                                <span>تفاصيل الدورة</span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-12">
                        <div class="course-box">
                            <div class="image">
                                <img src="{{ asset('front/assets/img/1912.i109.028_meeting_room_isometric_set-05.jpg') }}" alt="">
                            </div>
                            <h4>عنوان الكورس</h4>
                            <p>نبذه مختصره عن الكورس نبذه مختصره عن الكورس نبذه مختصره عن الكورس نبذه مختصره عن الكورس</p>
                            <a href="{{ route('course.details') }}" class="main-button">
                                <span>تفاصيل الدورة</span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-12">
                        <div class="course-box">
                            <div class="image">
                                <img src="{{ asset('front/assets/img/1912.i109.028_meeting_room_isometric_set-05.jpg') }}" alt="">
                            </div>
                            <h4>عنوان الكورس</h4>
                            <p>نبذه مختصره عن الكورس نبذه مختصره عن الكورس نبذه مختصره عن الكورس نبذه مختصره عن الكورس</p>
                            <a href="{{ route('course.details') }}" class="main-button">
                                <span>تفاصيل الدورة</span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-12">
                        <div class="course-box">
                            <div class="image">
                                <img src="{{ asset('front/assets/img/1912.i109.028_meeting_room_isometric_set-05.jpg') }}" alt="">
                            </div>
                            <h4>عنوان الكورس</h4>
                            <p>نبذه مختصره عن الكورس نبذه مختصره عن الكورس نبذه مختصره عن الكورس نبذه مختصره عن الكورس</p>
                            <a href="{{ route('course.details') }}" class="main-button">
                                <span>تفاصيل الدورة</span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-12">
                        <div class="course-box">
                            <div class="image">
                                <img src="{{ asset('front/assets/img/1912.i109.028_meeting_room_isometric_set-05.jpg') }}" alt="">
                            </div>
                            <h4>عنوان الكورس</h4>
                            <p>نبذه مختصره عن الكورس نبذه مختصره عن الكورس نبذه مختصره عن الكورس نبذه مختصره عن الكورس</p>
                            <a href="{{ route('course.details') }}" class="main-button">
                                <span>تفاصيل الدورة</span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </form>


    </div>
</section>

@endsection