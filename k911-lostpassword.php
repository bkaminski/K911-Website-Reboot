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
										        
										        // check if we're in reset form
										        if( isset( $_POST['action'] ) && 'reset' == $_POST['action'] ) 
										        {
										            $email = trim($_POST['user_login']);
										            
										            if( empty( $email ) ) {
										                $error = 'Please enter a username or e-mail address..';
										            } else if( ! is_email( $email )) {
										                $error = 'That username was not found in our database. Please ensure it was entered correctly and try again. Usernames are case-sensitive. If you are still experincing problems, please contact us. ';
										            } else if( ! email_exists( $email ) ) {
										                $error = 'There is no user registered with that email address. Please create an account or contact us for assistance.';
										            } else {
										                
										                $random_password = wp_generate_password( 12, false );
										                $user = get_user_by( 'email', $email );
										                
										                $update_user = wp_update_user( array (
										                        'ID' => $user->ID, 
										                        'user_pass' => $random_password
										                    )
										                );
										                
										                // if  update user return true then lets send user an email containing the new password
										                if( $update_user ) {
										                    $to = $email;
										                    $subject = 'Your new password';
										                    $sender = get_option('name');
										                    
										                    $message = 'Your new password is: '.$random_password;
										                    
										                    $headers[] = 'MIME-Version: 1.0' . "\r\n";
										                    $headers[] = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
										                    $headers[] = "X-Mailer: PHP \r\n";
										                    $headers[] = 'From: '.$sender.' < '.$email.'>' . "\r\n";
										                    
										                    $mail = wp_mail( $to, $subject, $message, $headers );
										                    if( $mail )
										                        $success = 'Check your email address for you new password.';
										                        
										                } else {
										                    $error = 'Oops something went wrong updaing your account.';
										                }
										                
										            }
										            
										            if( ! empty( $error ) )
										                echo '<div class="alert alert-danger"><strong>ERROR:</strong> '. $error .'</div>';
										            
										            if( ! empty( $success ) )
										                echo '<div class="alert alert-success">'. $success .'</div>';
										        }
										    ?>
											<form method="post">
												<fieldset class="form-group">
													<p>Please enter your username or email address. You will receive a link to create a new password via email.</p>
													<p><label for="user_login">Username or E-mail:</label>
														<?php $user_login = isset( $_POST['user_login'] ) ? $_POST['user_login'] : ''; ?>
														<input type="text" name="user_login" class="form-control-lg" id="user_login" value="<?php echo $user_login; ?>" /></p>
														<p>
															<input type="hidden" name="action" value="reset" />
															<input type="submit" value="Get New Password" class="btn btn-success btn-rounded-dark" id="submit" />
											                </p>
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
									</form>
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