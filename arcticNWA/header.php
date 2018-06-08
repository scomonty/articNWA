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
    <?php  wp_head(); ?>
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
            <a href="<?php echo home_url(); ?>">
              <img class="logo" src="images/logo.png" alt="ArcticNWA Logo">
            </a>
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
            <!--/.navbar-collapse -->
            <div class="bookContainer">
            <div class="bookCTA">
                <a href="">book now</a>
            </div>
            </div>
        </div>

    </nav>
