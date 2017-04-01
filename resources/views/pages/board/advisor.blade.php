@extends('app')

@section('page_title','ระบบบริหารจัดการโปรเจ็ค')
@section('page_name1','คณะกรรมการหลักสูตร')
@section('page_name2','รายชื่ออาจารย์ที่ปรึกษา')
@section('nav-menu')
    @include ('pages.board.nav-menu')
@endsection

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">รายชื่ออาจารย์ที่ปรึกษา<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
            </div>

            <div class="panel-body">
                <div class="col-lg-12">
                    <div class="table-responsive" style="margin: 20px 0 0 0">
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
                </div>
            </div>
        </div>
    </div>
    <!-- /main content -->
@endsection