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


							<!-- call user login form -->
							<?php if ( ! is_user_logged_in() ) { // Display WordPress login form:
							    $args = array(
							        'redirect' => admin_url(), 
							        'form_id' => 'loginform-custom',
							        'label_username' => __( 'Username:' ),
							        'label_password' => __( 'Password:' ),
							        'label_remember' => __( 'Remember Me' ),
							        'label_log_in' => __( 'Log In' ),
							        'remember' => true
							    );
							    wp_login_form( $args );
								} else { // If logged in:
										echo "<div class='alert alert-success text-center'>You're already logged in</div>";
										echo "<p class='text-center'>",
								    wp_loginout( home_url() ); // Display "Log Out" link.

								    	echo " | ";
								    wp_register('', ''); // Display "Site Admin" link.
								    echo " </p> ";
								}
							?>

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
