<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TestWordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<title> BMC Accounting </title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'themewordpress' ); ?></a>
	<header id="masthead" class="site-header">
		<!-- <div class="site-branding"> -->

		<div id="logo-wrap">
			<?php
			the_custom_logo();
			/*	if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$themewordpress_description = get_bloginfo( 'description', 'display' );
			if ( $themewordpress_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $themewordpress_description; /* WPCS: xss ok.  ?></p> 
			<?php endif; ?> 
			</div>   <!-- .site-branding --> */
			?>
		</div>
		<div id="nav-wrap">
		
			<nav id="site-navigation" class="main-navigation">
				<div class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'themewordpress' ); ?>
						<span>  </span>
						<span>  </span>
						<span>  </span>
				</div>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		
		</div>
		<div id="mobile-nav-wrap">
			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'mobile-primary-menu',
					'menu_class'     => 'hidden', 
				) );
				?>
			</nav><!-- #site-navigation -->
		
		</div>
	</header><!-- #masthead -->
	<div class="page-sidebar">
		<div class="container">
			<span>
				Tel. No: 040 234 567
				</span>
			<?php
				get_sidebar(); 
			?>
		</div>
	</div>
	<div id="content" class="site-content">
