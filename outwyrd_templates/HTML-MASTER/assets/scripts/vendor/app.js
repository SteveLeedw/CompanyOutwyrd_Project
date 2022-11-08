$(document).ready(function () {
	// ------------------------------------------------------------------------------ //
	// Navigation
	// ------------------------------------------------------------------------------ //
	$(document).ready(function () {
		$('#nav-icon').click(function () {
			$(this).toggleClass('open');
		});
	});



	/*=============================
	  Serach Bar
 	 =============================*/

	$("li.search > a", this).on("click", function (event) {
		event.preventDefault();
		$(".top-search").slideToggle("4000");
		$(this).find('i').toggleClass('fa-times');
	});

	// ------------------------------------------------------------------------------ //
	// DROPDOWN SELECT
	// ------------------------------------------------------------------------------ //

	$('.select_option').niceSelect();

	$(document).ready(function () {
		$('a[href^="#demo"]').on('click', function (e) {
			e.preventDefault();
			var target = this.hash;
			var $target = $(target);

			//scroll con hash
			$('html, body').animate({
				'scrollTop': $target.offset().top
			}, 1000, 'swing', function () {
				window.location.hash = target;
			});

			//scroll sin hash
			$('html, body').animte({
				'scrollTop': $targer.offset().top
			}, 1000, 'swing');
		});
	});




	// ------------------------------------------------------------------------------ //
	// Color plate
	// ------------------------------------------------------------------------------ //
	$('.color-plate').on('click', function () {
		var name = $(this).attr('data-color');
		$('link[id="skin"]').attr('href', '/css/themes/' + name + '.css');
		$('.btn').addClass('btn-' + name);
	});

	$('.panel-option').on('click', function () {
		$('.option-panel').toggleClass('option-panel-collased');

	});

	//SMOOTH SCROLL MENU
	// $(document).ready(function () {
	// 	$("a").on('click', function (event) {
	// 		if (this.hash !== "") {
	// 			event.preventDefault();

	// 			var hash = this.hash;

	// 			$('html, body').animate({
	// 				scrollTop: $(hash).offset().top
	// 			}, 1000, function () {
	// 				window.location.hash = hash;
	// 			});
	// 		}
	// 	});
	// });

	// ------------------------------------------------------------------------------ //
	// NAVBAR
	// ------------------------------------------------------------------------------ //
	$(window).scroll(function () {
		if ($(this).scrollTop() > 80) {

			$(".navbar-soft").addClass("fixed-top");
		} else {
			$(".navbar-soft").removeClass("fixed-top");

		}
	});

	// ------------------------------------------------------------------------------ //
	// FORM PRICE
	// ------------------------------------------------------------------------------ //
	$(".price-range").ionRangeSlider({
		skin: "big",
		type: "double",
		grid: true,
		min: 0,
		max: 10000,
		from: 1300,
		to: 7600,
		prefix: "$"
	});
	// ------------------------------------------------------------------------------ //
	//Counter
	// ------------------------------------------------------------------------------ //    
	if ($(".count").length) {
		$(window).on("scroll.myCount", function () {
			var h_window_1 = $(window).height() * 0.70,
				p_scroll = $('.count').offset().top,
				get_scroll = p_scroll - h_window_1;
			if ($(document).scrollTop() > get_scroll) {
				$(window).off("scroll.myCount");
				$('.count-value').each(function () {
					$(".start-count", this).text('0');
					var data_count = $(this).data("count");
					$(this).prop('Counter1', 0).animate({
						Counter1: data_count
					}, {
						duration: 5000,
						easing: 'swing',
						step: function (now1) {
							$(".start-count", this).text(Math.ceil(now1));
						}
					});
				});
			}
		});
	}

	// ------------------------------------------------------------------------------ //
	// CAROUSEL OPACITY
	// ------------------------------------------------------------------------------ //

	if ($('.slider__property-carousel-opacity').length) {
		$('.slider__property-carousel-opacity').owlCarousel({
			loop: true,
			dots: false,
			nav: true,
			center: true,
			// items: 1,
			rtl: false,
			autoplayHoverPause: false,
			autoplay: true,
			smartSpeed: 1200,
			navText: [
				'<i class="fa fa-angle-left"></i>',
				'<i class="fa fa-angle-right"></i>'
			],
			responsive: {
				0: {
					items: 1,
					center: false
				},
				480: {
					items: 1,
					center: false
				},
				600: {
					items: 1,
					center: false
				},
				768: {
					items: 2
				},
				992: {
					items: 2
				},
				1200: {
					items: 2
				},
				1366: {
					items: 2
				},
				1400: {
					items: 2
				}
			}
		})
	}


	// ------------------------------------------------------------------------------ //
	// CAROUSEL LARGE
	// ------------------------------------------------------------------------------ //

	if ($('.slider__property-carousel-large').length) {
		$('.slider__property-carousel-large').owlCarousel({
			loop: true,
			dots: false,
			nav: true,
			rtl: false,
			autoplayHoverPause: false,
			autoplay: true,
			singleItem: true,
			smartSpeed: 1200,
			navText: [
				'<i class="fa fa-angle-left"></i>',
				'<i class="fa fa-angle-right"></i>'
			],
			responsive: {
				0: {
					items: 1,
					center: false
				},
				480: {
					items: 1,
					center: false
				},
				600: {
					items: 1,
					center: false
				},
				768: {
					items: 2
				},
				992: {
					items: 2
				},
				1200: {
					items: 1
				},
				1366: {
					items: 1
				},
				1400: {
					items: 1
				}
			}
		})
	}





	if ($('.slider__property-carousel-large').length) {
		$('.slider__property-carousel-large').owlCarousel({
			loop: true,
			dots: false,
			nav: true,
			rtl: false,
			autoplayHoverPause: false,
			autoplay: true,
			singleItem: true,
			smartSpeed: 1200,
			navText: [
				'<i class="fa fa-angle-left"></i>',
				'<i class="fa fa-angle-right"></i>'
			],
			responsive: {
				0: {
					items: 1,
					center: false
				},
				480: {
					items: 1,
					center: false
				},
				600: {
					items: 1,
					center: false
				},
				768: {
					items: 2
				},
				992: {
					items: 2
				},
				1200: {
					items: 1
				},
				1366: {
					items: 1
				},
				1400: {
					items: 1
				}
			}
		})
	}



	if ($('.slider__property-carousel').length) {
		$('.slider__property-carousel').owlCarousel({
			loop: true,
			dots: false,
			nav: true,
			rtl: false,
			autoplayHoverPause: false,
			autoplay: true,
			singleItem: true,
			smartSpeed: 1200,
			navText: [
				'<i class="fa fa-angle-left"></i>',
				'<i class="fa fa-angle-right"></i>'
			],
			responsive: {
				0: {
					items: 1,
					center: false
				},
				480: {
					items: 1,
					center: false
				},
				600: {
					items: 1,
					center: false
				},
				768: {
					items: 2
				},
				992: {
					items: 2
				},
				1200: {
					items: 2
				},
				1366: {
					items: 3
				},
				1400: {
					items: 3
				}
			}
		})
	}




	if ($('.homepage__property-carousel').length) {
		$('.homepage__property-carousel').owlCarousel({
			loop: true,
			dots: false,
			nav: true,
			rtl: false,
			autoplayHoverPause: false,
			autoplay: true,
			singleItem: true,
			smartSpeed: 1200,
			navText: [
				'<i class="fa fa-angle-left"></i>',
				'<i class="fa fa-angle-right"></i>'
			],
			responsive: {
				0: {
					items: 1,
					center: false
				},
				480: {
					items: 1,
					center: false
				},
				600: {
					items: 1,
					center: false
				},
				768: {
					items: 2
				},
				992: {
					items: 2
				},
				1200: {
					items: 2
				},
				1366: {
					items: 3
				},
				1400: {
					items: 3
				}
			}
		})
	}


	$(".product__filter").collapse();
	// ------------------------------------------------------------------------------ //
	// Testimonial
	// ------------------------------------------------------------------------------ //

	$('.testimonial').owlCarousel({
		loop: true,
		margin: 20,
		nav: false,
		dots: false,
		autoplay: true,
		// autoplayTimeout: 5000,
		navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		smartSpeed: 1200,
		autoHeight: true,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 2
			}
		}
	});


	$('.section__testimonial-wrap').owlCarousel({
		loop: true,
		margin: 20,
		nav: false,
		dots: false,
		autoplay: true,
		// autoplayTimeout: 5000,
		navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		smartSpeed: 1200,
		autoHeight: true,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});


	$('.recent__property-carousel').owlCarousel({
		loop: true,
		margin: 20,

		nav: true,
		dots: true,
		autoplay: true,
		// autoplayTimeout: 5000,
		navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		smartSpeed: 1200,
		autoHeight: true,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 1
			},
			600: {
				items: 2
			},
			768: {
				items: 2
			},
			992: {
				items: 2
			},
			1200: {
				items: 2
			},
			1366: {
				items: 3
			},
			1400: {
				items: 3
			}
		}
	});


	if ($('.featured__property-carousel').length) {
		$('.featured__property-carousel').owlCarousel({
			loop: true,
			margin: 30,
			dots: true,
			nav: false,
			rtl: false,
			autoplayHoverPause: false,
			autoplay: true,
			singleItem: true,
			smartSpeed: 1200,
			navText: [
				'<i class="fa fa-arrow-left"></i>',
				'<i class="fa fa-arrow-right"></i>'
			],
			responsive: {
				0: {
					items: 1,
					center: false
				},
				480: {
					items: 1,
					center: false
				},
				600: {
					items: 1,
					center: false
				},
				768: {
					items: 2
				},
				992: {
					items: 2
				},
				1200: {
					items: 2
				},
				1366: {
					items: 3
				},
				1400: {
					items: 3
				}
			}
		})
	}


	if ($('.similiar__property-carousel').length) {
		$('.similiar__property-carousel').owlCarousel({
			loop: true,
			margin: 30,
			dots: false,
			nav: false,
			rtl: false,
			autoplayHoverPause: false,
			autoplay: true,
			singleItem: true,
			smartSpeed: 1200,
			navText: [
				'<i class="fa fa-arrow-left"></i>',
				'<i class="fa fa-arrow-right"></i>'
			],
			responsive: {
				0: {
					items: 1,
					center: false
				},
				480: {
					items: 1,
					center: false
				},
				600: {
					items: 1,
					center: false
				},
				768: {
					items: 2
				},
				992: {
					items: 2
				},
				1200: {
					items: 3
				},
				1366: {
					items: 3
				},
				1400: {
					items: 3
				}
			}
		})
	}



	// sections background image from data background
	var pageSection = $(".parallax,.bg-img");
	pageSection.each(function () {

		if ($(this).attr("data-background")) {
			$(this).css("background-image", "url(" + $(this).data("background") + ")");
		}
	});


	// ------------------------------------------------------------------------------ //
	// ADVANCED FILTER
	// ------------------------------------------------------------------------------ //

	$('.advanced-filter').on('click', function () {
		if ($(this).find('.fa').hasClass('fa-minus-circle')) {
			$(this).find('.fa').removeClass('fa-minus-circle');
			$(this).find('.fa').addClass('fa-plus-circle');
		} else {
			$(this).find('.fa').removeClass('fa-plus-circle');
			$(this).find('.fa').addClass('fa-minus-circle');
		}
	});


	// ------------------------------------------------------------------------------ //
	// owl Detail property
	// ------------------------------------------------------------------------------ //
	$(document).ready(function () {

		let sync1 = $(".slider__image__detail-large");
		let sync2 = $(".slider__image__detail-thumb");
		let slidesPerPage = 4; //globaly define number of elements per page
		let syncedSecondary = true;

		sync1.owlCarousel({
			items: 1,
			slideSpeed: 2000,
			nav: true,

			autoplay: false,
			dots: false,
			loop: true,
			responsiveRefreshRate: 200,
			navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],

			// navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
		}).on('changed.owl.carousel', syncPosition);

		sync2
			.on('initialized.owl.carousel', function () {
				sync2.find(".owl-item").eq(0).addClass("current");
			})
			.owlCarousel({
				items: slidesPerPage,
				dots: false,
				nav: false,
				margin: 5,
				smartSpeed: 200,
				slideSpeed: 500,
				slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
				responsiveRefreshRate: 100,

				responsive: {
					0: {
						items: 4
					},
					480: {
						items: 4
					},
					600: {
						items: 4
					},
					1000: {
						items: 4
					}
				}
			}).on('changed.owl.carousel', syncPosition2);

		function syncPosition(el) {
			//if you set loop to false, you have to restore this next line
			//var current = el.item.index;

			//if you disable loop you have to comment this block
			let count = el.item.count - 1;
			let current = Math.round(el.item.index - (el.item.count / 2) - .5);

			if (current < 0) {
				current = count;
			}
			if (current > count) {
				current = 0;
			}

			//end block

			sync2
				.find(".owl-item")
				.removeClass("current")
				.eq(current)
				.addClass("current");
			let onscreen = sync2.find('.owl-item.active').length - 1;
			let start = sync2.find('.owl-item.active').first().index();
			let end = sync2.find('.owl-item.active').last().index();

			if (current > end) {
				sync2.data('owl.carousel').to(current, 100, true);
			}
			if (current < start) {
				sync2.data('owl.carousel').to(current - onscreen, 100, true);
			}
		}

		function syncPosition2(el) {
			if (syncedSecondary) {
				let number = el.item.index;
				sync1.data('owl.carousel').to(number, 100, true);
			}
		}

		sync2.on("click", ".owl-item", function () {
			// e.preventDefault();
			let number = $(this).index();
			sync1.data('owl.carousel').to(number, 300, true);
		});
	});


	// ------------------------------------------------------------------------------ //
	// SLIDER IMAGE WITH THUMB
	// ------------------------------------------------------------------------------ //

	$(document).ready(function () {

		let sync1 = $(".slider__image__detail-large-two");
		let sync2 = $(".slider__image__detail-thumb-two");
		let slidesPerPage = 4; //globaly define number of elements per page
		let syncedSecondary = true;

		sync1.owlCarousel({
			items: 1,
			slideSpeed: 2000,
			nav: true,

			autoplay: false,
			dots: false,
			loop: true,
			responsiveRefreshRate: 200,
			navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],

			// navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
		}).on('changed.owl.carousel', syncPosition);

		sync2
			.on('initialized.owl.carousel', function () {
				sync2.find(".owl-item").eq(0).addClass("current");
			})
			.owlCarousel({
				items: slidesPerPage,
				dots: false,
				nav: false,
				margin: 5,
				smartSpeed: 200,
				slideSpeed: 500,
				slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
				responsiveRefreshRate: 100,

				responsive: {
					0: {
						items: 4
					},
					480: {
						items: 4
					},
					600: {
						items: 4
					},
					1000: {
						items: 6
					}
				}
			}).on('changed.owl.carousel', syncPosition2);

		function syncPosition(el) {
			//if you set loop to false, you have to restore this next line
			//var current = el.item.index;

			//if you disable loop you have to comment this block
			let count = el.item.count - 1;
			let current = Math.round(el.item.index - (el.item.count / 2) - .5);

			if (current < 0) {
				current = count;
			}
			if (current > count) {
				current = 0;
			}

			//end block

			sync2
				.find(".owl-item")
				.removeClass("current")
				.eq(current)
				.addClass("current");
			let onscreen = sync2.find('.owl-item.active').length - 1;
			let start = sync2.find('.owl-item.active').first().index();
			let end = sync2.find('.owl-item.active').last().index();

			if (current > end) {
				sync2.data('owl.carousel').to(current, 100, true);
			}
			if (current < start) {
				sync2.data('owl.carousel').to(current - onscreen, 100, true);
			}
		}

		function syncPosition2(el) {
			if (syncedSecondary) {
				let number = el.item.index;
				sync1.data('owl.carousel').to(number, 100, true);
			}
		}

		sync2.on("click", ".owl-item", function () {
			// e.preventDefault();
			let number = $(this).index();
			sync1.data('owl.carousel').to(number, 300, true);
		});
	});



	// ------------------------------------------------------------------------------ //
	// Scroll To Top
	// ------------------------------------------------------------------------------ //
	$(window).scroll(function () {
		if ($(this).scrollTop() >= 50) {
			// If page is scrolled more than 50px
			$("#return-to-top").fadeIn(200); // Fade in the arrow
		} else {
			$("#return-to-top").fadeOut(200); // Else fade out the arrow
		}
	});
	$("#return-to-top").click(function () {
		// When arrow is clicked
		$("body,html").animate(
			{
				scrollTop: 0 // Scroll to top of body
			},
			500
		);
	});





	// ------------------------------------------------------------------------------ //
	// Gallery
	// ------------------------------------------------------------------------------ //
	// Filterizr initialization
	if ($('.filtr-container').length > 0) {
		$(function () {
			$('.filtr-container').filterizr(
				{
					delay: 1
				}
			);
		});
	}

	$('.filterizr-filter li').click(function () {
		$('.filterizr-filter li').removeClass('filtr-active');
		$(this).addClass('filtr-active');
	});
	$('.filterizr-sorting li').click(function () {
		$('.filterizr-sorting li').removeClass('filtr-active');
		$(this).addClass('filtr-active');
	});


	$('.show__more-button').on('click', function () {
		$('.show__more').toggleClass('visible');
	});




	$('#myTab a').on('click', function () {
		$(this).tab('show')
	})

});