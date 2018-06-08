<?php
$slide_options = wp_parse_args(  get_theme_mod('arctic_slider_content', array()), theme_setup_data() );
$current_options = wp_parse_args(  get_option( 'arctic_theme_options', array() ), theme_setup_data() );
if( $current_options['what_it_is_section_enabled'] == 'on'){
    ?>
    <div id="WhatItIs">
    	<div class="container">
    		<div class="row">
    			<h2>What is Crytotherapy?</h2>
    		</div>
    	</div>
    </div>


    <?php }?>
