<div class="container mt-5" style="min-height: 40vw;">
	<div class="row">

		<!-- <div class="col-md-6 rounded-left float-left" style="background-color: #a1e0db;height:552px">
			<h2 class="text-center" style="color:#fff;margin-top: 2vw;margin-left: -10px;"><img src="<?= base_url('assets/images/Text Only.png') ?>" width="40%">| Add Products</h2>

		</div> -->
		<div class="col-md-12 rounded-right float-left" style="background-color: #d4f8e8;height:552px;overflow: scroll;">
			<h3 class="text-center mt-3">Form Add Products</h3>
			<?php $this->session->flashdata('pesan'); ?>
			<!-- <hr> -->
			<form class="col-md-12" action="<?= base_url('admin/tambah_produk') ?>" method="post">
				<div class="d-flex justify-content-center">
					<div class="col-md-10">
						<input type="text" name="editor" value="<?= $user['username'] ?>" hidden>
						<div class="form-group">
							<label for="nama_produk" class="mt-0">Nama Produk</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="fas fa-user"></i></div>
								</div>
								<input style="border-radius: 0 10px 10px 0;" type="text" name="nama_produk" id="namaproduk" class="form-control" placeholder="Masukkan Nama Produk" value="<?= set_value('namaproduk') ?>">
							</div>
							<small class="text-danger"><?= form_error('namaproduk') ?></small>
						</div>

						<div class="form-group">
							<label for="harga_produk" class="mt-0">Harga Produk</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text"><b>Rp.</b></div>
								</div>
								<input style="border-radius: 0 10px 10px 0;" type="text" name="harga_produk" id="hargaproduk" class="form-control" placeholder="Masukkan Harga Produk" value="<?= set_value('harga_produk') ?>">
							</div>
							<small class="text-danger"><?= form_error('hargaproduk') ?></small>
						</div>

						<div class="form-group">
							<label for="id_kategori" class="col-sm-2 col-form-label">Kategori</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="fas fa-briefcase"></i></div>
								</div>
								<select style="border-radius: 0 10px 10px 0;" class="form-control form-control-md" id="kategoriproduk" name="id_kategori">
									<option disabled selected value="">Pilih Kategori</option>
									<?php foreach ($kategori as $k) : ?>
										<option value="<?= $k['id_kategori'] ?>"><?= $k['id_kategori'] . " - " . $k['nama_kategori'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>

						<div class=" form-group">
							<label for="deskripsi_produk" class="mt-0">Deskripsi Produk</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="fas fa-book"></i></div>
								</div>
								<textarea style="border-radius: 0 10px 10px 0;" name="deskripsi_produk" id="deskripsiproduk" class="form-control" placeholder="Masukkan Deskripsi Produk" value="<?= set_value('deskripsi_produk') ?>"></textarea>
							</div>
							<small class="text-danger"><?= form_error('deskripsi_produk') ?></small>
						</div>

						<div class="d-flex justify-content-center mt-0">
							<button type="submit" class="btn btn-success mb-4" onclick="add()">Add Product</button>
						</div>
						<p class="">*Jangan Lupa Upload Foto Setelah Menambah Data</p>

					</div>
				</div>
			</form>
		</div>

	</div>
</div>