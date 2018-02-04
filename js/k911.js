var $ = jQuery.noConflict();

	//ready func's
	$(document).ready(function() {
		
		//$('#k911Emergency').modal('show');

		//Add Bootstrap 4 Classes to Navigation
		$("#menu-k911-menu").find('.menu-item').addClass('nav-item');
		$("#menu-k911-menu").find('a').addClass('nav-link mr-4');

		//Add Styles to WordPress Tags
		$("#k911Tags").find('a').addClass('badge badge-pill badge-success')	
	});
	//end ready


	

