<?php
function learningWordPress_resources(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'learningWordPress_resources');

//theme sutup
function learnngWordPress_setup(){
    //Navigation Menus
    register_nav_menus(array(
        'primary' => __( 'Primary Menu'),
        'footer' => __( 'Footer Menu'),
    ));
    ///add feature image suport
    add_theme_support('post-thumbnails');
    add_image_size('small-thambnail', '100%','100%' , true);
    add_image_size('banner-image', 920, 210, array('left','top'));
    //add post format support
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}
add_action('after_setup_theme','learnngWordPress_setup' );

//widgets location
function ourWidgetsInits(){
    register_sidebar( array(
        'name' => 'About Blogin',
        'id' => 'sidebar1',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ));
    register_sidebar( array(
        'name' => 'Search',
        'id' => 'sidebar2',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ));
    register_sidebar( array(
        'name' => 'Stay Tuned',
        'id' => 'sidebar3',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ));

}
add_action('widgets_init','ourWidgetsInits');

 ?>