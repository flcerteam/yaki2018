@extends('master')
@section('content')
<link type="text/css" rel="stylesheet" href="layout/css/contact.css" />

<div class="section hidden-lg hidden-md visible-sm-block">
    <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>
</div>
<div class="section-md visible-lg-block visible-md-block hidden-sm hidden-xs">
    <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>
</div>

<div id="contact" class="section">
    
    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url({{$contactInfo->image}})"></div>
    <!-- /Backgound Image -->
    
    <!-- container -->
    <div class="container">
        <div class="row_contact_dtl section-header-contact">
            <h2 class="title-contact">{{ $contactInfo->name }}</h2>
        </div>
        <div class="row contact-content">
            <div class="col-md-6" style="margin-bottom: 1em">
                <div class="google-maps">
                    {!! $contactInfo->location !!}
                </div>
            </div>
            <div class="section-content-contact txt-contact">
                <div class="col-md-6">
                    <h4><a>Địa Chỉ</a></h4>                                                                                                                     
                    <p class="txt">{{ $contactInfo->address }}</p>
                    <h4><a>Giờ mở/đóng cửa</a></h4>
                    <p class="txt">{{ $contactInfo->open_hour }} - {{ $contactInfo->close_hour }}</p>
                    <h4><a>Liên hệ</a></h4>
                    <p class="txt">{{ $contactInfo->contact_name }} - {{ $contactInfo->phone_number	}}</p>
                    <h4><a>Email</a></h4>
                    <p>{{ $contactInfo->email }}</p>
                    <hr>
                    <p class="txt">{{ $contactInfo->description }}</p>
                    <hr>
                    <div class="section-content-contact">
                    <p>
                        <a href="{{route('branch')}}" class="main-button button-small-contact">
                            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Quay Về
                        </a>
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /container -->
</div>

<div class="section">
    <div class="bg-image bg-parallax overlay" style="background-image:url({{$contactInfo->image}})"></div>
</div>

@endsection
