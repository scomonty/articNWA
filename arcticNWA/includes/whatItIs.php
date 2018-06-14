<?php
$slide_options = wp_parse_args(  get_theme_mod('arctic_slider_content', array()), theme_setup_data() );
$current_options = wp_parse_args(  get_option( 'arctic_theme_options', array() ), theme_setup_data() );
if( $current_options['what_it_is_panel_enabled'] == 'on'){
    ?>
    <div id="WhatItIs">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
                    <?php if($current_options['what_it_is_head_title']!='') {?>
                            <h2><?php echo esc_html($current_options['what_it_is_head_title']); ?></h2>
                            <?php }
                            else { ?> <h2><?php echo ($slide_options['what_it_is_headline']); ?></h2> <?php }?>
                </div>
                <div class="clear"></div>
                <div class="flex">
                <div class="col-md-5 flexW">
                    <?php if($current_options['what_it_is_text']!='') {?>
                            <p><?php echo esc_html($current_options['what_it_is_text']); ?></p>
                            <?php }
                            else { ?> <p><?php echo ($slide_options['what_it_is_content_text']); ?></p> <?php }?>
                </div>
                <div class="col-md-7 flexW">
                    <?php if($current_options['what_it_is_image']!='') {?>
                            <img class="howFirstImg" src=<?php echo esc_html($current_options['what_it_is_image']); ?>>
                            <?php }
                            else { ?> <img class="howFirstImg" src=<?php echo ($slide_options['what_it_is_image_one']); ?> ><?php }?>
                </div>
                </div>
    		</div>
    	</div>
    </div>
    <?php }?>
