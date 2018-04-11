<?php
/**
 * Template Name: Lost Password Page
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
							<!-- page content -->
							<?php the_content(); ?>
								<div class="col-md-6 mx-auto d-block">
									<div class="card bg-secondary mb-5">
										<div class="card-header text-center">
											<h3 class="text-white"><i class="fas fa-paw fa-fw fa-lg mr-1"></i> Lost Password:</h3>
										</div>
										<div class="card-body">
											<?php
											global $wpdb;
												$error = '';
												$success = '';
											if( isset( $_POST['action'] ) && 'reset' == $_POST['action'] ) {
												$email = trim($_POST['user_login']);
											if( empty( $email ) ) {
												$error = 'The Email field can not be empty. Enter the email used to register with K911 to reset your password.';
											} else if( ! is_email( $email )) {
												$error = 'Please use your email address for account recovery. We do not permit username entry for security purposes. If you are still experiencing problems, please contact us. ';
											} else if( ! email_exists( $email ) ) {
												$error = 'There is no user registered with that email address. Please create an account or contact us for assistance.';
											} else {
												$random_password = wp_generate_password( 12, false );
												$user = get_user_by( 'email', $email );
												$update_user = wp_update_user( array (
													'ID' => $user->ID, 
													'user_pass' => $random_password
												));
												if( $update_user ) {
													$to = $email;
													$subject = 'K911 Password Reset Request';
													$sender = get_option('name');
													$message = 'Hello, Your new temporary password for K911online is:<br /><br />'. $random_password .'<br /><br/ >Upon successful login, please visit your user profile and update your password to something more memorable and secure. Contact us for further assistance. <br /><br />http://k911online.com/login-or-register/';
													$headers[] = 'MIME-Version: 1.0' . "\r\n";
													$headers[] = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
													$headers[] = "X-Mailer: PHP \r\n";
													$headers[] = 'From: '.$sender.' < '.$email.'>' . "\r\n";
													$mail = wp_mail( $to, $subject, $message, $headers );
													if( $mail )
														$success = 'Please check your email for a message containing password reset information.';
													} else {
														$error = 'It seems that something went wrong while trying to process your request. Please try again later.';
												}
											}
												if( ! empty( $error ) )
													echo '<div class="alert alert-danger"><strong>ERROR:</strong> '. $error .'</div>';
												if( ! empty( $success ) )
													echo '<div class="alert alert-success">'. $success .'</div>';
											}
											?>
											<form method="post">
												<fieldset>
													<p>Please enter your email address used to login. You will receive a link to create a new password via email.</p>
													<div class="form-group">
														<label for="user_login">E-mail:</label>
														<?php $user_login = isset( $_POST['user_login'] ) ? $_POST['user_login'] : ''; ?>
														<input type="text" name="user_login" class="form-control-lg" id="user_login" value="<?php echo $user_login; ?>" />
													</div>
													<div class="form-group">
														<input type="hidden" name="action" value="reset" />
														<input type="submit" value="Get New Password" class="btn btn-success btn-rounded-dark" id="submit" />
													</div>
												</fieldset>
											</form>
										</div>
											<div class="card-footer">
												<div class="row">
													<div class="col-md">
														<a class="btn btn-info btn-rounded btn-block mb-2 mt-2" href="/k911/login" title="Login Page">Back to Login</a>
													</div>
													<div class="col-md">
														<a class="btn btn-warning btn-rounded btn-block mb-2 mt-2" href="<?php echo home_url(); ?>" title="Back to Website">Back to Website</a>
													</div>
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
		</div>
	</main>
<?php get_footer(); ?>
