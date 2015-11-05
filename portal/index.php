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
			<p class="description">Dear user, log in to access the admin area!</p>
		</div>		
	</div>	
	<div class="login-form">
		
		<div class="login-content">
			
			<div class="form-login-error">
				<h3>Invalid login</h3>
				<p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>
			</div>							
				<div class="form-group">					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>						
						<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
					</div>					
				</div>				
				<div class="form-group">					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>						
						<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
					</div>				
				</div>				
				<div class="form-group">
					<a href='home.php' class="btn btn-primary btn-block btn-login">
						<i class="entypo-login"></i>
						Login In
					</a>
				</div>			
			<div class="login-bottom-links">				
				<a href="register.php" class="link">No account yet?</a>				
				<br />
				<a href="#" class="link">Forgot your password?</a>				
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