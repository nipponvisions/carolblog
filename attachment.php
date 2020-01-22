<?php
/**
* Template name: attachment.php
* Description: The template for displaying  attachments
* 
* @link https://developer.wordpress.org/themes/template-files-section/attachment-template-files/
* @link https://developer.wordpress.org/reference/functions/wp_get_attachment_image/
* @link https://developer.wordpress.org/reference/functions/the_post_navigation/
* @link https://developer.wordpress.org/reference/functions/wp_get_attachment_metadata/
* @link https://wordpress.stackexchange.com/questions/172337/check-if-post-has-attachments-not-image
* @package WordPress
* @subpackage carolblog
* @since 
* @version 1.0
**/

get_header();
?>
<div id="below_header">
<div class ="notice"> <p> This is template attachments.PHP </p> </div> 
	<!-- google add-->
	<?php get_template_part('template-parts/adds/google_horizontal'); ?> 

	 <div>  <?php get_search_form(); ?> </div> 
</div><!--below_header-->


<div id="columns">
	<div class="left_column">

		<?php the_title('<h2 class="page-title">','</h2>'); ?>


		<?php
		// attachment image 
		$attachment_id = get_the_ID();
		 $size = apply_filters('carolblog_custom_image_sizes', 'latest_post');
		$icon= true;
		 $attr='';


		if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				 // get attachment url
		// $attachment_url = esc_url_raw(wp_get_attachment_url($attachment_id));

				?>
			<!--  <a href="<?php echo $attachment_url   ?>"><?php the_title() ?>  </a>  -->

			  <?php
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation(
					array(
						'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
							'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
							'<span class="post-title">%title</span>',
						'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
							'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
							'<span class="post-title">%title</span>',
					)
				);
			}



	   
		//display image or image icon 
		echo  wp_get_attachment_image($attachment_id, $size, $icon, $attr);

			// display image or attachment  caption
		  echo ' <br>caption: '. wp_get_attachment_caption($attachment_id);






		//get attachment meta data -dimensions
		$attachment_meta =  wp_get_attachment_metadata($attachment_id); 

		if($attachment_meta){
			// if meta data is availlable 
			// uploaded  width 
			echo '<br> width:'. 		absint($attachment_meta['width'] );
			echo'<br> height:'. absint($attachment_meta['height'] );
			echo '<br> File Name:'. $attachment_meta['file'];

		}
		  // display featured image description field content (Cameraman) 
			?> <p> Photo By: <?php echo get_post(get_post_thumbnail_id())->post_content; ?> </p> <?php

		//Retrieves the navigation to next/previous post where image was used 
		$args = array(
			'prev_text' => _x( '<span class="meta-nav">Published in : </span><span class="post-title">%title</span>', 'Parent post link', 'carolblog' ),
			'next_text'=> 'next'
		 );
		the_post_navigation($args);

		edit_post_link(
		sprintf(
		/* translators: %s: Name of current post */
		__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'carolblog' ),
		get_the_title()
		),
		'<span class="edit-link">',
		'</span>'
		);
		?>


		<pre>

			
		</pre>

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
<?php  get_footer(); ?>
