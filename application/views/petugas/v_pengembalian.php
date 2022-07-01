<div class="container">
	<div class="card">
		<div class="bg-white card-header py-3">
			<div class="mt-4 row">
				<div class="col"></div>
				<div class="col">
					<h1 class="h3 mb-2 text-gray-800 text-center">Data Pengembalian</h1>
				</div>
				<div class="col"></div>
			</div>
		</div>
		<div class="card-body">
			<?php
			if (isset($_GET['alert'])) {
				if ($_GET['alert'] == "berhasil_tambah") {
					echo "<div class='alert alert-success font-weight-bold text-center'>Berhasil menambahkan data pengembalian</div>";
				} else if ($_GET['alert'] == "berhasil_batal") {
					echo "<div class='alert alert-danger font-weight-bold text-center'>Berhasil menghapus data pengembalian</div>";
				}
			}
			?>

			<div class="table-responsive">
				<table class="table table-bordered table-striped table-hover table-datatable">
					<thead>
						<tr>
							<th width="1%">No</th>

							<th>Nama Anggota</th>
							<th>Judul Buku</th>
							<!-- <th>Tanggal Peminjaman</th> -->
							<th>Tanggal Kembali</th>
							<th>Tanggal Harus Kembali</th>
							<th>Denda</th>
							<th>Status</th>
							<th width="16%">Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($peminjaman as $p) {
						?>
							<tr>
								<td><?php echo $no++; ?></td>

								<td><?php echo $p->nama; ?></td>
								<td><?php echo $p->merk; ?></td>
								<!-- <td><?php echo date('d-m-Y', strtotime($p->tgl_pinjam)); ?></td> -->
								<td>
									<?php
									$date = $p->tgl_kembali;
									if (!date('U', strtotime($date))) {
										echo '';
									} else {
										echo date('d-m-Y', strtotime($p->tgl_kembali));
									}
									?>
								</td>
								<td><?php echo date('d-m-Y', strtotime($p->tgl_harus_kembali)); ?></td>
								<td><?php echo $p->denda; ?></td>

								<td>
									<?php
									if ($p->peminjaman_status == "1") {
										echo "<div class='badge badge-success'>Selesai</div>";
									}
									?>
								</td>
								<td class="text-center">

									<?php
									if ($p->peminjaman_status == '1') {
									?>
										<a href="<?php echo base_url() . 'petugas/pengembalian_batalkan/' . $p->id_peminjaman . '/' . $p->id_buku; ?>" onclick="return confirm('Anda yakin ingin menghapus data pengembalian?');" class="btn btn-sm btn-danger"><i class="fa fa-close"></i> Hapus</a>
									<?php
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
	<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->