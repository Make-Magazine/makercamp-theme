<?php /* Template Name: Hidden Page */ ?>

<?php get_header(); ?>

	<section class="hiden-hero">
		<div class="container-fluid">
			<?php
			$hidden_hero_title = makercamp_defaults_customizer( 'hidden_hero_title' );
			if ( ! empty( $hidden_hero_title ) ) :
				?>
				<h1><?php echo $hidden_hero_title; ?></h1>
			<?php endif;

			$hidden_hero_text = makercamp_defaults_customizer( 'hidden_hero_text' );
			if ( ! empty( $hidden_hero_text ) ) :
				?>
				<p><?php echo $hidden_hero_text ?></p>
			<?php endif; ?>
		</div>
	</section>

	<section class="affiliates-todo">
		<div class="container-fluid">
			<?php $hidden_first_section_title = makercamp_defaults_customizer( 'hidden_first_section_title' );
			if ( ! empty( $hidden_first_section_title ) ) :
				?>
				<h1><?php echo $hidden_first_section_title; ?></h1>
			<?php endif; ?>

			<ul class="affiliates-todo-list">
				<li>
					<span class="first-todo">1</span>
					<?php $hidden_first_section_first_text = makercamp_defaults_customizer( 'hidden_first_section_first_text' );
					if ( ! empty( $hidden_first_section_first_text ) ) :
						?>
						<p><?php echo makercamp_defaults_customizer( 'hidden_first_section_first_text' ); ?></p>
					<?php endif; ?>
				</li>

				<li>
					<span class="second-todo">2</span>
					<?php $hidden_first_section_second_text = makercamp_defaults_customizer( 'hidden_first_section_second_text' );
					if ( ! empty( $hidden_first_section_second_text ) ) :
						?>
						<p><?php echo makercamp_defaults_customizer( 'hidden_first_section_second_text' ); ?></p>
					<?php endif; ?>
				</li>

				<li>
					<span class="third-todo">3</span>
					<?php $hidden_first_section_third_text = makercamp_defaults_customizer( 'hidden_first_section_third_text' );
					if ( ! empty( $hidden_first_section_third_text ) ) :
						?>
						<p><?php echo makercamp_defaults_customizer( 'hidden_first_section_third_text' ); ?></p>
					<?php endif; ?>
				</li>

				<li>
					<span class="fourth-todo">4</span>
					<?php $hidden_first_section_fourth_text = makercamp_defaults_customizer( 'hidden_first_section_fourth_text' );
					if ( ! empty( $hidden_first_section_fourth_text ) ) :
						?>
						<p><?php echo makercamp_defaults_customizer( 'hidden_first_section_fourth_text' ); ?></p>
					<?php endif; ?>
				</li>
			</ul>

			<?php $hidden_first_section_link = makercamp_defaults_customizer( 'hidden_first_section_link' );
			if ( ! empty( $hidden_first_section_link ) ) : ?>
				<a href="<?php echo $hidden_first_section_link; ?>" class="mc-blue-btn">
					<?php
					$hidden_first_section_link_title = makercamp_defaults_customizer( 'hidden_first_section_link_title' );
					if ( ! empty( $hidden_first_section_link_title ) ) :
						echo $hidden_first_section_link_title;
					endif; ?>
				</a>
			<?php endif; ?>

		</div>
	</section>

	<section class="digital-assets">
		<div class="container-fluid">
			<?php $hidden_third_section_title = makercamp_defaults_customizer( 'hidden_third_section_title' );
			if ( ! empty( $hidden_third_section_title ) ) :
				?>
				<h1><?php echo $hidden_third_section_title; ?></h1>
			<?php endif; ?>

			<ul class="assets-download">
				<li>
					<?php $hidden_third_section_first_block_picture = makercamp_defaults_customizer( 'hidden_third_section_first_block_picture' );
					$hidden_third_section_first_block_title         = makercamp_defaults_customizer( 'hidden_third_section_first_block_title' );
					$hidden_third_section_first_block_link          = makercamp_defaults_customizer( 'hidden_third_section_first_block_link' );
					if ( ! empty( $hidden_third_section_first_block_picture ) ) :
						?>
						<img src="<?php echo $hidden_third_section_first_block_picture; ?> " alt="Maker Camp Affiliate Badges">
					<?php endif;
					if ( ! empty( $hidden_third_section_first_block_title ) ) :
						?>
						<p><?php echo $hidden_third_section_first_block_title; ?></p>
					<?php endif;
					if ( ! empty( $hidden_third_section_first_block_link ) ) :
						?>
						<a href="<?php echo $hidden_third_section_first_block_link; ?>" class="read-more" download>
							<?php
							$hidden_third_section_first_block_link_title = makercamp_defaults_customizer( 'hidden_third_section_first_block_link_title' );
							if ( ! empty( $hidden_third_section_first_block_link_title ) ) :
								echo $hidden_third_section_first_block_link_title;
							endif;
							?>
						</a>
					<?php endif; ?>
				</li>

				<li>
					<?php $hidden_third_section_second_block_picture = makercamp_defaults_customizer( 'hidden_third_section_second_block_picture' );
					$hidden_third_section_second_block_title         = makercamp_defaults_customizer( 'hidden_third_section_second_block_title' );
					$hidden_third_section_second_block_link          = makercamp_defaults_customizer( 'hidden_third_section_second_block_link' );
					if ( ! empty( $hidden_third_section_second_block_picture ) ) :
						?>
						<img src="<?php echo $hidden_third_section_second_block_picture; ?> " alt="Maker Camp Robot Logo">
					<?php endif;
					if ( ! empty( $hidden_third_section_second_block_title ) ) :
						?>
						<p><?php echo $hidden_third_section_second_block_title; ?></p>
					<?php endif;
					if ( ! empty( $hidden_third_section_second_block_link ) ) :
						?>
						<a href="<?php echo $hidden_third_section_second_block_link; ?>" class="read-more" download>
							<?php
							$hidden_third_section_second_block_link_title = makercamp_defaults_customizer( 'hidden_third_section_second_block_link_title' );
							if ( ! empty( $hidden_third_section_second_block_link_title ) ) :
								echo $hidden_third_section_second_block_link_title;
							endif;
							?>
						</a>
					<?php endif; ?>
				</li>

				<li>
					<?php $hidden_third_section_third_block_picture = makercamp_defaults_customizer( 'hidden_third_section_third_block_picture' );
					$hidden_third_section_third_block_title         = makercamp_defaults_customizer( 'hidden_third_section_third_block_title' );
					$hidden_third_section_third_block_link          = makercamp_defaults_customizer( 'hidden_third_section_third_block_link' );
					if ( ! empty( $hidden_third_section_third_block_picture ) ) :
						?>
						<img src="<?php echo $hidden_third_section_third_block_picture; ?> " alt="Maker Camp Logo">
					<?php endif;
					if ( ! empty( $hidden_third_section_third_block_title ) ) :
						?>
						<p><?php echo $hidden_third_section_third_block_title; ?></p>
					<?php endif;
					if ( ! empty( $hidden_third_section_third_block_link ) ) :
						?>
						<a href="<?php echo $hidden_third_section_third_block_link; ?>" class="read-more" download>
							<?php
							$hidden_third_section_third_block_link_title = makercamp_defaults_customizer( 'hidden_third_section_third_block_link_title' );
							if ( ! empty( $hidden_third_section_third_block_link_title ) ) :
								echo $hidden_third_section_third_block_link_title;
							endif;
							?>
						</a>
					<?php endif; ?>
				</li>

				<li>
					<?php $hidden_third_section_fourth_block_picture = makercamp_defaults_customizer( 'hidden_third_section_fourth_block_picture' );
					$hidden_third_section_fourth_block_title         = makercamp_defaults_customizer( 'hidden_third_section_fourth_block_title' );
					$hidden_third_section_fourth_block_link          = makercamp_defaults_customizer( 'hidden_third_section_fourth_block_link' );
					if ( ! empty( $hidden_third_section_fourth_block_picture ) ) :
						?>
						<img src="<?php echo $hidden_third_section_fourth_block_picture; ?> " alt="Maker Camp Affiliate Playbook">
					<?php endif;
					if ( ! empty( $hidden_third_section_fourth_block_title ) ) :
						?>
						<p><?php echo $hidden_third_section_fourth_block_title; ?></p>
					<?php endif;
					if ( ! empty( $hidden_third_section_fourth_block_link ) ) :
						?>
						<a href="<?php echo $hidden_third_section_fourth_block_link; ?>" class="read-more" download>
							<?php
							$hidden_third_section_fourth_block_link_title = makercamp_defaults_customizer( 'hidden_third_section_fourth_block_link_title' );
							if ( ! empty( $hidden_third_section_fourth_block_link_title ) ) :
								echo $hidden_third_section_fourth_block_link_title;
							endif;
							?>
						</a>
					<?php endif; ?>
				</li>

				<li>
					<?php $hidden_third_section_fifth_block_picture = makercamp_defaults_customizer( 'hidden_third_section_fifth_block_picture' );
					$hidden_third_section_fifth_block_title         = makercamp_defaults_customizer( 'hidden_third_section_fifth_block_title' );
					$hidden_third_section_fifth_block_link          = makercamp_defaults_customizer( 'hidden_third_section_fifth_block_link' );
					if ( ! empty( $hidden_third_section_fifth_block_picture ) ) :
						?>
						<img src="<?php echo $hidden_third_section_fifth_block_picture; ?> " alt="Maker Camp Affiliate Kit">
					<?php endif;
					if ( ! empty( $hidden_third_section_fifth_block_title ) ) :
						?>
						<p><?php echo $hidden_third_section_fifth_block_title; ?></p>
					<?php endif;
					if ( ! empty( $hidden_third_section_fifth_block_link ) ) :
						?>
						<a href="<?php echo $hidden_third_section_fifth_block_link; ?>" class="read-more" download>
							<?php
							$hidden_third_section_fifth_block_link_title = makercamp_defaults_customizer( 'hidden_third_section_fifth_block_link_title' );
							if ( ! empty( $hidden_third_section_fifth_block_link_title ) ) :
								echo $hidden_third_section_fifth_block_link_title;
							endif;
							?>
						</a>
					<?php endif; ?>
				</li>
			</ul>

		</div>
	</section>

	<section class="castle">
		<div class="container-fluid">
			<img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>castle.png" alt="Castle section logo">
			<?php $hidden_fourth_section_text = makercamp_defaults_customizer( 'hidden_fourth_section_text' );
			if ( ! empty( $hidden_fourth_section_text ) ) :
				?>
				<p><?php echo $hidden_fourth_section_text; ?></p>
			<?php endif; ?>
		</div>
	</section>

	<section class="contacts">
		<div class="container-fluid">

			<?php $hidden_fifth_section_text_first = makercamp_defaults_customizer( 'hidden_fifth_section_text_first' );
			$hidden_fifth_section_text_second      = makercamp_defaults_customizer( 'hidden_fifth_section_text_second' );
			if ( ! empty( $hidden_fifth_section_text_first ) ) :
				?>
				<p><?php echo $hidden_fifth_section_text_first; ?></p>
			<?php endif;
			if ( ! empty( $hidden_fifth_section_text_second ) ) :
				?>
				<p><?php echo $hidden_fifth_section_text_second; ?></p>
			<?php endif; ?>
		</div>
	</section>

<?php get_footer(); ?>