<?php
$slide_options = wp_parse_args(  get_theme_mod('arctic_slider_content', array()), theme_setup_data() );
$current_options = wp_parse_args(  get_option( 'arctic_theme_options', array() ), theme_setup_data() );
if( $current_options['home_reviews_section_enabled'] == 'on'){
    ?>
<div id="reviewsPanel">
<div class="container">
	<div class="row">
		<?php if($current_options['reviews_title']!='') {?>
							<h2><?php echo esc_html($current_options['reviews_title']); ?></h2>
							<?php }
							else { ?> <h2><?php echo ($slide_options['testimonials_title']); ?></h2> <?php }?>
		<h2></h2>
		<div class="col-md-12">
			<div class="reviews">
				<div>
					<h3>It's pretty damn cold.</h3>
					<h4>Randy McRandoms</h4>
					<p>4</p>
				</div>
				<div>
					<h3>Not cold enough.</h3>
					<h4>Randy McRandoms</h4>
					<p>1</p>
				</div>
				<div>
				<h3>I left my pants there</h3>
					<h4>Randy McRandoms</h4>
					<p>5</p>
				</div>
			</div>
			<button class="secondary"><a href="">leave a review</a></button>
		</div>
	</div>
</div>
</div>
<?php } ?>
