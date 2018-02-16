<?php get_header(); ?>
	<main class="page-body-content">
		<div class="container page-main-content">
			<div class="row">
				<div class="col-lg-12">
						<div class="alert alert-info mt-3">
							<h1 class="display-4 text-shadow">K911 News:</h1>
						</div>
						<div class="mt-4 k911-main">
							<div class="row">
								<div class="col-md-3 pt-3">



									<!-- call in featured image with link to page -->
									<?php if ( has_post_thumbnail() ) : ?>
	    								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	        								<?php the_post_thumbnail('medium'); ?>
	    								</a>
									<?php endif; ?>



								</div>
								<div class="col-md-9">


									<!-- start WordPress Loop -->
									<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								


										<!-- call in article title -->
										<h1><a href='<?php the_permalink() ?>'rel='bookmark' title='<?php the_title(); ?>'><?php the_title(); ?></a></h1>
										<span class="badge badge-success">Date Posted: <?php the_time('m-d-Y') ?></span>


										<!-- all content typed in WordPress Page editor -->
										<?php the_excerpt(); ?>
										<hr>



										<!-- end WordPress Loop -->
										<?php endwhile; else : ?>
											<p><?php esc_html_e( 'We apologize... something went wrong. Please try again.' ); ?></p>
										<?php endif; ?>

								</div>	
							</div>
						</div>


						<!-- call in pagination -->
						<?php echo k911_pagination(); ?>


				</div>
			</div>
	</main>
<?php get_footer(); ?>