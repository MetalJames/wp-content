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
				<div class="menu-footer-menu-container">
					<ul id="footer-menu" class="menu">
						<li><a href="https://computerlaptopsalewebsite.local/shop/">Shop AGH</a></li>
						<li><a href="https://computerlaptopsalewebsite.local/cart/">Cart</a></li>
						<li><a href="https://computerlaptopsalewebsite.local/about-us/">About Us</a></li>
						<li><a href="https://computerlaptopsalewebsite.local/contact-us/">Get in Touch</a></li>
					</ul>
				</div>			
			</nav>

			<nav id="social-navigation" class="social-navigation cell large-12 medium-12 grid-x">
					
					<ul class="social-media">
						
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

			<a class="mainLogo" href="https://computerlaptopsalewebsite.local/?cache-buster=64"><img src="<?php echo get_template_directory_uri();?>/assets/img/AGH_logo.svg" alt="agh logo"></a>

		</div>

	<footer id="colophon" class="site-footer">

		

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'computerlaptopwebsite' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'computerlaptopwebsite' ), 'WordPress' );
				?>
			</a>
			<span class="sep"></span><br>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'computerlaptopwebsite' ), 'computerlaptopwebsite', '<a href="http://underscores.me/">Volodymyr Ruzhak</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div>

<!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
