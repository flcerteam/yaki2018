@extends('master')
@section('content')
<!-- Home -->
<div id="home" class="banner-area">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(layout/img/background02.jpg)"></div>
    <!-- /Backgound Image -->

    <div class="home-wrapper">

        <div class="col-md-10 col-md-offset-1 text-center">
            <div class="home-content">
                <h1 class="white-text">Welcome To Yaki Restaurant</h1>
                <h4 class="white-text lead">Chẳng Dừng Nướng.</h4>
                <a class="main-button" href="{{ route('thucdon',[$yakiMenu->menu_id,$yakiMenu->id]) }}">Khám Phá Thực Đơn</a>
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
                <h4 class="sub-title">About Us</h4>
                <h2 class="title">The Yaki Restaurant</h2>
            </div>
            <!-- /section header -->

            <!-- about content -->
            <div class="col-md-5">
                <h4 class="lead">Welcome to Yaki Restaurant. Since 2015, Offering Traditional Dishes of the highest quality.</h4>
            </div>
            <!-- /about content -->

            <!-- about content -->
            <div class="col-md-7">
                <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum. Oblique conclusionemque qui cu, eum no sonet putant. Eos cu nulla vidisse. Mazim oporteat eam ex, his ei audiam audire, affert corrumpit pri cu.</p>
            </div>
            <!-- /about content -->

            <!-- Galery Slider -->
            <div class="col-md-12">
                <div id="galery" class="owl-carousel owl-theme">
                    @foreach ($products as $item)
                        <!-- single column -->
                        <div class="galery-item">
                            <!-- single image -->
                            <a href="{{ route('detail',[$item->name,$item->id]) }}"div class="galery-img" style="background-image:url(img/{{ $item->image }})">
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
    <div class="bg-image bg-parallax overlay" style="background-image:url(layout/img/yaki-background-01.jpg)"></div>
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
                                <img src="layout/img/{{$event->image }}" alt="">
                                <div class="event-day">
                                    <span>08<br>July</span>
                                </div>
                            </div>
                            <div class="event-content">
                                <p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
                                <h3><a href="#">{{ $event->content }}</p>
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

<!-- Events -->
<div id="events" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

                <!-- section header -->
                <div class="section-header text-center">
                    <h4 class="sub-title">Sự Kiện Đặc Biệt</h4>
                    <h2 class="title">Sắp Diễn Ra</h2>
                </div>
                <!-- /section header -->

                <!-- single event -->
                <div class="col-md-6">
                    <div class="event">
                        <div class="event-img">
                            <img src="layout/img/event01.jpg" alt="">
                            <div class="event-day">
                                <span>08<br>July</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
                            <h3><a href="#">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
                            <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
                        </div>
                    </div>
                </div>
                <!-- /single event -->

                <!-- single event -->
                <div class="col-md-6">
                    <div class="event">
                        <div class="event-img">
                            <img src="layout/img/event02.jpg" alt="">
                            <div class="event-day">
                                <span>08<br>July</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
                            <h3><a href="#">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
                            <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
                        </div>
                    </div>
                </div>
                <!-- /single event -->

                <!-- single event -->
                <div class="col-md-6">
                    <div class="event">
                        <div class="event-img">
                            <img src="layout/img/event02.jpg" alt="">
                            <div class="event-day">
                                <span>08<br>July</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
                            <h3><a href="#">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
                            <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
                        </div>
                    </div>
                </div>
                <!-- /single event -->

                <!-- single event -->
                <div class="col-md-6">
                    <div class="event">
                        <div class="event-img">
                            <img src="layout/img/event01.jpg" alt="">
                            <div class="event-day">
                                <span>08<br>July</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
                            <h3><a href="#">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
                            <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
                        </div>
                    </div>
                </div>
                <!-- /single event -->

            </div>
            <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Events -->  
@endsection
