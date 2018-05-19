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
        <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5af98a525f7cdf4f05342ddd/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
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
    </body>
</html>
