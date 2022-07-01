<div class="container-fluid">

    <div class="card shadow mb-4">

        <div class="mt-4 bg-white card-header py-3">
            <div class="row">
                <div class="col"><a href="<?php echo base_url() . 'petugas/anggota' ?>" class='btn btn-sm btn-primary pull-right'><i class="fa fa-arrow-left"></i> Kembali</a></div>


                <div class="col">
                    <h4 style="color: black;" class="text-center">Tambah Anggota Baru</h4>
                </div>



                <div class="col"></div>
            </div>
        </div>
		<div class="card-body">
			<?php echo form_open_multipart('petugas/anggota_tambah_aksi'); ?>
			<!--<form method="post" action="<?php echo base_url() . 'petugas/anggota_tambah_aksi'; ?>">-->
			<div class="form-group">
				<label class="font-weight-bold" for="nama">Nama Lengkap</label>
				<input type="text" class="form-control" name="nama" placeholder="Nama lengkap" required="required">
			</div>
			<div class="form-group">
				<label class="font-weight-bold" for="tmpt_lhr">Tempat Lahir</label>
				<input type="text" class="form-control" name="tmpt_lhr" placeholder="Tempat Lahir" required="required">
			</div>
			<div class="form-group">
				<label class="font-weight-bold" for="tanggal_lahir">Tanggal Lahir</label>
				<input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal lahir" required="required">
			</div>
			<div class="form-group">
				<label class="font-weight-bold" for="gender">Jenis Kelamin</label>
				<select name="gender" class="form-control" required="required" placeholder=" gender" value="<?php echo $a->gender; ?>">>
					<option value="">Jenis Kelamin</option>
					<option>Laki-laki</option>
					<option>Perempuan</option>
				</select>
			</div>
			<div class="form-group">
				<label class="font-weight-bold" for="alamat">Alamat</label>
				<input type="text" class="form-control" name="alamat" placeholder=" Alamat" required="required">
			</div>
			<div class="form-group">
				<label class="font-weight-bold" for="no_hp">Nomor HP</label>
				<input type="number" class="form-control" name="no_hp" placeholder="Nomor HP" required="required">
			</div>
			<input type="submit" class="btn btn-primary btn-block" value="Tambah Anggota">
			<!--</form>-->
			<?php echo form_close(); ?>
		</div>