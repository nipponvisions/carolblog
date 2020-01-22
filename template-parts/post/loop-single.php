<?php
/**
*template name: single-loop
*Description: powers the single posts
*author: Mathenge Moses
*theme: carolblog
*
**/
?>


<!-- Start the Loop-single. -->

<?php 
if ( have_posts() ) : ?>
	<div class="loop_single">

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
			<?php    the_content(); ?>
		</div><!--post_content -->

		<!-- COMMENTS -->
			<!-- display comments form -->
			<?php   comment_form() ; ?>

			<!--  Post Comments -->
			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>


		<?php 
		endwhile; else : ?>

		<!-- The very first "if" tested to see if there were any Posts to -->
		<!-- display.  This "else" part tells what do if there weren't any. -->
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

		<!-- REALLY stop The Loop. -->
	</div><!-- loop_single -->
<?php endif; ?>
</div>

