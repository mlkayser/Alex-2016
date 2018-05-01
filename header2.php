<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <!--link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" rel="shortcut icon"-->

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
   
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
   <link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,700,400italic' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
   
   <!--script src="js/vendor/modernizr-2.8.3.min.js"></script-->
	<?php wp_head(); ?>
      
</head>
<body <?php body_class(); ?>>

   <header>
      <nav class="navigation-main">
         <ul>
            <li class="home-link"><a href="http://www.alexlorenzi.com" class="active">Home</a></li>
            <li><a href="http://www.alexlorenzi.com/dipinti-murali/">Dipinti Murali</a>
                 <ul class="submenu">
	                 <li><a href="http://www.alexlorenzi.com/murales-e-trompe-loeil-per-piscine/">Piscine</a></li>
	                 <li><a href="http://www.alexlorenzi.com/murales-e-trompe-loeil-per-ristoranti-e-alberghi/">Ristoranti e Alberghi</a></li>
	                 <li><a href="http://www.alexlorenzi.com/dipinti-murali-per-attivita-commerciali/">Attività Commerciali</a></li>
	                 <li><a href="http://www.alexlorenzi.com/dipinti-murali-per-interni-abitazioni/">Abitazioni</a></li>
	                 <li><a href="http://www.alexlorenzi.com/dipinti-murali-per-esterni/">Esterni</a></li>
	                 <li><a href="http://www.alexlorenzi.com/murales/">Murales</a></li>
	                  <li><a href="http://www.alexlorenzi.com/trompe-loeil/">Trompe L'Oeil</a></li>
	                  <li><a href="http://www.alexlorenzi.com/affreschi/">Affreschi</a></li>
	                  <li><a href="http://www.alexlorenzi.com/ornamenti-su-pareti/">Ornamenti su pareti</a></li>
               </ul>
            </li>
           <li><a href="http://www.alexlorenzi.com/quadri-e-decorazioni/">Quadri e Decorazioni</a>
                 <ul class="submenu">
	                  <li><a href="http://www.alexlorenzi.com/ritratti-su-commissione/">Ritratti</a></li>
	                  <li><a href="http://www.alexlorenzi.com/riproduzioni/">Riproduzioni</a></li>
	                  <li><a href="http://www.alexlorenzi.com/quadri/">Quadri</a></li>
	                  <li><a href="http://www.alexlorenzi.com/collezione-quadri-navigator/">Collezione Navigator</a></li>
	                  <li><a href="http://www.alexlorenzi.com/decorazioni-su-mobili/">Decorazioni su Mobili</a></li>
 	                  <li><a href="http://www.alexlorenzi.com/armadi-dipinti-a-mano/">Armadi dipinti a mano</a></li>
              </ul>
            </li>
            <li><a href="http://www.alexlorenzi.com/kustomite">Kustomite</a>
                <ul class="submenu">
                  <li><a href="http://www.alexlorenzi.com/aerografie-su-carrozzerie-auto-moto/">Auto e Moto</a></li>
                  <li><a href="http://www.alexlorenzi.com/aerografie-su-caschi/">Caschi</a></li>
                  <li><a href="http://www.alexlorenzi.com/aerografie-su-giubbotti-tshirts/">Giubbotti e T-shirts</a></li>
               </ul>              
            </li>
            <li><a href="http://www.alexlorenzi.com/corsi-di-aerografo/">Corsi di Aerografo</a>
                <ul class="submenu">
                  <li><a href="/corsi-aerografia-base-intermedi-avanzati/">Base Intermedi Avanzati</a></li>
                  <li><a href="/corso-aerografia-kustom-art/">Kustom Art</a></li>
                  <li><a href="/corso-aerografia-nail-art/">Nail art</a></li>
                  <li><a href="/corso-pittura-trompe-loeil/">Trompe L'Oeil</a></li>
              </ul>              
            </li>
            <li><a href="">News</a>
                <ul class="submenu">
                  <li><a href="http://www.alexlorenzi.com/novita/">Novità</a></li>   
                  <li><a href="http://www.alexlorenzi.com/recensioni-e-interviste/navigator-dipinti-dedicati-alla-navigazione-e-al-mare-di-alex-lorenzi/">Recensione</a></li>  
                  <li><a href="http://www.alexlorenzi.com/biografia/">Biografia</a></li>
              </ul>              
            </li>
         </ul>
         <a href="#" id="pull" class="pull"><i class="fa fa-bars"></i> Menu</a>
      </nav>
   </header>  
