<?php /* Template Name: About page */ ?>

<?php get_header(); ?>

  <section class="about-us">
    <div class="container-fluid">
      <?php
        $about_hero_title = makercamp_defaults_customizer('about_hero_title');
        if (!empty($about_hero_title)) :
      ?>
      <h1><?php echo $about_hero_title; ?></h1>
      <?php
        endif;

        $about_hero_text = makercamp_defaults_customizer('about_hero_text');
        if (!empty($about_hero_text)) :
      ?>
      <p><?php echo $about_hero_text; ?></p>
      <?php endif; ?>
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
            <a href="<?php echo $second_section_left_link ?>" class="read-more fancybox2-trigger">
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
                <a href="<?php echo $second_section_second_right_link; ?>" class="hide-in-mobile read-more">
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
      <?php $fourth_section_title = makercamp_defaults_customizer( 'fourth_section_title' );
      if ( ! empty( $fourth_section_title ) ) :
        ?>
        <h1><?php echo $fourth_section_title; ?></h1>
      <?php endif; ?>

      <ul class="stor-up-links">

        <?php $fourth_section_first_link = makercamp_defaults_customizer( 'fourth_section_first_link' );
        $fourth_section_second_link      = makercamp_defaults_customizer( 'fourth_section_second_link' );
        $fourth_section_third_link       = makercamp_defaults_customizer( 'fourth_section_third_link' );
        $fourth_section_fourth_link      = makercamp_defaults_customizer( 'fourth_section_fourth_link' );
        $fourth_section_fifth_link       = makercamp_defaults_customizer( 'fourth_section_fifth_link' );
        $fourth_section_first_picture    = makercamp_defaults_customizer( 'fourth_section_first_picture' );
        $fourth_section_second_picture   = makercamp_defaults_customizer( 'fourth_section_second_picture' );
        $fourth_section_third_picture    = makercamp_defaults_customizer( 'fourth_section_third_picture' );
        $fourth_section_fourth_picture   = makercamp_defaults_customizer( 'fourth_section_fourth_picture' );
        $fourth_section_fifth_picture    = makercamp_defaults_customizer( 'fourth_section_fifth_picture' );
        ?>

        <li>

          <?php if ( ! empty( $fourth_section_first_link ) ) : ?>
            <a href="<?php echo $sixth_section_first_link; ?>">
              <?php if ( ! empty( $fourth_section_first_picture ) ) : ?>
                <img src="<?php echo $fourth_section_first_picture; ?>" alt="Collection Maker Camp 2015"
                   class="img-circle">
              <?php endif; ?>
            </a>
          <?php endif; ?>

        </li>
        <li>

          <?php if ( ! empty( $fourth_section_second_link ) ) : ?>
            <a href="<?php echo $fourth_section_second_link; ?>">
              <?php if ( ! empty( $fourth_section_second_picture ) ) : ?>
                <img src="<?php echo $fourth_section_second_picture; ?>" alt="Collection Maker Camp 2015"
                   class="img-circle">
              <?php endif; ?>
            </a>
          <?php endif; ?>

        </li>
        <li>

          <?php if ( ! empty( $fourth_section_third_link ) ) : ?>
            <a href="<?php echo $fourth_section_third_link; ?>">
              <?php if ( ! empty( $fourth_section_third_picture ) ) : ?>
                <img src="<?php echo $fourth_section_third_picture; ?>" alt="Collection Maker Camp 2015"
                   class="img-circle">
              <?php endif; ?>
            </a>
          <?php endif; ?>

        </li>
        <li>

          <?php if ( ! empty( $fourth_section_fourth_link ) ) : ?>
            <a href="<?php echo $fourth_section_fourth_link; ?>">
              <?php if ( ! empty( $fourth_section_fourth_picture ) ) : ?>
                <img src="<?php echo $fourth_section_fourth_picture; ?>" alt="Collection Maker Camp 2015"
                   class="img-circle">
              <?php endif; ?>
            </a>
          <?php endif; ?>

        </li>
        <li>

          <?php if ( ! empty( $fourth_section_fifth_link ) ) : ?>
            <a href="<?php echo $fourth_section_fifth_link; ?>">
              <?php if ( ! empty( $fourth_section_fifth_picture ) ) : ?>
                <img src="<?php echo $fourth_section_fifth_picture; ?>" alt="Collection Maker Camp 2015"
                   class="img-circle">
              <?php endif; ?>
            </a>
          <?php endif; ?>

        </li>
      </ul>

      <?php $fourth_section_first_paragraph = makercamp_defaults_customizer( 'fourth_section_first_paragraph' );
      $fourth_section_second_paragraph      = makercamp_defaults_customizer( 'fourth_section_second_paragraph' );
      if ( ! empty( $fourth_section_first_paragraph ) ) :
        ?>
        <p><?php echo $fourth_section_first_paragraph; ?></p>
      <?php endif;
      if ( ! empty( $fourth_section_second_paragraph ) ) :
        ?>
        <p><?php echo $fourth_section_second_paragraph; ?></p>
      <?php endif; ?>

    </div>
  </section>

  <section class="sponsor-thanks">
    <div class="container-fluid">
      <?php 
      $sponsor_thanks_first_link       = makercamp_defaults_customizer( 'sponsor_thanks_first_link' );
      $sponsor_thanks_first_picture    = makercamp_defaults_customizer( 'sponsor_thanks_first_picture' );
      $sponsor_thanks_title            = makercamp_defaults_customizer( 'sponsor_thanks_title' );
      if ( ! empty( $sponsor_thanks_title ) ) :
        ?>
        <h1 class="text-center"><?php echo $sponsor_thanks_title; ?></h1>
      <?php endif; ?>
      <div class="row">
        <div class="col-xs-12 text-center">
          <?php if ( ! empty( $sponsor_thanks_first_link ) ) : ?>
            <a href="<?php echo $sponsor_thanks_first_link; ?>">
              <?php if ( ! empty( $sponsor_thanks_first_picture ) ) : ?>
                <img src="<?php echo $sponsor_thanks_first_picture; ?>" alt="Maker Camp Sponsor" class="img-responsive" />
              <?php endif; ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <section class="presenters">
    <div class="container-fluid">
      <?php $about_sixth_section_title = makercamp_defaults_customizer( 'about_sixth_section_title' );
      if (!empty($about_sixth_section_title)) :
        ?>
        <h1>
          <span class="presenters-desctop"><?php echo $about_sixth_section_title; ?></span>
        </h1>
      <?php endif; ?>


      <ul class="presenters-section">
        <?php
        $args = array(
            'post_type' => 'crew',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC'
        );
        $crew = new WP_Query( $args );
        if ( $crew->have_posts() ) {
          while ( $crew->have_posts() ) {
            $crew->the_post();
            echo '<li class="presenters-section">';
            echo get_the_post_thumbnail();
            echo '<h2>'. get_the_title() . '</h2>';
            echo '<p>' . the_content() . '</p>';
            echo '</li>';
          }
        } else {
          // Постов не найдено
        }
        /* Возвращаем оригинальные данные поста. Сбрасываем $post. */
        wp_reset_postdata();
        ?>

      </ul>
    </div>
  </section>

<?php get_footer(); ?>