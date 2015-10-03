<?php get_header(); ?>

	<section class="hero show-content" id="hero">

		<!-- FALL 2015 HOME PAGE TAKEOVER -->
		<div class="content">
			<div class="container home-fall2015">
				<div class="row">
		      <?php 
		      $hero_section_yt 		= makercamp_defaults_customizer( 'hero_section_yt' );
		      $hero_section_title	= makercamp_defaults_customizer( 'hero_section_title' );
		      $hero_section_subtitle 	= makercamp_defaults_customizer( 'hero_section_subtitle' );
		      ?>
					<div class="col-xs-12 col-sm-push-6 col-sm-6">
						<h1><?php if( ! empty( $hero_section_title ) ) : echo $hero_section_title; endif; ?></h1>
						<hr />
						<p><?php if( ! empty( $hero_section_subtitle ) ) : echo $hero_section_subtitle; endif; ?></p>
					</div>
					<div class="col-xs-12 col-sm-pull-6 col-sm-6">
						<div class="embed-youtube">
							<iframe src="https://www.youtube.com/embed/<?php if( ! empty( $hero_section_yt ) ) : echo $hero_section_yt; endif; ?>?rel=0&showinfo=0&theme=light&modestbranding=1" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- SAVE THIS IF WE DECIDE TO USE IT NEXT CAMP -->
		<!--div class="animation-wrapper">
			<div class="align">
				<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>animation.png"
					 alt="Maker Camp animation" usemap="#animation" class="transparent-hero">
			</div>
		</div-->

		<div class="content" style="display:none">
			<!-- POST CAMP MESSAGE -->
			<article class="post-camp-message">
				<h1>Announcing Maker Camp<br />After-School!</h1>
				<h2>Keep making year round with the Maker Camp team! On Monday, October 5th we kick off our 10-week Fall session of our After-School program.</h2>
				<div class="col-xs-12">
					<a class="sign-up" href="#">Sign up for the After-School program!</a>
					<a class="blue-button clearfix" href="/#themes">Explore Previous Camp Programming</a>
				</div>
			</article>

			<!-- WELCOME MESSAGE -->
			<!--article class="start-screen">
				<h1>Go to camp!</h1>
				<a class="sign-up" href="#">Sign up to get started, It’s Free!</a>
				<a class="sign-in" href="#">I’ve already signed up. Get me started!</a>
			</article-->

			<!-- EMAIL ACQUISITION SCREEN -->
			<article class="sign-up-screen">
				<h1>Sign up for the After-School program!</h1>
				<p>Keep making year round with the Maker Camp team!</p>
				<p>On Monday, October 5th we kick off our 10-week Fall session of our After-School program.</p>
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

			<!-- THANK YOU SCREEN- WATCH VIDEO/EXPLORE MAP -->
			<article class="thank-you-screen">

				<h1>Thanks for signing up for the After-School program!</h1>
				<div class="col-xs-12">
					<a class="blue-button clearfix" href="/#themes">Explore Previous Camp Programming</a>
				</div>

			</article>
		</div>

		<?php
		$all_weeks = get_terms( 'week' );
		?>

		<!--map id="animation" name="animation" class="animated-areas">
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
		</map-->

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

			<!--div class="week <?php echo $__is_current ? 'current-week' : ''; ?> <?php echo $week_slug; ?>"></div>

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
			</div-->
			<?php
		}
		?>

		<!--a href="#second-navbar" class="anchors-to-section read-more"></a>

		<a href="#second-navbar" class="anchors-to-section">
			<div class="arrows">
				<div class="col-xs-1">
					<div class="arrow-background"></div>
				</div>
			</div>
		</a-->
	</section>

