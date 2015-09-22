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

<script>try {
		Typekit.load();
	} catch (e) {
	}</script>

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

	<header class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
						data-target="#navbar-collapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="fa fa-close"></span>
				</button>
				<a href="<?php bloginfo( 'url' ); ?>" class="logo"><img src="<?php echo get_template_directory_uri() . '/assets/img/Logo.jpg' ?>" alt="Maker Camp"></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav main-nav">
                    <li class="button mobile-dropdown">
                        <a href="#">Basecamp<span class="fa fa-chevron-down"></span><span class="fa fa-chevron-up"></span></a>
                        <?php
                        if (is_home()) {
                            wp_nav_menu( array (
                                'menu'        => 'Second nav',
                                'menu_class'  => 'nav navbar-nav dropdown',
                                'container'   => ''
                            ) );
                        } else {
                            wp_nav_menu( array (
                                    'menu'        => 'Header dropdown menu',
                                    'menu_class'  => 'nav navbar-nav dropdown',
                                    'container'   => ''
                            ) );
                        };
                        ?>
                    </li>
                <?php wp_nav_menu( array(
                        'theme_location'  => 'primary_menu',
                        'menu'       => 'Header main menu',
                        'menu_class' => 'nav navbar-nav main-nav',
                        'items_wrap' => '%3$s',
                        'container'  => ''
                ) );
                ?>
                </ul>
			</div>

			<!-- /.navbar-collapse -->
			<span class="sponsors-header"></span>
		</div>

		<!-- /.container-fluid -->
	</header>