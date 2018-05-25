<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ url('img/child_logo_black.png')}}">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Khitan Centre Sehat</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{ url('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
</head>
<body>
    <div class="main-wrapper-first">
        <header>
            <div class="container">
                <div class="header-wrap">
                    <div class="header-top d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="index.html" style="color:white"><img src="{{ url('img/child_logo.png')}}" style="width:30px;height:40px" alt=""> BONG SUPIT</a>
                        </div>
                        <div class="main-menubar d-flex align-items-center">
                            <nav class="hide">
                                <a href="index.html">Home</a>
                                <a href="generic.html">About</a>
                                <a href="elements.html">Profile</a>
                            </nav>
                            <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')
    
        <footer>
            <div class="container">
                <div class="footer-content d-flex justify-content-between align-items-center flex-wrap">
                    <div class="logo">
                        <img src="img/logo.png" alt="">
                    </div>
                    <div class="copy-right-text">Copyright &copy; 2018  |  All rights reserved to BONG SUPIT.
                        Template by <a href="https://getbootstrap.com" target="_blank">Bootstrap UI</a></div>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->
    </div>
</body>
</html>
