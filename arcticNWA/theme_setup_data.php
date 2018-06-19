<?php
/*---------------------------------------------------------------------------------*
 * @file           theme_stup_data.php
 * @package        ArcticNWA
 * @copyright      2018 Webby D
 * @license        license.txt
 * @filesource     wp-content/themes/ArcticNWA/theme_setup_data.php
 *	Admin  & front end defual data file
 *-----------------------------------------------------------------------------------*/

function theme_setup_data()
{
		$template_uri = ARCTIC_TEMPLATE_DIR_URI. '/images/';

		return $arctic_theme_options = array(

			'front_page'  => 'yes',

			'upload_image'=>'',
			'width'=>'7.5rem',
			'height'=>'auto',
			'enable_logo_text'=>false,

			'upload_image_favicon'=>'',
			'home_banner_strip_enabled'=>'on',
			'how_it_works_panel_enabled'=>'on',
			'accordion_panel_enabled'=>'on',
			'home_page_slider_enabled'=>'on',
			'home_service_section_enabled'=>'on',
			'home_project_section_enabled'=>'on',
			'home_testimonials_section_enabled'=>'on',
			'home_recentblog_section_enabled'=>'on',
			'contact_info_enabled' => 'on',
			'contact_google_map_enabled'=>'on',
			'contact_client_enabled' => 'on',

			'home_banner_strip_enabled' => 'on',
			'home_page_slider_enabled' => 'on',
			'how_it_works_panel_enabled'=>'on',
			'accordion_panel_enabled'=>'on',
			'what_it_is_panel_enabled' =>'on',
			'find_us_panel_enabled' =>'on',
			'frequently_asked_question_panel_enabled' =>'on',
			'contact_adress_map_enabled' =>'on',
			//'slider_head_title' =>__('arctic: the perfect WordPress theme for an app and web developer','arctic'),//Slide Heading
			'banner_background'=>  $template_uri .'banner.jpg',//Slide Image
			'title' =>__('ArcticNWA Cryotherapy.','arctic'),//Image Caption Heading
			'text' =>__('Train harder. Recover Faster. Improve Performance.','arctic'),//Caption detail
			'button_text' => __('Book An Appointment','arctic'),
			'link' => "#",
			'readmore_target'=> false,


			//Slide Heading
			'animation' => 'slide',
			'slide_direction' => 'horizontal',
			'animation_speed' => '1000',
			'slideshow_speed' => '2000',

			'client_strip'=>'yes',
			'client_strip_slide_speed'=>'2000',
			'client_strip_total' =>4,
			'client_title' => __('Meet our clients','arctic'),
			'client_desc' => __('We are a group of passionate designers and developers who really love creating awesome WordPress themes & giving support.','arctic'),

			'arctic_custom_css' =>"",

			'footer_copyright_text'=> 'All Rights Reserved | <a href="'.esc_url('/sitemap').'" target="_blank">Sitemap</a> | <a href="http://www.webby-d.com" target="_blank">Designed and Built by Webby D</a>',

			'footer_social_media_enabled'=>'on',
			'footer_twitter_link' =>"#",
			'footer_facebook_link' =>"#",
			'footer_linkedin_link' =>"#",
			'footer_snapchat_link' => '#',
			'footer_instagram_link' => '#',

			'header_button_enabled' => 'on',

			'enable_projects' => 'on',
			'portfolio_section_enabled' => 'on',
			'protfolio_tag_line'=> __('Recent Projects','arctic'),
			'protfolio_description_tag' => __("We are a group of passionate designers and developers who really love creating awesome WordPress themes & giving support.",'arctic'),

			'slider_readmore'=>'#',

			'enable_services' => 'on',
			'service_list' => 4,
			'read_more_btn_enabled' => 'on',
			'service_readmore_button'=>__('More Services','arctic'),
			'service_readmore_link'=>'#',

//How It Works Defaults
			'how_it_works_headline' =>__('How does Whole Body Cryotherapy work?', 'arctic'),
			'how_it_works_text_one' =>__('You can burn 500 to 800 calories per treatment due to the sharp increase in metabolism.', 'arctic'),
			'how_it_works_text_two' =>__('Whole Body Cryotherapy uses ultra-cooled nitrogen gas to lower skin temperature 30 degrees Fahrenheit for 1 to 3 minutes.', 'arctic'),
			'how_it_works_text_three' =>__('For best results it is recommended that client’s get Whole Body Cryotherapy 2 to 3 times per week.', 'arctic'),
			'how_it_works_image_one' =>__(get_template_directory_uri().'/images/flame.svg', 'arctic'),
			'how_it_works_image_two' =>__(get_template_directory_uri().'/images/temp.svg', 'arctic'),
			'how_it_works_image_three' =>__(get_template_directory_uri().'/images/time.svg', 'arctic'),

//What It Is Defaults
			'what_it_is_headline' =>__('What is ArcticNWA Whole Body Cryotherapy?', 'arctic'),
			'what_it_is_content_text' =>__('Whole Body Cryotherapy is one of the fastest-growing, holistic, wellness solutions that promotes natural healing at the cellular level. By exposing yourself to temperatures around -167°F with nitrogen vapor in the Arctic for up to three minutes, your body protects your internal organs by pushing blood to the core where it circulates, keeping your core temperature intact while your blood picks up vital nutrients. After exiting the Arctic, blood recirculates back into your outer extremities.'),
			'what_it_is_image_one' =>__(get_template_directory_uri(). '/images/cryo.png', 'arctic'),
			//accordion Defaults
			'accordion_headline' =>__('Experience the benefits of Whole Body Cryotherapy.', 'arctic'),
			'accordion_panel_one_header' =>__('Reduce Inflammation', 'arctic'),
			'accordion_panel_one_subheader' =>__('cold therapy works wonders for speeding up healing', 'arctic'),
			'accordion_panel_one_content' =>__('Whole Body Cryotherapy is very effective for athletic recovery and muscle repair, reduction of chronic pain and inflammation, and an overall enhancement of health and wellness.', 'arctic'),
			'bullet_one_panel_one_accordion' => '',
			'bullet_one_panel_two_accordion' => '',
			'bullet_one_panel_three_accordion' => '',
			'bullet_one_panel_four_accordion' => '',
			'accordion_panel_two_header' =>__('Relieve Pain', 'arctic'),
			'accordion_panel_two_subheader' =>__('cold therapy works wonders for speeding up healing', 'arctic'),
			'accordion_panel_two_content' =>__('Whole Body Cryotherapy is very effective for athletic recovery and muscle repair, reduction of chronic pain and inflammation, and an overall enhancement of health and wellness.', 'arctic'),
			'bullet_two_panel_one_accordion' => '',
			'bullet_two_panel_two_accordion' => '',
			'bullet_two_panel_three_accordion' => '',
			'bullet_two_panel_four_accordion' => '',
			'accordion_panel_three_header' =>__('Increase Energy', 'arctic'),
			'accordion_panel_three_subheader' =>__('cold therapy works wonders for speeding up healing', 'arctic'),
			'accordion_panel_three_content' =>__('Whole Body Cryotherapy is very effective for athletic recovery and muscle repair, reduction of chronic pain and inflammation, and an overall enhancement of health and wellness.', 'arctic'),
			'bullet_three_panel_one_accordion' => '',
			'bullet_three_panel_two_accordion' => '',
			'bullet_three_panel_three_accordion' => '',
			'bullet_three_panel_four_accordion' => '',



			//Map settings
			'monday_hours' => 'Closed',
			'tuesday_hours' => 'Closed',
			'wednesday_hours' => 'Closed',
			'thursday_hours' => 'Closed',
			'friday_hours' => 'Closed',
			'saturday_hours' => 'Closed',
			'sunday_hours' => 'Closed',
			'find_us_street_default' => '207 Atlanta Street SE',
			'find_us_city_default' => 'Gravette Arkansas 72736',
			'find_us_phone_default' => '555-555-5555',
			'find_us_business_default' => 'ArcticNWA Cryotherapy',

	//FAQ defaults
	'FAQ_headline' =>__('Frequently asked questions', 'arctic'),







			//Testimonials
			'testimonials_title' =>__('Don\'t just take our word for it.','arctic'), // Testimonials title
			'testimonials_text' =>__('We are a group of passionate designers & developers','arctic'), // Testimonials text

			'testimonials_image_one' => $template_uri.'/testimonial.jpg', // Testimonials image
			'testimonials_text_one' => __('We are a group of passionate designers and developers who really love creating awesome WordPress themes & giving support.','arctic'), // Testimonials description
			'testimonials_name_one' =>  'Natalie Portman', // Testimonials name
			'testimonials_designation_one' => __('(Sales & Marketing)','arctic'), // testmonials designation

			'testimonials_image_two' => $template_uri.'/testimonial2.jpg',  // Testimonials image
			'testimonials_text_two' => __('We are a group of passionate designers and developers who really love creating awesome WordPress themes & giving support.','arctic'), // Testimonials description
			'testimonials_name_two' => 'Natalie Portman', // Testimonials name
			'testimonials_designation_two' => __('(Sales & Marketing)','arctic'), // testmonials designation
			'testimonial_tagline' => __('We are a group of passionate designers & developers','arctic'),
			'testimonial_form_submit' => '',
			'home_testimonials_button_enabled' => 'on',

			'recent_blog_title' =>__('Recent Blog','arctic'),
			'recent_blog_description' =>__('We are a group of passionate designers & developers','arctic'),
			'home_recentblog_meta_enable' => 'on',

			//contact page settings
			'contact_address_1'=>'378 Kingston Court',
			'contact_address_2'=>'West New York, NJ 07093',
			'contact_number'=>'973-960-4715',
			'contact_fax_number'=>'0276-758645',
			'contact_email'=>'info@arctic.com',
			'contact_website'=>'https://www.arctic.com',
			'google_map_url' => 'https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kota+Industrial+Area,+Kota,+Rajasthan&amp;aq=2&amp;oq=kota+&amp;sll=25.003049,76.117499&amp;sspn=0.020225,0.042014&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Kota+Industrial+Area,+Kota,+Rajasthan&amp;z=13&amp;ll=25.142832,75.879538',

	);

}
