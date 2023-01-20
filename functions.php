<?php

if ( ! function_exists( 'vision_fse_theme_support' ) ) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since My theme name 1.0
     *
     * @return void
     */
    function vision_fse_theme_support() {

        load_theme_textdomain( 'vision-fse', get_template_directory() . '/languages' );

        // Add support for block styles.
        add_theme_support( 'wp-block-styles' );

        // Enqueue editor styles.
        add_theme_support('editor-styles');

        add_theme_support('block-nav-menus');

        // Enqueue editor styles.
        add_editor_style('./style.css');

        register_nav_menus( array( 'primary' => esc_html__( 'Primary Menu', 'vision-fse' ) ) );

    }

endif;
add_action( 'after_setup_theme', 'vision_fse_theme_support' );

if ( ! function_exists( 'vision_fse_fonts_url' ) ) :
  /**
   * Register Google fonts for Vision Fse
   *
   * Create your own vision_fse_hustle_fonts_url() function to override in a child theme.
   *
   * @since 1.0
   *
   * @return string Google fonts URL for the theme.
   */
  function vision_fse_fonts_url() {
    $fonts_url = '';

    /* Translators: If there are characters in your language that are not
    * supported by Poppins, translate this to 'off'. Do not translate
    * into your own language.
    */
    $font_families = array( 'Nunito+Sans:wght@400;600;700;800&display=swap', 'Source+Serif+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap','Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap','Nunito:ital,wght@0,700;0,800;0,900;0,1000;1,700;1,800;1,900;1,1000&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap' );

    if ( ! empty( $font_families ) ) {

      $query_args = array(
        'family' => implode( '&family=', $font_families ), //urlencode( implode( '|', $font_families ) ),
        // 'subset' => urlencode( 'latin,latin-ext' ),
        'display' => 'swap',
      );

      $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );
    }

    if ( ! class_exists( 'WPTT_WebFont_Loader' ) ) {
      // Load Google fonts from Local.
      require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );
    }

    return esc_url( wptt_get_webfont_url( $fonts_url ) );
  }
endif;

/*-----------------------------------------------------------
Enqueue Styles
------------------------------------------------------------*/

/**
 * Enqueue scripts and styles.
 */
function vision_fse_enqueue_scripts() {
  $min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

  // Register theme stylesheet.
  $theme_version = wp_get_theme()->get( 'Version' );



  // FontAwesome.
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/all.css', array(), '5.15.3', 'all' );
  //wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/all.css', array(), '5.15.3', 'all' );
  //wp_enqueue_style( 'vision-fse-fonts', vision_fse_fonts_url(), array(), null );

  wp_enqueue_style('vision-fse-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));

}
add_action( 'wp_enqueue_scripts', 'vision_fse_enqueue_scripts' );

/**
 * Enqueue admin scripts and styles.
 */
function vision_fse_admin_scripts() {
  $min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

  // Register theme stylesheet.
  $theme_version = wp_get_theme()->get( 'Version' );

  $deps = array();

  // FontAwesome.
  wp_enqueue_style( 'vision-fse-admin-style', get_stylesheet_directory_uri() . '/assets/css/admin-style.css', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );

}
//add_action( 'admin_enqueue_scripts', 'vision_fse_admin_scripts' );


function vision_fse_block_assets() {
  $min = '';
  // FontAwesome.
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/all' . $min . '.css', array(), '5.15.3', 'all' );
}
add_action( 'enqueue_block_assets', 'vision_fse_block_assets' );

/**
 *
 * Enqueue scripts and styles.
 */
function vision_fse_editor_styles() {

  // Enqueue editor styles.
  add_editor_style(
    array(
      vision_fse_fonts_url(),
    )
  );
}
//add_action( 'admin_init', 'vision_fse_editor_styles' );

