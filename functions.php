<?php
/**
 * Template name: functions
 * Description: used to call WordPress functions and to define themes own functions.
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage carolblog
 * @since 
 * @version 1.0
 **/

//Enqueueing Styles and Scripts 
function carolblog_enqueue_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'carolblog_enqueue_scripts' );

// 
if ( ! function_exists('wp_body_open')){
	function wp_body_open(){
		do_action('wp_body_open');
	}
}

// register menu locations
 register_nav_menus(array(
 	'Header Menu' =>'header_menu',
 	'Footer Menu' =>'footer_menu'
 	)
 );

// Featured Images & Post Thumbnails
function carolblog_custom_image_sizes() {
	add_theme_support( 'post-thumbnails' );
	add_image_size(  'latest_post', 400, 400); // 400pixels  max latest post image
	add_image_size( 'homepage_thumb', 220, 180, true ); // (cropped)
}
add_action( 'after_setup_theme', 'carolblog_custom_image_sizes' );


//change the default excerpt length.
function carolblog_custom_excerpt_length() {
	// trim to 20 words
	if(! has_excerpt())
	{
		return 20;
	}
}
add_filter( 'excerpt_length', 'carolblog_custom_excerpt_length', 999 );

 // add a link to the  auto exerpt  read More
function carolblog_excerpt_more() {
    global $post;
	return '<b> <a class="moretag" href="'. get_permalink($post->ID) . '"> Endelea Kusoma...</a> </b>';
}
add_filter('excerpt_more', 'carolblog_excerpt_more');


//*  add a link to the mannually added exerpts
function carolblog_mannual_exerpt_more( $excerpt ) {
	$excerpt_more = '';
	if( has_excerpt() ) {
    	$excerpt_more = '&nbsp;<a href="' . get_permalink() . '" rel="nofollow">[Read more]</a>';
	}
	return $excerpt . $excerpt_more;
}
add_filter( 'get_the_excerpt', 'carolblog_mannual_exerpt_more' );

//register sidebars
function carolblog_add_sidebars(){
	//1st sidebar
	register_sidebar( array(
		'name' => __('Main Sidebar'),
		'id'   =>'mainsidebar',
		'description' =>'A description of the man sidebar'
		)
	);
}
add_action('widgets_init','carolblog_add_sidebars');

// Header immage support
	$args = array(
		'width'         => 1048,
		'height'        => 90,
		'default-image' => get_template_directory_uri() . '/images/header.jpg',
	);
add_theme_support( 'custom-header', $args );

// single post image
function carolblog_single_post_image(){
	/**
	* single post image dimention
	* single post opening markup
	* single post caption and photo credits
	* single post closing markup
	**/
	
	if(has_post_thumbnail()){
		// in case of smaller sized post thumbnail images, make the caption & exerpt width same as the image
		$single_post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
		$single_post_thumbnail_width = $single_post_thumbnail[1].'px';
		// $latest_post_thumbnail_height = $latest_post_thumbnail[2].'px';
		?>
		<div class="picha_single_flame" style= "width:<?php echo $single_post_thumbnail_width;?>;">
			<?php the_post_thumbnail('large'); ?>
		</div> <!--picha_single_flame -->
		<div class="picha_single_flame" style= "width:<?php echo $single_post_thumbnail_width;?>;">
			<!-- display featured image caption -->
			<h4><?php the_post_thumbnail_caption();?></h4>
			<!-- Photo Credits -->
			<!--  display featured image description field content -->
			<p> Photo By: <?php echo get_post(get_post_thumbnail_id())->post_content; ?> </p>
		</div> <!--picha_single_flame -->
		<?php
	}
}
do_action('init','carolblog_single_post_image');


// latest_post hook
function carolblog_latest_post(){
	/**
	* latest post opening markup
	* latest post title
	* latest post image
	* latest post caption
	* latest post exerpt dimentions
	* latest post closing markup
	*@link https://developer.wordpress.org/reference/functions/wp_get_recent_posts/
	*@link https://developer.wordpress.org/reference/functions/wp_get_attachment_image_src/
	*
	**/
	global $post;
	?>
	<div class="latest_post">
			<!--  story title  -->
		<a href="<?php the_permalink() ?>"><?php the_title('<h2>','</h2>'); ?></a>

		<!-- display featured image -->
		<div class="latest_post_wrapper">

			<div class="latest_post_img" >
				<?php  the_post_thumbnail('latest_post') ; ?>
			</div><!--latest_post_img -->

			<?php
			// get the latest_post_thumbnail attributes -width dimension
			// in case of smaller sized post thumbnail images, make the caption & exerpt width same as the image
			$latest_post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(),'latest_post');
			$latest_post_thumbnail_width = $latest_post_thumbnail[1].'px';
			// $latest_post_thumbnail_height = $latest_post_thumbnail[2].'px';
			?>

			<div class="latest_post_caption" style=" width: <?php echo $latest_post_thumbnail_width; ?>;">
				<p> <?php the_post_thumbnail_caption(); ?> </p>
			</div>

			<div class="latest_post_excerpt" style=" width: <?php echo $latest_post_thumbnail_width; ?>; ">
				<?php
				# display mannually inserted excerpt
				if(has_excerpt()){ 
					echo get_the_excerpt($post) ; 
				}
				else {
					// display auto generated excerpt for the latest post
					$args = array(
						'numberposts' =>1
					);
					$latest_posts = wp_get_recent_posts($args);

					foreach ($latest_posts as $key) {
						# code...
						$post_content =  $key['post_content'];
						$latest_post_excerpt = wp_trim_words( $post_content, 20); ?>

						<?php  echo $latest_post_excerpt; ?>
						<!-- add  readmore to the latest post exerpt  -->
						<a href="<?php echo get_permalink($post->ID); ?> "> soma hapa </a>
						<?php	
					}
				}?>
			</div><!--latest_post_excerpt -->
		</div><!--latest_post_wrapper -->
	</div><!--latest_post -->

		
<?php
}
do_action('init','carolblog_latest_post');



