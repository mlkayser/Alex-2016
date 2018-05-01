<?php
/* Template Name: page for tag listing */
?>

<?php require('header.php'); ?>

<div class="page-wrapper">   
	<div class="aside right">		
   		<div class="wrapper">					
          <div id="page" class="page">  
	          	             
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>					
				<?php 
		        if ( is_page( array(
					'dipinti-murali', 
					'murales-e-trompe-loeil-per-piscine/', 
					'murales-e-trompe-loeil-per-ristoranti-e-alberghi',
					'dipinti-murali-per-attivita-commerciali',
					'dipinti-murali-per-interni-abitazioni',
					'dipinti-murali-per-esterni',
					'ritratti-su-commissione',
					'riproduzioni',
					'armadi-dipinti-a-mano' 		        
		        ))) {
	                $catImage = '/images/testaGreca_small.jpg';
	                $alt = "Logo decorazioni e dipinti";
	                ?>
	                
					<h1>
						<img src="<?php echo get_template_directory_uri().$catImage; ?>" alt="<?php echo $alt; ?>" style="width:75px; height:auto;"> 
						<?php the_title(); ?>
					</h1>

			    <?php } else { ?>                
				    <h1><?php the_title(); ?></h1> 
				<?php } ?>

                <?php the_content(); ?>  
			
            <?php endwhile; else: ?>
			    <div class="textBox"><?php _e('Mi dispiace, la pagina che cerchi non esiste.'); ?></div>								
            <?php endif; ?>
  		  		
			 <?php require('includes/contact-me.php'); ?>  
			 
          </div>           	
	   </div>
   </div>   

   <?php require('includes/tiles.php'); ?>
</div>

<?php require('footer.php'); ?>