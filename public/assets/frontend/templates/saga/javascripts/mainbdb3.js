// MAIN.JS
//--------------------------------------------------------------------------------------------------------------------------------
//This is main JS file that contains custom JS scipts and initialization used in this template*/
// -------------------------------------------------------------------------------------------------------------------------------
// Template Name: DIGNITY.
// Author: Designova.
// Version 1.0 - Initial Release
// Website: http://www.designova.net 
// Copyright: (C) 2013 
// -------------------------------------------------------------------------------------------------------------------------------

/*global $:false */
/*global window: false */

(function() {
    "use strict";


    $(function($) {

        //Detecting viewpot dimension
        var vH = $(window).height();
        var vW = $(window).width();

        //Adjusting Intro Components Spacing based on detected screen resolution
        $('#intro').css('height', vH);


        //Vertical Centering of natural content spcific elements (non-images)
        $(function($) {
            /*if your element is an image then please use $(window).load() instead tha above function wrap, because we want the coding to take
             effect when the image is loaded. */

            //get the width of the parent
            var parent_height = $('.vertical-center').parent().height();
            var image_height = $('.vertical-center').height();

            var top_margin = (parent_height - image_height) / 2;

            //center it
            $('.vertical-center').css('padding-top', top_margin);
            //uncomment the following if ithe element to be centered is an image
            $('.vertical-center-img').css('margin-top', top_margin);
        });



        //Portfolio Engine
        $('#grid').mixitup({
            transitionSpeed: 800
        });

        //Portfolio Filter Active State
        $('ul#portfolioFilter li').click(function() {
            $('ul#portfolioFilter li').removeClass('active-filter');
            $(this).addClass('active-filter');
        });


        //Parallax Init
        $(window).stellar({
            responsive: true,
            horizontalScrolling: false,
            parallaxBackgrounds: true,
            parallaxElements: true,
            hideDistantElements: false
        });


        //Waypoint Interaction
        $('.waypoint-out').waypoint(function() {
            $('#masthead').removeClass('sub');
        });
        $('.waypoint-in').waypoint(function() {
            $('#masthead').addClass('sub');
        }, {offset: 100});


        //Text Rotation on intro
        // Text Rotate 
        var TxtRotate = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };
        TxtRotate.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];
            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }
            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';
            var that = this;
            var delta = 300 - Math.random() * 100;
            if (this.isDeleting) {
                delta /= 2;
            }
            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }
            setTimeout(function() {
                that.tick();
            }, delta);
        };
        window.onload = function() {
            var elements = document.getElementsByClassName('txt-rotate');
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-rotate');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtRotate(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".txt-rotate> .wrap { border-right: 2px solid #D8322B }";
            document.body.appendChild(css);
        };









        //Carousels
        $("#thumb-carousel").owlCarousel({
            navigation: false,
            pagination: false,
            responsive: true,
            items: 6,
            touchDrag: true,
            mouseDrag: true,
            itemsDesktop: [3000, 6],
            itemsDesktopSmall: [1440, 4],
            itemsTablet: [1024, 3],
            itemsTabletSmall: [600, 2],
            itemsMobile: [360, 1],
            autoPlay: true
        });
        $("#feature-carousel").owlCarousel({
            navigation: false,
            pagination: false,
            responsive: true,
            items: 4,
            touchDrag: true,
            mouseDrag: true,
            itemsDesktop: [3000, 6],
            itemsDesktopSmall: [1440, 4],
            itemsTablet: [1024, 3],
            itemsTabletSmall: [600, 2],
            itemsMobile: [360, 1],
            autoPlay: true
        });
        $("#project-carousel").owlCarousel({
            navigation: false,
            pagination: false,
            responsive: true,
            items: 2,
            touchDrag: true,
            mouseDrag: true,
            itemsDesktop: [3000, 3],
            itemsDesktopSmall: [1440, 2],
            itemsTablet: [1024, 2],
            itemsTabletSmall: [600, 2],
            itemsMobile: [360, 1],
            autoPlay: true
        });
        $(".testimonial-carousel").owlCarousel({
            navigation: true,
            pagination: false,
            responsive: true,
            items: 1,
            autoHeight: true,
            navigationText: ["&lt;", "&gt;"],
            touchDrag: true,
            mouseDrag: true,
            itemsDesktop: [3000, 1],
            itemsDesktopSmall: [1440, 1],
            itemsTablet: [800, 1],
            autoPlay: true
        });
        $(".quote-carousel").owlCarousel({
            navigation: true,
            pagination: false,
            responsive: true,
            items: 1,
            autoHeight: false,
            navigationText: ["&lt;", "&gt;"],
            touchDrag: true,
            mouseDrag: true,
            itemsDesktop: [3000, 1],
            itemsDesktopSmall: [1440, 1],
            itemsTablet: [800, 1],
            autoPlay: true
        });


        //Magnific Pop (Lightbox for Modal Window)
        $('.open-popup-link').magnificPopup({
            type: 'inline',
            midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
        });

        //Magnific Pop (Lightbox for images)
        $('.image-lightbox-link').magnificPopup({
            type: 'image',
            mainClass: 'mfp-with-zoom', // this class is for CSS animation below
            closeOnContentClick: true,
            zoom: {
                enabled: true, // By default it's false, so don't forget to enable it

                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function 

                // The "opener" function should return the element from which popup will be zoomed in
                // and to which popup will be scaled down
                // By defailt it looks for an image tag:
                opener: function(openerElement) {
                    // openerElement is the element on which popup was initialized, in this case its <a> tag
                    // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }

        });


//manually adjusting icon-wrap heights inside service blocks
        if (vW > 1000) {
            var blockHt = $('.service-short-info').height();
            $('.service-short-icon').css('height', blockHt + 60);
        }

    });
