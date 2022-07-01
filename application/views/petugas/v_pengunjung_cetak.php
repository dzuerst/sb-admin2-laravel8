<!DOCTYPE html>
<html>

<head>
	<title>Cetak Laporan pengunjung</title>
</head>

<body>

	<style type="text/css">
		table {
			border-collapse: collapse;
		}

		table th,
		td {
			border: 1px solid #000;
		}
	</style>

	<center>
		<h3>LAPORAN PENGUNJUNG PERPUSTAKAAN<br>SMP NEGERI 4 KOTA BENGKULU</h3>
		<h3></h3>

	</center>

	<table>
		<tr>
			<th width="1%">No</th>
			<th>Nama Anggota</th>
			<th>Kelas</th>
			<th>Tanggal Berkunjung</th>
			<th>Kegiatan</th>
		</tr>
		<?php
		$no = 1;
		foreach ($pengunjung as $p) {
		?>
			<tr>
				<td>
					<center><?php echo $no++; ?> <center>
				</td>
				<td>
					<center><?php echo $p->nama; ?><center>
				</td>
				<td>
					<center><?php echo $p->kelas; ?><center>
				</td>
				<td>
					<center><?php echo date('d-m-Y', strtotime($p->tanggal_berkunjung)); ?><center>
				</td>
				<td>
					<center><?php echo $p->kegiatan; ?><center>
				</td>
			</tr>
		<?php
		}
		?>
	</table>

	<script type="text/javascript">
		window.print();
	</script>

</body>

</html>
