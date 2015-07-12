<?php get_header(); ?>

	<section class="hero show-content" id="hero">
		<div class="animation-wrapper">
			<div class="align">
				<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>animation.png" alt="Maker Camp animation" usemap="#animation" class="transparent-hero">
			</div>
		</div>

		<div class="content">

			<article class="start-screen">
				<h1>Go to camp!</h1>

				<a class="sign-up" href="#">Sign up to get started, It’s Free!</a>
				<a class="sign-in" href="#">I’ve already signed up. Get me started!</a>
			</article>

			<article class="sign-up-screen">
				<h1>Welcome to Maker Camp!</h1>

				<p>
					Maker Camp starts right here on makercamp.com on July 6.
				</p>

				<p>
					Sign up to get updates and fun alerts!
				</p>

				<form action="http://whatcounts.com/bin/listctrl" method="POST" id="home-page-sign-up-form" class="whatcounts-signup">
					<input type="hidden" name="slid" value="6B5869DC547D3D4658DF84D7F99DCB43" />
					<input type="hidden" name="cmd" value="subscribe" />
					<input type="hidden" name="goto" value="http://makercamp.com" />
					<input type="hidden" name="errors_to" value="http://makercamp.com" />

					<input type="hidden" name="custom_source" value="Home Page" />
					<input type="hidden" name="custom_incentive" value="none" />
					<input type="hidden" name="custom_host" value="makercamp.com" />
					<input type="hidden" name="custom_url" value="Makercamp" />

					<input type="text" id="first" name="name" required="" placeholder="Your Name..." />
					<input type="email" id="email" name="email" required="" placeholder="Your E-mail..." />

					<input type="hidden" id="format_plain" name="format" value="plain">

					<input type="submit" value="Subscribe" />
				</form>
			</article>

			<article class="thank-you-screen">
				<div class="watch-video-click-screen col-sm-6 col-sm-offset-3">
					<div>
						<a href="/current-day">
							<img class="img-responsive" src="/video-screen-shot.jpq" alt="video still image of next camp video"/>
						</a>
					</div>
					<a class="go-to-camp" href="/current-day">WATCH TODAY&#39;S VIDEO!</a>
				</div>
				<div class="col-xs-12">
					<a class="start-now clearfix" href="#">OR EXPLORE THE MAP</a>
				</div>

			</article>
		</div>

		<?php

		$all_weeks = get_terms( 'week' );

		?>

		<map id="animation" name="animation" class="animated-areas">
			<?php foreach ( $all_weeks as $week ) {

				/**
				 * Week's slug
				 */
				$week_slug = $week->slug;

				/**
				 * Week's animation coords
				 */
				$week_anim_coords = get_option( "week_anim_coords_{$week->term_id}" ); ?>

				<area onmousemove="showAnimation(alt)" onmouseout="hideAnimation(alt)"
					  alt="<?php echo $week_slug; ?>" title="" href="#" shape="poly"
					  coords="<?php echo $week_anim_coords; ?>" />
			<?php } ?>
		</map>

		<?php

		/**
		 * Loop through all weeks to build a stack of weeks
		 */
		foreach ( $all_weeks as $week ) {

			/**
			 * Get week's icon (locked by default)
			 */
			$__is_current   = FALSE;
			$week_permalink = '#';
			$week_icon      = '<span class="icon-locked"></span>';
			$posts_unlocked = get_posts( array(
				'post_type'  => 'camp_day',
				'meta_key'   => '_lock_status',
				'meta_value' => 1,
				'showposts'  => -1,
				'tax_query'  => array(
					array(
						'taxonomy'         => 'week',
						'field'            => 'id',
						'terms'            => $week->term_id,
						'include_children' => FALSE
					)
				)
			) );

			if ( $posts_unlocked ) {

				$week_permalink = get_permalink( $posts_unlocked[ 0 ]->ID );

				/**
				 * Check if current week
				 */
				foreach ( $posts_unlocked as $__post ) {
					$__is_current = get_post_meta( $__post->ID, '_is_current', TRUE );

					if ( $__is_current ) {
						$week_icon      = '<span class="icon-current"></span>';
						$week_permalink = get_permalink( $__post->ID );
						break;
					}
				}

				/**
				 * If not current - then just unlocked
				 */
				if ( ! $__is_current ) {
					$week_icon = '<span class="icon-unlocked"></span>';
				}
			}

			/**
			 * Week's cover image
			 */
			$week_mobile_image = get_option( "week_mobile_image_{$week->term_id}" );

			/**
			 * Week's title
			 */
			$week_title = $week->name;

			/**
			 * Week's slug
			 */
			$week_slug = $week->slug;

			/**
			 * Week's subtitle
			 */
			$week_subtitle = $week->description;

			/**
			 * Week's description
			 */
			$week_description = get_option( "week_long_description_{$week->term_id}" ); ?>

			<div class="week <?php echo $__is_current ? 'current-week' : ''; ?> <?php echo $week_slug; ?>"></div>

			<div class="week-modal-wrapper week-<?php echo $week_slug; ?>">
				<div class="week-modal">
					<div class="week-modal-inner">
						<a class="close-modal" href="#"><span class="fa fa-close"></span></a>

						<div class="content-wrap">
							<?php echo $week_mobile_image ? '<img class="week-mobile-image" src="' . $week_mobile_image . '" alt="' . $week_title . '" />' : ''; ?>
							<span class="week-title"><?php echo $week_title . ': ' . $week_subtitle; ?></span>

							<?php echo $week_icon; ?>

							<p class="hero-paragraph">
								<?php echo $week_description; ?>
								<?php if ( ! $posts_unlocked ) : ?>
									<span class="coming-soon">Coming soon!</span>
								<?php endif; ?>
							</p>

							<?php if ( $posts_unlocked ) { ?>
								<a class="start-week" href="<?php echo esc_url( $week_permalink ); ?>">Start <?php echo $week_title; ?>!</a>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		<?php
		}
		?>

		<a href="#second-navbar" class="anchors-to-section read-more"></a>

		<a href="#second-navbar" class="anchors-to-section">
			<div class="arrows">
				<div class="col-xs-1">
					<div class="arrow-background"></div>
				</div>
			</div>
		</a>
	</section>

	<section class="navbar-second" id="second-navbar">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li>
					<a href="#welcome" class="anchors-to-section">Welcome</a>
				</li>
				<li>
					<a href="#how-it-works" class="anchors-to-section">How it works</a>
				</li>
				<li>
					<a href="#themes" class="anchors-to-section">2015 Themes</a>
				</li>
				<li>
					<a href="#physical" class="anchors-to-section">Physical camps</a>
				</li>
				<li>
					<a href="#day-at-camp" class="anchors-to-section">A day at camp</a>
				</li>
				<li>
					<a href="#stock-up" class="anchors-to-section">Stock up for camp</a>
				</li>
			</ul>
		</div>
	</section>

	<section class="welcome" id="welcome">
		<div class="container-fluid">
			<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>welcome_rocket.png" class="welcome-icon" alt="Welcome Maker Camp">

		  <h1><?php echo get_theme_mod( 'first_section_title'); ?></h1>

      <h2><?php echo get_theme_mod( 'first_section_subtitle' ); ?></h2>

			<div class="row">
				<div class="col-sm-4">
					<a class="fancybox" data-fancybox-type="iframe" href="<?php echo get_theme_mod( 'first_section_video'); ?>">
						<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>video_pic_with_button.png" alt="Video from the camp" class="pic-for-vid">
					</a>
				</div>
				<div class="col-sm-4">
					<p>
            <?php echo get_theme_mod('first_section_central_description'); ?>
					</p>
					<a href="#hero" data-content="Looks like you are already signed up!" data-placement="top" data-trigger="manual" class="read-more sign-in-trigger">Sign up!</a>
				</div>
				<div class="col-sm-4">
					<p>
            <?php echo get_theme_mod('first_section_right_description'); ?>
					</p>

					<a href="<?php bloginfo( 'url' ); ?>/affiliate-program" class="read-more">Host a camp</a>
				</div>
			</div>
		</div>
	</section>

	<section class="how-it-works" id="how-it-works">
		<div class="container-fluid">
			<h1><?php echo get_theme_mod( 'second_section_title' ); ?></h1>

			<h2><?php echo get_theme_mod( 'second_section_subtitle' ); ?></h2>

			<div class="row">
				<div class="col-sm-6">
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>how_it_works.png" alt="Childrens in camp" class="img-circle photo">

					<h3><?php echo get_theme_mod( 'second_section_left_title' ); ?></h3>
					<p><?php echo get_theme_mod( 'second_section_left_text' ); ?></p>

					<a href="#hero" data-content="Looks like you are already signed up!" data-placement="top" data-trigger="manual" class="read-more sign-in-trigger">Sign up for fun alerts</a>
				</div>
				<div class="col-sm-6">
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>how_camp_works.png" alt="Childrens in camp" class="img-circle photo">

					<h3><?php echo get_theme_mod( 'second_section_right_title' ); ?></h3>

					<p><?php echo get_theme_mod( 'second_section_right_text' ); ?></p>

					<a href="<?php bloginfo( 'url' ); ?>/map" class="show-in-mobile read-more">Find a campsite</a>

					<ul class="read-more-list">
						<li>
							<a href="<?php bloginfo( 'url' ); ?>/map" class="hide-in-mobile read-more">Find a campsite in your neighborhood</a>
						</li>
						<li>
							<a href="<?php bloginfo( 'url' ); ?>/affiliate-program" class="hide-in-mobile read-more small">Host a camp</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="camp-themes" id="themes">
		<div class="container-fluid">
			<h1><?php echo get_theme_mod( 'third_section_title' ); ?></h1>
			<h2><?php echo get_theme_mod( 'third_section_subtitle' ); ?></h2>

			<ul class="weeks-section">
				<li>
					<h4>Week 1:</h4>
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>2015_maker_camp_week_1.png" alt="first week" class="img-circle">

					<h3><strong>Fantasy</strong>, July 6–10</h3>

					<p>Make: believe with the magic behind the movies, ending with a Maker Camp Film Fest.</p>
				</li>
				<li>
					<h4>Week 2:</h4>
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>2015_maker_camp_week_2.png" alt="second week" class="img-circle">

					<h3><strong>Funkytown</strong>, July 13–17</h3>

					<p>Make some instruments, then make some noise in the Maker Camp Battle of the Bands.</p>
				</li>
				<li>
					<h4>Week 3:</h4>
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>2015_maker_camp_week_3.png" alt="third week" class="img-circle">

					<h3><strong>Farmstead</strong>, July 20–24</h3>

					<p>Hack the Hoedown with sustainable energy, food, architecture, and craft that bridge
						across centuries.
					</p>
				</li>
			</ul>

			<ul class="weeks-section">
				<li>
					<h4>Week 4:</h4>
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>2015_maker_camp_week_4.png" alt="fourth week" class="img-circle">

					<h3><strong>Fun & Games</strong>, July 27–31</h3>

					<p>Roll out the fun with games you make yourself, then challenge your friends with a Maker
						Camp Carnival.
					</p>
				</li>
				<li>
					<h4>Week 5:</h4>
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>2015_maker_camp_week_5.png" alt="fiveth week" class="img-circle">

					<h3><strong>Flight</strong>, August 3–7</h3>

					<p>Take off in this make-off of all things that zip and zoom above our heads, culminating
						in the Maker Camp Air Show.
					</p>
				</li>
				<li>
					<h4 class="week-six">Week 6:</h4>
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>2015_maker_camp_week_6.png" alt="sixth week" class="img-circle">

					<h3><strong>Far-Out Future</strong>, August 10–14</h3>

					<p>Step into the future with personal fab projects using new materials, and strut your
						shiny stuff in a Far-Out Fashion Show.
					</p>
				</li>
			</ul>
		</div>
	</section>

	<section class="physical-campsites" id="physical">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-offset-6 col-sm-6">
					<h1><?php echo get_theme_mod( 'fourth_section_title' ); ?></h1>
					<h2><?php echo get_theme_mod( 'fourth_section_subtitle' ); ?></h2>
					<h3><?php echo get_theme_mod( 'fourth_section_subsubtitle' ); ?></h3>

					<ul class="sponsors-logo">
						<li class="smaller">
							<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>sponsors_ALA_logo.png" class="smaller">
						</li>
						<li class="smaller">
							<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>sponsors_Intel_Cubhouse_logo.png" class="smaller">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>sponsors_4H_logo.png">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>sponsors_Boys_Girls_CLub_logo.png">
						</li>
					</ul>

				</div>
			</div>
		</div>
	</section>

	<section class="physical-campsites-description">
		<div class="container-fluid">
			<ul class="physical-campsites-description-list">
				<li>
					<p><?php echo get_theme_mod( 'fourth_section_first_paragraph' ); ?></p>
					<p><?php echo get_theme_mod( 'fourth_section_second_paragraph' ); ?></p>
				</li>
				<li>
					<a href="<?php bloginfo( 'url' ); echo get_theme_mod( 'fourth_section_first_link' ); ?>" class="read-more">Find out if there’s one close to you, and join the fun</a>
					<a href="<?php bloginfo( 'url' ); echo get_theme_mod( 'fourth_section_second_link' ); ?>" class="read-more">Host a camp</a>
				</li>
			</ul>
		</div>
	</section>

	<section class="day-at-camp" id="day-at-camp">
		<div class="container-fluid">
			<h1><?php echo get_theme_mod( 'fifth_section_title' ); ?></h1>

			<div class="col-sm-4">
				<h2><?php echo get_theme_mod( 'fifth_section_left_title' ); ?></h2>
				<p><?php echo get_theme_mod( 'fifth_section_left_text' ); ?></p>
			</div>
			<div class="col-sm-4">
        <h2><?php echo get_theme_mod( 'fifth_section_central_title' ); ?></h2>
        <p><?php echo get_theme_mod( 'fifth_section_central_text' ); ?></p>
			</div>
			<div class="col-sm-4">
        <h2><?php echo get_theme_mod( 'fifth_section_right_title' ); ?></h2>
        <p><?php echo get_theme_mod( 'fifth_section_right_text' ); ?></p>
			</div>
		</div>
	</section>

	<section class="stock-up" id="stock-up">
		<div class="container-fluid">
			<h1><?php echo get_theme_mod( 'sixth_section_title' ); ?></h1>
			<ul class="stor-up-links">
				<li>
					<a href="<?php echo get_theme_mod( 'sixth_section_first_link' ); ?>"><img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>stock_camp_1.png" alt="Change this later" class="img-circle"></a>
				</li>
				<li>
					<a href="<?php echo get_theme_mod( 'sixth_section_second_link' ); ?>"><img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>stock_camp_2.png" alt="Change this later" class="img-circle"></a>
				</li>
				<li>
					<a href="<?php echo get_theme_mod( 'sixth_section_third_link' ); ?>"><img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>stock_camp_3.png" alt="Change this later" class="img-circle"></a>
				</li>
				<li>
					<a href="<?php echo get_theme_mod( 'sixth_section_fourth_link' ); ?>"><img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>stock_camp_4.png" alt="Change this later" class="img-circle"></a>
				</li>
				<li>
					<a href="<?php echo get_theme_mod( 'sixth_section_fifth_link' ); ?>"><img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>stock_camp_5.png" alt="Change this later" class="img-circle"></a>
				</li>
			</ul>

			<p><?php echo get_theme_mod( 'sixth_section_first_paragraph' ); ?></p>
			<p><?php echo get_theme_mod( 'sixth_section_second_paragraph' ); ?></p>
		</div>
	</section>

<?php get_footer(); ?>
