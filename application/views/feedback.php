<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cute Tinder aboutus</title>
	<!--bootstrap css-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!--google font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
	<!--css-->
	<link rel="stylesheet" href="<?php echo base_url()?>/css/style.css">
	<style type="text/css">
		.nav-item{
			float: right !important;
		}
		h3{
			color: #B92A2A;
			text-align: center;
			margin-left: 201px;
		}
		.container {
			margin-top: -196px !important; 
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
			<h3>Feedback</h3>
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

	<!--feedback starts here-->

	<section class="feed">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="feedback">
						<h2>Give Us FEEDBACK</h2>
						<p>Required fields are followed by</p>
						<form method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">NAME:</label>
								<input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
								<small id="" class="form-text text-muted"></small>
							</div>
							<br>
							<div class="form-group">
								<label for="exampleInputPassword1">FEEDBACK:</label>
								<input type="text" class="form-control" id="feedback" name="feedback">
							</div>
							<br><br>
							<button type="submit" class="btn btn-primary">SUBMIT</button>
						</form>
					</div>
				</div>
				<div class="col-md-6">
					<div class="img-box">
						<img src="<?php echo base_url()?>image/feedback.jpg">
					</div>
				</div>
			</div>
		</div>
	</section>





	<!--footer-->
	<footer>
		&copy; Copyright 2022- All Rights Reserved. Made With <span class="love">&hearts;</span>
	</footer>

	<!--bootstrap JS--->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
