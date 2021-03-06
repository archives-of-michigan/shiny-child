<?php
/**
 * Template name: Teach stories single page
 *
 */

get_header(); ?>



	<div id="wrapper">
		<div id="story-submenu-wrapper">
			<ul>
				<li><a href="#">First Encounters</a></li>
				<li><a href="#">Story 2</a></li>
				<li><a href="#">Story 3</a></li>
				<li><a href="#">Story 4</a></li>
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
