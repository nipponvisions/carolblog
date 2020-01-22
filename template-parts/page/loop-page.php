<?php
/**
*template name: loop-page.php
*author: mathenge Moses
*description:  powers the generic loop to the  pages
*
**/
?>

<div class="loop_page">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
			// Display Page content
			the_title('<h2 class="page-title">','</h2>' ); ?>
			
			<div class="page_content"><?php the_content(); ?> </div>
			<?php
		endwhile; else : ?>

	<!-- The very first "if" tested to see if there were any Posts to -->
	<!-- display.  This "else" part tells what do if there weren't any. -->
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<!-- REALLY stop The Loop. -->
	<?php endif; ?>

	</div><!--loop_page -->
