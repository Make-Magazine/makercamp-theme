<?php
function makercamp_hidden_customizer($wp_customize)
{
    global $makercamp_defaults_customizer_values;

    /**
     * section in costomizer for Hidden page
     */

    $wp_customize->add_section( // Hero
            'makercamp_hidden_hero',
            array(
                    'title' => 'Hidden page Hero',
                    'description' => 'This is a settings for Hidden page, 1st section',
                    'priority' => 211,
            )
    );

    $wp_customize->add_section( // 1st section
            'makercamp_hidden_section_first',
            array(
                    'title' => 'Hidden page, 1st section',
                    'description' => 'This is a settings for Hidden page, 1st section',
                    'priority' => 211,
            )
    );
    $wp_customize->add_section( // 3rd section
            'makercamp_hidden_section_third',
            array(
                    'title' => 'Hidden page, 3rd section',
                    'description' => 'This is a settings for Hidden page, 3rd section',
                    'priority' => 213,
            )
    );
    $wp_customize->add_section( // 4th section
            'makercamp_hidden_section_fourth',
            array(
                    'title' => 'Hidden page, 4th section',
                    'description' => 'This is a settings for Hidden page, 4th section',
                    'priority' => 214,
            )
    );
    $wp_customize->add_section( // 5th section
            'makercamp_hidden_section_fifth',
            array(
                    'title' => 'Hidden page, 5th section',
                    'description' => 'This is a settings for Hidden page, 5th section',
                    'priority' => 215,
            )
    );
    /**
     * Hero
     */

    $wp_customize->add_setting( // Title
            'hidden_hero_title',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_hero_title'],
            )
    );
    $wp_customize->add_control(
            'hidden_hero_title',
            array(
                    'label' => 'Hidden page Hero',
                    'section' => 'makercamp_hidden_hero',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // text
            'hidden_hero_text',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_hero_text'],
            )
    );
    $wp_customize->add_control(
            'hidden_hero_text',
            array(
                    'label' => 'Hidden page Hero text',
                    'section' => 'makercamp_hidden_hero',
                    'type' => 'text',
            )
    );

    /**
     * 1st section
     */
    $wp_customize->add_setting( // Title
            'hidden_first_section_title',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_first_section_title'],
            )
    );
    $wp_customize->add_control(
            'hidden_first_section_title',
            array(
                    'label' => '1st section title',
                    'section' => 'makercamp_hidden_section_first',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // 1st text
            'hidden_first_section_first_text',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_first_section_first_text'],
            )
    );
    $wp_customize->add_control(
            'hidden_first_section_first_text',
            array(
                    'label' => '1st text',
                    'section' => 'makercamp_hidden_section_first',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // 2nd text
            'hidden_first_section_second_text',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_first_section_second_text'],
            )
    );
    $wp_customize->add_control(
            'hidden_first_section_second_text',
            array(
                    'label' => '2nd text',
                    'section' => 'makercamp_hidden_section_first',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // 3rd text
            'hidden_first_section_third_text',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_first_section_third_text'],
            )
    );
    $wp_customize->add_control(
            'hidden_first_section_third_text',
            array(
                    'label' => '3rd text',
                    'section' => 'makercamp_hidden_section_first',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // 4th text
            'hidden_first_section_fourth_text',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_first_section_fourth_text'],
            )
    );
    $wp_customize->add_control(
            'hidden_first_section_fourth_text',
            array(
                    'label' => '4th text',
                    'section' => 'makercamp_hidden_section_first',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // Link
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
    $wp_customize->add_setting( // Link title
            'hidden_first_section_link_title',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_first_section_link_title'],
            )
    );
    $wp_customize->add_control(
            'hidden_first_section_link_title',
            array(
                    'label' => 'Link title',
                    'section' => 'makercamp_hidden_section_first',
                    'type' => 'text',
            )
    );
    /**
     * 3rd section
     */
    $wp_customize->add_setting( // Title
            'hidden_third_section_title',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_third_section_title'],
            )
    );
    $wp_customize->add_control(
            'hidden_third_section_title',
            array(
                    'label' => '3rd section title',
                    'section' => 'makercamp_hidden_section_third',
                    'type' => 'text',
            )
    );
    /**
     * 3rd section, 1st block
     */
    $wp_customize->add_setting( // Title
            'hidden_third_section_first_block_title',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_third_section_first_block_title'],
            )
    );
    $wp_customize->add_control(
            'hidden_third_section_first_block_title',
            array(
                    'label' => '1st block title',
                    'section' => 'makercamp_hidden_section_third',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // Link
            'hidden_third_section_first_block_link',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_third_section_first_block_link'],
            )
    );
    $wp_customize->add_control(
            'hidden_third_section_first_block_link',
            array(
                    'label' => '1st block link',
                    'section' => 'makercamp_hidden_section_third',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // Link title
            'hidden_third_section_first_block_link_title',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_third_section_first_block_link_title'],
            )
    );
    $wp_customize->add_control(
            'hidden_third_section_first_block_link_title',
            array(
                    'label' => '1st block link title',
                    'section' => 'makercamp_hidden_section_third',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // Picture
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
                            'label' => '1st block picture',
                            'section' => 'makercamp_hidden_section_third',
                            'settings' => 'hidden_third_section_first_block_picture'
                    )
            )
    );
    /**
     * 3rd section, 2nd block
     */
    $wp_customize->add_setting( // Title
            'hidden_third_section_second_block_title',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_third_section_second_block_title'],
            )
    );
    $wp_customize->add_control(
            'hidden_third_section_second_block_title',
            array(
                    'label' => '2nd block title',
                    'section' => 'makercamp_hidden_section_third',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // Link
            'hidden_third_section_second_block_link',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_third_section_second_block_link'],
            )
    );
    $wp_customize->add_control(
            'hidden_third_section_second_block_link',
            array(
                    'label' => '2nd block link',
                    'section' => 'makercamp_hidden_section_third',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // Link title
            'hidden_third_section_second_block_link_title',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_third_section_second_block_link_title'],
            )
    );
    $wp_customize->add_control(
            'hidden_third_section_second_block_link_title',
            array(
                    'label' => '2nd block link title',
                    'section' => 'makercamp_hidden_section_third',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // Picture
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
                            'label' => '2nd block picture',
                            'section' => 'makercamp_hidden_section_third',
                            'settings' => 'hidden_third_section_second_block_picture'
                    )
            )
    );
    /**
     * 3rd section, 3rd block
     */
    $wp_customize->add_setting( // Title
            'hidden_third_section_third_block_title',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_third_section_third_block_title'],
            )
    );
    $wp_customize->add_control(
            'hidden_third_section_third_block_title',
            array(
                    'label' => '3rd block title',
                    'section' => 'makercamp_hidden_section_third',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // Link
            'hidden_third_section_third_block_link',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_third_section_third_block_link'],
            )
    );
    $wp_customize->add_control(
            'hidden_third_section_third_block_link',
            array(
                    'label' => '3rd block link',
                    'section' => 'makercamp_hidden_section_third',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // Link title
            'hidden_third_section_third_block_link_title',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_third_section_third_block_link_title'],
            )
    );
    $wp_customize->add_control(
            'hidden_third_section_third_block_link_title',
            array(
                    'label' => '3rd block link title',
                    'section' => 'makercamp_hidden_section_third',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // Picture
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
                            'label' => '3rd block picture',
                            'section' => 'makercamp_hidden_section_third',
                            'settings' => 'hidden_third_section_third_block_picture'
                    )
            )
    );
    /**
     * 3rd section, 4th block
     */
    $wp_customize->add_setting( // Title
            'hidden_third_section_fourth_block_title',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_third_section_fourth_block_title'],
            )
    );
    $wp_customize->add_control(
            'hidden_third_section_fourth_block_title',
            array(
                    'label' => '4th block title',
                    'section' => 'makercamp_hidden_section_third',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // Link
            'hidden_third_section_fourth_block_link',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_third_section_fourth_block_link'],
            )
    );
    $wp_customize->add_control(
            'hidden_third_section_fourth_block_link',
            array(
                    'label' => '4th block link',
                    'section' => 'makercamp_hidden_section_third',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // Link title
            'hidden_third_section_fourth_block_link_title',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_third_section_fourth_block_link_title'],
            )
    );
    $wp_customize->add_control(
            'hidden_third_section_fourth_block_link_title',
            array(
                    'label' => '4th block link title',
                    'section' => 'makercamp_hidden_section_third',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // Picture
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
                            'label' => '4th block picture',
                            'section' => 'makercamp_hidden_section_third',
                            'settings' => 'hidden_third_section_fourth_block_picture'
                    )
            )
    );
    /**
     * 3rd section, 5th block
     */
    $wp_customize->add_setting( // Title
            'hidden_third_section_fifth_block_title',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_third_section_fifth_block_title'],
            )
    );
    $wp_customize->add_control(
            'hidden_third_section_fifth_block_title',
            array(
                    'label' => '5th block title',
                    'section' => 'makercamp_hidden_section_third',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // Link
            'hidden_third_section_fifth_block_link',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_third_section_fifth_block_link'],
            )
    );
    $wp_customize->add_control(
        'hidden_third_section_fifth_block_link',
        array(
            'label' => '5th block link',
            'section' => 'makercamp_hidden_section_third',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting( // Link title
            'hidden_third_section_fifth_block_link_title',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_third_section_fifth_block_link_title'],
            )
    );
    $wp_customize->add_control(
            'hidden_third_section_fifth_block_link_title',
            array(
                    'label' => '5th block link title',
                    'section' => 'makercamp_hidden_section_third',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // Picture
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
                'label' => '5th block picture',
                'section' => 'makercamp_hidden_section_third',
                'settings' => 'hidden_third_section_fifth_block_picture'
            )
        )
    );
    /**
     * 4th section
     */
    $wp_customize->add_setting( // Text
            'hidden_fourth_section_text',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_fourth_section_text'],
            )
    );
    $wp_customize->add_control(
            'hidden_fourth_section_text',
            array(
                    'label' => 'Text for 4th section',
                    'section' => 'makercamp_hidden_section_fourth',
                    'type' => 'text',
            )
    );
    /**
     * 5th section
     */
    $wp_customize->add_setting( // 1st text
            'hidden_fifth_section_text_first',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_fifth_section_text_first'],
            )
    );
    $wp_customize->add_control(
            'hidden_fifth_section_text_first',
            array(
                    'label' => '1st paragraph',
                    'section' => 'makercamp_hidden_section_fifth',
                    'type' => 'text',
            )
    );
    $wp_customize->add_setting( // 2nd text
            'hidden_fifth_section_text_second',
            array(
                    'default' => $makercamp_defaults_customizer_values['hidden_fifth_section_text_second'],
            )
    );
    $wp_customize->add_control(
            'hidden_fifth_section_text_second',
            array(
                    'label' => '2nd paragraph',
                    'section' => 'makercamp_hidden_section_fifth',
                    'type' => 'text',
            )
    );
}

add_action('customize_register', 'makercamp_hidden_customizer');