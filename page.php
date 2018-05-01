<?php require('header.php'); ?>

<div class="page-wrapper">   
	<section id="description" class="aside right description">		
   	<div class="wrapper">					
          <div id="page" class="page">  	             
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>					
			    <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>  
			
            <?php endwhile; else: ?>
			    <div class="textBox"><?php _e('Mi dispiace, la pagina che cerchi non esiste.'); ?></div>								
            <?php endif; ?>
  		  		
			 <?php require('includes/contact-me.php'); ?>             	
	   </div>
   </section>   

   <?php require('includes/tiles.php'); ?>
</div>

<?php require('footer.php'); ?>