<!-- 	<section class="navbar-second" id="second-navbar">
		<div class="container-fluid">
			<?php wp_nav_menu( array(
				'menu'       => 'Second nav',
				'menu_class' => 'nav navbar-nav'
			) );
			?>
		</div>
	</section> -->

  <section class="discover">
    <div class="container-fluid">

      <?php $home_first_section_title = makercamp_defaults_customizer('home_first_section_title');
      if (!empty($home_first_section_title)) :
        ?>
        <h1><?php echo $home_first_section_title; ?></h1>
      <?php endif ?>


      <ul class="projects-and-video">
        <li class="col-xs-12 col-sm-4 col-md-2 col-md-offset-1">
          <div>
          <?php
          $home_first_section_first_block_picture = makercamp_defaults_customizer('home_first_section_first_block_picture');
          $home_first_section_first_block_title = makercamp_defaults_customizer('home_first_section_first_block_title');
          $home_first_section_first_block_link = makercamp_defaults_customizer('home_first_section_first_block_link');
          $home_first_section_first2_block_title = makercamp_defaults_customizer('home_first_section_first2_block_link_title');
          $home_first_section_first2_block_link = makercamp_defaults_customizer('home_first_section_first2_block_link');
          if (!empty($home_first_section_first_block_picture)) :
            ?>
            <img src="<?php echo $home_first_section_first_block_picture; ?>" alt="Projects ideas" class="img-responsive">
          <?php
          endif;
          if (!empty($home_first_section_first_block_title)) :
            ?>
            <p><?php echo $home_first_section_first_block_title; ?></p>
          <?php
          endif;
          // First Link
          if (!empty($home_first_section_first_block_link)) :
            ?>
            <a href="<?php echo $home_first_section_first_block_link; ?>" class="read-more">
            <?php
                $home_first_section_first_block_link_title = makercamp_defaults_customizer('home_first_section_first_block_link_title');
                if ( ! empty( $home_first_section_first_block_link_title )) :
                    echo $home_first_section_first_block_link_title;
                endif;
            ?>
            </a>
          <?php endif;
          // Second Link
          if (!empty($home_first_section_first2_block_link)) :
            ?>
            <a href="<?php echo $home_first_section_first2_block_link; ?>" class="read-more">
            <?php
                $home_first_section_first2_block_link_title = makercamp_defaults_customizer('home_first_section_first2_block_link_title');
                if ( ! empty( $home_first_section_first2_block_link_title )) :
                    echo $home_first_section_first2_block_link_title;
                endif;
            ?>
            </a>
          <?php endif; 
          ?>
        </div>
        </li>

        <li class="col-xs-12 col-sm-4 col-md-2">
          <div>
          <?php
          $home_first_section_second_block_picture = makercamp_defaults_customizer('home_first_section_second_block_picture');
          $home_first_section_second_block_title = makercamp_defaults_customizer('home_first_section_second_block_title');
          $home_first_section_second_block_link = makercamp_defaults_customizer('home_first_section_second_block_link');
          $home_first_section_second2_block_title = makercamp_defaults_customizer('home_first_section_second2_block_link_title');
          $home_first_section_second2_block_link = makercamp_defaults_customizer('home_first_section_second2_block_link');
          if (!empty($home_first_section_second_block_picture)) :
            ?>
            <img src="<?php echo $home_first_section_second_block_picture; ?>" alt="Maker camp 2013 on YouTube"
                 class="img-responsive">
          <?php
          endif;
          if (!empty($home_first_section_second_block_title)) :
            ?>
            <p><?php echo $home_first_section_second_block_title; ?></p>
          <?php
          endif;
          // First link
          if (!empty($home_first_section_second_block_link)) :
            ?>
            <a href="<?php echo $home_first_section_second_block_link; ?>" class="read-more">
                <?php
                $home_first_section_second_block_link_title = makercamp_defaults_customizer('home_first_section_second_block_link_title');
                if ( ! empty( $home_first_section_second_block_link_title )) :
                    echo $home_first_section_second_block_link_title;
                endif;
                ?>
            </a>
          <?php endif;
          // Second link
          if (!empty($home_first_section_second2_block_link)) :
            ?>
            <a href="<?php echo $home_first_section_second2_block_link; ?>" class="read-more">
                <?php
                $home_first_section_second2_block_link_title = makercamp_defaults_customizer('home_first_section_second2_block_link_title');
                if ( ! empty( $home_first_section_second2_block_link_title )) :
                    echo $home_first_section_second2_block_link_title;
                endif;
                ?>
            </a>
          <?php endif; 
          ?>
        </div>
        </li>

        <li class="col-xs-12 col-sm-4 col-md-2">
          <div>
          <?php
          $home_first_section_third_block_picture = makercamp_defaults_customizer('home_first_section_third_block_picture');
          $home_first_section_third_block_title = makercamp_defaults_customizer('home_first_section_third_block_title');
          $home_first_section_third_block_link = makercamp_defaults_customizer('home_first_section_third_block_link');
          $home_first_section_third2_block_title = makercamp_defaults_customizer('home_first_section_third2_block_link_title');
          $home_first_section_third2_block_link = makercamp_defaults_customizer('home_first_section_third2_block_link');
          if (!empty($home_first_section_third_block_picture)) :
            ?>
            <img class="img-responsive" src="<?php echo $home_first_section_third_block_picture; ?>" alt="Maker camp 2014 YouTube">
          <?php
          endif;
          if (!empty($home_first_section_third_block_title)) :
            ?>
            <p><?php echo $home_first_section_third_block_title; ?></p>
          <?php
          endif;
          // First link
          if (!empty($home_first_section_third_block_link)) :
            ?>
            <a href="<?php echo $home_first_section_third_block_link; ?>" class="read-more">
                <?php
                $home_first_section_third_block_link_title = makercamp_defaults_customizer('home_first_section_third_block_link_title');
                if ( ! empty( $home_first_section_third_block_link_title )) :
                    echo $home_first_section_third_block_link_title;
                endif;
                ?>
            </a>
          <?php endif;
          // Second link
          if (!empty($home_first_section_third2_block_link)) :
            ?>
            <a href="<?php echo $home_first_section_third2_block_link; ?>" class="read-more">
                <?php
                $home_first_section_third2_block_link_title = makercamp_defaults_customizer('home_first_section_third2_block_link_title');
                if ( ! empty( $home_first_section_third2_block_link_title )) :
                    echo $home_first_section_third2_block_link_title;
                endif;
                ?>
            </a>
          <?php endif;
          ?>
        </div>
        </li>

        <li class="col-xs-12 col-sm-4 col-md-2">
          <div>
          <?php
          $home_first_section_fourth_block_picture = makercamp_defaults_customizer('home_first_section_fourth_block_picture');
          $home_first_section_fourth_block_title = makercamp_defaults_customizer('home_first_section_fourth_block_title');
          $home_first_section_fourth_block_link = makercamp_defaults_customizer('home_first_section_fourth_block_link');
          $home_first_section_fourth2_block_title = makercamp_defaults_customizer('home_first_section_fourth2_block_link_title');
          $home_first_section_fourth2_block_link = makercamp_defaults_customizer('home_first_section_fourth2_block_link');
          if (!empty($home_first_section_fourth_block_picture)) :
            ?>
            <img class="img-responsive" src="<?php echo $home_first_section_fourth_block_picture; ?>" alt="Google+ community">
          <?php
          endif;
          if (!empty($home_first_section_fourth_block_title)) :
            ?>
            <p><?php echo $home_first_section_fourth_block_title; ?></p>
          <?php
          endif;
          // First link
          if (!empty($home_first_section_fourth_block_link)) :
            ?>
            <a href="<?php echo $home_first_section_fourth_block_link; ?>" class="read-more">
                <?php
                $home_first_section_fourth_block_link_title = makercamp_defaults_customizer('home_first_section_fourth_block_link_title');
                if ( ! empty( $home_first_section_fourth_block_link_title )) :
                    echo $home_first_section_fourth_block_link_title;
                endif;
                ?>
            </a>
          <?php endif;
          // Second link
          if (!empty($home_first_section_fourth2_block_link)) :
            ?>
            <a href="<?php echo $home_first_section_fourth2_block_link; ?>" class="read-more">
                <?php
                $home_first_section_fourth2_block_link_title = makercamp_defaults_customizer('home_first_section_fourth2_block_link_title');
                if ( ! empty( $home_first_section_fourth2_block_link_title )) :
                    echo $home_first_section_fourth2_block_link_title;
                endif;
                ?>
            </a>
          <?php endif;
          ?>
        </div>
        </li>

        <li class="col-xs-12 col-sm-4 col-md-2">
          <div>
          <?php
          $home_first_section_fifth_block_picture = makercamp_defaults_customizer('home_first_section_fifth_block_picture');
          $home_first_section_fifth_block_title = makercamp_defaults_customizer('home_first_section_fifth_block_title');
          $home_first_section_fifth_block_link = makercamp_defaults_customizer('home_first_section_fifth_block_link');
          $home_first_section_fifth2_block_title = makercamp_defaults_customizer('home_first_section_fifth2_block_link_title');
          $home_first_section_fifth2_block_link = makercamp_defaults_customizer('home_first_section_fifth2_block_link');
          if (!empty($home_first_section_fifth_block_picture)) :
            ?>
            <img class="img-responsive" src="<?php echo $home_first_section_fifth_block_picture; ?>"
                 alt="More project ideas in the Maker Camp">
          <?php
          endif;
          if (!empty($home_first_section_fifth_block_title)) :
            ?>
            <p><?php echo $home_first_section_fifth_block_title; ?></p>
          <?php
          endif;
          // First link
          if (!empty($home_first_section_fifth_block_link)) :
            ?>
            <a href="<?php echo $home_first_section_fifth_block_link; ?>" class="read-more">
                <?php
                $home_first_section_fifth_block_link_title = makercamp_defaults_customizer('home_first_section_fifth_block_link_title');
                if ( ! empty( $home_first_section_fifth_block_link_title )) :
                    echo $home_first_section_fifth_block_link_title;
                endif;
                ?>
            </a>
          <?php endif;
          // Second link
          if (!empty($home_first_section_fifth2_block_link)) :
            ?>
            <a href="<?php echo $home_first_section_fifth2_block_link; ?>" class="read-more">
                <?php
                $home_first_section_fifth2_block_link_title = makercamp_defaults_customizer('home_first_section_fifth2_block_link_title');
                if ( ! empty( $home_first_section_fifth2_block_link_title )) :
                    echo $home_first_section_fifth2_block_link_title;
                endif;
                ?>
            </a>
          <?php endif;
          ?>
        </div>
        </li>

      </ul>

    </div>
  </section>

	<section class="twitter-instagram" id="connect">
		<?php echo do_shortcode('[show_twitter_instagram]'); ?>
	</section>

<?php get_footer(); ?>