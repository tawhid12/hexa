<?php
function hexa_theme_setup(){
    load_theme_textdomain("hexa");
    add_theme_support("title-tag");
    add_theme_support("post-thumbnail");
    add_theme_support("html5",array("search-form","comment-list"));
    add_theme_support("post-formats",array("image","gallery","video"));
    register_nav_menu('topmenu',__('Top Menu','hexa'));
}
add_action("after_setup_theme","hexa_theme_setup");
function hexa_asset(){
    wp_enqueue_style("hexa-css",get_theme_file_uri("/assets/stylesheets/main.css"),null,"2.0");
    wp_enqueue_style("hexa-wp-style",get_stylesheet_uri(),null,"2.0");
    wp_enqueue_script("hexa-mordanizer",get_theme_file_uri("/assets/js/vendor/modernizr-3.5.0.min.js"),null,"2.0");
    wp_enqueue_script("hexa-plugin",get_theme_file_uri("/assets/js/plugins.js"),array("jquery"),"2.0");
    wp_enqueue_script("hexa-main",get_theme_file_uri("/assets/js/main.js"),array("jquery"),"2.0");
}
add_action("wp_enqueue_scripts","hexa_asset");