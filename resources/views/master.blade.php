<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <base href="{{asset('/public/')}}">
        <meta name="csrf-token" value="{{csrf_token()}}">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>{{ config('app.name') }}</title>
        
        <!-- Favicon -->
        <link rel='shortcut icon' type='image/x-icon' href='favicon.ico'/>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700%7CCabin:400%7CDancing+Script" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="layout/css/bootstrap.min.css"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="layout/css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="layout/css/owl.theme.default.css" />

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="layout/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="layout/css/style.css"/>
        <link type="text/css" rel="stylesheet" href="layout/css/image-size.css" />
        <link type="text/css" rel="stylesheet" href="layout/css/addons.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.2.5/jquery.bootstrap-touchspin.css" />

        
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
    <body id="body">
    
        {{-- fb-live chat --}}
        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Your customer chat code -->
        <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="424972097616992"
        logged_in_greeting="Xin chào! Yaki có thể giúp gì cho bạn"
        logged_out_greeting="Xin chào! Yaki có thể giúp gì cho bạn">
        </div>
        {{-- /fb-livechat --}}

        @include('header')
        @yield('content')   
        @include('footer')

        <!-- Scroll Top -->
        <a href="#" class="scrollToTop"><i class="fa fa-angle-double-up"></i></a>     
        <!-- /Scroll Top -->

        <!-- Preloader -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- /Preloader -->

        <!-- jQuery Plugins -->
        <script type="text/javascript" src="layout/js/jquery.min.js"></script>
        <script type="text/javascript" src="layout/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="layout/js/owl.carousel.min.js"></script>
        
        <script type="text/javascript" src="layout/js/main.js"></script>
        <script type="text/javascript" src="js/cart/cart.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.2.5/jquery.bootstrap-touchspin.js"></script>
        <script type="text/javascript" src="js/checkout/checkout.js"></script>
        <!-- lib for autosearch-->
        <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
        <script type="text/javascript" src="js/search/autoSearch.js"></script>
        <!-- reservation -->
        <script type="text/javascript" src="js/reservation/autoFill.js"></script>
        <!-- /reservation -->
        <!-- member -->
        <script type="text/javascript" src="js/member/autoFill.js"></script>
        <!-- /member -->
        <script type="text/javascript" src="js/home/home.js"></script>
    </body>
</html>
