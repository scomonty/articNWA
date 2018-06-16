<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="<?php bloginfo('template_directory');?>/images/favicon.png">
    <title>
        <?php wp_title('|', true, 'right'); ?>
        <?php bloginfo('name'); ?>
    </title>
    <?php  wp_head();
$current_options = wp_parse_args(  get_option( 'arctic_theme_options', array() ), theme_setup_data() );
?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112228636-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112228636-1');
</script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
<?php include 'includes/accordion-style.php'; ?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="screen" />
</head>

<body <?php body_class(); ?>>
    <nav class="navbar navbar-fixed-top" id="page-nav">
        <div class="container header-container">
            <div class="row">
                <div class="col-md-2 logs">
            <a href="<?php echo home_url(); ?>">
              <?php
                if( $current_options['enable_logo_text'] == true ){
                    bloginfo('name');
                }else{
                ?>
                <img alt="<?php bloginfo("name"); ?>" src="<?php echo ( esc_url($current_options['upload_image']) ? $current_options['upload_image'] : get_template_directory_uri() . '/images/logo.png' ); ?>"
                alt="<?php bloginfo("name"); ?>"
                class="logo" style="width:<?php echo esc_html($current_options['width']).'px'; ?>; height:<?php echo esc_html($current_options['height']).'px'; ?>;">
                <?php } ?>
            </a>
            </div>
            <div class="col-md-7">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <?php
            $args = array(
              'menu' => 'header-menu',
              'menu_class' => 'nav navbar-nav',
              'container' => 'false');
            wp_nav_menu($args); ?>
            </div>
            </div>
            <!--/.navbar-collapse -->
            <div class="col-md-3">
<?php if( $current_options['header_button_enabled'] == 'on') { ?>
            <div class="bookContainer">
            <div class="bookCTA">
                <a href="">book an appointment</a>
            </div>
            </div>
        <?php } ?>
            </div>
            </div>
        </div>

    </nav>
