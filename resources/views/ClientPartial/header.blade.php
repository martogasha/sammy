<!DOCTYPE html>
<html>


<!-- Mirrored from tf.wpcheatsheet.net/html/cafe-duke/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 May 2020 01:43:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cafe Duke</title>

    <!-- === webfont=== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <!-- === favicon=== -->
    <link href="img/fevicon.png" rel="shortcut icon">
    <!-- === Bootstrap=== -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- === owl carousel === -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- === animate === -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- === font awesome === -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- === slick nav === -->
    <link rel="stylesheet" href="css/slicknav.min.css">
    <!-- === Main css === -->
    <link rel="stylesheet" href="css/custom/style.css">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!--preloader area Start-->
<div class="preloader">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
<!--preloader area end-->
<!--Hero area Start-->
<div class="hero_area">
    <!--header area Start-->
    <header>
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="header_contact">
                            <a href="tel:+880235240251"><i class="fa fa-phone" aria-hidden="true"></i> +88 023 524 0251</a>
                            <a href="mailto:Cafeduke@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>Cafeduke@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-sm-7">
                            <span class="header_time">
                               OPENING HOUR : SUNDAT - FRIDAY  | 9 AM - 10 PM
                           </span>
                        <a href="{{url('cart')}}" class="cart_btn">
                            CART<i class="fa fa-cart-arrow-down" aria-hidden="true"></i> <span class="cart_quentity">0</span>
                        </a>
                </div>
                </div>

            </div>
            <form action="{{route('logout')}}" method="post">
                @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
            </form>
            <div class="header_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <nav class="menu_bar">
                            <ul class="main_menu">
                                <li><a href="{{url('/')}}">HOME</a></li>
                                <li><a href="">ABOUT</a></li>
                                <li><a href="">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-sm-3">
                        <a href="index-2.html" class="log"><img src="img/logo.png" alt=""></a>
                    </div>
                    <div class="col-sm-4">
                        <form action="#" class="search_bar">
                            <input type="text" placeholder="Search your food name here">
                            <a href="#" class="search_btn"><i class="fa fa-search" aria-hidden="true"></i> </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
