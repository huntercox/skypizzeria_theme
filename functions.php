<?php
// ===================================================
// Remove default jQuery from frontend of WordPress
// ===================================================
  // function sp_init() {
  //   if ( ! is_admin() ) {
  //       wp_deregister_script('jquery');
  //       wp_register_script('jquery', false);
  //   }
  // }
  // add_action('init', 'sp_init');


// ===================================================
// Enqueue Assets
// ===================================================
  function sp_register_assets() {
    // Stylesheets
      wp_enqueue_style(
        'main-stylesheet',
        get_stylesheet_uri() // theme/style.css
      );

    // Main
      wp_enqueue_script(
        'main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        null,
        false
      );

    // Register Slick Slider JS
      wp_register_script(
        'slick-js',
        get_template_directory_uri() . '/node_modules/slick-carousel/slick/slick.min.js',
        array('jquery', 'main'),
        null,
        true
      );

    // Initialize Slick
      wp_register_script(
        'slick-init',
        get_template_directory_uri() . '/assets/js/slick-init.js',
        array('slick-js'),
        null,
        true
      );

    // Initialize Featherlight
      wp_register_script(
        'featherlight-js',
        get_template_directory_uri() . '/node_modules/featherlight/release/featherlight.min.js',
        array('jquery'),
        null,
        false
      );

    // Home slider
      if ( is_front_page() ) {
        wp_enqueue_script('slick-js');
        wp_enqueue_script('featherlight-js');
        wp_enqueue_script('slick-init');
      }

  }
  add_action( 'wp_enqueue_scripts', 'sp_register_assets' );


// ===================================================
// Nav Menu
// ===================================================
  function sp_register_navmenu() {
    // Header Menu
      register_nav_menus(
        array(
          'header-menu' => __( 'Header Menu' )
        )
      );
  }
  add_action( 'init', 'sp_register_navmenu' );


// ===================================================
// ACF Options Page
// ===================================================
  if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
      'page_title' 	=> 'Site Options',
      'menu_title'	=> 'Site Options',
      'menu_slug' 	=> 'site-options',
      'capability'	=> 'edit_posts',
      'redirect'		=> false
    ));

  }


// ===================================================
// Custom Image Sizes
// ===================================================
  function sp_theme_setup() {
    // Home page slider
    add_image_size( 'homepage-slider', 1200, 400, true ); // (cropped)
  }
  add_action( 'after_setup_theme', 'sp_theme_setup' );


  function sp_customize_wysiwyg($args) {
    // Just omit h1 from the list
    $args['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4';
    return $args;
  }
  add_filter('tiny_mce_before_init', 'sp_customize_wysiwyg' );