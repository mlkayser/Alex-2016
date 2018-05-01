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
      <nav class="navigation">
         <ul>
            <li class="home-link"><a href="http://www.alexlorenzi.com" class="active">Home</a></li>
            <li class="decorazioni-link"><a href="http://www.alexlorenzi.com/category/decorazioni-e-dipinti">Decorazioni e Dipinti</a>
                  <ul class="submenu">
                  <li><a href="http://www.alexlorenzi.com/category/affreschi/">Affreschi</a></li>
                  <li><a href="http://www.alexlorenzi.com/category/su-mobili/">Decorazioni su Mobili</a></li>
                  <li><a href="http://www.alexlorenzi.com/category/quadri/">Dipinti</a></li>
                   <li><a href="http://www.alexlorenzi.com/category/navigator/">Navigator</a></li>
                 <li><a href="http://www.alexlorenzi.com/category/murales/">Murales</a></li>
                  <li><a href="http://www.alexlorenzi.com/category/su-pareti/">Ornamenti</a></li>
                  <li><a href="http://www.alexlorenzi.com/category/trompe-loeil/">Trompe L'Oeil</a></li>
               </ul>
            </li>
            <li class="kustomite-link"><a href="http://www.alexlorenzi.com/category/kustomite">Kustomite</a>
                <ul class="submenu">
                  <li><a href="http://www.alexlorenzi.com/category/moto/">Auto e Moto</a></li>
                  <li><a href="http://www.alexlorenzi.com/category/caschi/">Caschi</a></li>
                  <li><a href="http://www.alexlorenzi.com/category/giubbotti-tshirts/">Giubbotti e Tshirts</a></li>
               </ul>              
            </li>
            <li class="corsi-link"><a href="http://www.alexlorenzi.com/corsi-di-aerografo/">Corsi di Aerografo</a></li>
            <li class="bio-link"><a href="http://www.alexlorenzi.com/biografia/">Biografia</a></li>
         </ul>
         <a href="#" id="pull" class="pull"><i class="fa fa-bars"></i> Menu</a>
      </nav>
   </header>  
