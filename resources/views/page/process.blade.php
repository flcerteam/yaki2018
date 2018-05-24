@extends('master')
@section('content')

<div class="page-row page-row-expanded">

    <div class="section hidden-lg hidden-md visible-sm-block">
        <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>
    </div>
    <div class="section-md hidden-lg visible-md-block hidden-sm hidden-xs">
        <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>
    </div>
    <div class="section-lg visible-lg-block hidden-md hidden-sm hidden-xs">
        <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>
    </div>

    <!-- Process -->
    <div id="process" class="section">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>
        <!-- /Backgound Image -->

        <!-- container -->
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success text-center">
                    <div class="panel-heading">Đặt thành công</div>
                    <div class="panel-body">
                        Cám ơn bạn đã đến với Yaki<br/>
                        Mã đặt của bạn là: <label style="color: #f36700">{{ $code }}</label><br/>
                        Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- /Process -->

    <div class="section">
        <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>
    </div>

</div>
@endsection
