<?php
/**
 * Template name: Missing Label Project Pages
 *
 */

get_header(); ?>

	
	<div id="wrapper">
	<div id="missinglabel-intro"><a href="http://seekingmichigan.org/themissinglabelproject"></a>
		<div id="intro" class="text-intro">
		</div>
	</div>
		
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" class="page-layout">
				<?php the_content(); ?>

				<?php if(!is_attachment() && $e404_options['page_comments']) {
					comments_template('', true);
				} ?>
			</div>
<?php endwhile; ?>
			
			<?php get_template_part('navigation'); ?>

		<br class="clear" />

	</div>

<?php get_footer(); ?>
