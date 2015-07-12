<?php /* Template Name: Hidden page */ ?>

<?php get_header(); ?>

	<section class="hiden-hero">
		<div class="container-fluid">
			<h1>welcome!</h1>

			<p>
				Thank you in advance for creating the "in your neighborhood" part of Maker Camp. We will do our best to
				make sure that the "online" part is amazing!
			</p>
		</div>
	</section>

	<section class="affiliates-todo">
		<div class="container-fluid">
			<h1><?php echo get_theme_mod( 'hidden_first_section_title' ); ?></h1>

			<ul class="affiliates-todo-list">
				<li>
					<span class="first-todo">1</span>
					<p><?php echo get_theme_mod( 'hidden_first_section_first_text' ); ?></p>
				</li>
				<li>
					<span class="second-todo">2</span>
					<p><?php echo get_theme_mod( 'hidden_first_section_second_text' ); ?></p>
				</li>
				<li>
					<span class="third-todo">3</span>
					<p><?php echo get_theme_mod( 'hidden_first_section_third_text' ); ?></p>
				</li>
				<li>
					<span class="fourth-todo">4</span>
					<p><?php echo get_theme_mod( 'hidden_first_section_fourth_text' ); ?></p>
				</li>
				<li class="link">
					<a href="<?php echo get_theme_mod( 'hidden_first_section_link' ); ?>" class="read-more">visit google+ community </a>
				</li>
			</ul>

		</div>
	</section>

	<section class="maker-camp">
		<div class="container-fluid">
			<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>pensils.png" alt="Section logo, pensils">

			<h1><?php echo get_theme_mod( 'hidden_second_section_title' ); ?></h1>
			<p><?php echo get_theme_mod( 'hidden_second_section_text' ); ?></p>

			<ul class="weeks-section">
				<li>
					<h3>Week 1: </h3>
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>2015_maker_camp_week_1.png" alt="first week" class="img-circle">

					<h2><strong>Fantasy</strong>, July 6–10 </h2>

					<p>Make: believe with the magic behind the movies, ending with a Maker Camp Film Fest. </p>
					<a href="<?php bloginfo( 'url' ); ?>/wp-content/uploads/2015/07/2015_week1.pdf" class="read-more">Download pdf</a>
				</li>
				<li>
					<h3>Week 2: </h3>
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>2015_maker_camp_week_2.png" alt="second week" class="img-circle">

					<h2><strong>Funkytown</strong>, July 13–17 </h2>

					<p>Make some instruments, then make some noise in the Maker Camp Battle of the Bands. </p>
					<a href="<?php bloginfo( 'url' ); ?>/wp-content/uploads/2015/07/2015_week2.pdf" class="read-more">Download pdf</a>
				</li>
        <li>
          <h3>Week 3: </h3>
          <img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>2015_maker_camp_week_3.png" alt="third week" class="img-circle">

          <h2><strong>Farmstead</strong>, July 20–24 </h2>

          <p>Hack the Hoedown with sustainable energy, food, architecture, and craft that bridge
            across centuries.
          </p>
        </li>
      </ul>
      <ul class="weeks-section">
				<li>
					<h3>Week 4: </h3>
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>2015_maker_camp_week_4.png" alt="fourth week" class="img-circle">

					<h2><strong>Fun & Games</strong>, July 27–31 </h2>

					<p>Roll out the fun with games you make yourself, then challenge your friends with a Maker
						Camp Carnival.
					</p>
				</li>
        <li>
          <h3>Week 5: </h3>
          <img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>2015_maker_camp_week_5.png" alt="fiveth week" class="img-circle">

          <h2><strong>Flight</strong>, August 3–7 </h2>

          <p>Take off in this make-off of all things that zip and zoom above our heads, culminating
            in the Maker Camp Air Show.
          </p>
        </li>
				<li>
					<h3>Week 6: </h3>
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>2015_maker_camp_week_6.png" alt="sixth week" class="img-circle">

					<h2><strong>Far-Out Future</strong>, August 10–14 </h2>

					<p>Step into the future with personal fab projects using new materials, and strut your
						shiny stuff in a Far-Out Fashion Show.
					</p>
				</li>
			</ul>

		</div>
	</section>

	<section class="digital-assets">
		<div class="container-fluid">
			<h1><?php echo get_theme_mod( 'hidden_third_section_title' ); ?></h1>

			<ul class="assets-download">
				<li>
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>download_one.jpg" alt="Maker Camp Affiliate Badges">

					<p><?php echo get_theme_mod( 'hidden_third_section_first_block_title' ); ?></p>
					<a href="<?php echo get_theme_mod( 'hidden_third_section_first_block_link' ); ?>" class="read-more">Download</a>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>download_two.jpg" alt="Maker Camp Robot Logo ">

					<p><?php echo get_theme_mod( 'hidden_third_section_second_block_title' ); ?></p>
					<a href="<?php echo get_theme_mod( 'hidden_third_section_second_block_link' ); ?>" class="read-more">Download</a>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>download_three.jpg" alt="Maker Camp Logo ">

					<p><?php echo get_theme_mod( 'hidden_third_section_third_block_title' ); ?></p>
					<a href="<?php echo get_theme_mod( 'hidden_third_section_third_block_link' ); ?>" class="read-more">Download</a>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>download_four.jpg" alt="Maker Camp Affiliate Playbook">

					<p><?php echo get_theme_mod( 'hidden_third_section_fourth_block_title' ); ?></p>
					<a href="<?php echo get_theme_mod( 'hidden_third_section_fourth_block_link' ); ?>" class="read-more">Download</a>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>download_five.jpg" alt="Maker Camp Affiliate Kit">

					<p><?php echo get_theme_mod( 'hidden_third_section_fifth_block_title' ); ?></p>
					<a href="<?php echo get_theme_mod( 'hidden_third_section_fifth_block_link' ); ?>" class="read-more">Download </a>
				</li>
			</ul>

		</div>
	</section>

	<section class="castle">
		<div class="container-fluid">
			<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>castle.png" alt="Castle section logo">

			<p><?php echo get_theme_mod( 'hidden_fourth_section_text' ); ?></p>
		</div>
	</section>

	<section class="contacts">
		<div class="container-fluid">
			<p><?php echo get_theme_mod( 'hidden_fifth_section_text_first' ); ?></p>
			<p><?php echo get_theme_mod( 'hidden_fifth_section_text_second' ); ?></p>
		</div>
	</section>

<?php get_footer(); ?>