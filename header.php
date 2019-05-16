<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from theimran.com/hexa/hexa/home1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Dec 2018 17:23:19 GMT -->
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Title -->
    <title>Home-1 | Hexa Personal Blog</title>
    <!-- favicon Icon -->
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon"/>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/stylesheets/main.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
    <!-- site content here -->
    <!-- =========================== Main Header =========================== -->
    <header class="main-header">
        <!-- .header-top-->
        <div class="header-top">
            <div class="container h-100">
                <div class="row justify-content-between align-items-center h-100">
                    <div class="icons col col-sm-6">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <!-- .select-lang -->
                    <form class="col col-sm-6 d-flex justify-content-md-end select-lang" action="#" method="get">
                        <div class="form-item">
                            <input class="country_selector" type="text">
                        </div>
                    </form>
                    <!-- //.select-lang -->
                </div>
            </div>
        </div>
        <!-- //.header-top-->
        <!-- .site-branding -->
        <div class="site-branding">
            <nav class="h-100 navbar">
                <div class="container h-100">
                    <div class="h-100 row w-100">
                        <a class="align-items-center col-sm-12 d-flex justify-content-center navbar-brand w-100" href="index.html"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- //.site-branding -->
        <nav class="navbar main-nav navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler m-menu-btn" type="button" data-toggle="collapse" data-target="#mainNav">
                    <span></span>
                </button>
                <div class="collapse navbar-collapse" id="">
                    <!--navbar nav-->
                    <?php 
                    $hexa_menu = wp_nav_menu(array(
                        'theme_location' => 'topmenu',
                        'menu_id' => 'mainNav',
                        'menu_class' => 'navbar-nav'
                    ));
                    echo $hexa_menu;
                    ?>
                </div>
                <!--search form-->
                <form class="form-inline ml-auto" action="#" method="get">
                    <input class="form-control border-0 " type="search" placeholder="write something">
                </form>
            </div>
        </nav>
    </header>
    <!-- =========================== //Main Header =========================== -->
    <!-- =========================== Banner Post =========================== -->
    <div class="banner-post">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <!-- big post-->
                    <div class="big-post">
                        <img src="assets/img/banner/1.jpg" alt="Blog Post">
                        <!-- post text -->
                        <div class="big-post-text">
                            <div class="inner-wrap">
                                <mark class="catagory">Nature</mark>
                                <h1>A Green Agulina on a Tree in a Big Forest</h1>
                                <a href="#" class="read-more double-line">read more</a>
                            </div>
                        </div>
                        <!-- posted date -->
                        <span class="posted-date">26 Jan, 2016</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 mt-md-0 mt-sm-4 mt-4">
                    <div class="h-100 row banner-sidebar">
                        <!-- sub post -->
                        <div class="col-md-12 col-sm-6 col-6 align-self-md-start">
                            <div class="sub-post">
                                <div class="post-content hvr-rectangle-out">
                                    <a href="#"><img src="assets/img/banner/2.jpg" alt="Blog Post"></a>
                                    <!-- post text -->
                                    <div class="sub-post-text ">
                                        <div class="inner-wrap">
                                            <mark class="catagory">Life Style</mark>
                                            <h2>Young Woman Walking Alone in The Park in Snowy Weather</h2>
                                            <a href="#" class="read-more double-line">read more</a>
                                        </div>
                                    </div>
                                    <!-- posted date -->
                                    <span class="posted-date">26 Jan, 2016</span>
                                </div>
                            </div>
                        </div>
                        <!-- sub post -->
                        <div class="col-md-12 col-sm-6 col-6 align-self-md-end">
                            <div class="sub-post">
                                <div class="post-content hvr-rectangle-out">
                                    <a href="#"><img src="assets/img/banner/3.jpg" alt="Blog Post"></a>
                                    <!-- post text -->
                                    <div class="sub-post-text ">
                                        <div class="inner-wrap">
                                            <mark class="catagory">Life Style</mark>
                                            <h2>Young Woman Walking Alone in The Park in Snowy Weather</h2>
                                            <a href="#" class="read-more double-line">read more</a>
                                        </div>
                                    </div>
                                    <!-- posted date -->
                                    <span class="posted-date">26 Jan, 2016</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =========================== //Banner Post =========================== -->