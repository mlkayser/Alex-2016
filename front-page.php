<?php get_header(); ?>
<style>
	.navigatorLink {
		z-index:2;
		position:fixed; 
		top:0; right:0; 
		width:12vw; height:12vw;
		min-width:80px; min-height:80px;
	}
	.navigatorLink img {
		width:100%; height:100%;
		border:0;
	}
	@media screen and (max-width: 960px) {
		.navigatorLink {
			top:40%;
		}
	}
</style>

<div class="page-wrapper home" style="position:relative;">
   <div class="aside right">    
        <div id="page" class="page">  	                              
			<section id="slider" class="slider">
				<ul>
					<li class="slide decorazioni navigator-video">
						<div class="video">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/nLn8NYkJFiI?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					</li>
				     <li class="slide decorazioni">
				       <img src="<?php echo get_template_directory_uri(); ?>/images/slides/rete-del-pescatore.jpg" alt="Mauritius, Elba - Trompe L'Oeil dipinto a mano" />
				       <a href="http://www.alexlorenzi.com/collezione-quadri-navigator/" class="button">Collezione Navigator</a>
				    </li>
				   <li class="slide decorazioni">
				       <img src="<?php echo get_template_directory_uri(); ?>/images/slides/mauritius.jpg" alt="Mauritius, Elba - Trompe L'Oeil dipinto a mano" />
				       <a href="http://www.alexlorenzi.com/trompe-loeil/" class="button">Trompe L'Oeil</a>
				    </li>
				    <li class="slide decorazioni">
				       <img src="<?php echo get_template_directory_uri(); ?>/images/slides/sansone.jpg" alt="Spiaggia di Sansone, Elba - Murales dipinto a mano" />
				       <a href="http://www.alexlorenzi.com/murales/" class="button">Murales</a>
				    </li>
				    <li class="slide decorazioni">
				       <img src="<?php echo get_template_directory_uri(); ?>/images/slides/bacco.jpg" alt="Bacco, Elba - Affresco" />
				       <a href="http://www.alexlorenzi.com/affreschi/" class="button">Affreschi</a>
				    </li>
				    <li class="slide decorazioni">
				       <img src="<?php echo get_template_directory_uri(); ?>/images/slides/portico-deco.jpg" alt="Portico Deco, Elba - Ornamento" />
				       <a href="http://www.alexlorenzi.com/ornamenti-su-pareti/" class="button">Ornamenti su pareti</a>
				    </li>
				    <li class="slide decorazioni">
				       <img src="<?php echo get_template_directory_uri(); ?>/images/slides/samantha-and-spirit.jpg" alt="Samantha & Spirit- Dipinto su Commissione" />
				       <a href="http://www.alexlorenzi.com/quadri/" class="button">Quadri</a>
				    </li>
				    <li class="slide decorazioni">
				       <img src="<?php echo get_template_directory_uri(); ?>/images/slides/mobile-pappagalli.jpg" alt="Pappagalli - Decorazioni su Mobili" />
				       <a href="http://www.alexlorenzi.com/decorazioni-su-mobili/" class="button">Decorazioni su mobili</a>
				    </li>
				    <li class="slide kustomite">
				       <img src="<?php echo get_template_directory_uri(); ?>/images/slides/denim-rebel.jpg" alt="Harley Davidson Denim Rebel- Aerogfafie su Auto e Moto" />
				       <a href="http://www.alexlorenzi.com/aerografie-su-carrozzerie-auto-moto/" class="button">Aerografie su Auto e Moto</a>
				    </li>
				    <li class="slide kustomite">
				       <img src="<?php echo get_template_directory_uri(); ?>/images/slides/casco-don.jpg" alt="Casco Don Alberto - Aerografie su Caschi" />
				       <a href="http://www.alexlorenzi.com/aerografie-su-caschi/" class="button">Aerografie su Caschi</a>
				    </li>
				    <li class="slide kustomite">
				       <img src="<?php echo get_template_directory_uri(); ?>/images/slides/eagles.jpg" alt="Eagles - Aerografie su Giubbotti e T-shirts" />
				       <a href="http://www.alexlorenzi.com/aerografie-su-giubbotti-tshirts/" class="button">Aerografie su Giubbotti e T-shirts</a>
				    </li>
				   <li class="slide">
				       <img src="<?php echo get_template_directory_uri(); ?>/images/slides/corsi.jpg" alt="Corsi di Aerografo" />
				       <a href="http://www.alexlorenzi.com/corsi-di-aerografo/" class="button">Corsi di Aerografo</a>
				    </li>
				 </ul>	 
			</section>      
			<section class="novita">
				<div class="wrapper">		
					<h2>Novità</h2>	
					<div class="row">																	
						<?php			
						$custom_query = new WP_Query( array( 
							'category_name' => 'novita',
							'order'     => 'DESC',
							'posts_per_page' => 4
						));	
						?>
			               
			            <?php if (have_posts()) : while ( $custom_query->have_posts() ) : $custom_query->the_post() ?>			   					
		     				<?php if (has_post_thumbnail()) { ?>
		    					<div class="col-1-4"><div class="news2">		
									<?php 
										$imgID  = get_post_thumbnail_id($post->ID);
										$imgAlt = get_post_meta($imgID,'_wp_attachment_image_alt', true); 
									?>
			        				
			    					<a class="news-image" href="<?php echo $imgAlt; ?>">
			        					<?php //the_post_thumbnail('thumbnail'); ?>
			        					<?php the_post_thumbnail('big-thumb'); ?>
			        					<?php //the_post_thumbnail('medium'); ?>
			        					<?php //the_post_thumbnail('thumbnail', 'title='.the_title()); ?>
			        				</a>
			        				<div class="date-content">
										<div class="date">
											<span><?php echo get_the_date('d'); ?></span><span class="divider">/</span><span><?php echo get_the_date('m'); ?></span><span class="divider">/</span><span><?php echo get_the_date('Y'); ?></span>
										</div>
										<div class="content"><?php the_content(); ?></div>	
			        				</div>        				
		   						</div></div>	
		    				<?php } ?>						
			            <?php endwhile; endif; ?>
					</div>
				</div>
		   	</section>  	
			<!--section class="instagram">
				<div class="wrapper">
					<h2>Instagram</h2>
					<?php echo do_shortcode( '[instagram-feed]' ); ?>
				</div>
			</section-->
			<section id="intro" class="intro">
				<div class="wrapper">							
					<h1><a href="">Un artista, due linguaggi</a></h1>            
	
					<div id="decorazioni" class="decorazioni">
					   <a href="/dipinti-murali/"><img src="<?php echo get_template_directory_uri(); ?>/images/testaGreca_small.jpg" width="80" /></a>
					   <h2><a href="/dipinti-murali/">Decorazioni e Dipinti</a></h2>
					   <p>Come pittore, mentre realizzo 
					       <a href="http://www.alexlorenzi.com/affreschi/">affreschi</a>, 
					       <a href="http://www.alexlorenzi.com/murales/">murales</a>, 
					       <a href="http://www.alexlorenzi.com/trompe-loeil/">trompe l’oeil</a>, 
					       <a href="http://www.alexlorenzi.com/quadri/">dipinti</a>, 
					       <a href="http://www.alexlorenzi.com/decorazioni-su-mobili/">decorazioni su mobili</a> e
					       <a href="http://www.alexlorenzi.com/ornamenti-su-pareti/">ornamenti</a>, 
					       sento intensamente l'influenza della cultura italiana e la mia parte artistica e’ più rivolta ad un atteggiamento classico.</p>
					   <p>Guarda la nuova serie <a href="http://www.alexlorenzi.com/collezione-quadri-navigator/">Navigator</a>.</p>
					   <!--p><a href="http://www.alexlorenzi.com/decorazioni-e-dipinti/" class="button">Esplora</a></p-->
					</div>
				
					<div id="kustomite" class="kustomite">
					   <a href="/kustomite/"><img src="<?php echo get_template_directory_uri(); ?>/images/kustomite_small.jpg" width="80" /></a>
					   <h2><a href="/kustomite/">Kustomite</a></h2>
					   <p>Come aerografista, l’influenza americana predomina. Mentre realizzo aerografie su 
					       <a href="http://www.alexlorenzi.com/aerografie-su-carrozzerie-auto-moto/">carrozzerie</a>, 
					       <a href="http://www.alexlorenzi.com/aerografie-su-caschi/">caschi</a>, 
					       <a href="http://www.alexlorenzi.com/aerografie-su-giubbotti-tshirts/">giubbotti e T-shirts</a>, 
					       il pittore in me diventa un “trasformatore” che con la sua creativita’ tramuta quei singoli oggetti “comuni” in oggetti “originali ed unici: in una sola parola …kustom!</p>
					   <!--p><a href="http://www.alexlorenzi.com/kustomite/" class="button">Esplora</a></p-->
					</div>
				</div>
			</section>   
        </div>		
		<div class="navigatorLink">
			<a href="http://www.alexlorenzi.com/collezione-quadri-navigator/" title="Vai alla collezione Navigator"><img src="<?php echo get_template_directory_uri().'/images/Navigator-logo-glow-2.png'; ?>" alt="Navigator logo" /></a>
		</div>	
	</div>

	<?php require('includes/tiles.php'); ?>
</div>

<?php get_footer(); ?>