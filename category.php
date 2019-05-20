<?php get_header(); ?>
    <!-- =========================== Catagory Area =========================== -->
    <div class="catagory-area">
        <div class="container">
            <h1><?php single_cat_title(); ?></h1>
            <p><?php echo category_description()?></p>
        </div>
    </div>
    <!-- =========================== //Catagory Area =========================== -->
    <!-- =========================== Middle Content =========================== -->
    <div class="middle-content">
        <div class="container">
            <div class="row">
                <!-- ====================== Main .blog-area ====================== -->
                <main class="col-xl-8 col-lg-8 col-md-7 blog-area">
                    <!-- ========== Highlight Blog ========== -->
                    <!-- Single Blog -->

                    <!-- //Single Blog -->
                    <!-- =============== Recent Blog =============== -->
                    <div class="recent-blogs blog-grid row">
                        <?php if(!have_posts()):?>
                            <?php _e("There is no post in this category","hexa");?>
                        <?php endif; ?>
                        <?php 
                            while(have_posts()){
                                the_post();
                                get_template_part("template-parts/post-formats/post",get_post_format());
                            }
                        ?>                  
                   </div>
                    <!-- =============== //Recent Blog =============== -->
                    <!-- Blog Pagination -->
                    <nav class="blog-pagination pt-20 pb-20">
                        <ul class="justify-content-between pagination">
                            <li class="page-item newer-post disabled pl-15"><a class="page-link border-0 hvr-icon-back" href="#">Newer Post</a></li>
                            <li class="page-item older-post pr-15"><a class="page-link border-0 hvr-icon-forward" href="#">Older Post</a></li>
                        </ul>
                    </nav>
                    <!-- //Pagination -->
                </main>
                <!-- ====================== //Main .blog-area ====================== -->
                <!-- ====================== Aside .middle-sidebar ====================== -->
                <aside class="col-xl-3 col-lg-4 col-md-5 middle-sidebar ml-xl-auto pl-lg-0 pl-md-0 mt-sm-5 mt-lg-0">
                    <div class="row">
                        <!-- Sidebar Widget, About Me-->
                        <div class="col-xl-12 col-md-11 col-sm-6 ml-md-auto sidebar-about-me sidebar-widget pl-lg-0">
                            <h2 class="widget-title">ABOUT ME</h2>
                            <div class="card about-me text-center border-0 rounded-0 p-15">
                                <img class="card-img-top rounded-0" src="assets/img/sidebar/1.jpg" alt="image cap">
                                <div class="card-body p-0">
                                    <h2 class="card-title mt-15 mb-15">John Moris</h2>
                                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                                    <div class="icon-list">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Widget, All Catagory-->
                        <div class="col-xl-12 col-md-11 col-sm-6 ml-md-auto sidebar-catagory sidebar-widget pl-lg-0">
                            <h2 class="widget-title">CATAGORY</h2>
                            <div class="card all-catagory border-0 rounded-0 pt-30 pb-30">
                                <div class="card-header font-weight-bold d-flex justify-content-between align-item-center border-0 py-2 px-3">
                                    <span>All Catagory</span><span>100</span>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item border-0 py-2 px-3"><a class="d-flex justify-content-between align-item-center" href="#"><span>Travel</span><span>20</span></a></li>
                                    <li class="list-group-item border-0 py-2 px-3"><a class="d-flex justify-content-between align-item-center" href="#"><span>Life Style</span><span>10</span></a></li>
                                    <li class="list-group-item border-0 py-2 px-3"><a class="d-flex justify-content-between align-item-center" href="#"><span>Fashion </span><span>30</span></a></li>
                                    <li class="list-group-item border-0 py-2 px-3"><a class="d-flex justify-content-between align-item-center" href="#"><span>Nature</span><span>40</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar Widget, Latest Post-->
                        <div class="col-xl-12 col-md-11 col-sm-6 ml-md-auto sidebar-latest-post sidebar-widget pl-lg-0">
                            <h2 class="widget-title">LATEST POST</h2>
                            <div class="latest-post owl-carousel p-15">
                                <!-- Sub Post Slide-Item -->
                                <div class="sub-post slide-item">
                                    <div class="post-content hvr-rectangle-out">
                                        <a href="#"><img src="assets/img/sidebar/2.jpg" alt="Blog Post"></a>
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
                                <!-- Sub Post Slide-Item -->
                                <div class="sub-post slide-item">
                                    <div class="post-content hvr-rectangle-out">
                                        <a href="#"><img src="assets/img/sidebar/2.jpg" alt="Blog Post"></a>
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
                                <!-- Sub Post Slide-Item -->
                                <div class="sub-post slide-item">
                                    <div class="post-content hvr-rectangle-out">
                                        <a href="#"><img src="assets/img/sidebar/2.jpg" alt="Blog Post"></a>
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
                                <!-- Sub Post Slide-Item -->
                                <div class="sub-post slide-item">
                                    <div class="post-content hvr-rectangle-out">
                                        <a href="#"><img src="assets/img/sidebar/2.jpg" alt="Blog Post"></a>
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
                                <!-- Sub Post Slide-Item -->
                                <div class="sub-post slide-item">
                                    <div class="post-content hvr-rectangle-out">
                                        <a href="#"><img src="assets/img/sidebar/2.jpg" alt="Blog Post"></a>
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
                        <!-- Sidebar Widget, Sidebar News Letter -->
                        <div class="col-xl-12 col-md-11 col-sm-6 ml-md-auto sidebar-news-letter sidebar-widget pl-lg-0">
                            <h2 class="widget-title">NEWS LETTER</h2>
                            <!-- New Letter-->
                            <div class="card news-letter border-0 rounded-0 p-15">
                                <div class="card-body p-0">
                                    <p class="card-text">If You Want to Know Our Update News Please Subscribe Us.</p>
                                    <form class="form-inline" action="#" method="get">
                                        <input type="text" placeholder="Enter your mail id">
                                        <button type="submit"><i class="fa fa-envelope"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Widget, Sidebar Popular Post -->
                        <div class="col-xl-12 col-md-11 col-sm-6 ml-md-auto sidebar-popular-post sidebar-widget pl-lg-0">
                            <h2 class="widget-title">POPULAR POST</h2>
                            <!-- Popular Post -->
                            <div class="popular-post p-15">
                                <ul>
                                    <!-- List -->
                                    <li>
                                        <a href="#">
                                            <img class="small-img" src="assets/img/sidebar/3.jpg" alt="Image">
                                            <div class="post-info">
                                                <h3>Scented Monkey on A Tree in Amazon</h3>
                                                <span>25 Jan, 2016</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- List -->
                                    <li>
                                        <a href="#">
                                            <img class="small-img" src="assets/img/sidebar/4.jpg" alt="Image">
                                            <div class="post-info">
                                                <h3>Beautiful Girl in Forest Turning Her Back</h3>
                                                <span>25 Jan, 2016</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- List -->
                                    <li>
                                        <a href="#">
                                            <img class="small-img" src="assets/img/sidebar/5.jpg" alt="Image">
                                            <div class="post-info">
                                                <h3>Rusted Wagon with Grafitti Art Alone in The</h3>
                                                <span>25 Jan, 2016</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- List -->
                                    <li>
                                        <a href="#">
                                            <img class="small-img" src="assets/img/sidebar/6.jpg" alt="Image">
                                            <div class="post-info">
                                                <h3>Iguluna Showing her face in a Forest</h3>
                                                <span>25 Jan, 2016</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar Widget, Sidebar Advertise -->
                        <div class="col-xl-12 col-md-11 col-sm-6 ml-md-auto sidebar-advertise sidebar-widget pl-lg-0">
                            <h2 class="widget-title">ADVERTISE</h2>
                            <!-- ADVERTISE-->
                            <div class="card advertise border-0 rounded-0 p-15">
                                <div class="advertise-content">
                                    <img class="card-img" src="assets/img/sidebar/7.jpg" alt="Card image">
                                    <div class="card-text">
                                        <span>270x370</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Widget, Sidebar Cloud Tag -->
                        <div class="col-xl-12 col-sm-11 ml-md-auto sidebar-cloud-tag sidebar-widget pl-xl-0">
                            <h2 class="widget-title">CLOUD TAG</h2>
                            <!-- ADVERTISE-->
                            <div class="card cloud-tag border-0 rounded-0">
                                <ul class="tag-list d-flex flex-wrap">
                                    <li><a href="#">life style</a></li>
                                    <li><a href="#">travel</a></li>
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">nature</a></li>
                                    <li><a href="#">creative</a></li>
                                    <li><a href="#">beautiful</a></li>
                                    <li><a href="#">animal</a></li>
                                    <li><a href="#">marketing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- ====================== //Aside .middle-sidebar ====================== -->
            </div>
        </div>
    </div>
    <!-- =========================== //Middle Content =========================== -->
<?php get_footer(); ?>