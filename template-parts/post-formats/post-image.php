<!-- Single Blog -->
<article class="card single-blog text-center col-lg-6">
    <mark class="catagory"><?php the_category(" ");?></mark>
    <h2 class="card-title h1"><?php echo esc_html(the_title());?></h2>
    <!-- Blog Content-->
    <div class="blgo-content">
        <a href="#"><img class="card-img rounded-0" src="assets/img/blog/4.jpg" alt="Blog Image"></a>
        <span class="posted-date"><?php the_date();?></span>
    </div>
    <!-- Card Body -->
    <?php  get_template_part("template-parts/common/blog");?>
</article>
<!-- //Single Blog -->