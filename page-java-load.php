<?php
/**
 * Template name: Single page for Load
 *
 */

get_header(); ?>



	<div id="wrapper">
	
	<?php if((isset($e404_options['main_intro_type']) && $e404_options['main_intro_type'] != 'none') || $e404_options['breadcrumbs']) echo '<div id="head_intro">'; ?>
		<?php include(OF_FILEPATH.'/main-intro-box.php'); ?>
		<?php if($e404_options['breadcrumbs']) : ?><div id="breadcrumb"><?php e404_breadcrumbs(); ?></div><?php endif; ?>
	<?php if((isset($e404_options['main_intro_type']) && $e404_options['main_intro_type'] != 'none') || $e404_options['breadcrumbs']) echo '</div>'; ?>
	
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" class="page-layout">
				<?php the_content(); ?>

			</div>
<?php endwhile; ?>
			
	</div>

<?php get_footer(); ?>
