<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cute Tinder Registration</title>
	<!--bootstrap css-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!--google font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
	<!--css-->
	<link rel="stylesheet" href="<?php echo base_url()?>css/style.css">
	<style type="text/css">
		.nav-item{
			float: right !important;
		}
		h3{
			color: #B92A2A;
			text-align: center;
			margin-left: 201px;
		}
		.nav-item{
			float: right !important;
		}
		#form{
			width: 40%;
			margin-left: 30%;
			margin-bottom: 3%;
		}
		.regis_form{
			padding-top: 12px;
			padding-bottom: 12px;
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<h3>Welcome to Registration Page</h3>
			<ul class="nav justify-content-end me-3">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url()?>index.php/Logincontroller/signin">Home</a>
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

			</ul>
		</div>
	</nav>
	<!--nav ends here-->

	<!--regis form starts here-->
	<div class="regis_form">
	<div class="card card-primary" id="form">
		<!-- form start -->
		<!-- <form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>index.php/Logincontroller/sent"> -->
			<form method="post" enctype="multipart/form-data">

			<div class="card-body">
				<div class="form-group">
					<label for="username">Enter Name</label>
					<input type="text" class="form-control" name="name" placeholder="Enter name">
				</div>
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control" name="email" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" class="form-control" name="address" placeholder="Enter address">
				</div>
				<div class="form-group">
					<label for="dob">DOB</label>
					<input type="date" class="form-control" name="dob">
				</div>
				<div class="form-group">
					<label for="gender">Gender</label><br>
					<input type="radio" class="form-check-input" name="gender" value="male">Male
					<input type="radio" class="form-check-input" name="gender" value="female">Female
					<input type="radio" class="form-check-input" name="gender" value="others">Others
				</div>
				<div class="form-group">
					<label for="contact number">Contact Number</label>
					<input type="number" class="form-control" name="phone" placeholder="Enter mobile number">
				</div>
				<div class="form-group">
					<label for="imageupload">Image Upload</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="uploadimage">
						</div>

					</div>
				</div>
				<br>
				<div class="form-check">
					<input type="checkbox" class="form-check-input" name="checkbox" required="">
					<label class="form-check-label" for="checkbox">I accept all the terms and condition</label>
				</div>
			</div>
			<!--card-body -->

			<div class="card-footer">
				<input type="submit" name="submit" value="Sign UP">
			</div>
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
