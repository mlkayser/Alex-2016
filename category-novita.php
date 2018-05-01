<?php get_header(); ?>

<div class="page-wrapper">   
   <div class="aside right">
	   <section id="description" class="description">		
      	<div class="wrapper">	
				
			<h1>Novità</h1>			
     		
    			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>				
    				<?php /*show thumbnails */
    				if (has_post_thumbnail()) { ?>
    					<div class="news">
	    					<!--a class="news-image" href="<?php the_permalink() ?>"-->
	    					<a class="news-image" href="">
	        					<?php the_post_thumbnail('thumbnail'); ?>
	        					<?php //the_post_thumbnail('thumbnail', 'title='.the_title()); ?>
	        				</a>
	        				<div>
	        					<div class="date"><?php the_date(); ?></div>
								<div class="content"><?php the_content(); ?></div>	
	        				</div>        				
   						</div>	
    				<?php }?>
    
    			<?php endwhile; else: ?>
    				<div class="textBox"><?php _e('Mi dispiace, la pagina che cerchi non esiste.'); ?></div>								
    			<?php endif; ?>			
    			
           
			<?php require('includes/contact-me.php'); ?>
      	</div>
      </section>   

   </div>

	<?php require('includes/tiles.php'); ?>
</div>

<?php get_footer(); ?>