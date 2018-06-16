<?php
$slide_options = wp_parse_args(  get_theme_mod('arctic_slider_content', array()), theme_setup_data() );
$current_options = wp_parse_args(  get_option( 'arctic_theme_options', array() ), theme_setup_data() );
if( $current_options['find_us_panel_enabled'] == 'on'){
    ?>

<div id="mapPanel">
<div class="container">
	<div class="row">
		<?php if($current_options['find_us_head_title']!='') {?>
                            <h2><?php echo esc_html($current_options['find_us_head_title']); ?></h2>
                            <?php }
                            else { ?> <h2><?php echo ($slide_options['find_us_headline']); ?></h2> <?php }?>
    <div class="clear"></div>
    <div class="flex">
		<div class="col-md-6  flexW left">
			<?php if($current_options['find_us_business']!='') {?><h3><?php echo esc_html($current_options['find_us_business']); ?></h3><?php }else { ?> <h3><?php echo ($slide_options['find_us_business_default']); ?></h3> <?php }?>
			<?php if($current_options['find_us_street']!='')?><p class="street"><?php { echo esc_html($current_options['find_us_street']); ?></p><?php } ?>
			<?php if($current_options['find_us_city']!='')?><p class="cityState"><?php { echo esc_html($current_options['find_us_city']); ?></p><?php } ?>
			<?php if($current_options['find_us_phone']!='')?><p class="phoneNumber"><?php { echo esc_html($current_options['find_us_phone']); ?></p><?php } ?>
			<ul>
				<li class="monday">Monday: <?php if($current_options['mon_hours']!='') { echo esc_html($current_options['mon_hours']); } else {  echo ($slide_options['monday_hours']); } ?></li>
				<li class="tuesday">Tuesday: <?php if($current_options['tue_hours']!='') { echo esc_html($current_options['tue_hours']); } else {  echo ($slide_options['tuesday_hours']); } ?></li>
				<li class="wednesday">Wednesday: <?php if($current_options['wed_hours']!='') { echo esc_html($current_options['wed_hours']); } else { echo ($slide_options['wednesday_hours']); } ?></li>
				<li class="thursday">Thursday: <?php if($current_options['thu_hours']!='') { echo esc_html($current_options['thu_hours']); } else { echo ($slide_options['thursday_hours']); } ?></li>
				<li class="friday">Friday: <?php if($current_options['fri_hours']!='') { echo esc_html($current_options['fri_hours']); } else { echo ($slide_options['friday_hours']); } ?></li>
				<li class="saturday">Saturday: <?php if($current_options['sat_hours']!='') { echo esc_html($current_options['sat_hours']); } else { echo ($slide_options['saturday_hours']); } ?></li>
				<li class="sunday">Sunday: <?php if($current_options['sun_hours']!='') { echo esc_html($current_options['sun_hours']); } else { echo ($slide_options['sunday_hours']); } ?></li>
			</ul>
			<div class="bookCTA">
		<?php if($current_options['readmore_text']!='') {?>
							<a class="button" href=<?php echo ($current_options['readmore_text_link'])?>><?php echo esc_html($current_options['readmore_text']); ?></a>
							<?php }
							else { ?> <a class="button" href=<?php echo ($current_options['readmore_text_link'])?>><?php echo ($slide_options['button_text']); ?></a> <?php }?>
	</div>
		</div>
					<div class="col-md-6  flexW">
			<iframe
  width="100%"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAvsmXUS0xsKnlv7D1nzp92PPfVHsrWL9E
    &q=207+Atlanta+Street+SE+Gravette+Arkansas+72736" allowfullscreen>
</iframe>
		</div>
	</div>
	</div>
</div>
</div>
<?php }?>
