<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Maker Camp Theme
 */

get_header(); 

$hero_image = get_field('hero_image');
$sponsored_by = get_field('sponsored_by');
$time = get_field('time');
$what_will_you_learn = get_field('what_will_you_learn');

?>

<div id="single-project">

  <section class="project-hero" style="background-image: url(<?php echo $hero_image['url']; ?>);">
    <div class="sp-hero-div">
      <h2>Theme</h2>
      <hr />
      <h1>Project Title</h1>
    </div>
  </section>


  <section class="sp-sponsor text-center">
    <div class="triangle-block"></div>
    <p>SPONSORED BY:</p>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Aspire-FNL-5.png" />
  </section>


  <section class="sp-details text-center">
    <img class="sp-time" src="<?php echo get_template_directory_uri(); ?>/assets/img/timer.png" alt="Maker Camp Project Time Icon" />
    <h4><?php echo $time; ?></h4>
    <h5>TO COMPLETE</h5>
    <hr />
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Makey_sml.svg" alt="Maker Camp Makey Logo" />
    <h2>WHAT WILL YOU LEARN?</h2>
    <div class="sp-learn"><?php echo $what_will_you_learn; ?></div>
    <a class="mc-blue-btn" href="#">PRINT THESE INSTRUCTIONS</a>
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
              echo '<div class="sp-author-img" style="background-image: url(' . $image["url"] . ');"></div>';
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
    <a class="" href="#">BROWSE MORE MAKER CAMP PROJECTS</a>
    <a class="" href="#">FIND EVEN MORE PROJECTS AT MAKEZINE</a>
  </section>

    


</div>

<script type="text/javascript">
  $(document).ready(function() {
    $(".sp-step-img").fancybox();
  });
</script>

<?php get_footer(); ?>