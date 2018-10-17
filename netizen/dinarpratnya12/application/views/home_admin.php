<!DOCTYPE html>
<html lang="en">
	<head>

		<style>
			body, html {
			    height: 100%;
			    margin: 0;
			    background: url("<?= base_url() ?>/assets/img/7kN0qrtp0yMhf-7edi65ZQ.png") fixed;
			    background-size: cover;
			}

			.bg {
			    /* The image used */

			    /* Full height */
			    height: 100%; 

			    /* Center and scale the image nicely */
			    background-position: center;
			    background-repeat: no-repeat;
			    background-size: cover;
			}
			.jumbotron {
			     background: rgba(0, 0, 0, 0.5);             /* Transparent background */
			}
			.wrapper{
				  width: 900px;
				  height: 450px;
				  margin: auto;
				  background-color:rgba(255,255,255,0.8);
				  border-radius: 10px;
			}



		</style>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Welcome!</title>

		<!-- Bootstrap CSS -->
		<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/yeti/bootstrap.min.css" rel="stylesheet" integrity="sha384-yAYSLJjzniZh9Kau9E1v1ma5CzvyHF8fPK/xUpaRx1XTH9r60WxzDivvHG3xm6Hn" crossorigin="anonymous">

		<!-- Iconic CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous" />
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href="#">Joe-Al Book</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
			  <span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarColor02">
			  	<ul class="navbar-nav mr-auto">
				    <li class="nav-item active">
				      <a class="nav-link" href="<?php echo base_url('Home/index'); ?>">Home <span class="sr-only">(current)</span></a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" href="#">About</a>
				    </li>
				    <li class="nav-item dropdown">
				    	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         					Data Menu
       					</a>
       					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
       						<a class="dropdown-item" href="<?php echo base_url('Buku/index'); ?>">Data Buku</a>
       						<a class="dropdown-item" href="<?php echo base_url('Member/index'); ?>">Data Member</a>
       						<a class="dropdown-item" href="<?php echo base_url('Penerbit/index'); ?>">Data Penerbit</a>
       						<a class="dropdown-item" href="<?php echo base_url('Kategori/index'); ?>">Data Kategori</a>
       						<a class="dropdown-item" href="<?php echo base_url('Transaksi/index'); ?>">Data Transaksi</a>
       					</div>
				    </li>
			  	</ul>
			  	<a class="btn btn-outline-danger my-2 my-sm-0" href="<?php echo base_url('Login/logout'); ?>">
			  		<span class="oi oi-account-logout"></span> Logout
			  	</a>
			</div>
		</nav>

		<br><br>

		<div class="container">
			<div class="wrapper">
				<center>
					<br>
					<br>
				<h1 class="display-3">Selamat Datang <?php echo $_SESSION['nama']; ?>!</h1>
				<p class="lead">
					
				</p>
				<hr class="my-4">
				<p>
					<br>
				</p>
				<p class="lead">
					<a class="btn btn-primary btn-lg" href="<?php echo base_url('Buku/index'); ?>">
						<span class="oi oi-book"></span> Lihat Daftar Buku
					</a>
				</p>
			</center>
			</div>
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>