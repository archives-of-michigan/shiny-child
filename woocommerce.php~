<?php
/**
 * Template name: Single Page for WooCommerce
 *
 */

get_header(); ?>



	<div id="wrapper" class="sidebar-right-wrapper">
		<div id="wrapper_inner">
		
		<?php if((isset($e404_options['main_intro_type']) && $e404_options['main_intro_type'] != 'none') || $e404_options['breadcrumbs']) echo '<div id="head_intro">'; ?>
			<?php include(OF_FILEPATH.'/main-intro-box.php'); ?>
			<?php if($e404_options['breadcrumbs']) : ?><div id="breadcrumb"><?php e404_breadcrumbs(); ?></div><?php endif; ?>
		<?php if((isset($e404_options['main_intro_type']) && $e404_options['main_intro_type'] != 'none') || $e404_options['breadcrumbs']) echo '</div>'; ?>
			
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
