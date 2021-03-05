jQuery(document).ready(function ($) {

	$(".logo-carousel").owlCarousel({
		items: 6,
		nav: false,
		dots: true,
		autoplay: true,
		loop: true,
		margin: 10,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
			},
			480: {
				items: 1,
				margin: 15,
			},
			768: {
				items: 2,
				margin: 30,
			},
			992: {
				items: 2,
				margin: 40,
			},
			1200: {
				items: 5
			}
		}
	});

	$(".testimonial-carousel").owlCarousel({
		items: 3,
		nav: false,
		dots: true,
		autoplay: true,
		loop: true,
		margin: 60,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
			},
			480: {
				items: 1,
			},
			768: {
				items: 2,
				margin: 30,
			},
			992: {
				items: 2,
				margin: 40,
			},
			1200: {
				items: 3
			}
		}
	});

	$('.mobile-menu').on('click', function () {
		$('.humbergur-menu').addClass('open');
	});

	$('.menu-close').on('click', function () {
		$('.humbergur-menu').removeClass('open');
	});

	$('.main-mobile-menu .header-btn').on('click', function () {
		$('.humbergur-menu').removeClass('open');
	});


	$('p > img').unwrap();
	$('p > a').unwrap();


	$("#form-btn,#form-btn-two,#form-btn-three,#form-btn-four").on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $("#colophon").offset().top - 90
		}, 1000);
	});


});




// window.onscroll = function () { myFunction() };

// var header = document.getElementById("myHeader");
// var sticky = header.offsetTop;

// function myFunction() {
// 	if (window.pageYOffset > sticky) {
// 		header.classList.add("sticky");
// 	} else {
// 		header.classList.remove("sticky");
// 	}
// }
