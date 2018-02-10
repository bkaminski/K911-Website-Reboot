var $ = jQuery.noConflict();

	//ready func's
	$(document).ready(function() {
		
		//$('#k911Emergency').modal('show');

		//Add Bootstrap 4 Classes to Navigation
		$("#menu-k911-menu").find('.menu-item').addClass('nav-item');
		$("#menu-k911-menu").find('a').addClass('nav-link mr-4');

		//Add Styles to WordPress Tags
		$("#k911Tags").find('a').addClass('badge badge-pill badge-success pb-2');

		// Swap alignment at mobile
    	var $window = $(window);
        // Function to handle changes to style classes based on window width
        //Different from Bootstrap's 768px but working and tested
        function checkWidth() {
        if ($window.width() < 750) {
            $('footer').removeClass('k911-footer').addClass('k911-footer-mobile');
        };
        if ($window.width() >= 750) {
            $('footer').removeClass('k911-footer-mobile').addClass('k911-footer');
        }
    }
    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);	
	});


	

