<div class="container mt-4" style="min-height: 36rem">
	<h2>Ubah Data Kategori</h2>
	<?= validation_errors(); ?>
	<hr>
	<?= form_open('admin/ubah_kategori/' . $kategori['id_kategori']) ?>
	<div class="form-group">
		<?= form_label('Nama Kategori') ?>
		<?= form_input(['name' => 'nama_kategori', 'class' => 'form-control', 'required' => 'required', 'value' => $kategori['nama_kategori']]) ?>
	</div>
	<div class="form-group">
		<a href="<?= base_url('admin/kategori') ?>" class="btn btn-success">Back</a>
		<?= form_submit('submit', 'Update', ['class' => 'btn btn-warning', "onclick" => 'edit()']) ?>
	</div>
	<?= form_close() ?>
</div>