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
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'computerlaptopwebsite' ); ?></a>

	<header id="masthead" class="site-header">
	<!--Foundation here-->
		<div>
		<!-- add margin -->
			<div class="grid-x grid-padding-x">
			<!-- set properties for different sizes (desktop, tablet or smartphone) -->
				<div class="cell large-2 medium-2 small-6">
				
					<div class="site-branding">
						<a href="https://computerlaptopsalewebsite.local/?cache-buster=64"><img  class="headerLogo" src="<?php echo get_template_directory_uri();?>/assets/img/AGH_logo.svg" alt="agh logo"></a>
					</div>
					<!-- .site-branding -->
				
				</div>
			<!-- set properties for different sizes (desktop, tablet or smartphone) -->
				<div class="cell large-8 medium-10 small-6 myAlignClass">
				
					<nav id="site-navigation" class="main-navigation">
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
					<!-- add social media api -->
					<!-- <?php
					$facebook_url = get_theme_mod( 'facebook_url' );
					if ($facebook_url){ 
						?>
					<a class="facebook-link" href="<?php echo esc_url( get_theme_mod( 'facebook_url' ) );  ?>">Facebook</a>
						<?
					}
					?> -->
				</div>
				<!-- empty div for proper alignment on desktop screens -->
				<div class="cell large-2"></div>
			</div>
		</div>
	</header><!-- #masthead -->
</div>