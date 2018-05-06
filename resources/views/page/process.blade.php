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
                {{ $msg }}
            </h2>
        </div>
    </div>
    <!-- /container -->
    
</div>
<!-- /Process -->

<div class="section">
    <div class="bg-image bg-parallax overlay" style="background-image:url({{ $imgSrc }})"></div>
</div>

@endsection
