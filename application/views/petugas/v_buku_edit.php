<div class="container-fluid">

	<div class="card shadow mb-4">

		<div class="bg-white card-header py-3">
		<div class="mt-4 row">
			<div class="col"><a href="<?php echo base_url() . 'petugas/buku' ?>" class='btn btn-sm btn-primary pull-right'><i class="fa fa-arrow-left"></i> Kembali</a></div>
			<div class="col">
			<h1 class="h3 mb-2 text-gray-800 text-center">Ubah Data Buku</h1>
			</div>
			<div class="col"></div>
		</div>
		</div>

		<div class="card-body">
				<?php foreach ($buku as $b) { ?>
					<form method="post" action="<?php echo base_url() . 'petugas/buku_update'; ?>">
						<div class="form-group">
							<input hidden type="number" class="form-control" name="id_buku" required="required" value="<?php echo $b->id_buku; ?>">
						</div>

						<div class="form-group">
							<label class="font-weight-bold">Jenis Barang</label>
							<input type="hidden" name="id_buku" value="<?php echo $b->id_buku; ?>">
							<input type="text" class="form-control" name="jenis_barang" placeholder="Masukkan jenis barang" required="required" value="<?php echo $b->jenis_barang; ?>">
						</div>

						<div class="form-group">
							<label class="font-weight-bold">Merk / Model</label>
							<input type="text" class="form-control" name="merk" placeholder="Masukkan Merk / Model" required="required" value="<?php echo $b->merk; ?>">
						</div>

						<div class="form-group">
							<label class="font-weight-bold">Ukuran</label>
							<input type="text" class="form-control" name="ukuran" placeholder="Masukkan judul asli" required="required" value="<?php echo $b->ukuran; ?>">
						</div>

						<div class="form-group">
							<label class="font-weight-bold" for="judul_asli">Bahan</label>
							<input type="text" class="form-control" name="bahan" placeholder="Bahan" required="required" value="<?php echo $b->bahan; ?>">
						</div>

						<div class="form-group">
							<label class="font-weight-bold" for="judul_asli">No. Seri</label>
							<input type="text" class="form-control" name="no_seri" placeholder="No. Seri" required="required" value="<?php echo $b->no_seri; ?>">
						</div>

						<div class="form-group">
							<label class="font-weight-bold" for="judul_asli">No. Kode Barang</label>
							<input type="text" class="form-control" name="kode_barang" placeholder="Masukkan judul asli" required="required" value="<?php echo $b->kode_barang; ?>">
						</div>

						<div class="form-group">
							<label class="font-weight-bold" for="judul_asli">Harga Barang</label>
							<input type="text" class="form-control" name="harga_beli" placeholder="Masukkan judul asli" required="required" value="<?php echo $b->harga_beli; ?>">
						</div>

						<div class="form-group">
							<label class="font-weight-bold" for="tahun">Tahun Terbit</label>
							<select class="form-control" name="tahun" required="required">
								<option value="">- Pilih tahun</option>
								<?php for ($tahun = date('Y'); $tahun >= 1990; $tahun--) { ?>
									<option <?php if ($tahun == $b->tahun) {
												echo "selected='selected'";
											} ?> value="<?php echo $tahun; ?>"><?php echo $tahun; ?></option>
								<?php } ?>
							</select>
						</div>

						<div class="form-group">
							<label class="font-weight-bold" for="judul_asli">Jumlah Barang / Register</label>
							<input type="text" class="form-control" name="jumlah_barang" placeholder="Masukkan judul asli" required="required" value="<?php echo $b->jumlah_barang; ?>">
						</div>

						<div class="form-group">
							<label class="font-weight-bold" for="jmlh_pinjam">Jumlah Pinjam</label>
							<input readonly type="number" class="form-control" name="jumlah_pinjam" placeholder="Masukkan Jumlah Pinjam" required="required" value="<?php echo $b->jumlah_pinjam; ?>">
						</div>
						<div class="form-group">
							<label class="font-weight-bold">Sisa Barang</label>
							<input readonly type="number" class="form-control" name="sisa_barang" placeholder="Sisa Barang" required="required" value="<?php echo $b->jumlah_barang - $b->jumlah_pinjam; ?>">
						</div>
						<div class="form-group">
							<label class="font-weight-bold">Keterangan</label>
							<input type="text" class="form-control" name="keterangan" placeholder="Masukkan keterangan" required="required" value="<?php echo $b->keterangan; ?>">
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

						<input type="submit" class="btn btn-primary btn-block" value="Ubah Data">
					</form>
				<?php } ?>

			</div>
		</div>
	</div>
