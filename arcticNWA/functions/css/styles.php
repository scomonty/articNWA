
<?php function theme_styles() {
		wp_enqueue_style('normal_css', get_template_directory_uri() . '/styles/normalize.css');
		wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/styles/bootstrap.css');
		wp_enqueue_style('awesome_css', get_template_directory_uri() . '/styles/fontawesome.css');
	wp_enqueue_style('style_css', get_template_directory_uri() . '/styles/style.css');
	wp_enqueue_style('style_font', 'http://fonts.googleapis.com/css?family=Allerta+Stencil|Open+Sans:400,600,700,800"');
}
?>
