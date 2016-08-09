<?php /* Template Name: Sponsored Projects Collection */ ?>

<?php get_header(); ?>

<div class="sponsored-projects-collection">

  <?php
  $hero_image = get_field('hero_image');
  $mini_logo = get_field('mini_logo');

  $sponsored_by = get_field('sponsored_by'); ?>

  <section class="sp-pjct-hero" style="background-image: url(<?php echo $hero_image['url']; ?>);">
    <div class="sp-pjct-div">
      <img src="<?php echo $mini_logo['url']; ?>" alt="<?php the_title(); ?>" />
      <h1><?php the_title(); ?></h1>
    </div>
  </section>

  <?php
  $theme_title = get_field('theme_title');
  $theme_image = get_field('theme_image');
  $theme_description = get_field('theme_description');
  $skills_learned = get_field('skills_learned'); ?>

  <section class="sp-pjct-theme container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 sp-pjct-desc">
        <h2><?php echo $theme_title ?></h2>
        <p><?php echo $theme_description; ?></p>
        <h5>Skills Learned:</h5>
        <p><?php echo $skills_learned; ?></p>
      </div>
      <div class="col-xs-12 col-sm-6">
        <img class="img-responsive" src="<?php echo $theme_image ?>" alt="<?php echo $theme_title ?>" />
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <hr />
        <h3>PICK A PROJECT AND GET MAKING!</h3>
        <div class="sp-pjct-projects-cont">

          <?php
          if( have_rows('projects')) {
            while( have_rows('projects')): the_row();

              $sponsored_project = get_sub_field('project');
              $sponsored_project_image = wp_get_attachment_url( get_post_thumbnail_id($sponsored_project->ID) ); ?>

              <article class="sp-pjct-project">
                <a href="<?php echo $sponsored_project->guid; ?>">
                  <h3><span><?php echo $sponsored_project->post_title; ?></span></h3>
                  <div class="pl-project-img-parent">
                    <div class="pl-project-img" style="background-image: url(<?php echo $sponsored_project_image; ?>);"></div>
                  </div>
                  <span class="btn-cyan">GET MAKING!</span>
                </a>
              </article>

            <?php
            endwhile;
          } ?>

        </div>
      </div>
    </div>

  </section>
</div>

<?php get_footer(); ?>