<?php get_header(); ?>

<div class="archive-project">

  <section class="hero show-content" id="hero">
    <div class="animation-wrapper">
      <div class="align">
        <img src="<?php echo get_template_directory_uri() . '/public/assets/img/' ?>animation.png"
           alt="Maker Camp animation" usemap="#animation" class="transparent-hero">
      </div>
    </div>
  </section>

  <section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php
          /* Include the Post-Format-specific template for the content.
           * If you want to override this in a child theme, then include a file
           * called content-___.php (where ___ is the Post Format name) and that will be used instead.
           */
          get_template_part( 'content', get_post_format() );
        ?>

      <?php endwhile; ?>

    <?php else : ?>

      <?php get_template_part( 'content', 'none' ); ?>

    <?php endif; ?>

    </main><!-- #main -->
  </section><!-- #primary -->

</div>

<?php get_footer(); ?>