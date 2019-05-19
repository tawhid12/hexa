<?php 
    the_post();
    get_header();
?>
<!-- =========================== Middle Content =========================== -->
<div class="middle-content pt-50">
        <div class="container">
            <div class="row">
                <!-- ====================== Main .blog-area ====================== -->
                <main class="col-xl-8 col-lg-8 col-md-7 blog-details-area">
                    <!-- ================= Full Post ================= -->
                    <article class="card full-post border-0">
                        <mark class="catagory text-center"><?php the_category(); ?></mark>
                        <h2 class="card-title text-center h1"><?php the_title(); ?></h2>
                        <!-- Blog Content-->
                        <div class="blgo-content">
                            <?php the_post_thumbnail();?>
                            <span class="posted-date"><?php the_date();?></span>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body blog-texts p-0">
                            <span class="posted-by mt-20 mb-20 d-block">Posted By <mark class="admin"><?php the_author();?></mark></span>
                            <p class="card-text"><?php the_content();?></p>
                            
                        </div>
                        <!--  Quotes  -->
                        <!--<div class="quotes">
                            <p class="text-center mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi <i class="fa fa-quote-right"></i></p>
                        </div>-->
                        <!--<p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur</p>-->
                        <!-- Card List -->
                        <div class="card card-list border-0">
                            <h2 class="card-title">The standard Lorem Ipsum passage, used since the 1500s</h2>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item border-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</li>
                                <li class="list-group-item border-0">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus,</li>
                                <li class="list-group-item border-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled</li>
                            </ul>
                            <p class="card-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi</p>
                            <!-- Card Footer -->
                            <div class="align-items-center bg-white border-0 card-footer d-flex flex-column flex-lg-row justify-content-md-between p-0">
                                <div class="share-icons w-50">
                                    <span>Share:</span>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                                <div class="tags">
                                    <?php the_tags(" "," "," ");?>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- ================= /Full Post ================= -->
                    <!-- =============== //Recent Blog =============== -->
                    <!-- =============== Blog Pagination =============== -->
                    <nav class="blog-pagination">
                        <ul class="justify-content-between pagination">
                            <li class="page-item newer-post pl-15"><a class="page-link border-0 hvr-icon-back" href="#">Previews Post</a></li>
                            <li class="page-item older-post pr-15"><a class="page-link border-0 hvr-icon-forward" href="#">Next Post</a></li>
                        </ul>
                    </nav>
                    <!-- //Pagination -->
                    <!-- Author Box -->
                    <div class="author-box row">
                        <div class="col-xl-2  col-lg-3 text-center">
                            <?php get_avatar(get_the_author_meta())?>
                            <div class="icon-list">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-9">
                            <div class="card author-info border-0">
                                <h2 class="card-title"><?php the_author();?></h2>
                                <div class="card-body p-0">
                                    <p class="card-text"><?php the_author_meta("description");?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //Author Box -->
                    <!-- ================= Comment Area ================= -->
                    <div class="comments-area">
                        <div class="comments-title">
                            <h5 class="h1">Comments</h5>
                            <p class="disabled">There are no comment</p>
                        </div>
                        <div class="comments-from">
                            <h2 class="widget-title">LEAVE A COMMENT</h2>
                            <form action="#" method="post">
                                <div class="form-group d-flex justify-content-between mb-20">
                                    <input type="text" name="Name" class="form-control mr-30" id="comment-name" placeholder="Name *" required>
                                    <input type="email" name="Email" class="form-control" id="comment-email" placeholder="Email *" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="Message" class="form-control w-100" id="comment-textarea" placeholder="Message *" required></textarea>
                                </div>
                                <button class="submit" type="submit">COMMENT</button>
                            </form>
                        </div>
                    </div>
                    <!-- ================= //Comment Area ================= -->
                    <!-- ================= Releted post ================= -->
                    <div class="releted-post">
                        <h2 class="widget-title">RELATED POST</h2>
                        <div class="row align-items-end">
                            <!-- Single Blog -->
                            <article class="card single-blog text-center border-0 mb-4 mb-lg-0 col-lg-4 col-sm-6">
                                <a href="#">
                                    <mark class="catagory">Life Style</mark>
                                    <h3 class="card-title">Rusted Wagon with Grafitti Art Alone in The</h3>
                                    <!-- Blog Content-->
                                    <div class="blgo-content">
                                        <img class="card-img rounded-0" src="assets/img/blog-details/3.jpg" alt="Blog Image">
                                        <span class="posted-date">26 Jan, 2016</span>
                                    </div>
                                </a>
                            </article>
                            <!-- //Single Blog -->
                            <!-- Single Blog -->
                            <article class="card single-blog text-center border-0 mb-4 mb-lg-0 col-lg-4 col-sm-6">
                                <a href="#">
                                    <mark class="catagory">Life Style</mark>
                                    <h3 class="card-title">Young Woman Walking Alone in The Park in Weather</h3>
                                    <!-- Blog Content-->
                                    <div class="blgo-content">
                                        <img class="card-img rounded-0" src="assets/img/blog-details/4.jpg" alt="Blog Image">
                                        <span class="posted-date">26 Jan, 2016</span>
                                    </div>
                                </a>
                            </article>
                            <!-- //Single Blog -->
                            <!-- Single Blog -->
                            <article class="card single-blog text-center border-0 mb-4 mb-lg-0 col-lg-4 col-sm-6">
                                <a href="#">
                                    <mark class="catagory">Life Style</mark>
                                    <h3 class="card-title">Iguluna Showing her face in a Forest</h3>
                                    <!-- Blog Content-->
                                    <div class="blgo-content">
                                        <img class="card-img rounded-0" src="assets/img/blog-details/5.jpg" alt="Blog Image">
                                        <span class="posted-date">26 Jan, 2016</span>
                                    </div>
                                </a>
                            </article>
                            <!-- //Single Blog -->
                        </div>
                    </div>
                    <!-- ================= //Releted post ================= -->
                </main>
                <!-- ====================== //Main .blog-area ====================== -->
                <!-- ====================== Aside .middle-sidebar ====================== -->
                <aside class="col-xl-3 col-lg-4 col-md-5 middle-sidebar ml-xl-auto pl-lg-0 pl-md-0 mt-sm-5 mt-lg-0">
                    <div class="row">
                        <!-- Sidebar Widget, About Me-->
                        <div class="col-xl-12 col-md-11 col-sm-6 ml-lg-auto ml-md-auto sidebar-about-me sidebar-widget pl-xl-0">
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
                        <div class="col-xl-12 col-md-11 col-sm-6 ml-lg-auto ml-md-auto sidebar-catagory sidebar-widget pl-xl-0">
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
                        <div class="col-xl-12 col-md-11 col-sm-6 ml-lg-auto ml-md-auto sidebar-latest-post sidebar-widget pl-xl-0">
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
                        <div class="col-xl-12 col-md-11 col-sm-6 ml-lg-auto ml-md-auto sidebar-news-letter sidebar-widget pl-xl-0">
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
                        <div class="col-xl-12 col-md-11 col-sm-6 ml-lg-auto ml-md-auto sidebar-popular-post sidebar-widget pl-xl-0">
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
                        <div class="col-xl-12 col-md-11 col-sm-6 ml-lg-auto ml-md-auto sidebar-advertise sidebar-widget pl-xl-0">
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