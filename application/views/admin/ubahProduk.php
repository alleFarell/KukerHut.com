<div class="container mt-4" style="min-height: 36rem">
	<h2>Ubah Data Produk</h2>
	<?= validation_errors(); ?>
	<hr>
	<?= form_open('admin/ubah_produk/' . $produk['id_produk']) ?>
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
		<select class="custom-select" id="kategoriproduk" name="nama_kategori">
			<option value="<?= $kategoriProduk['nama_kategori'] ?>" selected><?= $kategoriProduk['id_kategori'] . "-" . $kategoriProduk['nama_kategori'] ?></option>
			<option value="" disabled>==========================</option>
			<?php foreach ($kategori as $k) : ?>
				<?php if ($k['nama_kategori'] != $kategoriProduk['nama_kategori']) : ?>
					<option value="<?= $k['nama_kategori'] ?>"><?= $k['id_kategori'] . "-" . $k['nama_kategori'] ?></option>
				<?php endif; ?>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<?= form_label('Kategori') ?>
		<select class="custom-select" id="id_kategori" name="id_kategori">
			<option value="<?= $kategoriProduk['id_kategori'] ?>" selected><?= $kategoriProduk['id_kategori'] . "-" . $kategoriProduk['nama_kategori'] ?></option>
			<option value="" disabled>==========================</option>
			<?php foreach ($kategori as $k) : ?>
				<?php if ($k['id_kategori'] != $kategoriProduk['id_kategori']) : ?>
					<option value="<?= $k['id_kategori'] ?>"><?= $k['id_kategori'] . "-" . $k['nama_kategori'] ?></option>
				<?php endif; ?>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<?= form_label('Deskripsi Produk') ?>
		<?= form_input(['name' => 'deskripsi_produk', 'class' => 'form-control', 'required' => 'required', 'value' => $produk['deskripsi_produk']]) ?>
	</div>
	<!--  -->
	<div class="form-group">
		<a href="<?= base_url('admin') ?>" class="btn btn-success">Back</a>
		<?= form_submit('submit', 'Update', ['class' => 'btn btn-warning', "onclick" => 'edit()']) ?>
	</div>
	<?= form_close() ?>
</div>