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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'clw' ); ?></a>

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
						<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'clw' ); ?></button> -->
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-primary',
								'menu_id'        => 'primary-menu',
							)
						);
						?>

						<div class="show-for-small-only">

							<label class="hamburger-icon" for="toggle"><span>&#9776;</span></label>
							<input type="checkbox" id="toggle"/>

							<ul class="mobileMenu">
								<li><a href="https://computerlaptopsalewebsite.local/shop/">Shop AGH</a></li>
								<li><a href="https://computerlaptopsalewebsite.local/about-us/">About Us</a></li>
								<li><a href="https://computerlaptopsalewebsite.local/contact-us/">Contact Us</a></li>
								<li><a href="https://computerlaptopsalewebsite.local/my-account/">My Account</a></li>
								<li><a href="https://computerlaptopsalewebsite.local/cart/">Cart</a></li>
							</ul>     

						</div>   


					</nav><!-- #site-navigation -->
					<!-- add social media api -->
				</div>
				<!-- empty div for proper alignment on desktop screens -->
				<div class="cell large-2 social_panel">
				
				<?php
					$facebook_url = get_theme_mod( 'facebook_url' );
					if ($facebook_url){ 
						?>
					<a class="facebook-link" href="<?php echo esc_url( get_theme_mod( 'facebook_url' ) );  ?>">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/facebook_logo.png" alt="facebook logo">
					</a>
						<?
					}

					$twitter_url = get_theme_mod( 'facebook_url' );
					if ($twitter_url){ 
						?>
					<a class="twitter-link" href="<?php echo esc_url( get_theme_mod( 'twitter_url' ) );  ?>">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/twitter_logo.png" alt="twitter logo logo">
					</a>
						<?
					}

					$instagram_url = get_theme_mod( 'facebook_url' );
					if ($instagram_url){ 
						?>
					<a class="instagram-link" href="<?php echo esc_url( get_theme_mod( 'instagram_url' ) );  ?>">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/instagram_logo.png" alt="instagram logo">
					</a>
						<?
					}
				?>
				
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
</div>