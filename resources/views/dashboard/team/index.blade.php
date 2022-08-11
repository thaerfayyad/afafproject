@extends('layout.main')
@section('title', 'اجتماعات مجلس الادارة في جمعية قمم الشبابية')
@section('css')
@section('content')


    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->

                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table id="kt_datatable_example_5"
                            class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                            <thead>
                                <tr class="fw-bolder fs-6 text-gray-800 px-7">
                                    <th> الرقم # </th>
                                    <th>الصورة</th>
                                    <th>الاسم</th>
                                    <th>المسمى الوظيفي</th>
                                    <th>نوع العضو</th>
                                    <th>أنشئ بتاريخ</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($datas as  $data)
                                    <tr>
                                        <td> {{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ $data->image_path }}" alt=""  width="150px">
                                        </td>


                                        <td>{{$data ->name }}</td>
                                        <td>{{$data ->position }}</td>
                                        <td>{{$data ->team }}</td>
                                        <td>{{ $data->created_at->diffForHumans()}}</td>

                                    </tr>
                                @empty
                                    <h6> no data fount</h6>
                                @endforelse


                            </tbody>
                        </table>

                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>

            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>

@endsection


@section('js')
    <script src="{{ asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>

    <script>
        {{--  $("#kt_datatable_example_5").DataTable({
            "language": {
                "lengthMenu": "Show _MENU_",
            },
            "dom": "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
        });  --}}
    </script>


@stop
