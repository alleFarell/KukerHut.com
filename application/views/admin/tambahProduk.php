<div class="container mt-5">
	<div class="row">
		<div class="col-md-12" style="min-height: 30vw;">
			<div class="col-md-6 rounded-left float-left" style="background-color: #a1e0db;height:552px">
				<!-- <img src="<?= base_url('assets/img/logo.png') ?>" width="70%" style="margin-top: 80px;margin-left: 90px;"> -->
				<!-- <hr> -->
				<h2 class="text-center" style="color:#fff;">Add <br> Products</h2>
			</div>
			<div class="col-md-6 rounded-right float-left" style="background-color: #d4f8e8;height:552px">
				<h3 class="text-center mt-3">Form Add Products</h3>
				<?php $this->session->flashdata('pesan'); ?>
				<!-- <hr> -->
				<form class="col-md-12" action="<?= base_url('admin/tambah_produk') ?>" method="post">
					<div class="d-flex justify-content-center">
						<div class="col-md-10">
							<input type="hidden" name="id_produk" id="id_produk" class="form-control" value="<?= $last_id;  ?>">
							<div class="form-group">
								<label for="namaproduk" class="mt-0">Nama Produk</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-user"></i></div>
									</div>
									<input type="text" name="namaproduk" id="namaproduk" class="form-control" placeholder="Masukkan Nama Produk" value="<?= set_value('namaproduk') ?>">
								</div>
								<small class="text-danger"><?= form_error('namaproduk') ?></small>
							</div>
							<div class="form-group">
								<label for="hargaproduk" class="mt-0">Harga Produk</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-user"></i></div>
									</div>
									<input type="text" name="hargaproduk" id="hargaproduk" class="form-control" placeholder="Masukkan Harga Produk" value="Rp.<?= set_value('hargaproduk') ?>">
								</div>
								<small class="text-danger"><?= form_error('hargaproduk') ?></small>
							</div>
                            <div class="form-group row">
                                <label for="kategoriproduk" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-control form-control-md" id="kategoriproduk" name="kategoriproduk">
                                        <?php foreach ($kategori as $k) : ?>
                                            <option value="<?= $p['id_kategori'] ?>"><?= $k['nama_kategori'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
							<div class="form-group">
								<label for="deskripsiproduk" class="mt-0">Deskripsi Produk</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-briefcase"></i></div>
									</div>
									<input type="text" name="deskripsiproduk" id="deskripsiproduk" class="form-control" placeholder="Masukkan Deskripsi Produk" value="<?= set_value('deskripsiproduk') ?>">
								</div>
								<small class="text-danger"><?= form_error('deskripsiproduk') ?></small>
							</div>
                            <div class="form-group">
								<label for="fotoproduk" class="mt-0">Deskripsi Produk</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-briefcase"></i></div>
									</div>
									<input type="text" name="fotoproduk" id="fotoproduk" class="form-control" placeholder="Upload Foto Produk" value="<?= set_value('fotoproduk') ?>">
								</div>
								<small class="text-danger"><?= form_error('fotoproduk') ?></small>
							</div>
							<div class="d-flex justify-content-around mt-0">
								<button type="submit" class="btn btn-success" onclick="add()">SUBMIT</button>
							</div>
						</div>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>