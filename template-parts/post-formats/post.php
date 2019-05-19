<!-- Single Blog ===== NO Image Post ===== -->
<article class="card single-blog no-image-post text-center col-lg-6">
    <div class="inner-wrap">
        <mark class="catagory"><?php the_category(" ");?></mark>
        <h2 class="card-title h1"><?php echo esc_html(the_title());?></h2>
        <!-- Blog Content-->
        <div class="blgo-content">
            <span class="posted-date"><?php the_date();?></span>
        </div>
        <?php  get_template_part("template-parts/common/blog");?>
    </div>
</article>
<!-- //Single Blog -->