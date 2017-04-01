@extends('app')


@section('page_title','ระบบบริหารจัดการโปรเจ็ค')
@section('page_name1','นักศึกษา')
@section('page_name2','หัวข้อและโครงร่าง')
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
                                <td width="30%"><b>ชื่อหัวข้อภาษาไทย</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>ชื่อหัวข้อภาษาอังกฤษ</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>รายละเอียดของหัวข้อและโครงร่าง</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>แนบไฟล์หัวข้อและโครงร่าง</b></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <button type="button" class="btn btn-primary btn-xs legitRipple" data-toggle="modal" data-target="#modal_edit_proposal"><i class="fa fa-edit"></i> แก้ไขหัวข้อและโครงร่าง</button>
                    <div id="modal_edit_proposal" class="modal fade">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h5 class="modal-title">แก้ไขหัวข้อและโครงร่าง</h5>
                                </div>

                                <form action="#" class="form-horizontal">
                                    <div class="modal-body">


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
                                            <label class="control-label col-sm-3">รายละเอียดของหัวข้อและโครงร่าง</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">แนบไฟล์หัวข้อและโครงร่าง</label>
                                            <div class="col-sm-9">
                                                <div class="uploader"><input type="file" class="file-styled"><span class="filename" style="user-select: none;">No file selected</span><span class="action btn bg-pink-400 legitRipple" style="user-select: none;">Choose File</span></div>
                                                <span class="help-block">Accepted formats: pdf, doc. Max file size 2Mb</span>
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

                    <div class="table-responsive" style="margin: 20px 0 20px 0">
                        <table class="table table-bordered table-framed">
                            <tbody>
                            <tr>
                                <td width="30%"><b>วันที่เสนอ อ.ที่ปรึกษา</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>วันที่ อ.ที่ปรึกษาอนุมัติ</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>วันที่ คกก.หลักสูตร อนุมัติให้สอบ</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>วันที่สอบหัวข้อและโครงร่างฯ</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>วันที่ คกก.หลักสูตรอนุมัติให้ผ่าน</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>วันที่เสนอ คกก.บศ.ประจำคณะวิทย์</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>วันที่ คกก.บศ.ประจำคณะวิทย์อนุมัติ</b></td>
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