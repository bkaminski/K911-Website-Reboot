 <footer class="k911-footer">
 	<div class="container-fluid">
 		<div class="row pb-3">
	 		<div class="col-md text-white pt-3">
	 			<?php dynamic_sidebar( 'k911_footer_menu_left' ); ?>
	 		</div>
	 		<div class="col-md pt-3">
	 			<h3 class="text-white"><i class="far fa-envelope fa-fw fa-lg mr-3"></i>Subscribe:</h3>
	 			<?php echo do_shortcode('[mc4wp_form id="326"]'); ?>
	 		</div>
		</div>
		<div class="row mt-4 sub-footer">
			<div class="col pt-3">
				<p class="text-white">
					<small class="copyright">Copyright &copy; <?php echo date(Y); ?> K911</small>
				</p>
			</div>
			<div class="col pt-3 text-center">
				<ul class="list-inline">
					<li class="list-inline-item">
						<a class="social" target="_blank" href="https://www.facebook.com/k911de/">
							<i class="fab fa-facebook-square text-white fa-fw fa-lg"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="social" target="_blank" href="https://twitter.com/K911Delaware">
							<i class="fab fa-twitter-square text-white fa-fw fa-lg"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="social" target="_blank" href="https://www.instagram.com/k911de">
							<i class="fab fa-instagram text-white fa-fw fa-lg"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="col pt-3">
				<a target="_blank" href="https://benkaminski.com">
					<div class="fadehover text-right">
						<img src="<?php echo get_template_directory_uri(); ?>/media/kaminski-consulting-dark.png" class="img-fluid a" alt="Website Donated by Benjamin Kaminski Consulting" />
						<img src="<?php echo get_template_directory_uri(); ?>/media/kaminski-consulting.png" class="img-fluid b" alt="Website Donated by Benjamin Kaminski Consulting" />
					</div>
				</a>
			</div>
		</div>
 	</div>
 </footer>
 <!-- \\\\\\\\\\\\\ SCRIPTS ///////////// -->
 <?php wp_footer(); ?>
 </body>
</html>
