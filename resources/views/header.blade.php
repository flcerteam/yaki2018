<!-- Header -->
<header id="header">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay img-bg-header" style="background-image:url({{ $yakiBgHeaderImg }})"></div>
        <!-- /Backgound Image -->
    
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
                <li><a href="javascript:void(0)"><h5><i class="fa fa-phone"></i> Hotline: 0903 906 084 - 0909 910 468</h5></a></li>
                <li><a href="javascript:void(0)"><h5><i class="fa fa-phone"></i> Tel 2: (028) 38162188</h5></a></li>
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
                <ul class="main-nav nav navbar-nav main-nav-yaki">
                    <li><a href="{{ route('home') }}">Trang Chủ</a></li>
                    <li><a href="/about">Giới Thiệu</a></li>
                    <li><a href="{{ route('thucdon',[str_slug($yakiMenu->name, '-'), $yakiMenu->id]) }}">Thực Đơn</a></li>
                    @if (count($yakiBuffetBranches) > 0)
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#" role="button" aria-haspopup="true" aria-expanded="false">Buffet <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach ($yakiBuffetBranches as $branch)
                            <li><a href="{{ route('buffet', [str_slug($branch->name, '-'), $branch->id]) }}">{{ $branch->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @endif
                    <li><a href="{{ route('market',[str_slug($yakiMarket->name, '-'), $yakiMarket->id]) }}">Siêu Thị Yaki</a></li>
                    <li><a href="{{ route('branch') }}">Hệ Thống Nhà Hàng</a></li>
                    <li><a href="{{ route('member') }}">Thành Viên</a></li>
                    <li><a href="{{ route('tuyen-dung') }}">Tuyển Dụng</a></li>
                </ul>
                
                <!-- /nav -->
    
                <!-- shopping cart -->
                <ul class="contact-nav nav navbar-nav">
                    
                </ul>
                <!-- /shopping cart -->
    
                <!-- button nav -->
                <ul class="cta-nav">
                    <li><a href="{{ route('reservation') }}" class="main-button table-reservation-style">Đặt Bàn</a></li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect cart-style" href="/checkout">
                        <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"><span class="badge badge-pill badge-danger badge-yaki">
                            @if (Cart::count() > 0)
                                {{ Cart::count()}}
                            @else
                                0
                            @endif</span></i>
                        </a>
                    </li>
                </ul>
                <!-- button nav -->
    
                <!-- contact nav -->
                <ul class="contact-nav nav navbar-nav visible-xs">
                    <li><a href="javascript:void(0)"><p class="white-text"><i class="fa fa-phone"></i> Hotline<br/>0903 906 084<br/>0909 910 468</p></a></li>
                    <li><a href="javascript:void(0)"><p class="white-text"><i class="fa fa-phone"></i> Tel 2: (028) 38162188</p></a></li>
                </ul>
                <!-- contact nav -->
    
            </nav>
            </div>
            <div class="notification col-md-6 col-xs-12 col-md-offset-3"></div>
        </div>
        <!-- /Bottom nav -->
       
    </header>
    <!-- /Header -->