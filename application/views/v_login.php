<!DOCTYPE html>
<html>

<head>
	<title>Login - Sistem Informasi Perpustakaan </title>
	<!-- menghubungkan tempalte dengan boostrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
	<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
</head>

<body class="bg-primary">
	<div class="container">

		<h3 class="mt-4 font-weight-normal text-center text-white mb-4"><b>SISTEM INFORMASI PERPUSTAKAAN<br>SMP NEGERI 4 KOTA BENGKULU</b></h3>

		<div class="bg bg-white rounded-circle mx-auto" style="width: 100px;">
		<img style="width: 100px; padding: 8px;" src="<?php echo base_url('assets/images/tutwuri.png') ?>">
		</div>
		

		<div class="col-md-4 offset-md-4 mt-4">
			<div class="card">
				<div class="card-body">
					<?php
					if (isset($_GET['alert'])) {
						if ($_GET['alert'] == "gagal") {
							echo "<div class='alert alert-danger font-weight-bold text-center'>LOGIN GAGAL!</div>";
						} else if ($_GET['alert'] == "belum_login") {
							echo "<div class='alert alert-danger font-weight-bold text-center'>SILAHKAN LOGIN TERLEBIH DULU!</div>";
						} else if ($_GET['alert'] == "logout") {
							echo "<div class='alert alert-success font-weight-bold text-center'>ANDA TELAH LOGOUT!</div>";
						} else if ($_GET['alert'] == "tidak_ditemukan") {
							echo "<div class='alert alert-danger text-center'>Username atau password anda salah!</div>";
						}
					}
					?>

					<h4 class="font-weight-bold text-center mb-3 mt-3">LOGIN</h4>

					<!-- validasi error -->
					<?php echo validation_errors(); ?>

					<form method="post" action="<?php echo base_url() . 'login/login_aksi'; ?>">
						<div class="form-group">
							<label for="username">Username</label>
							<input name="username" type="text" class="form-control" placeholder="Masukkan username">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input name="password" type="password" class="form-control" placeholder="Masukkan Password">
						</div>

						<button type="submit" class="btn btn-primary">Login</button>
					</form>
				</div>

			</div>
		</div>
	</div>

</body>

</html>
