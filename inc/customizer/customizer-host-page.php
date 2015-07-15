<?php
function makercamp_host_customizer( $wp_customize ) {
	global $makercamp_defaults_customizer_values;

	/**
	 * section in costomizer of Host a Camp page
	 */
	$wp_customize->add_section(   // hero
		'makercamp_host_hero_section',
		array(
			'title'       => 'Host page Hero',
			'description' => 'Host a Camp, 1st section settings',
			'priority'    => 207,
		)
	);

	$wp_customize->add_section(   // 1st section
		'makercamp_host_first_section',
		array(
			'title'       => 'Host a Camp 1st section',
			'description' => 'Host a Camp, 1st section settings',
			'priority'    => 207,
		)
	);
	$wp_customize->add_section(   // 2nd section
		'makercamp_host_second_section',
		array(
			'title'       => 'Host a Camp, 2nd section',
			'description' => 'Host a Camp, 2nd section settings',
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
	/**
	 * 2nd section
	 */
	$wp_customize->add_setting(   // Title
		'host_second_section_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_second_section_title' ],
		)
	);
	$wp_customize->add_control(
		'host_second_section_title',
		array(
			'label'   => '2nd section title',
			'section' => 'makercamp_host_second_section',
			'type'    => 'text',
		)
	);
	/**
	 * 2nd section, 1st block
	 */
	$wp_customize->add_setting(   // Title
		'host_second_section_first_block_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_second_section_first_block_title' ],
		)
	);
	$wp_customize->add_control(
		'host_second_section_first_block_title',
		array(
			'label'   => '1st block title',
			'section' => 'makercamp_host_second_section',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Link
		'host_second_section_first_block_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_second_section_first_block_link' ],
		)
	);
	$wp_customize->add_control(
		'host_second_section_first_block_link',
		array(
			'label'   => '1st block link',
			'section' => 'makercamp_host_second_section',
			'type'    => 'text',
		)
	);
    $wp_customize->add_setting(   // Link title
            'host_second_section_first_block_link_title',
            array(
                    'default' => $makercamp_defaults_customizer_values[ 'host_second_section_first_block_link_title' ],
            )
    );
    $wp_customize->add_control(
            'host_second_section_first_block_link_title',
            array(
                    'label'   => '1st block link title',
                    'section' => 'makercamp_host_second_section',
                    'type'    => 'text',
            )
    );
	$wp_customize->add_setting(   // Picture
		'host_second_section_first_block_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_second_section_first_block_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'host_second_section_first_block_picture',
			array(
				'label'    => '1st block picture',
				'section'  => 'makercamp_host_second_section',
				'settings' => 'host_second_section_first_block_picture'
			)
		)
	);
	/**
	 * 2nd section, 2nd block
	 */
	$wp_customize->add_setting(   // Title
		'host_second_section_second_block_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_second_section_second_block_title' ],
		)
	);
	$wp_customize->add_control(
		'host_second_section_second_block_title',
		array(
			'label'   => '2nd block title',
			'section' => 'makercamp_host_second_section',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Link
		'host_second_section_second_block_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_second_section_second_block_link' ],
		)
	);
	$wp_customize->add_control(
		'host_second_section_second_block_link',
		array(
			'label'   => '2nd block link',
			'section' => 'makercamp_host_second_section',
			'type'    => 'text',
		)
	);
    $wp_customize->add_setting(   // Link title
            'host_second_section_second_block_link_title',
            array(
                    'default' => $makercamp_defaults_customizer_values[ 'host_second_section_second_block_link_title' ],
            )
    );
    $wp_customize->add_control(
            'host_second_section_second_block_link_title',
            array(
                    'label'   => '2nd block link title',
                    'section' => 'makercamp_host_second_section',
                    'type'    => 'text',
            )
    );
	$wp_customize->add_setting(   // Picture
		'host_second_section_second_block_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_second_section_second_block_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'host_second_section_second_block_picture',
			array(
				'label'    => '2nd block picture',
				'section'  => 'makercamp_host_second_section',
				'settings' => 'host_second_section_second_block_picture'
			)
		)
	);
	/**
	 * 2nd section, 3rd block
	 */
	$wp_customize->add_setting(   // Title
		'host_second_section_third_block_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_second_section_third_block_title' ],
		)
	);
	$wp_customize->add_control(
		'host_second_section_third_block_title',
		array(
			'label'   => '3rd block title',
			'section' => 'makercamp_host_second_section',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Link
		'host_second_section_third_block_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_second_section_third_block_link' ],
		)
	);
	$wp_customize->add_control(
		'host_second_section_third_block_link',
		array(
			'label'   => '3rd block link',
			'section' => 'makercamp_host_second_section',
			'type'    => 'text',
		)
	);
    $wp_customize->add_setting(   // Link title
            'host_second_section_third_block_link_title',
            array(
                    'default' => $makercamp_defaults_customizer_values[ 'host_second_section_third_block_link_title' ],
            )
    );
    $wp_customize->add_control(
            'host_second_section_third_block_link_title',
            array(
                    'label'   => '3rd block link title',
                    'section' => 'makercamp_host_second_section',
                    'type'    => 'text',
            )
    );
	$wp_customize->add_setting(   // Picture
		'host_second_section_third_block_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_second_section_third_block_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'host_second_section_third_block_picture',
			array(
				'label'    => '3rd block picture',
				'section'  => 'makercamp_host_second_section',
				'settings' => 'host_second_section_third_block_picture'
			)
		)
	);
	/**
	 * 2nd section, 4th block
	 */
	$wp_customize->add_setting(   // Title
		'host_second_section_fourth_block_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_second_section_fourth_block_title' ],
		)
	);
	$wp_customize->add_control(
		'host_second_section_fourth_block_title',
		array(
			'label'   => '4th block title',
			'section' => 'makercamp_host_second_section',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Link
		'host_second_section_fourth_block_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_second_section_fourth_block_link' ],
		)
	);
	$wp_customize->add_control(
		'host_second_section_fourth_block_link',
		array(
			'label'   => '4th block link',
			'section' => 'makercamp_host_second_section',
			'type'    => 'text',
		)
	);
    $wp_customize->add_setting(   // Link title
        'host_second_section_fourth_block_link_title',
        array(
            'default' => $makercamp_defaults_customizer_values[ 'host_second_section_fourth_block_link_title' ],
        )
    );
    $wp_customize->add_control(
        'host_second_section_fourth_block_link_title',
        array(
            'label'   => '4th block link title',
            'section' => 'makercamp_host_second_section',
            'type'    => 'text',
        )
    );
	$wp_customize->add_setting(   // Picture
		'host_second_section_fourth_block_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_second_section_fourth_block_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'host_second_section_fourth_block_picture',
			array(
				'label'    => '4th block picture',
				'section'  => 'makercamp_host_second_section',
				'settings' => 'host_second_section_fourth_block_picture'
			)
		)
	);
	/**
	 * 2nd section, 5th block
	 */
	$wp_customize->add_setting(   // Title
		'host_second_section_fifth_block_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_second_section_fifth_block_title' ],
		)
	);
	$wp_customize->add_control(
		'host_second_section_fifth_block_title',
		array(
			'label'   => '5th block title',
			'section' => 'makercamp_host_second_section',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Link
		'host_second_section_fifth_block_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_second_section_fifth_block_link' ],
		)
	);
	$wp_customize->add_control(
		'host_second_section_fifth_block_link',
		array(
			'label'   => '5th block link',
			'section' => 'makercamp_host_second_section',
			'type'    => 'text',
		)
	);
    $wp_customize->add_setting(   // Link
        'host_second_section_fifth_block_link_title',
        array(
            'default' => $makercamp_defaults_customizer_values[ 'host_second_section_fifth_block_link_title' ],
        )
    );
    $wp_customize->add_control(
        'host_second_section_fifth_block_link_title',
        array(
            'label'   => '5th block link title',
            'section' => 'makercamp_host_second_section',
            'type'    => 'text',
        )
    );
	$wp_customize->add_setting(   // picture
		'host_second_section_fifth_block_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'host_second_section_fifth_block_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'host_second_section_fifth_block_picture',
			array(
				'label'    => '5th block picture',
				'section'  => 'makercamp_host_second_section',
				'settings' => 'host_second_section_fifth_block_picture'
			)
		)
	);
}

add_action( 'customize_register', 'makercamp_host_customizer' );