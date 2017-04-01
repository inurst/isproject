@extends('app')


@section('page_title','ระบบบริหารจัดการโปรเจ็ค')
@section('page_name1','นักศึกษา')
@section('page_name2','ข้อมูลส่วนตัว')
@section('nav-menu')
    @include ('pages.student.nav-menu')
@endsection

@section('custom_js_css')
    <script type="text/javascript" src="{{ URL::asset('assets/js/core/libraries/jquery_ui/interactions.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/core/libraries/jquery_ui/widgets.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/pages/jqueryui_forms.js') }}"></script>
@endsection

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <div class="col-lg-3">
            <div class="thumbnail">
                <div class="thumb thumb-rounded thumb-slide">
                    <img src="{{ URL::asset('assets/images/placeholder.jpg') }}" alt="">

                </div>

                <div class="caption text-center">
                    <h6 class="text-semibold no-margin">Hanna Dorman <small class="display-block">Programmer</small></h6>
                </div>
            </div>

        </div>
        <div class="col-lg-9">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">ข้อมูลส่วนตัว<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>

                </div>

                <div class="panel-body">
                    <div class="table-responsive" style="margin-bottom: 20px">
                        <table class="table table-bordered table-framed">
                            <tbody>
                            <tr>
                                <td width="30%"><b>ชื่อ-นามสกุล</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>เบอร์โทร</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>อีเมล์</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>ปีที่เข้าการศึกษา</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>อาจารย์ที่ปรึกษา</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>หัวข้อการค้นคว้าแบบอิสระ</b></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <button type="button" class="btn btn-primary btn-xs legitRipple" data-toggle="modal" data-target="#modal_edit_profile"><i class="fa fa-edit"></i> แก้ไขข้อมูลส่วนตัว</button>
                    <div id="modal_edit_profile" class="modal fade">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h5 class="modal-title">แก้ไขข้อมูลส่วนตัว</h5>
                                </div>

                                <form action="#" class="form-horizontal">
                                    <div class="modal-body">


                                        <div class="form-group">
                                            <label class="control-label col-sm-3">ชื่อ-นามสกุล</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">เบอร์โทร</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">อีเมล์</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">อาจารย์ที่ปรึกษา</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">หัวข้อการค้นคว้าแบบอิสระ</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>



                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-link" data-dismiss="modal">ยกเลิก</button>
                                        <button type="submit" class="btn btn-primary">บันทึก</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- /main content -->
@endsection