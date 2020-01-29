<?php
/**
* Template name: sidebar
* Description: The Main sidebar
* @link https://developer.wordpress.org/themes/template-files-section/post-template-files/#search-php
* @package WordPress
* @subpackage carolblog
* @since 
* @version 1.0
**/

?>

<div class="sidebar">
	<!-- 	<p> Sidebar Template </p> -->
	<ul>
		<?php
		if ( is_active_sidebar('mainsidebar') ){
			dynamic_sidebar('mainsidebar'); 
		}
		else{
			echo " Nothing is loaded  ";
		}
		?>
	</ul>
</div>