<?php
/**
*template name: loop-archive.php
*author: mathenge Moses
*description:  powers the generic loop to the archives
*
**/
?>

<div class="loop_archive">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<ul>
				<li>
					<!-- the title--> 
					<a href="<?php the_permalink(); ?>"> <?php the_title('<h3 class="post-title">','</h3>'); ?></a> 
					<!--author and publication date --> 
					<span class ="by_line"> Written by: <?php echo get_the_author(); ?></span>
					<span class ="posting_date"> Posted on: <?php echo get_the_date(); ?> </spa> 
					<?php the_excerpt(); ?>
				</li>
			</ul> 
			<?php
		endwhile; else : ?>

	<!-- The very first "if" tested to see if there were any Posts to -->
	<!-- display.  This "else" part tells what do if there weren't any. -->
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<!-- REALLY stop The Loop. -->
	<?php endif; ?>

</div><!--loop_archive -->



