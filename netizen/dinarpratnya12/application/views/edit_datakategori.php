<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Edit Data Kategori</title>

		<!-- Bootstrap CSS -->
		<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/yeti/bootstrap.min.css" rel="stylesheet" integrity="sha384-yAYSLJjzniZh9Kau9E1v1ma5CzvyHF8fPK/xUpaRx1XTH9r60WxzDivvHG3xm6Hn" crossorigin="anonymous">

		<!-- Iconic CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous" />
	</head>
	<body>
		<div class="container">
			<center><h1><b>Edit Data Kategori</b></h1></center>
			<center><hr class="my-4"></center>
			<center><h5>Silahkan Edit Kategori di Bawah Ini</h5></center>
			
			<?php if (validation_errors()) { ?>
				<div class="alert alert-danger alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<?php echo validation_errors(); ?>
				</div>
			<?php } ?>
			<div class="card w-75">
				<div class="card-header">
					<h4 class="card-title"><b>Edit Kategori Buku</b></h4>
				</div>
				<div class="card-body">
					<?php foreach ($kategori as $key) { ?>
						<?php echo form_open('Kategori/aksi_update/'.$key->id); ?>
							<div class="form-group">
								<label class="col-sm-6 col-form-label" for="id">ID Kategori</label>
								<div class="col-sm-10">
									<input type="text" name="id" class="form-control" value="<?php echo $key->id ?>" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-6 col-form-label" for="nama">Nama Kategori</label>
								<div class="col-sm-10">
									<input type="text" name="nama" class="form-control" value="<?php echo $key->nama_kategori ?>">
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">
									<span class="oi oi-check"></span> Submit
								</button>
								&nbsp;&nbsp;
								<button type="reset" class="btn btn-warning">
									<span class="oi oi-loop"></span> Reset
								</button>
							</div>
						<?php form_close(); ?>
					<?php } ?>
				</div>
			</div>

			<br>

			<a class="btn btn-danger" href="<?php echo base_url('Kategori/index'); ?>">
				<span class="oi oi-chevron-left"></span> Kembali
			</a>	
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>