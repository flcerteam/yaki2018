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

    <div id="event" class="section">

        <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>

        <div class="container">
            @if (null != $event)
            <div class="row">
                <div class="section-header text-center">
                    <h2 class="title white-text">{{ trans('common.event_subject') }}</h2>
                </div>
                <!-- /section header -->

                <!-- about content -->
                <div class="col-md-5">
                    <a href="javascript:void(0)" class="img-thumbnail">
                        <img src="{{ $event->image }}" alt="" class="img-responsive">
                    </a>
                </div>
                <!-- /about content -->

                <!-- about content -->
                <div class="col-md-7 white-text">
                    <h4 class="section-header-event">{{ $event->title }}</h4>
                    <hr/>
                    <h5 class="white-text">{!! nl2br($event->content) !!}</h5>
                </div>
                <!-- /about content -->
            </div>
            @else 
                <h5 class="white-text">Đang cập nhật thông tin...</h5>
            @endif
        </div>
    </div>
</div>
@endsection
