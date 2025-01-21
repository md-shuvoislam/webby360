<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webby360
 */

?>

	<footer id="colophon" class="site-footer">
	
		<div class="container">

			<!-- footer top -->

			<div class="row footer-top">
				<div class="col-8">
					<h2>Schedule A Meeting to Grow Your Business</h2>
				</div>
				<div class="col-4">
					<a href="#">Book Now</a>
				</div>
			</div>

			<div class="row footer-middle">
				<div class="col">
					<div class="menu-footer-top">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-footer-top',
									'menu_id'        => 'footer-menu-top',
								)
							);
						?>
					</div>
				</div>
				<div class="col">
					<div class="footer-social">
						<ul>
							<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="row footer-bottom">
				<div class="col">
					<p>© 2025 Webby360. All rights reserved.</p>
				</div>
				<div class="col">
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
						$webby360_description = get_bloginfo( 'description', 'display' );
						if ( $webby360_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $webby360_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="col">
					<?php
						wp_nav_menu(
							array(
							'theme_location' => 'menu-footer-bottom',
							'menu_id'        => 'footer-menu-bottom',
							)
						);
					?>
				</div>
			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
