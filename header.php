<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Maker Camp Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="tjgq9UGR8WCMZI_40j_B5wda_oVYqKyFtQW547LzMgQ" />
<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Begin Inspectlet Embed Code -->
<!--script type="text/javascript" id="inspectletjs">
window.__insp = window.__insp || [];
__insp.push(['wid', 1210603604]);
(function() {
function __ldinsp(){var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
document.readyState != "complete" ? (window.attachEvent ? window.attachEvent('onload', __ldinsp) : window.addEventListener('load', __ldinsp, false)) : __ldinsp();

})();
</script-->
<!-- End Inspectlet Embed Code -->

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="//use.typekit.net/zaa4pqy.js"></script>

<script>try {Typekit.load();} catch (e) {}</script>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<!-- TOP BRAND BAR -->
    <div class="hidden-xs top-header-bar-brand">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
          </div>
          <div class="col-sm-6 text-center">
            <p class="header-make-img"><a href="//makezine.com?utm_source=makercamp.com&utm_medium=brand+bar&utm_campaign=explore+all+of+make" target="_blank">Explore all of <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/make_logo.png" alt="Make: Makezine Logo" /></a></p>
          </div>
          <div class="col-sm-3">
            <p class="header-sub-link pull-right"><a href="//readerservices.makezine.com/mk?utm_source=makercamp.com&utm_medium=brand+bar&utm_campaign=mag+sub" target="_blank">Subscribe </a></p>
          </div>
        </div>
      </div>   
    </div>

    <!-- Header area -->
    <header class="container">
      <div class="row">

        <!-- LOGO & TAG LINE -->
        <div class="col-md-2 col-sm-3 col-xs-7 text-center">
          <a href="/">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/makercamp-logo.png' ?>" class="header-logo img-responsive" />
          </a>
        </div>

        <!-- MENUS -->
        <nav class="header-top-nav col-md-7 col-sm-9 col-xs-5">
          <div class="row">
            <a class="menu-bar visible-xs-block" data-toggle="collapse" href="#mc-menu">
              <span class="bars"></span>            
            </a> 
            <!-- Main Menu -->
            <?php
              wp_nav_menu( array(
                  'menu'              => 'Header main menu',
                  'theme_location'    => 'primary_menu',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
            ?>
            <!-- Mobile Menu -->
            <div class="hidden-sm hidden-md hidden-lg" id="mc-menu-container">
              <?php
                wp_nav_menu( array(
                    'menu'              => 'Header main menu',
                    'theme_location'    => 'primary_menu',
                    'depth'             => 1,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'mc-menu',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
              ?>
            </div>
          </div>
        </nav>

        <!-- SOCIAL MEDIA ICONS -->
        <div class="social-network-container col-md-3 hidden-sm hidden-xs text-center">
          <ul class="social-network social-circle">
              <li><a href="https://www.facebook.com/makemagazine?_rdr" class="icoFacebook" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/make" class="icoTwitter" title="Twitter"><i class="fa fa-twitter" target="_blank"></i></a></li>
              <li><a href="https://instagram.com/makemagazine/" class="icoInstagram" title="Instagram"><i class="fa fa-instagram" target="_blank"></i></a></li>
              <li><a href="https://plus.google.com/communities/107377046073638428310" class="icoGoogle-plus" title="Google+"><i class="fa fa-google-plus" target="_blank"></i></a></li>
          </ul>    
        </div>

      </div> <!-- row -->  
    </header>