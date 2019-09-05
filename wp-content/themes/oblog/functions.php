<?php

if (!function_exists('oblog_setup')) :

    function oblog_setup()
    {
        add_theme_support('title-tag');

        // https://github.com/O-clock-Alumni/fiches-recap/blob/master/wordpress/themes/setup-theme.md#menus-de-navigation
        add_theme_support('menus'); // Facultatif car induit par un register_nav_menus
        
        // On enregistre un "emplacement de menu" dans le thème
        // qui sera identifié par "theme_location" dans le thème
        register_nav_menus([
            'nav bar head' => 'Menu de liens du header navbar ',
            'navright' => 'navright',
            'authors' => 'authors',
            'nav footer' => 'Menu du footer'

        ]);
    }

endif;

// Ajout d'une action au Hook 'after_setup_theme'
add_action('after_setup_theme', 'oblog_setup');

if (!function_exists('oblog_scripts')) :
    function oblog_scripts()
    {
        // Lien vers nos CSS
        wp_enqueue_style('reset-css', get_stylesheet_directory_uri() . '/assets/css/reset.css');
        wp_enqueue_style( 'bootstrap4','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
        wp_enqueue_style('blog-css', get_stylesheet_directory_uri(). '/assets/css/blog.css');
        //font Awesome
        wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css'); 
        //Bootstrap
        
        wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );
        wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
        wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
        
    }
endif;

//  FILTER NAV//
function add_additional_class_on_li($classes, $item, $args) {
    if($args->add_li_class) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
}
  add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

  

  function add_search_box_to_menu( $items, $args ) {
      if( $args->theme_location == 'navright' )
          return $items."<li class='menu-header-search'><form action='http://example.com/' id='searchform' method='get'><input type='text' name='s' id='s' placeholder='Search'></form></li>";
   
      return $items;
  }
  add_filter('wp_nav_menu_items','add_search_box_to_menu', 1, 2);
// Ceci va appeler la fonction qui charge les scripts
add_action('wp_enqueue_scripts', 'oblog_scripts');


function wpb_add_google_fonts() {
 
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,800', false ); 

}
     
    add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );


// Suppressions des inclusions par défaut de WP
// Supprime WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('wp_print_styles', 'print_emoji_styles');
// Supprime le lien vers Windows Live Editor Manifest
remove_action('wp_head', 'wlwmanifest_link');
// Supprime le lien RSD + XML
remove_action('wp_head', 'rsd_link');
// Supprime la meta generator
remove_action('wp_head', 'wp_generator');
// Supprime les extra feed rss
remove_action('wp_head', 'feed_links_extra', 3);
// Supprime les feeds des Posts et des Commentaires
remove_action('wp_head', 'feed_links', 2);
