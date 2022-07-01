<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Laporan</h1>

	<div class="row">
		<div class="col-md-3">
			<div class="card">
				<div class="bg-white card-header text-center">
					<h6 class="font-weight-bold">Laporan Peminjaman</h6>
				</div>
				<div class="card-body">
					<form method="get" action="">
						<div class="form-group">
							<label class="font-weight-bold" for="tgl_pinjam">Tanggal Mulai Peminjaman</label>
							<input type="date" class="form-control" name="tgl_pinjam" placeholder="Masukkan tanggal peminjaman">
						</div>
						<div class="form-group">
							<label class="font-weight-bold" for="tgl_kembali">Tanggal Harus Kembali</label>
							<input type="date" class="form-control" name="tgl_harus_kembali" placeholder="Masukkan tanggal kembali">
						</div>
						<div class="row ml-2">
							<input type="submit" class="btn btn-primary" value="Filter">

							<?php
							// membuat tombol cetak jika data sudah di filter
							if (isset($_GET['tgl_pinjam']) && isset($_GET['tgl_harus_kembali'])) {
								$mulai = $_GET['tgl_pinjam'];
								$sampai = $_GET['tgl_harus_kembali'];
							?>
								<a class='ml-2 btn btn-primary' target="_blank" href='<?php echo base_url() . 'petugas/peminjaman_cetak/?tgl_pinjam=' . $mulai . '&tgl_harus_kembali=' . $sampai ?>'><i class='fa fa-print'></i> CETAK</a>
							<?php
							}
							?>
						</div>

					</form>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card">
				<div class="bg-white card-header text-center">
					<h6 class="font-weight-bold">Laporan Pengembalian</h6>
				</div>
				<div class="card-body">
					<form method="get" action="">
						<div class="form-group">
							<label class="font-weight-bold">Tanggal Mulai Peminjaman</label>
							<input type="date" class="form-control" name="tgl_pinjam" placeholder="Masukkan tanggal peminjaman">
						</div>
						<div class="form-group">
							<label class="font-weight-bold">Tanggal Pengembalian</label>
							<input type="date" class="form-control" name="tgl_kembali" placeholder="Masukkan tanggal kembali">
						</div>
						<div class="row ml-2">
							<input type="submit" class="btn btn-primary" value="Filter">

							<?php
							// membuat tombol cetak jika data sudah di filter
							if (isset($_GET['tgl_pinjam']) && isset($_GET['tgl_kembali'])) {
								$mulai = $_GET['tgl_pinjam'];
								$sampai = $_GET['tgl_kembali'];
							?>
								<a class='ml-2 btn btn-primary' target="_blank" href='<?php echo base_url() . 'petugas/pengembalian_cetak/?tgl_pinjam=' . $mulai . '&tgl_kembali=' . $sampai ?>'><i class='fa fa-print'></i> CETAK</a>
							<?php
							}
							?>
						</div>

					</form>
				</div>
			</div>
		</div>


		<div class="col-md-3">
			<div class="card">
				<div class="bg-white card-header text-center">
					<h6 class="font-weight-bold">Laporan Pengunjung</h6>
				</div>
				<div class="card-body">
					<form method="get" action="">
						<div class="form-group">
							<label class="font-weight-bold" for="tgl_mulai">Tanggal Mulai</label>
							<input type="date" class="form-control" name="tgl_mulai_pengunjung" placeholder="Masukkan tanggal peminjaman">
						</div>
						<div class="form-group">
							<label class="font-weight-bold" for="tgl_akhir">Tanggal Berakhir</label>
							<input type="date" class="form-control" name="tgl_akhir_pengunjung" placeholder="Masukkan tanggal kembali">
						</div>
						<div class="row ml-2">
							<input type="submit" class="btn btn-primary" value="Filter">

							<?php
							// membuat tombol cetak jika data sudah di filter
							if (isset($_GET['tgl_mulai_pengunjung']) && isset($_GET['tgl_akhir_pengunjung'])) {
								$mulai = $_GET['tgl_mulai_pengunjung'];
								$sampai = $_GET['tgl_akhir_pengunjung'];
							?>
								<a class='ml-2 btn btn-primary' target="_blank" href='<?php echo base_url() . 'petugas/pengunjung_cetak/?tgl_mulai=' . $mulai . '&tgl_akhir=' . $sampai ?>'><i class='fa fa-print'></i> CETAK</a>
							<?php
							}
							?>
						</div>

					</form>
				</div>
			</div>
		</div>

		<br />
		<br />



	</div>

	<div class="card-body">


		<br />


	</div>
	<!-- End of Main Content -->