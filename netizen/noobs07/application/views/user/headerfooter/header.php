
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mamina</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Client Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	

	<!--<link href="<?php echo base_url();?>assets/user/images/apple-touch-b3.png" rel="apple-touch-icon">-->

	<!-- css files -->
	<link href="<?php echo base_url();?>assets/user/css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
	<link href="<?php echo base_url();?>assets/user/css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="<?php echo base_url();?>assets/user/css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- //css files -->
	
	<!-- Bootstrap CSS File -->
	<link href="<?php echo base_url();?>assets/user/css/bootstrap.min.css" rel="stylesheet">


	<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
	<!-- <script src="<?php echo base_url();?>assets/user/js/jquery-3.3.1.slim.min.js"></script> -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="<?php echo base_url();?>assets/user/js/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css"/>


	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //google fonts -->
	<style type="text/css">
	.input-container {
		display: -ms-flexbox; /* IE10 */
		display: flex;
		width: 100%;
	}

	.icon {
		padding: 15px;
		background: #d9d9d9;
		color: white;
		min-width: 50px;
		text-align: center;
		margin-bottom: 15px;
	}

	.input-field {
		width: 100%;
		padding: 10px;
		outline: none;
	}

	.input-field:focus {
		border: 2px solid white;
	}

	.show {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}

	/* Set a style for the submit button */

</style>
</head>
<body style="height: 100%">

	<!-- header -->
	<header>
		<div class="container">
			<!-- nav -->
			<nav class="py-3 d-lg-flex">
				<div id="logo">
					<h1> <a href="#home"> Mamina </a></h1>
				</div>
				<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
				<input type="checkbox" id="drop" />
				<ul class="menu ml-auto mt-1" id="menu">
					<li class="header-menu"><a href="<?php echo site_url()?>/User">Home</a></li>
					<li class="header-menu"><a href="<?php echo site_url()?>/User/beritaHomeUser">News</a></li>
					<li class="header-menu"><a href="#services">Services</a></li>
					<li class="header-menu"><a href="#gallery">Gallery & Testimoni</a></li>
					<?php if(!isset($username)){?>
					<li class="header-menu"><a href="<?php echo site_url()?>/Login">Login</a></li>
					<li class="header-menu" style="border:  2px solid black"><a href="<?php echo site_url()?>/Login/register">Register</a></li>
					<?php }else{ ?>
					<li class="dropdown header-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hi, <?= $username?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo site_url()?>/User/ProfileUser">Profile</a></li>
							<li><a href="#">Reservation's History</a></li>
							<li class=""><a href="<?php echo site_url()?>/Login/logout">Logout</a></li>
						</ul>
					</li>
					<?php } ?>
				</ul>
			</nav>
			<!-- //nav -->
		</div>
	</header>
	<!-- //header -->

<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("menu");
var btns = header.getElementsByClassName("header-menu");
for (var i = 0; i < btns.length; i++) {
	btns[i].addEventListener("click", function() {
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", "");
		this.className += " active";
	});
}
</script>

