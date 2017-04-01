@extends('app')

@section('page_title','ระบบบริหารจัดการโปรเจ็ค')
@section('page_name1','ผู้ดูแลระบบ')
@section('page_name2','จัดการอาจารย์ที่ปรึกษา')
@section('nav-menu')
    @include ('pages.admin.nav-menu')
@endsection

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">รายชื่ออาจารย์ที่ปรึกษา<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
            </div>

            <div class="panel-body">
                <div class="table-responsive" style="margin-bottom: 20px">
                        <table class="table table-bordered table-framed">
                            <thead>
                            <tr>
                                <td width="80%"><b>ชื่ออาจารย์ที่ปรึกษา</b></td>
                                <td><b>ตำแหน่ง</b></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Alex</td>
                                <td>President</td>
                            </tr>
                            <tr>
                                <td>John</td>
                                <td>Vice president</td>
                            </tr>
                            <tr>
                                <td>Doe</td>
                                <td>CEO</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                <button type="button" class="btn btn-success btn-xlg legitRipple" data-toggle="modal" data-target="#modal_create_advisor"><i class="fa fa-plus-square"></i> เพิ่มอาจารย์ที่ปรึกษา</button>
                <div id="modal_create_advisor" class="modal fade">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h5 class="modal-title">เพิ่มอาจารย์ที่ปรึกษา</h5>
                            </div>

                            <form action="#" class="form-horizontal">
                                <div class="modal-body">


                                    <div class="form-group">
                                        <label class="control-label col-sm-3">ชื่ออาจารย์ที่ปรึกษา</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3">ตำแหน่ง</label>
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