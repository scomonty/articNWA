<?php
$slide_options = wp_parse_args(  get_theme_mod('arctic_slider_content', array()), theme_setup_data() );
$current_options = wp_parse_args(  get_option( 'arctic_theme_options', array() ), theme_setup_data() );
if( $current_options['home_page_banner_enabled'] == 'on'){
?>
<div id="bannerPanel" <?php if($current_options['banner_background']!='') {?>
							style="background: url( <?php echo esc_html($current_options['banner_background']); ?>;"
							<?php } ?> >
	<div class="container">
	<div class="row">
		<div class="banner">
<div class="col-md-8 col-md-offset-2 text-side">
	<div class="content-container">
		<?php if($current_options['caption_text']!='') {?>
							<p><?php echo esc_html($current_options['caption_text']); ?></p>
							<?php }
							else { ?> <p><?php echo ($slide_options['text']); ?></p> <?php }?>
		<?php if($current_options['caption_head']!='') {?>
							<h1><?php echo esc_html($current_options['caption_head']); ?></h1>
							<?php }
							else { ?> <h1><?php echo ($slide_options['title']); ?></h1> <?php }?>
	<div class="bookCTA">
		<?php if($current_options['readmore_text']!='') {?>
							<a class="button" href=<?php echo ($current_options['readmore_text_link'])?>><?php echo esc_html($current_options['readmore_text']); ?></a>
							<?php }
							else { ?> <a class="button" href=<?php echo ($current_options['readmore_text_link'])?>><?php echo ($slide_options['button_text']); ?></a> <?php }?>
	</div>
	</div>
</div>
		</div>
	</div>
</div>
</div>
<?php }
?>
