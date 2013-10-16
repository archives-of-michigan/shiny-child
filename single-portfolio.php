<?php
/**
 * Portfolio - single page
 *
 */

get_header(); ?>
	
	<div id="wrapper">
	
	<?php if($e404_options['portfolio_intro_type'] != 'none' || $e404_options['breadcrumbs']) echo '<div id="head_intro">'; ?>
		<?php include(OF_FILEPATH.'/portfolio-intro-box.php'); ?>
		<?php if($e404_options['breadcrumbs']) : ?><div id="breadcrumb"><?php e404_breadcrumbs(); ?></div><?php endif; ?>
	<?php if($e404_options['portfolio_intro_type'] != 'none' || $e404_options['breadcrumbs']) echo '</div>'; ?>
	
		<div class="portfolio portfolio-page">
<?php
while ( have_posts() ) : the_post(); ?>

<?php
	$next = get_adjacent_post(false, '', false);
	$prev = get_adjacent_post(false, '', true);
	if($next)
		$next_url = get_permalink($next);
	else
		$next_url = '';
	if($prev)
		$prev_url = get_permalink($prev);
	else
		$prev_url = '';
	$portfolio_page_id = get_option('e404_portfolio_page');
	$portfolio_page = get_page($portfolio_page_id);
	$portfolio_cdmid = get_post_meta($post->ID, 'wpcf-cdmid', true);
	$portfolio_url = "http://seekingmichigan.contentdm.oclc.org/cdm/search/collection/".$portfolio_cdmid;
	$like_class = e404_liked($post->ID) ? 'fancy_likes_you_like' : 'fancy_likes';
?>
			<div class="portfolio-nav">
				<div class="portfolio-header">
				<?php if($e404_options['portfolio_single_titles']): ?>
					<h2><?php the_title(); ?></h2>
				<?php endif; ?>
					<?php if($e404_options['portfolio_item_categories']) : ?>
					<div class="portfolio-meta">
						<div class="posted-meta"><?php the_terms($post->ID, 'portfolio-category', '', ', '); ?></div>
					</div>
					<?php endif; ?>
				</div>
				<ul>
					<li id="portfolio-search"><a href="">Search</a></li>
					<li class="portfolio-all"><a href="<?php echo $portfolio_url; ?>">View Entire Collection</a></li>
					<li class="portfolio-btns">
						<a <?php if($prev_url) echo 'href="'.$prev_url.'"'; ?>class="prev browse arrowleft<?php if(!$prev) echo' disabled'; ?>"><span>prev</span></a>
						<a <?php if($next_url) echo 'href="'.$next_url.'"'; ?>class="next browse arrowright<?php if(!$next) echo' disabled'; ?>"><span>next</span></a>
					</li>
				</ul>
				<br class="clear" />
			</div>
			<?php the_content(''); ?>

<?php endwhile; ?>
<?php if($e404_options['portfolio_item_tags']) : ?>
			<br class="clear" />
			<div class="full_page tags-meta"><?php the_terms($post->ID, 'portfolio-tag', '', ' '); ?></div>
<?php endif; ?>
		</div>
		<br class="clear" />
	</div>

<?php get_footer(); ?>
