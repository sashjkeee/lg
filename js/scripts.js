$(document).ready(function() {
	sky();
	// TweenMax.to($('#bg1'), 9, {css:{backgroundPosition: "-198 50px"}, repeat:-1, ease:Linear.easeNone});
	var prefix = $('.prefix').val();
	var mobile = navigator.userAgent.toLowerCase().match(/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i);
	if(mobile != null) {
		$('html').css('width', window.innerWidth + 'px');
	} else {
		$(".scroll").each(function() {
			var block = $(this);
			$(window).scroll(function() {
				var top = block.offset().top;
				var bottom = block.height()+top;
				top = top - $(window).height();
				var scroll_top = $(this).scrollTop();
				var block_center = block.offset().top + (block.height() / 2);
				var screen_center = scroll_top + ($(window).height() / 2);
				if(block.height() < $(window).height()) {
					if ((scroll_top > (top-(block.height()/2))) && ((scroll_top < bottom+(block.height()/2))) && (scroll_top + $(window).height() > (bottom-(block.height()/2))) && (scroll_top < (block.offset().top+(block.height()/2)))) {
						if (!block.hasClass("animated")) {
							block.addClass("animated");
						}
					} else {
						if((block.offset().top + block.height() < scroll_top) || (block.offset().top > (scroll_top + $(window).height()))) {
							block.removeClass("animated");
						}
					}
				} else {
					if ((scroll_top > top) && (scroll_top < bottom) && (Math.abs(screen_center - block_center) < (block.height() / 4))) {
						if (!block.hasClass("animated")) {
							block.addClass("animated");
						}
					} else {
						if((block.offset().top + block.height() < scroll_top) || (block.offset().top > (scroll_top + $(window).height()))) {
							block.removeClass("animated");
						}
					}
				}
			});
		});
		$('head').append('<link rel="stylesheet" href="'+prefix+'css/animation.css" />');
	}
});
function sky() {
	var now = parseInt($('.img.sky').attr('data-sky'));
	var duration = 3000 * 10;
	if(now == 2) {
		var next = 1;
	} else if(now == 1) {
		var next = 2;
	}
	var left = $('.img .sky2').width();
	$('.img .sky'+now).animate({
		'left': '0px'
	}, 0);
	$('.img .sky'+next).animate({
		'left': left
	}, 0);
	$('.img .sky'+now).animate({
		'left': -left
	}, duration, 'linear');
	$('.img .sky'+next).animate({
		'left': '0px'
	}, duration, 'linear', function() {
		$('.img .sky').attr('data-sky', next);
		sky();
	});
}