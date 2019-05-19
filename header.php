<!DOCTYPE html>
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

    <!-- favicon Icon -->
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon"/>
    <!-- Stylesheets -->

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
        <?php  get_template_part("template-parts/common/nav");?>
    </header>
    <!-- =========================== //Main Header =========================== -->
    <!-- =========================== Banner Post =========================== -->
    <?php
        if(is_home()){
            get_template_part("template-parts/blog-home/featured");
        }
    ?>
    <!-- =========================== //Banner Post =========================== -->