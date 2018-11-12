<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package supermercado_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/required/bootstrap/css/bootstrap.min.css">
	<link
		rel="stylesheet"
		href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
		integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
		crossorigin="anonymous"
	>
	<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'supermercado_theme' ); ?></a>

	<header id="masthead" class="site-header container-fluid">
		<section class="container padding0">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$supermercado_theme_description = get_bloginfo( 'description', 'display' );
			if ( $supermercado_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $supermercado_theme_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<div id="search_nomobile">
			<?php
			echo get_product_search_form();
			?>
		</div>

		<div>
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<i class="fas fa-bars"></i>
				</button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
			
			<?php
			echo get_product_search_form();
			?>
		</div>
		</section>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<?php 
		if (!is_front_page()) {
		?>
			<section class="container" id="custom_wrapper">
		<?php
		}
		if (class_exists('WooCommerce') && is_woocommerce()) {
			woocommerce_breadcrumb();
	  	} 
	  	?>