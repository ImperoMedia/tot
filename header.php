<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package TOT
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7132154/690968/css/fonts.css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://macbook.local:8080/wordpress/tot/wp-content/themes/tot/css/animate.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="masthead" class="site-header" role="banner">

		<div class="nav-container">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<h1 id="countdown" class="animated fadeIn"></h1>
				</a>
				<!-- <h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">TOT<span style="font-weight:600;"><?php echo date("Y"); ?></span></a></h2> -->
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Menu', 'tot' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->

		</div>

		<div class="clear"></div>

</header><!-- #masthead -->

<div class="main-content-area full">