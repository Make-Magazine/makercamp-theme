<?php
/**
 * section in costomizer of Home a Camp page
 */
function makercamp_home_customizer( $wp_customize ) {
	global $makercamp_defaults_customizer_values;

	// Hero section in Home page
	$wp_customize->add_section(
		'makercamp_hero_section_home_page',
		array(
			'title'       => 'Home page, Hero section',
			'description' => 'Hero section of Home page',
			'priority'    => 200,
		)
	);
  // Optional section above 1st section in Home page
  $wp_customize->add_section(   // 1st section
    'makercamp_home_optional_section',
    array(
      'title'       => 'Home page, optional section',
      'description' => 'Optional info section above 1st section',
      'priority'    => 201,
    )
  );
	// 1st section in Home page
	$wp_customize->add_section(   // 1st section
		'makercamp_home_first_section',
		array(
			'title'       => 'Home page, 1st section',
			'description' => '1st section of Home page',
			'priority'    => 202,
		)
	);

	/**
	 * Hero section of Home page
	 */
	$wp_customize->add_setting(   // Youtube
		'hero_section_yt',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'hero_section_yt' ],
		)
	);
	$wp_customize->add_control(
		'hero_section_yt',
		array(
			'label'   => 'Youtube Video, only place video ID here. Or leave black to use video coming soon image',
			'section' => 'makercamp_hero_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Title
		'hero_section_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'hero_section_title' ],
		)
	);
	$wp_customize->add_control(
		'hero_section_title',
		array(
			'label'   => 'Hero section title',
			'section' => 'makercamp_hero_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Subtitle
		'hero_section_subtitle',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'hero_section_subtitle' ],
		)
	);
	$wp_customize->add_control(
		'hero_section_subtitle',
		array(
			'label'   => 'Hero section paragraph',
			'section' => 'makercamp_hero_section_home_page',
			'type'    => 'text',
		)
	);

	/**
	 * 1st section
	 */
	$wp_customize->add_setting(   // Title
		'home_first_section_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_title' ],
		)
	);
	$wp_customize->add_control(
		'home_first_section_title',
		array(
			'label'   => '1st section title',
			'section' => 'makercamp_home_first_section',
			'type'    => 'text',
		)
	);
	/**
	 * 1st section, 1st block
	 */
	$wp_customize->add_setting(   // Title
		'home_first_section_first_block_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_first_block_title' ],
		)
	);
	$wp_customize->add_control(
		'home_first_section_first_block_title',
		array(
			'label'   => '1st block title',
			'section' => 'makercamp_home_first_section',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Link
		'home_first_section_first_block_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_first_block_link' ],
		)
	);
	$wp_customize->add_control(
		'home_first_section_first_block_link',
		array(
			'label'   => '1st block, first link',
			'section' => 'makercamp_home_first_section',
			'type'    => 'text',
		)
	);
  $wp_customize->add_setting(   // Link title
          'home_first_section_first_block_link_title',
          array(
                  'default' => $makercamp_defaults_customizer_values[ 'home_first_section_first_block_link_title' ],
          )
  );
  $wp_customize->add_control(
          'home_first_section_first_block_link_title',
          array(
                  'label'   => '1st block, first link title',
                  'section' => 'makercamp_home_first_section',
                  'type'    => 'text',
          )
  );
	$wp_customize->add_setting(   // Link
		'home_first_section_first2_block_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_first2_block_link' ],
		)
	);
	$wp_customize->add_control(
		'home_first_section_first2_block_link',
		array(
			'label'   => '1st block, second link',
			'section' => 'makercamp_home_first_section',
			'type'    => 'text',
		)
	);
  $wp_customize->add_setting(   // Link title
          'home_first_section_first2_block_link_title',
          array(
                  'default' => $makercamp_defaults_customizer_values[ 'home_first_section_first2_block_link_title' ],
          )
  );
  $wp_customize->add_control(
          'home_first_section_first2_block_link_title',
          array(
                  'label'   => '1st block, second link title',
                  'section' => 'makercamp_home_first_section',
                  'type'    => 'text',
          )
  );
	$wp_customize->add_setting(   // Picture
		'home_first_section_first_block_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_first_block_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'home_first_section_first_block_picture',
			array(
				'label'    => '1st block picture',
				'section'  => 'makercamp_home_first_section',
				'settings' => 'home_first_section_first_block_picture'
			)
		)
	);
	/**
	 * 1st section, 2nd block
	 */
	$wp_customize->add_setting(   // Title
		'home_first_section_second_block_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_second_block_title' ],
		)
	);
	$wp_customize->add_control(
		'home_first_section_second_block_title',
		array(
			'label'   => '2nd block title',
			'section' => 'makercamp_home_first_section',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Link
		'home_first_section_second_block_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_second_block_link' ],
		)
	);
	$wp_customize->add_control(
		'home_first_section_second_block_link',
		array(
			'label'   => '2nd block link',
			'section' => 'makercamp_home_first_section',
			'type'    => 'text',
		)
	);
  $wp_customize->add_setting(   // Link title
          'home_first_section_second_block_link_title',
          array(
                  'default' => $makercamp_defaults_customizer_values[ 'home_first_section_second_block_link_title' ],
          )
  );
  $wp_customize->add_control(
          'home_first_section_second_block_link_title',
          array(
                  'label'   => '2nd block link title',
                  'section' => 'makercamp_home_first_section',
                  'type'    => 'text',
          )
  );
	$wp_customize->add_setting(   // Link
		'home_first_section_second2_block_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_second2_block_link' ],
		)
	);
	$wp_customize->add_control(
		'home_first_section_second2_block_link',
		array(
			'label'   => '2nd block, second link',
			'section' => 'makercamp_home_first_section',
			'type'    => 'text',
		)
	);
  $wp_customize->add_setting(   // Link title
          'home_first_section_second2_block_link_title',
          array(
                  'default' => $makercamp_defaults_customizer_values[ 'home_first_section_second2_block_link_title' ],
          )
  );
  $wp_customize->add_control(
          'home_first_section_second2_block_link_title',
          array(
                  'label'   => '2nd block, second link title',
                  'section' => 'makercamp_home_first_section',
                  'type'    => 'text',
          )
  );
	$wp_customize->add_setting(   // Picture
		'home_first_section_second_block_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_second_block_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'home_first_section_second_block_picture',
			array(
				'label'    => '2nd block picture',
				'section'  => 'makercamp_home_first_section',
				'settings' => 'home_first_section_second_block_picture'
			)
		)
	);
	/**
	 * 1st section, 3rd block
	 */
	$wp_customize->add_setting(   // Title
		'home_first_section_third_block_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_third_block_title' ],
		)
	);
	$wp_customize->add_control(
		'home_first_section_third_block_title',
		array(
			'label'   => '3rd block title',
			'section' => 'makercamp_home_first_section',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Link
		'home_first_section_third_block_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_third_block_link' ],
		)
	);
	$wp_customize->add_control(
		'home_first_section_third_block_link',
		array(
			'label'   => '3rd block link',
			'section' => 'makercamp_home_first_section',
			'type'    => 'text',
		)
	);
  $wp_customize->add_setting(   // Link title
          'home_first_section_third_block_link_title',
          array(
                  'default' => $makercamp_defaults_customizer_values[ 'home_first_section_third_block_link_title' ],
          )
  );
  $wp_customize->add_control(
          'home_first_section_third_block_link_title',
          array(
                  'label'   => '3rd block link title',
                  'section' => 'makercamp_home_first_section',
                  'type'    => 'text',
          )
  );
	$wp_customize->add_setting(   // Link
		'home_first_section_third2_block_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_third2_block_link' ],
		)
	);
	$wp_customize->add_control(
		'home_first_section_third2_block_link',
		array(
			'label'   => '3rd block, second link',
			'section' => 'makercamp_home_first_section',
			'type'    => 'text',
		)
	);
  $wp_customize->add_setting(   // Link title
          'home_first_section_third2_block_link_title',
          array(
                  'default' => $makercamp_defaults_customizer_values[ 'home_first_section_third2_block_link_title' ],
          )
  );
  $wp_customize->add_control(
          'home_first_section_third2_block_link_title',
          array(
                  'label'   => '3rd block, second link title',
                  'section' => 'makercamp_home_first_section',
                  'type'    => 'text',
          )
  );
	$wp_customize->add_setting(   // Picture
		'home_first_section_third_block_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_third_block_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'home_first_section_third_block_picture',
			array(
				'label'    => '3rd block picture',
				'section'  => 'makercamp_home_first_section',
				'settings' => 'home_first_section_third_block_picture'
			)
		)
	);
	/**
	 * 1st section, 4th block
	 */
	$wp_customize->add_setting(   // Title
		'home_first_section_fourth_block_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_fourth_block_title' ],
		)
	);
	$wp_customize->add_control(
		'home_first_section_fourth_block_title',
		array(
			'label'   => '4th block title',
			'section' => 'makercamp_home_first_section',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Link
		'home_first_section_fourth_block_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_fourth_block_link' ],
		)
	);
	$wp_customize->add_control(
		'home_first_section_fourth_block_link',
		array(
			'label'   => '4th block link',
			'section' => 'makercamp_home_first_section',
			'type'    => 'text',
		)
	);
  $wp_customize->add_setting(   // Link title
      'home_first_section_fourth_block_link_title',
      array(
          'default' => $makercamp_defaults_customizer_values[ 'home_first_section_fourth_block_link_title' ],
      )
  );
  $wp_customize->add_control(
      'home_first_section_fourth_block_link_title',
      array(
          'label'   => '4th block link title',
          'section' => 'makercamp_home_first_section',
          'type'    => 'text',
      )
  );
	$wp_customize->add_setting(   // Link
		'home_first_section_fourth2_block_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_fourth2_block_link' ],
		)
	);
	$wp_customize->add_control(
		'home_first_section_fourth2_block_link',
		array(
			'label'   => '4th block, second link',
			'section' => 'makercamp_home_first_section',
			'type'    => 'text',
		)
	);
  $wp_customize->add_setting(   // Link title
      'home_first_section_fourth2_block_link_title',
      array(
          'default' => $makercamp_defaults_customizer_values[ 'home_first_section_fourth2_block_link_title' ],
      )
  );
  $wp_customize->add_control(
      'home_first_section_fourth2_block_link_title',
      array(
          'label'   => '4th block link title',
          'section' => 'makercamp_home_first_section',
          'type'    => 'text',
      )
  );
	$wp_customize->add_setting(   // Picture
		'home_first_section_fourth_block_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_fourth_block_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'home_first_section_fourth_block_picture',
			array(
				'label'    => '4th block picture',
				'section'  => 'makercamp_home_first_section',
				'settings' => 'home_first_section_fourth_block_picture'
			)
		)
	);
	/**
	 * 1st section, 5th block
	 */
	$wp_customize->add_setting(   // Title
		'home_first_section_fifth_block_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_fifth_block_title' ],
		)
	);
	$wp_customize->add_control(
		'home_first_section_fifth_block_title',
		array(
			'label'   => '5th block title',
			'section' => 'makercamp_home_first_section',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Link
		'home_first_section_fifth_block_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_fifth_block_link' ],
		)
	);
	$wp_customize->add_control(
		'home_first_section_fifth_block_link',
		array(
			'label'   => '5th block link',
			'section' => 'makercamp_home_first_section',
			'type'    => 'text',
		)
	);
  $wp_customize->add_setting(   // Link title
      'home_first_section_fifth_block_link_title',
      array(
          'default' => $makercamp_defaults_customizer_values[ 'home_first_section_fifth_block_link_title' ],
      )
  );
  $wp_customize->add_control(
      'home_first_section_fifth_block_link_title',
      array(
          'label'   => '5th block link title',
          'section' => 'makercamp_home_first_section',
          'type'    => 'text',
      )
  );
	$wp_customize->add_setting(   // Link
		'home_first_section_fifth2_block_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_fifth2_block_link' ],
		)
	);
	$wp_customize->add_control(
		'home_first_section_fifth2_block_link',
		array(
			'label'   => '5th block, second link',
			'section' => 'makercamp_home_first_section',
			'type'    => 'text',
		)
	);
  $wp_customize->add_setting(   // Link title
      'home_first_section_fifth2_block_link_title',
      array(
          'default' => $makercamp_defaults_customizer_values[ 'home_first_section_fifth2_block_link_title' ],
      )
  );
  $wp_customize->add_control(
      'home_first_section_fifth2_block_link_title',
      array(
          'label'   => '5th block, second link title',
          'section' => 'makercamp_home_first_section',
          'type'    => 'text',
      )
  );
	$wp_customize->add_setting(   // picture
		'home_first_section_fifth_block_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'home_first_section_fifth_block_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'home_first_section_fifth_block_picture',
			array(
				'label'    => '5th block picture',
				'section'  => 'makercamp_home_first_section',
				'settings' => 'home_first_section_fifth_block_picture'
			)
		)
	);

  /**
   * Optional Quick Message Section
   */
  $wp_customize->add_setting( // Checkbox for Quick Message ON/OFF
      'home_quick_message_section_checkbox',
      array(
          'default' => $makercamp_defaults_customizer_values[ 'home_quick_message_section_checkbox' ],
      )
  );
  $wp_customize->add_control( 
      'home_quick_message_section_checkbox', 
      array(
        'settings' => 'home_quick_message_section_checkbox',
        'label'    => 'When checked, this section is shown',
        'section'  => 'makercamp_home_optional_section',
        'type'     => 'checkbox',
      ) 
  );

  $wp_customize->add_setting(   // Title
      'home_quick_message_section_title',
      array(
          'default' => $makercamp_defaults_customizer_values[ 'home_quick_message_section_title' ],
      )
  );
  $wp_customize->add_control(
      'home_quick_message_section_title',
      array(
          'label'   => 'Title',
          'section' => 'makercamp_home_optional_section',
          'type'    => 'text',
      )
  );
  $wp_customize->add_setting(   // Text
      'home_quick_message_section_text',
      array(
          'default' => $makercamp_defaults_customizer_values[ 'home_quick_message_section_text' ],
      )
  );
  $wp_customize->add_control(
      'home_quick_message_section_text',
      array(
          'label'   => 'Text',
          'section' => 'makercamp_home_optional_section',
          'type'    => 'text',
      )
  );
  $wp_customize->add_setting(   // picture
    'home_quick_message_section_picture',
    array(
      'default' => $makercamp_defaults_customizer_values[ 'home_quick_message_section_picture' ],
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'home_quick_message_section_picture',
      array(
        'label'    => 'Image or gif',
        'section'  => 'makercamp_home_optional_section',
        'settings' => 'home_quick_message_section_picture'
      )
    )
  );
}

add_action( 'customize_register', 'makercamp_home_customizer' );