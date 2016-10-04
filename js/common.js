function fullscreen(){
	$('.main-head').css('height',$(window).height())
}
$(document).ready(function() {
	fullscreen();
	$('.main-head').parallax({imageSrc: 'img/bg.jpg'});
	$(".top-text h1").animated("fadeInDown","fadeOutUp")
	$(".top-text p, .section-header").animated("fadeInUp","fadeOutDown")
	$('.popup').magnificPopup({type:'image'})
	$(".animation-1").animated("flipInY","flipOutY")
	$(".animation-2").animated("fadeInLeft","fadeOutLeft")
	$(".animation-3").animated("fadeInRight","fadeOutRigh")
	$(".left .resume-item").animated("fadeInLeft","fadeOutLeft")
	$(".right .resume-item").animated("fadeInRight","fadeOutRigh")
});
$(window).resize(function(){
	fullscreen();
})
// preloader
$(window).load(function() { 
	$(".loader-inner").fadeOut(); 
	$(".loader").delay(400).fadeOut("slow"); 
});

//sendwich
$(".sandwich").click(function() {
  $(".sandwich").toggleClass("active");
});
//Закрывать меню прти клике на пункт меню
$(".top-mnu ul a").click(function(){
	$(".top-mnu").fadeOut(600)
	$(".sandwich").toggleClass("active");
}).append('<span>');
//allscreen dark menu by click on .toggle-mnu
$(".toggle-mnu").on('click', function() {
	if ($(".top-mnu").is(":visible")){
		$(".top-text").removeClass("h-opacity")
		$(".top-mnu").fadeOut(600)
		$('.top-mnu li a').removeClass("fadeInUp animated")
	} else {
		$(".top-text").addClass("h-opacity")
		$(".top-mnu").fadeIn(600)
		$('.top-mnu li a').addClass("fadeInUp animated")
	}
})
