<?php
/**
* Template name: flyers
* Description: loads and displays local add flyers 
* Flyer MUST NOT  exceed 400px in width.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
* @package WordPress
* @subpackage carolblog
* @since 
* @version 1.0
**/

?>
<div class="flyers">
	<?php
	if(is_home() || is_search()|| is_page()){ ?>
		<img width="400" height="auto"  src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/Grand_opening.jpg" alt="Grand_opening">
	<?php  
	}
	elseif (is_single()) {?>
		<img width="300px" height="auto"  src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/Grand_opening.jpg" alt="Grand_opening">
	<?php 
	}
	?>
</div><!--flyers--> 