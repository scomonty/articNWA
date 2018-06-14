<?php
/**Includes reqired resources here**/
	define('ARCTIC_TEMPLATE_DIR_URI',get_template_directory_uri());
	define('ARCTIC_TEMPLATE_DIR',get_template_directory());
	define('ARCTIC_THEME_FUNCTIONS_PATH',ARCTIC_TEMPLATE_DIR.'/functions');

	require_once('theme_setup_data.php');

	// customizer files include
	require( ARCTIC_THEME_FUNCTIONS_PATH . '/customizer/custo_general_settings.php' );
	require( ARCTIC_THEME_FUNCTIONS_PATH . '/customizer/custo_sections_settings.php' );
	//require( ARCTIC_THEME_FUNCTIONS_PATH . '/customizer/custo_template_settings.php' );
	require( ARCTIC_THEME_FUNCTIONS_PATH . '/customizer/custo_faq_settings.php' );
	require( ARCTIC_THEME_FUNCTIONS_PATH . '/customizer/customizer.php' );

	require( ARCTIC_THEME_FUNCTIONS_PATH . '/css/styles.php');

	function arctic_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	// supports featured image
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header');
	// This theme uses wp_nav_menu() in two locations.
} // busiporf_setup

add_action( 'after_setup_theme', 'arctic_setup' );

add_action('wp_enqueue_scripts', 'theme_styles');
function theme_js() {
	global $wp_scripts;
	wp_register_script('html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false);
	wp_register_script('respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false);
	$wp_scripts->add_data('html5_shiv', 'conditonal', 'lt IE 9');
	$wp_scripts->add_data('respond-js', 'conditonal', 'lt IE 9');
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/scripts/bootstrap.min.js', array('jquery'), '', true);
	wp_enqueue_script('theme_js', get_template_directory_uri() . '/scripts/master.js', array('jquery', 'bootstrap_js'), '', true);
}
add_action('wp_enqueue_scripts', 'theme_js');
/*to remove admin bar when logged in */
//add_filter('show_admin_bar', '__return_false');
add_theme_support('menus');
function register_theme_menus() {
	register_nav_menus(
		array(
		'header-menu' => __('Header Menu')
		)
		);
}
add_action('init', 'register_theme_menus');
function create_widget($name, $id, $description) {
	register_sidebar(array(
	'name' => __($name),
	'id' => $id,
	'description'=> __($description),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	));
}
create_widget('Front Page Left', 'front-left', 'Display on the left of the screen');
create_widget('Front Page Center', 'front-center', 'Display on the center of the screen');
create_widget('Front Page Right', 'front-right', 'Display on the right of the screen');
create_widget('Page Sidebar', 'page', 'Displays the sidebar on the side of the page');
create_widget('Blog Sidebar', 'blog', 'Displays the blog on the side of the page');
function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');
add_action('login_head', 'my_loginlogo');
function my_loginURL() {
    return 'http://www.webby-d.com';
}
add_filter('login_headerurl', 'my_loginURL');
function my_loginURLtext() {
    return 'Webby D LLC';
}
add_filter('login_headertitle', 'my_loginURLtext');
function my_logincustomCSSfile() {
    wp_enqueue_style('login-styles', get_template_directory_uri() . '/login/login_styles.css');
}
add_action('login_enqueue_scripts', 'my_logincustomCSSfile');
add_filter( 'ninja_forms_field_template_file_paths', 'custom_field_file_path' );
function custom_field_file_path( $paths ){
	$paths[] =  get_stylesheet_directory() . '/ninja-forms/templates/';
	return $paths;
}
?>
