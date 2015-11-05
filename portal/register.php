<!DOCTYPE html>
<html lang="en">
<head>
	<title>Neon | Login</title>
<?php 
	include('inc/header.php');
?>
</head>
<body class="page-body login-page login-form-fall">
	
<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<a href="index.html" class="logo">
				<img src="images/logo@2x.png" width="120" alt="" />
			</a>
			
			<p class="description">Create an account, it's free and takes few moments only!</p>			
			
		</div>
		
	</div>
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	<div class="login-form">
		
		<div class="login-content">			
		
				<div class="form-register-success">
					<i class="entypo-check"></i>
					<h3>You have been successfully registered.</h3>
					<p>We have emailed you the confirmation link for your account.</p>
				</div>
				
				<div class="form-steps">
					
					<div class="step current" id="step-1">
					
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<input type="text" class="form-control" name="name" id="name" placeholder="Full Name" autocomplete="off" />
							</div>
						</div>
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-phone"></i>
								</div>
								
								<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" autocomplete="off" />
							</div>
						</div>
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-calendar"></i>
								</div>
								
								<input type="text" class="form-control" name="birthdate" id="birthdate" placeholder="Date of Birth (DD/MM/YYYY)" autocomplete="off" />
							</div>
						</div>
						
						<div class="form-group">
							<a href='#' class="btn btn-primary btn-block btn-login">
								<i class="entypo-check"></i>
								Register
							</a>
						</div>					
					</div>
					
				</div>

			
			<div class="login-bottom-links">				
				<a href="index.php" class="link">
					<i class="entypo-lock"></i>
					Return to Login Page
				</a>				
				<br />				
				<a href="#">ToS</a>  - <a href="#">Privacy Policy</a>				
			</div>			
		</div>		
	</div>	
</div>


<?php 
	include('inc/jquery.php');
?>
</body>
</html>