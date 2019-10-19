
<!-- banner -->
<div class="banner" id="home" style="padding-top: 6%;max-height: 697px">
	<div class="layer">
		<div class="container-fluid">
			<div class="row" style="padding-left: 1%; padding-right: 1%">
				<div class="col-md-6 banner-text-w3ls"></div>
				<!-- banner slider-->
				<div class="col-md-6 px-lg-3 px-0">
					<div class="banner-form-w3 ml-lg-5">
						<div class="card shadow">
							<div class="card-body">
								<h5 class="mb-3 text-center">Book Our Spa</h5>
								<form method="post" id="inputReservation" accept-charset="utf-8" action="<?= site_url() ?>/User/addReservation">						
									<div class="form-style-w3layout">
										<div class="custom-control custom-switch" style="padding-bottom: 10px">
											<input type="checkbox" class="custom-control-input" id="customSwitch1">
											<label class="custom-control-label" for="customSwitch1">Kategori lainnya</label>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="input-container">
													<!-- <i class="fa fa-envelope icon"></i> -->
													<input placeholder="Tanggal" name="tanggal" type="text" required="" class="reset" autocomplete="off" id="datepicker1">
												</div>
											</div>
											<div class="col-md-8">
												<div class="input-container">
													<!-- <i class="fa fa-envelope icon"></i> -->
													<select id="sesi" name="sesi" class="js-example-basic-single" required>
														<option value="-">Pilih Sesi</option>
														<?php foreach ($this->db->get('sesi_reservasi')->result() as $key => $value): ?>
															<option value="<?= $value->id_sesi ?>"
																data-json='<?php echo json_encode($value) ?>'><?= $value->waktu ?></option>
															<?php endforeach; ?>
														</select>
													</div>
												</div>
											</div>
											<div class="row">	
												<div class="col-md-4">
													<div class="input-container">
														<!-- <i class="glyphicon glyphicon-backward icon">a</i> -->
														<!-- <input placeholder="Kategori" name="kategori" type="text" required=""> -->
														<select id="kategori" name="kategori" class="js-example-basic-single" required>
															<option value="-" selected disabled>Pilih Kategori</option>
															<?php foreach ($this->db->get('kategori')->result() as $key => $value): ?>
																<option value="<?= $value->id_kategori ?>"
																	data-json='<?php echo json_encode($value) ?>'><?= $value->judul_kat ?></option>
																<?php endforeach; ?>
															</select>
														</div>
													</div>	
													<div class="col-md-5">
														<div class="input-container">
															<!-- <i class="fa fa-envelope icon"></i> -->
															<select id="sub_kategori0" name="sub_kategori0" class="js-example-basic-single" required>
																<option value="-" selected disabled>Pilih Sub-Kategori</option>
																<?php foreach ($this->db->get('sub_kategori')->result() as $key => $value): ?>
																	<option value="<?= $value->id_sub_kategori ?>"
																		data-json='<?php echo json_encode($value) ?>'><?= $value->judul_sub ?></option>
																	<?php endforeach; ?>
																</select>
															</div>
														</div>
														<div class="col-md-3">
															<div class="input-container">
																<!-- <i class="fa fa-envelope icon"></i> -->
																<input placeholder="Jumlah" name="jumlah0" id="jumlah0" type="number" class="reset" required=""
																 max="2">
															</div>
														</div>
													</div>
													<div class="row" id="form2" style="display: none; padding-bottom: 20px">	
														<div class="col-md-4">
															<div class="input-container">
																<!-- <i class="glyphicon glyphicon-backward icon">a</i> -->
																<!-- <input placeholder="Kategori" name="kategori" type="text" required=""> -->
																<select id="kategori1" name="kategori1" class="js-example-basic-single">
																	<option value="-" selected disabled>Pilih Kategori</option>
																	<?php foreach ($this->db->get('kategori')->result() as $key => $value): ?>
																		<option value="<?= $value->id_kategori ?>"
																			data-json='<?php echo json_encode($value) ?>'><?= $value->judul_kat ?></option>
																		<?php endforeach; ?>
																	</select>
																</div>
															</div>	
															<div class="col-md-5">
																<div class="input-container">
																	<!-- <i class="fa fa-envelope icon"></i> -->
																	<select id="sub_kategori1" name="sub_kategori1" class="js-example-basic-single">
																		<option value="-" selected disabled>Pilih Sub-Kategori</option>
																		<?php foreach ($this->db->get('sub_kategori')->result() as $key => $value): ?>
																			<option value="<?= $value->id_sub_kategori ?>"
																				data-json='<?php echo json_encode($value) ?>'><?= $value->judul_sub ?></option>
																			<?php endforeach; ?>
																		</select>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="input-container">
																		<!-- <i class="fa fa-envelope icon"></i> -->
																		<input placeholder="Jumlah" id="jumlah1" name="jumlah1" class="reset" type="number" max="2">
																	</div>
																</div>
																<br><br>	
															</div>											

															<button type="submit" Class="btn" style="border-radius: 30px;">Book</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
						</div>
						<!-- //banner -->
						<!-- banner-bottom -->
						<section class="some-content py-5" id="about" style="height:686px">
							<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
								<div class="carousel-inner">

									<div class="carousel-item active">
										<div class="container py-md-5">
											<div class="row about-vv-top mt-2">
												<div class="col-lg-6 about-info">
													<h4 class="title-hny  mb-md-5">Manfaat Baby Spa untuk Melatih Motorik Bayi</h4>
													<p>Baby spa atau pijat bayi saat ini sudah semakin populer. Banyak para Bunda yang rutin mengajak buah hatinya ke baby spa untuk mendapatkan berbagai treatment terbaik. Namun, baby spa hanya diperbolehkan jika berat badan Si Kecil sudah mencapai 5kg, lho.  Selain mengasyikan, kegiatan yang mencakup renang dan pijat ini tentunya memiliki berbagai manfaat untuk Si Kecil. Salah satunya dapat merangsang gerak motoriknya.</p>
													<div class="read-more-button mt-4">
														<a href="index.html" class="read-more btn">Read More </a>
													</div>
												</div>
												<div class="col-lg-6 about-img mt-md-4 mt-sm-4">
													<img src="<?php echo base_url();?>assets/user/images/b8.jpg" class="img-fluid" alt="">
												</div>
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="container py-md-5">
											<div class="row about-vv-top mt-2">
												<div class="col-lg-6 about-info">
													<h4 class="title-hny  mb-md-5">Manfaat</h4>
													<p>Baby spa atau pijat bayi saat ini sudah semakin populer. Banyak para Bunda yang rutin mengajak buah hatinya ke baby spa untuk mendapatkan berbagai treatment terbaik. Namun, </p>
													<div class="read-more-button mt-4">
														<a href="index.html" class="read-more btn">Read More </a>
													</div>

												</div>
												<div class="col-lg-6 about-img mt-md-4 mt-sm-4">
													<img src="<?php echo base_url();?>assets/user/images/b8.jpg" class="img-fluid" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
 <!--  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a> -->
