<?php
function arctic_general_settings( $wp_customize ){

/* Home Page Panel */
	$wp_customize->add_panel( 'general_settings', array(
		'priority'       => 125,
		'capability'     => 'edit_theme_options',
		'title'      => __('General settings', 'arctic'),
	) );

	/* Front Page section */
	$wp_customize->add_section( 'front_page_section' , array(
		'title'      => __('Front page', 'arctic'),
		'panel'  => 'general_settings',
		'priority'   => 0,
   	) );

		// Enable Front Page
		$wp_customize->add_setting(
			'arctic_theme_options[front_page]',
			array(
			'default' => 'yes',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option'
		));

		$wp_customize->add_control(
			'arctic_theme_options[front_page]',
			array(
				'label'    => __('Enable front page','arctic' ),
				'section'  => 'front_page_section',
				'type'     => 'radio',
				'choices' => array(
					'yes'=>'ON',
					'no'=>'OFF'
				)
		));

	/* custom logo section */
	$wp_customize->add_section( 'logo_section' , array(
		'title'      => __('Custom logo', 'arctic'),
		'panel'  => 'general_settings',
		'priority'   => 1,
   	) );

		// Logo
		$wp_customize->add_setting( 'arctic_theme_options[upload_image]',array('type' => 'option', 'sanitize_callback' => 'sanitize_text_field') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'arctic_theme_options[upload_image]', array(
			'label'    => __( 'Upload logo', 'arctic' ),
			'section'  => 'logo_section',
			'settings' => 'arctic_theme_options[upload_image]',
		) ) );

		// width
		$wp_customize->add_setting( 'arctic_theme_options[width]', array( 'default' => 138 , 'type' => 'option','sanitize_callback' => 'sanitize_text_field'	) );
		$wp_customize->add_control(	'arctic_theme_options[width]',
			array(
				'label'    => __('Enter Logo Width', 'arctic' ),
				'section'  => 'logo_section',
				'type'     => 'text',
		));

		// height
		$wp_customize->add_setting( 'arctic_theme_options[height]', array( 'default' => 49 , 'type' => 'option','sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[height]',
			array(
				'label'    => __('Enter Logo Height', 'arctic' ),
				'section'  => 'logo_section',
				'type'     => 'text',
		));

		// enable logo text
		$wp_customize->add_setting( 'arctic_theme_options[enable_logo_text]' , array(
		'default' => false,
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		) );
		$wp_customize->add_control('arctic_theme_options[enable_logo_text]' , array(
		'label'          => __( 'Enable logo text', 'arctic' ),
		'section'        => 'logo_section',
		'type'           => 'checkbox'
		) );


	/* custom css section */
	$wp_customize->add_section( 'custom_css_section' , array(
		'title'      => __('Custom CSS', 'arctic'),
		'panel'  => 'general_settings',
		'priority'   => 2,
   	) );

		// custom css
		$wp_customize->add_setting( 'arctic_theme_options[arctic_custom_css]', array( 'default' => '' , 'type' => 'option', 'sanitize_callback'    => 'wp_filter_nohtml_kses',
		'sanitize_js_callback' => 'wp_filter_nohtml_kses', ) );
		$wp_customize->add_control(	'arctic_theme_options[arctic_custom_css]',
			array(
				'label'    => __('Custom CSS', 'arctic' ),
				'section'  => 'custom_css_section',
				'type'     => 'textarea',
		));


	/* footer section */
	$wp_customize->add_section( 'footer_copy_section' , array(
		'title'      => __('Footer copyright settings', 'arctic'),
		'panel'  => 'general_settings',
		'priority'   => 3,
   	) );

		// copyright text
		$wp_customize->add_setting( 'arctic_theme_options[footer_copyright_text]', array( 'default' => 'All Rights Reserved | <a href="'.esc_url('/sitemap').'" target="_blank">Sitemap</a> | <a href="http://www.webby-d.com" target="_blank">Designed and Built by Webby D</a>' , 'type' => 'option', 'sanitize_callback' => 'arctic_copyright_sanitize_text' ) );
		$wp_customize->add_control(	'arctic_theme_options[footer_copyright_text]',
			array(
				'label'    => __( 'Copyright text','arctic' ),
				'section'  => 'footer_copy_section',
				'type'     => 'textarea',
		));


	/* social icon section */
	$wp_customize->add_section( 'social_icons_section' , array(
		'title'      => __('Social icons', 'arctic'),
		'panel'  => 'general_settings',
		'priority'   => 4,
   	) );

		// Enable footer social icons
		$wp_customize->add_setting( 'arctic_theme_options[footer_social_media_enabled]' , array( 'default' =>'' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[footer_social_media_enabled]' , array(
				'label'    => __( "Enable footer's social icons", "arctic" ),
				'section'  => 'social_icons_section',
				'type'     => 'radio',
				'choices' => array(
					'on'=>'ON',
					'off'=>'OFF'
				)
		));

		// twitter icon
		$wp_customize->add_setting( 'arctic_theme_options[footer_twitter_link]', array( 'default' => 'https://twitter.com/' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[footer_twitter_link]',
			array(
				'label'    => __( 'Twitter URL', 'arctic' ),
				'section'  => 'social_icons_section',
				'type'     => 'text',
		));

		// facebook icon
		$wp_customize->add_setting( 'arctic_theme_options[footer_facebook_link]', array( 'default' => 'https://facebook.com/' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[footer_facebook_link]',
			array(
				'label'    => __( 'Facebook URL', 'arctic' ),
				'section'  => 'social_icons_section',
				'type'     => 'text',
		));

		// linkedin icon
		$wp_customize->add_setting( 'arctic_theme_options[footer_linkedin_link]', array( 'default' => 'http://in.linkedin.com/' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[footer_linkedin_link]',
			array(
				'label'    => __( 'LinkedIn URL', 'arctic' ),
				'section'  => 'social_icons_section',
				'type'     => 'text',
		));

				// snapchat icon
		$wp_customize->add_setting( 'arctic_theme_options[footer_snapchat_link]', array( 'default' => 'http://snapchat.com/' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[footer_snapchat_link]',
			array(
				'label'    => __( 'Snapchat URL', 'arctic' ),
				'section'  => 'social_icons_section',
				'type'     => 'text',
		));

				// Instagram icon
		$wp_customize->add_setting( 'arctic_theme_options[footer_instagram_link]', array( 'default' => 'http://instagram.com/' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[footer_instagram_link]',
			array(
				'label'    => __( 'Instagram URL', 'arctic' ),
				'section'  => 'social_icons_section',
				'type'     => 'text',
		));

		/* header button settings */
	$wp_customize->add_section( 'header_button_section' , array(
		'title'      => __('Header Button', 'arctic'),
		'panel'  => 'general_settings',
		'priority'   => 5,
   	) );

	// Enable header appointment button
		$wp_customize->add_setting( 'arctic_theme_options[header_button_enabled]' , array( 'default' =>'on' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[header_button_enabled]' , array(
				'label'    => __( "Enable appointment button in header", "arctic" ),
				'section'  => 'header_button_section',
				'type'     => 'radio',
				'choices' => array(
					'on'=>'ON',
					'off'=>'OFF'
				)
		));

		function arctic_copyright_sanitize_text( $input ) {

		return wp_kses_post( force_balance_tags( $input ) );

		}

		function arctic_copyright_sanitize_html( $input ) {

		return force_balance_tags( $input );

		}

}
add_action( 'customize_register', 'arctic_general_settings' );

/**
 * Add selective refresh for Front page section section controls.
 */
function arctic_register_copyright_section_partials( $wp_customize ){

$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[footer_copyright_text]', array(
		'selector'            => 'footer .legal',
		'settings'            => 'arctic_theme_options[footer_copyright_text]',

	) );

	$wp_customize->selective_refresh->add_partial( 'arctic_theme_options[upload_image]', array(
		'selector'            => '.navbar-header a',
		'settings'            => 'arctic_theme_options[upload_image]',

	) );
}

add_action( 'customize_register', 'arctic_register_copyright_section_partials' );
