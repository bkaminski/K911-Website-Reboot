<?php get_header(); ?>
	<section class="k911-home">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 k911-info pt-4">
					<h1 class="text-center"><strong>K911 Animal Transport</strong></h1>
					<p class="text-center">We are <strong>K911</strong>, your compassionate, reliable, 24 hour <u>emergency</u> and <u>non-emergency</u> animal transport company.</p>
					<img class="img-fluid mx-auto d-block mb-2" height="225" width="225" src="<?php echo get_template_directory_uri(); ?>/media/k911-web-logo.png" alt="K911 Logo" />
					<p class="text-center">Our team is dedicated to the safety, health, comfort, and security of your pet.</p>
				</div>
				<div class="col-lg-8 p-0 k911-carousel">
					<?php include get_template_directory() . '/inc/carousel.php'; ?>
				</div>
			</div>
		</div>
	</section>
	<section class="k911-content-1">
		<div class="container pt-4 pb-4">
  			<h3 class="text-center text-white">For an appointment or more specific information regarding your particular needs, please feel free to:</h3>
  			<br />
  			<div class="container">
  				<div class="row">
  					<div class="col-md-6">
  						<button class="btn btn-block btn-success btn-rounded btn-lg text-uppercase mb-3"><i class="fas fa-mobile-alt fa-fw"></i>  <strong>Call Us</strong></button>
  					</div>
  					<div class="col-md-6">
  						<button class="btn btn-block btn-success btn-rounded btn-lg text-uppercase"><strong><i class="far fa-envelope fa-fw"></i>  Email Us</strong></button>
  					</div>
  				</div>
  				<br />
  			</div>
  		</div>
	</section>
	<section class="k911-content">
		<div class="container pt-5 pb-5">
			<div class="row">
				<div class="col-md-12">
					<p class="text-center"><i class="fas fa-ambulance fa-5x" style="color: #4b88a2;"></i></p>
					<h2 class="display-4 text-center mb-5">We specialize in pet transportation to and from veterinary practices, airports, and more throughout the Delaware Valley.</h2>
					<h3 class="display-5 text-center text-info">Our staff of experienced animal handlers are available 24 hours a day, 7 days a week.</h3>
				</div>
			</div>
		</div>
	</section>
	<section class="k911-content-2">
		<div class="container pb-5 pt-5">
			<div class="row">
				<div class="col-md-4">
					<div class="card border-dark mb-3">
	  					<div class="card-header">Header</div>
	  						<div class="card-body text-dark">
	    						<h5 class="card-title">Dark card title</h5>
	    						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	  						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card border-dark mb-3">
	  					<div class="card-header">Header</div>
	  						<div class="card-body text-dark">
	    						<h5 class="card-title">Dark card title</h5>
	    						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	  						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card border-dark mb-3">
	  					<div class="card-header">Header</div>
	  						<div class="card-body text-dark">
	    						<h5 class="card-title">Dark card title</h5>
	    						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	  						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include get_template_directory() . '/inc/emergency-modal.php'; ?>
<?php get_footer(); ?>