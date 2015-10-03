<?php
/**
 * section in costomizer of Find a Camp page
 */
function makercamp_map_customizer( $wp_customize ) {
	global $makercamp_defaults_customizer_values;

	$wp_customize->add_section(
		'makercamp_section_find_camp',
		array(
			'title'       => 'Find a Camp, settings',
			'description' => 'Top part of the Campsites page',
			'priority'    => 206,
		)
	);
	// Hero title
	$wp_customize->add_setting(
		'map_hero_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'map_hero_title' ],
		)
	);
	$wp_customize->add_control(
		'map_hero_title',
		array(
			'label'   => 'Hero title on map page',
			'section' => 'makercamp_section_find_camp',
			'type'    => 'text',
		)
	);
	// Hero text
	$wp_customize->add_setting(
		'map_hero_text',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'map_hero_text' ],
		)
	);
	$wp_customize->add_control(
		'map_hero_text',
		array(
			'label'   => 'Hero text on map page',
			'section' => 'makercamp_section_find_camp',
			'type'    => 'text',
		)
	);
	// Title before map
	$wp_customize->add_setting(
		'title_before_map',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'title_before_map' ],
		)
	);
	$wp_customize->add_control(
		'title_before_map',
		array(
			'label'   => 'Title before map',
			'section' => 'makercamp_section_find_camp',
			'type'    => 'text',
		)
	);
	// Title after map
	$wp_customize->add_setting(
		'title_after_map',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'title_after_map' ],
		)
	);
	$wp_customize->add_control(
		'title_after_map',
		array(
			'label'   => 'Title after map',
			'section' => 'makercamp_section_find_camp',
			'type'    => 'text',
		)
	);
	// Some text after map
	$wp_customize->add_setting(
		'description_after_map',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'description_after_map' ],
		)
	);
	$wp_customize->add_control(
		'description_after_map',
		array(
			'label'   => 'Description after map',
			'section' => 'makercamp_section_find_camp',
			'type'    => 'text',
		)
	);
	// Embed map
	$wp_customize->add_setting(
		'map_embed_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'map_embed_link' ],
		)
	);
	$wp_customize->add_control(
		'map_embed_link',
		array(
			'label'   => 'Embed link map',
			'section' => 'makercamp_section_find_camp',
			'type'    => 'text',
		)
	);
	// Upload json file
	$wp_customize->add_setting(
		'upload_json_file'
	);
	$wp_customize->add_control(
		new WP_Customize_Upload_Control(
			$wp_customize,
			'upload_json_file',
			array(
				'label'    => 'Upload JSON file (with .txt extension)',
				'section'  => 'makercamp_section_find_camp',
				'settings' => 'upload_json_file'
			)
		)
    );
}

add_action( 'customize_register', 'makercamp_map_customizer' );