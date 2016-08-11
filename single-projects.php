<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Maker Camp Theme
 */
$parent_id = $post->post_parent; ?>

<?php if( is_child($parent_id) && !empty($parent_id) ): ?>

  <?php include('project-print-template.php'); ?>

<?php else:

  get_header(); 

  $hero_image = get_field('hero_image');
  $hero_image_sponsor = get_field('hero_image_sponsor');
  $theme = get_field('theme');
  $sponsored_by = get_field('sponsored_by');
  $sponsored_by_2 = get_field('sponsored_by_2');
  $time = get_field('time');
  $what_will_you_learn = get_field('what_will_you_learn'); ?>

  <div id="single-project">
    <section class="project-hero" style="background-image: url(<?php echo $hero_image['url']; ?>);">
      <div class="sp-hero-div">
        <?php if ($hero_image_sponsor) { ?>
          <img src="<?php echo $hero_image_sponsor ?>" alt="Maker Camp project theme sponsorship logo" />
        <?php } ?>
        <h2><?php echo $theme->name; ?></h2>
        <hr />
        <h1><?php the_title(); ?></h1>
      </div>
    </section>


    <section class="sp-sponsor text-center">
      <div class="triangle-block"></div>
      <?php if (!empty($sponsored_by)) { ?>
        <p>SPONSORED BY</p>
        <img src="<?php echo $sponsored_by['url']; ?>" alt="Maker Camp Project Sponsor logo" />
      <?php } ?>
      <?php if (!empty($sponsored_by_2)) { ?>
        <img src="<?php echo $sponsored_by_2['url']; ?>" alt="Maker Camp Project Sponsor logo" />
      <?php } ?>
    </section>


    <section class="sp-details text-center">
      <img class="sp-time" src="<?php echo get_template_directory_uri(); ?>/assets/img/timer.png" alt="Maker Camp Project Time Icon" />
      <h4><?php echo $time; ?></h4>
      <h5>TO COMPLETE</h5>
      <hr />
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Makey_sml.svg" alt="Maker Camp Makey Logo" />
      <h2>WHAT WILL YOU MAKE?</h2>
      <div class="sp-learn"><?php echo $what_will_you_learn; ?></div>

      <a class="mc-blue-btn" href="<?php echo get_permalink(); ?>/print" target="_blank">PRINT THESE INSTRUCTIONS</a>
      
    </section>

    <section class="sp-materials text-center">
      <img class="sp-time" src="<?php echo get_template_directory_uri(); ?>/assets/img/supplyimage.png" alt="Maker Camp Project Materials Icon" />
      <h2>WHAT WILL YOU NEED?</h2>

      <ul class="sp-materials-ul">

        <?php if( have_rows('what_will_you_need') ): ?>
          <?php while( have_rows('what_will_you_need') ): the_row(); 

            $materials = get_sub_field('materials'); ?>

            <li><i class="fa fa-check-square-o" aria-hidden="true"></i><?php echo $materials; ?></li>

          <?php endwhile; ?>
        <?php endif; ?>

      </ul>
    </section>

    <section class="sp-steps container">

      <?php $steps = get_field('steps');
      if($steps) {

        $step_number = 1;

        foreach($steps as $step) {

          $image_1 = $step['image_1'];
          $image_2 = $step['image_2'];
          $title = $step['title'];
          $description = $step['description']; ?>

          <div class="row">
            <div class="col-xs-12 col-sm-6">

              <?php if (!empty($image_1)) { ?>
                <a class="sp-step-img" href="<?php echo $image_1['url']; ?>">
                  <div style="background-image: url(<?php echo $image_1['url']; ?>);"></div>
                </a>
              <?php } ?>

              <?php if (!empty($image_2)) { ?>
                <a class="sp-step-img" href="<?php echo $image_2['url']; ?>">
                  <div style="background-image: url(<?php echo $image_2['url']; ?>);"></div>
                </a>
              <?php } ?>

            </div>

            <div class="col-xs-12 col-sm-6">
              <h4>STEP <?php echo $step_number; ?></h4>
              <?php if (!empty($title)) { echo '<h5>' . $title . '</h5>'; } ?>
              <?php if (!empty($description)) { echo '<div class="sp-step-desc">' . $description . '</div>'; } ?>
            </div>
          </div>

          <?php $step_number++;
        }
      } ?>

    </section>

    <?php $whats_next = get_field( 'whats_next' );
    if( $whats_next ): ?>

      <section class="sp-whats-next">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 text-center">
              <h2>WHAT'S NEXT?</h2>
            </div> 
            <div class="col-xs-12">
              <?php echo $whats_next; ?>
            </div>
          </div>
        </div>
      </section>

    <?php endif; ?>


    <?php if( have_rows('author') ): ?>

      <section class="sp-author container">

      <?php while( have_rows('author') ): the_row(); 

        $image = get_sub_field('image');
        $name = get_sub_field('name');
        $bio = get_sub_field('bio'); 
        $author_url = get_sub_field('author_url'); ?>

        <div class="row">
          <div class="col-xs-12 col-sm-6">

            <?php if (!empty($author_url)) { echo '<a href="' . $author_url . '">'; } ?>
              <?php if (!empty($image)) { 
                echo '<div class="sp-author-img img-circle" style="background-image: url(' . $image["url"] . ');"></div>';
              } else {
                echo '<div class="sp-author-img" style="background-image: url(' . get_template_directory_uri() .'/assets/img/Makey_sml.svg"></div>';
              } ?>
            <?php if (!empty($author_url)) { echo '</a>'; } ?>

          </div>
          <div class="col-xs-12 col-sm-6">

            <h4><?php echo $name; ?></h4>
            <div class="sp-author-bio"><?php echo $bio; ?></div>

          </div>
        </div>

      <?php endwhile; ?>

      </section>

    <?php endif; ?>



    <section class="sp-buttons container text-center">
      <a class="ghost-arrow-btn" href="/projects"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>BROWSE MORE MAKER CAMP PROJECTS</a>
      <a class="ghost-arrow-btn" href="http://makezine.com/projects/" target="_blank"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>FIND EVEN MORE PROJECTS AT Make:</a>
    </section>

    <section class="sp-disclaimer">
      <div class="container">
        <p><strong>Please Note</strong></p>
        <p>Your safety is your own responsibility, including proper use of equipment and safety gear, and determining whether you have adequate skill and experience. Power tools, electricity, and other resources used for these projects are dangerous, unless used properly and with adequate precautions, including safety gear and adult supervision. Some illustrative photos do not depict safety precautions or equipment, in order to show the project steps more clearly. Use of the instructions and suggestions found in Maker Camp is at your own risk. Maker Media, Inc., disclaims all responsibility for any resulting damage, injury, or expense.</p>
      </div>
    </section>

    <section class="sp-colab-share">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/collabicon.png" alt="Collaborate on making projects here at Maker Camp" />
            <h3>COLLABORATE</h3>
            <p>Make friends with Campers from all around the world and swap ideas!</p>
            <a class="mc-blue-arrow-btn" href="https://plus.google.com/communities/107377046073638428310" target="_blank"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>JOIN THE <span class="hidden-xs">MAKER CAMP </span>COMMUNITY</a>
          </div>
          <div class="col-xs-12 col-sm-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/shareicon.png" alt="Share your ideas and what you build on social media" />
            <h3>ALL DONE? SHARE IT!</h3>
            <p>Share pictures and videos of your cool build! Be sure to use #makercamp</p>
            <a class="mc-blue-arrow-btn" href="/#share"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>POST YOUR PROJECTS</a>
          </div>
        </div>
      </div>
    </section>

    <?php echo stuff_for_sale_panel(); ?>

  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      $(".sp-step-img").fancybox();
    });
  </script>

  <?php get_footer(); ?>

<?php endif; ?>