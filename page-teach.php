<?php
/**
 * Template name: Teach page without sidebar
 *
 */

get_header(); ?>
	
	<div id="wrapper">
		<div id="wrapper_inner">
		
		  <?php if($e404_options['blog_intro_type'] != 'none' || $e404_options['breadcrumbs']) echo '<div id="head_intro">'; ?>
			  <?php include(OF_FILEPATH.'/blog-intro-box.php'); ?>
			  <?php if($e404_options['breadcrumbs']) : ?><div id="breadcrumb"><?php e404_breadcrumbs(); ?></div><?php endif; ?>
		  <?php if($e404_options['blog_intro_type'] != 'none' || $e404_options['breadcrumbs']) echo '</div>'; ?>

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
		<br class="clear" />
	</div>

<?php get_footer(); ?>
