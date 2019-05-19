<!-- Single Blog, Slider Blog -->
<article class="card single-blog slider-blog text-center col-lg-6 ">
    <mark class="catagory"><?php the_category(" ");?></mark>
    <h2 class="card-title h1"><?php echo esc_html(the_title());?></h2>
    <!-- Blog Content-->
    <div class="blgo-content">
        <div class="slider-blog-img owl-carousel">
            <a href="#"><img class="card-img rounded-0" src="assets/img/blog/7.jpg" alt="Blog Image"></a>
            <a href="#"><img class="card-img rounded-0" src="assets/img/blog/7.jpg" alt="Blog Image"></a>
            <a href="#"><img class="card-img rounded-0" src="assets/img/blog/7.jpg" alt="Blog Image"></a>
        </div>
        <span class="posted-date"><?php the_date();?></span>
    </div>
    <!-- Card Body -->
    <?php  get_template_part("template-parts/common/blog");?>
</article>
<!-- //Single Blog, Slider Blog -->