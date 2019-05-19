<?php
$hexa_fp = new WP_Query(
    array(
        'meta_key' => 'featured',
        'meta_value' => 1,
        'posts_per_page' => 3,
    )
);
while($hexa_fp->have_posts()){
    $hexa_fp->the_post();
    $cat = get_the_category();
    $post_data[] = array(
        'title' => get_the_title(),
        'date' => get_the_date(),
        'thumbnail' =>get_the_post_thumbnail_url(),
        'cat' => $cat[mt_rand(0,count($cat)-1)]->name
    );
}
if($hexa_fp->post_count>=1):
?>
<div class="banner-post">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <!-- big post-->
                    <div class="big-post">
                        <img src="<?php echo esc_url($post_data[0]["thumbnail"]); ?>" alt="Blog Post">
                        <!-- post text -->
                        <div class="big-post-text">
                            <div class="inner-wrap">
                                <mark class="catagory"><?php echo esc_html($post_data[0]["cat"]); ?></mark>
                                <h1><?php echo esc_html($post_data[0]["title"]); ?></h1>
                                <a href="<?php the_permalink();?>" class="read-more double-line">read more</a>
                            </div>
                        </div>
                        <!-- posted date -->
                        <span class="posted-date"><?php echo esc_html($post_data[0]["date"]); ?></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 mt-md-0 mt-sm-4 mt-4">
                    <div class="h-100 row banner-sidebar">
                        <!-- sub post -->
                        <?php for($i=1; $i<3; $i++): ?>
                        <div class="col-md-12 col-sm-6 col-6 align-self-md-start">
                            <div class="sub-post">
                                <div class="post-content hvr-rectangle-out">
                                    <a href="#"><img src="<?php echo esc_url($post_data[$i]["thumbnail"]); ?>" alt="Blog Post"></a>
                                    <!-- post text -->
                                    <div class="sub-post-text ">
                                        <div class="inner-wrap">
                                            <mark class="catagory">Life Style</mark>
                                            <h2><?php echo esc_html($post_data[$i]["title"]); ?></h2>
                                            <a href="<?php the_permalink();?>" class="read-more double-line">read more</a>
                                        </div>
                                    </div>
                                    <!-- posted date -->
                                    <span class="posted-date"><?php echo esc_html($post_data[$i]["date"]); ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif ?>