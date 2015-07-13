<?php
function makercamp_hidden_customizer( $wp_customize ) {
  /**
   * section in costomizer for Hidden page
   */
  $wp_customize->add_section(   // 1-st section
      'makercamp_hidden_section_first',
      array(
          'title' => 'Hidden page, 1-st section',
          'description' => 'This is a settings for Hidden page, 1-st section',
          'priority' => 211,
      )
  );

  $wp_customize->add_section(   // 2-nd section
      'makercamp_hidden_section_second',
      array(
          'title' => 'Hidden page, 2-nd section',
          'description' => 'This is a settings for Hidden page, 2-nd section',
          'priority' => 212,
      )
  );

  $wp_customize->add_section(   // 3-rd section
      'makercamp_hidden_section_third',
      array(
          'title' => 'Hidden page, 3-rd section',
          'description' => 'This is a settings for Hidden page, 3-rd section',
          'priority' => 213,
      )
  );

  $wp_customize->add_section(   // 4-th section
      'makercamp_hidden_section_fourth',
      array(
          'title' => 'Hidden page, 4-th section',
          'description' => 'This is a settings for Hidden page, 4-th section',
          'priority' => 214,
      )
  );

  $wp_customize->add_section(   // 5-th section
      'makercamp_hidden_section_fifth',
      array(
          'title' => 'Hidden page, 5-th section',
          'description' => 'This is a settings for Hidden page, 5-th section',
          'priority' => 215,
      )
  );

  /**
   * 1-st section
   */
  $wp_customize->add_setting(     // Title
      'hidden_first_section_title',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_first_section_title'],
      )
  );

  $wp_customize->add_control(
      'hidden_first_section_title',
      array(
          'label' => '1-st section title',
          'section' => 'makercamp_hidden_section_first',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(     // 1-st text
      'hidden_first_section_first_text',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_first_section_first_text'],
      )
  );

  $wp_customize->add_control(
      'hidden_first_section_first_text',
      array(
          'label' => '1-st text',
          'section' => 'makercamp_hidden_section_first',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(     // 2-nd text
      'hidden_first_section_second_text',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_first_section_second_text'],
      )
  );

  $wp_customize->add_control(
      'hidden_first_section_second_text',
      array(
          'label' => '2-nd text',
          'section' => 'makercamp_hidden_section_first',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(     // 3-rd text
      'hidden_first_section_third_text',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_first_section_third_text'],
      )
  );

  $wp_customize->add_control(
      'hidden_first_section_third_text',
      array(
          'label' => '3-rd text',
          'section' => 'makercamp_hidden_section_first',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(     // 4-th text
      'hidden_first_section_fourth_text',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_first_section_fourth_text'],
      )
  );

  $wp_customize->add_control(
      'hidden_first_section_fourth_text',
      array(
          'label' => '4-th text',
          'section' => 'makercamp_hidden_section_first',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(     // Link
      'hidden_first_section_link',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_first_section_link'],
      )
  );

  $wp_customize->add_control(
      'hidden_first_section_link',
      array(
          'label' => 'Link to...',
          'section' => 'makercamp_hidden_section_first',
          'type' => 'text',
      )
  );

  /**
   * 2-nd section
   */
  $wp_customize->add_setting(   // Title
      'hidden_second_section_title',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_second_section_title'],
      )
  );

  $wp_customize->add_control(
      'hidden_second_section_title',
      array(
          'label' => 'Title for 2-nd section',
          'section' => 'makercamp_hidden_section_second',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Text
      'hidden_second_section_text',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_second_section_text'],
      )
  );

  $wp_customize->add_control(
      'hidden_second_section_text',
      array(
          'label' => 'Text for 2-nd section',
          'section' => 'makercamp_hidden_section_second',
          'type' => 'text',
      )
  );

  // TODO: added week edit link

  /**
   * 3-rd section
   */
  $wp_customize->add_setting(   // Title
      'hidden_third_section_title',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_third_section_title'],
      )
  );

  $wp_customize->add_control(
      'hidden_third_section_title',
      array(
          'label' => '3-rd section title',
          'section' => 'makercamp_hidden_section_third',
          'type' => 'text',
      )
  );

  /**
   * 3-rd section, 1-st block
   */
  $wp_customize->add_setting(   // Title
      'hidden_third_section_first_block_title',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_third_section_first_block_title'],
      )
  );

  $wp_customize->add_control(
      'hidden_third_section_first_block_title',
      array(
          'label' => '1-st block title',
          'section' => 'makercamp_hidden_section_third',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Link
      'hidden_third_section_first_block_link',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_third_section_first_block_link'],
      )
  );

  $wp_customize->add_control(
      'hidden_third_section_first_block_link',
      array(
          'label' => '1-st block link',
          'section' => 'makercamp_hidden_section_third',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Picture
      'hidden_third_section_first_block_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_third_section_first_block_picture'],
      )
  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'hidden_third_section_first_block_picture',
          array(
              'label' => '1-st block picture',
              'section' => 'makercamp_hidden_section_third',
              'settings' => 'hidden_third_section_first_block_picture'
          )
      )
  );

  /**
   * 3-rd section, 2-nd block
   */
  $wp_customize->add_setting(   // Title
      'hidden_third_section_second_block_title',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_third_section_second_block_title'],
      )
  );

  $wp_customize->add_control(
      'hidden_third_section_second_block_title',
      array(
          'label' => '2-nd block title',
          'section' => 'makercamp_hidden_section_third',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Link
      'hidden_third_section_second_block_link',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_third_section_second_block_link'],
      )
  );

  $wp_customize->add_control(
      'hidden_third_section_second_block_link',
      array(
          'label' => '2-nd block link',
          'section' => 'makercamp_hidden_section_third',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Picture
      'hidden_third_section_second_block_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_third_section_second_block_picture'],
      )
  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'hidden_third_section_second_block_picture',
          array(
              'label' => '2-nd block picture',
              'section' => 'makercamp_hidden_section_third',
              'settings' => 'hidden_third_section_second_block_picture'
          )
      )
  );

  /**
   * 3-rd section, 3-rd block
   */
  $wp_customize->add_setting(   // Title
      'hidden_third_section_third_block_title',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_third_section_third_block_title'],
      )
  );

  $wp_customize->add_control(
      'hidden_third_section_third_block_title',
      array(
          'label' => '3-rd block title',
          'section' => 'makercamp_hidden_section_third',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Link
      'hidden_third_section_third_block_link',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_third_section_third_block_link'],
      )
  );

  $wp_customize->add_control(
      'hidden_third_section_third_block_link',
      array(
          'label' => '3-rd block link',
          'section' => 'makercamp_hidden_section_third',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Picture
      'hidden_third_section_third_block_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_third_section_third_block_picture'],
      )
  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'hidden_third_section_third_block_picture',
          array(
              'label' => '3-rd block picture',
              'section' => 'makercamp_hidden_section_third',
              'settings' => 'hidden_third_section_third_block_picture'
          )
      )
  );
  /**
   * 3-rd section, 4-th block
   */
  $wp_customize->add_setting(   // Title
      'hidden_third_section_fourth_block_title',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_third_section_fourth_block_title'],
      )
  );

  $wp_customize->add_control(
      'hidden_third_section_fourth_block_title',
      array(
          'label' => '4-th block title',
          'section' => 'makercamp_hidden_section_third',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Link
      'hidden_third_section_fourth_block_link',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_third_section_fourth_block_link'],
      )
  );

  $wp_customize->add_control(
      'hidden_third_section_fourth_block_link',
      array(
          'label' => '4-th block link',
          'section' => 'makercamp_hidden_section_third',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Picture
      'hidden_third_section_fourth_block_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_third_section_fourth_block_picture'],
      )
  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'hidden_third_section_fourth_block_picture',
          array(
              'label' => '4-th block picture',
              'section' => 'makercamp_hidden_section_third',
              'settings' => 'hidden_third_section_fourth_block_picture'
          )
      )
  );

  /**
   * 3-rd section, 5-th block
   */
  $wp_customize->add_setting(   // Title
      'hidden_third_section_fifth_block_title',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_third_section_fifth_block_title'],
      )
  );

  $wp_customize->add_control(
      'hidden_third_section_fifth_block_title',
      array(
          'label' => '5-th block title',
          'section' => 'makercamp_hidden_section_third',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Link
      'hidden_third_section_fifth_block_link',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_third_section_fifth_block_link'],
      )
  );

  $wp_customize->add_control(
      'hidden_third_section_fifth_block_link',
      array(
          'label' => '5-th block link',
          'section' => 'makercamp_hidden_section_third',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Picture
      'hidden_third_section_fifth_block_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_third_section_fifth_block_picture'],
      )
  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'hidden_third_section_fifth_block_picture',
          array(
              'label' => '5-th block picture',
              'section' => 'makercamp_hidden_section_third',
              'settings' => 'hidden_third_section_fifth_block_picture'
          )
      )
  );

  /**
   * 4-th section
   */
  $wp_customize->add_setting(   // Text
      'hidden_fourth_section_text',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_fourth_section_text'],
      )
  );

  $wp_customize->add_control(
      'hidden_fourth_section_text',
      array(
          'label' => 'Text for 4-th section',
          'section' => 'makercamp_hidden_section_fourth',
          'type' => 'text',
      )
  );

  /**
   * 5-th section
   */
  $wp_customize->add_setting(   // 1-st text
      'hidden_fifth_section_text_first',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_fifth_section_text_first'],
      )
  );

  $wp_customize->add_control(
      'hidden_fifth_section_text_first',
      array(
          'label' => 'Text for 5-th section',
          'section' => 'makercamp_hidden_section_fifth',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // 2-nd text
      'hidden_fifth_section_text_second',
      array(
          'default' => $makercamp_defaults_customizer_values['hidden_fifth_section_text_second'],
      )
  );

  $wp_customize->add_control(
      'hidden_fifth_section_text_second',
      array(
          'label' => 'Text for 5-th section',
          'section' => 'makercamp_hidden_section_fifth',
          'type' => 'text',
      )
  );
}
add_action( 'customize_register', 'makercamp_hidden_customizer' );