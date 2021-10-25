<?php
// Add theme support
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', ['aside', 'gallery']);
add_theme_support('html5');
add_theme_support('automatic-feed-links');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-logo');
add_theme_support('customize-selective-refresh-widgets'); 
add_theme_support('starter-content');

// Load in CSS

function wphierarchy_enqueue_styles(){
    wp_enqueue_style( 'main-css' ,get_stylesheet_directory_uri().'/style.css' , [] , time() , 'all');
}
add_action( 'wp_enqueue_scripts', 'wphierarchy_enqueue_styles');


// Register Menu Locations
 register_nav_menus(  [
        'main-menu' => esc_html__( 'Main Menu' , 'wpheirarchy' ),
        
 ]  );


 // Setup Widget Areas
 function wphierarchy_widgets_init(){
        $side_args = [
            'name'          => esc_html__('Main Sidebar1' , 'wphairirchy'),
            'id'            => 'main-sidebar',
            'description'   => esc_html__( 'Add widgets for Main sidebar here', 'wphierarchy'),
            'before_widget' => '<section class= "widget" >',
            'after_widget'  => '</section>' ,
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => "</h2>",
        ];

        register_sidebar($side_args);

        $footer_args = [
                    'name'          => 'Footer Sidebar 1',
                    'id'            => 'footer-sidebar-1',
                    'description'   => 'Appears in the footer area',
                    'before_widget' => '<section  class="footer-widget">',
                    'after_widget'  => '</section>',
                    'before_title'  => '<h3 class="widget-title">',
                    'after_title'   => '</h3>',
        ];
         register_sidebar($footer_args);

 }



 add_action( 'widgets_init' , 'wphierarchy_widgets_init'  );