<div class="container">
	<div class="card">
		<div class="bg-white card-header py-3">
			<div class="mt-4 row">
				<div class="col"><a href="<?php echo base_url() . 'petugas/anggota_tambah' ?>" class='btn btn-sm btn-success pull-right'><i class="fa fa-plus"></i> Anggota Baru</a></div>
				<div class="col">
					<h1 class="h3 mb-2 text-gray-800 text-center">Data Anggota</h1>
				</div>
				<div class="col"></div>
			</div>
		</div>

		<div class="card-body">
			<?php
			if (isset($_GET['alert'])) {
				if ($_GET['alert'] == "berhasil_tambah") {
					echo "<div class='alert alert-success font-weight-bold text-center'>Berhasil menambahkan data anggota</div>";
				} else if ($_GET['alert'] == "berhasil_ubah") {
					echo "<div class='alert alert-success font-weight-bold text-center'>Berhasil memperbaruhi data anggota</div>";
				} else if ($_GET['alert'] == "berhasil_hapus") {
					echo "<div class='alert alert-danger font-weight-bold text-center'>Berhasil menghapus data anggota</div>";
				}
			}
			?>

			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Jenis Kelamin</th>
							<th>No Hp</th>
							<th>Opsi</th>
						</tr>
					<tbody>
						<?php
						$no = 1;
						foreach ($anggota as $a) {
						?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $a->nama; ?></td>
								<td><?php echo $a->gender; ?></td>
								<td><?php echo $a->no_hp; ?></td>
								<td>
									<a href="<?php echo base_url() . 'petugas/anggota_edit/' . $a->id_anggota; ?>" class="btn btn-sm btn-warning"><i class="fa fa-wrench"></i> Edit</a>
									<a href="<?php echo base_url() . 'petugas/anggota_hapus/' . $a->id_anggota; ?>" onclick="return confirm('Anda yakin ingin menghapus data anggota?');" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> Hapus</a>
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