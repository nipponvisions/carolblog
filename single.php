<?php
/**
 * Template name: single
 * Description: used to display all single blog posts  and attachments
 * @link https://developer.wordpress.org/themes/template-files-section/post-template-files/ 
 * @package WordPress
 * @subpackage carolblog
 * @since 
 * @version 1.0
 */
get_header();
?>
<div class="notice"> <?php global $template; echo basename($template); ?> </div> 
<div id="below_header">

	<!-- google add-->
	<?php get_template_part('template-parts/adds/google_horizontal'); ?> 
	<div>  <?php get_search_form(); ?> </div> 
</div> <!--below_header-->
<div id="columns">
		<div class="left_column">
			<?php   get_template_part('template-parts/post/loop','single'); ?>
		</div><!--left_column -->
		<div class="right_column">
			<?php get_sidebar(); ?>
			<div id="flyers">
				<!-- <p> some commercial goes here </p> -->
				<?php get_template_part('template-parts/adds/flyers'); ?>
			</div>

		</div><!--right_column -->
	<div style="clear:both"></div>
</div><!--columns -->
<?php get_footer(); ?>