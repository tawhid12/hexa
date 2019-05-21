<?php get_header(); ?>
    <!-- =========================== Catagory Area =========================== -->
    <div class="catagory-area">
        <div class="container">
            <div class="catagory-slider owl-carousel">
                <!-- Catagory -->
                <div class="catagory hvr-shutter-out-horizontal">
                    <img src="assets/img/catagory/1.jpg" alt="catagory">
                    <div class="catagory-text">
                        <a href="#" class="read-more double-line">read more</a>
                    </div>
                </div>
                <!-- Catagory -->
                <div class="catagory hvr-shutter-out-horizontal">
                    <img src="assets/img/catagory/2.jpg" alt="catagory">
                    <div class="catagory-text">
                        <a href="#" class="read-more double-line">read more</a>
                    </div>
                </div>
                <!-- Catagory -->
                <div class="catagory hvr-shutter-out-horizontal">
                    <img src="assets/img/catagory/3.jpg" alt="catagory">
                    <div class="catagory-text">
                        <a href="#" class="read-more double-line">read more</a>
                    </div>
                </div>
                <!-- Catagory -->
                <div class="catagory hvr-shutter-out-horizontal">
                    <img src="assets/img/catagory/4.jpg" alt="catagory">
                    <div class="catagory-text">
                        <a href="#" class="read-more double-line">read more</a>
                    </div>
                </div>
            </div>
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
                    <article class="highlight-blog card single-blog text-center mb-sm-0 pt-0">
                        <mark class="catagory">Life Style</mark>
                        <h2 class="card-title h1">Young Blonde Walking Towards Union Square in SF</h2>
                        <!-- Blog Content-->
                        <div class="blgo-content">
                            <a href="#"><img class="card-img rounded-0" src="assets/img/blog/1.jpg" alt="Blog Image"></a>
                            <span class="posted-date">26 Jan, 2016</span>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body p-0">
                            <span class="posted-by">Posted By <mark class="admin">Admin</mark></span>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <a href="standard_blog_detail.html" class="read-more double-line">read more</a>
                            <!-- Card Footer -->
                        </div>
                        <div class="card-footer border-0 p-0 bg-white">
                            <div class="share-icons">
                                <span>Share:</span>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </article>
                    <!-- //Single Blog -->
                    <!-- =============== Recent Blog =============== -->
                    <div class="recent-blogs blog-grid row">
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
                    <?php
                        if(is_active_sidebar("side")){
                            dynamic_sidebar("side");
                        }
                    ?>
                    </div>
                </aside>
                <!-- ====================== //Aside .middle-sidebar ====================== -->
            </div>
        </div>
    </div>
    <!-- =========================== //Middle Content =========================== -->
<?php get_footer(); ?>