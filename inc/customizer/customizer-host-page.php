<?php
function makercamp_host_customizer( $wp_customize ) {

  /**
   * section in costomizer of Host a Camp page
   */
  $wp_customize->add_section(   // 1-st section
      'makercamp_host_first_section',
      array(
          'title' => 'Host a Campm 1-st section',
          'description' => 'Host a Camp, 1-st section settings',
          'priority' => 207,
      )
  );

  $wp_customize->add_section(   // 2-nd section
      'makercamp_host_second_section',
      array(
          'title' => 'Host a Camp, 2-nd section',
          'description' => 'Host a Camp, 2-nd section settings',
          'priority' => 207,
      )
  );
  /**
   * 1-st section
   */
  $wp_customize->add_setting(   // Title
      'host_first_section_title',
      array(
          'default' => $makercamp_defaults_customizer_values['host_first_section_title'],
      )
  );

  $wp_customize->add_control(
      'host_first_section_title',
      array(
          'label' => 'Affiliate Program title',
          'section' => 'makercamp_host_first_section',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // 1-st text
      'host_first_section_first_text',
      array(
          'default' => $makercamp_defaults_customizer_values['host_first_section_first_text'],
      )
  );

  $wp_customize->add_control(
      'host_first_section_first_text',
      array(
          'label' => '1-st text',
          'section' => 'makercamp_host_first_section',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // 2-nd text
      'host_first_section_second_text',
      array(
          'default' => $makercamp_defaults_customizer_values['host_first_section_second_text'],
      )
  );

  $wp_customize->add_control(
      'host_first_section_second_text',
      array(
          'label' => '2-nd text',
          'section' => 'makercamp_host_first_section',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // 3-rd text
      'host_first_section_third_text',
      array(
          'default' => $makercamp_defaults_customizer_values['host_first_section_third_text'],
      )
  );

  $wp_customize->add_control(
      'host_first_section_third_text',
      array(
          'label' => '3-rd text',
          'section' => 'makercamp_host_first_section',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // 4-th text
      'host_first_section_fourth_text',
      array(
          'default' => $makercamp_defaults_customizer_values['host_first_section_fourth_text'],
      )
  );

  $wp_customize->add_control(
      'host_first_section_fourth_text',
      array(
          'label' => '4-th text',
          'section' => 'makercamp_host_first_section',
          'type' => 'text',
      )
  );

  /**
   * 2-nd section
   */
  $wp_customize->add_setting(   // Title
      'host_second_section_title',
      array(
          'default' => $makercamp_defaults_customizer_values['host_second_section_title'],
      )
  );

  $wp_customize->add_control(
      'host_second_section_title',
      array(
          'label' => '2-nd section title',
          'section' => 'makercamp_host_second_section',
          'type' => 'text',
      )
  );

  /**
   * 2-nd section, 1-st block
   */
  $wp_customize->add_setting(   // Title
      'host_second_section_first_block_title',
      array(
          'default' => $makercamp_defaults_customizer_values['host_second_section_first_block_title'],
      )
  );

  $wp_customize->add_control(
      'host_second_section_first_block_title',
      array(
          'label' => '1-st block title',
          'section' => 'makercamp_host_second_section',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Link
      'host_second_section_first_block_link',
      array(
          'default' => $makercamp_defaults_customizer_values['host_second_section_first_block_link'],
      )
  );

  $wp_customize->add_control(
      'host_second_section_first_block_link',
      array(
          'label' => '1-st block link',
          'section' => 'makercamp_host_second_section',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Picture
      'host_second_section_first_block_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['host_second_section_first_block_picture'],
      )
  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'host_second_section_first_block_picture',
          array(
              'label' => '1-st block picture',
              'section' => 'makercamp_host_second_section',
              'settings' => 'host_second_section_first_block_picture'
          )
      )
  );

  /**
   * 2-nd section, 2-nd block
   */
  $wp_customize->add_setting(   // Title
      'host_second_section_second_block_title',
      array(
          'default' => $makercamp_defaults_customizer_values['host_second_section_second_block_title'],
      )
  );

  $wp_customize->add_control(
      'host_second_section_second_block_title',
      array(
          'label' => '2-nd block title',
          'section' => 'makercamp_host_second_section',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Link
      'host_second_section_second_block_link',
      array(
          'default' => $makercamp_defaults_customizer_values['host_second_section_second_block_link'],
      )
  );

  $wp_customize->add_control(
      'host_second_section_second_block_link',
      array(
          'label' => '2-nd block link',
          'section' => 'makercamp_host_second_section',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Picture
      'host_second_section_second_block_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['host_second_section_second_block_picture'],
      )
  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'host_second_section_second_block_picture',
          array(
              'label' => '2-nd block picture',
              'section' => 'makercamp_host_second_section',
              'settings' => 'host_second_section_second_block_picture'
          )
      )
  );

  /**
   * 2-nd section, 3-rd block
   */
  $wp_customize->add_setting(   // Title
      'host_second_section_third_block_title',
      array(
          'default' => $makercamp_defaults_customizer_values['host_second_section_third_block_title'],
      )
  );

  $wp_customize->add_control(
      'host_second_section_third_block_title',
      array(
          'label' => '3-rd block title',
          'section' => 'makercamp_host_second_section',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Link
      'host_second_section_third_block_link',
      array(
          'default' => $makercamp_defaults_customizer_values['host_second_section_third_block_link'],
      )
  );

  $wp_customize->add_control(
      'host_second_section_third_block_link',
      array(
          'label' => '3-rd block link',
          'section' => 'makercamp_host_second_section',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Picture
      'host_second_section_third_block_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['host_second_section_third_block_picture'],
      )
  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'host_second_section_third_block_picture',
          array(
              'label' => '3-rd block picture',
              'section' => 'makercamp_host_second_section',
              'settings' => 'host_second_section_third_block_picture'
          )
      )
  );
  /**
   * 2-nd section, 4-th block
   */
  $wp_customize->add_setting(   // Title
      'host_second_section_fourth_block_title',
      array(
          'default' => $makercamp_defaults_customizer_values['host_second_section_fourth_block_title'],
      )
  );

  $wp_customize->add_control(
      'host_second_section_fourth_block_title',
      array(
          'label' => '4-th block title',
          'section' => 'makercamp_host_second_section',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Link
      'host_second_section_fourth_block_link',
      array(
          'default' => $makercamp_defaults_customizer_values['host_second_section_fourth_block_link'],
      )
  );

  $wp_customize->add_control(
      'host_second_section_fourth_block_link',
      array(
          'label' => '4-th block link',
          'section' => 'makercamp_host_second_section',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Picture
      'host_second_section_fourth_block_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['host_second_section_fourth_block_picture'],
      )
  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'host_second_section_fourth_block_picture',
          array(
              'label' => '4-th block picture',
              'section' => 'makercamp_host_second_section',
              'settings' => 'host_second_section_fourth_block_picture'
          )
      )
  );

  /**
   * 2-nd section, 5-th block
   */
  $wp_customize->add_setting(   // Title
      'host_second_section_fifth_block_title',
      array(
          'default' => $makercamp_defaults_customizer_values['host_second_section_fifth_block_title'],
      )
  );

  $wp_customize->add_control(
      'host_second_section_fifth_block_title',
      array(
          'label' => '5-th block title',
          'section' => 'makercamp_host_second_section',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Link
      'host_second_section_fifth_block_link',
      array(
          'default' => $makercamp_defaults_customizer_values['host_second_section_fifth_block_link'],
      )
  );

  $wp_customize->add_control(
      'host_second_section_fifth_block_link',
      array(
          'label' => '5-th block link',
          'section' => 'makercamp_host_second_section',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // picture
      'host_second_section_fifth_block_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['host_second_section_fifth_block_picture'],
      )
  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'host_second_section_fifth_block_picture',
          array(
              'label' => '5-th block picture',
              'section' => 'makercamp_host_second_section',
              'settings' => 'host_second_section_fifth_block_picture'
          )
      )
  );

}
add_action( 'customize_register', 'makercamp_host_customizer' );