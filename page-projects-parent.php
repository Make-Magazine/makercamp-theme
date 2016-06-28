<?php /* Template Name: Projects Parent */ ?>

<?php get_header(); ?>

<div class="project-landing">

  <section class="hero show-content" id="hero">
    <div class="animation-wrapper">
      <div class="align">
        <img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>animation.png"
           alt="Maker Camp animation" usemap="#animation" class="transparent-hero">
      </div>
    </div>

    <?php $all_weeks = get_terms( 'week' ); ?>

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

        <area onmousemove="showAnimation(alt)" onmouseout="hideAnimation(alt)" alt="<?php echo $week_slug; ?>" title="" href="#" shape="poly" coords="<?php echo $week_anim_coords; ?>" />
      <?php } ?>
    </map>

    <div class="week week-1"></div>
    <div class="week week-2"></div>
    <div class="week week-3"></div>
    <div class="week week-4"></div>
    <div class="week week-5"></div>
    <div class="week week-6"></div>

    <h1>START <strong>MAKING!</strong></h1>

  </section>

<?php

if( have_rows('summer_2016_themes')) { ?>

  <?php while( have_rows('summer_2016_themes')): the_row(); 

  $theme_title = get_sub_field('theme_title');
  $theme_image = get_sub_field('theme_image');
  $theme_description = get_sub_field('theme_description');
  $skills_learned = get_sub_field('skills_learned');
  $project_1 = get_sub_field('project_1');
  $project_2 = get_sub_field('project_2');
  $project_3 = get_sub_field('project_3');
  $project_4 = get_sub_field('project_4'); 
  $project_image_1 = wp_get_attachment_url( get_post_thumbnail_id($project_1->ID) );
  $project_image_2 = wp_get_attachment_url( get_post_thumbnail_id($project_2->ID) );
  $project_image_3 = wp_get_attachment_url( get_post_thumbnail_id($project_3->ID) );
  $project_image_4 = wp_get_attachment_url( get_post_thumbnail_id($project_4->ID) ); ?>

  <section class="project-theme">
    <div class="container">
      <div class="row">

        <div class="col-xs-12 col-sm-6">
          <h2><?php echo $theme_title; ?></h2>
          <p><?php echo $theme_description; ?></p>
          <h5>Skills Learned:</h5>
          <p><?php echo $skills_learned; ?></p>
        </div>
        <div class="col-xs-12 col-sm-6">

        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <hr />
          <h3>PICK A PROJECT AND GET MAKING!</h3>

          <div class="pl-theme-projects">

            <?php if (!empty($project_1)) { ?>
            <article class="pl-theme-project">
              <h4><?php echo $project_1->post_title; ?></h4>
              <div class="pl-project-img" style="background-image: url(<?php echo $project_image_1; ?>);">
              </div>
              <a class="btn-cyan" href="<?php echo $project_1->guid; ?>">GET MAKING!</a>
            </article>
            <?php } else { ?>
              <div class="pl-theme-project hidden-xs"></div>
            <?php } ?>

            <?php if (!empty($project_2)) { ?>
            <article class="pl-theme-project">
              <h4><?php echo $project_2->post_title; ?></h4>
              <div class="pl-project-img" style="background-image: url(<?php echo $project_image_2; ?>);">
              </div>
              <a class="btn-cyan" href="<?php echo $project_2->guid; ?>">GET MAKING!</a>
            </article>
            <?php } else { ?>
              <div class="pl-theme-project hidden-xs"></div>
            <?php } ?>

            <?php if (!empty($project_3)) { ?>
            <article class="pl-theme-project">
              <h4><?php echo $project_3->post_title; ?></h4>
              <div class="pl-project-img" style="background-image: url(<?php echo $project_image_3; ?>);">
              </div>
              <a class="btn-cyan" href="<?php echo $project_3->guid; ?>">GET MAKING!</a>
            </article>
            <?php } else { ?>
              <div class="pl-theme-project hidden-xs"></div>
            <?php } ?>

            <?php if (!empty($project_4)) { ?>
            <article class="pl-theme-project">
              <h4><?php echo $project_4->post_title; ?></h4>
              <div class="pl-project-img" style="background-image: url(<?php echo $project_image_4; ?>);">
              </div>
              <a class="btn-cyan" href="<?php echo $project_4->guid; ?>">GET MAKING!</a>
            </article>
            <?php } else { ?>
              <div class="pl-theme-project hidden-xs"></div>
            <?php } ?>

          </div>

        </div>
      </div>
      <i class='fa fa-arrow-circle-up fa-2x' aria-hidden='true'></i>
    </div>
  </section>

  <?php
  endwhile;

} ?>

</div>

<?php get_footer(); ?>