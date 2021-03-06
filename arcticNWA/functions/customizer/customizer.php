<?php if ( ! function_exists( 'arctic_service_default_customize_register' ) ) :

	function arctic_service_default_customize_register( $wp_customize ) {

				// arctic default slider data.
					$data = get_option('arctic_theme_options');
					$arctic_slider_content_control = $wp_customize->get_setting( 'arctic_slider_content' );
					if ( ! empty( $arctic_slider_content_control ) ) {
						$arctic_slider_content_control->default = json_encode( array(
							array(
							'title'      => isset($data['caption_head'])? $data['caption_head']:'',
							'text'       => isset($data['caption_text'])? $data['caption_text'] :'',
							'button_text'      => isset($data['readmore_text'])? $data['readmore_text'] : 'Read more',
							'link'       => isset($data['readmore_text_link'])? $data['readmore_text_link'] : '#',
							'image_url'  => isset($data['banner_background'])? $data['banner_background'] :  get_template_directory_uri().'/images/banner.jpg',
							'open_new_tab' => isset($data['readmore_target'])? $data['readmore_target'] : false,
							'id'         => 'customizer_repeater_56d7ea7f40b50',
							),
						) );

					}



		if(get_option('arctic_theme_options')!='')
		{
			$old_theme_servives = wp_parse_args(  get_option( 'arctic_theme_options', array() ), theme_setup_data() );

			if($old_theme_servives['service_image_one']!= '' || $old_theme_servives['service_icon_one']!= '' || $old_theme_servives['service_title_one']!= '' || $old_theme_servives['service_text_one']!= ''
			|| $old_theme_servives['service_image_two']!= '' || $old_theme_servives['service_icon_two']!= '' || $old_theme_servives['service_title_two']!= '' || $old_theme_servives['service_text_two']!= ''
			|| $old_theme_servives['service_image_three']!= '' || $old_theme_servives['service_icon_three']!= '' || $old_theme_servives['service_title_three']!= '' || $old_theme_servives['service_text_three']!= ''
			||$old_theme_servives['service_image_four']!= '' || $old_theme_servives['service_icon_four']!= '' || $old_theme_servives['service_title_four']!= '' || $old_theme_servives['service_text_four']!= '')
			{
				$arctic_service_content_control = $wp_customize->get_setting( 'arctic_service_content' );
				if ( ! empty( $arctic_service_content_control ) ) {
					$arctic_service_content_control->default = json_encode( array(
						array(
						'icon_value' => isset($old_theme_servives['service_icon_one'])? $old_theme_servives['service_icon_one']:'',
						'image_url'	 => isset($old_theme_servives['service_image_one'])? $old_theme_servives['service_image_one']:'',
						'title'      => isset($old_theme_servives['service_title_one'])? $old_theme_servives['service_title_one']:'',
						'text'       => isset($old_theme_servives['service_text_one'])? $old_theme_servives['service_text_one']:'',
						'link'       => '',
						'id'         => 'customizer_repeater_56d7ea7f40b56',
						'color'      => '#e91e63',
						),
						array(
						'icon_value' => isset($old_theme_servives['service_icon_two'])? $old_theme_servives['service_icon_two']:'',
						'image_url'	 => isset($old_theme_servives['service_image_two'])? $old_theme_servives['service_image_two']:'',
						'title'      => isset($old_theme_servives['service_title_two'])? $old_theme_servives['service_title_two']:'',
						'text'       => isset($old_theme_servives['service_text_two'])? $old_theme_servives['service_text_two']:'',
						'link'       => '',
						'id'         => 'customizer_repeater_56d7ea7f40b66',
						'color'      => '#00bcd4',
						),
						array(
						'icon_value' => isset($old_theme_servives['service_icon_three'])? $old_theme_servives['service_icon_three']:'',
						'image_url'	 => isset($old_theme_servives['service_image_three'])? $old_theme_servives['service_image_three']:'',
						'title'      => isset($old_theme_servives['service_title_three'])? $old_theme_servives['service_title_three']:'',
						'text'       => isset($old_theme_servives['service_text_three'])? $old_theme_servives['service_text_three']:'',
						'link'       => '',
						'id'         => 'customizer_repeater_56d7ea7f40b86',
						'color'      => '#4caf50',
						),

						array(
						'icon_value' => isset($old_theme_servives['service_icon_four'])? $old_theme_servives['service_icon_four']:'',
						'image_url'	 => isset($old_theme_servives['service_image_four'])? $old_theme_servives['service_image_four']:'',
						'title'      => isset($old_theme_servives['service_title_four'])? $old_theme_servives['service_title_four']:'',
						'text'       => isset($old_theme_servives['service_text_four'])? $old_theme_servives['service_text_four']:'',
						'link'       => '',
						'id'         => 'customizer_repeater_56d7ea7f40b96',
						'color'      => '#4caf50',
						),


						) );
			}
			}else {

			 $arctic_service_content_control = $wp_customize->get_setting( 'arctic_service_content' );
			if ( ! empty( $arctic_service_content_control ) ) {
				$arctic_service_content_control->default = json_encode( array(
					array(
					'icon_value' => 'fa-laptop',
					'title'      => esc_html__( 'Web Design', 'arctic' ),
					'text'       => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'arctic' ),
					'link'       => '#',
					'id'         => 'customizer_repeater_56d7ea7f40b56',
					'color'      => '#e91e63',
					),
					array(
					'icon_value' => 'fa-tasks',
					'title'      => esc_html__( 'Unique Elements', 'arctic' ),
					'text'       => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'arctic' ),
					'link'       => '#',
					'id'         => 'customizer_repeater_56d7ea7f40b66',
					'color'      => '#00bcd4',
					),
					array(
					'icon_value' => 'fa-thumbs-o-up',
					'title'      => esc_html__( 'User Friendly', 'arctic' ),
					'text'       => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'arctic' ),
					'link'       => '#',
					'id'         => 'customizer_repeater_56d7ea7f40b86',
					'color'      => '#4caf50',
					),

					array(
					'icon_value' => 'fa-life-ring',
					'title'      => esc_html__( '24/7 Support', 'arctic' ),
					'text'       => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'arctic' ),
					'link'       => '#',
					'id'         => 'customizer_repeater_56d7ea7f40b96',
					'color'      => '#5ca2df',
					),


				) );

			}

		}
		} else {

			 $arctic_service_content_control = $wp_customize->get_setting( 'arctic_service_content' );
			if ( ! empty( $arctic_service_content_control ) ) {
				$arctic_service_content_control->default = json_encode( array(
					array(
					'icon_value' => 'fa-laptop',
					'title'      => esc_html__( 'Web Design', 'arctic' ),
					'text'       => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'arctic' ),
					'link'       => '#',
					'id'         => 'customizer_repeater_56d7ea7f40b56',
					'color'      => '#e91e63',
					),
					array(
					'icon_value' => 'fa-tasks',
					'title'      => esc_html__( 'Unique Elements', 'arctic' ),
					'text'       => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'arctic' ),
					'link'       => '#',
					'id'         => 'customizer_repeater_56d7ea7f40b66',
					'color'      => '#00bcd4',
					),
					array(
					'icon_value' => 'fa-thumbs-o-up',
					'title'      => esc_html__( 'User Friendly', 'arctic' ),
					'text'       => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'arctic' ),
					'link'       => '#',
					'id'         => 'customizer_repeater_56d7ea7f40b86',
					'color'      => '#4caf50',
					),

					array(
					'icon_value' => 'fa-life-ring',
					'title'      => esc_html__( '24/7 Support', 'arctic' ),
					'text'       => esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'arctic' ),
					'link'       => '#',
					'id'         => 'customizer_repeater_56d7ea7f40b96',
					'color'      => '#4caf50',
					),
				) );
			}
		}

		// arctic default testimonial data.
		$testimonial_data = get_option('arctic_theme_options');
		$arctic_testimonial_content_control = $wp_customize->get_setting( 'arctic_testimonial_content' );
		if ( ! empty( $arctic_testimonial_content_control ) ) {
			$arctic_testimonial_content_control->default = json_encode( array(
				array(
				'title'      => isset($testimonial_data['testimonials_name_one'])? $testimonial_data['testimonials_name_one']:'Robert Johnson',
				'text'       => isset($testimonial_data['testimonials_text_one'])? $testimonial_data['testimonials_text_one']:'Widest laborum dolo rumes fugats untras. Ethar omnis iste natus error sit voluptatem accusantiexplicabo. Nemo enim ipsam eque porro quisquam est, qui dolorem ipsum am quaerat voluptatem...',
				'designation' => isset($testimonial_data['testimonials_designation_one'])? $testimonial_data['testimonials_designation_one']:'5',
				'link'       => '#',
				'image_url'  => isset($testimonial_data['testimonials_image_one'])? $testimonial_data['testimonials_image_one']:get_template_directory_uri()."/images/item12.jpg",
				'id'         => 'customizer_repeater_56d7ea7f40b96',
				'open_new_tab' => 'no',

				),
				array(
				'title'      => isset($testimonial_data['testimonials_name_two'])? $testimonial_data['testimonials_name_two']:'Annah Doe',
				'text'       => isset($testimonial_data['testimonials_text_two'])? $testimonial_data['testimonials_text_two']:'Widest laborum dolo rumes fugats untras. Ethar omnis iste natus error sit voluptatem accusantiexplicabo. Nemo enim ipsam eque porro quisquam est, qui dolorem ipsum am quaerat voluptatem...',
				'designation' => isset($testimonial_data['testimonials_designation_two'])? $testimonial_data['testimonials_designation_two']:'4.5',
				'link'       => '#',
				'image_url'  => isset($testimonial_data['testimonials_image_two'])? $testimonial_data['testimonials_image_two']:get_template_directory_uri()."/images/item12.jpg",
				'id'         => 'customizer_repeater_56d7ea7f40b97',
				'open_new_tab' => 'no',

				),
			) );

		}

	}


	add_action( 'customize_register', 'arctic_service_default_customize_register' );

endif;
