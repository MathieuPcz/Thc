$(document).ready(function(){
	var widthWindow = $(window).width();
	var heightWindow = $(window).height();

	/*reglage taille ecran*/
	$('body').css('width','widthWindow');

	$('.container').css('width',widthWindow)
				   .css('height',heightWindow);

	/*defilement text*/
		$('.defilText').fadeOut(0).fadeIn(2000);
		$(function(){
	      setInterval(function(){
	         $(".defilText ul").animate({marginTop:-50},1500,function(){
	            $(this).css({marginTop:0}).find("li:last").after($(this).find("li:first"));
	         })
	      }, 4000);
	   });

	/*fixe color sur menu selectionné*/
		$('#firstMenu').addClass("activeMenu");
		$("nav a").click(function(e) {
		    e.preventDefault();
		    $("nav a").removeClass("activeMenu");
		    $(this).addClass("activeMenu");
		});

})