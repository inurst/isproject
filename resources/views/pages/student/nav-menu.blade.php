<ul class="nav navbar-nav no-border visible-xs-block">
    <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
</ul>

<div class="navbar-collapse collapse" id="navbar-second-toggle">
    <ul class="nav navbar-nav">
        <li><a href="{{ url('/student/main') }}"><i class="icon-display4 position-left"></i> หน้าหลัก</a></li>
        <li><a href="{{ url('/student/activity') }}"><i class="icon-display4 position-left"></i> กิจกรรม</a></li>
        <li><a href="{{ url('/student/profile') }}"><i class="icon-display4 position-left"></i> ข้อมูลส่วนตัว</a></li>


        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                การค้นคว้าอิสระ <span class="caret"></span>
            </a>

            <ul class="dropdown-menu width-200">
                <li><a href="{{ url('/student/is') }}"><i class="icon-align-center-horizontal"></i> รายละเอียด</a></li>
                <li><a href="{{ url('/student/is/checklist') }}"><i class="icon-align-center-horizontal"></i> หน้าเช็คลิสต์</a></li>
                <li><a href="{{ url('/student/is/proposal') }}"><i class="icon-align-center-horizontal"></i> หัวข้อและโครงร่าง</a></li>
            </ul>
        </li>
    </ul>

</div>