jQuery(function($) { 
//$(document).ready(function(){
    
    //---------------------- SEARCH --------------------------------//
    $("#search_revealer").on("click",function() {
       $(this).toggleClass('close');
       $("#search").toggle().find('#s').focus();
    });
    
    //---------------------- MENU REVEALTER --------------------------------//
    $("#menu_revealer").on("click",function() {
       $(this).toggleClass('icon_close icon_menu');
       $("#menu_container").slideToggle('slow');
    });
    
    //-------------------MOBILE NAVIGATION------------------------------//
    $('.menu-item-has-children').prepend('<div class="clickable open"></div>');
    
    $('.clickable').on("click", function() {
        $(this).siblings('.sub-menu').slideToggle('slow')
        .end().toggleClass('open').toggleClass('close');
    });
    
   //-------------------TOUCH SCREEN NAVIGATION------------------------------//
    $('html').on('touchstart',function(){
      var $link = $('.menu-item-has-children>a');
      $link.click(function(event) {
			event.preventDefault();
			    
         $(this).click(function() { //second click
           var href = $(this).attr('href');
           window.location.href = href;
         });
      }); 
    });

	//---------------------- SLIDER --------------------------------//	
	var buttons = '<div class="slider-control previous">&lt;</div><div class="slider-control next">&gt;</div>';
	$(buttons).appendTo('.slider');
	
	function slide(direction) {   
	
		// current slide
        var $currentSlide = $('.slider li:visible');
		$currentSlide.fadeOut();
	
		// define next slide	
		var $next;
		if ( !direction ) {
			$next = $currentSlide.next('.slide');
			if(!$next.length){ $next = $('.slider .slide:eq(0)').first(); }		
		} else {
			$next = $currentSlide.prev('.slide');
			if(!$next.length){ $next = $('.slider .slide:last-child'); }		
		}
				
		// show the slide
		$next.fadeIn();
	}
	
		// hide all slides but the first one
		$('.slider .slide:gt(0)').hide();
		
		// hide the <img> and make it a background image
		//var $currentSlide = $('.slider .slide:eq(0)');
		//$currentSlide.find('img').css('display','none');	
		//var url = $currentSlide.find('img').attr('src');
		//$currentSlide.css('background-image','url(' + url + ')');
		
		// initial call to slider
		var rotate = setInterval(slide, 7000);
		//var rotate;
		
	   // forward
	   $('.slider-control.next').click( function() { 
	   		clearInterval(rotate);
	   		slide();
	   		rotate = setInterval(slide, 7000);
	   		window.console.log("next clicked");
	   });

       // backward
		$('.slider-control.previous').click( function() { 
			clearInterval(rotate);
			slide('back');
			rotate = setInterval(slide, 7000);
			window.console.log("prev clicked");
		});

       // video playing
		$('.navigator-video .video').mouseenter( function() { 
			clearInterval(rotate);	
			window.console.log("video clicked");
		});

	//---------------------- MENU REVEALER --------------------------------//	
	var pull = $('#pull');
    var menu = $('nav > ul > li:not(:first-child)');
    //var menuHeight  = menu.height();
 
    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle('slow');   
        pull.find('i').toggleClass('fa-bars').toggleClass('fa-close');                
		$('footer').slideToggle();  
	});    

	$(window).resize(function(){
	    var w = $(window).width();
	    if(w > 320 && menu.is(':hidden')) {
	        menu.removeAttr('style');
	    }
	}); 
	
}); // END jquery function
