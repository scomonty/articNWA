<?php
$slide_options = wp_parse_args(  get_theme_mod('arctic_slider_content', array()), theme_setup_data() );
$current_options = wp_parse_args(  get_option( 'arctic_theme_options', array() ), theme_setup_data() );
if( $current_options['how_it_works_panel_enabled'] == 'on'){
	?>
<div id="howPanel">
	<div class="container">
	<div class="row">
		<?php if($current_options['how_it_works_head_title']!='') {?>
							<h2><?php echo esc_html($current_options['how_it_works_head_title']); ?></h2>
							<?php }
							else { ?> <h2><?php echo ($slide_options['how_it_works_headline']); ?></h2> <?php }?>
				<div class="col-md-4">
					<?php if($current_options['how_it_works_project_thumb_one']!='') {?>
							<img class="howFirstImg" src=<?php echo esc_html($current_options['how_it_works_project_thumb_one']); ?>>
							<?php }
							else { ?> <img class="howFirstImg" src=<?php echo ($slide_options['how_it_works_image_one']); ?> ><?php }?>
			<?php if($current_options['how_it_works_project_text_one']!='') {?>
							<p class="howFirstText"><?php echo esc_html($current_options['how_it_works_project_text_one']); ?></p>
							<?php }
							else { ?> <p class="howFirstText"><?php echo ($slide_options['how_it_works_text_one']); ?></p> <?php }?>
		</div>
		<div class="col-md-4">
								<?php if($current_options['how_it_works_project_thumb_two']!='') {?>
							<img class="howSecondImg" src=<?php echo esc_html($current_options['how_it_works_project_thumb_two']); ?>>
							<?php }
							else { ?> <img class="howSecondImg" src=<?php echo ($slide_options['how_it_works_image_two']); ?> ><?php }?>
			<?php if($current_options['how_it_works_project_text_two']!='') {?>
							<p class="howSecondText"><?php echo esc_html($current_options['how_it_works_project_text_two']); ?></p>
							<?php }
							else { ?> <p class="howSecondText"><?php echo ($slide_options['how_it_works_text_two']); ?></p> <?php }?>
		</div>
		<div class="col-md-4">
								<?php if($current_options['how_it_works_project_thumb_three']!='') {?>
							<img class="howThirdImg" src=<?php echo esc_html($current_options['how_it_works_project_thumb_three']); ?>>
							<?php }
							else { ?> <img class="howThirdImg" src=<?php echo ($slide_options['how_it_works_image_three']); ?> ><?php }?>
						<?php if($current_options['how_it_works_project_text_three']!='') {?>
							<p class="howThirdText" ><?php echo esc_html($current_options['how_it_works_project_text_three']); ?></p>
							<?php }
							else { ?> <p class="howThirdText" ><?php echo ($slide_options['how_it_works_text_three']); ?></p> <?php }?>
		</div>
	</div>
</div>
</div>
<?php }?>
