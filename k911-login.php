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
							<div class="mt-4 k911-main">
								<div class="col-md-6 mx-auto d-block">
									<div class="card text-white bg-secondary mb-3">
  										<div class="card-header text-center">K911 User Login:</div>
  											<div class="card-body">
  												<!-- call user login form -->
  												<?php if ( ! is_user_logged_in() ) { 
  													$args = array(
  														'redirect' => admin_url(), 
  														'form_id' => 'loginform-k911', 
  														'label_username' => __( 'Username:' ),
  														'label_password' => __( 'Password:' ),
  														'label_remember' => __( 'Remember Me' ),
  														'label_log_in' => __( 'Log In' ),
  														'remember' => true
  													);
  													wp_login_form( $args ); ?>
  												</div>
  													<?php
		  												echo "<div class='card-footer'>";
		  												echo "<div class='row'>";
		  												echo "<div class='col-sm-6'><span class='k911-loginout'>";
		  											?>
		  											<a id="lostPass" class="btn btn-warning btn-rounded pr-5 pl-5" href="<?php echo wp_lostpassword_url(); ?>">Lost Password?</a>
		  											<?php
		  												echo "</span></div>";
		  												echo "<div class='col-sm-6'><span class='k911-adminregister'>";
															wp_register('', '');
														echo "</span></div>";
														echo "</div>";
														echo "</div>";  	
													?>
  													<!-- end login form -->
  													<?php } else { echo "<div class='alert alert-success text-center'>You're already logged in</div>"; } ?>
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
			</div>
		</div>
	</main>
<?php get_footer(); ?>
