<?php
function makercamp_about_customizer( $wp_customize ) {
  /**
   * Section in customizer for About us page
   */
  $wp_customize->add_section(
      'makercamp_first_section_about',
      array(
          'title' => 'About Us page, 1-st section settings',
          'description' => 'This is a settings for About page.',
          'priority' => 209,
      )
  );

  $wp_customize->add_section(
      'makercamp_second_section_about',
      array(
          'title' => 'About Us page, 2-nd section settings',
          'description' => 'This is a settings for About page.',
          'priority' => 210,
      )
  );
  /**
   * 1-st section
   */
  $wp_customize->add_setting(   // Title
      'section_first_title',
      array(
          'default' => 'What is Maker Camp?',
      )
  );

  $wp_customize->add_control(
      'section_first_title',
      array(
          'label' => 'Section title',
          'section' => 'makercamp_first_section_about',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // 1-st paragraph
      'section_first_text_first',
      array(
          'default' => 'Maker Camp is a free, 6-week online (and in-person) summer camp for young Makers interested in DIY, making,
				creating, crafting, hacking, tinkering, and learning. It combines the best parts of summer camp and with sure-fire
				starter projects, so that young Makers across the country and the world can make together.',
      )
  );

  $wp_customize->add_control(
      'section_first_text_first',
      array(
          'label' => '1-st section paragraph',
          'section' => 'makercamp_first_section_about',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // 2-nd paragraph
      'section_first_text_second',
      array(
          'default' => 'Campers make projects,
				go on virtual field trips, and interact with our counselors wherever they are including: from home, on the road,
				or at local community spaces like public libraries, Boys and Girls Clubs, Computer Clubhouses, 4-H Clubs, scouting
				groups, and more. Past field trips have included virtual visits to NASA, Disney, LEGO, the White House, Blue Man
				Group, and Pixar.',
      )
  );

  $wp_customize->add_control(
      'section_first_text_second',
      array(
          'label' => '2-nd section paragraph',
          'section' => 'makercamp_first_section_about',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // 3-rd paragraph
      'section_first_text_third',
      array(
          'default' => 'Maker Camp is produced by Maker Media, the people behind Maker Faire and Make: magazine.',
      )
  );

  $wp_customize->add_control(
      'section_first_text_third',
      array(
          'label' => '3-rd section paragraph',
          'section' => 'makercamp_first_section_about',
          'type' => 'text',
      )
  );

  /**
   * 2-nd section, About us page
   */
  $wp_customize->add_setting(     // Title
      'about_second_section_title',
      array(
          'default' => 'Our Camp Crew',
      )
  );
  $wp_customize->add_control(
      'about_second_section_title',
      array(
          'label' => '2-nd section title',
          'section' => 'makercamp_second_section_about',
          'type' => 'text',
      )
  );
  // TODO: added crew
}
add_action( 'customize_register', 'makercamp_about_customizer' );