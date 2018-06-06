@extends('master')

@section('content')

<div class="page-row page-row-expanded">
    <!-- Home -->
    <div id="home" class="banner-area">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>
        <!-- /Backgound Image -->

        <div class="home-wrapper">
            <div class="col-md-10 col-md-offset-1 text-center">
                <div class="home-content">
                    <h1 class="white-text">Welcome To Yaki Restaurant</h1>
                    <h4 class="white-text lead">Chẳng Dừng Nướng.</h4>
                    <a class="main-button" href="{{ route('thucdon',[str_slug($yakiMenu->name,'-'),$yakiMenu->id]) }}">Khám Phá Thực Đơn</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Home -->

    <!-- About -->
    <div id="about" class="section-about">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- section header -->
                <div class="section-header text-center">
                    <h2 class="title">
                        @if (null != $paramAboutTitle)
                            {!! $paramAboutTitle->content !!}
                        @else
                            {{ trans('common.about_subject') }}
                        @endif
                    </h2>
                </div>
                <!-- /section header -->

                <!-- about content -->
                <div class="col-md-5">
                    <a href="javascript:void(0)" class="img-thumbnail">
                        <img src="{{ $yakiAboutImg }}" alt="" class="img-responsive">
                    </a>
                </div>
                <!-- /about content -->

                <!-- about content -->
                <div class="col-md-7">
                    @if (null != $paramAbout)
                        <h5>{!! $paramAbout->content !!}</h5>
                    @else
                        <p>Đang cập nhật thông tin...</p>
                    @endif
                </div>
                <!-- /about content -->

                <!-- Galery Slider -->
                @if (null != $paramCategoryHome && null != $products)
                <div class="col-md-12">
                    <div id="galery" class="owl-carousel owl-theme">
                        @foreach ($products as $item)
                            <!-- single column -->
                            <div class="galery-item">
                                <!-- single image -->
                                @if ($item->ribbon->id != '0')
                                    <div class="{{ $item->ribbon->css_class }}"><span>{{ $item->ribbon_content }}</span></div>
                                @endif
                                {{-- <div class="ribbon-wrapper"><div class="ribbon sale">New</div></div> --}}
                                @if(null != $item->firstImage())
                                    <a href="{{ route('detail',[str_slug($item->name,'-'),$item->id]) }}"div class="galery-img" style="background-image:url({{ $prSrc."/".$item->firstImage()->name }})">
                                    </a>
                                @else
                                    <a href="{{ route('detail',[str_slug($item->name,'-'),$item->id]) }}"div class="galery-img" style="background-image:url({{  $prSrc."/no_image.png" }})">
                                    </a>
                                @endif
                                <!-- /single image --> 
                            </div>
                            <!-- single column -->
                        @endforeach
                    </div>
                </div>
                @endif
                <!-- /Galery Slider -->
            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /About -->

    <!-- Sư kiện đặc biệt -->
    <div id="event" class="section">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgFooterImg }})"></div>
        <!-- /Backgound Image -->
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section header -->
                <div class="section-header text-center">
                    <h2 class="title" style="color:blanchedalmond">Sự Kiện Yaki</h2>
                </div>
                <!-- /section header -->
                @if (count($events) == 0)
                    <p class="text-center">Hiện tại không có sự kiện ^_^.</p>
                @else
                    @foreach ($events as $event)
                        <!-- single event -->
                        <div class="col-md-6 col-xs-12">
                            <div class="event">
                                <div class="event-img">
                                    @if(null != $event->image)
                                    <a href="{{ route('events',[str_slug($event->title,'-'),$event->id]) }}" >
                                        <img src="{{ $event->image }}" alt="{{ $event->title }}">
                                    </a>
                                    @else
                                    <a href="{{ route('events',$event->id) }}" >
                                        <img src="{{ $eventSrc. "/no_image.png" }}" alt="">
                                    </a>
                                    @endif
                                </div>
                                <div class="event-content">
                                    <a class="white-text" href="{{ route('events',[str_slug($event->title,'-'),$event->id]) }}">{!! $event->title !!}</a>
                                </div>
                            </div>
                        </div>
                        <!-- /single event -->
                    @endforeach
                @endif
                
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /Sư kiện đặc biệt -->
    </div>

    <div class="alert-bottom alert">
        <span class="alert-close-btn">&times;</span>
        <strong>Khuyến mại</strong><br/>
        <p>Giảm ngay 5% cho khách đặt bàn tại yaki.com.vn</p>
        <a href="{{ route('reservation') }}" class="btn btn-primary">Đặt bàn ngay!</a>
    </div>

</div>
@endsection