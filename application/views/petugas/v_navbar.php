<!-- Page Wrapper -->
<div id="wrapper">

	<!-- Sidebar -->
	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

		<!-- Sidebar - Brand -->
		<span style="color: white;" class="font-weight-bold mt-4 d-flex align-items-center justify-content-center">SI PERPUSTAKAAN</span>
		<span style="color: white;" class="font-weight-bold d-flex align-items-center justify-content-center">SMPN 4 KOTA BENGKULU</span>

		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="bg bg-white rounded-circle">
				<img style="padding: 4px;" src="<?php echo base_url(); ?>assets/images/tutwuri.png" width="50" height="50" alt="">
				</div>
		</a>

		<!-- Divider -->
		<hr class="sidebar-divider my-0 mt-2">

		<!-- Nav Item - Dashboard -->
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url() . 'petugas/anggota'; ?>">
				<i class="fa fa-users"></i>
				<span>Data Anggota</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider my-0">

		<!-- Nav Item - Dashboard -->
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url() . 'petugas/datapengunjung'; ?>">
				<i class="fa fa-users"></i>
				<span>Data Pengunjung</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider my-0">

		<!-- Nav Item - Dashboard -->
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url() . 'petugas/buku'; ?>">
				<i class="fa fa-book"></i>
				<span>Data Buku</span></a>
		</li>
		
		<!-- Divider -->
		<hr class="sidebar-divider my-0">

		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo">
				<i class="fa fa-book"></i>
				<span>Data Transaksi</span>
			</a>
			<div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item" href="<?php echo base_url() . 'petugas/peminjaman'; ?>">Data Peminjaman</a>
					<a class="collapse-item" href="<?php echo base_url() . 'petugas/pengembalian'; ?>">Data Pengembalian</a>
				</div>
			</div>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider my-0">

		<!-- Nav Item - Dashboard -->
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url() . 'petugas/laporan'; ?>">
				<i class="fas fa-fw fa-tachometer-alt"></i>
				<span>Laporan</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider my-0">

		<!-- Nav Item - Dashboard -->
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url() . 'petugas/logout' ?>">
				<i class="fas fa-sign-out-alt"></i>
				<span>Logout</span></a>
		</li>



		<!-- Divider -->
		<hr class="sidebar-divider d-none d-md-block">

		<!-- Sidebar Toggler (Sidebar) -->
		<div class="text-center d-none d-md-inline">
			<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>

	</ul>
	<!-- End of Sidebar -->

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content" class="mt-4">