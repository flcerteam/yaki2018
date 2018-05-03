@extends('master')
@section('content')
<link type="text/css" rel="stylesheet" href="layout/css/contact.css" />

<div class="section">
    <div class="bg-image bg-parallax overlay" style="background-image:url(layout/img/background02.jpg)"></div>
</div>

<div id="contact" class="section">
    
    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(layout/img/background02.jpg)"></div>
    <!-- /Backgound Image -->
    
    <!-- container -->
    <div class="container">
        @foreach($infoList as $dtl)
        <div class="row_contact">
            <!-- row -->
            <div class="row contact-content">
                <div class="col-md-6">
                    <a class="img-thumbnail">
                        <img src="{{ $dtl->image }}" class="img-responsive img-size">
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="section-header-contact">
                        <h2 class="title-contact">
                            {{ $dtl->name }}
                            <h5 class="address-contact">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span class="address">{{ $dtl->address }}</span>
                            </h5>
                        </h2>
                    </div>
                    <div class="section-content-contact">
                        <h3>
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                            <a>&nbsp;&nbsp;{{ $dtl->phone_number }}</a>
                        </h3>
                        <p>
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <a>&nbsp;&nbsp;&nbsp;{{ $dtl->contact_name }}</a>
                        </p>
                        <p>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <a>&nbsp;&nbsp;&nbsp;{{ $dtl->email }}</a>
                        </p>
                        <p>
                            <a href="{{route('contact-dtl', $dtl->slug)}}" class="main-button button-small-contact">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Xem Chi Tiết
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        @endforeach
    </div>
    <!-- /container -->

</div>

<div class="section">
    <div class="bg-image bg-parallax overlay" style="background-image:url(layout/img/background02.jpg)"></div>
</div>

@endsection