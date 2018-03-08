<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _novster
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<button class="hamburger-menu hamburger hamburger--slider" type="button" aria-controls="primary-menu" aria-expanded="false">
	  <span class="hamburger-box">
	    <span class="hamburger-inner"></span>
	  </span>
	</button>

	<header id="masthead" class="site-header lazyload" role="banner" data-bgset="<?php echo get_template_directory_uri() . '/assets/img/menu-fusee.jpg'; ?> 400w" data-sizes="auto">

		<div class="header-menu-container">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>">
				<img src="<?php echo get_template_directory_uri() . '/assets/img/logo-novster.svg'; ?>" width="120" alt="<?php bloginfo( 'name' ); ?>" />
			</a>

			<div class="content_center">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<ul class="no-list">
						<li data-menuanchor="preparation">
							<a href='<?php echo esc_url( home_url( '/' ) ); ?>#preparation'><span class="text-rotate">Se préparer</span></a>
						</li>
						<li data-menuanchor="orientation">
							<a href='<?php echo esc_url( home_url( '/' ) ); ?>#orientation'><span class="text-rotate">S'orienter</span></a>
						</li>	
						<li data-menuanchor="experimentation">
							<a href='<?php echo esc_url( home_url( '/' ) ); ?>#experimentation'><span class="text-rotate">Expérimenter</span></a>
						</li>
						<li data-menuanchor="diffusion">
							<a href='<?php echo esc_url( home_url( '/' ) ); ?>#diffusion'><span class="text-rotate">Diffuser</span></a>
						</li>		
					</ul>

				</nav>
			</div>
				
		</div>	

		<div id="svgContainerMenu"></div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
