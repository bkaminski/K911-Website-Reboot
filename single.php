<?php get_header(); ?>
	<main class="page-body-content">
		<div class="container page-main-content">
			<div class="row">
				<div class="col-lg-12">


					<!-- start WordPress Loop -->
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						

						<div class="alert alert-info mt-3">
							<h1 class="display-4 text-shadow">
								
								<!-- title entered in WordPress page editor -->
								<?php the_title(); ?>

							</h1>
						</div>
						<div class="mt-4 k911-main">
							

							<!-- Call in published on date and author name -->
							<p>Published on: <?php the_date(); ?> by <?php the_author(); ?></p>


							<!-- Call in featured image -->
							<?php the_post_thumbnail('full'); ?>
							<br />
							<br />



							<!-- all content typed in WordPress Page editor -->
							<?php the_content(); ?>


							<!-- Call in comments loop -->
							<?php if ( comments_open() || get_comments_number() ) :comments_template(); endif; ?>



						</div>
				</div>
				<div id="k911Tags" class="col-lg-12 k911-tags">
			
					<!-- post and page tags -->
					<?php the_tags('Related Topics: ' , '&nbsp;', ''); ?>


				</div>
				

				<!-- end WordPress Loop -->
				<?php endwhile; else : ?>
					<p><?php esc_html_e( 'We apologize... something went wrong. Please try again.' ); ?></p>
				<?php endif; ?>


			</div>
		</div>
	</main>
<?php get_footer(); ?>