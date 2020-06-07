/**
 * jQuery Unveil
 * A very lightweight jQuery plugin to lazy load images
 * http://luis-almeida.github.com/unveil
 *
 * Licensed under the MIT license.
 * Copyright 2013 Luís Almeida
 * https://github.com/luis-almeida
 */

;(function($) {

  $.fn.unveil = function(threshold, callback) {

    var $w = $(window),
        th = threshold || 0,
        retina = window.devicePixelRatio > 1,
        attrib = retina? "data-src-retina" : "data-src",
        images = this,
        loaded;

    this.one("unveil", function() {
      var source = this.getAttribute(attrib);
      source = source || this.getAttribute("data-src");
      if (source) {
        this.setAttribute("src", source);
        if (typeof callback === "function") callback.call(this);
      }
    });

    function unveil() {
      var inview = images.filter(function() {
        var $e = $(this);
        if ($e.is(":hidden")) return;

        var wt = $w.scrollTop(),
            wb = wt + $w.height(),
            et = $e.offset().top,
            eb = et + $e.height();

        return eb >= wt - th && et <= wb + th;
      });

      loaded = inview.trigger("unveil");
      images = images.not(loaded);
    }

    $w.on("scroll.unveil resize.unveil lookup.unveil", unveil);

    unveil();

    return this;

  };

})(window.jQuery || window.Zepto);

jQuery.browser = {};
(function () {
    jQuery.browser.msie = false;
    jQuery.browser.version = 0;
    if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
        jQuery.browser.msie = true;
        jQuery.browser.version = RegExp.$1;
    }
})();

/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

	// Use this variable to set up the common and page specific functions. If you
	// rename this variable, you will also need to rename the namespace below.
	var Caravan = {
		// All pages
		'common': {
			init: function() {
				// JavaScript to be fired on all pages
			
				// smooth scroll
				$('a.scroll').on('click',function(e) {
					e.preventDefault();
					
					var target = this.hash;
					var $target = $(target);
					var offset = $target.offset().top;
					if ($(this).data('offset') || $(this).data('offset') === 0) {
						offset = offset - $(this).data('offset');
					} else if ($('.navbar-fixed-top').length > 0 && $(window).width() > 768) {
						offset = offset - $('.navbar-fixed-top').height();
					}

					$('html, body').stop().animate({
						'scrollTop': offset
					}, 900, 'swing');
				});
				
				// lazy load background images
				$('img.bg').unveil(200, function() {
					$(this).load(function() {
						$(this).parent().css('background-image','url(' + this.src + ')');
					});
				}).trigger('unveil');
				
				// all locations
				$('.overlay').show();

				$('.link-locations').on('click', function(e) {
					e.preventDefault();
					$('.overlay').addClass('show');
					$('html').addClass('noscroll');
				});

				$('.overlay').on('click', function(event){
					if( $(event.target).is('.overlay') ) { 
						$('.overlay').removeClass('show');
						$('html').removeClass('noscroll');
						event.preventDefault();
					}
				}).on('touchmove', function(event) {
					event.preventDefault();
				});	
				
			},
			finalize: function() {

			}
		},
		'restaurant': {
			init: function() {

				var waypoints = $('#intro').waypoint(function(direction) {
					// to stop flicker when navbar goes from absolute to fixed
					// first hide
					// only if wider than 768
					if ($(window).width() > 768) {
						
						var $el = $('.navbar-fixed-top').hide();
						// then toggle the element's class on a delay before showing it again
						setTimeout(function() {
							if (direction === 'down') {
								$el.removeClass('navbar-transparent');
							} else {
								$el.addClass('navbar-transparent');
							}
							$el.show();
						}, 100);
					}
				
				}, {
					offset: -$('.navbar-fixed-top').height()
				});
				waypoints = $('.link-to-next').waypoint(function(direction) {
					if (direction === 'down') {
						$('body').addClass('show-navigation');
					} else {
						$('body').removeClass('show-navigation');
					}
				});
			},
			finalize: function() {
				if ($('#popup').length) {
					$.magnificPopup.open({
						items: {
							src: '#popup',
							type: 'inline'
						}
					});
				}
			  $('.owl-carousel').owlCarousel({
				  items: 1,
				  loop: true,
				  dots: false,
				  nav: true,
				  navText: ['<span class="sr-only">Previous</span>','<span class="sr-only">Next</span>'],
				  lazyLoad: true,
					autoplay:false,
					autoplayTimeout:10000,
					autoplayHoverPause:false
			  });
			}
		}
	};
	
	// The routing fires all common scripts, followed by the page specific scripts.
	// Add additional events for more control over timing e.g. a finalize event
	var UTIL = {
		fire: function(func, funcname, args) {
			var fire;
			var namespace = Caravan;
			funcname = (funcname === undefined) ? 'init' : funcname;
			fire = func !== '';
			fire = fire && namespace[func];
			fire = fire && typeof namespace[func][funcname] === 'function';

			if (fire) {
				namespace[func][funcname](args);
			}
		},
		loadEvents: function() {
			// Fire common init JS
			UTIL.fire('common');

			// Fire page-specific init JS, and then finalize JS
			$.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
				UTIL.fire(classnm);
				UTIL.fire(classnm, 'finalize');
			});

			// Fire common finalize JS
			UTIL.fire('common', 'finalize');
		}
	};

	// Load Events
	$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
