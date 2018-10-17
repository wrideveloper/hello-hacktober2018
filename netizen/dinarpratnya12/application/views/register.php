<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Register Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/my-login.css">
	</head>
	<body class="my-login-page">
		<section class="h-100">
			<div class="container h-100">
				<div class="row justify-content-md-center h-100">
					<div class="card-wrapper">
						<div class="brand">
							<img src="<?php echo base_url(); ?>assets/img/icon.png">
						</div>
						<?php if (validation_errors()) { ?>
							<div class="alert alert-danger alert-dismissible fade show">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<?php echo validation_errors(); ?>
							</div>
						<?php } ?>
						<div class="card fat">
							<div class="card-body">
								<h4 class="card-title">Register</h4>
								<form action="<?php echo base_url('Register/aksi'); ?>" method="post">
									<div class="form-group">
										<label for="nama">Nama Lengkap</label>
										<input type="text" name="nama" class="form-control" autofocus>
									</div>
									<div class="form-group">
										<label for="ttl">Tanggal Lahir</label>
										<input type="date" name="ttl" class="form-control">
									</div>
									<div class="form-group">
										<label for="jk">Jenis Kelamin</label>
										<select class="custom-select" name="jk">
											<option>--Pilih Satu--</option>
											<option value="Pria">Pria</option>
											<option value="Wanita">Wanita</option>
										</select>
									</div>
									<div class="form-group">
										<label for="alamat">Alamat</label>
										<textarea class="form-control" name="alamat" rows="3"></textarea>
									</div>
									<div class="form-group">
										<label for="username">Username</label>
										<input type="text" name="username" class="form-control" autofocus>
									</div>
									<div class="form-group">
										<label for="password">Password</label>
										<input type="password" name="password" class="form-control" data-eye>
									</div>
									<div class="form-group no-margin">
										<button type="submit" class="btn btn-primary btn-block">
											Register
										</button>
									</div>
									<div class="margin-top20 text-center">
										Sudah Punya Akun? <a href="<?php echo base_url('Login/index'); ?>">Login Disini</a>
									</div>
								</form>
							</div>
						</div>
						<div class="footer">
							Copyright &copy; 2018 &mdash; Joshua Davian
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/my-login.js"></script>
	</body>
</html>