 <!-- Begin Page Content -->
 <div class="container-fluid">

 	<!-- Page Heading -->
 	<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

 	<div class="form-group">
 		<form class="form-inline" action="<?php echo base_url() . 'petugas/buku_detail/-1'; ?>" method="post">
 			<label>Cari Buku</label>
 			<div class="form-group mx-sm-3 ">
 				<select class="theSelect form-control" name="id_buku" action="<?php echo base_url() . 'petugas/peminjaman_aksi'; ?>">
 					<option value="">- Pilih buku</option>
 					<?php foreach ($buku as $b) { ?>
 						<option value="<?php echo $b->id_buku; ?>"><?php echo $b->judul . ' | ' . $b->tahun . ' | ' . $b->id_buku; ?></option>
 					<?php } ?>
 				</select>
 			</div>
 			<!-- <button type="submit" class="btn btn-primary mb-2">Confirm identity</button> -->
 			<button type="submit" class="btn btn-primary btn-sm">Cari</button>

 			<script>
 				$(".theSelect").select2();
 			</script>
 	</div>
 	</form>
 	<br />
 	<br />

 	<div class="row">
 		<div class="col-md-3">
 			<div class="card bg-primary text-white">
 				<div class="card-body">
 					<h1>
 						<?php echo $this->m_data->get_data('buku')->num_rows(); ?>
 						<div class="pull-right">

 							<i class="fa fa-book"></i>
 						</div>
 					</h1>
 					Jumlah Buku
 				</div>
 			</div>
 		</div>
 		<div class="col-md-3">
 			<div class="card bg-danger text-white">
 				<div class="card-body">
 					<h1>
 						<?php echo $this->db->where('peminjaman_status', 1)->from('peminjaman')->count_all_results(); ?>
 						<div class="pull-right">

 							<i class="fa fa-users"></i>
 						</div>
 					</h1>
 					Pengembalian
 				</div>
 			</div>
 		</div>
 		<div class="col-md-3">
 			<div class="card bg-warning text-white">
 				<div class="card-body">
 					<h1>
 						<?php echo $this->db->where('peminjaman_status', 2)->from('peminjaman')->count_all_results(); ?>
 						<div class="pull-right">

 							<i class="fa fa-book"></i>
 						</div>
 					</h1>
 					Peminjaman
 				</div>
 			</div>
 		</div>
 		<br />
 		<br />


 		<?php
			$bln1 = $this->db->where('MONTH(tgl_pinjam)', 1)->from('peminjaman')->count_all_results();
			$bln2 = $this->db->where('MONTH(tgl_pinjam)', 2)->from('peminjaman')->count_all_results();
			$bln3 = $this->db->where('MONTH(tgl_pinjam)', 3)->from('peminjaman')->count_all_results();
			$bln4 = $this->db->where('MONTH(tgl_pinjam)', 4)->from('peminjaman')->count_all_results();
			$bln5 = $this->db->where('MONTH(tgl_pinjam)', 5)->from('peminjaman')->count_all_results();
			$bln6 = $this->db->where('MONTH(tgl_pinjam)', 6)->from('peminjaman')->count_all_results();
			$bln7 = $this->db->where('MONTH(tgl_pinjam)', 7)->from('peminjaman')->count_all_results();
			$bln8 = $this->db->where('MONTH(tgl_pinjam)', 8)->from('peminjaman')->count_all_results();
			$bln9 = $this->db->where('MONTH(tgl_pinjam)', 9)->from('peminjaman')->count_all_results();
			$bln10 = $this->db->where('MONTH(tgl_pinjam)', 10)->from('peminjaman')->count_all_results();
			$bln11 = $this->db->where('MONTH(tgl_pinjam)', 11)->from('peminjaman')->count_all_results();
			$bln12 = $this->db->where('MONTH(tgl_pinjam)', 12)->from('peminjaman')->count_all_results();
			?>

 		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 		<script type="text/javascript">
 			google.charts.load('current', {
 				'packages': ['bar']
 			});
 			google.charts.setOnLoadCallback(drawChart);

 			function drawChart() {
 				var data = google.visualization.arrayToDataTable([
 					['Bulan', 'Jumlah buku dipinjam'],
 					['Jan', <?= $bln1 ?>],
 					['Feb', <?= $bln2 ?>],
 					['Mar', <?= $bln3 ?>],
 					['Apr', <?= $bln4 ?>],
 					['Mei', <?= $bln5 ?>],
 					['Juni', <?= $bln6 ?>],
 					['Juli', <?= $bln7 ?>],
 					['Agust', <?= $bln8 ?>],
 					['Sept', <?= $bln9 ?>],
 					['Okt', <?= $bln10 ?>],
 					['Nov', <?= $bln11 ?>],
 					['Des', <?= $bln12 ?>]
 				]);

 				var options = {
 					chart: {
 						title: 'Data Peminjaman',
 						subtitle: 'Setiap bulan',
 					}
 				};

 				var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

 				chart.draw(data, google.charts.Bar.convertOptions(options));
 			}
 		</script>



 		<div class="content mt-2">
 			<div class="animated fadeIn">
 				<div class="row">

 					<div class="col-md-12">
 						<div class="card">

 							<div class="card-body">

 								<div id="columnchart_material" style="width: 800px; height: 500px;"></div>

 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>


 	</div>



 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->