<?php get_header(); ?>
	<section class="k911-home">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 k911-info pt-2">
					<h1 class="text-center"><strong>K911 Animal Transport</strong></h1>
					<p class="text-center">This is a test.</p>
				</div>
				<div class="col-md-8 p-0 k911-carousel">
					<?php include get_template_directory() . '/inc/carousel.php'; ?>
				</div>
			</div>
		</div>
	</section>
	<?php include get_template_directory() . '/inc/emergency-modal.php'; ?>
<?php get_footer(); ?>