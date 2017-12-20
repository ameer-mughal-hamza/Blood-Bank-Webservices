$(function() {

	$(window).on("load resize", function(){
		$('.fill-screen').css("height", window.innerHeight);
	});

	// add Bootstrap's scrollspy
	$('body').scrollspy({
		target: '.navbar'
	});
	
	// smooth scrolling
	$('nav a').bind('click', function() {
		$('html, body').stop().animate({
			scrollTop: $(($this).attr('href')).offset().top
		}, 1500, 'easyInOutExpo');
		event.preventDefault();
	});

	$('.carousel').carousel({
      interval: 3000
    });

});