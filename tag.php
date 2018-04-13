<?php get_header(); ?>
	<main class="page-body-content">
		<div class="container page-main-content">
			<div class="row">
				<div class="col-lg-12">
						<div class="alert alert-info mt-3">
							<h1 class="display-4 text-shadow">
								<?php printf( __( 'Articles Tagged With: %s', 'K911' ), '<span>' . get_search_query() . '</span>' ); ?>
								<em>&ldquo;<?php single_tag_title(); ?>&rdquo;</em>
							</h1>
						</div>
						<div class="mt-4 k911-main">
							<div class="col-md">
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<h1><a href='<?php the_permalink() ?>'rel='bookmark' title='<?php the_title(); ?>'><?php the_title(); ?></a></h1>
									<span class="badge badge-success">Date Posted: <?php the_time('m-d-Y') ?></span>
									<?php the_excerpt(); ?>
									<hr>
									<?php endwhile; else : ?>
										<p><?php esc_html_e( 'We apologize... something went wrong. Please try again.' ); ?></p>
									<?php endif; ?>
							</div>	
						</div>
						<?php echo k911_pagination(); ?>
			</div>
		</div>
	</main>
<?php get_footer(); ?>