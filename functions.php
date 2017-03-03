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
  wp_enqueue_style( 'font-awesome-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css', array(), null, 'all' );
  /* Add Custom CSS */
  wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/public/css/custom.min.css?v=2.0' );
  /* Add jquery.cookie */
  //wp_enqueue_script( 'jquery.cookie', get_stylesheet_directory_uri() . '/bower_components/jquery.cookie/jquery.cookie.js', array( 'jquery' ), NULL, TRUE );
  /* Add Fancybox */
  wp_enqueue_style( 'fancybox-css', get_stylesheet_directory_uri() . '/bower_components/fancybox/source/jquery.fancybox.css' );
  wp_enqueue_script( 'fancybox-js', get_stylesheet_directory_uri() . '/bower_components/fancybox/source/jquery.fancybox.pack.js', array( 'jquery' ), NULL, TRUE );
  /* Add Bootstrap JS */
  wp_enqueue_script( 'script-js', get_template_directory_uri() . '/public/js/script.min.js?v=1.2', array('jquery', 'fancybox-js'), '', true );
  //wp_enqueue_script( 'makercamp_theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'makercamp_theme_scripts' );


/**
 * Add admin.css enqueue
 */
function makercamp_admin_scripts() {
  wp_enqueue_style('admin-styles', get_template_directory_uri() . '/public/css/admin.css');
  //wp_enqueue_script('admin-scripts', get_stylesheet_directory_uri() . '/js/admin.js', array( 'jquery' ),false,true );
}
add_action('admin_enqueue_scripts', 'makercamp_admin_scripts');


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
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false, '1.11.3');
    wp_enqueue_script('jquery');
  }
}
add_action('init', 'modify_jquery');

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');



/**
 * Create the project post types
 */
add_action( 'init', 'project_post_types' );
function project_post_types() {
  /**
   * Register the project post type
   */
  $labels = array(
      'name'                => _x('Projects', 'post type general name'),
      'singular_name'       => _x('Project', 'post type singular name'),
      'add_new'             => _x('Add New', 'new project'),
      'add_new_item'        => __('Add New Project'),
      'edit_item'           => __('Edit Project'),
      'new_item'            => __('New Project'),
      'view_item'           => __('View Project'),
      'search_items'        => __('Search Project'),
      'not_found'           => __('Nothing found'),
      'not_found_in_trash'  => __('Nothing found in Trash'),
      'parent_item_colon'   => ''
  );
  $args = array(
      'labels'              => $labels,
      'public'              => true,
      'has_archive'         => false,
      'publicly_queryable'  => true,
      'show_ui'             => true,
      'query_var'           => true,
      'capability_type'     => 'page',
      'hierarchical'        => true,
      'menu_position'       => null,
      'menu_icon'           => 'dashicons-hammer',
      'supports'            => array('title','editor','excerpt','thumbnail','revisions','page-attributes',)
  );
  register_post_type( 'projects', $args );

  /**
   * Add new taxonomy 'themes'
   */
  $labels = array(
    'name'              => _x( 'Themes', 'taxonomy general name', 'makercamp' ),
    'singular_name'     => _x( 'Theme', 'taxonomy singular name', 'makercamp' ),
    'search_items'      => __( 'Search Themes', 'makercamp' ),
    'all_items'         => __( 'All Themes', 'makercamp' ),
    'parent_item'       => __( 'Parent Theme', 'makercamp' ),
    'parent_item_colon' => __( 'Parent Theme:', 'makercamp' ),
    'edit_item'         => __( 'Edit Theme', 'makercamp' ),
    'update_item'       => __( 'Update Theme', 'makercamp' ),
    'add_new_item'      => __( 'Add New Theme', 'makercamp' ),
    'new_item_name'     => __( 'New Theme Name', 'makercamp' ),
    'menu_name'         => __( 'Themes', 'makercamp' )
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => TRUE,
    'show_admin_column' => TRUE,
    'query_var'         => TRUE,
  );
  register_taxonomy( 'themes', array( 'projects' ), $args );
}


/**
 * Create the print pages for each project
 */
function project_add_child_print_page( $post_id ) {  
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
    return;

  if ( !wp_is_post_revision( $post_id )
  && 'projects' == get_post_type( $post_id )
  && 'auto-draft' != get_post_status( $post_id ) ) {  
    $show = get_post( $post_id );
    if( 0 == $show->post_parent ){
      $children =& get_children(
        array(
          'post_parent' => $post_id,
          'post_type' => 'projects'
        )
      );
      if( empty( $children ) ){
        $child = array(
          'post_type' => 'projects',
          'post_title' => 'Print',
          'post_content' => '',
          'post_status' => 'publish',
          'post_parent' => $post_id,
          'post_author' => 0,
          'comment_status' => 'closed'
        );
        wp_insert_post( $child );
      }
    }
  }
}
add_action( 'save_post', 'project_add_child_print_page' );


/**
 * Adds conditional function to check if parent or child project
 */
function is_child($page_ID) {
  global $post;
  if($post->post_parent == $page_ID) {
    return true;
  } else {
    return false;
  }
}



/**
 * Adds the subscribe header return path overlay
 */
