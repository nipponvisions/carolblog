<?php
/**
* Template name: page
* Description:  Displays all generic  static pages pages 
* @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage carolblog
* @since 
* @version 1.0
**/
get_header();
?>
<div id="below_header">
	<?php get_template_part('template-parts/adds/google_horizontal'); ?> 
	 <div>  <?php get_search_form(); ?> </div> 
</div><!--below_header-->


<div id="columns">
	<div class="left_column">
		<?php get_template_part('template-parts/page/loop','page'); ?> 
	</div>


	<div class="right_column">
		<div id="flyers">
			<!-- <p> some commercial goes here </p> -->
			<?php get_template_part('template-parts/adds/flyers'); ?>
		</div>

		<div id="below_flyer">
			<?php  get_sidebar(); ?>
			<?php get_template_part('template-parts/adds/google_verticle'); ?> 
		</div>
	</div><!--right_column -->
	<div style="clear:both"></div>	
</div><!--columns -->

<?php get_footer(); ?>