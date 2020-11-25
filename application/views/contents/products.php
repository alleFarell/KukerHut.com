<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url('assets/images/bg_produk.jpg') ?>');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-0 bread">Products</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 mb-5 text-center">
			<?php 
			$directoryURI = $_SERVER['REQUEST_URI'];
			$path = parse_url($directoryURI, PHP_URL_PATH);
			?>
				<ul class="product-category" id="listKategori">
					<li><a href="<?= base_url('kukerhut/products/'); ?>" class="<?php if ($path=="/KukerHut/kukerhut/products/") {echo "active"; } else  {echo "noactive";}?>">All</a></li>
					<?php foreach ($category as $ct) : ?>
						<li><a href="<?= base_url('kukerhut/category/'); ?><?= $ct->id_kategori; ?>"> <?= $ct->nama_kategori ?> </a></li>
					<?php endforeach ?>
				</ul>
			</div>
		</div>

		<div class="row">
			<?php if ($data != NULL) : ?>
				<?php foreach ($data as $p) : ?>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<button type="button" data-toggle="modal" data-target="#modalDetails<?php echo $p['id_produk'] ?>" style="background: none;border: none;float: left;">
							<div class="product">
								<a class="img-prod" style="height: 240px;width: auto;"><img class="img-fluid" src="<?= base_url('assets/images/fotoProduk/') . $p['foto_produk'] ?>" alt="Colorlib Template">
									<span class="status"><?= $this->db->get_where('kategori', ['id_kategori' => $p['id_kategori']])->row('nama_kategori'); ?></span>
									<div class="overlay"></div>
								</a>
								<div class="text py-3 pb-4 px-3 text-center">
									<h3><a href="#"><?= $p['nama_produk']; ?></a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span class="mr-2 price-dc"></span><span class="price-sale"><?= $p['harga_produk']; ?></span></p>
										</div>
									</div>
									<div class="bottom-area d-flex px-3">
										<div class="m-auto d-flex">
											<a button type="button" data-toggle="modal" data-target="#modalDetails<?php echo $p['id_produk'] ?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
												<span class="iconify" data-icon="logos:whatsapp" data-inline="false"></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</button>
					</div>
				<?php endforeach; ?>
			<?php else : ?>
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h2>Oops! No Products Here</h2>
						</div>
					</div>
				</div>
			<?php endif ?>
		</div>
		<div class="row mt-5">
			<div class="col text-center">
				<!--Tampilkan pagination-->
				<?php if ($this->uri->segment('4') == '') {
					echo $pagination;
				} else {
					echo $this->pagination->create_links();
				} ?>
			</div>
		</div>
	</div>

</section>

<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
	<div class="container py-4">
		<div class="row d-flex justify-content-center py-5">
			<div class="col-md-6">
				<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
				<span>Get e-mail updates about our latest shops and special offers</span>
			</div>
			<div class="col-md-6 d-flex align-items-center">
				<form action="#" class="subscribe-form">
					<div class="form-group d-flex">
						<input type="text" class="form-control" placeholder="Enter email address">
						<input type="submit" value="Subscribe" class="submit px-3">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php foreach ($data as $d) : ?>
	<div class="modal fade" id="modalDetails<?= $d['id_produk'] ?>" tabindex="-1" aria-labelledby="modalDetailsLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content" style="width: auto;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="img-responsive d-flex justify-content-center" style="height: 250px;width: auto;">
						<img class="card-img-top" src="<?= base_url('assets/images/fotoProduk/' . $d['foto_produk']) ?>" style="height: 300px;width: auto;">
					</div>
					<hr style="width: 50%;background-color:#942E90 !important;">
					<div class="card-body">
						<div class="d-flex bd-highlight">
							<div class="p-2 bd-highlight w-50">
								<h5 class="modal-title" id="exampleModalLabel" style="color: #942E90 !important;font-weight: 500;font-size: 25px;"><?= $d['nama_produk'] ?>
								</h5>
								<p class="badge badge-success">
									<?= $this->db->get_where('kategori', ['id_kategori' => $d['id_kategori']])->row('nama_kategori'); ?>
								</p>
								<!-- <div class="desc" style="width: 50%;"> -->
								<p><?= $d['deskripsi_produk'] ?></p>
								<!-- </div> -->
							</div>
							<div class="ml-auto bd-highlight">
								<h5 class="mb-0 p-0 mt-0" style="font-weight: bold;color: #942E90 !important;font-size: 25px;">
									<span class="mr-2 price-dc text-success"><?= $d['harga_produk']; ?></span>
									<br>
									<a target="_blank" href="https://api.whatsapp.com/send?phone=6281219643829&text=Halo%20Saya%20Mau%20Beli%20<?= $d['nama_produk'] ?>,%20Apakah%20Ready?	" type="button" class="btn btn-outline-info mb-0"> <img src="<?= base_url('assets/images/wa.png') ?>" style="width: 20px;height: auto;"> Contact Us</a>
								</h5>
							</div>
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>
<?php endforeach ?>