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
  $skills_learned = get_field('skills_learned');
  $sponsored_by_text = get_field('sponsored_by_text');
  $sponsored_by_img = get_field('sponsored_by_img'); ?>

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
        <?php if ($sponsored_by_text || $sponsored_by_img) { ?>
          <div class="sp-pjct-theme-sponsor">
            <?php if ($sponsored_by_text) { ?>
              <span><?php echo $sponsored_by_text ?></span>
            <?php } ?>
            <?php if ($sponsored_by_img) { ?>
              <img class="img-responsive" src="<?php echo $sponsored_by_img ?>" alt="<?php echo $theme_title ?>" />
            <?php } ?>
          </div>
        <?php } ?>
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

  <?php echo social_media_panel(); ?>

  <section class="helps-make-makers">
    <div class="container">
      <h3>MORE MAKER RESOURCES</h3>
      <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <p>Make: produces a variety of great products and helpful project tutorials to enhance your making experience. Here are a few select items that Maker Camp affiliates are sure to enjoy.</p>
      </div>
    </div>
    <div class="triangle-block"></div>
  </section>

  <?php echo stuff_for_sale_panel(); ?>

<!--   <section class="sp-pjct-more">
    <div class="container">
      <h4>More Maker Resources</h4>
      <p>Make: produces a var</p>
    </div>
  </section> -->
</div>

<?php get_footer(); ?>