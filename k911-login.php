<?php
/**
 * Template Name: Custom Login Page
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
					<div class="mt-5 k911-main">
						<div class="col-md-6 mx-auto d-block">
							<div class="card text-white bg-secondary">
								<div class="card-header text-center">
									<h3><i class="fas fa-paw fa-fw fa-lg mr-1"></i> K911 User Login:</h3>
								</div>
									<div class="card-body">
										<!-- call user login form -->
										<?php
											if ( ! is_user_logged_in() ) { 
												$args = array(
													'redirect' => admin_url(), 
													'form_id' => 'loginform-k911',
													'label_username' => __( 'Username: ' ),
													'label_password' => __( 'Password: ' ),
													'label_remember' => __( 'Remember Me? ' ),
													'label_log_in' => __( 'Log In' ),
													'remember' => true
												);
											wp_login_form( $args ); 
										?>
									</div>
									<div class="card-footer">
										<div class="row">
											<div class="col-md">
												<a class="btn btn-warning btn-rounded btn-block mb-2 mt-2" href="<?php echo wp_lostpassword_url( get_permalink() ); ?>" title="Lost Password">Lost Password?</a>
											</div>
											<div class="col-md">
												<a class="btn btn-success btn-rounded btn-block mb-2 mt-2" href="<?php echo wp_registration_url(); ?>">Create Account</a>
											</div>
											<?php
											} else {
												echo "<div class='alert alert-success text-center mt-3 mb-3'>Welcome back $current_user->display_name.<br />";
												echo "You are currently logged in.<br /><br /><i class='fas fa-check fa-fw fa-3x'></i><br /><br />Please choose an option below.</div>";
											?>
										</div>
									<div class="card-footer">
										<div class="row">
											<div class="col-md btn-logout">
												<?php wp_loginout( home_url()); ?>
											</div>
											<div class="col-md btn-admin">
												<?php wp_register('', ''); ?>
											</div>
									    <?php } ?>
										</div>
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
</main>
<?php get_footer(); ?>
