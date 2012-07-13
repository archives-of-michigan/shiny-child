<?php
/**
 * Template Name: Home Page with Nivo Slider
 *
 */

get_header();

?>

<div id="content_wrapper">
<?php if($e404_options['home_slider']) : ?>
	<div id="featured">
		<div id="featured_border">
			<div id="featured_inner">
				<?php e404_show_slider(); ?>
			</div>
		</div>
	</div>
<?php endif; ?>
<div id="wrapper">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>

</div>

<?php get_footer(); ?>
