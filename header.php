<?php
/**
* Template name: header
 * Description: the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://make.wordpress.org/core/handbook/best-practices/inline-documentation-standards/php/#6-file-headers
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*  @link https://make.wordpress.org/core/handbook/best-practices/inline-documentation-standards/php/#6-file-headers
 * @link https://themeshaper.com/2012/10/31/the-wordpress-theme-header-template/
 *
 * @package WordPress
 * @subpackage carolblog
 * @since 
 * @version 1.0
 */

?><!DOCTYPE html>
<html>
    <head>
        <meta charset= "<?php bloginfo( 'charset' );?> " >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--  title based on the page being viewed -->
        <title><?php wp_title();?></title>

        <!-- header image  support -->
        <style>
            .headerimage {   
                /*  background: url("<?php bloginfo('stylesheet_directory'); ?>/assets/images/african_shop_header_img.jpg");    */
                background-image: url('<?php header_image(); ?>');
                background-repeat: no-repeat;
            }
        </style>
      
        <?php wp_head(); ?>     
    </head>

    <body>
        <?php wp_body_open() ; ?>

        <div id="main_container"> 

            <div id="header" class="header">

                <div id="headerimage" class="headerimage">
                    <h1> <a href="<?php bloginfo('url');?>"> <?php bloginfo('name');?> </a> </h1> 

                    <div class="header_description">  
                        <h2> <?php bloginfo('description') ; ?> </h2> 
                    </div><!-- header_description -->
            </div><!-- headerimage --> 

              <div id="header_nav">
                <span> Menu </span>
				<?php wp_nav_menu('header');  ?>
			</div>

            </div><!--header -->

        	<div id ="content">