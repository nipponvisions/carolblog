<?php
/**
* Template name: search
* Description:  Displays  the excerpts to the blog posts search results 
* @link https://developer.wordpress.org/themes/template-files-section/post-template-files/#search-php
* @package WordPress
* @subpackage carolblog
* @since 
* @version 1.0
**/

get_header();
?>
<div id="below_header">
	<!-- <div class ="notice"> <p> This is template SINGLE.PHP </p> </div>  -->
	<!-- google add-->
	<?php get_template_part('template-parts/adds/google_horizontal'); ?> 

 	<?php get_search_form(); ?> 
</div><!--below_header-->


<div id="columns">
	<div class="left_column">
		<h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'carolblog' ), get_search_query() ); ?></h2>
		<!-- loop starts here -->
		<?php get_template_part('template-parts/post/loop','search'); ?>
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
</div><!--content  see header -->
<?php get_footer(); ?>