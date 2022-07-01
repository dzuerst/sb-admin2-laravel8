<div class="container">
	<div class="card">
		<div class="bg-white card-header py-3">
			<div class="mt-4 row">
				<div class="col"><a href="<?php echo base_url() . 'petugas/peminjaman_tambah' ?>" class='btn btn-sm btn-success pull-right'><i class="fa fa-plus"></i> Peminjaman Baru</a></div>
				<div class="col">
					<h1 class="h3 mb-2 text-gray-800 text-center">Data Peminjaman</h1>
				</div>
				<div class="col"></div>
			</div>
		</div>

		<div class="card-body">
			<?php
			if (isset($_GET['alert'])) {
				if ($_GET['alert'] == "berhasil_tambah") {
					echo "<div class='alert alert-success font-weight-bold text-center'>Berhasil menambahkan data peminjaman</div>";
				} else if ($_GET['alert'] == "berhasil_batal") {
					echo "<div class='alert alert-danger font-weight-bold text-center'>Berhasil membatalkan peminjaman buku</div>";
				}
			}
			?>


			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th style="width: 1%">No</th>
							<th>Nama Peminjam</th>
							<th>Judul Buku</th>
							<th>Tanggal Peminjaman</th>
							<th>Tanggal Harus Kembali</th>
							<th style="width: 1%">Jumlah Hari</th>
							<th>Status</th>
							<th style="width: 20%">Opsi</th>
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
								<td><?php echo date('d-m-Y', strtotime($p->tgl_pinjam)); ?></td>
								<td><?php echo date('d-m-Y', strtotime($p->tgl_harus_kembali)); ?></td>
								<td><?php echo $p->jmlh_hari; ?></td>
								<td>
									<?php
									if ($p->peminjaman_status == "1") {
										echo "<div class='badge badge-success'>Selesai</div>";
									} else if ($p->peminjaman_status == "2") {
										echo "<div class='badge badge-warning'>Dipinjam</div>";
									}
									?>
								</td>
								<td class="text-center">

									<?php
									if ($p->peminjaman_status == '1') {
										echo "-";
									} else if ($p->peminjaman_status == '2') {
									?>
										<a href="<?php echo base_url() . 'petugas/peminjaman_selesai/' . $p->id_peminjaman . '/' . $p->id_buku; ?>" class="btn btn-sm btn-warning"><i class="fa fa-refresh"></i> Selesai</a>

										<a href="<?php echo base_url() . 'petugas/peminjaman_batalkan/' . $p->id_peminjaman . '/' . $p->id_buku; ?>" onclick="return confirm('Yakin ingin membatalkan peminjaman buku??');" class="btn btn-sm btn-danger"><i class="fa fa-close"></i> Batalkan</a>
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
</div>