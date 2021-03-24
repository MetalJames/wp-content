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

<!-- custom WP_Query for the footer custom peripheral posts -->
<?php 

$peripheral_args = array(
    'post_type' => 'clw_peripheral',
    'posts_per_page' => 3,
    );
	
    $peripheral_query = new WP_Query( $peripheral_args );

    if ( $peripheral_query->have_posts() ) {
        while ( $peripheral_query->have_posts() ){
            $peripheral_query->the_post();
            ?>
			<div class="footer_peripherals_body">
				<div class="footer_peripherals_styling">

					<p class="footer_thumbnail">
						<?php 
						if ( has_post_thumbnail() ) {
							the_post_thumbnail(); 
						}
							?>
						</p>

					<div class="text_info">

						<h4><?php echo get_the_title() ? esc_html( get_the_title() ) : 'This Title'; ?></h4>

						<p><?php the_excerpt(); ?></p>
						<p class="underline_link_hover">Reed more &rarr;<a href="<?php the_permalink() ?>" class="postLinkBtn"> Here</a></p>
					</div>
				</div>
			</div>
			<?php 
        }
    }
	wp_reset_postdata();
?>

<!-- footer start here and include links to the pages, logo, copyright -->

<div class="myVersionFooter">

		<div class="footerLinks grid-x grid-margin-x">

		<!-- menu links -->
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

		<!-- #social-media-navigation -->
			<nav id="social-navigation" class="social-navigation cell large-12 medium-12 grid-x">
					
					<ul class="social-media">
						
							<li class="facebook">
								<a href="https://facebook.com" target="_blank">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/facebook_logo.png" alt="facebook logo" target="_blank">
								</a>
							</li>
						
							<li class="twitter">
								<a href="https://twitter.com" target="_blank">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/twitter_logo.png" alt="twitter logo logo" target="_blank">
								</a>
							</li>
						
							<li class="instagram">
								<a href="https://instagram.com" target="_blank">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/instagram_logo.png" alt="instagram logo" target="_blank">
								</a>
							</li>
						
					</ul>
					
			</nav>
			<!-- #social-media-navigation -->

			<a class="mainLogo" href="https://computerlaptopsalewebsite.local/?cache-buster=64"><img src="<?php echo get_template_directory_uri();?>/assets/img/AGH_logo.svg" alt="agh logo"></a>

		</div>

	<footer id="colophon" class="site-footer">

		
	<!-- copyright and related information -->
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'clw' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'clw' ), 'WordPress' );
				?>
			</a>
			<span class="sep"></span><br>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'clw' ), 'clw', '<a href="http://underscores.me/">Volodymyr Ruzhak</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div>

<!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
