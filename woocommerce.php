<?php
/**
 * Template name: Single Page for WooCommerce
 *
 */

get_header(); ?>

<div id="wrapper" class="sidebar-right-wrapper">
		<div id="wrapper_inner">
	
	<div id="wrapper">
	<div id="head-intro">
		<div id="intro" class="text-intro">
		</div>
	</div>
	
		<div id="page-content" class="two_third">

		<?php woocommerce_content(); ?>
			
			<?php get_template_part('navigation'); ?>

		<br class="clear" />
	</div>

<?php get_footer(); ?>
