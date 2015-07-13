<?php
/**
 * section in costomizer of Find a Camp page
 */
function makercamp_map_customizer( $wp_customize ) {

  $wp_customize->add_section(
      'makercamp_section_find_camp',
      array(
          'title' => 'Find a Camp page settings',
          'description' => 'This is a settings for Map page.',
          'priority' => 206,
      )
  );
  // Title before map
  $wp_customize->add_setting(
      'title_before_map',
      array(
          'default' => $makercamp_defaults_customizer_values['title_before_map'],
      )
  );

  $wp_customize->add_control(
      'title_before_map',
      array(
          'label' => 'Title before map',
          'section' => 'makercamp_section_find_camp',
          'type' => 'text',
      )
  );
  // Title after map
  $wp_customize->add_setting(
      'title_after_map',
      array(
          'default' => $makercamp_defaults_customizer_values['title_after_map'],
      )
  );

  $wp_customize->add_control(
      'title_after_map',
      array(
          'label' => 'Title after map',
          'section' => 'makercamp_section_find_camp',
          'type' => 'text',
      )
  );
  // Some text after map
  $wp_customize->add_setting(
      'description_after_map',
      array(
          'default' => $makercamp_defaults_customizer_values['description_after_map'],
      )
  );

  $wp_customize->add_control(
      'description_after_map',
      array(
          'label' => 'Description after map',
          'section' => 'makercamp_section_find_camp',
          'type' => 'text',
      )
  );
}
add_action( 'customize_register', 'makercamp_map_customizer' );