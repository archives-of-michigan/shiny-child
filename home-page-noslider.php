<?php
/**
 * Template Name: Home Page with No Slider
 *
 */

get_header();

?>

<div id="content_wrapper">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>

</div>

<?php get_footer(); ?>