</div>
</section>
<!-- //banner-bottom-->
<!-- services -->
<section class="services py-5" id="services">
	<div class="container py-md-5">
		<h3 class="heading text-center mb-3 mb-sm-5">Our Services</h3>
		<div class="row service-grid-grids text-center">

			<?php foreach ($service as $key => $value) : ?>
				<div class="col-lg-4 col-md-6 service-grid service-grid3 mb-4">
				<!-- <div class="service-icon">
					<span class="fa fa-fighter-jet"></span>
				</div> -->
				<h4 class="mt-3"><?php echo $value->judul_kat ?></h4>
				<hr width="50%">
				<p class="mt-3"><?php echo substr($value->keterangan_kat, 0, 200) . '...'; ?></p>
				<div class="read-more-button mt-4">
					<a href="index.html" class="read-more btn">Read More </a>
				</div>
			</div>
		<?php endforeach?>
	</div>
</div>		
</section>
<!-- //services -->
<!-- Team  -->
<section class="team py-5" id="team" style="height: 665px">
	<div class="container py-md-5">
		<div>
			<h3 class="heading text-center mb-3 mb-sm-5">Our Terapis</h3>
		</div>
		<div class="row">
			<?php foreach($trps as $key => $value):  ?>
				<div class="team-grid col-lg-3 col-sm-6 mb-5">
					<img src="<?php echo base_url()?>/assets/upload/<?php echo $value->foto?>" class="" alt="" style="border: 5px solid #fff; border-radius: 100%;"/>
					<div class="team-info text-center"  style="background: #fff ;border: 5px solid #737373;border-radius: 10px;">
						<h3 class="e" style="color: #35405a"><?php echo $value->full_name ?></h3>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</section>
