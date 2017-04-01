@extends('app')


@section('page_title','ระบบบริหารจัดการโปรเจ็ค')
@section('page_name1','นักศึกษา')
@section('page_name2','หน้าหลัก')
@section('nav-menu')
    @include ('pages.student.nav-menu')
@endsection

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Simple panel -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">ข้อมูลนักศึกษา</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <div class="col-lg-2 col-sm-6">
                    <div class="thumbnail">
                        <div class="thumb thumb-rounded">
                            <img src="{{ URL::asset('assets/images/image.png')}}" alt="">

                        </div>

                    </div>
                </div>
                <div class="col-lg-9 col-sm-6">
                    <div class="well">
                        <dl class="dl-horizontal">
                            <dt><b>ชื่อ-นามสกุล</b></dt>
                            <dd>นายสวัสดี สวัสดี</dd>
                            <dt><b>หัวข้อการค้นคว้าแบบอิสระ</b></dt>
                            <dd>การเขียนโปรแกรมแบบอิสระ</dd>
                            <dt><b>อาจารย์ที่ปรึกษา</b></dt>
                            <dd>อ.สวัสดี อิอิ</dd>
                        </dl>
                    </div>

                </div>
            </div>
        </div>
        <!-- /simple panel -->


        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">ข้อมูลการค้นคว้าแบบอิสระ<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>

            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-framed">
                        <tbody>
                        <tr>
                            <td><b>สถานะการค้นคว้าแบบอิสระ</b></td>
                            <td width="70%">รอสอบหัวข้อและโครงร่าง</td>
                        </tr>
                        <tr>
                            <td><b>ชื่อหัวข้อ TH</b></td>
                            <td width="70%"></td>
                        </tr>
                        <tr>
                            <td><b>ชื่อหัวข้อ EN</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>อาจารย์ที่ปรึกษา(หลัก)</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>อาจารย์ที่ปรึกษา(ร่วม) *ถ้าม</b>ี</td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /main content -->
@endsection