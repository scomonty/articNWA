<?php
$repeater_path = trailingslashit( get_template_directory() ) . '/functions/customizer-repeater/functions.php';
if ( file_exists( $repeater_path ) ) {
require_once( $repeater_path );
}
function arctic_sections_settings( $wp_customize ){
$selective_refresh = isset( $wp_customize->selective_refresh ) ? true : false;

/* Sections Settings */
	$wp_customize->add_panel( 'section_settings', array(
		'priority'       => 126,
		'capability'     => 'edit_theme_options',
		'title'      => __('Homepage section settings', 'arctic'),
	) );

	/* Banner Section */
	$wp_customize->add_section( 'banner_section' , array(
		'title'      => __('Banner Settings', 'arctic'),
		'panel'  => 'section_settings',
		'priority'   => 0,
   	) );

		// Enable banner
		$wp_customize->add_setting( 'arctic_theme_options[home_page_banner_enabled]' , array( 'default' => 'on' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[home_page_banner_enabled]' , array(
				'label'    => __('Enable Banner', 'arctic' ),
				'section'  => 'banner_section',
				'type'     => 'radio',
				'choices' => array(
					'on'=>'ON',
					'off'=>'OFF'
				)
		));
		$wp_customize->add_setting( 'arctic_theme_options[banner_background]',array('default' => get_template_directory_uri().'/images/banner.jpg',
		'type' => 'option','sanitize_callback' => 'esc_url_raw',));

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'arctic_theme_options[banner_background]',
				array(
					'label' => __('Banner Image','arctic'),
					'settings' =>'arctic_theme_options[banner_background]',
					'section' => 'banner_section',
					'type' => 'upload',
				)
			)
		);


		//Banner Title
		$wp_customize->add_setting(
		'arctic_theme_options[caption_head]', array(
			'default'        => __('ArcticNWA Cryotherapy.','arctic'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'arctic_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('arctic_theme_options[caption_head]', array(
			'label'   => __('Title', 'arctic'),
			'section' => 'banner_section',
			'type' => 'text',
		));

		//Banner sub title
		$wp_customize->add_setting(
		'arctic_theme_options[caption_text]',
			array(
			'default'        => __('Train harder. Recover Faster. Improve Performance.','arctic'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'arctic_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('arctic_theme_options[caption_text]', array(
			'label'   => __('Description', 'arctic'),
			'section' => 'banner_section',
			'type' => 'textarea',
		));

		//Baanner take action button
		$wp_customize->add_setting(
		'arctic_theme_options[readmore_text]',
			array(
			'default'        => __('Book An Appontment','arctic'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'arctic_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('arctic_theme_options[readmore_text]', array(
			'label'   => __('Button Text', 'arctic'),
			'section' => 'banner_section',
			'type' => 'text',
		));


	/* Banner strip section */
	$wp_customize->add_section( 'bannerstrip_section' , array(
		'title'      => __('Infobar settings', 'arctic'),
		'panel'  => 'section_settings',
		'priority'   => 1,
   	) );

		// Enable banner strip
		$wp_customize->add_setting( 'arctic_theme_options[home_banner_strip_enabled]' , array( 'default' => 'on' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[home_banner_strip_enabled]' , array(
				'label'    => __('Enable Infobar', 'arctic' ),
				'section'  => 'bannerstrip_section',
				'type'     => 'radio',
				'choices' => array(
					'on'=>'ON',
					'off'=>'OFF'
				)
		));

		// Banner strip text
		$wp_customize->add_setting( 'arctic_theme_options[slider_head_title]',
		array( 'default' => __('arctic: the perfect WordPress theme for an app and web developer','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[slider_head_title]',
			array(
				'label'    => __( 'Infobar text', 'arctic' ),
				'section'  => 'bannerstrip_section',
				'type'     => 'textarea',
		));

			/* How it Works section */
	$wp_customize->add_section( 'howItWorks_section' , array(
		'title'      => __('How It Works settings', 'arctic'),
		'panel'  => 'section_settings',
		'priority'   => 1,
   	) );

		// Enable how it works
		$wp_customize->add_setting( 'arctic_theme_options[how_it_works_panel_enabled]' , array( 'default' => 'on' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[how_it_works_panel_enabled]' , array(
				'label'    => __('Enable How It Works Panel', 'arctic' ),
				'section'  => 'howItWorks_section',
				'type'     => 'radio',
				'choices' => array(
					'on'=>'ON',
					'off'=>'OFF'
				)
		));

		// How It Works headline
		$wp_customize->add_setting( 'arctic_theme_options[how_it_works_head_title]',
		array( 'default' => __('How does Whole Body Cryotherapy work?','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[how_it_works_head_title]',
			array(
				'label'    => __( 'How It Works Headline', 'arctic' ),
				'section'  => 'howItWorks_section',
				'type'     => 'textarea',
		));


		//How It Works one image
		$wp_customize->add_setting( 'arctic_theme_options[how_it_works_project_thumb_one]',array('default' => get_template_directory_uri().'/images/flame.svg',
		'type' => 'option','sanitize_callback' => 'esc_url_raw',));

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'arctic_theme_options[how_it_works_project_thumb_one]',
				array(
					'label' => __('Image','arctic'),
					'section' => 'example_section_one',
					'settings' =>'arctic_theme_options[how_it_works_project_thumb_one]',
					'section' => 'howItWorks_section',
					'type' => 'upload',
				)
			)
		);

		//How It Works One Description
		$wp_customize->add_setting(
		'arctic_theme_options[how_it_works_project_text_one]', array(
			'default'        => __('You can burn 500 to 800 calories per treatment due to the sharp increase in metabolism.','arctic'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'arctic_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('arctic_theme_options[how_it_works_project_text_one]', array(
			'label'   => __('Description', 'arctic'),
			'section' => 'howItWorks_section',
			'type' => 'textarea',
		));

		//How It Works Two image
		$wp_customize->add_setting( 'arctic_theme_options[how_it_works_project_thumb_two]',array('default' => get_template_directory_uri().'/images/temp.svg',
		'type' => 'option','sanitize_callback' => 'esc_url_raw',));

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'arctic_theme_options[how_it_works_project_thumb_two]',
				array(
					'label' => __('Image','arctic'),
					'section' => 'example_section_one',
					'settings' =>'arctic_theme_options[how_it_works_project_thumb_two]',
					'section' => 'howItWorks_section',
					'type' => 'upload',
				)
			)
		);

		//How It Works Two Description
		$wp_customize->add_setting(
		'arctic_theme_options[how_it_works_project_text_two]', array(
			'default'        => __('Whole Body Cryotherapy uses ultra-cooled nitrogen gas to lower skin temperature 30 degrees Fahrenheit for 1 to 3 minutes.','arctic'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'arctic_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('arctic_theme_options[how_it_works_project_text_two]', array(
			'label'   => __('Description', 'arctic'),
			'section' => 'howItWorks_section',
			'type' => 'textarea',
		));

		//How It Works Three image
		$wp_customize->add_setting( 'arctic_theme_options[how_it_works_project_thumb_three]',array('default' => get_template_directory_uri().'/images/time.svg',
		'type' => 'option','sanitize_callback' => 'esc_url_raw',));

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'arctic_theme_options[how_it_works_project_thumb_three]',
				array(
					'label' => __('Image','arctic'),
					'settings' =>'arctic_theme_options[how_it_works_project_thumb_three]',
					'section' => 'howItWorks_section',
					'type' => 'upload',
				)
			)
		);
		//How It Works three Description
		$wp_customize->add_setting(
		'arctic_theme_options[how_it_works_project_text_three]', array(
			'default'        => __('For best results it is recommended that client’s get Whole Body Cryotherapy 2 to 3 times per week.','arctic'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'arctic_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('arctic_theme_options[how_it_works_project_text_three]', array(
			'label'   => __('Description', 'arctic'),
			'section' => 'howItWorks_section',
			'type' => 'textarea',
		));

/* Accordion section */
	$wp_customize->add_section( 'accordion_section' , array(
		'title'      => __('Accordion settings', 'arctic'),
		'panel'  => 'section_settings',
		'priority'   => 1,
   	) );

		// Enable accordion
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_enabled]' , array( 'default' => 'on' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[accordion_panel_enabled]' , array(
				'label'    => __('Enable Accordion Panel', 'arctic' ),
				'section'  => 'accordion_section',
				'type'     => 'radio',
				'choices' => array(
					'on'=>'ON',
					'off'=>'OFF'
				)
		));
		// Accordion headline
		$wp_customize->add_setting( 'arctic_theme_options[accordion_head_title]',
		array( 'default' => __('Experience the benefits of Whole Body Cryotherapy.','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[accordion_head_title]',
			array(
				'label'    => __( 'Accordion Headline', 'arctic' ),
				'section'  => 'accordion_section',
				'type'     => 'textarea',
		));

		/*** accordion first panel ***/
		//first panel headline
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_one_head]',
		array( 'default' => __('Reduce Inflammation','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_one_head]', array(
			'label'   => __('Panel One Headline', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'text',
		));
		//first panel subhead
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_one_subhead]',
		array( 'default' => __('cold therapy works wonders for speeding up healing','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_one_subhead]', array(
			'label'   => __('Panel One Subhead', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'text',
		));
		//first panel content body
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_one_body]',
		array( 'default' => __('Whole Body Cryotherapy is very effective for athletic recovery and muscle repair, reduction of chronic pain and inflammation, and an overall enhancement of health and wellness.','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_one_body]', array(
			'label'   => __('Panel One Body Content', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'textarea',
		));
		//first panel markdown list
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_one_bullet_one]',
		array( 'default' => __('lorem ipsum','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_one_bullet_one]', array(
			'label'   => __('Panel One Bullet', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'textarea',
		));
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_one_bullet_two]',
		array( 'default' => __('lorem ipsum','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_one_bullet_two]', array(
			'label'   => __('Panel One Bullet', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'textarea',
		));
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_one_bullet_three]',
		array( 'default' => __('lorem ipsum','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_one_bullet_three]', array(
			'label'   => __('Panel One Bullet', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'textarea',
		));
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_one_bullet_four]',
		array( 'default' => __('lorem ipsum','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_one_bullet_four]', array(
			'label'   => __('Panel One Bullet', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'textarea',
		));
		/*** accordion second panel ***/
		//second panel headline
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_two_head]',
		array( 'default' => __('Relieve Pain','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_two_head]', array(
			'label'   => __('Panel Two Headline', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'text',
		));
		//second panel subhead
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_two_subhead]',
		array( 'default' => __('cold therapy works wonders for speeding up healing','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_two_subhead]', array(
			'label'   => __('Panel Two Subhead', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'text',
		));
		//second panel content body
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_two_body]',
		array( 'default' => __('Whole Body Cryotherapy is very effective for athletic recovery and muscle repair, reduction of chronic pain and inflammation, and an overall enhancement of health and wellness.','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_two_body]', array(
			'label'   => __('Panel Two Body Content', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'textarea',
		));
		//second panel markdown list
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_two_bullet_one]',
		array( 'default' => __('lorem ipsum','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_two_bullet_one]', array(
			'label'   => __('Panel Two Bullet', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'textarea',
		));
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_two_bullet_two]',
		array( 'default' => __('lorem ipsum','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_two_bullet_two]', array(
			'label'   => __('Panel Two Bullet', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'textarea',
		));
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_two_bullet_three]',
		array( 'default' => __('lorem ipsum','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_two_bullet_three]', array(
			'label'   => __('Panel Two Bullet', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'textarea',
		));
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_two_bullet_four]',
		array( 'default' => __('lorem ipsum','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_two_bullet_four]', array(
			'label'   => __('Panel Two Bullet', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'textarea',
		));
		/*** accordion third panel ***/
		//third panel headline
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_three_head]',
		array( 'default' => __('Increase Energy','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_three_head]', array(
			'label'   => __('Panel Three Headline', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'text',
		));
		//third panel subhead
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_three_subhead]',
		array( 'default' => __('cold therapy works wonders for speeding up healing','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_three_subhead]', array(
			'label'   => __('Panel Three Subhead', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'text',
		));
		//third panel content body
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_three_body]',
		array( 'default' => __('Whole Body Cryotherapy is very effective for athletic recovery and muscle repair, reduction of chronic pain and inflammation, and an overall enhancement of health and wellness.','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_three_body]', array(
			'label'   => __('Panel Three Body Content', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'textarea',
		));
		//third panel markdown list
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_three_bullet_one]',
		array( 'default' => __('lorem ipsum','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_three_bullet_one]', array(
			'label'   => __('Panel Three Bullet', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'textarea',
		));
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_three_bullet_two]',
		array( 'default' => __('lorem ipsum','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_three_bullet_two]', array(
			'label'   => __('Panel Three Bullet', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'textarea',
		));
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_three_bullet_three]',
		array( 'default' => __('lorem ipsum','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_three_bullet_three]', array(
			'label'   => __('Panel Three Bullet', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'textarea',
		));
		$wp_customize->add_setting( 'arctic_theme_options[accordion_panel_three_bullet_four]',
		array( 'default' => __('lorem ipsum','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control('arctic_theme_options[accordion_panel_three_bullet_four]', array(
			'label'   => __('Panel Three Bullet', 'arctic'),
			'section' => 'accordion_section',
			'type' => 'textarea',
		));

		//Testimional Section
	$wp_customize->add_section( 'testimonials_settings' , array(
		'title'      => __('Testimonial settings', 'arctic'),
		'panel'  => 'section_settings',
		'priority'   => 5,
   	) );

		$wp_customize->add_setting( 'arctic_theme_options[home_testimonials_section_enabled]' , array( 'default' => 'on' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field'  ) );
		$wp_customize->add_control(	'arctic_theme_options[home_testimonials_section_enabled]' , array(
				'label'    => __( 'Enable Testimonials section', 'arctic' ),
				'section'  => 'testimonials_settings',
				'type'     => 'radio',
				'choices' => array(
					'on'=>__('ON', 'arctic'),
					'off'=>__('OFF', 'arctic')
				)
		));

		// testmonial section title
		$wp_customize->add_setting( 'arctic_theme_options[testimonials_title]',
		array( 'default' => __('Don\'t just take our word for it.', 'arctic' ) , 'type'=>'option', 'sanitize_callback' => 'arctic_input_field_sanitize_text'  ) );
		$wp_customize->add_control(	'arctic_theme_options[testimonials_title]',
			array(
				'label'    => __( 'Title', 'arctic' ),
				'section'  => 'testimonials_settings',
				'type'     => 'text',
		));

		if ( class_exists( 'arctic_Repeater' ) ) {
			$wp_customize->add_setting( 'arctic_testimonial_content', array(
			'sanitize_callback' => 'arctic_repeater_sanitize',
			) );

			$wp_customize->add_control( new arctic_Repeater( $wp_customize, 'arctic_testimonial_content', array(
				'label'                             => esc_html__( 'reviews content', 'arctic' ),
				'section'                           => 'testimonials_settings',
				'add_field_label'                   => esc_html__( 'Add new reviews', 'arctic' ),
				'item_name'                         => esc_html__( 'reviews', 'arctic' ),
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_designation_control' => true,
				) ) );
		}
		$wp_customize->add_setting( 'arctic_theme_options[home_testimonials_button_enabled]' , array( 'default' => 'on' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field'  ) );
		$wp_customize->add_control(	'arctic_theme_options[home_testimonials_button_enabled]' , array(
				'label'    => __( 'Show "Leave A Review" Button', 'arctic' ),
				'section'  => 'testimonials_settings',
				'type'     => 'radio',
				'choices' => array(
					'on'=>__('ON', 'arctic'),
					'off'=>__('OFF', 'arctic')
				)
		));
		// testmonial modal
		$wp_customize->add_setting( 'arctic_theme_options[testimonials_modal]',
		array( 'default' => __('Don\'t just take our word for it.', 'arctic' ) , 'type'=>'option', 'sanitize_callback' => 'arctic_input_field_sanitize_text'  ) );
		$wp_customize->add_control(	'arctic_theme_options[testimonials_modal]',
			array(
				'label'    => __( 'Testimonial submit form Ninja Forms shortcode', 'arctic' ),
				'section'  => 'testimonials_settings',
				'type'     => 'text',
		));


/* What It Is section */
	$wp_customize->add_section( 'whatItIs_section' , array(
		'title'      => __('What It Is settings', 'arctic'),
		'panel'  => 'section_settings',
		'priority'   => 7,
   	) );

// Enable what it is
		$wp_customize->add_setting( 'arctic_theme_options[what_it_is_panel_enabled]' , array( 'default' => 'on' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[what_it_is_panel_enabled]' , array(
				'label'    => __('Enable What It Is Panel', 'arctic' ),
				'section'  => 'whatItIs_section',
				'type'     => 'radio',
				'choices' => array(
					'on'=>'ON',
					'off'=>'OFF'
				)
		));
		// what it is headline
		$wp_customize->add_setting( 'arctic_theme_options[what_it_is_head_title]',
		array( 'default' => __('What is ArcticNWA Whole Body Cryotherapy?','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[what_it_is_head_title]',
			array(
				'label'    => __( 'What It Is Headline', 'arctic' ),
				'section'  => 'whatItIs_section',
				'type'     => 'textarea',
		));
				// what it is content
		$wp_customize->add_setting( 'arctic_theme_options[what_it_is_text]',
		array( 'default' => __('Whole Body Cryotherapy is one of the fastest-growing, holistic, wellness solutions that promotes natural healing at the cellular level. By exposing yourself to temperatures around -167°F with nitrogen vapor in the ArcticNWA for up to three minutes, your body protects your internal organs by pushing blood to the core where it circulates, keeping your core temperature intact while your blood picks up vital nutrients. After exiting the ArcticNWA, blood recirculates back into your outer extremities.','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[what_it_is_text]',
			array(
				'label'    => __( 'What It Is Text', 'arctic' ),
				'section'  => 'whatItIs_section',
				'type'     => 'textarea',
		));
		//What It Is image
		$wp_customize->add_setting( 'arctic_theme_options[what_it_is_image]',array('default' => get_template_directory_uri().'/images/cryo.png',
		'type' => 'option','sanitize_callback' => 'esc_url_raw',));

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'arctic_theme_options[what_it_is_image]',
				array(
					'label' => __('Image','arctic'),
					'section' => 'example_section_one',
					'settings' =>'arctic_theme_options[what_it_is_image]',
					'section' => 'whatItIs_section',
					'type' => 'upload',
				)
			)
		);


			/* Map section */
	$wp_customize->add_section( 'find_us_section' , array(
		'title'      => __('Find Us settings', 'arctic'),
		'panel'  => 'section_settings',
		'priority'   => 1,
   	) );

		// Enable how to find us panel
		$wp_customize->add_setting( 'arctic_theme_options[find_us_panel_enabled]' , array( 'default' => 'on' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[find_us_panel_enabled]' , array(
				'label'    => __('Enable How To Find Us Panel', 'arctic' ),
				'section'  => 'find_us_section',
				'type'     => 'radio',
				'choices' => array(
					'on'=>'ON',
					'off'=>'OFF'
				)
		));

		// How To Find Us headline
		$wp_customize->add_setting( 'arctic_theme_options[find_us_head_title]',
		array( 'default' => __('How to find us.','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[find_us_head_title]',
			array(
				'label'    => __( 'Find Us Headline', 'arctic' ),
				'section'  => 'find_us_section',
				'type'     => 'textarea',
		));
		// Buesiness Name
		$wp_customize->add_setting( 'arctic_theme_options[find_us_business]',
		array( 'default' => __('ArcticNWA Cryotherapy','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[find_us_business]',
			array(
				'label'    => __( 'Business Name', 'arctic' ),
				'section'  => 'find_us_section',
				'type'     => 'text',
		));
		// Street Address
		$wp_customize->add_setting( 'arctic_theme_options[find_us_street]',
		array( 'default' => __('207 Atlanta Street SE','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[find_us_street]',
			array(
				'label'    => __( 'Street Address', 'arctic' ),
				'section'  => 'find_us_section',
				'type'     => 'text',
		));
		// City State Zip Address
		$wp_customize->add_setting( 'arctic_theme_options[find_us_city]',
		array( 'default' => __('Gravette, Arkansas 72736','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[find_us_city]',
			array(
				'label'    => __( 'City State Zip Address', 'arctic' ),
				'section'  => 'find_us_section',
				'type'     => 'text',
		));
		// Phone Address
		$wp_customize->add_setting( 'arctic_theme_options[find_us_phone]',
		array( 'default' => __('479.787.7555','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[find_us_phone]',
			array(
				'label'    => __( 'Phone Number', 'arctic' ),
				'section'  => 'find_us_section',
				'type'     => 'text',
		));
		// Monday hours
		$wp_customize->add_setting( 'arctic_theme_options[mon_hours]',
		array( 'default' => __('12am - 12am','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[mon_hours]',
			array(
				'label'    => __( 'Monday Hours', 'arctic' ),
				'section'  => 'find_us_section',
				'type'     => 'text',
		));
		// Tuesday hours
		$wp_customize->add_setting( 'arctic_theme_options[tue_hours]',
		array( 'default' => __('12am - 12am','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[tue_hours]',
			array(
				'label'    => __( 'Tuesday Hours', 'arctic' ),
				'section'  => 'find_us_section',
				'type'     => 'text',
		));
				// Wednesday hours
		$wp_customize->add_setting( 'arctic_theme_options[wed_hours]',
		array( 'default' => __('12am - 12am','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[wed_hours]',
			array(
				'label'    => __( 'Wednesday Hours', 'arctic' ),
				'section'  => 'find_us_section',
				'type'     => 'text',
		));
				// Thursday hours
		$wp_customize->add_setting( 'arctic_theme_options[thu_hours]',
		array( 'default' => __('12am - 12am','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[thu_hours]',
			array(
				'label'    => __( 'Thursday Hours', 'arctic' ),
				'section'  => 'find_us_section',
				'type'     => 'text',
		));
				// Friday hours
		$wp_customize->add_setting( 'arctic_theme_options[fri_hours]',
		array( 'default' => __('12am - 12am','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[fri_hours]',
			array(
				'label'    => __( 'Friday Hours', 'arctic' ),
				'section'  => 'find_us_section',
				'type'     => 'text',
		));
				// Saturday hours
		$wp_customize->add_setting( 'arctic_theme_options[sat_hours]',
		array( 'default' => __('12am - 12am','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[sat_hours]',
			array(
				'label'    => __( 'Saturday Hours', 'arctic' ),
				'section'  => 'find_us_section',
				'type'     => 'text',
		));
				// Sunday hours
		$wp_customize->add_setting( 'arctic_theme_options[sun_hours]',
		array( 'default' => __('12am - 12am','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[sun_hours]',
			array(
				'label'    => __( 'Sunday Hours', 'arctic' ),
				'section'  => 'find_us_section',
				'type'     => 'text',
		));
		$wp_customize->add_setting( 'arctic_theme_options[map_api]',
		array( 'default' => __('','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[map_api]',
			array(
				'label'    => __( 'Google API map key', 'arctic' ),
				'section'  => 'find_us_section',
				'type'     => 'text',
		));


















		/* Client Slider Section */
	$wp_customize->add_section( 'clientbanner_section' , array(
		'title'      => __('Client Slider setting', 'arctic'),
		'panel'  => 'section_settings',
		'priority'   => 6,
   	) );

		function arctic_input_field_sanitize_text( $input )
		{
		return wp_kses_post( force_balance_tags( $input ) );
		}
		function arctic_input_field_sanitize_html( $input )
		{
		return force_balance_tags( $input );
		}

}
add_action( 'customize_register', 'arctic_sections_settings' );


/**
 * Add selective refresh for Front page section section controls.
 */
function arctic_register_home_section_partials( $wp_customize ){

	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[caption_head]', array(
		'selector'            => '.content-container h1',
		'settings'            => 'arctic_theme_options[caption_head]',
	) );

	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[caption_text]', array(
		'selector'            => '.content-container p',
		'settings'            => 'arctic_theme_options[caption_text]',

	) );

	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[readmore_text]', array(
		'selector'            => '.content-container .bookCTA .button',
		'settings'            => 'arctic_theme_options[readmore_text]',
	) );

	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[how_it_works_head_title]', array(
		'selector'            => '#howPanel h2',
		'settings'            => 'arctic_theme_options[how_it_works_head_title]',
	) );

	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[how_it_works_project_thumb_one]', array(
		'selector'            => '#howPanel .howFirstImg',
		'settings'            => 'arctic_theme_options[how_it_works_project_thumb_one]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[how_it_works_project_text_one]', array(
		'selector'            => '#howPanel .howFirstText',
		'settings'            => 'arctic_theme_options[how_it_works_project_text_one]',
	) );
	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[how_it_works_project_text_two]', array(
		'selector'            => '#howPanel .howSecondText',
		'settings'            => 'arctic_theme_options[how_it_works_project_text_two]',
	) );
	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[how_it_works_project_thumb_two]', array(
		'selector'            => '#howPanel .howSecondImg',
		'settings'            => 'arctic_theme_options[how_it_works_project_thumb_two]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[how_it_works_project_text_three]', array(
		'selector'            => '#howPanel .howThirdText',
		'settings'            => 'arctic_theme_options[how_it_works_project_text_three]',
	) );
	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[how_it_works_project_thumb_three]', array(
		'selector'            => '#howPanel .howThirdImg',
		'settings'            => 'arctic_theme_options[how_it_works_project_thumb_three]',
	) );

	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[accordion_head_title]', array(
		'selector'            => '.accordion--headline h2',
		'settings'            => 'arctic_theme_options[accordion_head_title]',
	) );

	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[accordion_panel_one_head]', array(
		'selector'            => '.accordion-item--top .header_one, .one_head, .one_label',
		'settings'            => 'arctic_theme_options[accordion_panel_one_head]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[accordion_panel_one_subhead]', array(
		'selector'            => '.one_sub',
		'settings'            => 'arctic_theme_options[accordion_panel_one_subhead]',
	) );
	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[accordion_panel_one_body]', array(
		'selector'            => '.body_one div',
		'settings'            => 'arctic_theme_options[accordion_panel_one_body]',
	) );
	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[accordion_panel_one_bullet_one]', array(
		'selector'            => '.body_one ul',
		'settings'            => 'arctic_theme_options[accordion_panel_one_bullet_one]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[accordion_panel_two_head]', array(
		'selector'            => '.accordion-item--top .header_two, .two_head, .two_label',
		'settings'            => 'arctic_theme_options[accordion_panel_two_head]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[accordion_panel_two_subhead]', array(
		'selector'            => '.two_sub',
		'settings'            => 'arctic_theme_options[accordion_panel_two_subhead]',
	) );
	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[accordion_panel_two_body]', array(
		'selector'            => '.body_two div',
		'settings'            => 'arctic_theme_options[accordion_panel_two_body]',
	) );
	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[accordion_panel_two_bullet_one]', array(
		'selector'            => '.body_two ul',
		'settings'            => 'arctic_theme_options[accordion_panel_two_bullet_one]',
	) );
	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[accordion_panel_three_head]', array(
		'selector'            => '.accordion-item--top .header_three, .three_head, .three_label',
		'settings'            => 'arctic_theme_options[accordion_panel_three_head]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[accordion_panel_three_subhead]', array(
		'selector'            => '.three_sub',
		'settings'            => 'arctic_theme_options[accordion_panel_three_subhead]',
	) );
	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[accordion_panel_three_body]', array(
		'selector'            => '.body_three div',
		'settings'            => 'arctic_theme_options[accordion_panel_three_body]',
	) );
	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[accordion_panel_three_bullet_one]', array(
		'selector'            => '.body_three ul',
		'settings'            => 'arctic_theme_options[accordion_panel_three_bullet_one]',
	) );
	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[testimonials_title]', array(
		'selector'            => '#reviewsPanel h2',
		'settings'            => 'arctic_theme_options[testimonials_title]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[what_it_is_head_title]', array(
		'selector'            => '#WhatItIs h2',
		'settings'            => 'arctic_theme_options[what_it_is_head_title]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[what_it_is_text]', array(
		'selector'            => '#WhatItIs p',
		'settings'            => 'arctic_theme_options[what_it_is_text]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[find_us_head_title]', array(
		'selector'            => '#mapPanel h2',
		'settings'            => 'arctic_theme_options[find_us_head_title]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[mon_hours]', array(
		'selector'            => '.monday',
		'settings'            => 'arctic_theme_options[mon_hours]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[tue_hours]', array(
		'selector'            => '#mapPanel .tuesday, #contact-page .tuesday',
		'settings'            => 'arctic_theme_options[tue_hours]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[wed_hours]', array(
		'selector'            => '#mapPanel .wednesday, #contact-page .wednesday',
		'settings'            => 'arctic_theme_options[wed_hours]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[thu_hours]', array(
		'selector'            => '#mapPanel .thursday, #contact-page .thursday',
		'settings'            => 'arctic_theme_options[thu_hours]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[fri_hours]', array(
		'selector'            => '#mapPanel .friday, #contact-page .friday',
		'settings'            => 'arctic_theme_options[fri_hours]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[sat_hours]', array(
		'selector'            => '#mapPanel .saturday, #contact-page .saturday',
		'settings'            => 'arctic_theme_options[sat_hours]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[sun_hours]', array(
		'selector'            => '#mapPanel .sunday, #contact-page .sunday',
		'settings'            => 'arctic_theme_options[sun_hours]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[find_us_business]', array(
		'selector'            => '#mapPanel .left h3, #contact-page .left h3',
		'settings'            => 'arctic_theme_options[find_us_business]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[find_us_street]', array(
		'selector'            => '#mapPanel .street, #contact-page .street',
		'settings'            => 'arctic_theme_options[find_us_street]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[find_us_city]', array(
		'selector'            => '#mapPanel .cityState, #contact-page .cityState',
		'settings'            => 'arctic_theme_options[find_us_city]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[find_us_phone]', array(
		'selector'            => '#mapPanel .phoneNumber, #contact-page .phoneNumber',
		'settings'            => 'arctic_theme_options[find_us_phone]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[upload_image]', array(
		'selector'            => '.logs',
		'settings'            => 'arctic_theme_options[upload_image]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[upload_image]', array(
		'selector'            => '.logs',
		'settings'            => 'arctic_theme_options[upload_image]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[header_button_enabled]', array(
		'selector'            => '.bookContainer .bookCTA',
		'settings'            => 'arctic_theme_options[header_button_enabled]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[footer_social_media_enabled]', array(
		'selector'            => '.footerSocial',
		'settings'            => 'arctic_theme_options[footer_social_media_enabled]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[FAQ_head_titled]', array(
		'selector'            => '#faq-panel h1',
		'settings'            => 'arctic_theme_options[FAQ_head_title]',
	) );
		$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[contact_head_titled]', array(
		'selector'            => '#contact-page h1',
		'settings'            => 'arctic_theme_options[contact_head_title]',
	) );










	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[recent_blog_description]', array(
		'selector'            => '.home-post-latest .section-title p',
		'settings'            => 'arctic_theme_options[recent_blog_description]',

	) );

	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[readmore_text]', array(
		'selector'            => '.slider .flex-btn',
		'settings'            => 'arctic_theme_options[readmore_text]',

	) );

}
add_action( 'customize_register', 'arctic_register_home_section_partials' );