<!-- //Team -->

<!-- Gallery -->
<section class="gallery py-5" id="gallery">
	<div class="container py-md-5">
		<div class="header mb-3 mb-sm-5 text-center">
			<h3 class="heading text-center mb-3 mb-sm-5">Mamina Gallery</h3>
			<div class="row news-grids text-center">
				<div class="col-md-4 gal-img">
					<a href="#baby1"><img src="<?php echo base_url();?>assets/user/images/b1.png" alt="news image" class="img-fluid"><span>Testimoni</span></a>
					<a href="#baby2"><img src="<?php echo base_url();?>assets/user/images/b2.png" alt="news image" class="img-fluid"><span>Testimoni</span></a>

				</div>

				<div class="col-md-4 gal-img">
					<a href="#baby3"><img src="<?php echo base_url();?>assets/user/images/b4.png" alt="news image" class="img-fluid"><span>Testimoni</span></a>
					<a href="#baby4"><img src="<?php echo base_url();?>assets/user/images/b5.png" alt="news image" class="img-fluid"><span>Testimoni</span></a>
				</div>
				<div class="col-md-4 gal-img">
					<a href="#baby5"><img src="<?php echo base_url();?>assets/user/images/b6.jpg" alt="news image" class="img-fluid"><span>Testimoni</span></a>
					<a href="#baby6"><img src="<?php echo base_url();?>assets/user/images/b7.png" alt="news image" class="img-fluid"><span>Testimoni</span></a>
				</div>
			</div>
		</div>
		<!-- popup-->
		<div id="baby1" class="pop-overlay animate">
			<div class="popup">
				<img src="<?php echo base_url();?>assets/user/images/b1.png" alt="Popup Image" class="img-fluid" />
				<p class="mt-4">𝙉𝙮𝙖𝙢𝙖𝙣𝙣𝙮𝙖.. 𝙙𝙖𝙥𝙖𝙩𝙠𝙖𝙣 𝙡𝙖𝙮𝙖𝙣𝙖𝙣 𝙠𝙖𝙢𝙞 𝙙𝙞 𝙧𝙪𝙢𝙖𝙝 𝙢𝙖𝙢𝙖</p>
				<a class="close" href="#gallery">&times;</a>
			</div>
		</div>
		<!-- //popup -->

		<!-- popup-->
		<div id="baby2" class="pop-overlay animate">
			<div class="popup">
				<img src="<?php echo base_url();?>assets/user/images/b2.png" alt="Popup Image" class="img-fluid" />
				<p class="mt-4">𝑶𝒑𝒕𝒊𝒎𝒂𝒍𝒌𝒂𝒏 𝒎𝒐𝒕𝒐𝒓𝒊𝒌 𝒅𝒂𝒏 𝒃𝒐𝒏𝒅𝒊𝒏𝒈 𝒃𝒂𝒃𝒚 𝒅𝒂𝒏 𝒎𝒂𝒎𝒂 𝒑𝒂𝒑𝒂 𝒅𝒆𝒏𝒈𝒂𝒏 𝒃𝒂𝒃𝒚 𝒔𝒑𝒂</p>
				<a class="close" href="#gallery">&times;</a>
			</div>
		</div>
		<!-- //popup -->
		<!-- popup-->
		<div id="baby3" class="pop-overlay animate">
			<div class="popup">
				<img src="<?php echo base_url();?>assets/user/images/b4.png" alt="Popup Image" class="img-fluid" />
				<p class="mt-4">Dukungan keluarga terdekat, merupakan booster terbaik untuk bayi dan mama</p>
				<a class="close" href="#gallery">&times;</a>
			</div>
		</div>
		<!-- //popup3 -->
		<!-- popup-->
		<div id="baby4" class="pop-overlay animate">
			<div class="popup">
				<img src="<?php echo base_url();?>assets/user/images/b5.png" alt="Popup Image" class="img-fluid" />
				<p class="mt-4">Apapun pilihanmu, mama Kami akan dukung. Kami hanya bisa memberikan apa yang kami rasa tahu dan apa yang kami rasa terbaik untuk bayi mama .</p>
				<a class="close" href="#gallery">&times;</a>
			</div>
		</div>
		<!-- //popup -->
		<!-- popup-->
		<div id="baby5" class="pop-overlay animate">
			<div class="popup">
				<img src="<?php echo base_url();?>assets/user/images/b6.jpg" alt="Popup Image" class="img-fluid" />
				<p class="mt-4">Waaah... Just keep swimming ya!</p>
				<a class="close" href="#gallery">&times;</a>
			</div>
		</div>
		<!-- //popup -->
		<!-- popup-->
		<div id="baby6" class="pop-overlay animate">
			<div class="popup">
				<img src="<?php echo base_url();?>assets/user/images/b7.png" alt="Popup Image" class="img-fluid" />
				<p class="mt-4">Perjuangan mengasihi takkan sebanding dengan berapa kaleng susu yang sudah kamu persiapkan untuk bayimu kelak. Perjuangkan seoptimal yang kamu bisa. Bayimu, berhak atas asi yang ada didalammu.</p>
				<a class="close" href="#gallery">&times;</a>
			</div>
		</div>
		<!-- //popup -->
	</div>
