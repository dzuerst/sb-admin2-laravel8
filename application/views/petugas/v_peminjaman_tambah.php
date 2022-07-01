<div class="container-fluid">

	<div class="card shadow mb-4">

		<div class="mt-4 bg-white card-header py-3">
			<div class="row">
				<div class="col"><a href="<?php echo base_url() . 'petugas/peminjaman' ?>" class='btn btn-sm btn-primary pull-right'><i class="fa fa-arrow-left"></i> Kembali</a></div>

				<div class="col">
					<h4 style="color: black;" class="text-center">Tambah Peminjaman Baru</h4>
				</div>
				<div class="col"></div>
			</div>
		</div>
		<div class="card-body">

		<?php
			if (isset($_GET['alert'])) {
				if ($_GET['alert'] == "gagal") {
					echo "<div class='alert alert-danger font-weight-bold text-center'>Peminjaman buku gagal karena anggota telah melakukan peminjaman buku sebanyak dua kali</div>";
				} 
			}
			?>

			<form method="post" action="<?php echo base_url() . 'petugas/peminjaman_aksi'; ?>">

				<div class="form-group">
					<label class="font-weight-bold" for="id_buku">Buku</label>
					<select class="theSelect form-control" name="id_buku">
						<option value="">- Pilih buku</option>
						<?php foreach ($buku as $b) { ?>
							<option value="<?php echo $b->id_buku; ?>"><?php echo $b->merk . ' | ' . $b->tahun . ' | ' . $b->id_buku; ?></option>
						<?php } ?>
					</select>
				</div>

				<div class="form-group">
					<label class="font-weight-bold" for="id_anggota">Anggota</label>
					<select required class="theSelect form-control" name="id_anggota">
						<option value="">- Pilih anggota</option>
						<?php foreach ($anggota as $a) { ?>

							<option value="<?php echo $a->id_anggota; ?>"><?php echo "Nama : " . $a->nama?></option>

						<?php } ?>
					</select>
				</div>

				<div class="form-group">
					<label class="font-weight-bold" for="tgl_pinjam">Tanggal Mulai Peminjaman</label>
					<input type="date" class="form-control" name="tgl_pinjam" placeholder="Masukkan tanggal mulai pinjam">
				</div>
				<div class="form-group">
					<label class="font-weight-bold" for="tgl_harus_kembali">Tanggal Harus Kembali</label>
					<input type="date" class="form-control" name="tgl_harus_kembali" placeholder="Masukkan tanggal harus kembali">
				</div>

				<script>
					$(".theSelect").select2();
				</script>

				<input type="submit" class="btn btn-primary btn-block" value="Tambah Peminjaman">
			</form>
		</div>
	</div>
</div>