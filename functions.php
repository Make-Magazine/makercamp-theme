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

	/* Add jquery.cookie */
	wp_enqueue_script( 'jquery.cookie', get_stylesheet_directory_uri() . '/bower_components/jquery.cookie/jquery.cookie.js', array( 'jquery' ), NULL, TRUE );

	/* Add Fancybox */
	wp_enqueue_style( 'fancybox-css', get_stylesheet_directory_uri() . '/bower_components/fancybox/source/jquery.fancybox.css' );
	wp_enqueue_script( 'fancybox-js', get_stylesheet_directory_uri() . '/bower_components/fancybox/source/jquery.fancybox.pack.js', array( 'jquery' ), NULL, TRUE );

	/* Add Bootstrap JS */
	wp_enqueue_script( 'script-js', get_template_directory_uri() . '/public/js/script.min.js', array('jquery', 'fancybox-js', 'jquery.cookie'), '', true );

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

/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */

add_action( 'init', 'crew_post_types' );

function crew_post_types() {
  $labels = array(
    'name'                => _x('Crews list', 'post type general name'),
		'singular_name'       => _x('Crew', 'post type singular name'),
		'add_new'             => _x('Add New', 'new crew'),
		'add_new_item'        => __('Add New Crew'),
		'edit_item'           => __('Edit Crew'),
		'new_item'            => __('New Crew'),
		'view_item'           => __('View Crew'),
		'search_items'        => __('Search Crew'),
		'not_found'           => __('Nothing found'),
		'not_found_in_trash'  => __('Nothing found in Trash'),
		'parent_item_colon'   => ''
	);

  $args = array(
    'labels'              => $labels,
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'query_var'           => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'menu_position'       => null,
		'supports'            => array('title','editor','thumbnail')
	  );

  register_post_type( 'crew', $args );

  register_taxonomy("Crew list", $args);
}



function add_menu_anchor_class($second_nav) {
  return preg_replace('/rel="anchors-to-section"/', 'class="anchors-to-section"', $second_nav, -1);
}
add_filter('wp_nav_menu','add_menu_anchor_class');
