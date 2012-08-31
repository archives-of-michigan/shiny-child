<?php
/**
 * Template name: Civic History Portfolio with Sidebar
 *
 */

get_header();

// Show only items that are in the primarysources portfolio-category

$taxonomy = "portfolio-category";
$term = "civic-history";

?>
	
	<div id="wrapper"<?php if($e404_options['portfolio_layout'] == 'sidebar-left') : ?> class="sidebar-left-wrapper"<?php elseif($e404_options['portfolio_layout'] == 'sidebar-right') : ?> class="sidebar-right-wrapper"<?php endif; ?>>
	
	<?php if($e404_options['portfolio_layout'] == 'sidebar-left') : ?>
		<div id="sidebar" class="one_third sidebar-left">
	<?php get_sidebar('blog'); ?>
		</div>
	<?php endif; ?>
		<div id="page-content" class="two_third<?php if($e404_options['portfolio_layout'] == 'sidebar-left') echo ' last'; ?>">
			<div class="portfolio portfolio-columns">
<?php
$query = "paged=".$paged."&post_type=portfolio&orderby=menu_order date&posts_per_page=".$e404_options['portfolio_posts_per_page'];
if(isset($taxonomy))
	$query .= "&taxonomy=".$taxonomy;
if(isset($term))
	$query .= "&term=".$term;
$i = 0;
$custom_query = new WP_Query($query);
if($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); $i++; ?>
				<div class="one_half<?php if($i % 2 == 0) echo ' last'; ?>">
					<div class="portfolio-item" id="post-<?php the_ID(); ?>">
						<?php
						$preview_url = e404_get_portfolio_preview_url($post->ID);
						if (has_post_thumbnail()) {
							$large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
							$img_shortcode = '[image align="none" title="'.the_title_attribute('echo=0').'" width="268"';
							if(!empty($e404_options['portfolio_thumbnails_height']) && $e404_options['portfolio_thumbnails_height'] > 0)
								$img_shortcode .= ' height="'.$e404_options['portfolio_thumbnails_height'].'"';
							else
								$img_shortcode .= ' height="158"';
							$img_shortcode .= ']'.$large_image_url[0].'[/image]';
							echo do_shortcode($img_shortcode);
						} ?>
						<?php if($e404_options['portfolio_titles']) : ?><div class="portfolio_item_header"><h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3></div><?php endif; ?>
						<?php if($e404_options['portfolio_item_categories']) : ?>
						<div class="portfolio-meta">
							<div class="posted-meta"><?php the_terms($post->ID, 'portfolio-category', '', ', '); ?></div>
						</div>
						<?php endif; ?>
						
						<div class="fancy_meta">
							<ul>
								<li><a class="tiptip fancy_icon fancy_details" href="<?php the_permalink(); ?>" title="<?php _e('More Details', 'shiny'); ?>"><?php _e('More Details', 'shiny'); ?></a></li>
								<li><a class="tiptip fancy_icon fancy_preview" href="<?php echo $portfolio_url; ?>" title="Browse">Browse Items</a></li>
						<?php if($e404_all_options['e404_portfolio_like_this'] == 'true') : $like_class = e404_liked($post->ID) ? 'fancy_likes_you_like' : 'fancy_likes'; ?>
								<li><a class="tiptip fancy_icon like_this <?php echo $like_class; ?>" href="#" id="like-<?php the_ID(); ?>" title="<?php echo e404_likes_text(e404_like_this($post->ID), false); ?>"><?php e404_likes_text(e404_like_this($post->ID), false); ?></a></li>
						<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
				<?php if($i % 2 == 0) echo '<br class="clear" />'; ?>
<?php endwhile; wp_reset_query(); ?>
			</div>
			<?php if($i % 2 != 0) echo '<br class="clear" />'; ?>
<?php else :
			_e('Nothing Found', 'shiny');			
endif; 
?>
			
			<?php get_template_part('navigation', 'portfolio'); ?>

	</div>
	<?php if($e404_options['portfolio_layout'] == 'sidebar-right') : ?>
		<div id="sidebar" class="one_third last sidebar-right">
	<?php get_sidebar('blog'); ?>
		</div>
	<?php endif; ?>
		<br class="clear" />
		</div>
	</div>

<?php get_footer(); ?>
