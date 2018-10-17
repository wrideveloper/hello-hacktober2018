<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Input Data Buku</title>

		<!-- Bootstrap CSS -->
		<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/yeti/bootstrap.min.css" rel="stylesheet" integrity="sha384-yAYSLJjzniZh9Kau9E1v1ma5CzvyHF8fPK/xUpaRx1XTH9r60WxzDivvHG3xm6Hn" crossorigin="anonymous">

		<!-- Iconic CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous" />
	</head>
	<body>
		<div class="container">
			<center><h1><b>Input Data Buku</b></h1></center>
			<center><hr class="my-4"></center>
			<center>Silahkan Input Data Buku Baru</center>

			<br><br>

			<?php if (validation_errors()) { ?>
				<div class="alert alert-danger alert-dismissible fade show">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<?php echo validation_errors(); ?>
				</div>
			<?php } ?>

			<br><br>

			<div class="card border-primary w-100">
				<div class="card-header bg-primary text-white">
					<h4 class="card-title">Input Data Buku Baru</h4>
				</div>
				<div class="card-body">
					<?php echo form_open_multipart('Buku/aksi_input'); ?>
						<div class="form-group">
							<label class="col-sm-6 col-form-label" for="judul">Judul Buku</label>
							<div class="col-sm-10">
								<input type="text" name="judul" class="form-control" placeholder="Judul Buku">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-6 col-form-label" for="pengarang">Pengarang</label>
							<div class="col-sm-10">
								<input type="text" name="pengarang" class="form-control" placeholder="Pengarang">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-6 col-form-label" for="penerbit">Penerbit</label>
							<div class="col-sm-10">
								<select class="custom-select" name="penerbit">
									<option>--Pilih Penerbit--</option>
									<?php foreach ($penerbit as $key) {
										echo "<option value=".$key->id.">".$key->nama_penerbit."</option>";
									} ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-6 col-form-label" for="kategori">Kategori Buku</label>
							<div class="col-sm-10">
								<select class="custom-select" name="kategori">
									<option>--Pilih Kategori--</option>
									<?php foreach ($kategori as $key) {
										echo "<option value=".$key->id.">".$key->nama_kategori."</option>";
									} ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-6 col-form-label" for="jumlah">Jumlah Stok</label>
							<div class="col-sm-2">
								<input type="text" name="jumlah" class="form-control" placeholder="Jumlah Stok">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-6 col-form-label" for="harga">Harga</label>
							<div class="col-sm-2">
								<input type="text" name="harga" class="form-control" placeholder="Harga">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-6 col-form-label" for="tahun">Tahun</label>
							<div class="col-sm-2">
								<input type="text" name="tahun" class="form-control" placeholder="Tahun">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-6 col-form-label" for="Foto">Foto</label>
							<div class="col-sm-10">
								<input type="file" name="foto" class="form-control-file">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10">
								<button type="submit" class="btn btn-primary">
									<span class="oi oi-check"></span> Submit
								</button>
								&nbsp;&nbsp;
								<button type="reset" class="btn btn-warning">
									<span class="oi oi-trash"></span> Reset
								</button>
							</div>
						</div>
					<?php echo form_close(); ?>
				</div>
			</div>

			<br><br>

			<a class="btn btn-danger" href="<?php echo base_url('Buku/index'); ?>">
				<span class="oi oi-chevron-left"></span> Kembali
			</a>

			<br><br>

			
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>