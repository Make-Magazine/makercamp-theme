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

  <section class="presenters container-fluid">
    <?php $about_second_section_title = makercamp_defaults_customizer( 'about_second_section_title' );
    if (!empty($about_second_section_title)) :
      ?>
      <h1>
        <span class="presenters-desctop"><?php echo $about_second_section_title; ?></span>
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
  </section>

<?php get_footer(); ?>