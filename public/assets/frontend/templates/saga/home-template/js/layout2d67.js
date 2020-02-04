var Layout = function () {
    
    // detect mobile device
    var isMobileDevice = function() {
        return  ((
            navigator.userAgent.match(/Android/i) ||
            navigator.userAgent.match(/BlackBerry/i) ||
            navigator.userAgent.match(/iPhone|iPad|iPod/i) ||
            navigator.userAgent.match(/Opera Mini/i) ||
            navigator.userAgent.match(/IEMobile/i)
        ) ? true : false);
    };

    // handle on page scroll
    var handleHeaderOnScroll = function() {
        if ($(window).scrollTop() > 60) {
            $("body").addClass("page-on-scroll");
        } else {
            $("body").removeClass("page-on-scroll");
        }
    };

    return {
        init: function () {
            // initial setup for fixed header
            handleHeaderOnScroll();

            // handle minimized header on page scroll
            $(window).scroll(function() {
                handleHeaderOnScroll();
            });
        },

        // To get the correct viewport width based on  http://andylangton.co.uk/articles/javascript/get-viewport-size-javascript/
        getViewPort: function() {
            var e = window,
                a = 'inner';
            if (!('innerWidth' in window)) {
                a = 'client';
                e = document.documentElement || document.body;
            }

            return {
                width: e[a + 'Width'],
                height: e[a + 'Height']
            };
        },
    };
}();

$(function() {
"use strict";
//$('body').scrollspy({target: ".navbar", offset: 50});   

if ( window.location.hash ) { scroll(0,0); }
setTimeout( function() { scroll(0,0); }, 1);


  // Add smooth scrolling on all links inside the navbar
  $("#smoothNavbar a").on('click', function() {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      //event.preventDefault(); //disabled by shuvra

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top-107
      }, 800);
    }  // End if
  });

    if(window.location.hash) {
        // smooth scroll to the anchor id
        $('html, body').animate({
            scrollTop: $(window.location.hash).offset().top-400
        }, 800);
    }
});

$(document).ready(function() {
    Layout.init();

	/*$(".img-cont").hover(function(){
		$(this).find(".program-title").slideToggle(200);
		$(this).find(".program-list").slideToggle(200);
	}, function() {
		$(this).find(".program-title").slideToggle(200);
		$(this).find(".program-list").slideToggle(200);
	});*/

	/*$('.owl-carousel').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		dots:false,
		navText: [ '', '' ],
		autoplay:true,
		autoplayTimeout:3000,
		autoplayHoverPause:true,
		responsive:{
			0:{
				items:1
			},
			540:{
				items:2
			},
			800:{
				items:3
			},
			1024:{
				items:4
			}
		}
	});*/

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
                    window.location = 'https://support.willwort.org/page/s/newsletter?email='+$mail.val();
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

var resizable_elements=$("a,p,span,ul,ol,h1,h2,h3,h4,h5,h6");

function decreaseFontSize() {
  resizable_elements.each(function() {
    var b = parseInt($(this).css("font-size"));
    if (b > 12) {
      $(this).css("font-size", parseInt(b - 1) + "px")
    }
  });
	//toggle button highlight
}

function increaseFontSize() {
  resizable_elements.each(function() {
    if (!$(this).hasClass("sr screen-reader")) {
      var b = parseInt($(this).css("font-size"));
      $(this).css("font-size", parseInt(b + 1) + "px")
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

document.getElementById("accesslink").tabIndex = 2;

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
	