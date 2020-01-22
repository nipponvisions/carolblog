<?php
/**
 * Template name: content-none
 * Description: displaying a message that posts cannot be found and offering an alternative
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage carolblog
 * @since 
 * @version 1.0
 */

?>

			<p><?php _e( ' Sorry It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching  with different key words can help.', 'carolblog' ); ?></p>
			<?php
				get_search_form();

