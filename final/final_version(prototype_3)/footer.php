<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package version2
 */

?>
	<footer id="colophon" class="site-footer">

	<footer id="colophon" class="site-footer">
		<div class="footer-content">
			<!-- JCU Information -->
			<div class="jcu-info">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="James Cook University Logo" class="footer-logo">
				</a>
			</div>

				<!-- Contact Information -->
				<div class="contact-info">
					<p>149 Sims Drive, Block A<br>
					Singapore 387380<br>
					Tel: +65 6709 3888<br>
					Email: <a href="mailto:admissions-singapore@jcu.edu.au">admissions-singapore@jcu.edu.au</a></p>
				</div>
				<!-- Opening Hours -->
				<div class="opening-hours">
					<p>Opening hours<br>
					8.30am to 6pm, Monday to Friday<br>
					Closed on Sat/Sun/Public Holidays</p>
				</div>
			</div>
		
			<!-- Footer Navigation -->
			<nav class="footer-navigation">
				<ul id="primary-menu" class="menu">
        			<li class="menu-item common-nav-item"><a href="<?php echo home_url('/'); ?>">Home</a></li>
					<li class="menu-item common-nav-item"><a href="<?php echo home_url('#admission'); ?>">Our System</a></li>
        			<li class="menu-item common-nav-item"><a href="<?php echo home_url('#about'); ?>">About Us</a></li>
        			<li class="menu-item special-nav-item"><a href="<?php echo home_url('#enroll-now-form'); ?>">Join Now!</a></li>
				</ul>
			</nav>


		</div><!-- .footer-content -->

		<div class="site-info">
			<p>&copy; <?php echo date("Y"); ?> James Cook University. All rights reserved.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
