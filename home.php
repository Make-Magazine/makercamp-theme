<?php get_header(); ?>

  <section class="home-hero">
    <div class="container text-center">
      <h2>WELCOME TO A</BR><strong>SUMMER OF MAKING</strong></h2>
      <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
        <h1>A Maker Camp is where kids ages 7-12 learn the magic of making by building cool stuff. Ready to help kids fire up their imaginations and challenge their skills? We're here to help you organize your own Maker Camp in your community or at home.</h1>
      </div>
    </div>
    <i class="fa fa-chevron-down" aria-hidden="true"></i>
  </section>

  <section class="what-happens-at-mc">
    <div class="">
      <h2>WHAT HAPPENS AT <strong>MAKERCAMP?</strong></h2>
      <div class="foating-divs">
        <div class="foating-div-1">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Make_Icon@2x.png" class="img-responsive" alt="Supplies for Maker Camp" />
          <h4>MAKE</h4>
          <p>Check out our awesome collection of projects - and start making today!</p>
          <div class="whamc-btn-div">
          <a class="mc-blue-arrow-btn" href="#"><i class='fa fa-arrow-circle-right' aria-hidden='true'></i>START MAKING</a>
          </div>
        </div>
        <div class="foating-div-2">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Share_Icon@2x.png" class="img-responsive" alt="Supplies for Maker Camp" />
          <h4>SHARE</h4>
          <p>See and share pictures and videos of cool builds!</p>
          <div class="whamc-btn-div">
          <a class="mc-blue-arrow-btn" href="https://plus.google.com/communities/107377046073638428310"><i class='fa fa-arrow-circle-right' aria-hidden='true'></i>POST YOUR PROJECTS</a>
          </div>
        </div>
        <div class="foating-div-3">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Collaborate_Icon@2x.png" class="img-responsive" alt="Supplies for Maker Camp" />
          <h4>COLLABORATE</h4>
          <p>Make friends with Campers from all around the world and swap ideas!</p>
          <a class="mc-blue-arrow-btn" href="https://plus.google.com/communities/107377046073638428310"><i class='fa fa-arrow-circle-right' aria-hidden='true'></i>JOIN THE MAKER CAMP COMMUNITY</a>
        </div>
        <div class="foating-div-4">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Explore_Icon@2x.png" class="img-responsive" alt="Supplies for Maker Camp" />
          <h4>EXPLORE</h4>
          <p>Ther are more the 1,000 Maker Camps happening this summer.</p>
          <div class="whamc-btn-div">
          <a class="mc-blue-arrow-btn" href="/map"><i class='fa fa-arrow-circle-right' aria-hidden='true'></i>FIND A MAKER CAMP NEAR YOU</a>
          </div>
        </div>
        <div class="foating-div-5">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Host_Icon@2x.png" class="img-responsive" alt="Supplies for Maker Camp" />
          <h4>HOST</h4>
          <p>Become a Maker Camp affiliate and we'll help you introduce the kids you love to the magic of making!</p>
          <div class="whamc-btn-div">
          <a class="mc-blue-arrow-btn" href="/map#host-a-campsite"><i class='fa fa-arrow-circle-right' aria-hidden='true'></i>BECOME AN AFFILIATE</a>
          </div>
        </div>
      </div>
    </div>
    <dic class="clearfix"></div>
  </section>

  <!-- FANCYBOX VIDEO STUFF -->
  <div class="promo-video-outer" style="display: none;">
    <div id="promo-video">
      <video id="promo-video-c" controls preload="auto" poster="//staging.makercamp.com/wp-content/uploads/2016/06/promo-still.jpg" width="auto" height="auto" style="width:100% !important; height:auto !important">
        <!--source src="<?php echo get_stylesheet_directory_uri(); ?>/video/promo-vo-50.mp4" type='video/mp4' /-->
        <source src="//staging.makercamp.com/wp-content/uploads/2016/06/promo-vo-50.webm" type='video/webm' />
        <!--source src="<?php echo get_stylesheet_directory_uri(); ?>/video/promo-vo-50.ogv" type='video/ogg' /-->
        <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that supports HTML5 video</p>
      </video>
      <script>
      jQuery( document ).ready(function() {
        jQuery(".fancybox-promo").fancybox({
          'beforeShow': function(){
            jQuery(window).on({
              'resize.fancybox' : function(){
                jQuery.fancybox.update();
              }
            });
            jQuery('#promo-video-c').get(0).play()
          },
          'afterClose': function(){
            jQuery(window).off('resize.fancybox');
          },
          width      : '640',
          height     : '360',
          fitToView  : true,
          closeClick : false,
          openEffect : 'none',
          closeEffect: 'none',
          closeBtn   : 'true',
          scrolling  : 'no'
        });
      });
      </script>
    </div>
  </div>
  <!-- END FANCYBOX VIDEO STUFF -->

  <section class="a-day-at-mc">
    <img src="<?php echo get_template_directory_uri() . '/assets/img/hm_pg_video_bg.jpg' ?>" alt="Click here to see what its like to experience Maker Camp for kids" />
    <div class="container text-center">
      <h4>WATCH</h4>
      <h2>A DAY AT MAKER CAMP</h2>
      <h4>Ready, Set, Start Making!</h4>
      <a class="blue-play-btn fancybox-promo" href="#promo-video">
        <span class="fa-stack fa-2x">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-play fa-stack-1x fa-inverse"></i>
        </span>
      </a>
    </div>
  </section>

  <section class="home-sponsor">
    <div class="triangle-block"></div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <p class="pull-right">THIS YEAR'S MAKER CAMP IS MADE</br> POSSIBLE BY THE GENEROUS SUPPORT OF:</P>
        </div>
        <div class="col-xs-12 col-sm-6">
          <img src="<?php echo get_template_directory_uri() . '/assets/img/att_globe_rgb.png' ?>" />
        </div>
      </div>
    </div>
  </section>

  <section class="how-can-you-start">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <h2>HOW CAN YOU <strong>START</strong></br> YOUR OWN <strong>MAKER CAMP</strong>?</h2>
          <a class="mc-blue-btn" href="/map#host-a-campsite">JUST SIGN UP!</a>
        </div>
        <div class="col-xs-12 col-sm-6">
          <h4><strong>MAKER CAMP</strong> IS FREE</br>
            KIDS JUST BRING THEIR <strong>IMAGINATIONS!</strong></h4>
            <p>Maker Camp provides a simple, fun way for kids to get involved in making. Our worldwide network of more than 1,000 affiliates host Maker Camps in public libraries, community groups, makerspaces, and maker homes. And cool projects are always available here online! More than <strong>1 million kids</strong> have participated in Maker Camp since it launched in 2012.</p>
        </div>
      </div>
    </div>
  </section>

  <?php echo social_media_panel(); ?>

  <section class="helps-make-makers">
    <div class="container">
      <h3><strong>MAKE:</strong> HELPS YOU <strong>MAKE MAKERS</strong></h3>
      <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <p>As the publisher of <strong>Make: magazine</strong> and <strong>Make: books</strong>, we are also creating a collection of project tutorials made for and by kids. Because we believe that what they learn by making today will help them make the future. Your purchase helps support MakerCamp affiliates.</p>
      </div>
    </div>
    <div class="triangle-block"></div>
  </section>

  <?php echo stuff_for_sale_panel(); ?>

<?php get_footer(); ?>