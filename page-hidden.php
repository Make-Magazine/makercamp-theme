<?php /* Template Name: Hidden page */ ?>

<?php get_header(); ?>

	<section class="hiden-hero">
		<div class="container-fluid">
      <h1><?php the_title(); ?></h1>
      <?php
        while (have_posts()) : the_post();
          the_content();
        endwhile;
      ?>
		</div>
	</section>

	<section class="affiliates-todo">
		<div class="container-fluid">
      <?php $hidden_first_section_title = makercamp_defaults_customizer('hidden_first_section_title');
        if (!empty($hidden_first_section_title)) :
      ?>
			<h1><?php echo $hidden_first_section_title; ?></h1>
      <?php endif; ?>

			<ul class="affiliates-todo-list">
				<li>
					<span class="first-todo">1</span>
          <?php $hidden_first_section_first_text = makercamp_defaults_customizer('hidden_first_section_first_text');
            if (!empty($hidden_first_section_first_text)) :
          ?>
					<p><?php echo makercamp_defaults_customizer( 'hidden_first_section_first_text'); ?></p>
          <?php endif; ?>
				</li>

				<li>
					<span class="second-todo">2</span>
          <?php $hidden_first_section_second_text = makercamp_defaults_customizer('hidden_first_section_second_text');
            if (!empty($hidden_first_section_second_text)) :
          ?>
          <p><?php echo makercamp_defaults_customizer( 'hidden_first_section_second_text'); ?></p>
          <?php endif; ?>
        </li>

				<li>
					<span class="third-todo">3</span>
          <?php $hidden_first_section_third_text = makercamp_defaults_customizer('hidden_first_section_third_text');
            if (!empty($hidden_first_section_third_text)) :
          ?>
          <p><?php echo makercamp_defaults_customizer( 'hidden_first_section_third_text'); ?></p>
          <?php endif; ?>
        </li>

				<li>
					<span class="fourth-todo">4</span>
          <?php $hidden_first_section_fourth_text = makercamp_defaults_customizer('hidden_first_section_fourth_text');
            if (!empty($hidden_first_section_fourth_text)) :
          ?>
          <p><?php echo makercamp_defaults_customizer( 'hidden_first_section_fourth_text'); ?></p>
          <?php endif; ?>
        </li>

				<li class="link">
          <?php $hidden_first_section_link = makercamp_defaults_customizer('hidden_first_section_link');
            if (!empty($hidden_first_section_link)) :
          ?>
					<a href="<?php echo $hidden_first_section_link; ?>" class="read-more">visit google+ community </a>
          <?php endif; ?>
          </li>
			</ul>

		</div>
	</section>

	<section class="maker-camp">
		<div class="container-fluid">
			<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>pensils.png" alt="Section logo, pensils">

      <?php $hidden_second_section_title = makercamp_defaults_customizer( 'hidden_second_section_title');
        $hidden_second_section_title = makercamp_defaults_customizer( 'hidden_second_section_text');
        if (!empty($hidden_second_section_title)) :
      ?>
			<h1><?php echo $hidden_second_section_title; ?></h1>
      <?php endif;
        if (!empty($hidden_second_section_title)) :
      ?>
			<p><?php echo $hidden_second_section_title; ?></p>
      <?php endif; ?>

