<?php
/**
 * Template name: Single Page for iPad Labels
 *
 */

?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>The Missing Label Project &laquo; Seeking Michigan</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="http://seekingmichigan.org/wp-content/themes/shiny-child/style.css" />
<link rel='stylesheet' id='gforms_reset_css-css'  href='http://seekingmichigan.org/wp-content/plugins/gravityforms/css/formreset.css?ver=1.8.7' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_formsmain_css-css'  href='http://seekingmichigan.org/wp-content/plugins/gravityforms/css/formsmain.css?ver=1.8.7' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_ready_class_css-css'  href='http://seekingmichigan.org/wp-content/plugins/gravityforms/css/readyclass.css?ver=1.8.7' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_browsers_css-css'  href='http://seekingmichigan.org/wp-content/plugins/gravityforms/css/browsers.css?ver=1.8.7' type='text/css' media='all' />
</head>
<body class=" customize-support">
<div id="main_wrapper">
<div id="wrapper">
	<div id="wrapper_inner">
	
		<div id="page-content">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php if($e404_options['page_titles']) : ?><h2 class="fancy-header"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2><?php endif; ?>
			<div id="post-<?php the_ID(); ?>" class="page-layout">
				<?php the_content(); ?>

				<?php if(!is_attachment() && $e404_options['page_comments']) {
					comments_template('', true);
				} ?>
			</div>
<?php endwhile; ?>
		</div>
	</div>
</div>
</body>
</html>
