<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-body">

		<div class="mt-4 row">
			<div class="col"><a href="<?php echo base_url() . 'petugas/buku' ?>" class='btn btn-sm btn-primary pull-right'><i class="fa fa-arrow-left"></i> Kembali</a></div>
			<div class="col">
			<h1 class="h3 mb-2 text-gray-800 text-center">Detail Data Buku</h1>
			</div>
			<div class="col"></div>
		</div>

			<!-- Page Heading -->
			
			
			
			<div class="box-body">
				<br />

				<table class="table table-bordered table-striped table" width="50%">
					<thead>
						<?php
						$id_buku = 1;
						foreach ($buku as $b) {
						?>
							<tr>
								<td>Status</td>

								<td>
									<?php
									if(($b->jumlah_barang - $b->jumlah_pinjam) > 0){
										$tersedia = ($b->jumlah_barang - $b->jumlah_pinjam);
										echo "<span class='badge badge-success p-2'>Tersedia $tersedia</span>";
									  }else {
										echo "<span class='badge badge-danger p-2'>Dipinjam</span>";
									  }
									?>

							</tr>

							<tr>
								<td>Jenis Barang</td>

								<td><?php echo $b->jenis_barang; ?></td>
							</tr>
							<tr>
								<td>Merk / Model</td>

								<td><?php echo $b->merk; ?></td>
							</tr>
							<tr>
								<td>Tahun Terbit</td>

								<td><?php echo $b->tahun; ?></td>
							</tr>
							<tr>
								<td>Ukuran</td>

								<td><?php echo $b->ukuran; ?></td>
							</tr>
							<tr>
								<td>Bahan</td>

								<td><?php echo $b->bahan; ?></td>
							</tr>
							<tr>
								<td>No. Kode Barang</td>

								<td><?php echo $b->kode_barang; ?></td>
							</tr>
							<tr>
								<td>Jumlah Barang / Register</td>
								<td><?php echo $b->jumlah_barang; ?></td>
							</tr>
							<tr>
								<td>Jumlah Pinjam</td>
								<td><?php echo $b->jumlah_pinjam; ?></td>
							</tr>
							<tr>
								<td>Sisa Barang</td>
								<td><?php echo $b->jumlah_barang - $b->jumlah_pinjam; ?></td>
							</tr>
							<tr>
								<td>Harga Beli</td>
								<td><?php echo $b->harga_beli; ?></td>
							</tr>
							<tr>
								<td>Keterangan</td>
								<td><?php echo $b->keterangan; ?></td>
							</tr>
							<tr>
								<td>Opsi</td>

								<td>

									<a href="<?php echo base_url() . 'petugas/buku_edit/' . $b->id_buku; ?>" class="btn btn-sm btn-warning"><i class="fa fa-wrench"></i> Edit</a>
									<a href="<?php echo base_url() . 'petugas/buku_hapus/' . $b->id_buku; ?>" onclick="return confirm('Anda yakin ingin menghapus data buku?');" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> Hapus</a>

								</td>
							</tr>
					</thead>
					<tbody>
					<?php
						}
					?>
					</tbody>
				</table>
				</>

			</div>
		</div>

	</div>
</div>

</div>