<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

				<footer class="site-footer" id="colophon">
					<table class="footer-tbl">
						<tr>
							<th>Customer Care</th>
							<th>The Brand</th>
							<th>Work with us</th>
						</tr>

						<tr>
							<td>Contact Us</td>
							<td>About Us</td>
							<td>Influencers</td>
						</tr>
						<tr>
							<td>Delivery</td>
							<td>Stores</td>
							<td>Distributors</td>
						</tr>
						<tr>
							<td>Returns & Exchanges</td>
							<td>Reviews</td>
							<td>Open a store</td>
						</tr>
							
							<tr><td>Consultation</td></tr>
							<tr><td>FAQs</td></tr>
					</table>

					<div class="newsletter">
						<?php echo do_shortcode('[ctct form=113]') ?>
					</div>
					<div class="follow-us"> Follow Us
						<div class="mediabox">
							<i class="fa-brands fa-tiktok"></i>
							<a href="https://www.facebook.com/matins.skin"><i class="fa fa-facebook"></i></a>
							<a href="https://www.instagram.com/matins.skin"><i class="fa fa-instagram"></i></a>
							<a href="https://www.facebook.com/matins.skin"><i class="fa fa-youtube"></i></a>
							<a href="https://www.instagram.com/matins.skin"><i class="bi bi-tiktok"></i></a>
						</div>
					</div>
				</footer><!-- #colophon -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

