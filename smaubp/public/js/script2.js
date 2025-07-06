document.addEventListener('DOMContentLoaded', function() {

    // --- Helper function for selecting elements ---
    // This is a common pattern in vanilla JS to mimic jQuery's powerful selectors.
    // For single elements:
    const qs = (selector, parent = document) => parent.querySelector(selector);
    // For multiple elements:
    const qsa = (selector, parent = document) => parent.querySelectorAll(selector);

    // --- siteSticky Function ---
    // Note: The jQuery .sticky() plugin needs a vanilla JS replacement.
    // I'll leave a placeholder for it.
    const siteSticky = function() {
        // You need a vanilla JavaScript sticky header solution here.
        // A common approach is to listen to scroll events and add/remove a class.
        // For example:
        const stickyHeader = qs(".js-sticky-header");
        if (stickyHeader) {
            // A simple example for a fixed header when scrolled past a certain point
            // This is NOT a full replacement for the jQuery .sticky() plugin,
            // which often handles dynamic offsetting and more.
            // You might need to look for a specific 'vanilla js sticky header' library
            // or implement more complex logic.

            const observer = new IntersectionObserver(
                ([e]) => e.target.classList.toggle('is-sticky', e.intersectionRatio < 1),
                { threshold: [1] }
            );
            observer.observe(stickyHeader);

            // If you need it to be fixed at the top with 0px spacing,
            // you'd typically just apply CSS:
            // .js-sticky-header {
            //     position: sticky;
            //     top: 0;
            //     z-index: 1000; /* Ensure it stays on top */
            // }
            // or use a library that replicates jQuery.sticky's behavior.
        }
    };
    siteSticky();


    // --- siteMenuClone Function ---
    const siteMenuClone = function() {
        // Clone navigation
        qsa('.js-clone-nav').forEach(function(el) {
            const clonedEl = el.cloneNode(true); // true for deep clone
            clonedEl.setAttribute('class', 'site-nav-wrap'); // Set class
            qs('.site-mobile-menu-body').appendChild(clonedEl); // Append to mobile menu body
        });

        setTimeout(function() {
            let counter = 0;
            qsa('.site-mobile-menu .has-children').forEach(function(el) {
                const arrowCollapse = document.createElement('span');
                arrowCollapse.classList.add('arrow-collapse', 'collapsed'); // Add classes
                el.prepend(arrowCollapse); // Prepend the span

                arrowCollapse.setAttribute('data-toggle', 'collapse');
                arrowCollapse.setAttribute('data-target', '#collapseItem' + counter);

                const ulElement = qs('ul', el); // Find direct child <ul>
                if (ulElement) { // Ensure ulElement exists before manipulating
                    ulElement.setAttribute('class', 'collapse'); // Set class
                    ulElement.setAttribute('id', 'collapseItem' + counter);
                }

                counter++;
            });
        }, 1000); // This setTimeout is a bit of a hack; consider if it's truly needed or if a mutation observer is better.

        // Toggle arrow-collapse active class and Bootstrap collapse (if used)
        document.body.addEventListener('click', function(e) {
            if (e.target.classList.contains('arrow-collapse')) {
                const target = e.target;
                const collapseElement = qs('.collapse', target.closest('li')); // Find the collapse element within the closest li
                if (collapseElement && collapseElement.classList.contains('show')) {
                    target.classList.remove('active');
                } else {
                    target.classList.add('active');
                }
                e.preventDefault();
            }
        });

        // Window resize handling
        window.addEventListener('resize', function() {
            const w = window.innerWidth;
            const body = qs('body');

            if (w > 768) {
                if (body.classList.contains('offcanvas-menu')) {
                    body.classList.remove('offcanvas-menu');
                }
            }
        });

        // Toggle mobile menu
        document.body.addEventListener('click', function(e) {
            if (e.target.classList.contains('js-menu-toggle')) {
                e.preventDefault();
                const body = qs('body');
                const menuToggle = e.target;

                if (body.classList.contains('offcanvas-menu')) {
                    body.classList.remove('offcanvas-menu');
                    menuToggle.classList.remove('active');
                } else {
                    body.classList.add('offcanvas-menu');
                    menuToggle.classList.add('active');
                }
            }
        });

        // Click outside offcanvas to close
        document.addEventListener('mouseup', function(e) {
            const container = qs(".site-mobile-menu");
            // Check if the click target is NOT the container and NOT a descendant of the container
            if (container && !container.contains(e.target)) {
                const body = qs('body');
                if (body.classList.contains('offcanvas-menu')) {
                    body.classList.remove('offcanvas-menu');
                }
            }
        });
    };
    siteMenuClone();

});

//-----------------------------------
(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	var carousel = function() {
		$('.home-slider').owlCarousel({
	    loop:true,
	    autoplay: true,
	    margin:0,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:true,
	    dots: true,
	    autoplayHoverPause: false,
	    items: 1,
	    navText : ["<span class='ion-ios-arrow-back'></span>","<span class='ion-ios-arrow-forward'></span>"],
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:1
	      },
	      1000:{
	        items:1
	      }
	    }
		});

	};
	carousel();

})(jQuery);

// --------------------------------------

window.addEventListener('load', () => {
  var $grid = $('.portfolio-container').isotope({
      itemSelector: '.portfolio-item',
      // layoutMode: 'fitColumns',
      // percentPosition: true,
      // masonry: {
      //     columnWidth: 100
      // }
  });
  // layout Isotope after each image loads
//   $grid.imagesLoaded().progress(function () {
//       $grid.isotope('layout');
//   });
});

//  -------------------------
//  Table


(function ($) {
	"use strict";
	$('.column100').on('mouseover',function(){
		var table1 = $(this).parent().parent().parent();
		var table2 = $(this).parent().parent();
		var verTable = $(table1).data('vertable')+"";
		var column = $(this).data('column') + ""; 

		$(table2).find("."+column).addClass('hov-column-'+ verTable);
		$(table1).find(".row100.head ."+column).addClass('hov-column-head-'+ verTable);
	});

	$('.column100').on('mouseout',function(){
		var table1 = $(this).parent().parent().parent();
		var table2 = $(this).parent().parent();
		var verTable = $(table1).data('vertable')+"";
		var column = $(this).data('column') + ""; 

		$(table2).find("."+column).removeClass('hov-column-'+ verTable);
		$(table1).find(".row100.head ."+column).removeClass('hov-column-head-'+ verTable);
	});
    

})(jQuery);