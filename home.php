<?php get_header(); ?>

	<section class="hero show-content" id="hero">
		<div class="animation-wrapper">
			<div class="align">
				<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>animation.png"
					 alt="Maker Camp animation" usemap="#animation" class="transparent-hero">
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

				<form action="http://whatcounts.com/bin/listctrl" method="POST" id="home-page-sign-up-form"
					  class="whatcounts-signup">
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
				<div class="watch-video-click-screen col-xs-10 col-sm-6 col-lg-4 col-xs-offset-1 col-sm-offset-3 col-lg-offset-4">
					<div>
						<a href="/current-day">
							<img class="img-responsive" src="/video-screen-shot.jpq" alt="video still image of next camp video" />
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
			<!--    Added second nav from admin menu-->
			<?php wp_nav_menu( array(
				'menu'       => 'Second nav',
				'menu_class' => 'nav navbar-nav'
			) );
			?>
		</div>
	</section>

	<section class="welcome" id="welcome">
		<div class="container-fluid">
			<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>welcome_rocket.png" class="welcome-icon"
				 alt="Welcome Maker Camp">

			<?php $first_section_title = makercamp_defaults_customizer( 'first_section_title' );
			$first_section_subtitle    = makercamp_defaults_customizer( 'first_section_subtitle' );
			if ( ! empty( $first_section_title ) ) :
				?>
				<h1><?php echo $first_section_title; ?></h1>
			<?php endif;
			if ( ! empty( $first_section_subtitle ) ) :
				?>
				<h2><?php echo $first_section_subtitle; ?></h2>
			<?php endif; ?>

			<div class="row">
				<div class="col-sm-4">

					<?php $first_section_video = makercamp_defaults_customizer( 'first_section_video' );
					if ( ! empty( $first_section_video ) ) :
						?>
						<a class="fancybox" data-fancybox-type="iframe" href="<?php echo $first_section_video; ?>">
							<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>video_pic_with_button.png"
								 alt="Video from the camp" class="pic-for-vid">
						</a>
					<?php endif; ?>

				</div>
				<div class="col-sm-4">

					<?php $first_section_central_description = makercamp_defaults_customizer( 'first_section_central_description' );
					if ( ! empty( $first_section_central_description ) ) :
						?>
						<p><?php echo $first_section_central_description; ?></p>
					<?php endif;

					$first_section_central_link = makercamp_defaults_customizer( 'first_section_central_link' );
					if ( ! empty( $first_section_central_link ) ) :
						?>
						<a href="<?php echo $first_section_central_link; ?>" data-content="Looks like you are already signed up!" data-placement="top" data-trigger="manual"
						   class="read-more sign-in-trigger">
							<?php
							$first_section_central_link_text = makercamp_defaults_customizer( 'first_section_central_link_text' );
							if ( ! empty( $first_section_central_link_text ) ) :
								echo $first_section_central_link_text;
							endif;
							?>
						</a>
					<?php endif; ?>
				</div>
				<div class="col-sm-4">

					<?php $first_section_right_description = makercamp_defaults_customizer( 'first_section_right_description' );
					if ( ! empty( $first_section_right_description ) ) :
						?>
						<p><?php echo $first_section_right_description; ?></p>
					<?php endif;

					$first_section_right_link = makercamp_defaults_customizer( 'first_section_right_link' );
					if ( ! empty( $first_section_right_link ) ) :
						?>
						<a href="<?php echo $first_section_right_link ?>" class="read-more">
							<?php $first_section_right_link_text = makercamp_defaults_customizer( 'first_section_right_link_text' );
							if ( ! empty( $first_section_right_link_text ) ) :
								echo $first_section_right_link_text;
							endif;
							?>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="how-it-works" id="how-it-works">
		<div class="container-fluid">

			<?php $second_section_title = makercamp_defaults_customizer( 'second_section_title' );
			if ( ! empty( $second_section_title ) ) :
				?>
				<h1><?php echo $second_section_title; ?></h1>
			<?php endif;

            $second_section_subtitle = makercamp_defaults_customizer( 'second_section_subtitle_h' );
			if ( ! empty( $second_section_subtitle ) ) :
				?>
				<h2><?php echo $second_section_subtitle; ?></h2>
			<?php endif; ?>

			<div class="row">
				<div class="col-sm-6">

					<?php
					$second_section_left_picture = makercamp_defaults_customizer( 'second_section_left_picture_h' );
					$second_section_left_title   = makercamp_defaults_customizer( 'second_section_left_title' );
					$second_section_left_text    = makercamp_defaults_customizer( 'second_section_left_text' );
					if ( ! empty( $second_section_left_picture ) ) :
						?>
						<img src="<?php echo $second_section_left_picture; ?>" alt="Childrens in camp" class="img-circle photo">

					<?php endif;

					if ( ! empty( $second_section_left_title ) ) :
						?>
						<h3><?php echo $second_section_left_title; ?></h3>
					<?php endif;
					if ( ! empty( $second_section_left_text ) ) :
						?>
						<p><?php echo $second_section_left_text; ?></p>
					<?php endif;

					$second_section_left_link = makercamp_defaults_customizer( 'second_section_left_link' );
					if ( ! empty( $second_section_left_link ) ) :
						?>
						<a href="<?php echo $second_section_left_link ?>" data-content="Looks like you are already signed up!" data-placement="top" data-trigger="manual"
						   class="read-more sign-in-trigger">
							<?php
							$second_section_left_link_title = makercamp_defaults_customizer( 'second_section_left_link_title' );
							if ( ! empty( $second_section_left_link_title ) ) :
								echo $second_section_left_link_title;
							endif;
							?>
						</a>
					<?php endif; ?>
				</div>
				<div class="col-sm-6">
					<?php $second_section_right_picture = makercamp_defaults_customizer( 'second_section_right_picture' );
					$second_section_right_title         = makercamp_defaults_customizer( 'second_section_right_title' );
					$second_section_right_text          = makercamp_defaults_customizer( 'second_section_right_text' );
					if ( ! empty( $second_section_right_picture ) ) :
						?>
						<img src="<?php echo $second_section_right_picture; ?>" alt="Childrens in camp" class="img-circle photo">
					<?php endif;
					if ( ! empty( $second_section_right_title ) ) :
						?>
						<h3><?php echo $second_section_right_title; ?></h3>
					<?php endif;
					if ( ! empty( $second_section_right_text ) ) :
						?>
						<p><?php echo $second_section_right_text; ?></p>
					<?php endif;

                    $second_section_first_right_link = makercamp_defaults_customizer( 'second_section_first_right_link' );
                    if ( ! empty( $second_section_first_right_link ) ) :
                        ?>
                        <a href="<?php echo $second_section_first_right_link; ?>" class="show-in-mobile read-more">
                            <?php
                            $second_section_first_right_link_title_mobile = makercamp_defaults_customizer( 'second_section_first_right_link_title_mobile' );
                            if ( ! empty( $second_section_first_right_link_title_mobile ) ) :
                                echo $second_section_first_right_link_title_mobile;
                            endif;
                            ?>
                        </a>
                    <?php endif; ?>



					<ul class="read-more-list">
                        <li><?php
                            $second_section_first_right_link = makercamp_defaults_customizer( 'second_section_first_right_link' );
                            if ( ! empty( $second_section_first_right_link ) ) :
                                ?>
                                <a href="<?php echo $second_section_first_right_link; ?>" class="hide-in-mobile read-more">
                                    <?php
                                    $second_section_first_right_link_title = makercamp_defaults_customizer( 'second_section_first_right_link_title' );
                                    if ( ! empty( $second_section_first_right_link_title ) ) :
                                        echo $second_section_first_right_link_title;
                                    endif;
                                    ?>
                                </a>
                            <?php endif; ?>
                        </li>
						<li>
							<?php
							$second_section_second_right_link = makercamp_defaults_customizer( 'second_section_second_right_link' );
							if ( ! empty( $second_section_second_right_link ) ) :
								?>
								<a href="<?php echo $second_section_first_right_link; ?>" class="hide-in-mobile read-more">
									<?php
									$second_section_second_right_link_title = makercamp_defaults_customizer( 'second_section_second_right_link_title' );
									if ( ! empty( $second_section_second_right_link_title ) ) :
										echo $second_section_second_right_link_title;
									endif;
									?>
								</a>
							<?php endif; ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="twitter-instagram" id="connect">
		<?php echo do_shortcode('[show_twitter_instagram]'); ?>
	</section>

	<section class="camp-themes" id="themes">
		<div class="container-fluid">
			<?php $third_section_title = makercamp_defaults_customizer( 'third_section_title' );
			$third_section_subtitle    = makercamp_defaults_customizer( 'third_section_subtitle' );
			if ( ! empty( $third_section_title ) ) :
				?>
				<h1><?php echo $third_section_title; ?></h1>
			<?php endif;
			if ( ! empty( $third_section_subtitle ) ) :
				?>
				<h2><?php echo $third_section_subtitle; ?></h2>
			<?php endif; ?>

			<ul class="weeks-section">
				<?php
				foreach ( $all_weeks as $week ) {
					$camp_days         = get_posts( array(
						'post_type'   => 'camp_day',
						'numberposts' => -1,
						'order'       => 'ASC',
						'meta_key'    => '_week_day',
						'orderby'     => 'meta_value_num',
						'tax_query'   => array(
							array(
								'taxonomy'         => 'week',
								'field'            => 'id',
								'terms'            => $week->term_id,
								'include_children' => FALSE
							)
						)
					) );
					$week_mobile_image = get_option( "week_mobile_image_{$week->term_id}" );
					$week_title        = $week->name;
					$week_subtitle     = $week->description;
					$week_description  = get_option( "week_long_description_{$week->term_id}" );
					echo '<li>';
					echo '<h4>' . $week_title . '</h4>';
					echo '<img src="' . $week_mobile_image . '" alt="week title">';
					echo '<h3>' . $week_subtitle . '</h3>';
					echo '<p>' . $week_description . '<p>';
					echo '</li>';
				}
				?>
			</ul>
		</div>
	</section>

	<section class="physical-campsites" id="physical">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-offset-6 col-sm-6">

					<?php $fourth_section_title = makercamp_defaults_customizer( 'fourth_section_title' );
					$fourth_section_subtitle    = makercamp_defaults_customizer( 'fourth_section_subtitle' );
					$fourth_section_subsubtitle = makercamp_defaults_customizer( 'fourth_section_subsubtitle' );
					if ( ! empty( $fourth_section_title ) ) :
						?>
						<h1><?php echo $fourth_section_title; ?></h1>
					<?php endif;

					if ( ! empty( $fourth_section_subtitle ) ) :
						?>
						<h2><?php echo $fourth_section_subtitle; ?></h2>
					<?php endif;

					if ( ! empty( $fourth_section_subsubtitle ) ) :
						?>
						<h3><?php echo $fourth_section_subsubtitle; ?></h3>
					<?php endif; ?>

					<ul class="sponsors-logo">

						<?php $fourth_section_first_picture = makercamp_defaults_customizer( 'fourth_section_first_picture' );
						$fourth_section_second_picture      = makercamp_defaults_customizer( 'fourth_section_second_picture' );
						$fourth_section_third_picture       = makercamp_defaults_customizer( 'fourth_section_third_picture' );
						$fourth_section_fourth_picture      = makercamp_defaults_customizer( 'fourth_section_fourth_picture' );
						?>

						<li class="smaller">
							<?php if ( ! empty( $fourth_section_first_picture ) ) : ?>
								<img src="<?php echo $fourth_section_first_picture; ?>" alt="Our sponsor" class="smaller">
							<?php endif; ?>
						</li>

						<li class="smaller">
							<?php if ( ! empty( $fourth_section_second_picture ) ) : ?>
								<img src="<?php echo $fourth_section_second_picture; ?>" alt="Our sponsor" class="smaller">
							<?php endif; ?>
						</li>

						<li>
							<?php if ( ! empty( $fourth_section_third_picture ) ) : ?>
								<img src="<?php echo $fourth_section_third_picture; ?>" alt="Our sponsor">
							<?php endif; ?>
						</li>

						<li>
							<?php if ( ! empty( $fourth_section_fourth_picture ) ) : ?>
								<img src="<?php echo $fourth_section_fourth_picture; ?>" alt="Our sponsor">
							<?php endif; ?>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</section>

	<section class="physical-campsites-description">
		<div class="container-fluid">
			<ul class="physical-campsites-description-list">

				<?php $fourth_section_first_paragraph = makercamp_defaults_customizer( 'fourth_section_first_paragraph' );
				$fourth_section_second_paragraph      = makercamp_defaults_customizer( 'fourth_section_second_paragraph' );
				$fourth_section_first_link            = makercamp_defaults_customizer( 'fourth_section_first_link' );
				$fourth_section_second_link           = makercamp_defaults_customizer( 'fourth_section_second link' );
				?>

				<li>

					<?php if ( ! empty( $fourth_section_first_paragraph ) ) : ?>
						<p><?php echo $fourth_section_first_paragraph; ?></p>
					<?php endif;
					if ( ! empty( $fourth_section_second_paragraph ) ) :
						?>
						<p><?php echo $fourth_section_second_paragraph; ?></p>
					<?php endif; ?>

				</li>
				<li>

					<?php if ( ! empty( $fourth_section_first_link ) ) : ?>
						<a href="<?php echo $fourth_section_first_link; ?>" class="read-more">
							<?php $fourth_section_first_link_title = makercamp_defaults_customizer( 'fourth_section_first_link_title' );
							if ( ! empty( $fourth_section_first_link_title ) ) :
								echo $fourth_section_first_link_title;
							endif;
							?>
						</a>
					<?php endif;

					$fourth_section_second_link = makercamp_defaults_customizer( 'fourth_section_second_link' );
					if ( ! empty( $fourth_section_second_link ) ) :
						?>
						<a href="<?php echo $fourth_section_second_link; ?>" class="read-more">
							<?php $fourth_section_second_link_title = makercamp_defaults_customizer( 'fourth_section_second_link_title' );
							if ( ! empty( $fourth_section_second_link_title ) ) :
								echo $fourth_section_second_link_title;
							endif;
							?>
						</a>
					<?php endif; ?>

				</li>
			</ul>
		</div>
	</section>

	<section class="day-at-camp" id="day-at-camp">
		<div class="container-fluid">

			<?php $fifth_section_title   = makercamp_defaults_customizer( 'fifth_section_title' );
			$fifth_section_left_title    = makercamp_defaults_customizer( 'fifth_section_left_title' );
			$fifth_section_left_text     = makercamp_defaults_customizer( 'fifth_section_left_text' );
			$fifth_section_central_title = makercamp_defaults_customizer( 'fifth_section_central_title' );
			$fifth_section_central_text  = makercamp_defaults_customizer( 'fifth_section_central_text' );
			$fifth_section_right_title   = makercamp_defaults_customizer( 'fifth_section_right_title' );
			$fifth_section_right_text    = makercamp_defaults_customizer( 'fifth_section_right_text' );
			if ( ! empty( $fifth_section_title ) ) :
				?>
				<h1><?php echo $fifth_section_title; ?></h1>
			<?php endif; ?>

			<div class="col-sm-4">

				<?php if ( ! empty( $fifth_section_left_title ) ) : ?>
					<h2><?php echo $fifth_section_left_title; ?></h2>
				<?php endif;
				if ( ! empty( $fifth_section_left_text ) ) :
					?>
					<p><?php echo $fifth_section_left_text; ?></p>
				<?php endif; ?>

			</div>
			<div class="col-sm-4">

				<?php if ( ! empty( $fifth_section_central_title ) ) : ?>
					<h2><?php echo $fifth_section_central_title; ?></h2>
				<?php endif;
				if ( ! empty( $fifth_section_central_text ) ) :
					?>
					<p><?php echo $fifth_section_central_text; ?></p>
				<?php endif; ?>

			</div>
			<div class="col-sm-4">

				<?php if ( ! empty( $fifth_section_right_title ) ) : ?>
					<h2><?php echo $fifth_section_right_title; ?></h2>
				<?php endif;
				if ( ! empty( $fifth_section_right_text ) ) :
					?>
					<p><?php echo $fifth_section_right_text; ?></p>
				<?php endif; ?>

			</div>
		</div>
	</section>

	<section class="stock-up" id="stock-up">
		<div class="container-fluid">
			<?php $sixth_section_title = makercamp_defaults_customizer( 'sixth_section_title' );
			if ( ! empty( $sixth_section_title ) ) :
				?>
				<h1><?php echo $sixth_section_title; ?></h1>
			<?php endif; ?>

			<ul class="stor-up-links">

				<?php $sixth_section_first_link = makercamp_defaults_customizer( 'sixth_section_first_link' );
				$sixth_section_second_link      = makercamp_defaults_customizer( 'sixth_section_second_link' );
				$sixth_section_third_link       = makercamp_defaults_customizer( 'sixth_section_third_link' );
				$sixth_section_fourth_link      = makercamp_defaults_customizer( 'sixth_section_fourth_link' );
				$sixth_section_fifth_link       = makercamp_defaults_customizer( 'sixth_section_fifth_link' );
				$sixth_section_first_picture    = makercamp_defaults_customizer( 'sixth_section_first_picture' );
				$sixth_section_second_picture   = makercamp_defaults_customizer( 'sixth_section_second_picture' );
				$sixth_section_third_picture    = makercamp_defaults_customizer( 'sixth_section_third_picture' );
				$sixth_section_fourth_picture   = makercamp_defaults_customizer( 'sixth_section_fourth_picture' );
				$sixth_section_fifth_picture    = makercamp_defaults_customizer( 'sixth_section_fifth_picture' );
				?>

				<li>

					<?php if ( ! empty( $sixth_section_first_link ) ) : ?>
						<a href="<?php echo $sixth_section_first_link; ?>">
							<?php if ( ! empty( $sixth_section_first_picture ) ) : ?>
								<img src="<?php echo $sixth_section_first_picture; ?>" alt="Collection Maker Camp 2015"
									 class="img-circle">
							<?php endif; ?>
						</a>
					<?php endif; ?>

				</li>
				<li>

					<?php if ( ! empty( $sixth_section_second_link ) ) : ?>
						<a href="<?php echo $sixth_section_second_link; ?>">
							<?php if ( ! empty( $sixth_section_second_picture ) ) : ?>
								<img src="<?php echo $sixth_section_second_picture; ?>" alt="Collection Maker Camp 2015"
									 class="img-circle">
							<?php endif; ?>
						</a>
					<?php endif; ?>

				</li>
				<li>

					<?php if ( ! empty( $sixth_section_third_link ) ) : ?>
						<a href="<?php echo $sixth_section_third_link; ?>">
							<?php if ( ! empty( $sixth_section_third_picture ) ) : ?>
								<img src="<?php echo $sixth_section_third_picture; ?>" alt="Collection Maker Camp 2015"
									 class="img-circle">
							<?php endif; ?>
						</a>
					<?php endif; ?>

				</li>
				<li>

					<?php if ( ! empty( $sixth_section_fourth_link ) ) : ?>
						<a href="<?php echo $sixth_section_fourth_link; ?>">
							<?php if ( ! empty( $sixth_section_fourth_picture ) ) : ?>
								<img src="<?php echo $sixth_section_fourth_picture; ?>" alt="Collection Maker Camp 2015"
									 class="img-circle">
							<?php endif; ?>
						</a>
					<?php endif; ?>

				</li>
				<li>

					<?php if ( ! empty( $sixth_section_fifth_link ) ) : ?>
						<a href="<?php echo $sixth_section_fifth_link; ?>">
							<?php if ( ! empty( $sixth_section_fifth_picture ) ) : ?>
								<img src="<?php echo $sixth_section_fifth_picture; ?>" alt="Collection Maker Camp 2015"
									 class="img-circle">
							<?php endif; ?>
						</a>
					<?php endif; ?>

				</li>
			</ul>

			<?php $sixth_section_first_paragraph = makercamp_defaults_customizer( 'sixth_section_first_paragraph' );
			$sixth_section_second_paragraph      = makercamp_defaults_customizer( 'sixth_section_second_paragraph' );
			if ( ! empty( $sixth_section_first_paragraph ) ) :
				?>
				<p><?php echo $sixth_section_first_paragraph; ?></p>
			<?php endif;
			if ( ! empty( $sixth_section_second_paragraph ) ) :
				?>
				<p><?php echo $sixth_section_second_paragraph; ?></p>
			<?php endif; ?>

		</div>
	</section>

<?php get_footer(); ?>