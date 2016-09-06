<?php 

use Helpers\Url;
use Helpers\Request;

?>

<div class="login-body">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-2"></div>
			<div class="col-md-6 col-sm-8">
				<div class="login-form">
					<div class="row">
						<div class="col-xs-12">
							<div class="row">
								<h1 class="login-title">Login</h1>		
							</div>
							<form action="<?php echo DIR ; ?>login" method="POST">
								<div class="input">
									<label class="login-label">
										<p class="login-paragraf">Your e-mail</p>
										<div class="input-group">
											<div class="input-group-addon">
												<span class="glyphicon glyphicon-envelope"></span>
											</div>
											<input class="form-control" type="email" name="email" placeholder = "valahia@example.com">
										</div>
						 			</label>	
								</div>
								<div class="input">
									<p class="login-paragraf">Password</p>
									<label class="login-label">
										<div class="input-group">
											<div class="input-group-addon">
												<span class="glyphicon glyphicon-lock"></span>
											</div>
											<input class="form-control" type="password" name="password" placeholder="password">
										</div>
									</label>
								</div>
								<div>
									<input class="login-button form-control" type="submit" value="Login me!">	
									<a class="go-to-application btn btn-default form-control" href="<?php echo DIR;?>application">Register now!</a>
								</div>
							</form>
						</div>
					</div> <!-- row-->
				</div> <!-- class form-->
			</div> <!-- col -->
			<div class="col-md-3 col-sm-2"></div>
		</div>	<!-- row -->
	</div> <!-- container -->
</div>
