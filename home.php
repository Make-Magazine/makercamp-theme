<?php get_header(); ?>

  <section class="home-hero">
    <div class="container text-center">
      <div class="sponsor-container">
        <span>PRESENTED BY</span>
        <img class="white-sponsored-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/att_globe_rgb_wht.png" alt="Maker Camp 2016 - A Summer of Making" />
      </div>
      <h2>WELCOME TO<br><strong>MAKER CAMP SUMMER 2016</strong></h2>
      <div class="hidden col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
        <h1>Maker Camp is where kids aged 7–12 learn the magic of making by building cool stuff. Ready to help kids fire up their imaginations and challenge their skills? We're here to help you organize your own Maker Camp in your community or at home.</h1>
      </div>
       <i style="margin-bottom:5px;" class="fa fa-chevron-down" aria-hidden="true"></i>
    </div>
  </section>

  <section class="newsletter-panel">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <h4>Join the Maker Community</h4>
          <p>Get the latest news near you.</p>
        </div>
        <div class="col-xs-12 col-sm-6">
          <form class="form-inline sub-form whatcounts-signup1" action="http://whatcounts.com/bin/listctrl" method="POST">
            <input type="hidden" name="slid_1" value="6B5869DC547D3D4658DF84D7F99DCB43" /><!-- Maker Camp Newsletter -->
            <input type="hidden" name="slid_2" value="6B5869DC547D3D46941051CC68679543" /><!-- Maker Media Newsletter -->
            <input type="hidden" name="multiadd" value="1" />
            <input type="hidden" name="cmd" value="subscribe" />
            <input type="hidden" name="custom_source" value="Maker Camp Home Page" />
            <input type="hidden" name="custom_incentive" value="none" />
            <input type="hidden" name="custom_url" value="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
            <input type="hidden" id="format_mime" name="format" value="mime" />
            <input type="hidden" name="custom_host" value="<?php echo $_SERVER["HTTP_HOST"]; ?>" />
            <input id="wc-email" class="form-control nl-panel-input" name="email" placeholder="Email Address" required type="email">
            <input class="btn-cyan" value="Yes Please" type="submit">
          </form>
        </div>
      </div>
    </div>
  </section>

  <div class="fancybox-thx" style="display:none;">
    <div class="col-sm-4 hidden-xs nl-modal">
      <span class="fa-stack fa-4x">
      <i class="fa fa-circle-thin fa-stack-2x"></i>
      <i class="fa fa-thumbs-o-up fa-stack-1x"></i>
      </span>
    </div>
    <div class="col-sm-8 col-xs-12 nl-modal">
      <h3>Awesome!</h3>
      <p>Thanks for signing up.</p>
    </div>
    <div class="clearfix"></div>
  </div>

  <section class="what-happens-at-mc">
    <div class="">
      <h2>WHAT HAPPENS AT <strong>MAKER CAMP?</strong></h2>
      <div class="foating-divs">
        <div class="foating-div-1">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Make_Icon@2x.png" class="img-responsive" alt="Supplies for Maker Camp" />
          <h4>PROJECTS</h4>
          <p>Check out our awesome collection of projects and start making today!</p>
          <div class="whamc-btn-div">
          <a class="mc-blue-arrow-btn" href="/projects"><i class='fa fa-arrow-circle-right' aria-hidden='true'></i>START MAKING</a>
          </div>
        </div>
        <div class="foating-div-2">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Share_Icon@2x.png" class="img-responsive" alt="Supplies for Maker Camp" />
          <h4>SHARE</h4>
          <p>Post on social media with #makercamp and it’ll appear below!</p>
          <div class="whamc-btn-div">
          <a class="mc-blue-arrow-btn" href="#share"><i class='fa fa-arrow-circle-right' aria-hidden='true'></i>SEE WHAT CAMPERS ARE SHARING</a>
          </div>
        </div>
        <div class="foating-div-3">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Collaborate_Icon@2x.png" class="img-responsive" alt="Supplies for Maker Camp" />
          <h4>COMMUNITY</h4>
          <p>Make friends with Campers from all around the world and swap ideas!</p>
          <a class="mc-blue-arrow-btn" href="https://plus.google.com/communities/107377046073638428310" target="_blank"><i class='fa fa-arrow-circle-right' aria-hidden='true'></i>JOIN THE <span>MAKER CAMP </span>COMMUNITY</a>
        </div>
        <div class="foating-div-4">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Explore_Icon@2x.png" class="img-responsive" alt="Supplies for Maker Camp" />
          <h4>EXPLORE</h4>
          <p>Find a Maker Camp near you!</p>
          <div class="whamc-btn-div">
          <a class="mc-blue-arrow-btn" href="/explore"><i class='fa fa-arrow-circle-right' aria-hidden='true'></i>BROWSE THE <span>MAKER CAMP </span>MAP</a>
          </div>
        </div>
        <div class="foating-div-5">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Host_Icon@2x.png" class="img-responsive" alt="Supplies for Maker Camp" />
          <h4>HOST</h4>
          <p>Become a Maker Camp affiliate and introduce the kids you love to the magic of making!</p>
          <div class="whamc-btn-div">
          <a class="mc-blue-arrow-btn" href="/explore#host"><i class='fa fa-arrow-circle-right' aria-hidden='true'></i>BECOME AN AFFILIATE</a>
          </div>
        </div>
      </div>
    </div>
    <dic class="clearfix"></div>
  </section>

  <script>
    jQuery(document).ready(function() {
      jQuery(".fancybox-promo").fancybox({
        fitToView : false,
        width   : '90%',
        height    : '90%',
        autoSize  : false,
        closeClick  : false,
        openEffect  : 'none',
        closeEffect : 'none',
        padding : 0
      });
    });
  </script>

  <section class="a-day-at-mc">
    <img src="<?php echo get_template_directory_uri() . '/assets/img/hm_pg_video_bg.jpg' ?>" alt="Click here to see what its like to experience Maker Camp for kids" />
    <div class="container text-center">
      <h4>WATCH</h4>
      <h2>A DAY AT MAKER CAMP</h2>
      <h4>Ready, Set, Start Making!</h4>
      <button class="blue-play-btn fancybox-promo fancybox.iframe" href="https://www.youtube.com/embed/RCzuku8rm8M?autoplay=1">
        <span class="fa-stack fa-2x">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-play fa-stack-1x fa-inverse"></i>
        </span>
      </button>
    </div>
  </section>

  <section class="home-sponsor">
    <div class="triangle-block"></div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <p class="pull-right">THIS YEAR'S MAKER CAMP IS MADE</br> POSSIBLE BY THE GENEROUS SUPPORT OF:</P>
        </div>
        <div class="col-xs-12 col-sm-6 home-sponsor-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/att_globe_rgb_pos.png" />
        </div>
      </div>
    </div>
  </section>

  <section class="how-can-you-start">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <h2>WANT TO START</br> YOUR OWN <strong>MAKER CAMP</strong>?</h2>
          <a class="mc-blue-btn" href="/explore#host">SIGN UP!</a>
        </div>
        <div class="col-xs-12 col-sm-6">
            <p>Maker Camp provides a simple, fun way for kids to get involved in making. Our worldwide network of affiliates host Maker Camps in public libraries, community groups, makerspaces, and maker homes. Cool projects are always available here online! More than <strong>1 million kids</strong> have participated in Maker Camp since it launched in 2012.</p>
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

<?php get_footer(); ?>