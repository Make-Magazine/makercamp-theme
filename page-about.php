<?php /* Template Name: About page */ ?>

<?php get_header(); ?>

	<section class="about-us">
		<div class="container-fluid">
    <h1><?php the_title(); ?></h1>
      <?php
        while (have_posts()) : the_post();
          the_content();
        endwhile;
      ?>
		</div>
	</section>

	<section class="our-mission">
		<div class="container-fluid">
      <?php $section_first_title = makercamp_defaults_customizer( 'section_first_title' );
        if (!empty($section_first_title)) :
      ?>
			<h1><?php echo $section_first_title; ?></h1>
      <?php endif; ?>

      <?php $section_first_text_first = makercamp_defaults_customizer( 'section_first_text_first' );
        if (!empty($section_first_text_first)) :
      ?>
			<p><?php echo $section_first_text_first; ?></p>
      <?php endif; ?>

      <?php $section_first_text_second = makercamp_defaults_customizer( 'section_first_text_second' );
        if (!empty($section_first_text_second)) :
      ?>
			<p><?php echo $section_first_text_second; ?></p>
      <?php endif; ?>

      <?php $section_first_text_third = makercamp_defaults_customizer( 'section_first_text_third' );
        if (!empty($section_first_text_third)) :
      ?>
			<p><?php echo $section_first_text_third; ?></p>
      <?php endif; ?>


			<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>about_robot.png" alt="virtual trips">
		</div>
	</section>

	<section class="presenters container-fluid">
    <?php $about_second_section_title = makercamp_defaults_customizer( 'about_second_section_title' );
      if (!empty($about_second_section_title)) :
    ?>
  	<h1>
			<span class="presenters-desctop"><?php echo $about_second_section_title; ?></span>
		</h1>
    <?php endif; ?>

    <ul class="presenters-section">
			<li>
				<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>team_courtney.png" alt="Presenter's photo" class="img-circle">

				<h2>Courtney Lentz</h2>

				<p>Has been with Maker Camp since it began in 2012. She is our Affiliate Liaison.</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>team_emily.png" alt="Presenter's photo" class="img-circle">

				<h2>Emily Coker</h2>

				<p>Calls herself a Jill of all trades, a maker, tinkerer, artist, crafter who loves drawing comics, reading comics
					and can cook like a mad scientist. She knows a little bit about a lot of things! When she’s not hanging with
					Maker Camp, you can find her playing at the Maker Media Labs where she is the Project Editor.
				</p>
			</li>
		</ul>
		<ul class="presenters-section">
			<li>
				<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>team_jim.png" alt="Presenter's photo" class="img-circle">

				<h2>James Burke</h2>

				<p>Comes back as our co-host or “Camp Director” for Maker Camp. When he’s not expressing his love of tiny electric
					cars through the Power Racing Series
					<a href="www.powerracingseries.org">(www.powerracingseries.org)</a> event
					(which he co-founded), he designs for Make: Magazine. His life is defined by three B's: Bikes, Burgers,
					Battlestar Galactica.
				</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>team_kelli.png" alt="Presenter's photo" class="img-circle">

				<h2>Kelli Townley</h2>

				<p>Joins as our Head of Production for Maker Camp. She’s a lifelong Maker who spent most of her career at Pixar.
					She’s also worked at several startups, including videogames, hardware, and health/wellness.
				</p>
			</li>
		</ul>
		<ul class="presenters-section">
			<li>
				<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>team_michelle.png" alt="Presenter's photo" class="img-circle">

				<h2>Michelle Hlubinka</h2>

				<p>Sits in the back of the Maker Camp Mess Hall making a mess with the projects. She also gets behind the wheel of
					the imaginary Maker Camp van to steer some of the content and programming with Kelli. She brings over two decades
					of experience in children’s programs and publications to our campfire circle.
				</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>team_paloma.png" alt="Presenter's photo" class="img-circle">

				<h2>Paloma Fautley</h2>

				<p>
					Paloma Fautley comes back as our co-host or “Camp Director” for Maker Camp. She first heard of Make when they
					sponsored a Rube Goldberg competition at her school and has been hooked on creating and building ever since. She
					is currently studying Robotics Engineering at UC Santa Cruz where she gets to code, build and create endlessly.
				</p>
			</li>

		</ul>
		<ul class="presenters-section">
			<li>
				<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>team_rebecca.png" alt="Presenter's photo" class="img-circle">

				<h2>Rebecca Fisher</h2>

				<p>Brings her extensive workshop, electronics, programming, design time, and experience with kids to her first
					summer at Maker Camp. She hails from San Diego where she’s majoring in UCSD’s Interdisciplinary Computing and
					the Arts program with a minor in Business. Aside from making art with code, she also loves to work with paint,
					clay, and paper mache.
				</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>team_sandra.png" alt="Presenter's photo" class="img-circle">

				<h2>Sandra Rodriguez</h2>

				<p>Knows her way around a woodshop, a metal shop, and even a foundry. Since being a part of Maker Camp last summer,
					she spent some time off from being a student in Stanford's Product Design program to teach STEAM classes in
					local elementary & middle schools and kids who were novice makers at a makerspace for kids in her hometown of L.A.
				</p>
			</li>
		</ul>
		<ul class="presenters-section">
			<li>
				<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>team_sergio.png" alt="Presenter's photo" class="img-circle">

				<h2>Sergio Burgos</h2>

				<p>Appears in some of our videos and also designed lots of our makercamp.com website! He was born and raised in
					Peru, but moved to San Francisco a few years ago to earn a BFA in Interaction Design at the California College
					for the Arts.
				</p>
			</li>
		</ul>
	</section>

<?php get_footer(); ?>