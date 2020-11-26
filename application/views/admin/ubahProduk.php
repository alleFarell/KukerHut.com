<div class="container mt-4" style="min-height: 36rem">
	<h2 class="mb-0">Ubah Data Produk</h2>
	<small nam=>Last Edit By <b>Admin <?= $produk['editor'] ?></b></small>
	<?= validation_errors(); ?>
	<hr>
	<?= form_open('admin/ubah_produk/' . $produk['id_produk']) ?>
	<input type="text" name="editor" value="<?= $user['username'] ?>" hidden>
	<div class="form-group">
		<?= form_label('Foto Produk') ?><br>
		<img src="<?= base_url('assets/images/fotoProduk/') . $produk['foto_produk'] ?>" style="max-height: 200px;">
		<a class="btn btn-success" href="<?= base_url('upload/uploadFotoProduk/') . $produk['id_produk'] ?>" type="button">Ubah Foto</a>
	</div>
	<br>
	<div class="form-group">
		<?= form_label('Nama Produk') ?>
		<?= form_input(['name' => 'nama_produk', 'class' => 'form-control', 'required' => 'required', 'value' => $produk['nama_produk']]) ?>
	</div>
	<div class="form-group">
		<?= form_label('Harga Produk') ?>
		<input style="border-radius: 0 10px 10px 0;" type="text" name="harga_produk" id="hargaproduk" class="form-control" placeholder="Masukkan Harga Produk" value="<?= $produk['harga_produk'] ?>">
	</div>
	<div class="form-group">
		<?= form_label('Kategori') ?>
		<select class="custom-select" id="kategoriproduk" name="id_kategori">
			<option value="<?= $kategoriProduk['id_kategori'] ?>" selected><?= $kategoriProduk['id_kategori'] . " - " . $kategoriProduk['nama_kategori'] ?></option>
			<option value="" disabled>==========================</option>
			<?php foreach ($kategori as $k) : ?>
				<?php if ($k['nama_kategori'] != $kategoriProduk['nama_kategori']) : ?>
					<option value="<?= $k['id_kategori'] ?>"><?= $k['id_kategori'] . " - " . $k['nama_kategori'] ?></option>
				<?php endif; ?>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<?= form_label('Deskripsi Produk') ?>
		<?= form_textarea(['name' => 'deskripsi_produk', 'class' => 'form-control', 'value' => $produk['deskripsi_produk']]) ?>
	</div>
	<div class="form-group">
		<a href="<?= base_url('admin') ?>" class="btn btn-success">Back</a>
		<?= form_submit('submit', 'Update', ['class' => 'btn btn-warning', "onclick" => 'edit()']) ?>
	</div>
	<?= form_close() ?>
</div>