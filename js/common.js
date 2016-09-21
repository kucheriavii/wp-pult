function fullscreen(){
	$('.main-head').css('height',$(window).height())
}
$(document).ready(function() {
	fullscreen();
	$('.main-head').parallax({imageSrc: 'img/bg.jpg'});
});
$(window).resize(function(){
	fullscreen();
})
// preloader
$(window).load(function() { 
	$(".loader-inner").fadeOut(); 
	$(".loader").delay(400).fadeOut("slow"); 
});