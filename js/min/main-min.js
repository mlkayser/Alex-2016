jQuery(function($){function e(e){var l=$(".slider li:visible");l.fadeOut();var i;e?(i=l.prev(".slide"),i.length||(i=$(".slider .slide:last-child"))):(i=l.next(".slide"),i.length||(i=$(".slider .slide:eq(0)").first())),i.fadeIn()}$("#search_revealer").on("click",function(){$(this).toggleClass("close"),$("#search").toggle().find("#s").focus()}),$("#menu_revealer").on("click",function(){$(this).toggleClass("icon_close icon_menu"),$("#menu_container").slideToggle("slow")}),$(".menu-item-has-children").prepend('<div class="clickable open"></div>'),$(".clickable").on("click",function(){$(this).siblings(".sub-menu").slideToggle("slow").end().toggleClass("open").toggleClass("close")}),$("html").on("touchstart",function(){$(".menu-item-has-children>a").click(function(e){e.preventDefault(),$(this).click(function(){var e=$(this).attr("href");window.location.href=e})})}),$('<div class="slider-control previous">&lt;</div><div class="slider-control next">&gt;</div>').appendTo(".slider"),$(".slider .slide:gt(0)").hide();var l=setInterval(e,7e3);$(".slider-control.next").click(function(){clearInterval(l),e(),l=setInterval(e,7e3),window.console.log("next clicked")}),$(".slider-control.previous").click(function(){clearInterval(l),e("back"),l=setInterval(e,7e3),window.console.log("prev clicked")}),$(".navigator-video .video").mouseenter(function(){clearInterval(l),window.console.log("video clicked")});var i=$("#pull"),n=$("nav > ul > li:not(:first-child)");$(i).on("click",function(e){e.preventDefault(),n.slideToggle("slow"),i.find("i").toggleClass("fa-bars").toggleClass("fa-close"),$("footer").slideToggle()}),$(window).resize(function(){$(window).width()>320&&n.is(":hidden")&&n.removeAttr("style")})});