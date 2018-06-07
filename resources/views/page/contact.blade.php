@extends('master')
@section('content')
<link type="text/css" rel="stylesheet" href="layout/css/contact.css" />

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

    <div id="contact" class="section">
        
        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>
        <!-- /Backgound Image -->
        
        <!-- container -->
        <div class="container">
            @if ($infoList->count() > 0)
            @foreach($infoList as $dtl)
            <div class="row_contact">
                <!-- row -->
                <div class="row contact-content">
                    <div class="col-md-6">
                        @if ($dtl->image != null)
                        <a class="img-thumbnail">
                            <img src="{{ $dtl->image }}" class="img-responsive img-size">
                        </a>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="section-header-contact">
                            <h2 class="title-contact">
                                {{ $dtl->name }}
                                <h5 class="address-contact white-text">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span class="address">{{ $dtl->address }}</span>
                                </h5>
                            </h2>
                        </div>
                        <div class="section-content-contact">
                            <h3>
                                <i class="fa fa-mobile white-text" aria-hidden="true"></i>
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
                                <a href="{{route('branch-dtl', $dtl->slug)}}" class="main-button button-small-contact">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Xem Chi Tiết
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            @endforeach
            @else
                @include('page.no-data')
            @endif
        </div>
        <!-- /container -->

    </div>

    <div class="section">
        <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>
    </div>

</div>
@endsection
