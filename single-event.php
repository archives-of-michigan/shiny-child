<?php
/**
 * Template name: Single Page for Event Manager
 *
 */

get_header(); ?>

<div id="wrapper" class="sidebar-right-wrapper">
		<div id="wrapper_inner">
			<div id="head_intro"><a href="http://seekingmichigan.org/events/"></a>
				<div id="intro" class="text-intro"><h1>Events</h1><hr class="divider divider-bbottom">
				</div>
				<div id="breadcrumb"><a href="https://seekingmichigan.org">Home</a><span>&gt;</span><a href="https://seekingmichigan.org/events">Events</a><span>&gt;</span><?php the_title(); ?></div>
			</div>
	
		<div id="page-content" class="two_third">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php if($e404_options['page_titles']) : ?><h2 class="fancy-header"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2><?php endif; ?>
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
			<?php get_sidebar('events'); ?>
		</div>
		<br class="clear" />
		</div>
	</div>

<?php get_footer(); ?>
