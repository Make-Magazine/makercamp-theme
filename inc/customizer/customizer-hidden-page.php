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
          'default' => 'With lively, daily videos, fun projects, and an active online community, there\'s no shortage of ways to participate! We ask affiliates to do just a few things',
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
          'default' => 'Share videos, photos, comments of projects, experience. ',
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
          'default' => 'Provide feedback, comments, input about what works, what doesn\'t. ',
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
          'default' => 'Share aggregate data of campers (non-individualized ages, gender). ',
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
          'default' => 'Be available and willing to speak with press/media about your campers\' participation and projects.',
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
          'default' => 'https://plus.google.com/communities/107377046073638428310',
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
          'default' => 'Maker Camp 2015',
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
          'default' => 'Remember you are welcome to do any making activity on any day, even if you do not follow our schedule or recommendations. The content for each week is released weekly.',
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
          'default' => 'These digital assets are for stand-alone use on your website or in promotional materials Please do not modify them. ',
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
          'default' => 'Maker Camp Affiliate Badges, avaliable in PNG and JPG format.',
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
          'default' => 'http://makercamp.com/promote',
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
      'hidden_third_section_first_block_picture'
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
          'default' => 'Maker Camp Robot Logo. Get it in white, single and full color',
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
          'default' => 'http://makercamp.com/promote',
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
      'hidden_third_section_second_block_picture'
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
          'default' => 'Maker Camp Logo. Get it in white, single and full color.',
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
          'default' => 'http://makercamp.com/promote',
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
      'hidden_third_section_third_block_picture'
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
          'default' => 'Maker Camp Affiliate Playbook. Find even more project ideas. ',
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
          'default' => 'http://makercamp.com/wp-content/uploads/2014/06/MakerCamp-Playbook-2014-smaller.pdf',
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
      'hidden_third_section_fourth_block_picture'
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
          'default' => 'Maker Camp Affiliate Kit. Get a PDF with all the items you need.',
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
          'default' => 'http://makercamp.com/wp-content/uploads/2015/07/MakerCamp2015_Packing-List.pdf',
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
      'hidden_third_section_fifth_block_picture'
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
          'default' => 'We’re interested in reaching and inspiring young women, as well as kids who couldn’t otherwise attend a camp. If your recruitment and outreach focuses on girls, low-income families, or any other groups who are not well-represented in technology, we’d love to hear about it!',
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
          'default' => 'Please <strong>do not</strong> share this list with the general Maker Camp community. We share projects with use the affiliates early to allow more time for you to prepare for the groups of campers who come to your site. Hearing news of the next daily project is exciting for our makers or campers, so please help us maintain that shared experience in our online community period.',
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
          'default' => 'If you have questions at any time please don\'t hesitate to contact us. ',
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