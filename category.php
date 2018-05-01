<?php get_header(); ?>

<div class="page-wrapper">   
   <div class="aside right">
	   <section id="description" class="description">		
      	<div class="wrapper">	
			
			<?php 
			$category = get_the_category(); 
			$last_category = end($category); 
			echo("<script>console.log('PHP: " . $last_category->cat_name . "');</script>"); 
						
			// get category by url
			$url = $_SERVER['REQUEST_URI'];
            $parts = explode('/', $url);
            end($parts);
            $end = prev($parts);
            echo("<script>console.log('Path: " . $url. ' ' . $end . "');</script>"); 

			$cat = get_category_by_slug($end);
            echo("<script>console.log('Category: " . $cat->name . "');</script>"); 
			 
			$sep = '»';
            $parents = get_category_parents( $cat, TRUE, $sep );
            $parents = explode( $sep, trim( $parents, $sep ) );
            
            if ((get_cat_name($category[0]->category_parent) == 'Kustomite') || ($category[0]->cat_name == 'kustomite')) {
    			$catImage = '/images/kustomite_small.jpg';
    			$alt = 'Logo Kustomite';
            } elseif ($cat->name == 'Navigator') {                    
                $catImage = '/images/Navigator-logo.png';
                $alt = "Logo navigator";
            } else {                    
                $catImage = '/images/testaGreca_small.jpg';
                $alt = "Logo decorazioni e dipinti";
            }
            ?>
				
			<h1>
    			<img src="<?php echo get_template_directory_uri().$catImage; ?>" alt="<?php echo $alt; ?>" style="width:75px; height:auto;"> 
    			<?php
                /*
                    if (count($parents) === 1 ) {
                    echo $parents[0];
                } else {
                 	//echo $category[0]->cat_name;
                 	echo $last_category->cat_name;
                }
                */
                echo $cat->name;
    			?>
            </h1>			
            
            <?php include('includes/paragraphs.php'); ?>
			<?php require('includes/contact-me.php'); ?>
      	</div>
      </section>   
	   <section class="thumbs"> 
		   <div class="wrapper">

    			<ul>
    			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>				
    				<?php /*show thumbnails */
    				if (has_post_thumbnail()) { ?>
    					<li><a href="<?php the_permalink() ?>">
        					<?php the_post_thumbnail('thumbnail'); ?>
        					<?php //the_post_thumbnail('thumbnail', 'title='.the_title()); ?>
        				</a></li>
    				<?php }?>
    
    			<?php endwhile; else: ?>
    				<div class="textBox"><?php _e('Mi dispiace, la pagina che cerchi non esiste.'); ?></div>								
    			<?php endif; ?>			
    			</ul>
    			
		   </div>
      </section> 
   </div>

	<?php require('includes/tiles.php'); ?>
</div>

<?php get_footer(); ?>