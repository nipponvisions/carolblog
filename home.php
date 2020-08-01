<?php
/**
* Template name: home
* Description: powers the posts main page
* an archive_list- of all the blog posts in reverse chronology latest at the top.
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
* @package WordPress
* @subpackage carolblog
* @since 
* @version 1.0
**/

 get_header();
?>
<div class="notice"> <?php global $template; echo basename($template); ?> </div> 

<div id="below_header">

	<!-- google add-->
	<?php get_template_part('template-parts/adds/google_horizontal'); ?> 
	<?php get_search_form(); ?>
</div><!--below_header-->

<div id="columns" >
	<div class="left_column">
		<div id="latest_post">
			<?php   carolblog_latest_post(); ?>
		</div>
		<!-- social media nav -->
		<?php get_template_part('template-parts/navigation/social'); ?> 

		<!-- Start the Loop-home. -->
		<?php get_template_part('template-parts/post/loop','home'); ?> 	

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
</div><!-- columns -->

<?php get_footer(); ?>
