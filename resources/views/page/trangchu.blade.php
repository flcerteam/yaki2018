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
                <a class="main-button" href="{{ route('thuc-don') }}">Khám Phá Thực Đơn</a>
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
                    
                    <!-- single column -->
                    <div class="galery-item">

                        <!-- single image -->
                        <div class="galery-img" style="background-image:url(layout/img/image01.jpg)"></div>
                        <!-- /single image -->

                    </div>
                    <!-- single column -->

                    <!-- single column -->
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
                    <!-- /single column -->

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
<!-- /Sư kiện đặc biệt -->

<!-- Reservation -->
<div id="reservation" class="section">

    <!-- Backgound Image -->
    <div class="bg-image" style="background-image:url(layout/img/background03.jpg)"></div>
    <!-- /Backgound Image -->

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- reservation form -->
            <div class="col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1">
                <form class="reserve-form row" action="datban" method="POST">
                    <div class="section-header text-center">
                        <h4 class="sub-title">Đặt Bàn</h4>
                        <h2 class="title white-text">Book Your Table</h2>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Tên:</label>
                            <input class="input" type="text" placeholder="Name" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Số Điện Thoại:</label>
                            <input class="input" type="tel" placeholder="Phone" id="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Ngày Đặt:</label>
                            <input class="input" type="date" placeholder="DD/MM/YYYY" id="date" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input class="input" type="email" placeholder="Email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="number">Số Lượng Người:</label>
                            <select class="input" id="number">
                                @for ($i = 1; $i < 30; $i++)
                                <option>{{ $i }} Người</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="time">Time:</label>
                          <input class="input" type="time" placeholder="HH:MM" id="time">
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        <button class="main-button" type="submit">Book Now</button>
                    </div>

                </form>
            </div>
            <!-- /reservation form -->

            <!-- opening time -->
            <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1">
                <div class="opening-time row">
                    <div class="section-header text-center">
                        <h2 class="title white-text">Opening Time</h2>
                    </div>
                    <ul>
                        <li>
                            <h4 class="day">Sunday</h4>
                            <h4 class="hours">8:00 am – 11:00 pm</h4>
                        </li>
                        <li>
                            <h4 class="day">Monday</h4>
                            <h4 class="hours">8:00 am – 11:00 pm</h4>
                        </li>
                        <li>
                            <h4 class="day">Tuesday</h4>
                            <h4 class="hours">8:00 am – 11:00 pm</h4>
                        </li>
                        <li>
                            <h4 class="day">Wednesday</h4>
                            <h4 class="hours">8:00 am – 11:00 pm</h4>
                        </li>
                        <li>
                            <h4 class="day">Thursday</h4>
                            <h4 class="hours">8:00 am – 11:00 pm</h4>
                        </li>
                        <li>
                            <h4 class="day">Friday</h4>
                            <h4 class="hours">8:00 am – 11:00 pm</h4>
                        </li>
                        <li>
                            <h4 class="day">Saturday</h4>
                            <h4 class="hours">8:00 am – 11:00 pm</h4>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /opening time -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Reservation -->

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

<!-- Contact -->
<div id="contact" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <div class="col-md-5 col-md-offset-7">
                <div class="section-header">
                    <h4 class="sub-title">Contact Us</h4>
                    <h2 class="title">Get In Touch</h2>
                </div>
                <div class="contact-content">
                    <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
                    <h3>Hot Line: <a href="#">0903 906 084</a></h3>
                    <p>Tel 2:(028)38162188</p>
                    <p>Email: <a href="#">yaki@gmail.com</a></p>
                    <ul class="list-inline">
                        <li><p>Follow Us:</p></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

    <!-- map -->
    <div id="map"></div>
    <!-- /map -->

</div>
<!-- Contact -->    
@endsection
