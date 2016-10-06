<?php /* Template Name: Projects Parent */ ?>

<?php get_header(); ?>

<div id="project-landing" class="project-landing">

  <section class="hero show-content" id="hero">
    <div class="animation-wrapper">
      <div class="align">
        <img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>animation.png"
           alt="Maker Camp animation" usemap="#animation" class="transparent-hero">
      </div>
    </div>

    <map id="animation" name="animation" class="animated-areas">
      <area onmousemove="showAnimation(alt)" onmouseout="hideAnimation(alt)" alt="week-6" href="#week-6-scroller" shape="poly" coords="382,1,553,2,553,104,683,106,688,186,778,188,774,215,798,216,800,310,699,312,694,280,614,282,615,308,569,310,565,264,502,262,506,276,478,277,472,262,381,262" />
      <area onmousemove="showAnimation(alt)" onmouseout="hideAnimation(alt)" alt="week-1" href="#week-1-scroller" shape="poly" coords="581,2,584,103,703,103,704,169,935,173,933,129,952,132,952,105,964,106,964,1" />
      <area onmousemove="showAnimation(alt)" onmouseout="hideAnimation(alt)" alt="week-2" href="#week-2-scroller" shape="poly" coords="989,1,990,66,961,67,960,137,938,135,938,182,898,183,898,233,936,235,937,281,1173,287,1171,119,1222,118,1224,0" />
      <area onmousemove="showAnimation(alt)" onmouseout="hideAnimation(alt)" alt="week-3" href="#week-3-scroller" shape="poly" coords="887,284,888,413,952,413,950,450,992,450,991,609,1280,609,1279,300,977,298,980,286" />
      <area onmousemove="showAnimation(alt)" onmouseout="hideAnimation(alt)" alt="week-4" href="#week-4-scroller" shape="poly" coords="377,457,378,504,365,504,363,608,978,609,977,415,896,414,895,370,806,368,805,411,695,410,690,501,469,504,469,458" />
      <area onmousemove="showAnimation(alt)" onmouseout="hideAnimation(alt)" alt="week-5" href="#week-5-scroller" shape="poly" coords="575,264,504,263,506,276,376,276,377,481,682,481,681,399,701,398,702,369,763,365,761,320,701,316,701,289,679,286,679,276,613,275,612,296,576,299,574,263" />
    </map>

    <div class="week week-1"></div>
    <div class="week week-2"></div>
    <div class="week week-3"></div>
    <div class="week week-4"></div>
    <div class="week week-5"></div>
    <div class="week week-6"></div>

    <h1>START <strong>MAKING!</strong></h1>

  </section>

  <section class="pl-sponsored-projects">
    <div class="triangle-block"></div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-push-6">
          <img src="<?php echo get_template_directory_uri() . '/assets/img/Making-Science_Diamond.png' ?>" alt="Science Journal sponsored projects logo" />
          <p class="pl-sponsored-blue">Use your smartphone for science! With an Android and Google's new Science Journal app, you can measure the world around you while you're playing and having fun.</p>
          <p>Working with sensors is an easy way to explore, experiment, and measure your environment — and these 10 special projects will get you started. Whether you're discovering the forces of physics at your local playground or determining which of your friends jumps the highest, these projects will help you better understand your world. What are you waiting for? Get started today!</p>
          <div class="pl-theme-sponsor">
            <span>SPONSORED BY</span>
            <img src="<?php echo get_template_directory_uri() . '/assets/img/Google-Color@2x.png' ?>" alt="Google sponsored logo" />
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
          <h3>Science Journal<br> <strong>Bonus Projects</strong></h3>
          <a href="/science-journal" class="mc-blue-btn">CHECK THEM OUT</a>
        </div>
      </div>
    </div>

  </section>

<?php
if( have_rows('summer_2016_themes')) {

  $i = 1;

  while( have_rows('summer_2016_themes')): the_row(); 

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

  <section id="week-<?php echo $i; ?>-scroller" class="project-theme">
    <div class="container">
      <div class="row">

        <div class="col-xs-12 col-sm-6 pl-theme-desc">
          <h2><?php echo $theme_title->name; ?></h2>
          <p><?php echo $theme_description; ?></p>
          <h5>Skills Learned:</h5>
          <p><?php echo $skills_learned; ?></p>
        </div>
        <div class="col-xs-12 col-sm-6">
          <img class="img-responsive" src="<?php echo $theme_image['url']; ?>" alt="<?php echo $theme_image['alt']; ?>" />
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <hr />
          <h3>PICK A PROJECT AND GET MAKING!</h3>

          <div class="pl-theme-projects">

            <?php if (!empty($project_1)) { ?>
            <article class="pl-theme-project">
              <a href="<?php echo $project_1->guid; ?>">
                <h4><span><?php echo $project_1->post_title; ?></span></h4>
                <div class="pl-project-img-parent">
                  <div class="pl-project-img" style="background-image: url(<?php echo $project_image_1; ?>);"></div>
                </div>
                <span class="btn-cyan" href="<?php echo $project_1->guid; ?>">Make This!</span>
              </a>
            </article>
            <?php } else { ?>
              <div class="pl-theme-project hidden-xs"></div>
            <?php } ?>

            <?php if (!empty($project_2)) { ?>
            <article class="pl-theme-project">
              <a href="<?php echo $project_2->guid; ?>">
                <h4><span><?php echo $project_2->post_title; ?></span></h4>
                <div class="pl-project-img-parent">
                  <div class="pl-project-img" style="background-image: url(<?php echo $project_image_2; ?>);"></div>
                </div>
                <span class="btn-cyan" href="<?php echo $project_2->guid; ?>">Make This!</span>
              </a>
            </article>
            <?php } else { ?>
              <div class="pl-theme-project hidden-xs"></div>
            <?php } ?>

            <?php if (!empty($project_3)) { ?>
            <article class="pl-theme-project">
              <a href="<?php echo $project_3->guid; ?>">
                <h4><span><?php echo $project_3->post_title; ?></span></h4>
                <div class="pl-project-img-parent">
                  <div class="pl-project-img" style="background-image: url(<?php echo $project_image_3; ?>);"></div>
                </div>
                <span class="btn-cyan" href="<?php echo $project_3->guid; ?>">Make This!</span>
              </a>
            </article>
            <?php } else { ?>
              <div class="pl-theme-project hidden-xs"></div>
            <?php } ?>

            <?php if (!empty($project_4)) { ?>
            <article class="pl-theme-project">
              <a href="<?php echo $project_4->guid; ?>">
                <h4><span><?php echo $project_4->post_title; ?></span></h4>
                <div class="pl-project-img-parent">
                  <div class="pl-project-img" style="background-image: url(<?php echo $project_image_4; ?>);"></div>
                </div>
                <span class="btn-cyan" href="<?php echo $project_4->guid; ?>">Make This!</span>
              </a>
            </article>
            <?php } else { ?>
              <div class="pl-theme-project hidden-xs"></div>
            <?php } ?>

          </div>

        </div>
      </div>

      <a class="pl-scroll-up" href="#project-landing">
        <i class='fa fa-arrow-circle-up fa-2x' aria-hidden='true'></i>
      </a>
    </div>

    <a class="mc-blue-arrow-btn week-<?php echo $i; ?>-scroller" href="#week-<?php echo $i; ?>-scroller">
      <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
      <?php echo $theme_title->name; ?>
    </a>
  </section>

  <?php
  $i++;
  endwhile;

} ?>

</div>

<?php get_footer(); ?>