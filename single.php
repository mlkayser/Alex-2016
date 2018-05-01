<?php get_header(); ?>

<div class="page-wrapper">   
	<section class="aside right">		
   		<div class="wrapper">					          	  	

		   	<div id="post">  	  	
    			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		

                    <!-- breadcrumbs -->
                    <?php custom_breadcrumbs(); ?>       
                             									    
    				<!-- navigation -->
    				<?php previous_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Previous post link') . '</span>',TRUE); ?>
    				<?php next_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Next post link') . '</span> %title',TRUE); ?>
    				
    				<!-- thumbnails -->
    				<?php
    				$images = get_children(array(
    							'post_parent' => $post->ID, 
    							'post_status' => 'inherit', 
    							'post_type' => 'attachment', 
    							'post_mime_type' => 'image', 
    							'order' => 'ASC', 
      							'orderby' => 'post_name'
    						));
    
    				if ($images) {
    					$num_of_images = count($images);
    				?>
    				
        				<div id="thumbs" class="small-thumbs">
        					<table><tr>						 
        						<?php							
        						$start = 0;		
        						$stop = $num_of_images;
        						$i = 0;
        						foreach ($images as $image) {
        							if ($start <= $i and $i < $stop) {
        								$img_title = $image->post_title;   // title.
        								$img_description = $image->post_content; // description.
        								$img_caption = $image->post_excerpt; // caption.
        								$img_url = wp_get_attachment_url($image->ID); // url of the full size image.
        								if ($i == 0) {$first_img_url=$img_url;}
        								$preview_array = image_downsize( $image->ID, 'thumbnail' );
        								$img_medium = image_downsize( $image->ID, 'medium' );
        								$img_preview = $preview_array[0]; // thumbnail or medium image to use for preview.
        								
        								if ($num_of_images >1) { ?> 
        									<td><img 
        										src="<?php echo $img_preview; ?>" 
        										alt="<?php echo $img_caption; ?>" 
        										title="<?php echo $img_title; ?>" 
        										onmouseover="getElementById('bigPic').src='<?php echo $img_url; ?>'; getElementById('bigPicLink').href='<?php echo $img_url; ?>'"></td>					
        								<?php }
        							}
        							$i++;
        						} /*foreach*/
    						?>
    						</tr></table>
    					</div>												
    				<?php } /* if images */ ?>
    				
    				<!-- main image -->
					<div id="single" class="bigPic">
						<a id="bigPicLink" href="<?php echo $first_img_url; ?>">
							<img id="bigPic" src="<?php echo $first_img_url; ?>" alt="<?php echo $img_caption; ?>" title="<?php echo $img_title; ?>">
						</a>							 
					</div>
    																
    			<?php endwhile; else: ?>
    				<div class="textBox"><?php _e('Mi dispiace, la pagina che cerchi non esiste.'); ?></div>								
    			<?php endif; ?>
    		</div><!-- end loop -->	

          </div><?php //end post ?>   	
	   </div><?php // end wrapper ?>
	   
   <?php require('includes/tiles.php'); ?>
</div>

<?php require('footer.php'); ?>