</section>
<!--// gallery -->

<!-- destinations -->
<section class="destinations py-5" id="destinations">
	<div class="container py-md-5">
		<h3 class="heading text-center mb-3 mb-sm-5">Spa Prices</h3>
		
		<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

			<!--Controls-->
			<!-- <div class="controls-top text-center" style="padding-bottom: 15px">
				<a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left fa-2x"></i></a>
				<a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right fa-2x"></i></a>
			</div> -->
			<!--/.Controls-->

			<!--Indicators-->
			<center>
				<ol class="carousel-indicators" style="text-align: center">
					<?php for ($i=0; $i < count($subkategori) ; $i++) { 
						$no = 0;
						if($i == 0 ){ ?>
						<li data-target="#multi-item-example" data-slide-to="0" class="active" style="background-color: #d9d9d9"></li>
						<?php }else if($i != 0 && $i % 4 == 0){
							$no ++; ?>
							<li data-target="#multi-item-example" data-slide-to="1" style="background-color: #d9d9d9"></li>
							<?php }
						}?>
					</ol>
				</center>
				<!--/.Indicators-->

				<!--Slides-->
				<!-- <div class="row inner-sec-w3layouts-w3pvt-lauinfo"> -->
					<div class="carousel-inner" role="listbox">

						<!--First slide-->
						<?php 
						$no = 0;
						foreach($subkategori as $key => $value):  ?>
						<?php if ($no == 0){?>
						<div class="carousel-item active">
							<div class="row inner-sec-w3layouts-w3pvt-lauinfo">
								<?php }else if($no !=0 && $no % 4 == 0){?>
								<div class="carousel-item">
									<div class="row inner-sec-w3layouts-w3pvt-lauinfo">
										<?php }?>
										<div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mb-4">
											<div class="card mb-2">
												<img class="card-img-top"
												src="<?php echo base_url();?>assets/user/images/<?php echo $value->foto_sub?>"
												alt="Card image cap" width="200" height="200">
												<div class="card-body">
													<h4 class="card-title"><?php echo $value->judul_sub?></h4>
													<p class="card-text"><?php echo $value->judul_kat?></p>
													<nr>
														<p><b>Harga : <?php echo "Rp " . number_format($value->harga, 2, ",", ".");?></b></p>
													</div>
												</div>
											</div>
											<?php if ($no != 0 && $no % 4 == 3){?>
										</div></div>
										<?php } $no++;?>
									<?php endforeach ?>
								</div>
							</section>
							<!-- destinations -->
							<!--/testimonials -->
							<!-- <section class="testimonials py-5" id="testimonials">
								<div class="container py-md-5">
									<h3 class="heading heading1 text-center mb-3 mb-sm-5"> Client Reviews</h3>
									<div class="row">
										<div class="col-lg-4 col-sm-6 test-info text-left mb-4">
											<p><span class="fa fa-quote-left"></span> Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend. <span class="fa fa-quote-right"></span></p>
											<div class="test-img text-right mb-3">
												<img src="<?php echo base_url();?>assets/user/images/te1.jpg" class="img-fluid" alt="user-image">
											</div>
											<h3 class="my-md-2 my-3 text-right">Jenifer Burns</h3>


										</div>
										<div class="col-lg-4 col-sm-6 test-info text-left mb-4">
											<p><span class="fa fa-quote-left"></span> Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend. <span class="fa fa-quote-right"></span></p>

											<div class="test-img text-right mb-3">
												<img src="<?php echo base_url();?>assets/user/images/te2.jpg" class="img-fluid" alt="user-image">
											</div>
											<h3 class="my-md-2 my-3 text-right"> Abraham Smith</h3>


										</div>
										<div class="col-lg-4 col-sm-6 test-info text-left gap1 mb-4">
											<p><span class="fa fa-quote-left"></span> Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.Nulla non laoreet eleifend. <span class="fa fa-quote-right"></span></p>
											<div class="test-img text-right mb-3">
												<img src="<?php echo base_url();?>assets/user/images/te3.jpg" class="img-fluid" alt="user-image">
											</div>
											<h3 class="my-md-2 my-3 text-right">Jenifer Burns</h3>

										</div>
									</div>
								</div>
							</section> -->
							<!--//testimonials -->
							<!-- Contact -->
							<section class="contact py-5" id="contact">
								<div class="container py-md-5">
									<h3 class="heading text-center mb-3 mb-sm-5"> Get In Touch with us</h3>
									<ul class="list-unstyled row text-center mt-lg-5 mt-4 px-lg-5">
										<li class="col-md-4 col-sm-6 adress-w3pvt-info mb-4">
											<div class=" adress-icon">
												<span class="fa fa-map-marker"></span>
											</div>

											<h6>Location</h6>
											<?php foreach($loc as $key => $value):  ?>
												<p><?php echo $value->keterangan?></p>
											<?php endforeach ?>

										</li>

										<li class="col-md-4 col-sm-6 adress-w3pvt-info mb-4">
											<div class="adress-icon">
												<span class="fa fa-envelope-open-o"></span>
											</div>
											<h6>Phone & Email</h6>
											<?php foreach($phone as $key => $value):  ?>
												<p><?php echo $value->keterangan?></p>
											<?php endforeach ?>

											<?php foreach($email as $key => $value):  ?>
												<p><?php echo $value->keterangan?></p>
											<?php endforeach ?>
										</li>
										<li class="col-md-4 col-sm-6 adress-w3pvt-info mb-4">
											<div class="adress-icon">
												<span class="fa fa-building"></span>
											</div>
											<h6>Social Media</h6>
											<?php foreach($socmed as $key => $value):  ?>
												<p><?php echo $value->keterangan?></p>
											<?php endforeach ?>             
										</li>
									</ul>
								</div>
							</section>
							<!-- //Contact -->
							<!-- map -->	
							<div class="map p-2">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3547541415846!2d112.66413601415638!3d-7.962241781554421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6290f9428769f%3A0x4684b75b7086a28e!2sMamina%20Mother%20and%20Baby%20Spa!5e0!3m2!1sid!2sid!4v1570679764313!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							</div>
							<!-- //map -->

							<!-- //contact us -->

							<script type="text/javascript">
								$(document).ready(function () {
									$('#datepicker1').datepicker({
										format: "dd-mm-yyyy",
										autoclose:true
									});

									$('#datepicker1').on('changeDate', function(){
										var tgl=$(this).val();
										$.ajax({
											url : "<?php echo site_url('User/get_sesiuser');?>",
											method : "POST",
											data : {tgl: tgl},
											dataType : 'json',
											success: function(data){
												 //alert(JSON.stringify(data[0]));
												//$('#sesi').children('option:not(:first)').remove();
												var html = '<option selected disabled>Pilih Sesi</option>';
												var i;
												
												for(i=0; i< data.length; i++){
													if(data[i].jml < data[i].jml_terapis){
														html += '<option value="'+data[i].id_sesi+'">'+data[i].waktu+'</option>';
														//alert(data.id_sesi);
													}if(data[i].jml == data[i].jml_terapis){
														html += '<option value="'+data[i].id_sesi+'" disabled>'+data[i].waktu+' (tidak tersedia)</option>';
													}
												}
												$('#sesi').html(html);
											}
										});
									});

									$('#kategori').change(function(){
										var id=$(this).val();
										$.ajax({
											url : "<?php echo site_url('User/get_subkategori');?>",
											method : "POST",
											data : {id: id},
											dataType : 'json',
											success: function(data){
												var html = '<option selected disabled>Pilih Sub-Kategori</option>';
												var i;
												//alert(data);
												for(i=0; i<data.length; i++){
													html += '<option value="'+data[i].id_sub_kategori+'">'+data[i].judul_sub+'</option>';

												}
												$('#sub_kategori0').html(html);

											}
										});
									});

									$('#kategori1').change(function(){
										var id=$(this).val();
										$.ajax({
											url : "<?php echo site_url('User/get_subkategori');?>",
											method : "POST",
											data : {id: id},
											dataType : 'json',
											success: function(data){
												var html = '<option selected disabled>Pilih Sub-Kategori</option>';
												var i;
												//alert(data.length);
												for(i=0; i<data.length; i++){
													html += '<option value="'+data[i].id_sub_kategori+'">'+data[i].judul_sub+'</option>';

												}
												$('#sub_kategori1').html(html);
											}
										});
									});

									$('form#inputReservation').submit(function(e){
										e.preventDefault();
										var formData = new FormData(this);
										var url = $(this).attr('action');
										$.ajax({
											url : url,
											type : "POST",
											data: formData,
											success : function (data){

												if(data == 'true'){
													//alert(data);
													swal({
													title: "Success",
													type:"success",
													text: "<b>Wait</b> For The Confirmation",
													timer: 2000,
													showConfirmButton: false
													});

													reset();
												}else{
													window.location.href="<?php echo site_url('Login') ?>";
												}
											},
											cache : false,
											contentType : false,
											processData : false,
										})
									});

									function reset() {
								        var a = document.getElementsByClassName('reset');
								        // a = HTMLCollection
								        // console.log(a);
								        // You can iterate over HTMLCollection.
								        for (var i = 0; i < a.length; i++) {
								            // You can set the value in every item in the HTMLCollection.
								            a[i].value = "";
							  	       	}
							  	       	$("#kategori").prop('selectedIndex',0);
							  	       	$("#kategori1").prop('selectedIndex',0);
							  	       	$("#sub_kategori0").prop('selectedIndex',0);
							  	       	$("#sub_kategori1").prop('selectedIndex',0);
							  	       	$("#sesi").prop('selectedIndex',0);
							     	}


								});
							</script>


