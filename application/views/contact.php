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
			<h3>Contact us</h3>
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

	<!--contact starts here-->


	<section class="contacts-adress-form">
		<div class="container">
			<div class="row">
				<div class="col col-md-6">
					<div class="adress">
						<h2>Address:</h2>
						<h5>18/2, Nimchand Moitra Street Kolkata- 700035</h5>
						<h2>Reach Us:</h2>
						<a href="mailto:aviseksen369@gmail.com">aviseksen369@gmail.com</a>
						<h5>Phone number: <a href="#" class="">9051467529</a></h5>

					</div>
				</div>
				<div class="col col-md-6">
					<div class="contact-form">
						<h2>Contact Us</h2>

						<form>
							<div class="form-group">
								<label for="exampleInputEmail1">NAME:</label>
								<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
								<small id="" class="form-text text-muted"></small>
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">EMAIL:</label>
								<input type="email" class="form-control" name="email">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">PHONE:</label>
								<input type="tel" class="form-control" name="phone">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">COMMENTS:</label>
								<input type="text" class="form-control" name="comments" id="comment">
							</div>
							<br>
							<!--input type--->
							<button type="submit" class="btn btn-primary">SUBMIT</button>
						</form>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>

<!--map-->
	<section class="contacts-map text-center text-white">
		<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d58914.555611616954!2d88.33847056674614!3d22.647832610775037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x39f89db00bdb809b%3A0xc40753f66f6e6449!2sBonhooghly%20High%20School%2C%2018d%2C%20Nimchand%20Moitra%20St%2C%20Bonhoogly%2C%20Ariadaha%2C%20Kolkata%2C%20West%20Bengal%20700035%2C%20India!3m2!1d22.647746299999998!2d88.3734865!5e0!3m2!1sen!2sin!4v1646067010949!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</section>
	<!--footer-->
	<footer>
		&copy; Copyright 2022- All Rights Reserved. Made With <span class="love">&hearts;</span>
	</footer>

	<!--bootstrap JS--->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
