 <footer class="k911-footer pt-3 pb-3">
 	<div class="container-fluid">
 		<div class="row">
	 		<div class="col-md text-white mb-3">
	 			<?php dynamic_sidebar( 'k911_footer_menu_left' ); ?>
	 		</div>
	 		<div class="col-md">
	 			<div class="alert alert-secondary p-1">
	 				<h3><i class="fas fa-users fa-fw fa-lg mr-3"></i>Log-in / Register:</h3>
	 			</div>
	 			<form class="mb-2">
	 				<div class="form-group">
    					<label for="k911LoginEmail" class="text-white">Email address:</label>
    					<div class="input-group">
    						<div class="input-group-prepend">
          						<div class="input-group-text"><i class="far fa-envelope fa-fw fa-lg"></i></div>
        					</div>
    							<input type="email" class="form-control form-control-lg" id="k911LoginEmail" aria-describedby="emailHelp" placeholder="Enter email" required="required">
    					</div>
  					</div>
  					<div class="form-group">
    					<label for="k911LoginPassword" class="text-white">Password:</label>
    					<div class="input-group">
    						<div class="input-group-prepend">
          						<div class="input-group-text"><i class="fas fa-key fa-fw fa-lg"></i></div>
        					</div>
    							<input type="password" class="form-control form-control-lg" id="k911LoginPassword" placeholder="Password" required="required">
  						</div>
  					</div>			
  					<button type="submit" class="btn btn-success btn-rounded pr-5 pl-5 mr-3 text-uppercase">Login</button>
  					<button type="submit" class="btn btn-info btn-rounded pr-5 pl-5 text-uppercase">Create Account</button>
	 			</form>
	 		</div>
		</div>
		<div class="col-md">
			<p class="text-white text-center pt-3">Copyright &copy; <?php echo date(Y); ?> K911</p>
		</div>
 	</div>
 </footer>
 <?php wp_footer(); ?>
 </body>
</html>