<!DOCTYPE html>
<html>
<head>
	<title>Book Report</title>
</head>
<body>
	<h2><center>Data Buku</center></h2>
	<table>
		<thead>
			<tr>
				<th>No.</th>
				<th>Judul</th>
				<th>Pengarang</th>
				<th>Penerbit</th>
				<th>Kategori</th>
				<th>Tahun</th>
				<th>Jumlah Stok</th>
				<th>Harga</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; foreach ($buku as $key) { ?>
				<tr>
					<td><center><?php echo $no; ?></center></td>
					<td><center><<?php echo ; ?></center></td>
				</tr>
			<?php $no++; } ?>
		</tbody>
	</table>

</body>
</html>