// $(function ($)  : ends

})();
//  JSHint wrapper $(function ($)  : ends



$(document).ready(function () {
    $('#newsletterss').submit(function () {
        var $this     = $(this),
            $response = $('#response'),
            $mail     = $('#signup-email'),
            testmail  = /^[^0-9][A-z0-9._%+-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/,
            hasError  = false;

        $response.find('p').remove();

        if (!testmail.test($mail.val())) {
            $response.html('<p class="error">Please enter a valid email</p>');
            hasError = true;
        }

        if (hasError === false) {

            $response.find('p').remove();
            $response.html('<p><img src="/templates/saga/images/loading.gif"></p>');
			
            $.ajax({
                type: "POST",
                dataType: 'json',
                cache: false,
                url: $this.attr('action'),
                data: $this.serialize()
            }).done(function (data) {
				$response.focus();
                $response.removeClass('loading');
                $response.html('<p>'+data.message+'</p>');
				$response.focus();
                if(data.message=='USA') {
                    window.location = 'https://support.willusa.org/page/s/newsletter?email='+$mail.val();
                    $response.html('<p>Please wait...</p>');
                }
            }).fail(function() {
				$response.focus();
                $response.removeClass('loading');
                $response.html('<p>An error occurred, please try again.</p>');
				$response.focus();
            })
        }


        return false;
    });

    var $form = $('#contact-form');

    $form.submit(function (e) {
        // remove the error class
        $('.form-group').removeClass('has-error');
        $('.help-block').remove();

        // get the form data
        var formData = {
            'name' : $('input[name="form-name"]').val(),
            'email' : $('input[name="form-email"]').val(),
            'subject' : $('input[name="form-subject"]').val(),
            'message' : $('textarea[name="form-message"]').val(),
            'recaptcha' : $('textarea[name="g-recaptcha-response"]').val()
        };

        // process the form
        $.ajax({
            type : 'POST',
            url  : '/templates/saga/process.php',
            data : formData,
            dataType : 'json',
            encode : true
        }).done(function (data) {
            // handle errors
            if (!data.success) {
                if (data.errors.name) {
                    $('#name-field').addClass('has-error');
                    $('#name-field').find('.col-lg-10').append('<span class="help-block">' + data.errors.name + '</span>');
                }

                if (data.errors.email) {
                    $('#email-field').addClass('has-error');
                    $('#email-field').find('.col-lg-10').append('<span class="help-block">' + data.errors.email + '</span>');
                }

                if (data.errors.subject) {
                    $('#subject-field').addClass('has-error');
                    $('#subject-field').find('.col-lg-10').append('<span class="help-block">' + data.errors.subject + '</span>');
                }

                if (data.errors.message) {
                    $('#message-field').addClass('has-error');
                    $('#message-field').find('.col-lg-10').append('<span class="help-block">' + data.errors.message + '</span>');
                }
            } else {
                // display success message
                $form.html('<div class="alert alert-success">' + data.message + '</div>');
            }
        }).fail(function (data) {
            // for debug
            console.log(data)
        });

        e.preventDefault();
    });
});

$(document).ready(function(e) {
   $("#new-projects").load("/net/job.php", function() {
      /* $('.table-bordered tr:last').after('<tr><td class="TextAlignLeft">Grants Officer, will UK</td><td class="TextAlignCenter">London, UK</td><td class="TextAlignRight">£30,000/year</td><td class="TextAlignRight">15 Apr 2019</td><td><a class="btn btn-mini" href="http://www.willuk.net/you/work-with-us/" target="_blank"><i class="icon-zoom-in"></i>View</a></td></tr>');*/
        });
});

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

new WOW().init();

/* =================================
===        toolTip              ====
==================================== */
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip({
		html: true
	});
	$('img[usemap]').rwdImageMaps();

	$(".img-cont").hover(function(){
		$(this).find(".program-title").slideToggle(200);
		$(this).find(".program-list").slideToggle(200);
	}, function() {
		$(this).find(".program-title").slideToggle(200);
		$(this).find(".program-list").slideToggle(200);
	});
});
$(document).mousemove( function(e) {
    if($('img').hasClass("world-map")){
        var mouseX = e.pageX - $('.world-map').offset().left - 120;
        var mouseY = e.pageY - $('.world-map').offset().top + 40;
    }
    $('.tooltip').css({'top':mouseY,'left':mouseX}).fadeIn('slow');
});





