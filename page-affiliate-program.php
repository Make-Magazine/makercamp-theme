<?php /* Template Name: Host a camp page */ ?>

<?php get_header(); ?>

	<section class="host-a-camp-hero">
		<article>
			<h1>Host a Camp</h1>

			<p>Thank you in advance for creating the "in your neighborhood" part of Maker Camp. We will do our
				best to make sure that the "online" part is amazing!
			</p>
			<a class="apply-now" href="https://docs.google.com/forms/d/15RlD9GtqEWd03wEKDqOuiIOroO6Amvw3sFBwQn3ilCg/viewform">Apply now</a>
		</article>
	</section>

	<section class="plane-future">
		<div class="container-fluid">
			<h1><?php echo get_theme_mod( 'host_first_section_title' ); ?></h1>
			<ul class="plane-future-steps">
				<li>
					<span class="first-step">1</span>
					<p><?php echo get_theme_mod( 'host_first_section_first_text' ); ?></p>
				</li>
				<li>
					<span class="second-step">2</span>
					<p><?php echo get_theme_mod( 'host_first_section_second_text' ); ?></p>
				</li>
			</ul>
			<ul class="plane-future-steps">
				<li>
					<span class="third-step">3</span>
					<p><?php echo get_theme_mod( 'host_first_section_third_text' ); ?></p>
				</li>
				<li>
					<span class="fourth-step">4</span>
					<p><?php echo get_theme_mod( 'host_first_section_fourth_text' ); ?></p>
				</li>
			</ul>
		</div>
	</section>

	<section class="discover">
		<div class="container-fluid">
			<h1><?php echo get_theme_mod( 'host_second_section_title' ); ?></h1>

			<ul class="projects-and-video">
				<li>
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>project_1.png" alt="Projects ideas" class="first">

					<p><?php echo get_theme_mod( 'host_second_section_first_block_title' ); ?></p>
					<a href="<?php echo get_theme_mod( 'host_second_section_first_block_link' ); ?>" class="read-more">Go</a>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>project_2.jpg" alt="Maker camp 2013 on YouTube" class="first">

					<p><?php echo get_theme_mod( 'host_second_section_second_block_title' ); ?></p>
					<a href="<?php echo get_theme_mod( 'host_second_section_second_block_link' ); ?>" class="read-more">Go</a>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>project_3.jpg" alt="Maker camp 2014 YouTube">

					<p><?php echo get_theme_mod( 'host_second_section_third_block_title' ); ?></p>
					<a href="<?php echo get_theme_mod( 'host_second_section_third_block_link' ); ?>" class="read-more">Go</a>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>project_4.jpg" alt="Google+ community">

					<p><?php echo get_theme_mod( 'host_second_section_fourth_block_title' ); ?></p>
					<a href="<?php echo get_theme_mod( 'host_second_section_fourth_block_link' ); ?>" class="read-more">Go</a>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>project_5.png" alt="More project ideas in the Maker Camp">

					<p><?php echo get_theme_mod( 'host_second_section_fifth_block_title' ); ?></p>
					<a href="<?php echo get_theme_mod( 'host_second_section_fifth_block_link' ); ?>" class="read-more">Go</a>
				</li>
			</ul>

		</div>
	</section>

<?php get_footer(); ?>