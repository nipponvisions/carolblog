<?php
/**
*template name: loop-single
*Description: powers the single posts
*author: Mathenge Moses
*theme: carolblog
*
**/
?>
<!--  Start the Loop-single.  -->
<div class="loop_single">
	<?php 
	if ( have_posts() ) : ?>
		<!-- story title -->
		<?php the_title('<h2 class="page-title">','</h2>'); ?>

		<!-- display featured image -->
		<div class="picha_single">
			<?php carolblog_single_post_image(); ?>

		</div><!--picha_single -->

		<!--social media links -->
		<?php get_template_part('template-parts/navigation/social'); ?> 

		<?php 
		while ( have_posts() ) : the_post(); ?>

			<!--  display featured image description field content -->
			<?php //echo get_post(get_post_thumbnail_id())->post_content; ?>
			<!-- the post body content -->
			<div class="post_content"> 
				<?php the_content(); ?>
			</div><!--post_content -->

			<!-- COMMENTS -->
			<!--  display Post Comments -->
			<?php
			// If comments are open or we have at least one comment, 
			if ( comments_open() || get_comments_number() ) :
				//load up the comment template.
				comments_template();
			endif;
		endwhile; 
		else : ?>

			<!-- if cooments are not open -->
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<!-- REALLY stop The Loop. -->
			<?php
	endif; ?>
</div><!-- loop_single -->