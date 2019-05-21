<?php
require_once get_template_directory() . '/inc/tgm.php';
function hexa_theme_setup(){
    load_theme_textdomain("hexa");
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_theme_support("html5",array("search-form","comment-list"));
    add_theme_support("post-formats",array("image","gallery","video"));
    register_nav_menu('topmenu',__('Top Menu','hexa'));
}
add_action("after_setup_theme","hexa_theme_setup");
function hexa_asset(){
    wp_enqueue_style("hexa-text1","//fonts.googleapis.com/css?family=Droid+Serif:400,400i");
    wp_enqueue_style("hexa-text2","//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i");
    wp_enqueue_style("hexa-font-awesome","//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style("hexa-css",get_theme_file_uri("/assets/stylesheets/main.css"),null,"2.0");
    wp_enqueue_style("hexa-wp-style",get_stylesheet_uri(),null,"2.0");
    wp_enqueue_script("hexa-mordanizer",get_theme_file_uri("/assets/js/vendor/modernizr-3.5.0.min.js"),null,"2.0");
    wp_enqueue_script("hexa-plugin",get_theme_file_uri("/assets/js/plugins.js"),array("jquery"),"2.0");
    wp_enqueue_script("hexa-main",get_theme_file_uri("/assets/js/main.js"),array("jquery"),"2.0");
}
add_action("wp_enqueue_scripts","hexa_asset");
function hexa_widgets(){
    register_sidebar(array(
        'name' => __('side bar','hexa'),
        'id'   => 'side',
        'description' => __('this is only for side bar <3','hexa'),
        'before_widget' => '<div class"=col-xl-12 col-md-11 col-sm-6 ml-md-auto sidebar-about-me sidebar-widget pl-lg-0">',
        'after_widget' => '<div>',
        'before_title' =>'<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
}
add_action('widgets_init','hexa_widgets');
