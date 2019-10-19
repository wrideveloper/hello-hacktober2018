<div class="container" style="min-height: 100%">
	<div class="artikel" id="artikel" style="min-height: 603px; padding-top: 100px;padding-bottom: inherit;">
		<b><h5 class="heading">Our News</h5></b>
		<br>
<!-- 		<hr width="10%" align="left">
 -->		
 		<div class="row">
 			<div class="col-md-8">
 				<?php foreach ($data as $key) { ?>
		 			<div id="header">
							<h3><?= $key->judul_berita;?></h3>
					</div>
					<br>
		 			<div id="image">
		 				<img src="<?php echo base_url();?>assets/user/images/<?php echo $key->foto_berita;?>"  width="670" height="350">
		 			</div>
		 			<br>
		 			<div id="body">
							<p><?php echo $key->deskripsi; ?></p>
					</div>
				<?php } ?>
 			</div>
 			<div class="col-md-1"></div>

 			<div class="col-md-3">
 				<h5><b>Artiket lainnya</b></h5>
 				<br>
 				<?php foreach ($data2 as $key2) { ?>
 				<div class="" id="artikelLain">
 					<div id="image" style="padding-bottom: 10px">
		 				<img src="<?php echo base_url();?>assets/user/images/<?php echo $key2->foto_berita;?>"  width="250" height="150">
		 			</div>

		 			<div id="header">
							<h6><a href="<?php echo site_url()?>/User/DetailBeritaUser/<?= $key2->id_berita?>"><?= $key2->judul_berita;?></a></h6>
					</div>
				</div>
				<br>
				<?php } ?>
 			</div>

		</div>
	
		<br>
	</div>
	<br>
</div> 