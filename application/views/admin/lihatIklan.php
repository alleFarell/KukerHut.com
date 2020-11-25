<div class="container">
	<div class="row" style="min-height: 37rem">
		<div class="col-md-12">
			<div>
				<div class="text-center mt-4">
					<h3><?php echo $title ?></h3>
				</div>
				<div class="container text-right">
					<a href="<?= base_url('admin/tambah_iklan') ?>" class="btn btn-primary">Add Iklan</a>
				</div>
				<br>
				<?php
				$template = array(
					'table_open' => '<table id="tbIklan" class="table-hover table-striped" cellspacing="0" style="width:100%">',
					'thead_open' => '<thead class="table-info text-center">',
					'tbody_open' => '<tbody class ="text-center">',
				);
				$this->table->set_template($template);
				$this->table->set_heading('ID', 'Nama Iklan', 'Foto Iklan', 'Action');

				foreach ($data_iklan as $di) {
					$url = 'KukerHut/admin/hapus_iklan/' . $di['id_iklan'];
					if ($di['foto_iklan'] != 'default.png') {
						$this->table->add_row(
							$di['id_iklan'],
							$di['nama_iklan'],
							$di['foto_iklan'],
							"<button href=\"#\" onclick=\"del('" . $url . "')\" class=\"btn btn-danger btn-sm\">"
								. '<i class="fa fa-trash"></li>'
								. '</button>'
						);
					} else {
						$this->table->add_row(
							$di['id_iklan'],
							$di['nama_iklan'],
							'<a href="' . base_url('upload/uploadFotoIklan/' . $di['id_iklan'])
								. '" class="btn btn-info py-0	">'
								. 'Upload Foto</i>'
								. '</a>',
							"<button href=\"#\" onclick=\"del('" . $url . "')\" class=\"btn btn-danger btn-sm\">"
								. '<i class="fa fa-trash"></li>'
								. '</button>'
						);
					}
				}
				echo $this->table->generate();
				$this->table->clear();
				?>
			</div>
		</div>
	</div>
</div>