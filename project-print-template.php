<?php /* Template Name: Projects Print Page */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-site-verification" content="tjgq9UGR8WCMZI_40j_B5wda_oVYqKyFtQW547LzMgQ" />
  <meta name="google-site-verification" content="puhGmuLsH_mXPiJjD9UYQrjMLpKaLHbPd4SgX_gy4tU" />
  <link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" />
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicon-152.png" sizes="152x152">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <!-- TYPEKIT -->
  <script src="//use.typekit.net/zaa4pqy.js"></script>
  <script>try {Typekit.load();} catch (e) {}</script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php
  $hero_image = get_field('hero_image', $parent_id);
  $theme = get_field('theme', $parent_id);
  $sponsored_by = get_field('sponsored_by', $parent_id);
  $sponsored_by_2 = get_field('sponsored_by_2', $parent_id);
  $time = get_field('time', $parent_id);
  $what_will_you_learn = get_field('what_will_you_learn', $parent_id); ?>

  <div id="project-print">

    <p style="display:none;"><?php echo $parent_id; ?></p>

    <div class="pp-float-left">

      <section class="pp-steps">

        <?php $steps = get_field('steps', $parent_id);
        if($steps) {

          $step_number = 1;

          foreach($steps as $step) {

            $image_1 = $step['image_1'];
            $image_2 = $step['image_2'];
            $title = $step['title'];
            $description = $step['description']; ?>

            <div class="row">
              <div class="col-xs-12">

                <div class="row">
                  <div class="col-xs-6">
                    <?php if (!empty($image_1)) { ?>
                      <img class="img-responsive" src="<?php echo $image_1['url']; ?>" alt="Project step photo 2" />
                    <?php } ?>
                  </div>
                  <div class="col-xs-6">
                    <?php if (!empty($image_2)) { ?>
                      <img class="img-responsive" src="<?php echo $image_2['url']; ?>" alt="Project step photo 2" />
                    <?php } ?>
                  </div>
                </div>

              </div>

              <div class="col-xs-12 pp-step-desc">
                <h3>STEP <?php echo $step_number; ?></h3>
                <?php if (!empty($title)) { echo '<p><strong>' . $title . '</strong></p>'; } ?>
                <?php if (!empty($description)) { echo '<div>' . $description . '</div>'; } ?>
              </div>
            </div>

            <?php $step_number++;
          }
        } ?>

      </section>

      <?php $whats_next = get_field( 'whats_next', $parent_id );
      if( $whats_next ): ?>

        <section class="pp-whats-next">
            <div class="row">
              <div class="col-xs-12">
                <h3>WHAT'S NEXT?</h3>
              </div> 
              <div class="col-xs-12">
                <?php echo $whats_next; ?>
              </div>
            </div>
        </section>

      <?php endif; ?>


      <?php if( have_rows('author', $parent_id) ): ?>

        <section class="pp-author">

        <?php while( have_rows('author', $parent_id) ): the_row(); 

          $image = get_sub_field('image', $parent_id);
          $name = get_sub_field('name', $parent_id);
          $bio = get_sub_field('bio', $parent_id); 
          $author_url = get_sub_field('author_url', $parent_id); ?>

          <div class="row">
            <div class="col-xs-4">

                <?php if (!empty($image)) { 
                  echo '<img class="pp-author-img img-circle img-responsive" alt="Project author photo" src="' . $image["url"] . '" />';
                } else {
                  echo '<img class="pp-author-img img-circle img-responsive" alt="Project author photo" src="' . get_template_directory_uri() .'/assets/img/Makey_sml.svg" />';
                } ?>

            </div>
            <div class="col-xs-8">

              <h4><?php echo $name; ?></h4>
              <div class="pp-author-bio"><?php echo $bio; ?></div>

            </div>
          </div>

        <?php endwhile; ?>

        </section>

      <?php endif; ?>



      <section class="pp-disclaimer">
          <p><strong>Please Note</strong></p>
          <p>Your safety is your own responsibility, including proper use of equipment and safety gear, and determining whether you have adequate skill and experience. Power tools, electricity, and other resources used for these projects are dangerous, unless used properly and with adequate precautions, including safety gear and adult supervision. Some illustrative photos do not depict safety precautions or equipment, in order to show the project steps more clearly. Use of the instructions and suggestions found in Maker Camp is at your own risk. Maker Media, Inc., disclaims all responsibility for any resulting damage, injury, or expense.</p>
      </section>

    </div>


    <div class="pp-float-right">
      <img src="<?php echo get_template_directory_uri() . '/assets/img/makercamp-logo.png' ?>" class="header-logo img-responsive" alt="Maker Camp projects, making, building, tickering for kids" />

      <h4><?php echo $theme->name; ?></h4>
      <hr />
      <h1><?php echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent ); ?></h1>

      <img src="<?php echo $hero_image['url']; ?>" class="img-responsive" alt="Project hero image" />

      <div class="pp-time">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/timer.png" alt="Maker Camp Project Time Icon" />
        <h4><?php echo $time; ?></h4>
        <h5>TO COMPLETE</h5>
      </div>

      <h3>WHAT WILL YOU MAKE?</h3>
      <div class="pp-learn"><?php echo $what_will_you_learn; ?></div>


      <section class="pp-materials">
        <h3>WHAT WILL YOU NEED?</h3>
        <ul class="pp-materials-ul">

          <?php if( have_rows('what_will_you_need', $parent_id) ): ?>
            <?php while( have_rows('what_will_you_need', $parent_id) ): the_row(); 

              $materials = get_sub_field('materials'); ?>

              <li><i class="fa fa-square-o" aria-hidden="true"></i><?php echo $materials; ?></li>

            <?php endwhile; ?>
          <?php endif; ?>

        </ul>
      </section>
    </div>

  <hr class="pp-hr" />
  <p class="pp-footer">MAKER CAMP</p>

  </div>

  <?php wp_footer(); ?>

  <script>
    window.onload = function () {
      window.print();
    }
  </script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-51157-25', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview', {
      'page': location.pathname + location.search + location.hash
    });
  </script>
  <script>
    var _prum = [['id', '53fcea2fabe53d341d4ae0eb'],
      ['mark', 'firstbyte', (new Date()).getTime()]];
    (function() {
      var s = document.getElementsByTagName('script')[0]
        , p = document.createElement('script');
      p.async = 'async';
      p.src = '//rum-static.pingdom.net/prum.min.js';
      s.parentNode.insertBefore(p, s);
    })();
  </script>
  </body>
</html>