function subscribe_return_path_overlay() { ?>
  <div class="overlay-div overlay-slidedown hidden-xs">
    <div class="container-fluid-overlay">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 overlay-1">
            <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/assets/img/Magazine-cover-44-for-overlay.jpg' ?>" alt="Make Magazine Volume 44 Cover" />
          </div>
          <div class="col-sm-4 overlay-2">
            <h2>Get the Magazine</h2>
            <p>Make: is the voice of the Maker Movement, empowering, inspiring, and connecting Makers worldwide to tinker and hack. Subscribe to Make Magazine Today!</p>
            <a class="black-overlay-btn" target="_blank" href="https://readerservices.makezine.com/mk/default.aspx?pc=MK&pk=M5BMCP">SUBSCRIBE</a>
          </div>
          <div class="col-sm-4 overlay-3">
            <h2>Sign-up for updates on Maker Camp projects!</h2>
            <p>Keep informed, stay inspired.</p>
            <form class="sub-form" action="http://whatcounts.com/bin/listctrl" method="POST">
              <input type="hidden" name="slid" value="6B5869DC547D3D4658DF84D7F99DCB43"/>
              <input type="hidden" name="cmd" value="subscribe"/>
              <input type="hidden" name="custom_source" value="Subscribe return path overlay"/>
              <input type="hidden" name="custom_incentive" value="none"/>
              <input type="hidden" name="custom_url" value=""/>
              <input type="hidden" id="format_mime" name="format" value="mime"/>
              <input type="hidden" name="goto" value=""/>
              <input type="hidden" name="custom_host" value="makercamp.com" />
              <input type="hidden" name="errors_to" value=""/>
              <input name="email" class="overlay-input" placeholder="Enter your email" required type="email"><br>
              <input value="GO" class="black-overlay-btn" type="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $('#trigger-overlay, .overlay-div').hover(
      function () {
        $('.overlay-div').stop().addClass( 'open' );
        $( 'body' ).addClass( 'modal-open' );
      },
      function () {
        $('.overlay-div').stop().removeClass( 'open' );
        $( 'body' ).removeClass( 'modal-open' );
      }
    );
  </script>
<?php }


/**
 * Social media panel for use on any page
 */
function social_media_panel() { ?>
  <section id="share" class="mc-social container">
    <h3>When you share on social media using #makercamp, your post will appear here!</h3>
    <script async src="https://d36hc0p18k1aoc.cloudfront.net/public/js/modules/tintembed.js"></script><div class="tintup" data-id="makercamp" data-columns="" data-mobilescroll="true"    data-infinitescroll="true" data-personalization-id="793105" style="height:500px;width:100%;"></div>
  </section>
<?php }


/**
 * Maker Shed products for sale panel
 */
function stuff_for_sale_panel() { ?>
  <section class="stuff-for-sale">
    <div class="sale-blue-bg">
      <div class="container">
        <div class="row">

          <div class="col-xs-6 col-sm-3">
            <div class="sale-flex-btm">
              <h4>Make: Getting Started with Arduino Kit</h4>
              <div class="triangle-block"></div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <div class="sale-flex-btm">
              <h4>Start Making!</h4>
              <div class="triangle-block"></div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <div class="sale-flex-btm">
              <h4>Spinbot kit</h4>
              <div class="triangle-block"></div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <div class="sale-flex-btm">
              <h4>Maker Camp Gear</h4>
              <div class="triangle-block"></div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="sale-white-bg">
      <div class="container">
        <div class="row">

          <div class="col-xs-6 col-sm-3">
            <img src="//cdn.shopify.com/s/files/1/0243/7593/products/MakeKits-Arduino-components_web_large.jpg" class="img-responsive" alt="Getting Started with Arduino Kit" />
            <h4>Make: Getting Started with Arduino Kit</h4>
            <p>Kit contains the components and book you need to make getting started with Arduino easy.</p>
            <a class="mc-blue-btn" href="http://www.makershed.com/products/make-getting-started-with-arduino-kit-special-edition" target="_blank">BUY NOW</a>
          </div>
          <div class="col-xs-6 col-sm-3">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/StartMaking.jpg' ?>" class="img-responsive" alt="Start Making!" />
            <h4>Start Making!</h4>
            <p>Six great projects guaranteed to spark your imagination and get you making.</p>
            <a class="mc-blue-btn" href="https://www.makershed.com/products/make-start-making" target="_blank">BUY NOW</a>
          </div>
          <div class="col-xs-6 col-sm-3">
            <img src="//cdn.shopify.com/s/files/1/0243/7593/products/MSRSPIN-2_d59bdbdc-5ad6-4503-a38f-6da199eda67a_large_cropped.jpg" class="img-responsive" alt="Spinbot kit" />
            <h4>Spinbot kit</h4>
            <p>Spinbots are easy-to-make drawing robots that kids love to build, tweak, and enjoy.</p>
            <a class="mc-blue-btn" href="https://www.makershed.com/products/make-spinbot-kit-bagged" target="_blank">BUY NOW</a>
          </div>
          <div class="col-xs-6 col-sm-3">
            <img src="//cdn.shopify.com/s/files/1/0243/7593/products/DSC_5185_1_large_cropped.jpg" class="img-responsive" alt="Maker Camp Hat" />
            <h4>Maker Camp Gear</h4>
            <p>Keep your campers cool with an official 2016 Maker Camp hat!</p>
            <a class="mc-blue-btn" href="http://www.makershed.com/products/maker-faire-2016-trucker-hat" target="_blank">BUY NOW</a>
          </div>        

        </div>
      </div>
    </div>
  </section>
<?php }

