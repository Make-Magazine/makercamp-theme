<?php /* Template Name: Project Library */ ?>

<?php get_header(); ?>

  <?php
  $all_weeks = get_terms( 'week' );
  ?>

  <?php
  /**
   * Loop through all weeks to build a stack of weeks
   */
  foreach ( $all_weeks as $week ) {
    /**
     * Get week's icon (locked by default)
     */
    $__is_current   = FALSE;
    $week_permalink = '#';
    $week_icon      = '<span class="icon-locked"></span>';
    $posts_unlocked = get_posts( array(
      'post_type'  => 'camp_day',
      'meta_key'   => '_lock_status',
      'meta_value' => 1,
      'showposts'  => -1,
      'tax_query'  => array(
        array(
          'taxonomy'         => 'week',
          'field'            => 'id',
          'terms'            => $week->term_id,
          'include_children' => FALSE
        )
      )
    ) );
    if ( $posts_unlocked ) {
      $week_permalink = get_permalink( $posts_unlocked[ 0 ]->ID );
      /**
       * Check if current week
       */
      foreach ( $posts_unlocked as $__post ) {
        $__is_current = get_post_meta( $__post->ID, '_is_current', TRUE );
        if ( $__is_current ) {
          $week_icon      = '<span class="icon-current"></span>';
          $week_permalink = get_permalink( $__post->ID );
          break;
        }
      }
      /**
       * If not current - then just unlocked
       */
      if ( ! $__is_current ) {
        $week_icon = '<span class="icon-unlocked"></span>';
      }
    }
    /**
     * Week's cover image
     */
    $week_mobile_image = get_option( "week_mobile_image_{$week->term_id}" );
    /**
     * Week's title
     */
    $week_title = $week->name;
    /**
     * Week's slug
     */
    $week_slug = $week->slug;
    /**
     * Week's subtitle
     */
    $week_subtitle = $week->description;
    /**
     * Week's description
     */
    $week_description = get_option( "week_long_description_{$week->term_id}" );
  }
  ?>

<div class="projects-comming-soon">
  <div class="coming-soon-overlay">
    <h1>CAMP PROJECTS</h1>
    <p>The Summer is here and we are busy in our workshop creating<br /> 
      inspiring projects for you and the community. Please check back soon!</p>
  </div>
</div>
  
  <!-- TBD:Reenable -->
  <section style="display:none" class="camp-themes" id="themes">
    <div class="container-fluid">
      <h2>2016 Projects Coming Soon!</h2>

      <ul style="display:none" class="weeks-section">
        <?php
        foreach ( $all_weeks as $week ) {
          $camp_days         = get_posts( array(
            'post_type'   => 'camp_day',
            'numberposts' => -1,
            'order'       => 'ASC',
            'meta_key'    => '_week_day',
            'orderby'     => 'meta_value_num',
            'tax_query'   => array(
              array(
                'taxonomy'         => 'week',
                'field'            => 'id',
                'terms'            => $week->term_id,
                'include_children' => FALSE
              )
            )
          ) );
          $week_mobile_image = get_option( "week_mobile_image_{$week->term_id}" );
          $week_title        = $week->name;
          $week_subtitle     = $week->description;
          $week_description  = get_option( "week_long_description_{$week->term_id}" );
          $week_slug = $week->slug;
          // $posts_unlocked = get_posts( array(
          //  'post_type'  => 'camp_day',
          //  'meta_key'   => '_lock_status',
          //  'meta_value' => 1,
          //  'showposts'  => -1,
          //  'tax_query'  => array(
          //    array(
          //      'taxonomy'         => 'week',
          //      'field'            => 'id',
          //      'terms'            => $week->term_id,
          //      'include_children' => FALSE
          //    )
          //  )
          // ) );
          // $week_permalink = get_permalink( $posts_unlocked[ 0 ]->ID );
          echo '<li>';
          echo '<h4>' . $week_title . '</h4>';
          echo '<a href="/' . $week_slug . '/day-1"><img src="' . $week_mobile_image . '" alt="week title"></a>';
          echo '<h3>' . $week_subtitle . '</h3>';
          echo '<p>' . $week_description . '<p>';
          echo '<a href="/' . $week_slug . '/day-1" class="read-more">Start ' . $week_title . '</a>';
          echo '</li>';
        }
        ?>
      </ul>
    </div>
  </section>

<?php get_footer(); ?>