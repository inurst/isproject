@extends('app')


@section('page_title','ระบบบริหารจัดการโปรเจ็ค')
@section('page_name1','คณะกรรมการหลักสูตร')
@section('page_name2','การค้นคว้าแบบอิสระของนักศึกษา')
@section('nav-menu')
    @include ('pages.board.nav-menu')
@endsection

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">การค้นคว้าแบบอิสระของนักศึกษา<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
            </div>

            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label col-lg-1">ปีการศึกษา</label>
                    <div class="col-lg-3">
                        <select name="select" class="form-control">
                            <option value="opt1">2555</option>
                            <option value="opt2">2556</option>
                            <option value="opt3">2557</option>
                            <option value="opt4">2558</option>
                            <option value="opt5">2559</option>
                            <option value="opt6">2560</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <button class="btn btn-info btn-xs">ดูข้อมูล</button>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive" style="margin: 20px 0 0 0">
                    <table class="table table-bordered table-framed">
                        <thead>
                        <tr>
                            <td width="90%"><b>ชื่อการค้นคว้าแบบอิสระ</b></td>
                            <td><b></b></td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>โครงการรับจำนำข้าว</td>
                              <td><button class="btn btn-info btn-xs">ดูรายละเอียดการค้นคว้าแบบอิสระ</button></td>
                        </tr>
                        <tr>
                            <td>ระบบเครือข่ายอินเตอร์เน็ต</td>
                            <td><button class="btn btn-info btn-xs">ดูรายละเอียดการค้นคว้าแบบอิสระ</button></td>
                        </tr>
                        <tr>
                            <td>ระบบเติมเงิน</td>
                            <td><button class="btn btn-info btn-xs">ดูรายละเอียดการค้นคว้าแบบอิสระ</button></td>
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