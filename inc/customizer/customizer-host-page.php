<?php
function makercamp_host_customizer( $wp_customize ) {
	global $makercamp_defaults_customizer_values;

	/**
	 * section in costomizer of Host a Camp page
	 */
	$wp_customize->add_section(   // hero
		'makercamp_host_hero_section',
		array(
			'title'       => 'Host a Camp, Hero',
			'description' => 'Bottom part of the Campsites page',
			'priority'    => 207,
		)
	);

	$wp_customize->add_section(   // 1st section
		'makercamp_host_first_section',
		array(
			'title'       => 'Host a Camp, 1st section',
			'description' => 'Bottom part of the Campsites page',
			'priority'    => 207,
		)
	);

	/**
	 * hero
	 */
	$wp_customize->add_setting(   // Title
		'host_hero_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_hero_title' ],
		)
	);
	$wp_customize->add_control(
		'host_hero_title',
		array(
			'label'   => 'Hero title',
			'section' => 'makercamp_host_hero_section',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // text
		'host_hero_text',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_hero_text' ],
		)
	);
	$wp_customize->add_control(
		'host_hero_text',
		array(
			'label'   => 'Hero text',
			'section' => 'makercamp_host_hero_section',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // link
		'host_hero_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_hero_link' ],
		)
	);
	$wp_customize->add_control(
		'host_hero_link',
		array(
			'label'   => 'Hero button link',
			'section' => 'makercamp_host_hero_section',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // link title
		'host_hero_link_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_hero_link_title' ],
		)
	);
	$wp_customize->add_control(
		'host_hero_link_title',
		array(
			'label'   => 'Hero button title',
			'section' => 'makercamp_host_hero_section',
			'type'    => 'text',
		)
	);

	/**
	 * 1st section
	 */
	$wp_customize->add_setting(   // Title
		'host_first_section_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_first_section_title' ],
		)
	);
	$wp_customize->add_control(
		'host_first_section_title',
		array(
			'label'   => '1st section title',
			'section' => 'makercamp_host_first_section',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 1st text
		'host_first_section_first_text',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_first_section_first_text' ],
		)
	);
	$wp_customize->add_control(
		'host_first_section_first_text',
		array(
			'label'   => '1st text',
			'section' => 'makercamp_host_first_section',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 2nd text
		'host_first_section_second_text',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_first_section_second_text' ],
		)
	);
	$wp_customize->add_control(
		'host_first_section_second_text',
		array(
			'label'   => '2nd text',
			'section' => 'makercamp_host_first_section',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 3rd text
		'host_first_section_third_text',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_first_section_third_text' ],
		)
	);
	$wp_customize->add_control(
		'host_first_section_third_text',
		array(
			'label'   => '3rd text',
			'section' => 'makercamp_host_first_section',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 4th text
		'host_first_section_fourth_text',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_first_section_fourth_text' ],
		)
	);
	$wp_customize->add_control(
		'host_first_section_fourth_text',
		array(
			'label'   => '4th text',
			'section' => 'makercamp_host_first_section',
			'type'    => 'text',
		)
	);
}

add_action( 'customize_register', 'makercamp_host_customizer' );