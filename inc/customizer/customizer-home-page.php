<?php
/**
 * section in costomizer of Home a Camp page
 */
function makercamp_home_customizer( $wp_customize ) {
	global $makercamp_defaults_customizer_values;


	// 1st section in Home page
	$wp_customize->add_section(
		'makercamp_first_section_home_page',
		array(
			'title'       => 'Home page, 1st section settings',
			'description' => 'This is settings for 1st section of Home page',
			'priority'    => 200,
		)
	);
	// 2nd section in Home page
	$wp_customize->add_section(
		'makercamp_second_section_home_page',
		array(
			'title'       => 'Home page, 2nd section settings',
			'description' => 'This is settings for 20nd section of Home page',
			'priority'    => 201,
		)
	);
	// 3rd section in Home page
	$wp_customize->add_section(
		'makercamp_third_section_home_page',
		array(
			'title'       => 'Home page, 3rd section settings',
			'description' => 'This is settings for 3rd section of Home page',
			'priority'    => 202,
		)
	);
	// 4th section in Home page
	$wp_customize->add_section(
		'makercamp_fourth_section_home_page',
		array(
			'title'       => 'Home page, 4th section settings',
			'description' => 'This is settings for 4th section of Home page',
			'priority'    => 203,
		)
	);
	// 5th section in Home page
	$wp_customize->add_section(
		'makercamp_fifth_section_home_page',
		array(
			'title'       => 'Home page, 5th section settings',
			'description' => 'This is settings for 5th section of Home page',
			'priority'    => 204,
		)
	);
	// 6-th section in Home page
	$wp_customize->add_section(
		'makercamp_sixth_section_home_page',
		array(
			'title'       => 'Home page, 6-th section settings',
			'description' => 'This is settings for 6-th section of Home page',
			'priority'    => 205,
		)
	);

	/**
	 * Settings & control for 1st section of Home page
	 */
	$wp_customize->add_setting(   // Title
		'first_section_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'first_section_title' ],
		)
	);
	$wp_customize->add_control(
		'first_section_title',
		array(
			'label'   => '1st section title',
			'section' => 'makercamp_first_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Subtitle
		'first_section_subtitle',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'first_section_subtitle' ],
		)
	);
	$wp_customize->add_control(
		'first_section_subtitle',
		array(
			'label'   => '1st section subtitle',
			'section' => 'makercamp_first_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(    // Link to video
		'first_section_video',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'first_section_video' ],
		)
	);
	$wp_customize->add_control(
		'first_section_video',
		array(
			'label'   => 'Link to video in 1st section',
			'section' => 'makercamp_first_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Central part 1st section
		'first_section_central_description',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'first_section_central_description' ],
		)
	);
	$wp_customize->add_control(
		'first_section_central_description',
		array(
			'label'   => 'Central description in 1st section',
			'section' => 'makercamp_first_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Central part link 1st section
		'first_section_central_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'first_section_central_link' ],
		)
	);
	$wp_customize->add_control(
		'first_section_central_link',
		array(
			'label'   => 'Central link in 1st section',
			'section' => 'makercamp_first_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Central part link descr 1st section
		'first_section_central_link_text',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'first_section_central_link_text' ],
		)
	);
	$wp_customize->add_control(
		'first_section_central_link_text',
		array(
			'label'   => 'Central link title in 1st section',
			'section' => 'makercamp_first_section_home_page',
			'type'    => 'text',
		)
	);


	$wp_customize->add_setting(   // Right part 1st section
		'first_section_right_description',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'first_section_right_description' ],
		)
	);
	$wp_customize->add_control(
		'first_section_right_description',
		array(
			'label'   => 'Right description in 1st section',
			'section' => 'makercamp_first_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Right part link 1st section
		'first_section_right_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'first_section_right_link' ],
		)
	);
	$wp_customize->add_control(
		'first_section_right_link',
		array(
			'label'   => 'Right link in 1st section',
			'section' => 'makercamp_first_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Right part link descr 1st section
		'first_section_right_link_text',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'first_section_right_link_text' ],
		)
	);
	$wp_customize->add_control(
		'first_section_right_link_text',
		array(
			'label'   => 'Right link title in 1st section',
			'section' => 'makercamp_first_section_home_page',
			'type'    => 'text',
		)
	);
	/**
	 * 2nd section of Home page
	 */
	$wp_customize->add_setting(   // Title
		'second_section_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_title' ],
		)
	);
	$wp_customize->add_control(
		'second_section_title',
		array(
			'label'   => 'Title for 2nd section',
			'section' => 'makercamp_second_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Subtitle
		'second_section_subtitle',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_subtitle' ],
		)
	);
	$wp_customize->add_control(
		'second_section_subtitle',
		array(
			'label'   => 'Subtitle for 2nd section',
			'section' => 'makercamp_second_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Left column picture
		'second_section_left_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_left_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'second_section_left_picture',
			array(
				'label'    => 'Right column picture',
				'section'  => 'makercamp_second_section_home_page',
				'settings' => 'second_section_left_picture'
			)
		)
	);
	$wp_customize->add_setting(   // Left column title
		'second_section_left_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_left_title' ],
		)
	);
	$wp_customize->add_control(
		'second_section_left_title',
		array(
			'label'   => 'Title for left column',
			'section' => 'makercamp_second_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Left column text
		'second_section_left_text',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_left_text' ],
		)
	);
	$wp_customize->add_control(
		'second_section_left_text',
		array(
			'label'   => 'Text for left column',
			'section' => 'makercamp_second_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Left column link
		'second_section_left_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_left_link' ],
		)
	);
	$wp_customize->add_control(
		'second_section_left_link',
		array(
			'label'   => 'Link for left column',
			'section' => 'makercamp_second_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Left column link title
		'second_section_left_link_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_left_link_title' ],
		)
	);
	$wp_customize->add_control(
		'second_section_left_link_title',
		array(
			'label'   => 'Link title for left column',
			'section' => 'makercamp_second_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Right column picture
		'second_section_right_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_right_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'second_section_right_picture',
			array(
				'label'    => 'Right column picture',
				'section'  => 'makercamp_second_section_home_page',
				'settings' => 'second_section_right_picture'
			)
		)
	);
	$wp_customize->add_setting(   // Right column title
		'second_section_right_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_right_title' ],
		)
	);
	$wp_customize->add_control(
		'second_section_right_title',
		array(
			'label'   => 'Title for right column',
			'section' => 'makercamp_second_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Right column text
		'second_section_right_text',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_right_text' ],
		)
	);
	$wp_customize->add_control(
		'second_section_right_text',
		array(
			'label'   => 'Text for right column',
			'section' => 'makercamp_second_section_home_page',
			'type'    => 'text',
		)
	);


	$wp_customize->add_setting(   // First right column link
		'second_section_first_right_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_first_right_link' ],
		)
	);
	$wp_customize->add_control(
		'second_section_first_right_link',
		array(
			'label'   => '1st link for right column',
			'section' => 'makercamp_second_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Right column first link title
		'second_section_first_right_link_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_first_right_link_title' ],
		)
	);
	$wp_customize->add_control(
		'second_section_first_right_link_title',
		array(
			'label'   => '1st link title for right column',
			'section' => 'makercamp_second_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 2nd right column link
		'second_section_second_right_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_second_right_link' ],
		)
	);
	$wp_customize->add_control(
		'second_section_second_right_link',
		array(
			'label'   => '2nd link for right column',
			'section' => 'makercamp_second_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Right column 2nd link title
		'second_section_second_right_link_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_second_right_link_title' ],
		)
	);
	$wp_customize->add_control(
		'second_section_second_right_link_title',
		array(
			'label'   => '2nd link title for right column',
			'section' => 'makercamp_second_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Right column 1st link title mobile
		'second_section_first_right_link_title_modile',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_first_right_link_title_modile' ],
		)
	);
	$wp_customize->add_control(
		'second_section_first_right_link_title_modile',
		array(
			'label'   => '1st link title for right column in mobile',
			'section' => 'makercamp_second_section_home_page',
			'type'    => 'text',
		)
	);
	/**
	 * 3rd section of Home page
	 */
	$wp_customize->add_setting(   // Title
		'third_section_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'third_section_title' ],
		)
	);
	$wp_customize->add_control(
		'third_section_title',
		array(
			'label'   => '3rd section title',
			'section' => 'makercamp_third_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Subtitle
		'third_section_subtitle',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'third_section_subtitle' ],
		)
	);
	$wp_customize->add_control(
		'third_section_subtitle',
		array(
			'label'   => '3rd section subtitle',
			'section' => 'makercamp_third_section_home_page',
			'type'    => 'text',
		)
	);
	// TODO: Added edit weeks
	/**
	 * 4th section of Hpme page
	 */
	$wp_customize->add_setting(   // Title
		'fourth_section_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_title' ],
		)
	);
	$wp_customize->add_control(
		'fourth_section_title',
		array(
			'label'   => '4th section title',
			'section' => 'makercamp_fourth_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Subtitle
		'fourth_section_subtitle',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_subtitle' ],
		)
	);
	$wp_customize->add_control(
		'fourth_section_subtitle',
		array(
			'label'   => '4th section subtitle',
			'section' => 'makercamp_fourth_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Subtitled subtitle
		'fourth_section_subsubtitle',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_subsubtitle' ],
		)
	);
	$wp_customize->add_control(
		'fourth_section_subsubtitle',
		array(
			'label'   => 'Subtitled subtitle of 4th section',
			'section' => 'makercamp_fourth_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 1st picture
		'fourth_section_first_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_first_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'first_section_third_picture',
			array(
				'label'    => '1st picture',
				'section'  => 'makercamp_fourth_section_home_page',
				'settings' => 'fourth_section_first_picture'
			)
		)
	);
	$wp_customize->add_setting(   // 2nd picture
		'fourth_section_second_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_second_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'fourth_section_second_picture',
			array(
				'label'    => '2nd picture',
				'section'  => 'makercamp_fourth_section_home_page',
				'settings' => 'fourth_section_second_picture'
			)
		)
	);
	$wp_customize->add_setting(   // 3rd picture
		'fourth_section_third_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_third_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'fourth_section_third_picture',
			array(
				'label'    => '3rd picture',
				'section'  => 'makercamp_fourth_section_home_page',
				'settings' => 'fourth_section_third_picture'
			)
		)
	);
	$wp_customize->add_setting(   // 4th picture
		'fourth_section_fourth_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_fourth_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'fourth_section_fourth_picture',
			array(
				'label'    => '4th picture',
				'section'  => 'makercamp_fourth_section_home_page',
				'settings' => 'fourth_section_fourth_picture'
			)
		)
	);
	$wp_customize->add_setting(   // First paragraph text
		'fourth_section_first_paragraph',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_first_paragraph' ],
		)
	);
	$wp_customize->add_control(
		'fourth_section_first_paragraph',
		array(
			'label'   => 'First paragraph of 4th sectoin',
			'section' => 'makercamp_fourth_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // First link
		'fourth_section_first_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_first_link' ],
		)
	);
	$wp_customize->add_control(
		'fourth_section_first_link',
		array(
			'label'   => 'First link of 4th section',
			'section' => 'makercamp_fourth_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // First link title
		'fourth_section_first_link_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_first_link_title' ],
		)
	);
	$wp_customize->add_control(
		'fourth_section_first_link_title',
		array(
			'label'   => 'First link title of 4th section',
			'section' => 'makercamp_fourth_section_home_page',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(   // 2nd paragraph text
		'fourth_section_second_paragraph',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_second_paragraph' ],
		)
	);
	$wp_customize->add_control(
		'fourth_section_second_paragraph',
		array(
			'label'   => 'Second paragraph of 4th section',
			'section' => 'makercamp_fourth_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 2nd link
		'fourth_section_second_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_second_link' ],
		)
	);
	$wp_customize->add_control(
		'fourth_section_second_link',
		array(
			'label'   => 'Second link of 4th section',
			'section' => 'makercamp_fourth_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 2nd link title
		'fourth_section_second_link_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_second_link_title' ],
		)
	);
	$wp_customize->add_control(
		'fourth_section_second_link_title',
		array(
			'label'   => 'Second link title of 4th section',
			'section' => 'makercamp_fourth_section_home_page',
			'type'    => 'text',
		)
	);
	/**
	 * 5th section of Home page
	 */
	$wp_customize->add_setting(   // Title
		'fifth_section_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fifth_section_title' ],
		)
	);
	$wp_customize->add_control(
		'fifth_section_title',
		array(
			'label'   => '5th section title',
			'section' => 'makercamp_fifth_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Left title
		'fifth_section_left_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fifth_section_left_title' ],
		)
	);
	$wp_customize->add_control(
		'fifth_section_left_title',
		array(
			'label'   => 'Left column title',
			'section' => 'makercamp_fifth_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Left text
		'fifth_section_left_text',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fifth_section_left_text' ],
		)
	);
	$wp_customize->add_control(
		'fifth_section_left_text',
		array(
			'label'   => 'Left column text',
			'section' => 'makercamp_fifth_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Central title
		'fifth_section_central_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fifth_section_central_title' ],
		)
	);
	$wp_customize->add_control(
		'fifth_section_central_title',
		array(
			'label'   => 'Central column title',
			'section' => 'makercamp_fifth_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Central text
		'fifth_section_central_text',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fifth_section_central_text' ],
		)
	);
	$wp_customize->add_control(
		'fifth_section_central_text',
		array(
			'label'   => 'Central column text',
			'section' => 'makercamp_fifth_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Right title
		'fifth_section_right_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fifth_section_right_title' ],
		)
	);
	$wp_customize->add_control(
		'fifth_section_right_title',
		array(
			'label'   => 'Right column title',
			'section' => 'makercamp_fifth_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Right text
		'fifth_section_right_text',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fifth_section_right_text' ],
		)
	);
	$wp_customize->add_control(
		'fifth_section_right_text',
		array(
			'label'   => 'Right column text',
			'section' => 'makercamp_fifth_section_home_page',
			'type'    => 'text',
		)
	);
	/**
	 * 6-th section of home page
	 */
	$wp_customize->add_setting(   // Title
		'sixth_section_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'sixth_section_title' ],
		)
	);
	$wp_customize->add_control(
		'sixth_section_title',
		array(
			'label'   => '6-th section title',
			'section' => 'makercamp_sixth_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 1st picture
		'sixth_section_first_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'sixth_section_first_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'sixth_section_first_picture',
			array(
				'label'    => '1st picture',
				'section'  => 'makercamp_sixth_section_home_page',
				'settings' => 'sixth_section_first_picture'
			)
		)
	);
	$wp_customize->add_setting(   // 1st link for 1st picture
		'sixth_section_first_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'sixth_section_first_link' ],
		)
	);
	$wp_customize->add_control(
		'sixth_section_first_link',
		array(
			'label'   => 'Link for 1st picture',
			'section' => 'makercamp_sixth_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 2nd picture
		'sixth_section_second_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'sixth_section_second_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'sixth_section_second_picture',
			array(
				'label'    => '2nd picture',
				'section'  => 'makercamp_sixth_section_home_page',
				'settings' => 'sixth_section_second_picture'
			)
		)
	);
	$wp_customize->add_setting(   // 2nd link for 2nd picture
		'sixth_section_second_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'sixth_section_second_link' ],
		)
	);
	$wp_customize->add_control(
		'sixth_section_second_link',
		array(
			'label'   => 'Link for 2nd picture',
			'section' => 'makercamp_sixth_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 3rd picture
		'sixth_section_third_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'sixth_section_third_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'sixth_section_third_picture',
			array(
				'label'    => '3rd picture',
				'section'  => 'makercamp_sixth_section_home_page',
				'settings' => 'sixth_section_third_picture'
			)
		)
	);
	$wp_customize->add_setting(   // 3rd link for 3rd picture
		'sixth_section_third_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'sixth_section_third_link' ],
		)
	);
	$wp_customize->add_control(
		'sixth_section_third_link',
		array(
			'label'   => 'Link for 3rd picture',
			'section' => 'makercamp_sixth_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 4th picture
		'sixth_section_fourth_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'sixth_section_fourth_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'sixth_section_fourth_picture',
			array(
				'label'    => '4th picture',
				'section'  => 'makercamp_sixth_section_home_page',
				'settings' => 'sixth_section_fourth_picture'
			)
		)
	);
	$wp_customize->add_setting(   // 4th link for 4th picture
		'sixth_section_fourth_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'sixth_section_fourth_link' ],
		)
	);
	$wp_customize->add_control(
		'sixth_section_fourth_link',
		array(
			'label'   => 'Link for 4th picture',
			'section' => 'makercamp_sixth_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 5th picture
		'sixth_section_fifth_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'sixth_section_fifth_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'sixth_section_fifth_picture',
			array(
				'label'    => '5th picture',
				'section'  => 'makercamp_sixth_section_home_page',
				'settings' => 'sixth_section_fifth_picture'
			)
		)
	);
	$wp_customize->add_setting(   // 5th link for 5th picture
		'sixth_section_fifth_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'sixth_section_fifth_link' ],
		)
	);
	$wp_customize->add_control(
		'sixth_section_fifth_link',
		array(
			'label'   => 'Link for 5th picture',
			'section' => 'makercamp_sixth_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 1st paragraph
		'sixth_section_first_paragraph',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'sixth_section_first_paragraph' ],
		)
	);
	$wp_customize->add_control(
		'sixth_section_first_paragraph',
		array(
			'label'   => 'Text for 1st paragraph',
			'section' => 'makercamp_sixth_section_home_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 2nd paragraph
		'sixth_section_second_paragraph',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'sixth_section_second_paragraph' ],
		)
	);
	$wp_customize->add_control(
		'sixth_section_second_paragraph',
		array(
			'label'   => 'Text for 2nd paragraph',
			'section' => 'makercamp_sixth_section_home_page',
			'type'    => 'text',
		)
	);
}

add_action( 'customize_register', 'makercamp_home_customizer' );