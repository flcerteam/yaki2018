@extends('master')
@section('content')
<!-- Home -->
<div id="home" class="banner-area">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url({{ $imgSrc }}/yaki-background.jpg)"></div>
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
<div id="about" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- section header -->
            <div class="section-header text-center">
                <h2 class="title">{{ trans('common.about_subject') }}</h2>
            </div>
            <!-- /section header -->

            <!-- about content -->
            <div class="col-md-5">
                <a href="javascript:void(0)" class="img-thumbnail">
                    <img src="" alt="" class="img-responsive">
                </a>
            </div>
            <!-- /about content -->

            <!-- about content -->
            <div class="col-md-7">
                <p>{!! $parameter->content !!}</p>
            </div>
            <!-- /about content -->

            <!-- Galery Slider -->
            <div class="col-md-12">
                <div id="galery" class="owl-carousel owl-theme">
                    @foreach ($products as $item)
                        <!-- single column -->
                        <div class="galery-item">
                            <!-- single image -->
                            <div class="ribbon-wrapper"><div class="ribbon sale">New</div></div>
                            <a href="{{ route('detail',[str_slug($item->name,'-'),$item->id]) }}"div class="galery-img" style="background-image:url({{ $prSrc."/".$item->image }})">
                            </a>
                            <!-- /single image --> 
                        </div>
                        <!-- single column -->
                    @endforeach

                    {{-- <!-- single column -->
                    <div class="galery-item">

                        <!-- single image -->
                        <div class="galery-img" style="background-image:url(layout/img/image02.jpg)"></div>
                        <!-- /single image -->

                        <!-- single image -->
                        <div class="galery-img" style="background-image:url(layout/img/image03.jpg)"></div>
                        <!-- /single image -->

                    </div>
                    <!-- single column -->

                    <!-- single column -->
                    <div class="galery-item">

                        <div class="item-column">
                            <!-- single image -->
                            <div class="galery-img" style="background-image:url(layout/img/image04.jpg)"></div>
                            <!-- /single image -->

                            <!-- single image -->
                            <div class="galery-img" style="background-image:url(layout/img/image05.jpg)"></div>
                            <!-- /single image -->
                        </div>

                        <div class="item-column">
                            <!-- single image -->
                            <div class="galery-img" style="background-image:url(layout/img/image06.jpg)"></div>
                            <!-- /single image -->

                            <!-- single image -->
                            <div class="galery-img" style="background-image:url(layout/img/image07.jpg)"></div>
                            <!-- /single image -->
                        </div>

                    </div>
                    <!-- /single column --> --}}

                </div>
            </div>
            <!-- /Galery Slider -->


        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /About -->

<!-- Sư kiện đặc biệt -->
<div id="menu" class="section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url({{ $imgSrc }}/yaki-background-01.jpg)"></div>
    <!-- /Backgound Image -->
    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

                <!-- section header -->
                <div class="section-header text-center">
                    <h4 class="sub-title">Sự Kiện Đặc Biệt</h4>
                    <h2 class="title" style="color:blanchedalmond">Đang Diễn Ra</h2>
                </div>
                <!-- /section header -->
                @foreach ($events as $event)
                    <!-- single event -->
                    <div class="col-md-6">
                        <div class="event">
                            <div class="event-img">
                                <img src="{{$event->image }}" alt="">
                            </div>
                            <div class="event-content">
                                <h3><a href="javascrpit:void(0);">{!! $event->title !!}</p>
                            </div>
                        </div>
                    </div>
                    <!-- /single event -->
                @endforeach
                
            </div>
            <!-- /row -->

    </div>
    <!-- /container -->
</div>
<!-- /Sư kiện đặc biệt -->
@endsection
