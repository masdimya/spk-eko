<?php $pag = $this->uri->segment(1); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php echo $pag; ?> | AHP Persebaya U-14</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url() ?>assets/img/icon.ico" type="image/x-icon" />
	<!-- Fonts and icons -->
	<script src="<?= base_url() ?>assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Open+Sans:300,400,600,700"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
				urls: ['<?= base_url() ?>assets/css/fonts.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/azzara.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/demo.css">

</head>

<body>
	<div class="wrapper">
		<!--
			Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
		<div class="main-header" data-background-color="green">
			<!-- Logo Header -->
			<div class="logo-header">

				<a href="index.php" class="logo">
					<h2 class="navbar-brand" style="color:white;">
						SPK AHP
					</h2>
					<!-- <img src="#" alt="navbar brand" class="navbar-brand"> -->
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
				<div class="navbar-minimize">
					<button class="btn btn-minimize btn-rounded">
						<i class="fa fa-bars"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg">

				<div class="container-fluid">
					<!-- <div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div> -->
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>

						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="<?= base_url() ?>assets/img/user.png" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">

								<li>
									<!-- <a class="dropdown-item" href="#">My Profile</a>
									<a class="dropdown-item" href="#">My Balance</a>
									<a class="dropdown-item" href="#">Inbox</a> -->
									<?php
									// if($_SESSION['roleuser_session'] == 1){
									?>

									<?php
									// }else{
									?>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="petugas.php">Pengaturan Akun</a>
									<?php
									// }
									?>

									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="<?php echo base_url() ?>admin/Auth/logout">Keluar</a>
								</li>
							</ul>
						</li>

					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>