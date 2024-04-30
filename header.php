<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@900&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.typekit.net/sue2tqy.css">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>

<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<div class=logo-holder><a href="http://localhost/matins.skin">
		
		<img src=" <?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Matins Logo">
		</a>
		</div>
		<nav id="main-nav" class="navbar navbar-expand-sm" aria-labelledby="main-nav-label">

		<div class="social-media-holder">
				<div class="facebook"><a href="https://www.facebook.com/matins.skin"><i class="fa fa-facebook"></i></a></div>
				<div class="instagram"><a href="https://www.instagram.com/matins.skin"><i class="fa fa-instagram"></i></a></div>
			</div>

		

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

					<div class="container">
	

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'matins' ); ?>">
					<div class="tabversion">
						<div class="hamburger">
							<div class="hambar"></div>
							<div class="hambar"></div>
							<div class="hambar"></div></div>
						<div class="menu-title">Menu</div>	
						
					</div>
				</button>
				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			
			</div><!-- .container -->
			<div class="user-cart-holder">
		<div class="my-account"> <a href="my-account"> <i class="fa fa-user" > </i></a> </div>
		<a class="cart-contents" ><i class="fa fa-shopping-basket" style:"float:left"></i><div class="cart-count">(<?php echo WC()->cart->get_cart_contents_count() ?>)</div></a>
		</div>

		</nav><!-- .site-navigation -->
	</div><!-- #wrapper-navbar end -->


	<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 137 || document.documentElement.scrollTop > 137) {
    document.getElementById("main-nav").style.position = "fixed";
	  document.getElementById("main-nav").style.top = "0";
	  document.getElementById("main-nav").style.width = "100%";
	  document.getElementById("main-nav").style.zIndex = "2";
	
  } else {
    document.getElementById("main-nav").style.position = "relative";
  }
}


</script>
