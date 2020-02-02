<?php
/**
 * Template name: comments
 * Description: The template for displaying Comments.
 * 
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/comment-template/
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/comment-template/#comments-title
 * @package WordPress
 * @subpackage carolblog
 * @since 
 * @version 1.0
 *
 *https://idratherbewriting.com/2009/05/31/wordpresss-threaded-comments/
 **/
 
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
?>
<div class="comments">
	<!--Displays all comments for a post  -->
	<?php 
		//Get only the approved comments pedding
		$args = array(
			'status' => '',
			'post_id' => $post->ID
		);
		//The comment Query
		$comments_query = new WP_Comment_Query;
		$comments = $comments_query->query($args);
		// Comment Loop
		if ( $comments ) {
			foreach ( $comments as $comment ) {
				echo '<p>' . $comment->comment_content . '</p>';
				// commentor and date
				echo '<p> <b>'.get_comment_author() .'</b>'. get_comment_date().'</p> <br>';
			}
		}
		else {
			echo '<p> No comments found.</p>';
		}
	
		// display comments form 
		comment_form() ;
	?>
</div><!--comments -->