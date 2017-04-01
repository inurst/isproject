@extends('app')


@section('page_title','ระบบบริหารจัดการโปรเจ็ค')
@section('page_name1','นักศึกษา')
@section('page_name2','เช็คลิสต์')
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


    </div>
    <!-- /main content -->
@endsection