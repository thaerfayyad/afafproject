@extends('layout.main')
@section('title', ' نموذج نقل حالة ')
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
                                        <h2> نموذج  الإحالة</h2>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="case_code" class="form-label required">رمز الحالة</label>
                                            <input type="text" class="form-control form-control-solid" id="case_code"
                                                name="case_code" value="1020302010" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="governorate" class="form-label required"> المحافظة  </label>
                                            <input type="text" class="form-control form-control-solid" id="governorate"
                                                name="governorate" value="خانيونس" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="city" class="form-label required"> المدينة  </label>
                                            <input type="text" class="form-control form-control-solid" id="city"
                                                name="city" value="البلد" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="area" class="form-label required"> الحي  </label>
                                            <input type="text" class="form-control form-control-solid" id="area"
                                                name="area" value="جلال" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="transfer_case_reason_cd" class="form-label required"> سبب نقل الحالة  </label>

                                            <select class="form-select form-control form-control-solid"
                                                aria-label="Default select example" id="transfer_case_reason_cd"
                                                name="transfer_case_reason_cd">
                                                <option value="AE" selected> أختار</option>
                                                <option value="AE">الطفل-الأسرة تنتقل لمكان جديد</option>
                                                <option value="GB">      نقص في قدرات المؤسسة</option>
                                                <option value="GB">تغير في مستوى الخطورة الحالة</option>
                                                <option value="GB"> أخرى</option>


                                            </select>

                                        </div>

                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="address" class="form-label required">العنوان</label>
                                            <input type="text" class="form-control form-control-solid" id="address"
                                                name="address"  >

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="telephone_number" class="form-label required">رقم التيليفون الأرضي </label>
                                            <input type="number" class="form-control form-control-solid" id="telephone_number"
                                                name="telephone_number"  >

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="phone_number" class="form-label required"> رقم الجوال </label>
                                            <input type="number" class="form-control form-control-solid" id="phone_number"
                                                name="phone_number"  >

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="others" class="form-label required">أخرى</label>
                                            <textarea class="form-control form-control-solid" id="others" name="others" rows="4" cols="50"></textarea>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="time_frame_for_case_transfer_cd" class="form-label required"> الإطار الزمني لنقل الحالة </label>

                                            <select class="form-select form-control form-control-solid"
                                                aria-label="Default select example" id="time_frame_for_case_transfer_cd"
                                                name="time_frame_for_case_transfer_cd">
                                                <option value="AE" selected> أختار</option>
                                                 <option value="GB">مستوى الخطورة الأول </option>
                                                <option value="GB"> مستوى الخطورة الثاني </option>
                                                <option value="GB"> مستوى الخطورة الثالث </option>


                                            </select>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="agreement_cd" class="form-label required">  الموافقة </label>

                                            <select class="form-select form-control form-control-solid"
                                                aria-label="Default select example" id="agreement_cd"
                                                name="agreement_cd">
                                                <option value="AE" selected> أختار</option>
                                                 <option value="GB">نعم</option>
                                                <option value="GB">لا</option>

                                            </select>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="phone_action_taken_cd" class="form-label required">  تم أخذ الإجراء الهاتفي </label>

                                            <select class="form-select form-control form-control-solid"
                                                aria-label="Default select example" id="phone_action_taken_cd"
                                                name="phone_action_taken_cd">
                                                <option value="AE" selected> أختار</option>
                                                 <option value="GB">نعم</option>
                                                <option value="GB">لا</option>

                                            </select>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="aforementioned_reason" class="form-label required">سبب ما ذكر سابقاً</label>
                                            <textarea class="form-control form-control-solid" id="aforementioned_reason" name="aforementioned_reason" rows="4" cols="50"></textarea>

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
                                        <h2> تفاصيل المؤسسة المستقبلة للحالة</h2>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">

                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="contact" class="form-label required">  جهة الاتصال </label>
                                            <input type="number" class="form-control form-control-solid" id="contact"
                                                name="contact" >

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="organization_address" class="form-label required">عنوان المؤسسة</label>
                                            <input type="text" class="form-control form-control-solid" id="organization_address"
                                                name="organization_address" >

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="contact_name" class="form-label required">  اسم جهة الاتصال </label>
                                            <input type="text" class="form-control form-control-solid" id="contact_name"
                                                name="contact_name" >

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="contact_number" class="form-label required">رقم التواصل</label>
                                            <input type="number" class="form-control form-control-solid" id="contact_number"
                                                name="contact_number" >

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
                                        <h2>تفاصيل المؤسسة المحولة للحالة 	</h2>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">

                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="contact_two" class="form-label required">  جهة الاتصال </label>
                                            <input type="text" class="form-control form-control-solid" id="contact_two"
                                                name="contact_two"  value="xxx" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="organization_address" class="form-label required">عنوان المؤسسة </label>
                                            <input type="text" class="form-control form-control-solid" id="organization_address "
                                                name="organization_address" value="xx" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="contact_name" class="form-label required">اسم جهة الاتصال</label>
                                            <input type="text" class="form-control form-control-solid" id="contact_name"
                                                name="contact_name" >

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="contact_number" class="form-label required"> رقم التواصل   </label>
                                            <input type="number" class="form-control form-control-solid" id="contact_number"
                                                name="contact_number" >

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="transfer_request_date" class="form-label required">تاريخ طلب النقل</label>
                                            <input type="date" class="form-control form-control-solid" id="transfer_request_date"
                                                name="transfer_request_date" >

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="transfer_meeting_date" class="form-label required"> تاريخ اجتماع النقل </label>
                                            <input type="date" class="form-control form-control-solid" id="transfer_meeting_date"
                                                name="transfer_meeting_date" >

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="date_of_transfer_of_responsibility_for_case_management" class="form-label required">  تاريخ نقل مسؤولية إدارة الحالة </label>
                                            <input type="date" class="form-control form-control-solid" id="date_of_transfer_of_responsibility_for_case_management"
                                                name="date_of_transfer_of_responsibility_for_case_management" >

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="arrangement_details" class="form-label required">تفاصيل الترتيبات</label>
                                            <textarea class="form-control form-control-solid" id="arrangement_details" name="arrangement_details" rows="4" cols="50"></textarea>

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
                                        <h2> محتويات ملف الحالة المحول</h2>
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

                                                        <label for="document_name" class="form-label required"> اسم الوثيقة</label>
                                                        <input type="text" class="form-control form-control-solid" name="document_name" id="document_name">

                                                    </div>
                                                    <div class="col-md-4 col-sm-12 mt-8">

                                                        <label for="document_type_cd " class="form-label required">  نوع الوثيقة  </label>

                                                        <select class="form-select form-control form-control-solid"
                                                            aria-label="Default select example" id="document_type_cd " name="document_type_cd ">
                                                            <option value="AE" selected> أختار</option>
                                                            <option value="AE"  > أصلية </option>
                                                            <option value="GB"  > غير أصلية</option>


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

                                                            <label for="document_name" class="form-label required"> اسم الوثيقة</label>
                                                            <input type="text" class="form-control form-control-solid" name="document_name" id="document_name">

                                                        </div>
                                                        <div class="col-md-4 col-sm-12 mt-8">

                                                            <label for="document_type_cd " class="form-label required">  نوع الوثيقة  </label>

                                                            <select class="form-select form-control form-control-solid"
                                                                aria-label="Default select example" id="document_type_cd " name="document_type_cd ">
                                                                <option value="AE" selected> أختار</option>
                                                                <option value="AE"  > أصلية </option>
                                                                <option value="GB"  > غير أصلية</option>


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
                                        <h2> اعتماد مدير الحالة</h2>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="case_manager_name" class="form-label required">    اسم مدير الحالة  </label>
                                            <input type="number" class="form-control form-control-solid" id="case_manager_name"
                                                name="case_manager_name"  value="محمد احمد" disabled>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="approval_cd" class="form-label required"> الإعتماد   </label>

                                            <select class="form-select form-control form-control-solid"
                                                aria-label="Default select example" id="approval_cd"
                                                name="approval_cd">
                                                <option value="AE" selected> أختار</option>
                                                <option value="AE">    معتمد  </option>
                                                <option value="GB">غير معتمد </option>

                                            </select>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="approval_date" class="form-label required">     تاريخ الاعتماد </label>
                                            <input type="date" class="form-control form-control-solid" id="approval_date"
                                                name="approval_date"  >

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
                                        <h2>اعتماد المشرف</h2>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="supervisor_name" class="form-label required">اسم المشرف</label>
                                            <input type="text" class="form-control form-control-solid" id="supervisor_name"
                                                name="supervisor_name" >

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="approval_cd_two" class="form-label required"> الإعتماد   </label>

                                            <select class="form-select form-control form-control-solid"
                                                aria-label="Default select example" id="approval_cd_two"
                                                name="approval_cd_two">
                                                <option value="AE" selected> أختار</option>
                                                <option value="AE">    معتمد  </option>
                                                <option value="GB">غير معتمد </option>

                                            </select>

                                        </div>
                                        <div class="col-md-4 col-sm-12 mt-8">

                                            <label for="approval_date_two" class="form-label required">     تاريخ الاعتماد </label>
                                            <input type="date" class="form-control form-control-solid" id="approval_date_two"
                                                name="approval_date_two"   >

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
