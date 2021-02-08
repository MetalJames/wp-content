<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Computer_Laptop_website
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="./css/header.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'computerlaptopwebsite' ); ?></a>

	<header id="masthead" style="background-color:#000" class="site-header myHeader">


	<!--Foundation here-->
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="cell small-6">
				
					<div class="site-branding">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/AGH_logo.svg" style="width: 120px; margin: 10px auto;" alt="agh logo">

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
						$computerlaptopwebsite_description = get_bloginfo( 'description', 'display' );
						if ( $computerlaptopwebsite_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $computerlaptopwebsite_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				
				</div>

				<div class="cell small-6">
				
					<nav id="site-navigation" class="main-navigation" style="color:#fff">
						<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'computerlaptopwebsite' ); ?></button> -->
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-primary',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->

				</div>
			</div>
		</div>





	</header><!-- #masthead -->
