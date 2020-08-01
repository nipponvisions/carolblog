<?php
/**
* template name: index.php
*
* author: Mathenge Moses
**/

 get_header();
?>
<div class="notice"> <?php global $template; echo basename($template); ?> </div> 

	<div>  <?php get_search_form(); ?> </div>
<?php 

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		the_title();
		the_content();
		//
	} // end while
} // end if
?>



<?php get_footer(); ?>