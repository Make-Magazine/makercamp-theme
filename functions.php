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
function makercamp_customizer( $wp_customize ) {
  /**
   * Section in customizer for About us page
   */
  $wp_customize->add_section(
      'makercamp_section_about',
      array(
          'title' => 'About Us page settings',
          'description' => 'This is a settings for About page.',
          'priority' => 203,
      )
  );
  /**
   * Description section, About us page
   */
  $wp_customize->add_setting(
      'description_title',
      array(
          'default' => 'Some title',
      )
  );

  $wp_customize->add_control(
      'description_title',
      array(
          'label' => 'Description title',
          'section' => 'makercamp_section_about',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'description_text',
      array(
          'default' => 'Some description',
      )
  );

  $wp_customize->add_control(
      'description_text',
      array(
          'label' => 'Description text',
          'section' => 'makercamp_section_about',
          'type' => 'text',
      )
  );

  /**
   * Crew section, About us page
   */
  // title
  $wp_customize->add_setting(
      'crew_title_section',
      array(
          'default' => 'Some title',
      )
  );
  $wp_customize->add_control(
      'crew_title_section',
      array(
          'label' => 'Crew title',
          'section' => 'makercamp_section_about',
          'type' => 'text',
      )
  );
  // crew first name and second name
  $wp_customize->add_setting(
      'crew_name',
      array(
          'default' => 'name',
      )
  );

  $wp_customize->add_control(
      'crew_name',
      array(
          'label' => 'Crew name',
          'section' => 'makercamp_section_about',
          'type' => 'text',
      )
  );
  // crew biography
  $wp_customize->add_setting(
      'crew_bio',
      array(
          'default' => 'biography',
      )
  );

  $wp_customize->add_control(
      'crew_bio',
      array(
          'label' => 'Crew biography',
          'section' => 'makercamp_section_about',
          'type' => 'text',
      )
  );
  // crew photo
  $wp_customize->add_setting(
      'crew_photo',
      array(
          'default' => 'chose a photo',
      )
  );

  $wp_customize->add_control(
      'crew_photo',
      array(
          'label' => 'Crew photo',
          'section' => 'makercamp_section_about',
          'type' => 'button',
      )
  );
  /**
   * section in costomizer of Find a Camp page
   */
  $wp_customize->add_section(
      'makercamp_section_find_camp',
      array(
          'title' => 'Find a Camp page settings',
          'description' => 'This is a settings for Map page.',
          'priority' => 201,
      )
  );
  // Title before map
  $wp_customize->add_setting(
      'title_before_map',
      array(
          'default' => 'some title',
      )
  );

  $wp_customize->add_control(
      'title_before_map',
      array(
          'label' => 'Title before map',
          'section' => 'makercamp_section_find_camp',
          'type' => 'text',
      )
  );
  // Title after map
  $wp_customize->add_setting(
      'title_after_map',
      array(
          'default' => 'some title',
      )
  );

  $wp_customize->add_control(
      'title_after_map',
      array(
          'label' => 'Title after map',
          'section' => 'makercamp_section_find_camp',
          'type' => 'text',
      )
  );
  // Some text after map
  $wp_customize->add_setting(
      'description_after_map',
      array(
          'default' => 'some description',
      )
  );

  $wp_customize->add_control(
      'description_after_map',
      array(
          'label' => 'Description after map',
          'section' => 'makercamp_section_find_camp',
          'type' => 'text',
      )
  );
  /**
   * section in costomizer of Host a Camp page
   */
  $wp_customize->add_section(
      'makercamp_section_host_camp',
      array(
          'title' => 'Host a Camp page settings',
          'description' => 'This is a settings for Host a Camp page.',
          'priority' => 202,
      )
  );
  // Affiliate Program section
  $wp_customize->add_setting(
      'affiliate_program_title',
      array(
          'default' => 'some title',
      )
  );

  $wp_customize->add_control(
      'affiliate_program_title',
      array(
          'label' => 'Affiliate Program title',
          'section' => 'makercamp_section_host_camp',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'affiliate_program_support_one',
      array(
          'default' => 'some text',
      )
  );

  $wp_customize->add_control(
      'affiliate_program_support_one',
      array(
          'label' => 'First support',
          'section' => 'makercamp_section_host_camp',
          'type' => 'text',
      )
  );
  $wp_customize->add_setting(
      'affiliate_program_support_two',
      array(
          'default' => 'some text',
      )
  );

  $wp_customize->add_control(
      'affiliate_program_support_two',
      array(
          'label' => 'Second support',
          'section' => 'makercamp_section_host_camp',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'affiliate_program_support_three',
      array(
          'default' => 'some text',
      )
  );

  $wp_customize->add_control(
      'affiliate_program_support_three',
      array(
          'label' => 'Third support',
          'section' => 'makercamp_section_host_camp',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'affiliate_program_support_four',
      array(
          'default' => 'some text',
      )
  );

  $wp_customize->add_control(
      'affiliate_program_support_four',
      array(
          'label' => 'Fourth support',
          'section' => 'makercamp_section_host_camp',
          'type' => 'text',
      )
  );
  // Discover section with projects and video
  $wp_customize->add_setting(
      'affiliate_program_proj_n_video_title',
      array(
          'default' => 'some title',
      )
  );

  $wp_customize->add_control(
      'affiliate_program_proj_n_video_title',
      array(
          'label' => 'Project and Video title',
          'section' => 'makercamp_section_host_camp',
          'type' => 'text',
      )
  );

  // Discover section with projects and video
  $wp_customize->add_setting(
      'affiliate_program_proj_n_video_title',
      array(
          'default' => 'some title',
      )
  );

  $wp_customize->add_control(
      'affiliate_program_proj_n_video_title',
      array(
          'label' => 'Project and Video title',
          'section' => 'makercamp_section_host_camp',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'affiliate_program_proj_n_video_picture',
      array(
          'default' => 'chose a picrute',
      )
  );

  $wp_customize->add_control(
      'affiliate_program_proj_n_video_picture',
      array(
          'label' => 'Picture of the project',
          'section' => 'makercamp_section_host_camp',
          'type' => 'button',
      )
  );

  $wp_customize->add_setting(
      'affiliate_program_proj_n_video_description',
      array(
          'default' => 'description of project',
      )
  );

  $wp_customize->add_control(
      'affiliate_program_proj_n_video_description',
      array(
          'label' => 'Description of project',
          'section' => 'makercamp_section_host_camp',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'affiliate_program_proj_n_video_link',
      array(
          'default' => 'http://',
      )
  );

  $wp_customize->add_control(
      'affiliate_program_proj_n_video_link',
      array(
          'label' => 'Link for the project matirial',
          'section' => 'makercamp_section_host_camp',
          'type' => 'text',
      )
  );
  /**
   * section in costomizer for Hidden page
   */
  $wp_customize->add_section(
      'makercamp_section_hidden_page',
      array(
          'title' => 'Hidden page settings',
          'description' => 'This is a settings for Map page.',
          'priority' => 204,
      )
  );
  // Affiliates to do section
  $wp_customize->add_setting(
      'title_affiliates_to_do',
      array(
          'default' => 'some title',
      )
  );

  $wp_customize->add_control(
      'title_affiliates_to_do',
      array(
          'label' => 'Affiliates to do title',
          'section' => 'makercamp_section_hidden_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'affiliates_to_do_first',
      array(
          'default' => 'first to do',
      )
  );

  $wp_customize->add_control(
      'affiliates_to_do_first',
      array(
          'label' => 'Affiliates to do list',
          'section' => 'makercamp_section_hidden_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'affiliates_to_do_second',
      array(
          'default' => 'second to do',
      )
  );

  $wp_customize->add_control(
      'affiliates_to_do_second',
      array(
//          'label' => 'Affiliates to do second',
          'section' => 'makercamp_section_hidden_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'affiliates_to_do_third',
      array(
          'default' => 'third to do',
      )
  );

  $wp_customize->add_control(
      'affiliates_to_do_third',
      array(
//          'label' => 'Affiliates to do third',
          'section' => 'makercamp_section_hidden_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'affiliates_to_do_fourth',
      array(
          'default' => 'fourth to do',
      )
  );

  $wp_customize->add_control(
      'affiliates_to_do_fourth',
      array(
//          'label' => 'Affiliates to do third',
          'section' => 'makercamp_section_hidden_page',
          'type' => 'text',
      )
  );
  // Maker camp 2015 section
  $wp_customize->add_setting(
      'maker_camp_section_title',
      array(
          'default' => 'some title',
      )
  );

  $wp_customize->add_control(
      'maker_camp_section_title',
      array(
          'label' => 'Maker Camp section title',
          'section' => 'makercamp_section_hidden_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'maker_camp_section_description',
      array(
          'default' => 'some text',
      )
  );

  $wp_customize->add_control(
      'maker_camp_section_description',
      array(
          'label' => 'Maker Camp section description',
          'section' => 'makercamp_section_hidden_page',
          'type' => 'text',
      )
  );

  // Digital assets section
  $wp_customize->add_setting(
      'digital_assets_section_title',
      array(
          'default' => 'some title',
      )
  );

  $wp_customize->add_control(
      'digital_assets_section_title',
      array(
          'label' => 'Digital assets section title',
          'section' => 'makercamp_section_hidden_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'digital_assets_section_description',
      array(
          'default' => 'some description',
      )
  );

  $wp_customize->add_control(
      'digital_assets_section_description',
      array(
          'label' => 'Digital assets section description',
          'section' => 'makercamp_section_hidden_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'digital_assets_section_picture',
      array(
          'default' => 'chose a picrute',
      )
  );

  $wp_customize->add_control(
      'digital_assets_section_picture',
      array(
          'label' => 'Picture of the assets',
          'section' => 'makercamp_section_hidden_page',
          'type' => 'button',
      )
  );

  $wp_customize->add_setting(
      'digital_assets_description',
      array(
          'default' => 'description of assets',
      )
  );

  $wp_customize->add_control(
      'digital_assets_description',
      array(
          'label' => 'Description of assets',
          'section' => 'makercamp_section_hidden_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'digital_assets_link',
      array(
          'default' => 'http://',
      )
  );

  $wp_customize->add_control(
      'digital_assets_link',
      array(
          'label' => 'Link for the digital assets',
          'section' => 'makercamp_section_hidden_page',
          'type' => 'text',
      )
  );
  // Interested In section
  $wp_customize->add_setting(
      'interested_in_section',
      array(
          'default' => 'some text',
      )
  );

  $wp_customize->add_control(
      'interested_in_section',
      array(
          'label' => 'Team interested in...',
          'section' => 'makercamp_section_hidden_page',
          'type' => 'text',
      )
  );
    // Wishlist section
  $wp_customize->add_setting(
      'wishlist_section',
      array(
          'default' => 'some text',
      )
  );

  $wp_customize->add_control(
      'wishlist_section',
      array(
          'label' => 'Wishlist for people',
          'section' => 'makercamp_section_hidden_page',
          'type' => 'text',
      )
  );

  /**
   * section in costomizer of Host a Camp page
   */
  $wp_customize->add_section(
      'makercamp_section_home_page',
      array(
          'title' => 'Home page settings',
          'description' => 'This is a settings for Home page.',
          'priority' => 200,
      )
  );
  // Welcome section
  $wp_customize->add_setting(
      'welcome_section_title',
      array(
          'default' => 'some title',
      )
  );

  $wp_customize->add_control(
      'welcome_section_title',
      array(
          'label' => 'Welcome section title',
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'welcome_section_title',
      array(
          'default' => 'title',
      )
  );

  $wp_customize->add_control(
      'welcome_section_title',
      array(
          'label' => 'Welcome section title and date',
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'welcome_section_date',
      array(
          'default' => 'date',
      )
  );

  $wp_customize->add_control(
      'welcome_section_date',
      array(
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'welcome_section_vidoe',
      array(
          'default' => 'http://',
      )
  );

  $wp_customize->add_control(
      'welcome_section_vidoe',
      array(
          'label' => 'Link to video in welcome section',
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'welcome_section_central_description',
      array(
          'default' => 'description',
      )
  );

  $wp_customize->add_control(
      'welcome_section_central_description',
      array(
          'label' => 'Central description in welcom section',
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'welcome_section_right_description',
      array(
          'default' => 'description',
      )
  );

  $wp_customize->add_control(
      'welcome_section_right_description',
      array(
          'label' => 'Right description in welcom section',
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );
  // How Maker Camp works
  $wp_customize->add_setting(
      'how_camp_works_section_title',
      array(
          'default' => 'title',
      )
  );

  $wp_customize->add_control(
      'how_camp_works_section_title',
      array(
          'label' => 'How Maker Camp works title and subtitle',
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'how_camp_works_section_subtitle',
      array(
          'default' => 'subtitle',
      )
  );

  $wp_customize->add_control(
      'how_camp_works_section_subtitle',
      array(
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'how_camp_works_left_picture',
      array(
          'default' => 'left picture',
      )
  );

  $wp_customize->add_control(
      'how_camp_works_left_picture',
      array(
          'label' => 'Chose a picture, enter title & description for left column',
          'section' => 'makercamp_section_home_page',
          'type' => 'button',
      )
  );

  $wp_customize->add_setting(
      'how_camp_works_section_left_description_subtitle',
      array(
          'default' => 'description subtitle',
      )
  );

  $wp_customize->add_control(
      'how_camp_works_section_left_description_subtitle',
      array(
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'how_camp_works_section_left_description',
      array(
          'default' => 'description',
      )
  );

  $wp_customize->add_control(
      'how_camp_works_section_left_description',
      array(
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'how_camp_works_right_picture',
      array(
          'default' => 'right picture',
      )
  );

  $wp_customize->add_control(
      'how_camp_works_right_picture',
      array(
          'label' => 'Chose a picture, enter title & description for right column',
          'section' => 'makercamp_section_home_page',
          'type' => 'button',
      )
  );

  $wp_customize->add_setting(
      'how_camp_works_section_right_description_subtitle',
      array(
          'default' => 'description subtitle',
      )
  );

  $wp_customize->add_control(
      'how_camp_works_section_right_description_subtitle',
      array(
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'how_camp_works_section_right_description',
      array(
          'default' => 'description',
      )
  );

  $wp_customize->add_control(
      'how_camp_works_section_right_description',
      array(
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );
  // Maker Camp weeks themes section
  $wp_customize->add_setting(
      'maker_camp_themes_title',
      array(
          'default' => 'title',
      )
  );

  $wp_customize->add_control(
      'maker_camp_themes_title',
      array(
          'label' => 'Maker Camp Themes title & subtitle',
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'maker_camp_themes_subtitle',
      array(
          'default' => 'subtitle',
      )
  );

  $wp_customize->add_control(
      'maker_camp_themes_subtitle',
     array(
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  // Physical Campsites section
  $wp_customize->add_setting(
      'physical_campsites_title',
      array(
          'default' => 'title',
      )
  );

  $wp_customize->add_control(
      'maker_camp_themes_title',
      array(
          'label' => 'Physical Campsites title & subtitle',
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'physical_campsites_subtitle',
      array(
          'default' => 'subtitle',
      )
  );

  $wp_customize->add_control(
      'maker_camp_themes_subtitle',
      array(
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'physical_campsites_sponsors_title',
      array(
          'default' => 'subtitle',
      )
  );

  $wp_customize->add_control(
      'physical_campsites_sponsors_title',
      array(
          'label' => 'Sponsors title',
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'physical_campsites_sponsors_picrute',
      array(
          'default' => 'chose a picture',
      )
  );

  $wp_customize->add_control(
      'physical_campsites_sponsors_picrute',
      array(
          'label' => 'Chose a picture of sponsors',
          'section' => 'makercamp_section_home_page',
          'type' => 'button',
      )
  );

  $wp_customize->add_setting(
      'physical_campsites_first_paragraph',
      array(
          'default' => 'description',
      )
  );

  $wp_customize->add_control(
      'physical_campsites_first_paragraph',
      array(
          'label' => 'First paragraph of physical campsites and link',
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'physical_campsites_first_link',
      array(
          'default' => 'http://',
      )
  );

  $wp_customize->add_control(
      'physical_campsites_first_link',
      array(
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'physical_campsites_second_paragraph',
      array(
          'default' => 'description',
      )
  );

  $wp_customize->add_control(
      'physical_campsites_second_paragraph',
      array(
          'label' => 'Second paragraph of physical campsites and link',
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'physical_campsites_second_link',
      array(
          'default' => 'http://',
      )
  );

  $wp_customize->add_control(
      'physical_campsites_second_link',
      array(
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );


  // A Day at Camp section
  $wp_customize->add_setting(
      'day_at_camp_section_title',
      array(
          'default' => 'title',
      )
  );

  $wp_customize->add_control(
      'day_at_camp_section_title',
      array(
          'label' => 'Day at camp title',
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'day_at_camp_section_explore_description',
      array(
          'default' => 'some text',
      )
  );

  $wp_customize->add_control(
      'day_at_camp_section_explore_description',
      array(
          'label' => 'Explore description',
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'day_at_camp_section_make_description',
      array(
          'default' => 'some text',
      )
  );

  $wp_customize->add_control(
      'day_at_camp_section_make_description',
      array(
          'label' => 'Make description',
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'day_at_camp_section_share_description',
      array(
          'default' => 'some text',
      )
  );

  $wp_customize->add_control(
      'day_at_camp_section_share_description',
      array(
          'label' => 'Share description',
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );
  // Stock Up For Camp
  $wp_customize->add_setting(
      'stock_up_section_title',
      array(
          'default' => 'title',
      )
  );

  $wp_customize->add_control(
      'stock_up_section_title',
      array(
          'label' => 'Stock Up For Camp title',
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'stock_up_section_first_picture',
      array(
          'default' => 'chose a picture',
      )
  );

  $wp_customize->add_control(
      'stock_up_section_first_picture',
      array(
          'label' => 'Chose first picture & link for material',
          'section' => 'makercamp_section_home_page',
          'type' => 'button',
      )
  );

  $wp_customize->add_setting(
      'stock_up_section_first_link',
      array(
          'default' => 'http://',
      )
  );

  $wp_customize->add_control(
      'stock_up_section_first_link',
      array(
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'stock_up_section_first_paragraph',
      array(
          'default' => 'first paragraph',
      )
  );

  $wp_customize->add_control(
      'stock_up_section_first_paragraph',
      array(
          'label' => 'Enter text for first & second paragraph',
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(
      'stock_up_section_second_paragraph',
      array(
          'default' => 'second paragraph',
      )
  );

  $wp_customize->add_control(
      'stock_up_section_second_paragraph',
      array(
          'section' => 'makercamp_section_home_page',
          'type' => 'text',
      )
  );
}
add_action( 'customize_register', 'makercamp_customizer' );