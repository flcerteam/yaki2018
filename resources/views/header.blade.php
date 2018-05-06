<!-- Header -->
<header id="header">

    <!-- Top nav -->
    <div id="top-nav">
        <div class="container">

        <!-- logo -->
        <div class="logo">
            <a href="{{ route('home') }}"><img src="layout/img/logo.png" alt="logo"></a>
        </div>
        <!-- logo -->

        <!-- Mobile toggle -->
        <button class="navbar-toggle">
            <span></span>
        </button>
        <!-- Mobile toggle -->

        <!-- social links -->
        <ul class="contact-nav nav navbar-nav hidden-xs">
            <li><a href="#"><i class="fa fa-phone"></i> Hot Line: 0903 906 084</a></li>
            <li><a href="#"><i class="fa fa-phone"></i> Tel 2:(028)38162188</a></li>
        </ul>
        <!-- /social links -->

        </div>
    </div>
    <!-- /Top nav -->

    <!-- Bottom nav -->
    <div id="bottom-nav">
        <div class="container">
        <nav id="nav">

            <!-- nav -->
            <ul class="main-nav nav navbar-nav">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">Giới Thiệu</a></li>
                <li><a href="{{ route('thucdon',[$yakiMenu->menu_id,$yakiMenu->id]) }}">Thực Đơn</a></li>
                <li><a href="{{ route('market',[$yakiMarket->menu_id,$yakiMarket->id]) }}">Siêu Thị Yaki</a></li>
                <li><a href="#">Hệ Thống Nhà Hàng</a></li>
                <li><a href="#">Buffet</a></li>
                <li><a href="#">Thành Viên</a></li>
                <li><a href="{{ route('contact') }}">Liên Hệ</a></li>
            </ul>
            
            <!-- /nav -->

            <!-- shopping cart -->
            <ul class="contact-nav nav navbar-nav">
                <li class="nav-item">
                  <a class="nav-link waves-effect" href="/checkout">
                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"><span class="badge badge-pill badge-danger badge-yaki">
                        @if (Cart::count() > 0)
                        {{ Cart::count()}}
                        @else
                        0
                        @endif</span></i>
                  </a>
                </li>
            </ul>
            <!-- /shopping cart -->

            <!-- button nav -->
            <ul class="cta-nav">
                <li><a href="{{ route('reservation') }}" class="main-button">Đặt Bàn</a></li>
            </ul>
            <!-- button nav -->

            <!-- contact nav -->
            <ul class="contact-nav nav navbar-nav visible-xs">
                <li><a href="#"><i class="fa fa-phone"></i> Hot Line: 0903 906 084</a></li>
                <li><a href="#"><i class="fa fa-phone"></i> Tel 2:(028)38162188</a></li>
            </ul>
            <!-- contact nav -->

        </nav>
        </div>
    </div>
    <!-- /Bottom nav -->


</header>
<!-- /Header -->