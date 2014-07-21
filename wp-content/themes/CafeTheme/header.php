<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/vendor.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/app.js"></script>
</head>
<body <?php cafe_page_id(); body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<nav id="main_menu" role="navigation">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
</header>
<div id="container">