<!--      <ul class="weeks-section">-->
<!--        --><?php
//        foreach ($all_weeks as $week) {
//          $camp_days = get_posts(array(
//              'post_type' => 'camp_day',
//              'numberposts' => -1,
//              'order' => 'ASC',
//              'meta_key' => '_week_day',
//              'orderby' => 'meta_value_num',
//              'tax_query' => array(
//                  array(
//                      'taxonomy' => 'week',
//                      'field' => 'id',
//                      'terms' => $week->term_id,
//                      'include_children' => FALSE
//                  )
//              )
//          ));
//
//          $week_mobile_image = get_option("week_mobile_image_{$week->term_id}");
//          $week_title = $week->name;
//          $week_subtitle = $week->description;
//          $week_description = get_option("week_long_description_{$week->term_id}");
//
//          echo '<li>';
//          echo '<h3>' . $week_title . '</h3>';
//          echo '<img src="' . $week_mobile_image . '">';
//          echo '<h2>' . $week_subtitle . '</h2>';
//          echo '<p>' . $week_description . '<p>';
//          echo '</li>';
//
//        }
//        ?>
<!--      </ul>-->

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
      <?php $hidden_third_section_title = makercamp_defaults_customizer('hidden_third_section_title');
        if (!empty($hidden_third_section_title)) :
      ?>
			<h1><?php echo $hidden_third_section_title; ?></h1>
      <?php endif; ?>

			<ul class="assets-download">
				<li>
          <?php $hidden_third_section_first_block_picture = makercamp_defaults_customizer('hidden_third_section_first_block_picture');
          $hidden_third_section_first_block_title = makercamp_defaults_customizer('hidden_third_section_first_block_title');
          $hidden_third_section_first_block_link = makercamp_defaults_customizer('hidden_third_section_first_block_link');

          if (!empty($hidden_third_section_first_block_picture)) :
          ?>
					<img src="<?php echo $hidden_third_section_first_block_picture; ?> " alt="Maker Camp Affiliate Badges">
          <?php endif;
            if (!empty($hidden_third_section_first_block_title)) :
          ?>
					<p><?php echo $hidden_third_section_first_block_title; ?></p>
          <?php endif;
            if (!empty($hidden_third_section_first_block_link)) :
          ?>
					<a href="<?php echo $hidden_third_section_first_block_link; ?>" class="read-more">Download</a>
          <?php endif; ?>
				</li>

				<li>
          <?php $hidden_third_section_second_block_picture = makercamp_defaults_customizer('hidden_third_section_second_block_picture');
            $hidden_third_section_second_block_title = makercamp_defaults_customizer('hidden_third_section_second_block_title');
            $hidden_third_section_second_block_link = makercamp_defaults_customizer('hidden_third_section_second_block_link');

            if (!empty($hidden_third_section_second_block_picture)) :
          ?>
          <img src="<?php echo $hidden_third_section_second_block_picture; ?> " alt="Maker Camp Robot Logo">
          <?php endif;
            if (!empty($hidden_third_section_second_block_title)) :
          ?>
          <p><?php echo $hidden_third_section_second_block_title; ?></p>
          <?php endif;
            if (!empty($hidden_third_section_second_block_link)) :
          ?>
          <a href="<?php echo $hidden_third_section_second_block_link; ?>" class="read-more">Download</a>
          <?php endif; ?>
				</li>

				<li>
          <?php $hidden_third_section_third_block_picture = makercamp_defaults_customizer('hidden_third_section_third_block_picture');
            $hidden_third_section_third_block_title = makercamp_defaults_customizer('hidden_third_section_third_block_title');
            $hidden_third_section_third_block_link = makercamp_defaults_customizer('hidden_third_section_third_block_link');

            if (!empty($hidden_third_section_third_block_picture)) :
          ?>
          <img src="<?php echo $hidden_third_section_third_block_picture; ?> " alt="Maker Camp Logo">
          <?php endif;
            if (!empty($hidden_third_section_third_block_title)) :
          ?>
          <p><?php echo $hidden_third_section_third_block_title; ?></p>
          <?php endif;
            if (!empty($hidden_third_section_third_block_link)) :
          ?>
          <a href="<?php echo $hidden_third_section_third_block_link; ?>" class="read-more">Download</a>
          <?php endif; ?>
				</li>

				<li>
          <?php $hidden_third_section_fourth_block_picture = makercamp_defaults_customizer('hidden_third_section_fourth_block_picture');
            $hidden_third_section_fourth_block_title = makercamp_defaults_customizer('hidden_third_section_fourth_block_title');
            $hidden_third_section_fourth_block_link = makercamp_defaults_customizer('hidden_third_section_fourth_block_link');

            if (!empty($hidden_third_section_fourth_block_picture)) :
          ?>
          <img src="<?php echo $hidden_third_section_fourth_block_picture; ?> " alt="Maker Camp Affiliate Playbook">
          <?php endif;
            if (!empty($hidden_third_section_fourth_block_title)) :
          ?>
          <p><?php echo $hidden_third_section_fourth_block_title; ?></p>
          <?php endif;
            if (!empty($hidden_third_section_fourth_block_link)) :
          ?>
          <a href="<?php echo $hidden_third_section_fourth_block_link; ?>" class="read-more">Download</a>
          <?php endif; ?>
				</li>

				<li>
          <?php $hidden_third_section_fifth_block_picture = makercamp_defaults_customizer('hidden_third_section_fifth_block_picture');
            $hidden_third_section_fifth_block_title = makercamp_defaults_customizer('hidden_third_section_fifth_block_title');
            $hidden_third_section_fifth_block_link = makercamp_defaults_customizer('hidden_third_section_fifth_block_link');

            if (!empty($hidden_third_section_fifth_block_picture)) :
          ?>
          <img src="<?php echo $hidden_third_section_fifth_block_picture; ?> " alt="Maker Camp Affiliate Kit">
          <?php endif;
            if (!empty($hidden_third_section_fifth_block_title)) :
          ?>
          <p><?php echo $hidden_third_section_fifth_block_title; ?></p>
          <?php endif;
            if (!empty($hidden_third_section_fifth_block_link)) :
          ?>
          <a href="<?php echo $hidden_third_section_fifth_block_link; ?>" class="read-more">Download</a>
          <?php endif; ?>
				</li>
			</ul>

		</div>
	</section>

	<section class="castle">
		<div class="container-fluid">
			<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>castle.png" alt="Castle section logo">
      <?php $hidden_fourth_section_text = makercamp_defaults_customizer('hidden_fourth_section_text');
        if (!empty($hidden_fourth_section_text)) :
      ?>
			<p><?php echo $hidden_fourth_section_text; ?></p>
      <?php endif; ?>
		</div>
	</section>

	<section class="contacts">
		<div class="container-fluid">

      <?php $hidden_fifth_section_text_first = makercamp_defaults_customizer( 'hidden_fifth_section_text_first' );
        $hidden_fifth_section_text_second = makercamp_defaults_customizer( 'hidden_fifth_section_text_second' );

        if (!empty($hidden_fifth_section_text_first)) :
      ?>
			<p><?php echo $hidden_fifth_section_text_first; ?></p>
      <?php endif;
        if (!empty($hidden_fifth_section_text_second)) :
      ?>
			<p><?php echo $hidden_fifth_section_text_second; ?></p>
      <?php endif; ?>
		</div>
	</section>

<?php get_footer(); ?>

















