<?php
/**
 * Template name: Teach stories single page
 *
 */

get_header(); ?>



	<div id="wrapper">
		<div id="story-submenu-wrapper">
			<ul>
				<li>First Encounters</li>
				<li>Story 2</li>
				<li>Story 3</li>
				<li>Story 4</li>
			</ul>
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
