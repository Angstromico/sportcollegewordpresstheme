<?php
//Reusable queries
require get_template_directory() . '/includes/queries.php';
//When the theme is activated
function sportCollegeSetup() {
    //Enable featured images
    add_theme_support('post-thumbnails');
    //SEO's Titles
    add_theme_support('title-tag');
    //Add custom size images
    add_image_size('square', 1000, 800, true);
    add_image_size('classes', 737, 380, true);
    add_image_size('blog', 750, 300, true);
    add_image_size('midle', 500, 400, true);
}
add_action('after_setup_theme', 'sportCollegeSetup');
/*if (! function_exists('sportCollegeMenus()') ) {
    function sportCollegeMenus() {
        register_nav_menu (array(
            "primary_menu "=> __( "Primary Menu", "manuel-sport" ),
            "footer_menu"  => __( "Footer Menu", "manuel-sport "),
        ));
    }
    add_option('init', 'sportCollegeMenus');
}*/
//Navegation Menus
register_nav_menus([
    'first' => 'primary_menu',
    'second' => 'footer_Menu',
    'third' => 'sidebarMenu' ,

]); 
add_option('init', 'manuel-sport');
// Scripts and Styles
function sportCollegeScriptsandStyles() {
    //Main Stylesheet
    wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style('slicknavCSS', get_template_directory_uri(). '/css/slicknav.min.css', array(), '1.9.1');
    wp_enqueue_style('googleFont', "https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap", array(), '1.0.0');
    if(is_page('gallery')):
    wp_enqueue_style('lightboxCSS', get_template_directory_uri(). '/css/lightbox.css', array(), '1.0.3');
    wp_enqueue_style('lightboxaCSS', get_template_directory_uri(). '/css/gutenberg.min.css', array(), '2.3.2');
    endif;
    if(is_page('homepage')):
        wp_enqueue_style('bxSliderCSS', get_template_directory_uri(). '/css/jquery.bxslider.css', array(), '4.2.12');
        endif;
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');
    wp_enqueue_script('JQuery', get_template_directory_uri(). "/js/jquery.min.js", array('jquery'), '3.0.0', true);
    wp_enqueue_script('slicknavJS', get_template_directory_uri(). '/js/jquery.slicknav.min.js', array('jquery'), '1.9.1', true);
    wp_enqueue_script('scrips', get_template_directory_uri(). '/js/scrips.js', array('jquery'), '1.0.0', true);
    if(is_page('gallery')):
    wp_enqueue_script('lightboxJS', get_template_directory_uri(). '/js/lightbox.js', array('jquery'), '2.3.2', true);
    endif;
    if(is_page('homepage')):
        wp_enqueue_script('bxSliderJS', get_template_directory_uri(). '/js/jquery.bxslider.js', array('jquery'), '4.2.12', true);
        endif;
}
add_action('wp_enqueue_scripts', 'sportCollegeScriptsandStyles');
//Widgets zone
function sportscollege_widgets() {
    register_sidebar(array(
        'name' => 'Sidebar 1',
        'id' => 'sidebar',
        'before_widget' => '<div class"widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center primary-text">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => 'Sidebar 2',
        'id' => 'sidebar1',
        'before_widget' => '<div class"widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center primary-text">',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'sportscollege_widgets');

/*Image Hero */
function sportCollege_hero_image() {
    //Gain ID from Homepage
    $front_page_ID = get_option('page_on_front');
    //Obtain img ID
    $image_ID = get_field('image_hero', $front_page_ID);
    $img = wp_get_attachment_image_src($image_ID, 'full')[0];
    //Style css
    wp_register_style('custom', false);
    wp_enqueue_style('custom');
    $outstanding_image_CSS = "
    body.home .header {
        background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url($img);
    }
    ";
    wp_add_inline_style('custom', $outstanding_image_CSS);
}
add_action('init', 'sportCollege_hero_image');