<?php
/**
 * Template name: Civil War Links
 *
 */

get_header(); ?>
	
	<div id="wrapper">
		<div id="civilwar-intro"><a href="http://localhost:8888/wordpress/discover/civil-war/"></a>
			<div id="intro" class="text-intro">
			</div>
		</div>
	
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" class="page-layout">
				<ul>
				   <?php
					$bookmarks = get_bookmarks( array(
					'orderby'   => 'name',
					'order'     => 'ASC',
					'category'  => '2104'
					));
					
					// Loop through each bookmark and print formatted output
					foreach ( $bookmarks as $bm ) { 
					echo '<li class="bookmark"><h4><a href="'.$bm->link_url.'" target="'.$bm->link_target.'" rel="'.$bm->link_rel.'">'.$bm->link_name.'</a></h4>';
					echo '<p class="description">'.$bm->link_notes.'</p>';
					echo '<p class="url">'.$bm->link_url.'</p>';
					echo '<div class="details"><ul><li class="share-link"><a class="addthis" title="" rel="" href="http://www.addthis.com/bookmark.php">Share This</a> </li></ul></div></li>';
					}
					?>
				</ul>
			</div>
<?php endwhile; ?>
			
			<?php get_template_part('navigation'); ?>

		<br class="clear" />
	</div>

<?php get_footer(); ?>
