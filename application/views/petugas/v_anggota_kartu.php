<!DOCTYPE html>
<html>

<head>
	<title>Cetak Kartu Anggota</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

	<style type="text/css">
		.card {
			border: 2px solid #000;
			width: 450px;
		}

		.card-header {
			border-bottom: 2px solid #000;
			text-align: center;
			font-weight: bold;
			padding: 10px;

		}

		.card-body {
			padding: 20px;
		}
	</style>

	<div class="card">
		<div class="card-header">
			<img src="<?php echo base_url(); ?>assets/images/logo.png" width="50" height="50" alt="">
			PERPUSTAKAAN SMA IT IQRA' KOTA BENGKULU
		</div>
		<div class="card-body">
			<center>Kartu Perpustakaan</center>
			<div class="row">
				<div class="col-sm-9">
					<?php
					$no = 1;
					foreach ($anggota as $a) {
					?>
						<div class="row">
							<div class="col-sm-5">
								Id Anggota<br>
								Nama<br>
								<?php
								$nama = strlen($a->nama);
								if ($nama > 16) {
									echo '<br>';
								}
								?>
								NISN<br>
								Tempat Lahir<br>
								Tanggal Lahir<br>
								Gender<br>
								Alamat<br>
								No Hp<br>

								Jenis Anggota<br>
								<!-- <tr>
									<td>Nama</td>
									<td>:</td>
									<td><?php echo $a->nama; ?></td>
								</tr>
								<tr>
									<td>NISN</td>
									<td>:</td>
									<td><?php echo $a->nisn; ?></td>
								</tr>
								<tr>
									<td>Tempat Lahir</td>
									<td>:</td>
									<td><?php echo $a->tmpt_lhr; ?></td>
								</tr>
								<tr>
									<td>Tanggal Lahir</td>
									<td>:</td>
									<td><?php echo $a->tanggal_lahir; ?></td>
								</tr>
								<tr>
									<td>Gender</td>
									<td>:</td>
									<td><?php echo $a->gender; ?></td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td>:</td>
									<td><?php echo $a->alamat; ?></td>
								</tr>
								<tr>
									<td>No Hp</td>
									<td>:</td>
									<td><?php echo $a->no_hp; ?></td>
								</tr>
			
								<tr>
									<td>Jenis Anggota</td>
									<td>:</td>
									<td><?php echo $a->jenis_anggota; ?></td>
								</tr> -->
							</div>
							<div class="col">
								<?php
								$kalimat = $a->nama;
								$huruf_maksimal = 16;

								$nama = substr($kalimat, 0, $huruf_maksimal);
								?>
								: <?php echo $a->id_anggota; ?><br>
								: <?php echo $a->nama; ?><br>
								: <?php echo $a->nisn; ?><br>
								: <?php echo $a->tmpt_lhr; ?><br>
								: <?php echo $a->tanggal_lahir; ?><br>
								: <?php echo $a->gender; ?><br>
								: <?php echo $a->alamat; ?><br>
								: <?php echo $a->no_hp; ?><br>

								: <?php echo $a->jenis_anggota; ?><br>
							</div>
						</div>
				</div>
				<div class="col-sm-3">
					<tr>
						<td>
							<img src="<?php echo base_url(); ?>assets/foto/<?php echo $a->foto; ?>" width=" 90" height="110" alt="">
						</td>

					</tr>

				</div>
			</div>
		<?php
					}
		?>
		</table>
		</div>
	</div>
	</div>

	<script type="text/javascript">
		window.print();
	</script>

</body>

</html>
