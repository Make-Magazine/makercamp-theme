<?php get_header(); ?>

<section>
  <a href="/map/#host-a-campsite">
    <img src="<?php echo get_template_directory_uri() . '/assets/img/maker-camp-coming-soon.jpg' ?>" alt="Join our free community for kids who are making around the world, online and in your neighborhood" style="width: 100%;" class="img-responsive" />
  </a>
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

  <?php
  $home_quick_message_section_checkbox = makercamp_defaults_customizer('home_quick_message_section_checkbox');
  if(true === get_theme_mod('home_quick_message_section_checkbox')){
  ?>
    <section id="quick-message">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-md-9 padtop padbottom">
            <?php 
            $home_quick_message_section_title = makercamp_defaults_customizer('home_quick_message_section_title');
            $home_quick_message_section_text = makercamp_defaults_customizer('home_quick_message_section_text');
            $home_quick_message_section_picture = makercamp_defaults_customizer('home_quick_message_section_picture');
            if (!empty($home_quick_message_section_title)) :?>
              <h2><?php echo $home_quick_message_section_title; ?></h2>
            <?php endif;
            if (!empty($home_quick_message_section_text)) :?>
              <p class="lead"><?php echo $home_quick_message_section_text; ?></p>
            <?php endif; ?>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-3 padtop padbottom">
            <?php
            if (!empty($home_quick_message_section_picture)) :
              ?>
              <img src="<?php echo $home_quick_message_section_picture; ?>" alt="Message Image" class="img-responsive">
            <?php
            endif; ?>
          </div>
        </div>
      </div>
    </section>
  <?php
  }
  ?>

  <section id="discover" class="discover">
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