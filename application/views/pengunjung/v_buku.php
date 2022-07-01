<div class="container-fluid">
	<div class="card shadow mb-4 mt-4">
	<div class="bg-white card-header py-3">
		<div class="mt-4 row">
			<div class="col"><a href="<?php echo base_url() . 'pengunjung' ?>" class='btn btn-sm btn-primary pull-right'><i class="fa fa-arrow-left"></i> Kembali</a></div>
			<div class="col">
			<h1 class="h3 mb-2 text-gray-800 text-center">Data Buku</h1>
			</div>
			<div class="col"></div>
		</div>
		</div>
		
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Jenis Buku</th>
							<th>Judul Buku</th>
							<th>Tahun Terbit</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$id_buku = 1;
						foreach ($buku as $b) {
						?>
							<tr>
								<td><?php echo $id_buku++; ?></td>
								<td><?php echo $b->jenis_barang; ?></td>
								<td><?php echo $b->merk; ?></td>
								<td><?php echo $b->tahun; ?></td>
								<td>
									<?php
									if ($b->jumlah_barang - $b->jumlah_pinjam > 0) {
										echo "<span class='badge badge-success'>Tersedia</span>";
									} else {
										echo "<span class='badge badge-danger'>Habis</span>";
									}
									?>
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
