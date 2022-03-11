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
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,500&display=swap" rel="stylesheet">
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
		.user_container{
			width: 100%;
			background-color: #d7f7f6 !important;
			height: 200px;
		}
		.user_img > img{
			border-radius: 50%;
			border: 5px solid tomato;
			width: 140px;
			height: 140px;
			margin-top: 30px;
		}
		.user_name >h2 {
			text-align: center;
			display: block;
			text-transform: uppercase;
			margin-top: -80px !important;
		}
		#blk_mem{
			width: 100px;
			background-color: #A5A6F6;
			float: right;
			border: 1px solid tomato;
			border-radius: 20px;
			color: black;
			padding: 10px 15px 10px 15px;
			margin-top: -55px !important;
			margin-right: 14px;
		}
		h2{
			font-family: 'Raleway', sans-serif;
			font-weight: bold;
			word-spacing: 2px;
			letter-spacing: 2px;
		}
		.container_chat{
			width: 90%;
			display: block;
			margin: auto;
			padding-top: 10px;
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
			<ul class="nav justify-content-end me-3">
				<li class="nav-item">

					<a class="nav-link" href="<?php echo base_url()?>index.php/Logincontroller/edit_user">Edit Profile</a>

				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url()?>index.php/Logincontroller/changepass">Change Password</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url()?>index.php/Logincontroller/logout">Logout</a>
				</li>
			</ul>
		</div>
	</nav>
	<!--nav ends here-->

	<div class="user_container">
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<div class="user_img">
						<img src='<?php echo base_url().$_SESSION["image"]?>' height="100" width="100" alt="just a img">
					</div>
					<div class="clearfix"></div>
					<div class="user_name">
						<h2>
							<?php 
							echo "Welcome"." ".$_SESSION['name'];					
							?>
						</h2>
					</div>
					<div class="block_member">
						<input type="submit" name="blk_member" value="Block" id="blk_mem">
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--Chatroom dashboard starts here-->

	<div class="container_chat">
		<div class="row clearfix">
			<div class="col-lg-12">
				<div class="card chat-app">
					<div id="plist" class="people-list">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-search"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="Search...">
						</div>
						<ul class="list-unstyled chat-list mt-2 mb-0">
							<li class="clearfix">
								<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
								<div class="about">
									<div class="name">Vincent Porter</div>
									<div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>                                            
								</div>
							</li>
							<li class="clearfix active">
								<img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
								<div class="about">
									<div class="name">Aiden Chavez</div>
									<div class="status"> <i class="fa fa-circle online"></i> online </div>
								</div>
							</li>
							<li class="clearfix">
								<img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
								<div class="about">
									<div class="name">Mike Thomas</div>
									<div class="status"> <i class="fa fa-circle online"></i> online </div>
								</div>
							</li>                                    
							<li class="clearfix">
								<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
								<div class="about">
									<div class="name">Christian Kelly</div>
									<div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div>
								</div>
							</li>
							<li class="clearfix">
								<img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="avatar">
								<div class="about">
									<div class="name">Monica Ward</div>
									<div class="status"> <i class="fa fa-circle online"></i> online </div>
								</div>
							</li>
							<li class="clearfix">
								<img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
								<div class="about">
									<div class="name">Dean Henry</div>
									<div class="status"> <i class="fa fa-circle offline"></i> offline since Oct 28 </div>
								</div>
							</li>
						</ul>
					</div>
					<div class="chat">
						<div class="chat-header clearfix">
							<div class="row">
								<div class="col-lg-6">
									<a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
										<img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
									</a>
									<div class="chat-about">
										<h6 class="m-b-0">Aiden Chavez</h6>
										<small>Last seen: 2 hours ago</small>
									</div>
								</div>
								<div class="col-lg-6 hidden-sm text-right">
									<a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="fa fa-camera"></i></a>
									<a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-image"></i></a>
									<a href="javascript:void(0);" class="btn btn-outline-info"><i class="fa fa-cogs"></i></a>
									<a href="javascript:void(0);" class="btn btn-outline-warning"><i class="fa fa-question"></i></a>
								</div>
							</div>
						</div>
						<div class="chat-history">
							<ul class="m-b-0">
								<li class="clearfix">
									<div class="message-data text-right">
										<span class="message-data-time">10:10 AM, Today</span>
										<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
									</div>
									<div class="message other-message float-right"> Hi Aiden, how are you? How is the project coming along? </div>
								</li>
								<li class="clearfix">
									<div class="message-data">
										<span class="message-data-time">10:12 AM, Today</span>
									</div>
									<div class="message my-message">Are we meeting today?</div>                                    
								</li>                               
								<li class="clearfix">
									<div class="message-data">
										<span class="message-data-time">10:15 AM, Today</span>
									</div>
									<div class="message my-message">Project has been already finished and I have results to show you.</div>
								</li>
							</ul>
						</div>
						<div class="chat-message clearfix">
							<div class="input-group mb-0">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-send"></i></span>
								</div>
								<input type="text" class="form-control" placeholder="Enter text here...">                                    
							</div>
						</div>
					</div>
				</div>
			</div>
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
