<?php
$testimonial_options = get_theme_mod('arctic_testimonial_content');
if(empty($testimonial_options)){
	$old_testimonial_data = get_option( 'busiprof_theme_options');

	$testimonial_options = json_encode( array(
				array(
				'title'      => isset($old_testimonial_data['testimonials_name_one'])? $old_testimonial_data['testimonials_name_one']:'Rob Johnson',
				'text'       => isset($old_testimonial_data['testimonials_text_one'])? $old_testimonial_data['testimonials_text_one']:'Widest laborum dolo rumes fugats untras. Ethar omnis iste natus error sit voluptatem accusantiexplicabo. Nemo enim ipsam eque porro quisquam est, qui dolorem ipsum am quaerat voluptatem...',
				'id'         => 'customizer_repeater_56d7ea7f40b96',
				'open_new_tab' => 'no',
				),
				array(
				'title'      => isset($old_testimonial_data['testimonials_name_two'])? $old_testimonial_data['testimonials_name_two']:'Randy McRandoms',
				'text'       => isset($old_testimonial_data['testimonials_text_two'])? $old_testimonial_data['testimonials_text_two']:'Widest laborum dolo rumes fugats untras. Ethar omnis iste natus error sit voluptatem accusantiexplicabo. Nemo enim ipsam eque porro quisquam est, qui dolorem ipsum am quaerat voluptatem...',
				'id'         => 'customizer_repeater_56d7ea7f40b97',
				'open_new_tab' => 'no',
				),
			) );
}
 $current_options = wp_parse_args(  get_option( 'arctic_theme_options', array() ), theme_setup_data() );
if( $current_options['home_testimonials_section_enabled'] == 'on'){
?>

<div id="reviewsPanel">
	<div class="container">
			<!-- Section Title -->
			<div class="row">
					<div class="section-title">
						<?php if( $current_options['testimonials_title'] != '' ) { ?>
						<h2><?php echo $current_options['testimonials_title'];?></h2>
						<?php } ?>
					</div>
			<!-- /Section Title -->
			<div class="col-md-6 col-md-offset-3">
				<div class="reviews">
					<?php
					$t=true;
					$testimonial_options = json_decode($testimonial_options);
					if( $testimonial_options!='' )
						{
					foreach($testimonial_options as $testimonial_iteam){
							$test_desc =  $testimonial_iteam->text;
							$test_link = $testimonial_iteam->link;
							$open_new_tab = $testimonial_iteam->open_new_tab;
							$designation = $testimonial_iteam->designation;
					?>
						<div class="post">
								<p><?php echo $test_desc; ?></p>
								<p class="author-name"><?php echo $testimonial_iteam->title; ?></p>
						</div>
					<?php } } ?>

			</div>
		</div>
	</div>
	<div class="reviewCTA">
		<a href="">leave a review</a>
		</div>
	</div>
</div>
<?php } ?>
