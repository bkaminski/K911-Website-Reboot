<?php
/**
 * Template Name: Donation Page
 *
 * @package WordPress
 * @subpackage K911
 * 
 */
get_header(); ?>
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
								<?php the_content(); ?>
								<div class="card text-center border-dark mb-3">
  									<div class="card-header">
    									<i class="fab fa-paypal fa-fw fa-lg" style="color: #021e73;"></i> PayPal
  									</div>
  									<div class="card-body">
  										<i class="fab fa-paypal fa-fw fa-3x mx-auto d-block" style="color: #021e73;"></i>
  										<h5 class="card-title">Click the Donate Button Below to use PayPal:</h5>
    										<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
    											<input type="hidden" name="cmd" value="_s-xclick">
    											<input type="hidden" name="hosted_button_id" value="WARE97BQM6SAJ">
    											<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" class="mx-auto d-block" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    											<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    										</form>
    								</div>
    								<div class="card-footer text-muted">
  										<small>All donations help, no amount too small. Link will open in a new window.</small>
  									</div>
								</div>
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