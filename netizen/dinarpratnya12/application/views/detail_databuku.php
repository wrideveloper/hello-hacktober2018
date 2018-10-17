<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Detail Buku</title>

		<!-- Bootstrap CSS -->
		<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/yeti/bootstrap.min.css" rel="stylesheet" integrity="sha384-yAYSLJjzniZh9Kau9E1v1ma5CzvyHF8fPK/xUpaRx1XTH9r60WxzDivvHG3xm6Hn" crossorigin="anonymous">

		<!-- Iconic CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous" />
	</head>
	<body>
		<div class="container">
			<center>
				<center><h1><b>Detail Buku</b></h1></center>
				<center><hr class="my-4"></center>
				<center>Berikut adalah halaman detail buku yang anda pilih</center>
			</center>

			<br><br>
			
			<?php foreach ($buku as $key) { ?>
				<table class="table table-bordered table-hover">
					<tr>
						<td rowspan="9" width="20%"><img width="200" height="320" src="<?php echo base_url('foto/'.$key->foto) ?>"></td>	
					</tr>
					<tr id="popover" data-content="ID Buku">
						<td><?php echo $key->id; ?></td>
					</tr>
					<tr id="popover" data-content="Judul Buku">
						<td><?php echo $key->judul; ?></td>
					</tr>
					<tr id="popover" data-content="Pengarang">
						<td><?php echo $key->pengarang; ?></td>
					</tr>
					<tr id="popover" data-content="Penerbit">
						<td><?php echo $key->nama_penerbit; ?></td>
					</tr>
					<tr id="popover" data-content="Kategori Buku">
						<td><?php echo $key->nama_kategori; ?></td>
					</tr>
					<tr id="popover" data-content="Jumlah Stok">
						<td><?php echo $key->jumlah; ?></td>
					</tr>
					<tr id="popover" data-content="Harga Buku">
						<td>Rp. <?php echo $key->harga; ?></td>
					</tr>
					<tr id="popover" data-content="Tahun">
						<td><?php echo $key->tahun; ?></td>
					</tr>
				</table>
			<?php } ?>

			<br><br>

			<a class="btn btn-block btn-danger" href="<?php echo base_url('Buku/index'); ?>">
				<span class="oi oi-chevron-left"></span> Kembali
			</a>
		</div>
		

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<script type="text/javascript">
			$("tr[id=popover]").popover({placement:"bottom",trigger:"hover"});
		</script>
	</body>
</html>