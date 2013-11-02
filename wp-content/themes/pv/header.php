<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
	</header><!-- #masthead -->	
	<div id="main" class="site-main">
		<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'nav-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		<?php }?>
		<?php if ( has_nav_menu( 'side-menu' ) ) { ?>
			<div id="navbar2" class="navbar2">
				<nav id="site-navigation2" class="navigation side-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'side-menu', 'menu_class' => 'nav-menu2' ) ); ?>
				</nav><!-- #site-navigation2 -->
			</div><!-- #navbar2 -->
		<?php }?>
