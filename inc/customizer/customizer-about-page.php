<?php
function makercamp_about_customizer( $wp_customize ) {
  global $makercamp_defaults_customizer_values;

  /**
   * Section in customizer for About us page
   */

  $wp_customize->add_section(
      'makercamp__about_hero',
      array(
          'title' => 'About Us page Hero',
          'description' => 'This is a settings for About page.',
          'priority' => 209,
      )
  );

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
   * Hero
   */
  $wp_customize->add_setting(   // Hero
      'about_hero_title',
      array(
          'default' => $makercamp_defaults_customizer_values['about_hero_title'],
      )
  );
  $wp_customize->add_control(
      'about_hero_title',
      array(
          'label' => 'About us hero',
          'section' => 'makercamp__about_hero',
          'type' => 'text',
      )
  );
  $wp_customize->add_setting(   // Hero text
      'about_hero_text',
      array(
          'default' => $makercamp_defaults_customizer_values['about_hero_text'],
      )
  );
  $wp_customize->add_control(
      'about_hero_text',
      array(
          'label' => 'About Us hero text',
          'section' => 'makercamp__about_hero',
          'type' => 'text',
      )
  );

  /**
   * 1-st section
   */
  $wp_customize->add_setting(   // Title
      'section_first_title',
      array(
          'default' => $makercamp_defaults_customizer_values['section_first_title'],
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
          'default' => $makercamp_defaults_customizer_values['section_first_text_first'],
      )
  );
  $wp_customize->add_control(
      'section_first_text_first',
      array(
          'label' => '1st paragraph',
          'section' => 'makercamp_first_section_about',
          'type' => 'text',
      )
  );
  $wp_customize->add_setting(   // 2-nd paragraph
      'section_first_text_second',
      array(
          'default' => $makercamp_defaults_customizer_values['section_first_text_second'],
      )
  );
  $wp_customize->add_control(
      'section_first_text_second',
      array(
          'label' => '2nd paragraph',
          'section' => 'makercamp_first_section_about',
          'type' => 'text',
      )
  );
  $wp_customize->add_setting(   // 3-rd paragraph
      'section_first_text_third',
      array(
          'default' => $makercamp_defaults_customizer_values['section_first_text_third'],
      )
  );
  $wp_customize->add_control(
      'section_first_text_third',
      array(
          'label' => '3rd paragraph',
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
          'default' => $makercamp_defaults_customizer_values['about_second_section_title'],
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
}
add_action( 'customize_register', 'makercamp_about_customizer' );