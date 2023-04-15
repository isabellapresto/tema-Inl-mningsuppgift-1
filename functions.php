<?php 
//support för tema 
function theme_support() {
 add_theme_support ('title_tag');
 //gör att man kam lägga till ny logga i wp (anländs inte nu men för framtiden)
 add_theme_support ('custom-logo');
 //bilder
 add_theme_support ('post-thumbnails');
 add_theme_support ('menus');
 add_theme_support ('widges');

} 

add_action('after_setup_theme','theme_support');

// nav meny och footer

// add_action ('after_setup_theme' , 'register_my_menu');


function menus (){

 $locations = array(
  'primary' => "Nav menu",
  'footer' => "Footer menu items",
  'side-menu' => "Sidebar menu"
 );

 register_nav_menus($locations);
}

add_action ('init','menus');

// register_sidebar();
// dynamic_sidebar();

//Köar in alla css-filer
function register_css_styles(){
wp_enqueue_style ('bootstarp_css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), 1.0, 'all'); 
wp_enqueue_style ('fontawsome', get_template_directory_uri() . '/assets/css/font-awsome.css', array(), 1.0, 'all'); 
wp_enqueue_style ('style', get_template_directory_uri() . '/assets/css/style.css', array(), 1.0, 'all');
}

add_action ('wp_enqueue_scripts', 'register_css_styles');

//Köar in JS


function register_script(){
 wp_enqueue_script ('script', get_template_directory_uri() . 'assets/js/script.js', array(), 1.0, true );
 wp_enqueue_script ('script', get_template_directory_uri() . 'assets/js/jquery.js', array(), 1.0, true );

}

add_action ('wp_enqueue_scripts', 'register_script');


function register_footer() {
 register_sidebar(
     array(
         'name'          => __( 'Footer', 'labb1' ),
         'id'            => 'footer',
         'description'   => __( 'Widgets i detta område visas i footern.', 'labb1' ),
         'before_widget' => '<div id="%1$s" class="widget %2$s">',
         'after_widget'  => '</div>',
         'before_title'  => '<h4 class="widget-title">',
         'after_title'   => '</h4>',
     )
 );
}
add_action( 'widgets_init', 'register_footer' );

dynamic_sidebar('testwidget');