<?php
/**
 * Template name: Single Page for WooCommerce
 *
 */

get_header(); ?>



	<div id="wrapper">
		
		<?php if((isset($e404_options['main_intro_type']) && $e404_options['main_intro_type'] != 'none') || $e404_options['breadcrumbs']) echo '<div id="head_intro">'; ?>
			<?php include(OF_FILEPATH.'/main-intro-box.php'); ?>
			<?php if($e404_options['breadcrumbs']) : ?><div id="breadcrumb"><?php e404_breadcrumbs(); ?></div><?php endif; ?>
		<?php if((isset($e404_options['main_intro_type']) && $e404_options['main_intro_type'] != 'none') || $e404_options['breadcrumbs']) echo '</div>'; ?>


		<?php woocommerce_content(); ?>
			
			<?php get_template_part('navigation'); ?>

		<br class="clear" />
	</div>

<?php get_footer(); ?>
