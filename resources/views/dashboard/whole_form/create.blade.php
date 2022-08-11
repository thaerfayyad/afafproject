@extends('layout.main')
@section('title', 'نموذج التقييم الشامل')
@section('css')
@section('content')

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">

            <form class="form d-flex flex-column flex-lg-row">
                <!--begin::Aside column-->


                <!--end::Aside column-->
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin:::Tabs-->

                    <!--end:::Tabs-->
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>تفاصيل دراسة الحالة</h2>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="case_manager_name_id_fk" class="form-label required"> اسم مدير
                                                    الحالة</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    id="case_manager_name_id_fk" name="case_manager_name_id_fk"
                                                    value="احمد محمد" disabled>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="case_code" class="form-label required">رمز الحالة</label>
                                                <input type="text" class="form-control form-control-solid" id="case_code"
                                                    name="case_code" value="احمد محمد" disabled>

                                            </div>

                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="evaluation_initial_start_date" class="form-label required">تاريخ
                                                    اكمال دراسة الحالة المبدئي</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    value="04/04/2022" disabled name="evaluation_initial_start_date"
                                                    id="evaluation_initial_start_date">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="risk_level_cd" class="form-label">مستوى الخطر</label>

                                                <select class="form-select form-control form-control-solid"
                                                    aria-label="Default select example" id="risk_level_cd"
                                                    name="risk_level_cd">

                                                    <option value="AE" disabled>مستوى 1 </option>
                                                    <option value="AE" selected>مستوى 2 </option>
                                                    <option value="GB" disabled> مستوى 3 </option>
                                                    <option value="GB" disabled>مستوى 4</option>

                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="evaluation_comp_start_date" class="form-label required">تاريخ
                                                    بدء دراسة الحالة </label>
                                                <input type="text" class="form-control form-control-solid"
                                                    value="04/04/2022" disabled name="evaluation_comp_start_date"
                                                    id="evaluation_comp_start_date">

                                            </div>
                                        </div>

                                    </div>


                                </div>
                                <!--end::General options-->


                            </div>
                        </div>


                    </div>
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2> تفاصيل المقابلات</h2>
                                        </div>
                                    </div>
                                    <!--begin::Repeater-->
                                    <div id="kt_docs_repeater_basic">
                                        <!--begin::Form group-->
                                        <div class="form-group p-12">
                                            <div data-repeater-list="kt_docs_repeater_basic">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="person_interviewed" class="form-label required">
                                                                الشخص الذي تمت مقابلته</label>
                                                            <input type="text" class="form-control form-control-solid"
                                                                name="person_interviewed" id="person_interviewed">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="connection_type_cd" class="form-label required">نوع
                                                                الاتصال</label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example" id="connection_type_cd"
                                                                name="connection_type_cd">
                                                                <option value="AE" selected> أختار</option>
                                                                <option value="AE"> مؤسسة</option>
                                                                <option value="GB"> فرد من العائلة</option>
                                                                <option value="GB">المدرسة</option>

                                                            </select>

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="date" class="form-label required">التاريخ</label>
                                                            <input type="date" class="form-control form-control-solid"
                                                                name="date" id="date">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="place" class="form-label required"> المكان</label>
                                                            <input type="text" class="form-control form-control-solid"
                                                                name="place" id="place">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="communication_way_cd"
                                                                class="form-label required">طريقه التواصل</label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example"
                                                                id="communication_way_cd" name="communication_way_cd">
                                                                <option value="AE" selected> أختار</option>

                                                                <option value="AE"> تليفون</option>
                                                                <option value="GB"> زيارة منزلية</option>
                                                                <option value="GB">إجتماع </option>

                                                            </select>

                                                        </div>

                                                    </div>


                                                </div>

                                                <div data-repeater-item>

                                                    <div class="container">
                                                        <div class="row text-start">
                                                            <div class="col-md-12 d-flex justify-content-end mt-6">
                                                                <a href="javascript:;" data-repeater-delete
                                                                    class="btn btn-sm btn-danger  ">
                                                                    <i class="la"></i>Remove
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="person_interviewed" class="form-label required">
                                                                    الشخص الذي تمت مقابلته</label>
                                                                <input type="text" class="form-control form-control-solid"
                                                                    name="person_interviewed" id="person_interviewed">

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="connection_type_cd"
                                                                    class="form-label required">نوع الاتصال</label>

                                                                <select class="form-select form-control form-control-solid"
                                                                    aria-label="Default select example"
                                                                    id="connection_type_cd" name="connection_type_cd">
                                                                    <option value="AE" selected> أختار</option>
                                                                    <option value="AE"> مؤسسة</option>
                                                                    <option value="GB"> فرد من العائلة</option>
                                                                    <option value="GB">المدرسة</option>

                                                                </select>

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="date"
                                                                    class="form-label required">التاريخ</label>
                                                                <input type="date" class="form-control form-control-solid"
                                                                    name="date" id="date">

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="place" class="form-label required">
                                                                    المكان</label>
                                                                <input type="text" class="form-control form-control-solid"
                                                                    name="place" id="place">

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="communication_way_cd"
                                                                    class="form-label required">طريقه التواصل</label>

                                                                <select class="form-select form-control form-control-solid"
                                                                    aria-label="Default select example"
                                                                    id="communication_way_cd" name="communication_way_cd">
                                                                    <option value="AE" selected> أختار</option>

                                                                    <option value="AE"> تليفون</option>
                                                                    <option value="GB"> زيارة منزلية</option>
                                                                    <option value="GB">إجتماع </option>

                                                                </select>

                                                            </div>

                                                        </div>


                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Form group-->

                                        <!--begin::Form group-->
                                        <div class="form-group mt-2 p-12 " style="float: left;">
                                            <a href="javascript:;" data-repeater-create class="btn btn-primary">
                                                <i class="la la-plus"></i>أضافة
                                            </a>
                                        </div>
                                        <!--end::Form group-->
                                    </div>
                                    <!--end::Repeater-->
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="other_children_at_risk_cd" class="form-label required">هل يوجد
                                                    أطفال أخرون معرضون للخطر</label>

                                                <select class="form-select form-control form-control-solid"
                                                    aria-label="Default select example" id="other_children_at_risk_cd"
                                                    name="other_children_at_risk_cd">
                                                    <option value="AE" selected> أختار</option>
                                                    <option value="AE"> نعم</option>
                                                    <option value="GB">لا</option>

                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="existing_protective_factors" class="form-label required">عوامل
                                                    حماية موجودة</label>
                                                <textarea class="form-control form-control-solid" id="existing_protective_factors" name="existing_protective_factors"
                                                    rows="4" cols="50"></textarea>

                                            </div>


                                        </div>


                                    </div>


                                </div>
                                <!--end::General options-->


                            </div>
                        </div>


                    </div>
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>ملخص بحالة الطفل </h2>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="immediate_action_summary" class="form-label required">ملخص
                                                    الاجراءات الفورية </label>
                                                <textarea class="form-control form-control-solid" id="immediate_action_summary" name="immediate_action_summary" rows="4"
                                                    cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="changes_since_the_initial_evaluation_cd"
                                                    class="form-label required">هل حدثت تغييرات منذ التقييم المبدئي
                                                    ؟</label>

                                                <select class="form-select form-control form-control-solid"
                                                    aria-label="Default select example"
                                                    name="changes_since_the_initial_evaluation_cd"
                                                    id="changes_since_the_initial_evaluation_cd">
                                                    <option value="AE" selected> أختار</option>
                                                    <option value="AE"> نعم</option>
                                                    <option value="GB">لا</option>

                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="living_arrangements_situation_description"
                                                    class="form-label required">وصف ترتيبات المعيشة الحالة</label>
                                                <textarea class="form-control form-control-solid" id="living_arrangements_situation_description"
                                                    name="living_arrangements_situation_description" rows="4"
                                                    cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="child_activities_description" class="form-label required">وصف
                                                    أنشطة الطفل (المدرسة, اللعب, العمل)</label>
                                                <textarea class="form-control form-control-solid" id="child_activities_description" name="child_activities_description"
                                                    rows="4" cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="child_development_and_health" class="form-label required">تطور
                                                    الطفل والحالة الصحية </label>
                                                <textarea class="form-control form-control-solid" id="child_development_and_health" name="child_development_and_health"
                                                    rows="4" cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="basic_needs_of_child_and_family"
                                                    class="form-label required">وصف إحتياجات الطفل والعائلة الأساسية
                                                </label>
                                                <textarea class="form-control form-control-solid" id="basic_needs_of_child_and_family"
                                                    name="basic_needs_of_child_and_family" rows="4"
                                                    cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="hardness_factors_of_child" class="form-label required"> وصف
                                                    عوامل الصلادة لدى الطفل</label>
                                                <textarea class="form-control form-control-solid" id="hardness_factors_of_child" name="hardness_factors_of_child"
                                                    rows="4" cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="ragility_factors_for_child_and_family"
                                                    class="form-label required">عوامل الهشاشة للطفل والعائلة </label>
                                                <textarea class="form-control form-control-solid" id="ragility_factors_for_child_and_family"
                                                    name="ragility_factors_for_child_and_family" rows="4"
                                                    cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="education_description" class="form-label required"> وصف
                                                    التعليم</label>
                                                <textarea class="form-control form-control-solid" id="education_description" name="education_description" rows="4"
                                                    cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="psychological_wellbeing_description"
                                                    class="form-label required"> وصف الرفاهية النفسية</label>
                                                <textarea class="form-control form-control-solid" id="psychological_wellbeing_description"
                                                    name="psychological_wellbeing_description" rows="4"
                                                    cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="parental_ability_description" class="form-label required"> وصف
                                                    قدرة الوالدين</label>
                                                <textarea class="form-control form-control-solid" id="parental_ability_description" name="parental_ability_description"
                                                    rows="4" cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="extended_family_involvement_social_networking_description"
                                                    class="form-label required"> وصف مشاركة العائلة الممتدة وشبكة العلاقات
                                                    الاجتماعية</label>
                                                <textarea class="form-control form-control-solid" id="extended_family_involvement_social_networking_description"
                                                    name="extended_family_involvement_social_networking_description"
                                                    rows="4" cols="50"></textarea>

                                            </div>

                                        </div>

                                    </div>


                                </div>
                                <!--end::General options-->


                            </div>
                        </div>


                    </div>
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>وجهات نظر الطفل والعائلة</h2>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="child_perspectives" class="form-label required">وجهة نظر
                                                    الطفل</label>
                                                <textarea class="form-control form-control-solid" id="child_perspectives" name="child_perspectives" rows="4"
                                                    cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="family_perspectives" class="form-label required">وجهة نظر
                                                    العائلة</label>
                                                <textarea class="form-control form-control-solid" id="family_perspectives" name="family_perspectives" rows="4"
                                                    cols="50"></textarea>

                                            </div>

                                        </div>

                                    </div>


                                </div>
                                <!--end::General options-->


                            </div>
                        </div>


                    </div>
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>الملاحظات</h2>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="professional_notes" class="form-label required">الملاحظات
                                                    المهنية (آراء المهنيين ذوي العلاقة)</label>
                                                <textarea class="form-control form-control-solid" id="professional_notes" name="professional_notes" rows="4"
                                                    cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="case_worker_notes" class="form-label required">ملاحظات العامل
                                                    بالحالة</label>
                                                <textarea class="form-control form-control-solid" id="case_worker_notes" name="case_worker_notes" rows="4"
                                                    cols="50"></textarea>

                                            </div>

                                        </div>

                                    </div>


                                </div>
                                <!--end::General options-->


                            </div>
                        </div>


                    </div>
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2> لتحليل والخطوات القادمة</h2>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="damage_and_protective_factors"
                                                    class="form-label required">عوامل الضرر و الحماية</label>
                                                <textarea class="form-control form-control-solid" id="damage_and_protective_factors"
                                                    name="damage_and_protective_factors" rows="4" cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="is_child_safe_cd" class="form-label required">هل الطفل آمن؟
                                                </label></label>

                                                <select class="form-select form-control form-control-solid"
                                                    aria-label="Default select example" name="is_child_safe_cd"
                                                    id="is_child_safe_cd">
                                                    <option value="AE" selected> أختار</option>
                                                    <option value="AE"> نعم</option>
                                                    <option value="GB">لا</option>

                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="safety_plan_details" class="form-label required">تفاصيل خطة
                                                    الأمان</label>
                                                <textarea class="form-control form-control-solid" id="safety_plan_details" name="safety_plan_details" rows="4"
                                                    cols="50"></textarea>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="protection_needs_cd " class="form-label required">احتياجات
                                                    الحماية</label></label>

                                                <select class="form-select form-control form-control-solid"
                                                    aria-label="Default select example" name="protection_needs_cd "
                                                    id="protection_needs_cd ">
                                                    <option value="AE" selected> أختار</option>
                                                    <option value="AE"> 1</option>
                                                    <option value="GB">2</option>
                                                    <option value="GB">3</option>

                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="risk_level" class="form-label">مستوى الخطر</label>

                                                <select class="form-select form-control form-control-solid"
                                                    aria-label="Default select example" id="risk_level" name="risk_level">

                                                    <option value="AE" disabled>مستوى 1 </option>
                                                    <option value="AE" selected>مستوى 2 </option>
                                                    <option value="GB" disabled> مستوى 3 </option>
                                                    <option value="GB" disabled>مستوى 4</option>

                                                </select>

                                            </div>

                                        </div>

                                    </div>


                                </div>
                                <!--end::General options-->


                            </div>
                        </div>


                    </div>
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>الاجراءات الموصى بها من عامل الحالة</h2>
                                        </div>
                                    </div>
                                    <!--begin::Repeater-->
                                    <div id="kt_docs_repeater_basic_two">
                                        <!--begin::Form group-->
                                        <div class="form-group p-12">
                                            <div data-repeater-list="kt_docs_repeater_basic_two">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="procedure"
                                                                class="form-label required">الإجراء</label>
                                                            <input type="text" class="form-control form-control-solid"
                                                                name="procedure" id="procedure ">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="why" class="form-label required">لماذا</label>
                                                            <input type="text" class="form-control form-control-solid"
                                                                name="why" id="why">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="due_date" class="form-label required">تاريخ
                                                                الاستحقاق</label>
                                                            <input type="date" class="form-control form-control-solid"
                                                                name="due_date" id="due_date">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="responsibility"
                                                                class="form-label required">المسؤولية</label>
                                                            <input type="text" class="form-control form-control-solid"
                                                                name="responsibility" id="responsibility">

                                                        </div>
                                                    </div>


                                                </div>

                                                <div data-repeater-item>

                                                    <div class="container">
                                                        <div class="row text-start">
                                                            <div class="col-md-12 d-flex justify-content-end mt-6">
                                                                <a href="javascript:;" data-repeater-delete
                                                                    class="btn btn-sm btn-danger  ">
                                                                    <i class="la"></i>Remove
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="procedure"
                                                                    class="form-label required">الإجراء</label>
                                                                <input type="text" class="form-control form-control-solid"
                                                                    name="procedure" id="procedure ">

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="why" class="form-label required">لماذا</label>
                                                                <input type="text" class="form-control form-control-solid"
                                                                    name="why" id="why">

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="due_date" class="form-label required">تاريخ
                                                                    الاستحقاق</label>
                                                                <input type="date" class="form-control form-control-solid"
                                                                    name="due_date" id="due_date">

                                                            </div>
                                                            <div class="col-md-4 col-sm-12 mt-8">

                                                                <label for="responsibility"
                                                                    class="form-label required">المسؤولية</label>
                                                                <input type="text" class="form-control form-control-solid"
                                                                    name="responsibility" id="responsibility">

                                                            </div>
                                                        </div>




                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Form group-->

                                        <!--begin::Form group-->
                                        <div class="form-group mt-2 p-12 " style="float: left;">
                                            <a href="javascript:;" data-repeater-create class="btn btn-primary">
                                                <i class="la la-plus"></i>أضافة
                                            </a>
                                        </div>
                                        <!--end::Form group-->
                                    </div>
                                    <!--end::Repeater-->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="case_plan_meeting_date" class="form-label required">تاريخ
                                                    اجتماع خطة الحالة </label>
                                                <input type="date" class="form-control form-control-solid"
                                                    name="case_plan_meeting_date" id="case_plan_meeting_date">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="date_agree_child_family_cd" class="form-label">الاتفاق مع
                                                    التاريخ مع الطفل/العائلة </label>

                                                <select class="form-control form-control-solid"
                                                    aria-label="Default select example" id="date_agree_child_family_cd"
                                                    name="date_agree_child_family_cd">

                                                    <option value="AE" selected>أختار</option>
                                                    <option value="AE">نعم</option>
                                                    <option value="AE">لا</option>


                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="participants" class="form-label required">المشارك </label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="participants" id="participants">

                                            </div>

                                        </div>


                                    </div>



                                </div>
                                <!--end::General options-->


                            </div>
                        </div>


                    </div>
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-10">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>تم تعبئة النموذج</h2>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="evaluation_initial_end_date" class="form-label required"> اريخ
                                                    انتهاء التقييم</label>
                                                <input type="date" class="form-control form-control-solid"
                                                    name="evaluation_initial_end_date" id="evaluation_initial_end_date">

                                            </div>

                                        </div>

                                    </div>


                                </div>
                                <!--end::General options-->


                            </div>
                        </div>


                    </div>



                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="../../demo1/dist/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-light me-5">الغاء</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">حفظ</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->


@endsection
@section('js')
    <script src="{{ asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script>
        $('#kt_docs_repeater_basic').repeater({
            initEmpty: true,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function() {
                $(this).slideDown();
            },

            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });
    </script>
    <script>
        $('#kt_docs_repeater_basic_two').repeater({
            initEmpty: true,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function() {
                $(this).slideDown();
            },

            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });
    </script>
    <script>
        $('#kt_docs_repeater_basic_three').repeater({
            initEmpty: true,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function() {
                $(this).slideDown();
            },

            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });
    </script>



@stop
