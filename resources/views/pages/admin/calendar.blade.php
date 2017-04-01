@extends('app')


@section('page_title','ระบบบริหารจัดการโปรเจ็ค')
@section('page_name1','ผู้ดูแลระบบ')
@section('page_name2','ปฏิทินกิจกรรม')
@section('nav-menu')
    @include ('pages.admin.nav-menu')
@endsection

@section('custom_js_css')

    <script type="text/javascript" src="{{ URL::asset('assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/plugins/ui/fullcalendar/fullcalendar.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/pages/extra_fullcalendar.js')}}"></script>

    <script type="text/javascript" src="{{ URL::asset('assets/js/core/libraries/jquery_ui/interactions.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/core/libraries/jquery_ui/widgets.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/pages/jqueryui_forms.js') }}"></script>



@endsection


@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">ปฏิทินกิจกรรม</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <div class="fullcalendar-basic" style="margin-bottom: 20px"></div>
                <button type="button" class="btn btn-success btn-xlg legitRipple" data-toggle="modal" data-target="#modal_create_activity"><i class="fa fa-plus-square"></i> เพิ่มกิจกรรม</button>
                <div id="modal_create_activity" class="modal fade">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h5 class="modal-title">เพิ่มกิจกรรม</h5>
                            </div>

                            <form action="#" class="form-horizontal">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">วันที่</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control datepicker" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3">ชื่อกิจกรรม</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3">รายละเอียด</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3">ผู้ที่เกี่ยวข้อง</label>
                                        <div class="col-sm-9">
                                            <label class="checkbox-inline">
                                                <input type="checkbox">
                                                นักศึกษา
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">
                                                อาจารย์ที่ปรึกษา
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">
                                                คณะกรรมการหลักสูตร
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">
                                                อื่นๆ
                                            </label>

                                        </div>
                                    </div>


                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link" data-dismiss="modal">ยกเลิก</button>
                                    <button type="submit" class="btn btn-primary">เพิ่ม</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /main content -->
@endsection