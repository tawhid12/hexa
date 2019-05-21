<?php 
/*
    Template Name: Contact Page
 */
the_post();
get_header();
?>
   <!-- =========================== Middle Content =========================== -->
    <div class="middle-content">
        <div class="container">
            <div class="row">
                <!-- ====================== Main .about-page-area ====================== -->
                <main class="col-sm-12 contact-page-area">
                    <!-- ========== about-area ========== -->
                    <div class="contact-info-area card pt-30 pb-30 border-0">
                       <?php the_post_thumbnail("large")?>
                        <!-- ==========  contact-area ========== -->
                        <div class="row pt-30">
                            <div class="col-lg-6 contact-form mb-5 mb-lg-0">
                                <h2 class="area-title">GET A CALL BACK</h2>
                                <!-- ==========  Form ========== -->
                                <?php
                                if(get_field("contact_form_short_code")){
                                    echo do_shortcode(get_field("contact_form_short_code"));
                                }
                                ?>
                                <!-- ==========  Form ========== -->
                            </div>
                            <div class="col-lg-5 ml-auto">
                                <h2 class="area-title">GET IN TOUCH</h2>
                                <!-- ========== jumbotron ========== -->
                                <div class="jumbotron rounded-0 pt-50 pb-50 pl-30 pr-30">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="fa fa-phone"></i> <span>+1724 934 0434</span></li>
                                        <li class="d-flex align-items-center"><i class="fa fa-paper-plane"></i> <span>KellyRVaughn@teleworm.us</span></li>
                                        <li class="d-flex align-items-center"><i class="fa fa-street-view"></i> <span>3214 Spruce Drive <br> Wexford, PA 15090</span></li>
                                    </ul>
                                </div>
                                <!-- ========== /jumbotron ========== -->
                            </div>
                        </div>
                        <!-- ========== /contact-area ========== -->
                    </div>
                    <!-- ========== /about-area ========== -->
                </main>
                <!-- ====================== //Main .about-page-area====================== -->
            </div>
        </div>
    </div>
    <!-- =========================== //Middle Content =========================== -->
    <?php get_footer(); ?>