<?php
/**
 * Template name: Civil War Links
 *
 */

get_header(); ?>
	
	<div id="wrapper">
		<div id="civilwar-intro"><a href="http://seekingmichigan.org/civil-war/"></a>
			<div id="intro" class="text-intro">
			</div>
		</div>
	
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<ul>
		<?php wp_list_bookmarks('title_li=&categorize=65'); ?>
	</ul>
<?php endwhile; ?>
			
			<?php get_template_part('navigation'); ?>

		<br class="clear" />
	</div>

<?php get_footer(); ?>
