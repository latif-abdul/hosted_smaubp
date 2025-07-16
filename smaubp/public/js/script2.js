$(function() {
	var siteSticky = function() {

	if ($( ".js-sticky-header" ).parent().next().hasClass("hero")){
		$(".js-sticky-header").sticky({topSpacing:0});
	}
	else{
		$(".sticky-wrapper").addClass("is-sticky");
		$(".js-sticky-header").css({"position": "fixed", "top": "0px", "z-index": "auto"})
	}
	};
	siteSticky();

	var siteMenuClone = function() {

		$('.js-clone-nav').each(function() {
			var $this = $(this);
			$this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
		});


		setTimeout(function() {

			var counter = 0;
				$('.site-mobile-menu .has-children').each(function(){
					var $this = $(this);

					$this.prepend('<span class="arrow-collapse collapsed">');

					$this.find('.arrow-collapse').attr({
						'data-toggle' : 'collapse',
						'data-target' : '#collapseItem' + counter,
					});

					$this.find('> ul').attr({
						'class' : 'collapse',
						'id' : 'collapseItem' + counter,
					});

					counter++;

				});

				}, 1000);

		$('body').on('click', '.arrow-collapse', function(e) {
			var $this = $(this);
			if ( $this.closest('li').find('.collapse').hasClass('show') ) {
				$this.removeClass('active');
			} else {
				$this.addClass('active');
			}
			e.preventDefault(); 

			});

		$(window).resize(function() {
			var $this = $(this),
				w = $this.width();

			if ( w > 768 ) {
				if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		})

		$('body').on('click', '.js-menu-toggle', function(e) {
			var $this = $(this);
			e.preventDefault();

			if ( $('body').hasClass('offcanvas-menu') ) {
				$('body').removeClass('offcanvas-menu');
				$this.removeClass('active');
			} else {
				$('body').addClass('offcanvas-menu');
				$this.addClass('active');
			}
		}) 

		// click outisde offcanvas
		$(document).mouseup(function(e) {
			var container = $(".site-mobile-menu");
			if (!container.is(e.target) && container.has(e.target).length === 0) {
				if ( $('body').hasClass('offcanvas-menu') ) {
			$('body').removeClass('offcanvas-menu');
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
		// columnWidth: 100
		// }
	});
	// layout Isotope after each image loads
// $grid.imagesLoaded().progress(function () {
// $grid.isotope('layout');
// });
});

// -------------------------
// Table


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

//------------------------------------
// date picker
(function ($) {
	'use strict';
	/*==================================================================
		[ Daterangepicker ]*/
	try {
		$('.js-datepicker').daterangepicker({
			"singleDatePicker": true,
			"showDropdowns": true,
			"autoUpdateInput": false,
			locale: {
				format: 'DD/MM/YYYY'
			},
		});

		var myCalendar = $('.js-datepicker');
		var isClick = 0;

		$(window).on('click',function(){
			isClick = 0;
		});

		$(myCalendar).on('apply.daterangepicker',function(ev, picker){
			isClick = 0;
			$(this).val(picker.startDate.format('DD/MM/YYYY'));

		});

		$('.js-btn-calendar').on('click',function(e){
			e.stopPropagation();

			if(isClick === 1) isClick = 0;
			else if(isClick === 0) isClick = 1;

			if (isClick === 1) {
				myCalendar.focus();
			}
		});

		$(myCalendar).on('click',function(e){
			e.stopPropagation();
			isClick = 1;
		});

		$('.daterangepicker').on('click',function(e){
			e.stopPropagation();
		});


	} catch(er) {console.log(er);}
	/*[ Select 2 Config ]
		===========================================================*/

	try {
		var selectSimple = $('.js-select-simple');

		selectSimple.each(function () {
			var that = $(this);
			var selectBox = that.find('select');
			var selectDropdown = that.find('.select-dropdown');
			selectBox.select2({
				dropdownParent: selectDropdown
			});
		});

	} catch (err) {
		console.log(err);
	}


})(jQuery);

//---------------------------------
// hide upload sertifikat
 $(document).ready(function () {
	console.log($('#prestasi').is(':checked'))

	$("#upload-sertifikat").hide();

	$("input[name='jalur_masuk']").click(function () {

		if ($('#prestasi').is(':checked')) { $("#upload-sertifikat").show(); } 

		else { $("#upload-sertifikat").hide(); }
	});
	});

// ----------------------------------
// auto set no wa

 $(document).ready(function () {
                    $("input[name='nomor_hp_ayah'").change(function (delta, oldDelta, source) {
                      document.querySelector("input[name='no_wa']").value = $("input[name='nomor_hp_ayah'").value;
                    });
                  });

// -----------------------------------
// file upload

(function ($) {
    'use strict';

    /*[ File Input Config ]
        ===========================================================*/
    
    try {
    
        var file_input_container = $('.js-input-file');
    
        if (file_input_container[0]) {
    
            file_input_container.each(function () {
    
                var that = $(this);
    
                var fileInput = that.find(".input-file");
                var info = that.find(".input-file__info");
    
                fileInput.on("change", function () {
    
                    var fileName;
                    fileName = $(this).val();
    
                    if (fileName.substring(3,11) == 'fakepath') {
                        fileName = fileName.substring(12);
                    }
    
                    if(fileName == "") {
                        info.text("No file chosen");
                    } else {
                        info.text(fileName);
                    }
    
                })
    
            });
    
        }
    
    
    
    }
    catch (e) {
        console.log(e);
    }

})(jQuery);
