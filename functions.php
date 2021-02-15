<?php
// ===================================================
// Enqueue Assets
// ===================================================
  function tli_register_assets() {
    // Stylesheets
      wp_enqueue_style(
        'main-stylesheet',
        get_stylesheet_uri() // theme/style.css
      );

    // Scripts
      wp_enqueue_script(
        'main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        false
     );
  }
  add_action( 'wp_enqueue_scripts', 'tli_register_assets' );


// ===================================================
// Nav Menu
// ===================================================
  function tli_register_navmenu() {
    // Header Menu
      register_nav_menus(
        array(
          'header-menu' => __( 'Header Menu' )
        )
      );
  }
  add_action( 'init', 'tli_register_navmenu' );


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