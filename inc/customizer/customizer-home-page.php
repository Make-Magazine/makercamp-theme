<?php
/**
 * section in costomizer of Home a Camp page
 */
function makercamp_home_customizer( $wp_customize ) {
  // 1-st section in Home page
  $wp_customize->add_section(
      'makercamp_first_section_home_page',
      array(
          'title' => 'Home page, 1-st section settings',
          'description' => 'This is a settings for 1-st section of Home page',
          'priority' => 200,
      )
  );
  // 2-nd section in Home page
  $wp_customize->add_section(
      'makercamp_second_section_home_page',
      array(
          'title' => 'Home page, 2-nd section settings',
          'description' => 'This is a settings for 20nd section of Home page',
          'priority' => 201,
      )
  );
  // 3-rd section in Home page
  $wp_customize->add_section(
      'makercamp_third_section_home_page',
      array(
          'title' => 'Home page, 3-rd section settings',
          'description' => 'This is a settings for 3-rd section of Home page',
          'priority' => 202,
      )
  );
  // 4-th section in Home page
  $wp_customize->add_section(
      'makercamp_fourth_section_home_page',
      array(
          'title' => 'Home page, 4-th section settings',
          'description' => 'This is a settings for 4-th section of Home page',
          'priority' => 203,
      )
  );
  // 5-th section in Home page
  $wp_customize->add_section(
      'makercamp_fifth_section_home_page',
      array(
          'title' => 'Home page, 5-th section settings',
          'description' => 'This is a settings for 5-th section of Home page',
          'priority' => 204,
      )
  );
  // 6-th section in Home page
  $wp_customize->add_section(
      'makercamp_sixth_section_home_page',
      array(
          'title' => 'Home page, 6-th section settings',
          'description' => 'This is a settings for 6-th section of Home page',
          'priority' => 205,
      )
  );

  /**
   * Settings & control for 1-st section of Home page
   */
  $wp_customize->add_setting(   // Title
      'first_section_title',
      array(
          'default' => $makercamp_defaults_customizer_values['first_section_title'],
      )
  );

  $wp_customize->add_control(
      'first_section_title',
      array(
          'label' => '1-st section title',
          'section' => 'makercamp_first_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Subtitle
      'first_section_subtitle',
      array(
          'default' => $makercamp_defaults_customizer_values['first_section_subtitle'],
      )
  );

  $wp_customize->add_control(
      'first_section_subtitle',
      array(
          'label' => '1-st section subtitle',
          'section' => 'makercamp_first_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(    // Link to video
      'first_section_video',
      array(
          'default' => $makercamp_defaults_customizer_values['first_section_subtitle'],
      )
  );

  $wp_customize->add_control(
      'first_section_video',
      array(
          'label' => 'Link to video in 1-st section',
          'section' => 'makercamp_first_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Central part 1-st section
      'first_section_central_description',
      array(
          'default' => $makercamp_defaults_customizer_values['first_section_central_description'],
      )
  );

  $wp_customize->add_control(
      'first_section_central_description',
      array(
          'label' => 'Central description in 1-st section',
          'section' => 'makercamp_first_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Right part 1-st section
      'first_section_right_description',
      array(
          'default' => $makercamp_defaults_customizer_values['first_section_right_description'],
      )
  );

  $wp_customize->add_control(
      'first_section_right_description',
      array(
          'label' => 'Right description in 1-st section',
          'section' => 'makercamp_first_section_home_page',
          'type' => 'text',
      )
  );
  /**
   * 2-nd section of Home page
   */
  $wp_customize->add_setting(   // Title
      'second_section_title',
      array(
          'default' => $makercamp_defaults_customizer_values['second_section_title'],
      )
  );

  $wp_customize->add_control(
      'second_section_title',
      array(
          'label' => 'Title for 2-nd section',
          'section' => 'makercamp_second_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Subtitle
      'second_section_subtitle',
      array(
          'default' => $makercamp_defaults_customizer_values['second_section_title'],
      )
  );

  $wp_customize->add_control(
      'second_section_subtitle',
      array(
          'label' => 'Subtitle for 2-nd section',
          'section' => 'makercamp_second_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Left column picture
      'second_section_left_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['second_section_left_picture'],
      )

  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'second_section_left_picture',
          array(
              'label' => 'Left column picture',
              'section' => 'makercamp_second_section_home_page',
              'settings' => 'second_section_left_picture'
          )
      )
  );

  $wp_customize->add_setting(   // Left column title
      'second_section_left_title',
      array(
          'default' => $makercamp_defaults_customizer_values['second_section_left_title'],
      )
  );

  $wp_customize->add_control(
      'second_section_left_title',
      array(
          'label' => 'Title for left column',
          'section' => 'makercamp_second_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Left column text
      'second_section_left_text',
      array(
          'default' => $makercamp_defaults_customizer_values['second_section_left_text'],
      )
  );

  $wp_customize->add_control(
      'second_section_left_text',
      array(
          'label' => 'Text for left column',
          'section' => 'makercamp_second_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Right column picture
      'second_section_right_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['second_section_right_picture'],
      )
  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'second_section_right_picture',
          array(
              'label' => 'Right column picture',
              'section' => 'makercamp_second_section_home_page',
              'settings' => 'second_section_right_picture'
          )
      )
  );

  $wp_customize->add_setting(   // Right column title
      'second_section_right_title',
      array(
          'default' => $makercamp_defaults_customizer_values['second_section_right_title'],
      )
  );

  $wp_customize->add_control(
      'second_section_right_title',
      array(
          'label' => 'Title for right column',
          'section' => 'makercamp_second_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Right column text
      'second_section_right_text',
      array(
          'default' => $makercamp_defaults_customizer_values['second_section_right_text'],
      )
  );

  $wp_customize->add_control(
      'second_section_right_text',
      array(
          'label' => 'Text for right column',
          'section' => 'makercamp_second_section_home_page',
          'type' => 'text',
      )
  );

  /**
   * 3-rd section of Home page
   */
  $wp_customize->add_setting(   // Title
      'third_section_title',
      array(
          'default' => $makercamp_defaults_customizer_values['third_section_title'],
      )
  );

  $wp_customize->add_control(
      'third_section_title',
      array(
          'label' => '3-rd section title',
          'section' => 'makercamp_third_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Subtitle
      'third_section_subtitle',
      array(
          'default' => $makercamp_defaults_customizer_values['third_section_subtitle'],
      )
  );

  $wp_customize->add_control(
      'third_section_subtitle',
      array(
          'label' => '3-rd section subtitle',
          'section' => 'makercamp_third_section_home_page',
          'type' => 'text',
      )
  );

  // TODO: Added edit weeks

  /**
   * 4-th section of Hpme page
   */
  $wp_customize->add_setting(   // Title
      'fourth_section_title',
      array(
          'default' => $makercamp_defaults_customizer_values['fourth_section_title'],
      )
  );

  $wp_customize->add_control(
      'fourth_section_title',
      array(
          'label' => '4-th section title',
          'section' => 'makercamp_fourth_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Subtitle
      'fourth_section_subtitle',
      array(
          'default' => $makercamp_defaults_customizer_values['fourth_section_subtitle'],
      )
  );

  $wp_customize->add_control(
      'fourth_section_subtitle',
      array(
          'label' => '4-th section subtitle',
          'section' => 'makercamp_fourth_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Subtitled subtitle
      'fourth_section_subsubtitle',
      array(
          'default' => $makercamp_defaults_customizer_values['fourth_section_subsubtitle'],
      )
  );

  $wp_customize->add_control(
      'fourth_section_subsubtitle',
      array(
          'label' => 'Subtitled subtitle of 4-th section',
          'section' => 'makercamp_fourth_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // 1-st picture
      'fourth_section_first_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['fourth_section_first_picture'],
      )

  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'first_section_third_picture',
          array(
              'label' => '1-st picture',
              'section' => 'makercamp_fourth_section_home_page',
              'settings' => 'fourth_section_first_picture'
          )
      )
  );

  $wp_customize->add_setting(   // 2-nd picture
      'fourth_section_second_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['fourth_section_second_picture'],
      )
  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'fourth_section_third_picture',
          array(
              'label' => '2-nd picture',
              'section' => 'makercamp_fourth_section_home_page',
              'settings' => 'fourth_section_third_picture'
          )
      )
  );

  $wp_customize->add_setting(   // 3-rd picture
      'fourth_section_third_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['fourth_section_third_picture'],
      )
  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'fourth_section_third_picture',
          array(
              'label' => '3-rd picture',
              'section' => 'makercamp_fourth_section_home_page',
              'settings' => 'fourth_section_third_picture'
          )
      )
  );

  $wp_customize->add_setting(   // 4-th picture
      'fourth_section_fourth_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['fourth_section_fourth_picture'],
      )
  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'fourth_section_fourth_picture',
          array(
              'label' => '4-th picture',
              'section' => 'makercamp_fourth_section_home_page',
              'settings' => 'fourth_section_fourth_picture'
          )
      )
  );

  $wp_customize->add_setting(   // First paragraph text
      'fourth_section_first_paragraph',
      array(
          'default' => $makercamp_defaults_customizer_values['fourth_section_first_paragraph'],
      )
  );

  $wp_customize->add_control(
      'fourth_section_first_paragraph',
      array(
          'label' => 'First paragraph of 4-th sectoin',
          'section' => 'makercamp_fourth_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // First link
      'fourth_section_first_link',
      array(
          'default' => $makercamp_defaults_customizer_values['fourth_section_first_link'],
      )
  );

  $wp_customize->add_control(
      'fourth_section_first_link',
      array(
          'label' => 'First link of 4-th section',
          'section' => 'makercamp_fourth_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // 2-nd paragraph text
      'fourth_section_second_paragraph',
      array(
          'default' => $makercamp_defaults_customizer_values['fourth_section_second_paragraph'],
      )
  );

  $wp_customize->add_control(
      'fourth_section_second_paragraph',
      array(
          'label' => 'Second paragraph of 4-th section',
          'section' => 'makercamp_fourth_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // 2-nd link
      'fourth_section_second_link',
      array(
          'default' => $makercamp_defaults_customizer_values['fourth_section_second_link'],
      )
  );

  $wp_customize->add_control(
      'fourth_section_second_link',
      array(
          'label' => 'Second link of 4-th section',
          'section' => 'makercamp_fourth_section_home_page',
          'type' => 'text',
      )
  );


  /**
   * 5-th section of Home page
   */
  $wp_customize->add_setting(   // Title
      'fifth_section_title',
      array(
          'default' => $makercamp_defaults_customizer_values['fifth_section_title'],
      )
  );

  $wp_customize->add_control(
      'fifth_section_title',
      array(
          'label' => '5-th section title',
          'section' => 'makercamp_fifth_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Left title
      'fifth_section_left_title',
      array(
          'default' => $makercamp_defaults_customizer_values['fifth_section_left_title'],
      )
  );

  $wp_customize->add_control(
      'fifth_section_left_title',
      array(
          'label' => 'Left column title',
          'section' => 'makercamp_fifth_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Left text
      'fifth_section_left_text',
      array(
          'default' => $makercamp_defaults_customizer_values['fifth_section_left_text'],
      )
  );

  $wp_customize->add_control(
      'fifth_section_left_text',
      array(
          'label' => 'Left column text',
          'section' => 'makercamp_fifth_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Central title
      'fifth_section_central_title',
      array(
          'default' => $makercamp_defaults_customizer_values['fifth_section_central_title'],
      )
  );

  $wp_customize->add_control(
      'fifth_section_central_title',
      array(
          'label' => 'Central column title',
          'section' => 'makercamp_fifth_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Central text
      'fifth_section_central_text',
      array(
          'default' => $makercamp_defaults_customizer_values['fifth_section_central_text'],
      )
  );

  $wp_customize->add_control(
      'fifth_section_central_text',
      array(
          'label' => 'Central column text',
          'section' => 'makercamp_fifth_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Right title
      'fifth_section_right_title',
      array(
          'default' => $makercamp_defaults_customizer_values['fifth_section_right_title'],
      )
  );

  $wp_customize->add_control(
      'fifth_section_right_title',
      array(
          'label' => 'Right column title',
          'section' => 'makercamp_fifth_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // Right text
      'fifth_section_right_text',
      array(
          'default' => $makercamp_defaults_customizer_values['fifth_section_right_text'],
      )
  );

  $wp_customize->add_control(
      'fifth_section_right_text',
      array(
          'label' => 'Right column text',
          'section' => 'makercamp_fifth_section_home_page',
          'type' => 'text',
      )
  );

  /**
   * 6-th section of home page
   */
  $wp_customize->add_setting(   // Title
      'sixth_section_title',
      array(
          'default' => $makercamp_defaults_customizer_values['sixth_section_title'],
      )
  );

  $wp_customize->add_control(
      'sixth_section_title',
      array(
          'label' => '6-th section title',
          'section' => 'makercamp_sixth_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // 1-st picture
      'sixth_section_first_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['sixth_section_first_picture'],
      )
  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'sixth_section_first_picture',
          array(
              'label' => '1-st picture',
              'section' => 'makercamp_sixth_section_home_page',
              'settings' => 'sixth_section_first_picture'
          )
      )
  );

  $wp_customize->add_setting(   // 1-st link for 1-st picture
      'sixth_section_first_link',
      array(
          'default' => $makercamp_defaults_customizer_values['sixth_section_first_link'],
      )
  );

  $wp_customize->add_control(
      'sixth_section_first_link',
      array(
          'label' => 'Link for 1-st picture',
          'section' => 'makercamp_sixth_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // 2-nd picture
      'sixth_section_second_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['sixth_section_second_picture'],
      )
  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'sixth_section_second_picture',
          array(
              'label' => '2-nd picture',
              'section' => 'makercamp_sixth_section_home_page',
              'settings' => 'sixth_section_second_picture'
          )
      )
  );

  $wp_customize->add_setting(   // 2-nd link for 2-nd picture
      'sixth_section_second_link',
      array(
          'default' => $makercamp_defaults_customizer_values['sixth_section_second_link'],
      )
  );

  $wp_customize->add_control(
      'sixth_section_second_link',
      array(
          'label' => 'Link for 2-nd picture',
          'section' => 'makercamp_sixth_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // 3-rd picture
      'sixth_section_third_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['sixth_section_third_picture'],
      )
  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'sixth_section_third_picture',
          array(
              'label' => '3-rd picture',
              'section' => 'makercamp_sixth_section_home_page',
              'settings' => 'sixth_section_third_picture'
          )
      )
  );

  $wp_customize->add_setting(   // 3-rd link for 3-rd picture
      'sixth_section_third_link',
      array(
          'default' => $makercamp_defaults_customizer_values['sixth_section_third_link'],
      )
  );

  $wp_customize->add_control(
      'sixth_section_third_link',
      array(
          'label' => 'Link for 3-rd picture',
          'section' => 'makercamp_sixth_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // 4-th picture
      'sixth_section_fourth_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['sixth_section_fourth_picture'],
      )
  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'sixth_section_fourth_picture',
          array(
              'label' => '4-th picture',
              'section' => 'makercamp_sixth_section_home_page',
              'settings' => 'sixth_section_fourth_picture'
          )
      )
  );

  $wp_customize->add_setting(   // 4-th link for 4-th picture
      'sixth_section_fourth_link',
      array(
          'default' => $makercamp_defaults_customizer_values['sixth_section_fourth_link'],
      )
  );

  $wp_customize->add_control(
      'sixth_section_fourth_link',
      array(
          'label' => 'Link for 4-th picture',
          'section' => 'makercamp_sixth_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // 5-th picture
      'sixth_section_fifth_picture',
      array(
          'default' => $makercamp_defaults_customizer_values['sixth_section_fifth_picture'],
      )
  );

  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'sixth_section_fifth_picture',
          array(
              'label' => '5-th picture',
              'section' => 'makercamp_sixth_section_home_page',
              'settings' => 'sixth_section_fifth_picture'
          )
      )
  );

  $wp_customize->add_setting(   // 5-th link for 5-th picture
      'sixth_section_fifth_link',
      array(
          'default' => $makercamp_defaults_customizer_values['sixth_section_fifth_link'],
      )
  );

  $wp_customize->add_control(
      'sixth_section_fifth_link',
      array(
          'label' => 'Link for 5-th picture',
          'section' => 'makercamp_sixth_section_home_page',
          'type' => 'text',
      )
  );

  $wp_customize->add_setting(   // 1-st paragraph
      'sixth_section_first_paragraph',
      array(
          'default' => $makercamp_defaults_customizer_values['sixth_section_first_paragraph'],
      )
  );

  $wp_customize->add_control(
      'sixth_section_first_paragraph',
      array(
          'label' => 'Text for 1-st paragraph',
          'section' => 'makercamp_sixth_section_home_page',
          'type' => 'text',
      )
  );

    $wp_customize->add_setting(   // 2-nd paragraph
        'sixth_section_second_paragraph',
        array(
            'default' => $makercamp_defaults_customizer_values['sixth_section_second_paragraph'],
        )
    );

  $wp_customize->add_control(
      'sixth_section_second_paragraph',
      array(
          'label' => 'Text for 2-nd paragraph',
          'section' => 'makercamp_sixth_section_home_page',
          'type' => 'text',
      )
  );
}
add_action( 'customize_register', 'makercamp_home_customizer' );