<?php
/**
 * Template Name: Registration Page
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
								<div class="col-md-6 mx-auto d-block">
									<div class="card bg-secondary">
										<div class="card-header text-center">
											<h3 class="text-white"><i class="fas fa-paw fa-fw fa-lg mr-1"></i> Create an Account:</h3>
										</div>
										<div class="card-body">
											<?php the_content(); ?>
											<form action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>" class="user_new" id="user_new" method="post">
												<div class="form-group">
													<label>Select a Username</label>
													<input id="user_login" class="form-control-lg" name="user_login" size="30" type="text" placeholder="">
												</div>
												<div class="form-group">
													<label>Email Address:</label>
													<input id="user_email" name="user_email" class="form-control form-control-lg" type="text" placeholder="">
												</div>
												<br />
												<div class="alert alert-warning" role="alert">
													<em>After clicking the register button below, you will be sent an email to validate your email address. You should receive an email within 5 minutes of successful registration, should you not -- please check you junk email folder first -- then contact us if you're still experiencing problems.</em>
												</div>
												<br />
												<?php do_action('register_form'); ?>
												<input id="register" type="submit" class="btn btn-info btn-rounded-dark pr-5 pl-5" value="Register">
											</form>
										</div>
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