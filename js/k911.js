var $ = jQuery.noConflict();

	//ready func's
	$(document).ready(function() {


		// Set modal cookies to only fire once on home page
		if (!Cookies.get('popup')) {
				setTimeout(function() {
						$('#k911Emergency').modal();
				}, 600);
		}
		$('#k911Emergency').on('shown.bs.modal', function () {
				// bootstrap modal callback function
				// set cookie
				Cookies.set('popup', 'valid', { expires: 3, path: "/" }); // need to set the path to fix a FF bug
		})

		//Add Bootstrap 4 Classes to Navigation
		$("#menu-k911-menu").find('.menu-item').addClass('nav-item');
		$("#menu-k911-menu").find('a').addClass('nav-link mr-3');

		//Add Styles to WordPress Tags
		$("#k911Tags").find('a').addClass('badge badge-pill badge-success pt-1');

		//Add Image Class to Featured image on Home Page
		$("#featImg").find('img').addClass('img-thumbnail');

		//Add img-thumbnail Bootstrap class to news page tumbs
		$(".k911-news-img").find('img').addClass('img-thumbnail');

		//Hover effect on Ben's logo
		$("img.a").hover(
			function() {
				$(this).stop().animate({"opacity": "0"}, "slow");
			},
			function() {
				$(this).stop().animate({"opacity": "1"}, "slow");
		});

		//Align NGG Images
		$(".ngg-gallery-thumbnail").find('img').addClass('mx-auto d-block img-thumbnail');

		//Add class to carousel image coming from "featured image"
		$(".carousel-item").find('img').addClass('k911-carousel-img');

		// Add slideDown animation to dropdown
		$('.dropdown').on('show.bs.dropdown', function(e){
			$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
		});

		// Add slideUp animation to dropdown
		$('.dropdown').on('hide.bs.dropdown', function(e){
			$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
		});

		//Login Page Items
		$("#loginform-k911").find('p').addClass('form-group').css("color", "#000");
		$(".btn-logout").find('a').addClass('btn btn-info btn-rounded btn-block mb-2 mt-2');
		$(".btn-admin").find('a').addClass('btn btn-success btn-rounded btn-block mb-2 mt-2');
		$("#user_login, #user_pass").addClass('form-control form-control-lg');
		$("#wp-submit").removeClass('button button-primary').addClass('btn btn-success btn-rounded-dark pr-5 pl-5');
		
	//End Ready	
	});

// Swap alignment at mobile
var $window = $(window);
     // Function to handle changes to style classes based on window width
     //Different from Bootstrap's 768px but working and tested
     function checkWidth() {
        if ($window.width() < 750) {
            $(".k911-news-img").find('img').addClass('mx-auto d-block');
            $(".social").find('svg').removeClass('fa-fw fa-lg');
        };
        if ($window.width() >= 750) {
            $(".k911-news-img").find('img').removeClass('mx-auto d-block');
            $(".social").find('svg').addClass('fa-fw fa-lg');
        }
    }
    // Execute on load
    checkWidth();
    // Bind event listener
$(window).resize(checkWidth);	

