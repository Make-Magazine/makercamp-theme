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
          'default' => 'Is there a campsite close to you? Join the fun',
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
          'default' => '... or start a new campsite',
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
          'default' => 'If you can’t find a nearby site in the list or the map, talk to your local library, makerspace, Boys & Girls Club, or community center about hosting Maker Camp for the kids in your community. Maker Camp Affiliate Sites receive a package of materials for making and for promoting the camp, while supplies last. Remember that whether or not you are able to find an organization to host Maker Camp, you can still be a part of Maker Camp no matter where you are, because it is online and free!',
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