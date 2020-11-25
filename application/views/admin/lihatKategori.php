<div class="container">
		<div class="row" style="min-height: 37rem">
			<div class="col-md-12">
				<div>
					<div class="text-center mt-4">
						<h3><?php echo $title ?></h3>
					</div>
					<div class="container text-right">
						<a href="<?= base_url('admin/tambah_kategori') ?>" class="btn btn-primary">Add Data</a>
					</div>
					<br>
					<?php
					$template = array(
						'table_open' => '<table id="tbKategori" class="table-hover table-striped" cellspacing="0" style="width:100%">',
						'thead_open' => '<thead class="table-info text-center">',
						'tbody_open' => '<tbody class ="text-center">',
					);
					$this->table->set_template($template);
					$this->table->set_heading('ID', 'Nama Kategori', 'Action');

					foreach ($data_kategori as $dk) {
						$url = 'KukerHut/admin/hapus_kategori/' . $dk['id_kategori'];
						$this->table->add_row(
							$dk['id_kategori'],
							$dk['nama_kategori'],
							'<a href="' . base_url('admin/ubah_kategori/' . $dk['id_kategori'])
								. '" class="btn btn-warning btn-sm">'
								. '<i class="fa fa-edit"></i>'
								. '</a> &#160;'
								. "<button href=\"#\" onclick=\"del('" . $url . "')\" class=\"btn btn-danger btn-sm\">"
								. '<i class="fa fa-trash"></li>'
								. '</button>'
						);
					}
					echo $this->table->generate();
					$this->table->clear();
					?>
				</div>
			</div>
		</div>
	</div>