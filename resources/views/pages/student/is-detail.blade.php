@extends('app')


@section('page_title','ระบบบริหารจัดการโปรเจ็ค')
@section('page_name1','นักศึกษา')
@section('page_name2','การค้นคว้าแบบอิสระ')
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
        <div class="col-lg-12">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">ข้อมูลเบื้องต้น<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>

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
                                <td><b>ชื่อหัวข้อภาษาไทย</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>ชื่อหัวข้อภาษาอังกฤษ</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>อ.ที่ปรึกษาหลัก</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>อ.ที่ปรึกษาร่วม</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>วันที่ลงทะเบียน</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>สถานะการค้นคว้าอิสระ</b></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <button type="button" class="btn btn-primary btn-xs legitRipple" data-toggle="modal" data-target="#modal_edit_is"><i class="fa fa-edit"></i> แก้ไข</button>
                    <div id="modal_edit_is" class="modal fade">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h5 class="modal-title">แก้ไขข้อมูลเบื้องต้น</h5>
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
                                            <label class="control-label col-sm-3">ชื่อหัวข้อภาษาไทย</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">ชื่อหัวข้อภาษาอังกฤษ</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">อ.ที่ปรึกษาหลัก</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">อ.ที่ปรึกษาร่วม</label>
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
        <div class="col-lg-12">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">หัวข้อและโครงร่าง<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>

                </div>

                <div class="panel-body">
                    <div class="table-responsive" style="margin-bottom: 20px">
                        <table class="table table-bordered table-framed">
                            <tbody>
                            <tr>
                                <td width="30%"><b>โครงร่างการค้นคว้าแบบอิสระ</b></td>
                                <td><a href="{{ url('/student/is/proposal') }}" class="alert-link">คลิกเพื่อเข้าสู่การจัดการโครงร่างการค้นคว้าแบบอิสระ</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">การสอบการค้นคว้าแบบอิสระ<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>

                </div>

                <div class="panel-body">
                    <div class="alert alert-primary alert-bordered">
                        Check list เอกสารประกอบการขอสอบ <a href="{{ url('/student/is/checklist') }}" class="alert-link"><span class="label label-info">คลิกเพื่อเข้าดู</span></a>
                    </div>
                    <div class="table-responsive" style="margin-bottom: 20px">
                        <table class="table table-bordered table-framed">
                            <tbody>
                            <tr>
                                <td width="30%"><b>วันที่ยื่นขอสอบ</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>วันที่อนุมัติสอบ</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>วันที่สอบ</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>คกก.สอบ</b></td>
                                <td></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /main content -->
@endsection