<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <base href="{{asset('')}}">
        <meta name="csrf-token" value="{{csrf_token()}}">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>YAKI</title>

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
        <!-- Custom livechat-fb -->
        <link type="text/css" rel="stylesheet" href="layout/css/livechat-fb.css" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
    <body>
    
        {{-- fb-live chat --}}
        <div class="fb-livechat">
            <div class="ctrlq fb-overlay"></div>
            <div class="fb-widget">
                <div class="ctrlq fb-close"></div>
                <div class="fb-page" data-href="https://www.facebook.com/lge.vietnam/" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false"> </div>
                <div class="fb-credit"> </div>
                <div id="fb-root"></div>
            </div>
            <a href="https://www.facebook.com/lge.vietnam/" title="Gửi tin nhắn cho chúng tôi qua Facebook" class="ctrlq fb-button">
                <div class="bubble">1</div>
                <div class="bubble-msg">Bạn cần hỗ trợ?</div>
            </a>
        </div>
        <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="layout/js/livechat-fb.js"></script>
        {{-- /fb-livechat --}}
        @include('header')
        @yield('content')
        @include('footer')
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
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script type="text/javascript" src="layout/js/google-map.js"></script>
        <script type="text/javascript" src="layout/js/main.js"></script>
    </body>
</html>
