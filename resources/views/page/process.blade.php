@extends('master')
@section('content')

<div class="section">
    <div class="bg-image bg-parallax overlay" style="background-image:url({{ $imgSrc }})"></div>
</div>

<!-- Process -->
<div id="process" class="section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url({{ $imgSrc }})"></div>
    <!-- /Backgound Image -->

    <!-- container -->
    <div class="container">
        <div class="panel panel-success text-center">
            <div class="panel-heading">Đặt thành công</div>
            <div class="panel-body">
                Cám ơn bạn đã đến với Yaki<br/>
                Mã đặt của bạn là: <label style="color: #f36700">{{ $code }}</label><br/>
                Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.
            </div>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /Process -->

<div class="section">
    <div class="bg-image bg-parallax overlay" style="background-image:url({{ $imgSrc }})"></div>
</div>

@endsection
