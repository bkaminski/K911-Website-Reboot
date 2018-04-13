<?php get_header(); ?>
	<main class="page-body-content">
		<div class="container page-main-content">
			<div class="row">
				<div class="col-lg-12">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="alert alert-info mt-3">
							<h1 class="display-4 text-shadow">
								<?php the_title(); ?>
							</h1>
						</div>
						<div class="mt-4 k911-main">
							<?php the_content(); ?>
						</div>
				</div>
				<div id="k911Tags" class="col-lg-12 k911-tags">
					<?php the_tags('Related Topics: ' , '&nbsp;', ''); ?>
				</div>
				<?php endwhile; else : ?>
					<p><?php esc_html_e( 'We apologize... something went wrong. Please try again.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</main>
<?php get_footer(); ?>