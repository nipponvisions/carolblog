<?php
/**
* Template name: archive
* Description : The main arichive file - a page that displays a list of posts  without thumbnails 
* * @link https://developer.wordpress.org/themes/template-files-section/taxonomy-templates/
* @package WordPress
* @subpackage carolblog
* @since 
* @version 1.0
**/

get_header();
?>
<div id="below_header">
<!-- <div class ="notice"> <p> This is template archive.php </p> </div>  -->
	<!-- google add-->
	<?php get_template_part('template-parts/adds/google_horizontal'); ?> 

	 <div>  <?php get_search_form(); ?> </div> 
</div><!--below_header-->


<div id="columns">
	<div class="left_column">
		<?php
		 the_archive_title('<h2 class="page-title">', '</h2>'); 
		the_archive_description( '<div class="taxonomy-description">', '</div>' );
		?>

		<!-- archives loop  start -->
		<?php get_template_part('template-parts/post/loop','archive'); ?>



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