function decreaseFontSize() {
	var resizable_elements=$("a,p,span,ul,ol,h1,h2,h3,h4,h5,h6,td,th");
  resizable_elements.each(function() {
    var b = parseInt($(this).css("font-size"));
    if (b > 12) {
      $(this).css("font-size", parseInt(b - 1) + "px", "important");
	  console.log($(this));
    }
  });
	//toggle button highlight
}

function increaseFontSize() {
	var resizable_elements=$("a,p,span,ul,ol,h1,h2,h3,h4,h5,h6,td,th");
  resizable_elements.each(function() {
    if (!$(this).hasClass("sr screen-reader")) {
      var b = parseInt($(this).css("font-size"));
      $(this).css("font-size", parseInt(b + 1) + "px", "important")
    }
  });
	//toggle button highlight
}

function highlightLinks(){
       $("a").each(function(){
                       $(this).toggleClass("selected");
       });
	   $( "#apHighlight" ).toggleClass("selectedap");
}

function underlineLinks(){
       $("a").each(function(){
                       $(this).toggleClass("underline");
       });
	   $( "#apUnderline" ).toggleClass("selectedap");
}

function grayscaleImages(){
       $("img").each(function(){
            $(this).toggleClass("grayscale");
       });
	   $( "#apGrayscale" ).toggleClass("selectedap");
}

function invertImages(){
       $("img").each(function(){
            $(this).toggleClass("invert");
       });
	   $( "#apInvert" ).toggleClass("selectedap");
}

function resetAP(){
	location.reload();
}

//document.getElementById("accesslink").tabIndex = 1;

      $('#accesslink').keypress(function(e) {
      if (e.keyCode == 13) {
        $('#accessicon').click();
      }
    });
	
function accessiconClick() {
	$('#accessicon').click();
}

function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
	aTag.focus();
        if (aTag.is(":focus")){ // Checking if the target was focused
          return false;
        } else {
          aTag.attr('tabindex','-1'); // Adding tabindex for elements not focusable
          aTag.focus(); // Setting focus
        };
        //return false;
}