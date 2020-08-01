<?php
/**
*Template name: 404
* Description: The template for displaying 404 pages (Not Found)
* @link https://developer.wordpress.org/themes/functionality/404-pages/
* @package WordPress
* @subpackage carolblog
* @since 
* @version 1.0
**/

get_header(); ?>
<div class="notice"> <?php global $template; echo basename($template); ?> </div> 

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Not Found', 'carolblog' ); ?></h1>
			</header>

			<div class="page-wrapper">
				<div class="page-content">
					<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'twentythirteen' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>