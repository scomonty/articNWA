<?php
$arctic_theme_options=theme_setup_data();
  $is_front_page = wp_parse_args(  get_option( 'acrtic_theme_options', array() ), $arctic_theme_options );
get_header();
            include 'includes/banner.php';
            include 'includes/whatItIs.php';
            include 'includes/accordion.php';
            include 'includes/how.php';
          if (have_posts()) : while (have_posts()) : the_post();
          the_content();
          endwhile; endif;
          include 'includes/reviewsPanel.php';
          include 'includes/mapPanel.php';?>
         <div id="back-top"><a href="#"></a></div>
<?php get_footer(); ?>
