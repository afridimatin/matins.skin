<?php
/**
 * Template Name: Template Home	
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="hero">

	<div class="home-banner"></div>
	
	<div class="routinePrmt">
		<div class="prmtText">
			<h3>not sure where to start?</h3>
			<h5>Identify your skin concerns and build your own skincare routine</h5>
			<pre></pre>
			<div class="button-green" >Build</div>
<pre></pre>
			<h6>Usually takes less than a minute</h6>
		</div>
	</div>

</div>


<div class="g-o-s">
	<div class="neon01">KITS ON SALE!</div>
</div>

<div class="<?php echo is_active_sidebar( 'hero' ); ?> content-area" id="primary">
</div>

<?php get_template_part( 'sidebar-templates/sidebar', 'hero' ); ?>

<div class="g-o-s2">Our skin needs food, exactly like our body.</div>
<div class="hero2">
<div class="routinePrmt2">
		
		<div class="prmtText2">
			<h3>made by dermatologists with</h3> <p>&hearts;</p>
			<h5>Our products are formulated by top dermatologist for fast and ultra-effective results which can be visible within the first week of use</h5>
			<pre></pre>
			<div class="button-green" >SHOP ALL</div>
			
		</div>
	</div>
	<div class="hemp-banner"></div>

</div>

<div class="g-o-s3"><div class="neon01">FREE CONSULTATION</div></div>
<div class="consultation">
		<div class="prmtText3">
			<h3>try our virutal skin consultation</h3>
			<h5>Our skincare specialists are always at your service if you want to discuss your concerns and needs</h5>
			<pre></pre>
			<div class="button-green" >CHAT</div>

		</div>
	</div>


<?php
get_footer();
