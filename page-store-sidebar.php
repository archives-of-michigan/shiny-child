<?php
/**
 * Template name: Store page with sidebar
 *
 */

get_header(); ?>
	
	<div id="wrapper" class="sidebar-right-wrapper">
		<div id="store-intro">
			<div id="intro" class="text-intro"></div>
		</div>
		<div id="wrapper_inner">
		
	<?php if((isset($e404_options['main_intro_type']) && $e404_options['main_intro_type'] != 'none') || $e404_options['breadcrumbs']) echo '</div>'; ?>
	
		<div id="page-content" class="two_third">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" class="page-layout">
				<?php the_content(); ?>

				<?php if(!is_attachment() && $e404_options['page_comments']) {
					comments_template('', true);
				} ?>
			</div>
<?php endwhile; ?>
			
			<?php get_template_part('navigation'); ?>

		</div>
		<div id="sidebar" class="one_third last sidebar-right">
			<?php get_sidebar('default'); ?>
		</div>
		<br class="clear" />
		</div>
	</div>

<?php get_footer(); ?>
