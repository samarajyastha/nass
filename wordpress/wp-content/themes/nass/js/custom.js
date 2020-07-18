const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function () {
	if (this.matchMedia("(min-width: 768px)").matches) {
		$dropdown.hover(
			function () {
				const $this = $(this);
				$this.addClass(showClass);
				$this.find($dropdownToggle).attr("aria-expanded", "true");
				$this.find($dropdownMenu).addClass(showClass);
			},
			function () {
				const $this = $(this);
				$this.removeClass(showClass);
				$this.find($dropdownToggle).attr("aria-expanded", "false");
				$this.find($dropdownMenu).removeClass(showClass);
			}
		);
	} else {
		$dropdown.off("mouseenter mouseleave");
	}
	
});



$(document).ready(function () {
	$(".carousel-inner .carousel-item").first().addClass("active");
	$(".carousel-indicators li").first().addClass("active");
	$(".owl-academic").owlCarousel({
		loop: true,
		margin: 30,
		autoplay: false,
		dots: true,
		dotsEach: true,
		lazyLoad: true,

		responsive: {
			0: {
				items: 1,
			},
			768: {
				items: 2,
			},
			1000: {
				items: 3,
			},
		},
	});

	$(".owl-news").owlCarousel({
		loop: true,
		margin: 30,
		autoplay: false,
		dots: true,
		dotsEach: true,
		lazyLoad: true,

		responsive: {
			0: {
				items: 1,
			},
			768: {
				items: 2,
			},
			1000: {
				items: 3,
			},
		},
	});

	$(".owl-testimonial").owlCarousel({
		loop: true,
		responsive: false,
		autoplay: true,
		dots: false,
		lazyLoad: true,

		responsive: {
			0: {
				items: 1,
			},
			768: {
				items: 1,
			},
			1000: {
				items: 1,
			},
		},
	});
});

var $makeCenter = $(".header-right");
$(window).resize(function () {
	if (window.innerWidth <= 996) $makeCenter.addClass("text-center");
	else $makeCenter.removeClass("text-center");
});

$(".header").on("click", ".search-toggle", function (e) {
	var selector = $(this).data("selector");

	$(selector).toggleClass("show").find(".search-input").focus();
	$(this).toggleClass("active");

	e.preventDefault();
});

$(function () {
	$('a[href="#search"]').on("click", function (event) {
		event.preventDefault();
		$("#search").addClass("open");
		$('#search > form > input[type="search"]').focus();
	});

	$("#search, #search button.close").on("click keyup", function (event) {
		if (
			event.target == this ||
			event.target.id == "btnclose" ||
			event.keyCode == 27
		) {
			$(this).removeClass("open");
		}
	});
});

$(".carouselTicker").carouselTicker({
	// animation speed
	speed: 2,

	// animation delay
	delay: 30,

	// RTL or LTR
	reverse: false,
});
