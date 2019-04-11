<?php

function add_theme_scripts(){
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/script.js', array(), null, true );
    wp_enqueue_script( 'jquery-script', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), null, true );
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), null, true );
    wp_enqueue_script( 'bootstrap-script', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function theme_styles(){
    wp_enqueue_style('theme-styles', get_stylesheet_uri(), array(), false, 'all');
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}


// Adds theme support for a custom logo
add_theme_support('custom-logo');

// Adds theme support for featued images
add_theme_support( 'post-thumbnails' );

// Adds theme support for title tags
add_theme_support( 'title-tag' );


// Registers main menu
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



// Customise nav menu
// wp_nav_menu(array(
//   'theme_location' => 'primary',
//   'container'      => 'ul',
//   'menu_class'     => 'nav navbar-nav main-nav'
// ));



// initialises widgets
function bibletopia_widgets_init() {

  register_sidebar( array(
    'name'          => 'Footer Widget One',
    'id'            => 'footer_widget_1',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ) );

  register_sidebar( array(
    'name'          => 'Footer Widget Two',
    'id'            => 'footer_widget_2',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ) );

  register_sidebar( array(
    'name'          => 'Footer Widget Three',
    'id'            => 'footer_widget_3',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ) );

}
add_action( 'widgets_init', 'bibletopia_widgets_init' );



// Removes some html from wordpress pagination
function sanitize_pagination($content) {
    // Remove role attribute
    $content = str_replace('role="navigation"', '', $content);

    // Remove h2 tag
    $content = preg_replace('#<h2.*?>(.*?)<\/h2>#si', '', $content);

    return $content;
}

add_action('navigation_markup_template', 'sanitize_pagination');


//Appends elipsis to post excerpts
function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');



?>