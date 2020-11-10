    <div class="container">
		<div class="row" style="min-height: 37rem">
			<div class="col-md-12">
				<div>
					<div class="text-center mt-4">
						<h3><?php echo $title ?></h3>
					</div>
					<div class="container text-right">
						<a href="<?= base_url('admin/tambah_produk') ?>" class="btn btn-primary">Add Data</a>
					</div>
					<br>
					<?php
					$template = array(
						'table_open' => '<table id="tbProduk" class="table-hover table-striped" cellspacing="0" style="width:100%">',
						'thead_open' => '<thead class="table-info text-center">',
						'tbody_open' => '<tbody class ="text-center">',
					);
					$this->table->set_template($template);
					$this->table->set_heading('ID', 'Foto Produk', 'Nama Produk', 'Harga', 'Kategori', 'Deskripsi');

					foreach ($dpta_produk as $dp) {
						$url = 'KukerHut/Kukerhut/admin/hapus_produk/' . $dp['id_produk'];
						$this->table->add_row(
							$dp['id_produk'],
							$dp['foto_produk'],
							$dp['nama_produk'],
                            $dp['harga_produk'],
                            $dp['id_kategori'],
                            $dp['deskripsi_produk'],
							'<a href="' . base_url('admin/ubah_produk/' . $dp['id_produk'])
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