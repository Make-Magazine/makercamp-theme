<?php
/**
 * Maker Camp Theme functions and definitions
 *
 * @package Maker Camp Theme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'makercamp_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function makercamp_theme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Maker Camp Theme, use a find and replace
	 * to change 'makercamp_theme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'makercamp_theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'makercamp_theme' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'makercamp_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // makercamp_theme_setup
add_action( 'after_setup_theme', 'makercamp_theme_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function makercamp_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'makercamp_theme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'makercamp_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function makercamp_theme_scripts() {
	wp_enqueue_style( 'makercamp_theme-style', get_stylesheet_uri() );

	/* Add Custom CSS */
	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/public/css/custom.min.css' );

	/* Add Fancybox */
	wp_enqueue_style( 'fancybox-css', MAKERCAMP_URL . 'assets/js/vendor/fancybox/source/jquery.fancybox.css' );
	wp_enqueue_script( 'fancybox-js', MAKERCAMP_URL . 'assets/js/vendor/fancybox/source/jquery.fancybox.pack.js', array( 'jquery' ), NULL, TRUE );

	/* Add Bootstrap JS */
	wp_enqueue_script( 'script-js', get_template_directory_uri() . '/public/js/script.min.js', array('jquery', 'fancybox-js'), '', true );

	/* Add JS for specific Bootstrap JS Calls */
	wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/public/js/theme.min.js', array('jquery', 'script-js'), '', true );

	//wp_enqueue_script( 'makercamp_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	//wp_enqueue_script( 'makercamp_theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'makercamp_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Custom functions
 */

// Add Bootstrap's IE conditional html5 shiv and respond.js to header
function conditional_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'conditional_js' );

// Making jQuery Google API
function modify_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false, '1.11.3');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'modify_jquery');

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

add_action( 'add_meta_boxes', 'add_metabox_about_us', 1);

function add_metabox_about_us(){

  add_meta_box(
      'about_filds',__( 'More About Us' ),
      'about_callback', 'page', 'normal', 'high' );
}

function about_callback ( $post ) {
  echo '<h3>More information About Us (under hero)</h3>';

  echo '<input name="about_us_more_info_title" id="about_us_more_info_title" placeholder="title">';
  echo '<p>';
  echo '<textarea name="about_us_more_info" id="about_us_more_info" placeholder="description"></textarea>';
  echo '</p>';
  ?>
  <input type="text" name="week-image" class="makercamp-file-uploaded" value="<?php echo esc_attr( $category_image_url ); ?>" />
	<input type="button" class="button makercamp-file-uploader makercamp-image" value="<?php _e( 'Choose or Upload a File' ) ?>" />
  <?php

  echo '<h3>Information about Crew</h3>';

  $project_links = get_post_meta( $post->ID, '_project_links', TRUE );

  if ( $project_links ) {
    echo '<ul class="project-sources">';
    foreach ( $project_links as $index => $value ) {

      echo '<li data-index="' . $index . '">';
      echo '<label for="makercamp_project_source_' . $index . '"_url>';
      printf( __( 'Project source %d', 'makercamp' ), $index + 1 );
      echo '</label> ';
      echo '<input type="text" id="makercamp_project_source_' . $index . '_url" name="makercamp_project_source[' . $index . '][url]" placeholder="' . __( 'Enter a url', 'makercamp' ) . '" value="' . ( ! empty( $project_links[ $index ][ 'url' ] ) ? esc_attr( $project_links[ $index ][ 'url' ] ) : '' ) . '" size="25" />';
      echo '<input type="text" name="makercamp_project_source[' . $index . '][title]" placeholder="' . __( 'Enter readable title', 'makercamp' ) . '" value="' . ( ! empty( $project_links[ $index ][ 'title' ] ) ? esc_attr( $project_links[ $index ][ 'title' ] ) : '' ) . '" size="25" />';
      echo '<a class="makercamp-project-delete" href="#">' . __( 'Remove', 'makercamp' ) . '</a>';
      echo '</li>';
    }
    echo '</ul>';
  }

  echo '<p>';
  echo '<a class="makercamp-add-project" href="#">' . __( 'Add new project link', 'makercamp' ) . '</a>';
  echo '</p>';

  echo '<ul class="new-projects"></ul>';

};
