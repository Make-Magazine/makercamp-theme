<?php
/**
 * Maker Camp Theme Theme Customizer
 *
 * @package Maker Camp Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function makercamp_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
  $wp_customize->remove_section( 'colors' );
  $wp_customize->remove_control( 'header_image' );
  $wp_customize->remove_section( 'static_front_page' );
  $wp_customize->remove_panel( 'widgets' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function makercamp_theme_customize_preview_js() {
	wp_enqueue_script( 'makercamp_theme_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', TRUE );
}

add_action( 'customize_preview_init', 'makercamp_theme_customize_preview_js' );

/**
 * Added all vaules of customizer to one array
 */

$makercamp_defaults_customizer_values = array(
	/**
	 * Find a camp page
	 */
	'title_before_map'                             => 'Is there a campsite close to you? Join the fun',
	'title_after_map'                              => '... or start a new campsite',
	'description_after_map'                        => 'If you can’t find a nearby site in the list or the map, talk to your local library, makerspace, Boys & Girls Club, or community center about hosting Maker Camp for the kids in your community. Maker Camp Affiliate Sites receive a package of materials for making and for promoting the camp, while supplies last. Remember that whether or not you are able to find an organization to host Maker Camp, you can still be a part of Maker Camp no matter where you are, because it is online and free!',
	'map_embed_link'                               => 'https://www.google.com/maps/d/embed?mid=znSdL4uF4CiE.k7sHDldZCKys',
	'map_hero_title'                               => 'Find a camp',
	'map_hero_text'                                => 'Maker Camp is an online summer camp that happens everywhere around the world. But you can meet your neighbors who are taking part in Maker Camp too! Many libraries, makerspaces, and community centers are hosting Maker Camps for the kids in their communities.',
	/**
	 * host a camp page
	 */
	'host_hero_title'                              => 'Host a camp',
	'host_hero_text'                               => 'Thank you in advance for creating the "in your neighborhood" part of Maker Camp. We will do our best to make sure that the "online" part is amazing!',
	'host_hero_link'                               => 'https://docs.google.com/forms/d/15RlD9GtqEWd03wEKDqOuiIOroO6Amvw3sFBwQn3ilCg/viewform',
	'host_hero_link_title'                         => 'Apply now',
	'host_first_section_title'                     => 'Our Affiliate Program supports campsites worldwide, and you can join!',
	'host_first_section_first_text'                => 'Integrate the Maker Camp projects, guest makers and virtual field trips into your existing summer program for kids',
	'host_first_section_second_text'               => 'Promote your Maker Camp program and affiliate status with a link on the Maker Camp map',
	'host_first_section_third_text'                => 'Let kids in your neighborhood know you are a Maker Camp affiliate',
	'host_first_section_fourth_text'               => 'Have the kids share their projects on the Maker Camp Community page',
	/**
	 * about us page
	 */
	'about_hero_title'                             => 'About Us',
	'about_hero_text'                              => 'Maker Camp is designed to get more kids making more, and to support the adults who want to introduce the joy of making to a million makers. We aspire to become a community-built collection of project tutorials by, for, and with the kids who are making the world of the future.',
	'section_first_title'                          => 'What is Maker Camp?',
	'section_first_text_first'                     => 'Maker Camp is a free, 6-week online (and in-person) summer camp for young Makers interested in DIY, making, creating, crafting, hacking, tinkering, and learning. It combines the best parts of summer camp and with sure-fire starter projects, so that young Makers across the country and the world can make together.',
	'section_first_text_second'                    => 'Campers make projects, go on virtual field trips, and interact with our counselors wherever they are including: from home, on the road, or at local community spaces like public libraries, Boys and Girls Clubs, Computer Clubhouses, 4-H Clubs, scouting groups, and more. Past field trips have included virtual visits to NASA, Disney, LEGO, the White House, Blue Man Group, and Pixar.',
	'section_first_text_third'                     => 'Maker Camp is produced by Maker Media, the people behind Maker Faire and Make: magazine.',
	'second_section_title'                         => 'How Maker Camp Works',
	'second_section_subtitle_h'                    => 'Maker Camp is a free online summer camp you can join anytime!',
	'second_section_left_picture_h'                => get_template_directory_uri() . '/public/assets/img/how_it_works.png',
	'second_section_left_title'                    => 'Participate online from home',
	'second_section_left_text'                     => 'Join us at Makercamp.com to explore a new project every day. Get an overview about the project in our daily video playlist. Follow links to work on projects at home.',
	'second_section_left_link'                     => '#hero',
	'second_section_left_link_title'               => 'Sign up for fun alerts',
	'second_section_right_picture'                 => get_template_directory_uri() . '/public/assets/img/how_camp_works.png',
	'second_section_right_title'                   => 'Join a hosted camp in your neighborhood',
	'second_section_right_text'                    => 'Maker Camp affiliates host physical campsites where campers work with other kids and adults to guide you. Affiliates can be Boys & Girls Clubs, community centers and many more!',
	'second_section_first_right_link'              => '/affiliate-program',
	'second_section_first_right_link_title'        => 'Find a campsite in your neighborhood',
	'second_section_first_right_link_title_mobile' => 'Find a campsite',
	'second_section_second_right_link'             => '/map',
	'second_section_second_right_link_title'       => 'Find a campas',
	'fifth_section_title'                          => 'A Day At Camp',
	'fifth_section_left_title'                     => 'Explore',
	'fifth_section_left_text'                      => 'Get your feet wet as you get inspired by what Makers do, and play around with the stuff, tools, and ways of making.',
	'fifth_section_central_title'                  => 'Make',
	'fifth_section_central_text'                   => 'Our cool and fun step-by-step projects branch out from the theme. Advanced Makers can take on our Camp Challenges.',
	'fifth_section_right_title'                    => 'Share',
	'fifth_section_right_text'                     => 'Share what you’ve done online. Meet up in real life with our end-of-week showcases. Or connect cabin-to-cabin with other Maker Campers.',
	'fourth_section_title'                          => 'Stock up for Camp',
	'fourth_section_first_picture'                  => get_template_directory_uri() . '/public/assets/img/stock_camp_1.png',
	'fourth_section_first_link'                     => 'http://www.makershed.com/collections/maker-camp-2015',
	'fourth_section_second_picture'                 => get_template_directory_uri() . '/public/assets/img/stock_camp_2.png',
	'fourth_section_second_link'                    => 'http://www.makershed.com/collections/maker-camp-2015',
	'fourth_section_third_picture'                  => get_template_directory_uri() . '/public/assets/img/stock_camp_3.png',
	'fourth_section_third_link'                     => 'http://www.makershed.com/collections/maker-camp-2015',
	'fourth_section_fourth_picture'                 => get_template_directory_uri() . '/public/assets/img/stock_camp_4.png',
	'fourth_section_fourth_link'                    => 'http://www.makershed.com/collections/maker-camp-2015',
	'fourth_section_fifth_picture'                  => get_template_directory_uri() . '/public/assets/img/stock_camp_5.png',
	'fourth_section_fifth_link'                     => 'http://www.makershed.com/collections/maker-camp-2015',
	'fourth_section_first_paragraph'                => 'Maker Shed covers all your camp needs... and more!',
	'fourth_section_second_paragraph'               => 'Make sure to visit <strong><a href="http://www.makershed.com/collections/maker-camp-2015">our special camp page on makershed.com</a></strong>. We\'ve created a special collection of kids, tools and supplies we think that work well for making projects.',
	'sponsor_thanks_title'                   			 => 'Sponsor Thanks',
	'sponsor_thanks_first_link'                    => '/',
	'sponsor_thanks_first_picture'                 => get_template_directory_uri() . '/public/assets/img/project_1.png',
	'about_sixth_section_title'                    => 'Our Camp Crew',
	/**
	 * hidden page
	 */
	'hidden_hero_title'                            => 'Welcome',
	'hidden_hero_text'                             => 'Thank you in advance for creating the "in your neighborhood" part of Maker Camp. We will do our best to make sure that the "online" part is amazing!',
	'hidden_first_section_title'                   => 'With lively, daily videos, fun projects, and an active online community, there\'s no shortage of ways to participate! We ask affiliates to do just a few things',
	'hidden_first_section_first_text'              => 'Share videos, photos, comments of projects, experience.',
	'hidden_first_section_second_text'             => 'Provide feedback, comments, input about what works, what doesn\'t.',
	'hidden_first_section_third_text'              => 'Share aggregate data of campers (non-individualized ages, gender).',
	'hidden_first_section_fourth_text'             => 'Be available and willing to speak with press/media about your campers\' participation and projects.',
	'hidden_first_section_link'                    => 'https://plus.google.com/communities/107377046073638428310',
	'hidden_first_section_link_title'              => 'Visit Google+ community',
	'hidden_third_section_title'                   => 'These digital assets are for stand-alone use on your website or in promotional materials Please do not modify them.',
	'hidden_third_section_first_block_title'       => 'Maker Camp Affiliate Badges, avaliable in PNG and JPG format',
	'hidden_third_section_first_block_link'        => 'http://makercamp.com/promote',
  'hidden_third_section_first_block_link_title'  => 'Download',
	'hidden_third_section_first_block_picture'     => get_template_directory_uri() . '/public/assets/img/download_one.jpg',
	'hidden_third_section_second_block_title'      => 'Maker Camp Robot Logo. Get it in white, single and full color',
	'hidden_third_section_second_block_link'       => 'http://makercamp.com/promote',
  'hidden_third_section_second_block_link_title'  => 'Download',
	'hidden_third_section_second_block_picture'    => get_template_directory_uri() . '/public/assets/img/download_two.jpg',
	'hidden_third_section_third_block_title'       => 'Maker Camp Logo. Get it in white, single and full color.',
	'hidden_third_section_third_block_link'        => 'http://makercamp.com/promote',
  'hidden_third_section_third_block_link_title'  => 'Download',
	'hidden_third_section_third_block_picture'     => get_template_directory_uri() . '/public/assets/img/download_three.jpg',
	'hidden_third_section_fourth_block_title'      => 'Maker Camp Affiliate Playbook. Find even more project ideas.',
	'hidden_third_section_fourth_block_link'       => 'http://makercamp.com/wp-content/uploads/2014/06/MakerCamp-Playbook-2014-smaller.pdf',
  'hidden_third_section_fourth_block_link_title'  => 'Download',
	'hidden_third_section_fourth_block_picture'    => get_template_directory_uri() . '/public/assets/img/download_four.jpg',
	'hidden_third_section_fifth_block_title'       => 'Maker Camp Affiliate Kit. Get a PDF with all the items you need.',
	'hidden_third_section_fifth_block_link'        => 'http://makercamp.com/wp-content/uploads/2015/07/MakerCamp2015_Packing-List.pdf',
  'hidden_third_section_fifth_block_link_title'  => 'Download',
	'hidden_third_section_fifth_block_picture'     => get_template_directory_uri() . '/public/assets/img/download_five.jpg',
	'hidden_fourth_section_text'                   => 'We’re interested in reaching and inspiring young women, as well as kids who couldn’t otherwise attend a camp. If your recruitment and outreach focuses on girls, low-income families, or any other groups who are not well-represented in technology, we’d love to hear about it!',
	'hidden_fifth_section_text_first'              => 'Please <strong>do not</strong> share this list with the general Maker Camp community. We share projects with use the affiliates early to allow more time for you to prepare for the groups of campers who come to your site. Hearing news of the next daily project is exciting for our makers or campers, so please help us maintain that shared experience in our online community period.',
	'hidden_fifth_section_text_second'             => 'If you have questions at any time please don\'t hesitate to contact us.',
);


/**
 * Added custom customizer for Home, Find a camp, Host a camp, About us, Hidden pages.
 */
require get_template_directory() . '/inc/customizer/customizer-map-page.php';
require get_template_directory() . '/inc/customizer/customizer-host-page.php';
require get_template_directory() . '/inc/customizer/customizer-about-page.php';
require get_template_directory() . '/inc/customizer/customizer-hidden-page.php';

function makercamp_defaults_customizer( $name ) {
	global $makercamp_defaults_customizer_values;

	return get_theme_mod( $name, $makercamp_defaults_customizer_values[ $name ] );
}