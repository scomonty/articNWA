<?php
function arctic_contact_settings( $wp_customize ){

	$wp_customize->add_panel( 'Contact_page_settings', array(
		'priority'       => 135,
		'capability'     => 'edit_theme_options',
		'title'      => __('Contact page settings', 'arctic'),
	) );


/* How it Works section */
	$wp_customize->add_section( 'contact_page' , array(
		'title'      => __('Contact page setting', 'arctic'),
		'panel'  => 'contact_settings',
		'priority'   => 1,
   	) );

		// Enable how it works
		$wp_customize->add_setting( 'arctic_theme_options[frequently_asked_question_panel_enabled]' , array( 'default' => 'on' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[frequently_asked_question_panel_enabled]' , array(
				'label'    => __('Enable FAQ Accordion', 'arctic' ),
				'section'  => 'FAQ_page',
				'type'     => 'radio',
				'choices' => array(
					'on'=>'ON',
					'off'=>'OFF'
				)
		));

		// How It Works headline
		$wp_customize->add_setting( 'arctic_theme_options[FAQ_head_title]',
		array( 'default' => __('Frequently asked questions','arctic') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_theme_options[FAQ_head_title]',
			array(
				'label'    => __( 'FAQ Page Headline', 'arctic' ),
				'section'  => 'FAQ_page',
				'type'     => 'text',
		));

}

	add_action( 'customize_register', 'arctic_contact_settings' );
