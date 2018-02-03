<?php get_header(); ?>
	<main class="main-content">
		<div class="container k911-main-content">
			<div class="row">
				<div class="col-lg">
					<!-- start WordPress Loop -->
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="alert alert-info mt-3">
							<h1 class="display-4">
								<!-- title entered in WordPress page editor -->
								<?php the_title(); ?>
							</h1>
						</div>
						

						<!-- all content typed in WordPress Page editor -->
						<div class="mt-4">
							<?php the_content(); ?>
						</div>
						
						<!-- post and page tags -->
						<div class="k911-tags">
							<?php the_tags('Related: '); ?>
						</div>
					
					<?php endwhile; else : ?>
						<p><?php esc_html_e( 'We apologize... something went wrong. Please try again.' ); ?></p>
					<?php endif; ?>
					<!-- end WordPress Loop -->
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>