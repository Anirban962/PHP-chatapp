<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcome to Cute Tinder</title>
	<!--bootstrap css-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!--google font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
	<!--css-->
	<link rel="stylesheet" href="<?php echo base_url()?>css/style.css">
	<style type="text/css">
		.container {
			margin-top: -210px !important; 
		}
	</style>
</head>

<body>

	<ul class="nav justify-content-end me-4 mt-4">
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="<?php echo base_url()?>index.php/Logincontroller/signin">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url()?>index.php/Logincontroller/about">About</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url()?>index.php/Logincontroller/feedback">Feedback</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url()?>index.php/Logincontroller/contact">Contact</a>
		</li>

		<!-- <li class="nav-item">
			<a class="nav-link" href="#">Sign In</a>
		</li> -->
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url()?>index.php/Logincontroller/register">Register</a>
		</li>
	</ul>

	<div class="clearfix"></div>

	<div class="chatdesc">
		<h3>Welcome to Cute Tinder</h3>
		<h6>A Fast Secure Easy Chat App</h6>
	</div>

	<div class="clearfix"></div>

	<p>If you don't have an account <br> you can 
		<a href="<?php echo base_url()?>index.php/Logincontroller/register" id="regis">Register here!</a>
	</p>

	<!--login form-->

	<div class="container">  
		<div class="col-4 float-end">

			<!--form-->
			<form method="post">
				
				<!-- Email input -->
				<div class="form-outline">

					<label class="form-label" for="form1Example23">Email</label>
					<input type="email" name="email" class="form-control form-control-lg" />

				</div>
				<br>

				<!-- Password input -->
				<div class="form-outline">
					<label class="form-label" for="form1Example23">Password</label>
					<input type="password" name="password" id="form1Example23" class="form-control form-control-lg" />

				</div>



				<br>
				<!-- Submit button -->
				<input type="submit" name="signin" value="Sign In"><br><br>
				<a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!" role="button">
					<i class="fab fa-facebook-f me-2"></i>Continue with Facebook
				</a>
			</form>    
		</div>
	</div>



	<!--footer-->
	<footer>
		&copy; Copyright 2022- All Rights Reserved. Made With <span class="love">&hearts;</span>
	</footer>

	<!--bootstrap JS--->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>