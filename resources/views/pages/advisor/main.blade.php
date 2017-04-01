@extends('app')


@section('page_title','ระบบบริหารจัดการโปรเจ็ค')
@section('page_name1','อาจารย์ที่ปรึกษา')
@section('page_name2','หน้าหลัก')
@section('nav-menu')
    @include ('pages.advisor.nav-menu')
@endsection

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">นักศึกษาในความดูแล<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-framed">
                        <thead>
                        <tr>
                            <td width="30%"><b>ชื่อนักศึกษา</b></td>
                            <td width="40%"><b>ชื่อหัวข้อ</b></td>
                            <td width="20%"><b>สถานะของการค้นคว้าแบบอิสระ</b></td>
                            <td><b></b></td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Alex</td>
                            <td>โครงการรับจำนำข้าว</td>
                            <td><span class="label label-default">กำลังตรวจสอบ</span></td>
                            <td><button class="btn btn-info btn-xs">ดูรายละเอียดการค้นคว้าแบบอิสระ</button></td>
                        </tr>
                        <tr>
                            <td>John</td>
                            <td>ระบบเครือข่ายอินเตอร์เน็ต</td>
                            <td><span class="label label-danger">ไม่ผ่าน</span></td>
                            <td><button class="btn btn-info btn-xs">ดูรายละเอียดการค้นคว้าแบบอิสระ</button></td>
                        </tr>
                        <tr>
                            <td>Doe</td>
                            <td>ระบบเติมเงิน</td>
                            <td><span class="label label-success">ผ่าน</span></td>
                            <td><button class="btn btn-info btn-xs">ดูรายละเอียดการค้นคว้าแบบอิสระ</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">กรรมการสอบ<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-framed">
                        <thead>
                        <tr>
                            <td width="30%"><b>ชื่อนักศึกษา</b></td>
                            <td width="40%"><b>ชื่อหัวข้อ</b></td>
                            <td width="20%"><b>สถานะของการค้นคว้าแบบอิสระ</b></td>
                            <td><b></b></td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Alex</td>
                            <td>โครงการรับจำนำข้าว</td>
                            <td><span class="label label-default">กำลังตรวจสอบ</span></td>
                            <td><button class="btn btn-info btn-xs">ดูรายละเอียดการค้นคว้าแบบอิสระ</button></td>
                        </tr>
                        <tr>
                            <td>John</td>
                            <td>ระบบเครือข่ายอินเตอร์เน็ต</td>
                            <td><span class="label label-danger">ไม่ผ่าน</span></td>
                            <td><button class="btn btn-info btn-xs">ดูรายละเอียดการค้นคว้าแบบอิสระ</button></td>
                        </tr>
                        <tr>
                            <td>Doe</td>
                            <td>ระบบเติมเงิน</td>
                            <td><span class="label label-success">ผ่าน</span></td>
                            <td><button class="btn btn-info btn-xs">ดูรายละเอียดการค้นคว้าแบบอิสระ</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /main content -->
@endsection