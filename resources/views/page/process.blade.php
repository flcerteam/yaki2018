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
        <div class="contact-content">
            <h2 class="white-text">
                Mã đặt của bạn là: <h1><label style="color: #f36700">{{ $code }}</label></h1>
            </h2>
            <h3 class="white-text">Nhân viên của chúng tôi sẽ liên hệ với bạn sau.</h3>
        </div>
    </div>
    <!-- /container -->
    
</div>
<!-- /Process -->

<div class="section">
    <div class="bg-image bg-parallax overlay" style="background-image:url({{ $imgSrc }})"></div>
</div>

@endsection
