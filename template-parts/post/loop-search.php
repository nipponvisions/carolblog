<?php
/**
*template name: loop-search.php
*author: mathenge Moses
*description:  powers the  posts search loop
*
**/
?>

<div class="loop_search">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
			<!-- Display the Title as a link to the Post's permalink.  -->
			<ul>
				<li>
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title('<h4>', '</h4>'); ?></a>
					<?php the_excerpt(); ?> 
				</li>
			</ul>
			<?php
			endwhile; else : ?>

	<!-- The very first "if" tested to see if there were any Posts to -->
	<!-- display.  This "else" part tells what do if there weren't any. -->

		<?php get_template_part('template-parts/post/content-none'); ?> 
	<!-- REALLY stop The Loop. -->
	<?php endif; ?>

</div><!--loop-page-->


