@extends('app')


@section('page_title','ระบบบริหารจัดการโปรเจ็ค')
@section('page_name1','นักศึกษา')
@section('page_name2','กิจกรรม')
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

        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">กิจกรรมที่เข้าร่วม<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>

            </div>

            <div class="panel-body">
                <div class="table-responsive" style="margin-bottom: 20px">
                    <table class="table table-bordered table-framed">
                        <thead>
                        <tr>
                            <th width="20%">วันที่เข้าร่วม</th>
                            <th width="30%">ชื่อกิจกรรม</th>
                            <th width="50%">รายละเอียด</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>10/11/12</td>
                            <td>Kopyov</td>
                            <td>@Kopyov</td>
                        </tr>
                        <tr>
                            <td>13/14/15</td>
                            <td>Baker</td>
                            <td>@Vicky</td>
                        </tr>
                        <tr>
                            <td>16/17/18</td>
                            <td>Alexander</td>
                            <td>@Alex</td>
                        </tr>
                        <tr>
                            <td>19/20/21</td>
                            <td>Morrison</td>
                            <td>@Frank</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
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
                                        <label class="control-label col-sm-3">วันที่เข้าร่วม</label>
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