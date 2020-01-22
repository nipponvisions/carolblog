<?php
/**
*Template name: footer
* Description: powers the footer section
* Contains the closing of the  div  and footer contents
* @link  https://developer.wordpress.org/themes/basics/template-files/
* @package WordPress
* @subpackage carolblog
* @since 
* @version 1.0
* 
**/
?>
            <div id="footer">
            	<div class='footer'> 
					<div class='footer_box'>
					

					    <address>
	                        Author: <a href="mailto:Newenglandaudiovisualservices@gmail.com"> Kahunyo Kahwai </a>.<br>
	                        Visit us at: Newengland Audio Visual Services <br>
	                    <!-- 
	                     -->
	                        Box 564, Kiguti <br>
	                        Othaya
	                    </address> 
					 </div>

					 <div class='footer_box'>
					 	Copyright ©2019 Kahunyo Kahwai. All rights reserved
					 </div>

					 <div class='footer_box'>
					 	contact information
					 </div>
					 <div class='footer_box'>
					 	Site Map
					 </div>


					 <div class='footer_box'>
					 	<!--  Quick Links  -->
					 		<?php  wp_list_pages() ; ?>
					 </div>

					 <div class='footer_box'>
					 	related documents
					 </div> 
				</div>
          	</div>           
        </div> <!-- main_container -->
       <?php wp_footer(); ?>
    </body>
</html>