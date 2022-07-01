<div class="container-fluid">

	<div class="card shadow mb-4">

		<div class="mt-4 bg-white card-header py-3">
			<div class="row">
				<div class="col"><a href="<?php echo base_url() . 'petugas/buku' ?>" class='btn btn-sm btn-primary pull-right'><i class="fa fa-arrow-left"></i> Kembali</a></div>


				<div class="col">
					<h4 style="color: black;" class="text-center">Tambah Buku Baru</h4>
				</div>


				<div class="col"></div>
			</div>
		</div>

		<div class="card-body">
			<form method="post" action="<?php echo base_url() . 'petugas/buku_tambah_aksi'; ?>">
				<div class="form-group">
					<label class="font-weight-bold">Jenis Buku</label>
					<input type="hidden" name="id_buku">
					<input type="text" class="form-control" name="jenis_barang" placeholder="Jenis buku" required="required">
				</div>

				<div class="form-group">
					<label class="font-weight-bold">Judul Buku</label>
					<input type="text" class="form-control" name="merk" placeholder="Judul buku" required="required">
				</div>

				<div class="form-group">
					<label class="font-weight-bold">Ukuran Buku</label>
					<input type="text" class="form-control" name="ukuran" placeholder="Ukuran buku" required="required">
				</div>

				<div class="form-group">
					<label class="font-weight-bold">Bahan</label>
					<input type="text" class="form-control" name="bahan" placeholder="Bahan" required="required">
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="judul_asli">Nomor Seri</label>
					<input type="text" class="form-control" name="no_seri" placeholder="Nomor seri" required="required">
				</div>

				<div class="form-group">
					<label class="font-weight-bold" for="judul_asli">Nomor Kode</label>
					<input type="text" class="form-control" name="kode_barang" placeholder="Nomor kode" required="required">
				</div>

				<div class="form-group">
					<label class="font-weight-bold" for="judul_asli">Jumlah Buku</label>
					<input type="text" class="form-control" name="jumlah_barang" placeholder="Jumlah buku" required="required">
				</div>

				<div class="form-group">
					<label class="font-weight-bold" for="judul_asli">Harga Buku</label>
					<input type="text" class="form-control" name="harga_beli" placeholder="Harga buku" required="required">
				</div>

				<div class="form-group">
					<label class="font-weight-bold" for="tahun">Tahun Terbit</label>
					<select class="form-control" name="tahun" required="required">
						<option value="">- Pilih tahun</option>
						<?php for ($tahun = date('Y'); $tahun >= 1990; $tahun--) { ?>
							<option value="<?php echo $tahun; ?>"><?php echo $tahun; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="jmlh_pinjam">Jumlah Pinjam</label>
					<input type="number" class="form-control" name="jumlah_pinjam" placeholder="Jumlah Pinjam" required="required">
				</div>
				<div class="form-group">
					<label class="font-weight-bold">Keterangan</label>
					<input type="text" class="form-control" name="keterangan" placeholder="keterangan" required="required">
				</div>

				<!-- status buku -->
				<!-- <div class="form-group">
							<label class="font-weight-bold" for="status">Status Buku</label>
							<select class="form-control" name="status" required="required">
								<option value="">- Pilih status</option>
								<option <?php if ($b->status == "1") {
											echo "selected='selected'";
										} ?> value="1">Tersedia</option>
								<option <?php if ($b->status == "2") {
											echo "selected='selected'";
										} ?> value="2">Sedang Dipinjam</option>
							</select>
						</div> -->
				<div class="d-grid gap-2">
					<input type="submit" class="btn btn-primary btn-block" value="Tambah Buku">
				</div>

			</form>
		</div>


	</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->