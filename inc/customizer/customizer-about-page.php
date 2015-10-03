<?php
function makercamp_about_customizer( $wp_customize ) {
	global $makercamp_defaults_customizer_values;

	/**
	 * Section in customizer for About us page
	 */

	$wp_customize->add_section(
		'makercamp__about_hero',
		array(
			'title'       => 'About page, Hero section',
			'description' => 'This is a settings for About page.',
			'priority'    => 209,
		)
	);

	$wp_customize->add_section(
		'makercamp_first_section_about',
		array(
			'title'       => 'About page, 1st section',
			'description' => 'This is a settings for About page.',
			'priority'    => 209,
		)
	);

	$wp_customize->add_section(
		'makercamp_second_section_about_page',
		array(
			'title'       => 'About page, 2nd section',
			'description' => 'This is settings for 2nd section of About page',
			'priority'    => 209,
		)
	);

	$wp_customize->add_section(
		'makercamp_third_section_about_page',
		array(
			'title'       => 'About page, 3rd section',
			'description' => 'This is settings for 3rd section of About page',
			'priority'    => 209,
		)
	);

	$wp_customize->add_section(
		'makercamp_fourth_section_about_page',
		array(
			'title'       => 'About page, 4th section',
			'description' => 'This is settings for 4th section of About page',
			'priority'    => 209,
		)
	);

	$wp_customize->add_section(
		'makercamp_fifth_section_about_page',
		array(
			'title'       => 'About page, 5th section',
			'description' => 'This is settings for 5th section of About page',
			'priority'    => 209,
		)
	);

	$wp_customize->add_section(
		'makercamp_sixth_section_about_page',
		array(
			'title'       => 'About page, 6th section',
			'description' => 'This is a settings for About page.',
			'priority'    => 210,
		)
	);

	/**
	 * Hero
	 */
	$wp_customize->add_setting(   // Hero
		'about_hero_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'about_hero_title' ],
		)
	);
	$wp_customize->add_control(
		'about_hero_title',
		array(
			'label'   => 'About us hero',
			'section' => 'makercamp__about_hero',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Hero text
		'about_hero_text',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'about_hero_text' ],
		)
	);
	$wp_customize->add_control(
		'about_hero_text',
		array(
			'label'   => 'About Us hero text',
			'section' => 'makercamp__about_hero',
			'type'    => 'text',
		)
	);

	/**
	 * 1st section
	 */
	$wp_customize->add_setting(   // Title
		'section_first_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'section_first_title' ],
		)
	);
	$wp_customize->add_control(
		'section_first_title',
		array(
			'label'   => 'Section title',
			'section' => 'makercamp_first_section_about',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 1st paragraph
		'section_first_text_first',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'section_first_text_first' ],
		)
	);
	$wp_customize->add_control(
		'section_first_text_first',
		array(
			'label'   => '1st paragraph',
			'section' => 'makercamp_first_section_about',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 2-nd paragraph
		'section_first_text_second',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'section_first_text_second' ],
		)
	);
	$wp_customize->add_control(
		'section_first_text_second',
		array(
			'label'   => '2nd paragraph',
			'section' => 'makercamp_first_section_about',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 3-rd paragraph
		'section_first_text_third',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'section_first_text_third' ],
		)
	);
	$wp_customize->add_control(
		'section_first_text_third',
		array(
			'label'   => '3rd paragraph',
			'section' => 'makercamp_first_section_about',
			'type'    => 'text',
		)
	);
	/**
	 * 2nd section of About page
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
			'section' => 'makercamp_second_section_about_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Subtitle
		'second_section_subtitle_h',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_subtitle_h' ],
		)
	);
	$wp_customize->add_control(
		'second_section_subtitle_h',
		array(
			'label'   => 'Subtitle for 2nd section',
			'section' => 'makercamp_second_section_about_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Left column picture
		'second_section_left_picture_h',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_left_picture_h' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'second_section_left_picture_h',
			array(
				'label'    => 'Left column picture',
				'section'  => 'makercamp_second_section_about_page',
				'settings' => 'second_section_left_picture_h'
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
			'section' => 'makercamp_second_section_about_page',
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
			'section' => 'makercamp_second_section_about_page',
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
			'section' => 'makercamp_second_section_about_page',
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
			'section' => 'makercamp_second_section_about_page',
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
				'section'  => 'makercamp_second_section_about_page',
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
			'section' => 'makercamp_second_section_about_page',
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
			'section' => 'makercamp_second_section_about_page',
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
			'section' => 'makercamp_second_section_about_page',
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
			'section' => 'makercamp_second_section_about_page',
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
			'section' => 'makercamp_second_section_about_page',
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
			'section' => 'makercamp_second_section_about_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Right column 1st link title mobile
		'second_section_first_right_link_title_mobile',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_first_right_link_title_mobile' ],
		)
	);
	$wp_customize->add_control(
		'second_section_first_right_link_title_mobile',
		array(
			'label'   => '1st link title for right column in mobile',
			'section' => 'makercamp_second_section_about_page',
			'type'    => 'text',
		)
	);
	/**
	 * 3rd section of About page
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
			'section' => 'makercamp_third_section_about_page',
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
			'section' => 'makercamp_third_section_about_page',
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
			'section' => 'makercamp_third_section_about_page',
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
			'section' => 'makercamp_third_section_about_page',
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
			'section' => 'makercamp_third_section_about_page',
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
			'section' => 'makercamp_third_section_about_page',
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
			'section' => 'makercamp_third_section_about_page',
			'type'    => 'text',
		)
	);
	/**
	 * 4th section of About page
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
			'section' => 'makercamp_fourth_section_about_page',
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
			'fourth_section_first_picture',
			array(
				'label'    => '1st picture',
				'section'  => 'makercamp_fourth_section_about_page',
				'settings' => 'fourth_section_first_picture'
			)
		)
	);
	$wp_customize->add_setting(   // 1st link for 1st picture
		'fourth_section_first_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_first_link' ],
		)
	);
	$wp_customize->add_control(
		'fourth_section_first_link',
		array(
			'label'   => 'Link for 1st picture',
			'section' => 'makercamp_fourth_section_about_page',
			'type'    => 'text',
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
				'section'  => 'makercamp_fourth_section_about_page',
				'settings' => 'fourth_section_second_picture'
			)
		)
	);
	$wp_customize->add_setting(   // 2nd link for 2nd picture
		'fourth_section_second_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_second_link' ],
		)
	);
	$wp_customize->add_control(
		'fourth_section_second_link',
		array(
			'label'   => 'Link for 2nd picture',
			'section' => 'makercamp_fourth_section_about_page',
			'type'    => 'text',
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
				'section'  => 'makercamp_fourth_section_about_page',
				'settings' => 'fourth_section_third_picture'
			)
		)
	);
	$wp_customize->add_setting(   // 3rd link for 3rd picture
		'fourth_section_third_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_third_link' ],
		)
	);
	$wp_customize->add_control(
		'fourth_section_third_link',
		array(
			'label'   => 'Link for 3rd picture',
			'section' => 'makercamp_fourth_section_about_page',
			'type'    => 'text',
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
				'section'  => 'makercamp_fourth_section_about_page',
				'settings' => 'fourth_section_fourth_picture'
			)
		)
	);
	$wp_customize->add_setting(   // 4th link for 4th picture
		'fourth_section_fourth_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_fourth_link' ],
		)
	);
	$wp_customize->add_control(
		'fourth_section_fourth_link',
		array(
			'label'   => 'Link for 4th picture',
			'section' => 'makercamp_fourth_section_about_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 5th picture
		'fourth_section_fifth_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_fifth_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'fourth_section_fifth_picture',
			array(
				'label'    => '5th picture',
				'section'  => 'makercamp_fourth_section_about_page',
				'settings' => 'fourth_section_fifth_picture'
			)
		)
	);
	$wp_customize->add_setting(   // 5th link for 5th picture
		'fourth_section_fifth_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_fifth_link' ],
		)
	);
	$wp_customize->add_control(
		'fourth_section_fifth_link',
		array(
			'label'   => 'Link for 5th picture',
			'section' => 'makercamp_fourth_section_about_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 1st paragraph
		'fourth_section_first_paragraph',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_first_paragraph' ],
		)
	);
	$wp_customize->add_control(
		'fourth_section_first_paragraph',
		array(
			'label'   => 'Text for 1st paragraph',
			'section' => 'makercamp_fourth_section_about_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 2nd paragraph
		'fourth_section_second_paragraph',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'fourth_section_second_paragraph' ],
		)
	);
	$wp_customize->add_control(
		'fourth_section_second_paragraph',
		array(
			'label'   => 'Text for 2nd paragraph',
			'section' => 'makercamp_fourth_section_about_page',
			'type'    => 'text',
		)
	);
	/**
	 * 5th section, About page
	 */
	$wp_customize->add_setting(     // Title
		'sponsor_thanks_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'sponsor_thanks_title' ],
		)
	);
	$wp_customize->add_control(
		'sponsor_thanks_title',
		array(
			'label'   => 'Sponsor section title',
			'section' => 'makercamp_fifth_section_about_page',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Sponsor picture
		'sponsor_thanks_first_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'sponsor_thanks_first_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'sponsor_thanks_first_picture',
			array(
				'label'    => 'Spnsor picture',
				'section'  => 'makercamp_fifth_section_about_page',
				'settings' => 'sponsor_thanks_first_picture'
			)
		)
	);
	$wp_customize->add_setting(   // link for sponsor picture
		'sponsor_thanks_first_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'sponsor_thanks_first_link' ],
		)
	);
	$wp_customize->add_control(
		'sponsor_thanks_first_link',
		array(
			'label'   => 'Link for Sponsor URL',
			'section' => 'makercamp_fifth_section_about_page',
			'type'    => 'text',
		)
	);

	/**
	 * 6th section, About page
	 */
	$wp_customize->add_setting(     // Title
		'about_sixth_section_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'about_sixth_section_title' ],
		)
	);
	$wp_customize->add_control(
		'about_sixth_section_title',
		array(
			'label'   => '6th section title',
			'section' => 'makercamp_sixth_section_about_page',
			'type'    => 'text',
		)
	);
}

add_action( 'customize_register', 'makercamp_about_customizer' );