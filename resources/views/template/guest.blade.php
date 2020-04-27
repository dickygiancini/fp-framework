<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ url('/assets/img/fav.png') }}">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
    <title>@yield('title')</title>
    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/4a262f6e85.js" crossorigin="anonymous"></script>
    <!--
		CSS
        ============================================= -->
        
	<link rel="stylesheet" href="{{ url('/assets/css/linearicons.css') }}">
	<link rel="stylesheet" href="{{ url('/assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ url('/assets/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ url('/assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ url('/assets/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ url('/assets/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ url('/assets/css/nouislider.min.css') }}">
	<link rel="stylesheet" href="{{ url('/assets/css/ion.rangeSlider.css') }}" />
	<link rel="stylesheet" href="{{ url('/assets/css/ion.rangeSlider.skinFlat.css') }}" />
	<link rel="stylesheet" href="{{ url('/assets/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ url('/assets/css/main.css') }}">
</head>
<body>
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ url('/') }}"><img src="{{ url('/assets/images/main_logo.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/list') }}">List</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
<!-- End Header Area -->
@yield('bodysec')

<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="single-footer-widget">
                    <h6 class="text-center">About Us</h6>
                    <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
                        magna aliqua.
                    </p>
                </div>
            </div>
        </div>
        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
            <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
        </div>
    </div>
</footer>
<!-- End footer Area -->

<script src="{{ url('/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
 crossorigin="anonymous"></script>
<script src="{{ url('/assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ url('/assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ url('/assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ url('/assets/js/jquery.sticky.js') }}"></script>
<script src="{{ url('/assets/js/nouislider.min.js') }}"></script>
<script src="{{ url('/assets/js/countdown.js') }}"></script>
<script src="{{ url('/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('/assets/js/owl.carousel.min.js') }}"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="{{ url('/assets/js/gmaps.min.js') }}"></script>
<script src="{{ url('/assets/js/main.js') }}"></script>
</body>

</html>