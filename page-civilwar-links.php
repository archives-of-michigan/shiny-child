<?php
/**
 * Template name: Civil War Links
 *
 */

get_header(); ?>
	
<div id="wrapper" class="sidebar-right-wrapper">
		<div id="wrapper_inner">
	
	<div id="wrapper">
	<div id="civilwar-intro"><a href="http://seekingmichigan.org/civil-war/"></a>
		<div id="intro" class="text-intro">
		</div>
	</div>
	
		<div id="page-content" class="two_third">
	
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<?php
		$bookmarks = get_bookmarks( array(
			'orderby' => 'name',
			'order' => 'ASC',
			'category' => '65'
                          ));

		// Loop through each bookmark and print formatted output
		foreach ( $bookmarks as $bm ) {
		    echo '<li class="bookmark"><h4><a href="'.$bm->link_url.'" target="'.$bm->link_target.'" rel="'.$bm->link_rel.'">'.$bm->link_name.'</a></h4>';
		    echo '<p class="description">'.$bm->link_notes.'</p>';
		    echo '<hr class="divider-dotted">'
		}
	?>
<?php endwhile; ?>
			
			<?php get_template_part('navigation'); ?>

		</div>
		<div id="sidebar" class="one_third last sidebar-right">
			<?php get_sidebar('civil war'); ?>
		</div>
		<br class="clear" />
		</div>
	</div>

<?php get_footer(); ?>
