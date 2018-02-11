 <footer class="k911-footer">
 	<div class="container-fluid right-footer">
 		<div class="row">
	 		<div class="col-md text-white pt-3">
	 			<?php dynamic_sidebar( 'k911_footer_menu_left' ); ?>
	 		</div>
	 		<div class="col-md pt-3">
	 			<h3 class="text-white"><i class="fas fa-users fa-fw fa-lg mr-3"></i>Subscribe:</h3>
	 			<form>
	 				<div class="form-group">
    					<label for="k911LoginEmail" class="text-white">Subscribe to the K911 Email list:</label>
    					<div class="input-group">
    						<div class="input-group-prepend">
          						<div class="input-group-text"><i class="far fa-envelope fa-fw fa-lg"></i></div>
        					</div>
    							<input type="email" class="form-control form-control-lg" id="k911LoginEmail" aria-describedby="emailHelp" placeholder="Enter email" required="required">
    					</div>
  					</div>	
  					<button type="submit" class="btn btn-success btn-rounded pr-5 pl-5 text-uppercase">Subscribe</button>
	 			</form>
	 		</div>
		</div>
		<p class="text-white text-right pt-4"><small>Copyright &copy; <?php echo date(Y); ?> K911</small></p>
 	</div>
 </footer>
 <?php wp_footer(); ?>
 </body>
</html>