function fullscreen(){
	$('.main-head').css('height',$(window).height())
}
$(document).ready(function() {

	$("#portfolio_grid").mixItUp();
	fullscreen();
	$(".s-portfolio li").click(function(){
		$(".s-portfolio li").removeClass("active");
		$(this).addClass("active");
	})
	$('.main-head').parallax({imageSrc: 'http://wlen.test/wp-content/themes/lesson/img/bg.jpg'});
	$(".top-text h1").animated("fadeInDown","fadeOutUp")
	$(".top-text p, .section-header").animated("fadeInUp","fadeOutDown")
	$('.popup').magnificPopup({type:'image'})
	$('.popup-content').magnificPopup({type:'inline'})
	$(".animation-1").animated("flipInY","flipOutY")
	$(".animation-2").animated("fadeInLeft","fadeOutLeft")
	$(".animation-3").animated("fadeInRight","fadeOutRigh")
	$(".left .resume-item").animated("fadeInLeft","fadeOutLeft")
	$(".right .resume-item").animated("fadeInRight","fadeOutRigh")
	$('.portfolio-item').each(function(i) {
		$(this).find(".popup-content").attr("href", "#work_"+i);
		$(this).find(".port-descr").attr("id", "work_"+i);
	});
	$("input,select,textarea").not("[type=submit]").jqBootstrapValidation()
	$(".top-mnu a[href*='#']").mPageScroll2id();
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
	$(".top-text").css("opacity", "1");
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
