<div class="container-fluid">

    <div class="card shadow mb-4">

        <div class="mt-4 bg-white card-header py-3">
            <div class="row">
                <div class="col"><a href="<?php echo base_url() . 'petugas/anggota' ?>" class='btn btn-sm btn-primary pull-right'><i class="fa fa-arrow-left"></i> Kembali</a></div>


                <div class="col">
                    <h4 style="color: black;" class="text-center">Ubah Data Pengunjung</h4>
                </div>



                <div class="col"></div>
            </div>
        </div>

		<div class="card-body">

			<?php foreach ($anggota as $a) { ?>
				<form method="post" action="<?php echo base_url() . 'petugas/anggota_update'; ?>">
					<div class="form-group">
						<label class="font-weight-bold" for="nama">Nama Lengkap</label>
						<input type="hidden" value="<?php echo $a->id_anggota; ?>" name="id_anggota">
						<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required="required" value="<?php echo $a->nama; ?>">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="tmpt_lhr">Tempat Lahir</label>
						<input type="text" class="form-control" name="tmpt_lhr" required="required" placeholder="Tempat Lahir" value="<?php echo $a->tmpt_lhr; ?>">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="tanggal_lahir">Tanggal Lahir</label>
						<input type="date" class="form-control" name="tanggal_lahir" required="required" placeholder="Tanggal Lahir" value="<?php echo $a->tanggal_lahir; ?>">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="gender">Jenis Kelamin</label>
						<select name="gender" class="form-control" required="required" placeholder="gender" value="<?php echo $a->gender; ?>">>
							<option value="">Pilih Jenis Kelamin</option>
							<option>Laki-laki</option>
							<option>Perempuan</option>
						</select>
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="alamat">Alamat</label>
						<input type="text" class="form-control" name="alamat" required="required" placeholder="alamat" value="<?php echo $a->alamat; ?>">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="no_hp">Nomor Hp</label>
						<input type="number" class="form-control" name="no_hp" required="required" placeholder="Nomor HP" value="<?php echo $a->no_hp; ?>">
					</div>
					<input type="submit" class="btn btn-primary btn-block" value="Ubah Data">
				</form>
			<?php } ?>


		</div>
	</div>
