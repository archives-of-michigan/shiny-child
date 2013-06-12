<?php
/**
 * Template name: Single Page for WooCommerce
 *
 */

get_header(); ?>

	<div id="wrapper" class="sidebar-right-wrapper">
		<div id="wrapper_inner">
		
			<div id="breadcrumb"><a href="http://seekingmichigan.org">Home</a><span>&gt;</span><a href="http://seekingmichigan.org/shop">Shop</a><span>&gt;</span><?php echo get_the_title($ID); ?></div>
			
		<div id="page-content" class="two_third">

		<?php woocommerce_content(); ?>
			
			<?php get_template_part('navigation'); ?>
		
		</div>
		<div id="sidebar" class="one_third last sidebar-right">
			<?php get_sidebar('store'); ?>
		</div>

		<br class="clear" />
	</div>

<?php get_footer(); ?>
