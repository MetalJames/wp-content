<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Computer_Laptop_website
 */

?>

<div class="myVersionFooter">

		<div class="footerLinks grid-x grid-margin-x">

			<nav id="footer-navigation" class="main-navigation cell large-12 medium-12 grid-x">
						<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">Primary Menu</button> -->
				<div class="menu-footer-menu-container">
					<ul id="footer-menu" class="menu">
						<li><a href="https://">Home</a></li>
						<li><a href="https://">Cart</a></li>
						<li><a href="https://computerlaptopsalewebsite.local/about-us/">About Us</a></li>
						<li><a href="https://">Get in Touch</a></li>
					</ul>
				</div>			
			</nav>

			<nav id="social-navigation" class="social-navigation cell large-12 medium-12 grid-x align-middle" style="display:flex; justify-content: center;">
					
					<ul class="social-media" style="display:flex; justify-content: center;">
						
							<li class="facebook">
								<a href="https://facebook.com" target="_blank">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/facebook_logo.png" alt="facebook logo">
								</a>
							</li>
						
							<li class="twitter">
								<a href="https://twitter.com" target="_blank">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/twitter_logo.png" alt="twitter logo logo">
								</a>
							</li>
						
							<li class="instagram">
								<a href="https://instagram.com" target="_blank">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/instagram_logo.png" alt="instagram logo">
								</a>
							</li>
						
					</ul>
					
			</nav><!-- #social-media-navigation -->

			<img class="mainLogo" src="<?php echo get_template_directory_uri();?>/assets/img/AGH_logo.svg" alt="agh logo">

		</div>

	<footer id="colophon" class="site-footer">

		

		<div class="site-info">

			<!-- <img src="./assets/img/agh_logo.svg" alt="AGH logo"><br> -->
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'computerlaptopwebsite' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'computerlaptopwebsite' ), 'WordPress' );
				?>
			</a>
			<span class="sep"></span><br>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'computerlaptopwebsite' ), 'computerlaptopwebsite', '<a href="http://underscores.me/">Volodya Ruzhak</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div>

<!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
