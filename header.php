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

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="//use.typekit.net/zaa4pqy.js"></script>

<script>try {
		Typekit.load();
	} catch (e) {
	}</script>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

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
					<?php if ( is_home() ) {?>
						<li class="button mobile-dropdown">
							<a href="#">Basecamp<span class="fa fa-chevron-down"></span><span class="fa fa-chevron-up"></span></a>
							<ul class="nav navbar-nav dropdown">
								<li><a href="#welcome" class="anchors-to-section">Welcome</a></li>
								<li><a href="#how-it-works" class="anchors-to-section">How it works</a></li>
								<li><a href="#themes" class="anchors-to-section">2015 Themes</a></li>
								<li><a href="#physical" class="anchors-to-section">Physical camps</a></li>
								<li><a href="#day-at-camp" class="anchors-to-section">A day at camp</a></li>
								<li><a href="#stock-up" class="anchors-to-section">Stock up for camp</a></li>
							</ul>
						</li>
					<?php } else { ?>
						<li class="button mobile-dropdown">
							<a href="#">Basecamp<span class="fa fa-chevron-down"></span><span class="fa fa-chevron-up"></span></a>
							<ul class="nav navbar-nav dropdown">
								<li><a href="/#welcome" class="anchors-to-section">Welcome</a></li>
								<li><a href="/#how-it-works" class="anchors-to-section">How it works</a></li>
								<li><a href="/#themes" class="anchors-to-section">2015 Themes</a></li>
								<li><a href="/#physical" class="anchors-to-section">Physical camps</a></li>
								<li><a href="/#day-at-camp" class="anchors-to-section">A day at camp</a></li>
								<li><a href="/#stock-up" class="anchors-to-section">Stock up for camp</a></li>
							</ul>
						</li>
					<?php } ?>

					<li><a href="<?php bloginfo( 'url' ); ?>/map">Find a camp</a></li>
					<li><a href="<?php bloginfo( 'url' ); ?>/affiliate-program">Host a camp</a></li>
					<li><a href="https://plus.google.com/communities/107377046073638428310">Share</a></li>
					<li><a href="<?php bloginfo( 'url' ); ?>/about">About</a></li>
				</ul>

			</div>

			<!-- /.navbar-collapse -->
			<span class="sponsors-header"></span>
		</div>

		<!-- /.container-fluid -->
	</header>