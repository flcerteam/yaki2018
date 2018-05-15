<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <base href="{{asset('')}}">
        <meta name="csrf-token" value="{{csrf_token()}}">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>{{ config('app.name') }}</title>

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
        <link type="text/css" rel="stylesheet" href="layout/css/image-size.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.2.5/jquery.bootstrap-touchspin.css" />

        
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
    <body>
    
        {{-- fb-live chat --}}
        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        
        <!-- Your customer chat code -->
        <div class="fb-customerchat"
          attribution="setup_tool"
          page_id="1417676308332466"
          logged_in_greeting="Xin Chào! Yaki có thể giúp gì được bạn."
          logged_out_greeting="Xin Chào! Yaki có thể giúp gì được bạn.">
        </div>
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
        <script type="text/javascript" src="js/cart/cart.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.2.5/jquery.bootstrap-touchspin.js"></script>
        <script type="text/javascript" src="js/checkout/checkout.js"></script>
        <!-- lib for autosearch-->
        <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
        <script type="text/javascript" src="/js/search/autoSearch.js"></script>
        <!-- reservation -->
        <script type="text/javascript" src="js/reservation/autoFill.js"></script>
        <!-- /reservation -->
        <!-- member -->
        <script type="text/javascript" src="js/member/autoFill.js"></script>
        <!-- /member -->
    </body>
    <script type="text/javascript">
        // this will get the full URL at the address bar
        var url = window.location.href;
        // passes on every "a" tag
        $(".main-nav a").each(function() {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                 $(this).closest("li").addClass("active");
				 $(this).parents('li').addClass('parent-active');
            }
        });
    </script>
</html>
