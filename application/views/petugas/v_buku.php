<div class="container-fluid">

	<div class="card shadow mb-4">

		<div class="mt-4 bg-white card-header py-3">
			<div class="row">
			<div class="col">
				<a href="<?php echo base_url() . 'petugas/buku_tambah' ?>" class='btn btn-sm btn-success pull-right'><i class="fa fa-plus"></i> Buku Baru</a>
				</div>
				<div class="col">
				<h1 class="h3 mb-2 text-gray-800 text-center">Data Buku</h1>
				</div>
				<div class="col"></div>
				

			
			
			</div>
			
		</div>
		<div class="card-body">
		<?php
            if (isset($_GET['alert'])) {
                if ($_GET['alert'] == "berhasil") {
                    echo "<div class='alert alert-success font-weight-bold text-center'>Data buku berhasil ditambahkan</div>";
                } else if ($_GET['alert'] == "berhasil_ubah") {
                    echo "<div class='alert alert-success font-weight-bold text-center'>Data buku berhasil diperbaruhi</div>";
                } else if ($_GET['alert'] == "berhasil_hapus") {
                    echo "<div class='alert alert-danger font-weight-bold text-center'>Data buku berhasil dihapus</div>";
                }
            } 
            ?>

			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th style="width: 50%">Merk / Model</th>
							<th>Tahun</th>
							<th>Status</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$id_buku = 1;
						foreach ($buku as $b) {
						?>
							<tr>
								<td><?php echo $id_buku++; ?></td>
								<td><?php echo $b->merk; ?></td>
								<td><?php echo $b->tahun; ?></td>
								<td>
									<?php
									if (($b->jumlah_barang - $b->jumlah_pinjam) > 0) {
										echo "<span class='badge badge-success p-2'>Tersedia</span>";
									} else {
										echo "<span class='badge badge-danger p-2'>Habis</span>";
									}
									?>
								</td>
								<td>
									<a href="<?php echo base_url() . 'petugas/buku_detail/' . $b->id_buku; ?>" class="btn btn-sm btn-primary">Detail</a>
									<a href="<?php echo base_url() . 'petugas/buku_edit/' . $b->id_buku; ?>" class="btn btn-sm btn-warning"><i class="fa fa-wrench"></i> Edit</a>
									<a href="<?php echo base_url() . 'petugas/buku_hapus/' . $b->id_buku; ?>" onclick="return confirm('Anda yakin ingin menghapus data buku?');" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> Hapus</a>

								</td>
							</tr>
						<?php
						}
						?>

					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->