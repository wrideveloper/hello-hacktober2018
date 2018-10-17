<br><br><br>
<div class="container">
		<form action="<?php echo base_url(); ?>Prints/cetakpo" method="post">
			<label for="nodo">Nomor DO</label>
			<input type="text" name="nodo" class="form-control" value="">

			<label for="nama">Nama Perusahaan Surat</label>
			<input type="text" name="namaperusahaan" class="form-control">

			<label for="tempattanggal">Tempat / Tanggal PO</label>
			<input type="text" name="tempattanggal" class="form-control">

            <select name="namabarang" id="namabarang" class="form-control">
			<?php foreach ($barang as $key) { ?>
				<option value="<?= $key->nama_produk; ?>"><?= $key->nama_produk; ?></option>
			<?php 
            } ?>
			</select>
            
			<label for="qty">Quantity</label>
			<input type="text" name="qty" class="form-control" value="">

			<label for="harga">Harga per QTY</label>
			<input type="text" name="harga" class="form-control">

			<label for="trucking">Trucking</label>
			<input type="text" name="trucking" class="form-control">


			<label for="delivery_time">Delivary Time</label>
			<input type="text" name="delivery_time" class="form-control">
			<label for="payment">Delivary Time</label>
			<input type="text" name="payment" class="form-control">
			<!-- <label for="catatan">Catatan</label>
			<textarea name="catatan" class="form-control" rows="2"></textarea>
			<label for="lampiran">Lampiran</label>
			<input type="text" name="lampiran" class="form-control">
			<label for="penandatangan">Penandatangan</label>
			<input type="text" name="penandatangan" class="form-control">
			<label for="nama">Nama Penandatangan</label>
			<input type="text" name="nama" class="form-control">
			<label for="nip">NIP</label>
			<input type="text" name="nip" class="form-control">
			<label for="penanggungjawab">Penanggung Jawab</label>
			<input type="text" name="penanggungjawab" class="form-control"> -->
			<input type="submit" name="submit" value="CETAK" class="btn btn-primary">
		</form>
	</div>