<div class="container mt-5">
	<div class="row">
		<div class="col-md-12" style="min-height: 30vw;">
			<div class="col-md-6 rounded-left float-left" style="background-color: #a1e0db;height:552px">
				<!-- <img src="<?= base_url('assets/img/logo.png') ?>" width="70%" style="margin-top: 80px;margin-left: 90px;"> -->
				<!-- <hr> -->
				<h2 class="text-center" style="color:#fff;">Add <br> Category</h2>
			</div>
			<div class="col-md-6 rounded-right float-left" style="background-color: #d4f8e8;height:552px">
				<h3 class="text-center mt-3">Form Add Category</h3>
				<?php $this->session->flashdata('pesan'); ?>
				<!-- <hr> -->
				<form class="col-md-12" action="<?= base_url('admin/tambah_kategori') ?>" method="post">
					<div class="d-flex justify-content-center">
						<div class="col-md-10">
							<input type="hidden" name="id_kategori" id="id_kategori" class="form-control" value="<?= $last_id;  ?>">
							<div class="form-group">
								<label for="namakategori" class="mt-0">Nama Kategori</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-user"></i></div>
									</div>
									<input type="text" name="namakategori" id="namakategori" class="form-control" placeholder="Masukkan Nama Produk" value="<?= set_value('namakategori') ?>">
								</div>
								<small class="text-danger"><?= form_error('namakategori') ?></small>
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