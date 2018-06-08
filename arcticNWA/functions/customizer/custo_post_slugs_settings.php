<?php
function arctic_post_slugs_settings( $wp_customize ){

	/* Post slug section */
	$wp_customize->add_section( 'custom_post_slug_section' , array(
		'title'      => __("SEO Friendly URL","arctic"),
		'priority'       => 128,
   	) );

		//Portfolio Pro
		class arctic_Customize_slug_upgrade extends WP_Customize_Control {
			public function render_content() { ?>
			<h3><?php _e('Want to add a custom post type slug? Then','arctic'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/arctic' ); ?>" target="_blank"><?php _e('Upgrade to Pro','arctic'); ?> </a>
			<?php
			}
		}


		$wp_customize->add_setting( 'slug_upgrade', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		));
		$wp_customize->add_control(
			new arctic_Customize_slug_upgrade(
			$wp_customize,
			'slug_upgrade',
				array(
					'section'				=> 'custom_post_slug_section',
					'settings'				=> 'slug_upgrade',
				)
			)
		);


		// Projects Slug
		$wp_customize->add_setting( 'arctic_pro_theme_options[arctic_project_slug]', array( 'default' => 'arctic-project' , 'type'=>'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_pro_theme_options[arctic_project_slug]',
			array(
				'label'    => __( 'Projects slug', 'arctic' ),
				'section'  => 'custom_post_slug_section',
				'type'     => 'text',
				'input_attrs' => array('disabled' => 'disabled'),
		));

		// Portfolio Slug
		$wp_customize->add_setting( 'arctic_pro_theme_options[arctic_portfolio_slug]', array( 'default' => 'project-category' , 'type'=>'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_pro_theme_options[arctic_portfolio_slug]',
			array(
				'label'    => __( "Project’s category slug ", "arctic" ),
				'section'  => 'custom_post_slug_section',
				'type'     => 'text',
				'input_attrs' => array('disabled' => 'disabled'),
		));


		// Team Slug
		$wp_customize->add_setting( 'arctic_pro_theme_options[arctic_team_slug]', array( 'default' => 'arctic-team' , 'type'=>'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'arctic_pro_theme_options[arctic_team_slug]',
			array(
				'label'    => __( 'Team slug', 'arctic' ),
				'section'  => 'custom_post_slug_section',
				'type'     => 'text',
				'input_attrs' => array('disabled' => 'disabled'),
		));

class WP_amenities_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
    <p><?php _e("After changing the slug, please don't forget to save the permalinks. Without saving them, the old permalinks will not be updated.", "arctic" ); ?></p>
    <?php
    }
}
		$wp_customize->add_setting( 'custom_label_slug' ,
			array(
				'capability'     => 'edit_theme_options',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field'
			)
		);
		$wp_customize->add_control( new WP_amenities_Customize_Control( $wp_customize, 'custom_label_slug', array(
				'section' => 'custom_post_slug_section',
			))
		);

}
add_action( 'customize_register', 'arctic_post_slugs_settings' );
