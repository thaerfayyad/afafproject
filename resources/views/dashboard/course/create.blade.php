@extends('layout.main')
@section('title', '' )
@section('css')
@section('content')

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">

            <form class="form d-flex flex-column flex-lg-row" id="create-form">
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
                                            <h2>اضافة    دورة جديدة </h2>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="name" class="form-label required"> الاسم  </label>
                                                <input type="text" class="form-control form-control-solid" id="title"
                                                    name="title">

                                            </div>


                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="image" class="form-label required"> صورة</label>
                                                <input type="file" class="form-control form-control-solid" id="image"
                                                    name="image">

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="team" class="form-label required">نوع الدورة</label>

                                                <select class="form-select form-control form-control-solid"
                                                    aria-label="Default select example" id="type" name="type">
                                                    <option value="0"  selected>أختار </option>
                                                    <option value="online"  >اونلاين</option>
                                                    <option value="onSite"  > وجاهي </option>
                                                </select>

                                            </div>
                                            <div class="col-md-4 col-sm-12 mt-8">

                                                <label for="name" class="form-label required"> الوصف  </label>
                                                 <textarea name="descriptions" cols="30" rows="5" class="form-control form-control-solid"></textarea>

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


                        <button type="button" onclick="store()" class="btn btn-primary">
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

    <script>
        function store() {
            let formData = new FormData($('#create-form')[0]);
            axios.post('/dashboard/courses', formData, {
            }).then(function (response) {
                console.log(response);
                toastr.success(response.data.message);
                document.getElementById('create-form').reset();
                // window.location.href = '/dashboard/settings/';
            }).catch(function (error) {

                let messages = '';
                if(typeof  error.response.data.message == 'string'){
                    toastr.error(error.response.data.message);
                }else{
                    for (const [key, value] of Object.entries(error.response.data.message)) {
                        messages+='-'+value+'</br>';
                    }
                    toastr.error(messages);
                }

            });

        }

    </script>


@stop
