<?php 
/*
    Template Name: About Page
 */
    the_post();
    get_header();
?>
 <!-- =========================== Middle Content =========================== -->
 <div class="middle-content">
        <div class="container">
            <div class="row">
                <!-- ====================== Main .about-page-area ====================== -->
                <main class="col-sm-12 about-page-area">
                    <!-- ========== about-area ========== -->
                    <div class="author-info-area card pt-30 pb-30 border-0">
                       <?php the_post_thumbnail("large"); ?>
                        <!-- ========== card-body ========== -->
                        <div class="card-body p-0">
                            <h1 class="card-title text-center bottom-border-twist"><?php the_title();?></h1>
                            <?php the_content(); ?>
                        <!-- ========== /card-body ========== -->
                    </div>
                    <!-- ========== /about-area ========== -->
                </main>
                <!-- ====================== //Main .about-page-area====================== -->
            </div>
        </div>
    </div>
    <!-- =========================== //Middle Content =========================== -->
    <?php get_footer(); ?>