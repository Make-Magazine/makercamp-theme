<?php /* Template Name: Host a camp page */ ?>

<?php get_header(); ?>

  <section class="host-a-camp-hero">
    <article>
      <?php
        $host_hero_title = makercamp_defaults_customizer('host_hero_title');
        if (!empty($host_hero_title)) :
      ?>
      <h1><?php echo $host_hero_title ?></h1>
      <?php
        endif;

        $host_hero_text = makercamp_defaults_customizer('host_hero_text');
        if (!empty($host_hero_text)) :
      ?>
      <p><?php echo $host_hero_text ?></p>
      <?php
          endif;

        $host_hero_link = makercamp_defaults_customizer('host_hero_link');
        if (!empty($host_hero_link)) :
      ?>
      <a class="apply-now" href="<?php echo $host_hero_link ?>">
        <?php
          $host_hero_link_title = makercamp_defaults_customizer('host_hero_link_title');
          if (!empty($host_hero_link_title)) :
            echo $host_hero_link_title;
          endif;
        ?>
      </a>
      <?php endif; ?>
    </article>
  </section>

  <section class="plane-future">
    <div class="container-fluid">
      <?php $host_first_section_title = makercamp_defaults_customizer('host_first_section_title');
      if (!empty($host_first_section_title)) :
        ?>
        <h1><?php echo $host_first_section_title; ?></h1>
      <?php endif; ?>

      <ul class="plane-future-steps">
        <li>
          <span class="first-step">1</span>

          <?php $host_first_section_first_text = makercamp_defaults_customizer('host_first_section_first_text');
          if (!empty($host_first_section_first_text)) :
            ?>
            <p><?php echo $host_first_section_first_text; ?></p>
          <?php endif; ?>

        </li>
        <li>
          <span class="second-step">2</span>

          <?php $host_first_section_second_text = makercamp_defaults_customizer('host_first_section_second_text');
          if (!empty($host_first_section_second_text)) :
            ?>
            <p><?php echo $host_first_section_second_text; ?></p>
          <?php endif; ?>

        </li>
      </ul>
      <ul class="plane-future-steps">
        <li>
          <span class="third-step">3</span>

          <?php $host_first_section_third_text = makercamp_defaults_customizer('host_first_section_third_text');
          if (!empty($host_first_section_third_text)) :
            ?>
            <p><?php echo $host_first_section_third_text; ?></p>
          <?php endif; ?>

        </li>
        <li>
          <span class="fourth-step">4</span>

          <?php $host_first_section_fourth_text = makercamp_defaults_customizer('host_first_section_fourth_text');
          if (!empty($host_first_section_fourth_text)) :
            ?>
            <p><?php echo $host_first_section_fourth_text; ?></p>
          <?php endif; ?>

        </li>
      </ul>
    </div>
  </section>

  <section class="discover">
    <div class="container-fluid">

      <?php $host_second_section_title = makercamp_defaults_customizer('host_second_section_title');
      if (!empty($host_second_section_title)) :
        ?>
        <h1><?php echo $host_second_section_title; ?></h1>
      <?php endif ?>


      <ul class="projects-and-video">
        <li>
          <?php
          $host_second_section_first_block_picture = makercamp_defaults_customizer('host_second_section_first_block_picture');
          $host_second_section_first_block_title = makercamp_defaults_customizer('host_second_section_first_block_title');
          $host_second_section_first_block_link = makercamp_defaults_customizer('host_second_section_first_block_link');
          if (!empty($host_second_section_first_block_picture)) :
            ?>
            <img src="<?php echo $host_second_section_first_block_picture; ?>" alt="Projects ideas" class="first">
          <?php
          endif;
          if (!empty($host_second_section_first_block_title)) :
            ?>
            <p><?php echo $host_second_section_first_block_title; ?></p>
          <?php
          endif;
          if (!empty($host_second_section_first_block_link)) :
            ?>
            <a href="<?php echo $host_second_section_first_block_link; ?>" class="read-more">Go</a>
          <?php endif; ?>
        </li>

        <li>
          <?php
          $host_second_section_second_block_picture = makercamp_defaults_customizer('host_second_section_second_block_picture');
          $host_second_section_second_block_title = makercamp_defaults_customizer('host_second_section_second_block_title');
          $host_second_section_second_block_link = makercamp_defaults_customizer('host_second_section_second_block_link');
          if (!empty($host_second_section_second_block_picture)) :
            ?>
            <img src="<?php echo $host_second_section_second_block_picture; ?>" alt="Maker camp 2013 on YouTube"
                 class="first">
          <?php
          endif;
          if (!empty($host_second_section_second_block_title)) :
            ?>
            <p><?php echo $host_second_section_second_block_title; ?></p>
          <?php
          endif;
          if (!empty($host_second_section_second_block_link)) :
            ?>
            <a href="<?php echo $host_second_section_second_block_link; ?>" class="read-more">Go</a>
          <?php endif; ?>
        </li>

        <li>
          <?php
          $host_second_section_third_block_picture = makercamp_defaults_customizer('host_second_section_third_block_picture');
          $host_second_section_third_block_title = makercamp_defaults_customizer('host_second_section_third_block_title');
          $host_second_section_third_block_link = makercamp_defaults_customizer('host_second_section_third_block_link');
          if (!empty($host_second_section_third_block_picture)) :
            ?>
            <img src="<?php echo $host_second_section_third_block_picture; ?>" alt="Maker camp 2014 YouTube">
          <?php
          endif;
          if (!empty($host_second_section_third_block_title)) :
            ?>
            <p><?php echo $host_second_section_third_block_title; ?></p>
          <?php
          endif;
          if (!empty($host_second_section_third_block_link)) :
            ?>
            <a href="<?php echo $host_second_section_third_block_link; ?>" class="read-more">Go</a>
          <?php endif; ?>
        </li>

        <li>
          <?php
          $host_second_section_fourth_block_picture = makercamp_defaults_customizer('host_second_section_fourth_block_picture');
          $host_second_section_fourth_block_title = makercamp_defaults_customizer('host_second_section_fourth_block_title');
          $host_second_section_fourth_block_link = makercamp_defaults_customizer('host_second_section_fourth_block_link');
          if (!empty($host_second_section_fourth_block_picture)) :
            ?>
            <img src="<?php echo $host_second_section_fourth_block_picture; ?>" alt="Google+ community">
          <?php
          endif;
          if (!empty($host_second_section_fourth_block_title)) :
            ?>
            <p><?php echo $host_second_section_fourth_block_title; ?></p>
          <?php
          endif;
          if (!empty($host_second_section_fourth_block_link)) :
            ?>
            <a href="<?php echo $host_second_section_fourth_block_link; ?>" class="read-more">Go</a>
          <?php endif; ?>
        </li>

        <li>
          <?php
          $host_second_section_fifth_block_picture = makercamp_defaults_customizer('host_second_section_fifth_block_picture');
          $host_second_section_fifth_block_title = makercamp_defaults_customizer('host_second_section_fifth_block_title');
          $host_second_section_fifth_block_link = makercamp_defaults_customizer('host_second_section_fifth_block_link');
          if (!empty($host_second_section_fifth_block_picture)) :
            ?>
            <img src="<?php echo $host_second_section_fifth_block_picture; ?>"
                 alt="More project ideas in the Maker Camp">
          <?php
          endif;
          if (!empty($host_second_section_fifth_block_title)) :
            ?>
            <p><?php echo $host_second_section_fifth_block_title; ?></p>
          <?php
          endif;
          if (!empty($host_second_section_fifth_block_link)) :
            ?>
            <a href="<?php echo $host_second_section_fifth_block_link; ?>" class="read-more">Go</a>
          <?php endif; ?>
        </li>

      </ul>

    </div>
  </section>

<?php get_footer(); ?>