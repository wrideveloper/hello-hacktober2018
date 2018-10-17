<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Page Title</title>

		<!-- Bootstrap CSS -->
		<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/yeti/bootstrap.min.css" rel="stylesheet" integrity="sha384-yAYSLJjzniZh9Kau9E1v1ma5CzvyHF8fPK/xUpaRx1XTH9r60WxzDivvHG3xm6Hn" crossorigin="anonymous">

		<!-- Iconic CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous" />
	</head>
	<body>
		<div class="container">
			<center>
				<center><h1><b>Detail Member</b></h1></center>
				<center><hr class="my-4"></center>
				<center>Berikut adalah halaman detail member</center>
			</center>

			<br><br>

			<?php foreach ($user as $key) { ?>
				<table class="table table-hover table-bordered">
					<tr id="popover" data-content="ID Member">
						<td><?php echo $key->id; ?></td>
					</tr>
					<tr id="popover" data-content="Nama Member">
						<td><?php echo $key->nama; ?></td>
					</tr>
					<tr id="popover" data-content="Tanggal Lahir">
						<td><?php echo $key->ttl; ?></td>
					</tr>
					<tr id="popover" data-content="Jenis Kelamin">
						<td><?php echo $key->jk; ?></td>
					</tr>
					<tr id="popover" data-content="Alamat">
						<td><?php echo $key->alamat; ?></td>
					</tr>
					<tr id="popover" data-content="Username">
						<td><?php echo $key->username; ?></td>
					</tr>
					<tr id="popover" data-content="Status">
						<td>
							<?php  
								if ($key->level == 1) {
									echo "Admin";
								}
								else {
									echo "Member";
								}
							?>
						</td>
					</tr>
				</table>
			<?php } ?>

			<br><br>

			<a class="btn btn-block btn-danger" href="<?php echo base_url('Member/index'); ?>">
				<span class="oi oi-chevron-left"></span> Kembali
			</a>

			<br><br>
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