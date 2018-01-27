<?php get_header(); ?>
	<section class="k911-home">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 k911-info pt-2">
					<h1 class="text-center"><strong>K911 Animal Transport</strong></h1>
					<p class="text-center">We are <strong>K911</strong>, your compassionate, reliable, 24 hour <u>emergency</u> and <u>non-emergency</u> animal transport company.</p>
					<img class="img-fluid mx-auto d-block" height="300" width="300" src="<?php echo get_template_directory_uri(); ?>/media/k911-web-logo.png" alt="K911 Logo" />
				</div>
				<div class="col-md-8 p-0 k911-carousel">
					<?php include get_template_directory() . '/inc/carousel.php'; ?>
				</div>
			</div>
		</div>
	</section>
	<?php include get_template_directory() . '/inc/emergency-modal.php'; ?>
<?php get_footer(); ?>