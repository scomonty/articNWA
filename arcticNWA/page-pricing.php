<?php /* Template Name: Pricing Template */ ?>

<?php
get_header();
include 'includes/secondaryBanner.php';
$current_options = wp_parse_args(  get_option( 'arctic_theme_options', array() ), theme_setup_data() );
    ?>
    <div id="pricing-page">
    	<div class="container">
    		<div class="row">
    		</div>
    	</div>
    </div>
    <?php get_footer(); ?>
