<div class="container mt-5">
	<div class="row">
		<div class="col-md-12 rounded-right float-left" style="background-color: #d4f8e8;height:300px;">
			<h3 class="text-center mt-3">Form Add Iklan</h3>
			<?php $this->session->flashdata('pesan'); ?>
			<!-- <hr> -->
			<form class="col-md-12" action="<?= base_url('admin/tambah_iklan') ?>" method="post">
				<div class="d-flex justify-content-center">
					<div class="col-md-10">
						<div class="form-group">
							<label for="nama_iklan" class="mt-0">Nama iklan</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="fas fa-user"></i></div>
								</div>
								<input style="border-radius: 0 10px 10px 0;" type="text" name="nama_iklan" id="namaiklan" class="form-control" placeholder="Masukkan Nama iklan" value="<?= set_value('namaiklan') ?>">
							</div>
							<small class="text-danger"><?= form_error('namaiklan') ?></small>
						</div>
						<div class="d-flex justify-content-center mt-0">
							<button type="submit" class="btn btn-success mb-4" onclick="add()">Add iklan</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>