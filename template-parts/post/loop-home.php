<?php
/**
*template name: loop-home.php
*author: mathenge Moses
*description: the powers the loop to the home 
*displays the latest post, and the posts snippets
**/
?>

<div class="loop_home">
	<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
	
				<div class="snippets">  
					<div class="picha">
						<!-- display featured image -->
						<?php  
						if(has_post_thumbnail()){ ?>

						<a href="<?php the_permalink(); ?>">  <?php the_post_thumbnail('thumbnail'); ?>	</a>							
						<?php	
						}
						else{
							?> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/thumb_pedding.png" alt="thumb_pedding"><?php 
						}
						?>
					</div>
						<div class="picha">			
							<ul>
								<li>  
									<!-- story title -->
									<a href="<?php the_permalink(); ?>"><?php the_title('<h4>', '</h4>'); ?></a>									
								 </li>
								<li>
									<?php  the_excerpt(); ?> 
								
								 </li>
							</ul>
						</div><!--picha -->
				</div><!--snippets-->

		 	 <?php endwhile; else : ?>

		 	<!-- The very first "if" tested to see if there were any Posts to -->
		 	<!-- display.  This "else" part tells what do if there weren't any. -->
		 	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<!-- REALLY stop The Loop. -->
	 <?php endif; ?>
 </div><!--loop_home -->