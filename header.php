<!doctype html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <!-- mobile device icons and favicon -->
	    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/media/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/media/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/media/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/media/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/media/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/media/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/media/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
	    <title><?php echo get_bloginfo('name'); ?></title>
	    <?php wp_head(); ?>
  	</head>
		<body <?php body_class(); ?>>
		  	<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
		    	<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
		      		<img src="<?php echo get_template_directory_uri(); ?>/media/apple-icon-76x76.png" alt="K911 Transport Service Logo">
		      	</a>
		      	<button class="btn btn-danger btn-help" type="button">
		        	<i class="fas fa-exclamation-triangle fa-2x pt-1 pb-1"></i>
		      	</button>
		      	<button class="navbar-toggler fa-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		        	<i class="fas fa-align-justify fa-fw fa-lg"></i>
		      	</button>
		      	<div class="collapse navbar-collapse" id="navbarCollapse">
			        <?php
				        wp_nav_menu( array(
				            'theme_location'    => 'primary',
				            'depth'             => 2,
				            'container'         => '',
				            'container_class'   => '',
				            'container_id'      => '',
				            'menu_class'        => 'navbar-nav mr-auto',
				            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				            'walker'            => new WP_Bootstrap_Navwalker())
				        );
			        ?>
			        <form class="form-inline my-2 my-lg-0">
			          <button class="btn btn-danger btn-lg my-2 my-sm-0 d-none d-lg-block text-uppercase btn-rounded mr-3 help-button" type="submit">Get Help Now</button>
			        </form>
		      	</div>
		    </nav>