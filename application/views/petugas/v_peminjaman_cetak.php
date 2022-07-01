<!DOCTYPE html>
<html>

<head>
	<title>Cetak Laporan Peminjaman Buku</title>
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
		<h3>LAPORAN PEMINJAMAN BUKU<br>PERPUSTAKAAN SMP NEGERI 4 KOTA BENGKULU</h3>
	</center>

	<table>
		<tr>
			<th width="1%">No</th>
			<th>Nama Anggota</th>
			<th>Judul Buku</th>
			<th>Tanggal Pinjam</th>
			<th>Tanggal Harus Kembali</th>
			<th>Tanggal Kembali</th>
		</tr>
		<?php
		$no = 1;
		foreach ($peminjaman as $p) {
		?>
			<tr>
				<td>
					<center><?php echo $no++; ?> <center>
				</td>
				<td>
					<center><?php echo $p->nama; ?><center>
				</td>
				<td>
					<center><?php echo $p->merk; ?><center>
				</td>
				<td>
					<center><?php echo date('d-m-Y', strtotime($p->tgl_pinjam)); ?><center>
				</td>
				<td>
					<center><?php echo date('d-m-Y', strtotime($p->tgl_harus_kembali)); ?><center>
				</td>
				<td><center><?php echo "-" ?></center></td>
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
