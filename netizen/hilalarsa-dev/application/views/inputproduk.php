<br><br><br>
<div class="container">
		<form action="<?php echo base_url(); ?>Prints/inputproduk" method="post">
			<label for="nama_produk">Nama Produk</label>
			<input type="text" name="nama_produk" class="form-control" value="">

			<label for="material">Material</label>
			<input type="text" name="material" class="form-control">

			<label for="content">Content</label>
			<input type="text" name="content" class="form-control" value="">

			<label for="warna">Warna</label>
			<input type="text" name="warna" class="form-control">

			<label for="merk">Merk</label>
			<input type="text" name="merk" class="form-control">

			<label for="spesifikasi">Spesifikasi</label>
			<input type="text" name="spesifikasi" class="form-control">

			<label for="packing">Packing</label>
			<input type="text" name="packing" class="form-control">

			<input type="submit" name="submit" value="Input" class="btn btn-primary">
		</form>
	</div>

    <div class="modal fade" id="myModalTambahProduk" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Tambah Banner Baru</h4>
                    </div>
                    <div class="modal-body">
                      <form action="<?php echo base_url() ?>Task_controller/tambahBanner" method="post" enctype="multipart/form-data">
                        <input type="hidden" placeholder="id" name="id">
                        <input class="form-control" type="text" placeholder="Title" name="title"><br>
												<input class="form-control" type="text" placeholder="Detail" name="detail"><br>
                        <input type="file" class="form-control" id="uploadbukti" name="userfile"><br>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Submit">
                      </form>
                    </div>
                  </div>
                </div>
              </div>