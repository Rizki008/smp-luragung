<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $title ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
	<link rel="stylesheet" href="fonts/icomoon/style.css">

	<link rel="stylesheet" href="<?= base_url() ?>frontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>frontend/css/jquery-ui.css">
	<link rel="stylesheet" href="<?= base_url() ?>frontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>frontend/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>frontend/css/owl.theme.default.min.css">

	<link rel="stylesheet" href="<?= base_url() ?>frontend/css/jquery.fancybox.min.css">

	<link rel="stylesheet" href="<?= base_url() ?>frontend/css/bootstrap-datepicker.css">

	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="<?= base_url() ?>frontend/css/aos.css">
	<link href="<?= base_url() ?>frontend/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="<?= base_url() ?>frontend/css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

	<div class="site-wrap">

		<div class="site-mobile-menu site-navbar-target">
			<div class="site-mobile-menu-header">
				<div class="site-mobile-menu-close mt-3">
					<span class="icon-close2 js-menu-toggle"></span>
				</div>
			</div>
			<div class="site-mobile-menu-body"></div>
		</div>


		<div class="py-2 bg-light">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-9 d-none d-lg-block">
					</div>
					<?php if ($this->session->userdata('username') == "") { ?>
						<div class="col-lg-3 text-right">
							<a href="<?= base_url('admin/login') ?>" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
						</div>
					<?php } else { ?>
						<div class="col-lg-3 text-right">
							<a href="#" class="small mr-3"><span class="icon-unlock-alt"></span> <?= $this->session->userdata('nama_user') ?></a>
							<a href="<?= base_url('admin/logout') ?>" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Logout</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

			<div class="container">
				<div class="d-flex align-items-center">
					<div class="site-logo">
						<a href="index.html" class="d-block">
							<img src="<?= base_url() ?>frontend/images/logos.png" alt="Image" class="img-fluid">
						</a>
					</div>
					<div class="mr-auto">
						<nav class="site-navigation position-relative text-right" role="navigation">
							<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
								<li class="active">
									<a href="<?= base_url('admin') ?>" class="nav-link text-left">Home</a>
								</li>
								<li class="has-children">
									<a href="#" class="nav-link text-left">Data Calon Siswa</a>
									<ul class="dropdown">
										<li><a href="<?= base_url('penerimaan') ?>">Calon Siswa Baru</a></li>
										<li><a href="<?= base_url('penerimaan/diterima') ?>">Calon Siswa Diterima</a></li>
										<li><a href="<?= base_url('penerimaan/ditolak') ?>">Calon Siswa Tidak Diterima</a></li>
									</ul>
								</li>
								<li>
									<a href="<?= base_url('user') ?>" class="nav-link text-left">Data User</a>
								</li>
							</ul>
						</nav>

					</div>

				</div>
			</div>

		</header>


		<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('<?= base_url('frontend/') ?>images/bg_1.jpg')">
			<div class="container">
				<div class="row align-items-end justify-content-center text-center">
					<div class="col-lg-7">
						<h2 class="mb-0">Login</h2>
						<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p> -->
					</div>
				</div>
			</div>
		</div>


		<div class="custom-breadcrumns border-bottom">
			<div class="container">
				<a href="index.html">Home</a>
				<span class="mx-3 icon-keyboard_arrow_right"></span>
				<span class="current">Login</span>
			</div>
		</div>

		<div class="site-section">
			<div class="container">


				<div class="row justify-content-center">
					<div class="col-md-5">
						<form method="post" action="<?= base_url('admin/login') ?>" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">
							<div class="row">
								<div class="col-md-12 form-group">
									<label for="username">Username</label>
									<input type="text" id="username" name="username" value="<?= set_value('username') ?>" class="form-control form-control-lg">
									<?= form_error('username', '<small class="text-danger">', '</small>') ?>
								</div>
								<div class="col-md-12 form-group">
									<label for="pword">Password</label>
									<input type="password" id="pword" name="password" value="<?= set_value('password') ?>" class="form-control form-control-lg">
									<?= form_error('password', '<small class="text-danger">', '</small>') ?>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<input type="submit" value="Log In" class="btn btn-primary btn-lg px-5">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="copyright">
							<p>
								Copyright &copy;<script>
									document.write(new Date().getFullYear());
								</script> SMP 2 Luragung <i class="icon-heart" aria-hidden="true"></i> <a href="<?= base_url() ?>" target="_blank">Kuningan Jawabarat</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
	<!-- .site-wrap -->


	<!-- loader -->
	<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78" />
		</svg></div>

	<script src="<?= base_url() ?>frontend/js/jquery-3.3.1.min.js"></script>
	<script src="<?= base_url() ?>frontend/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="<?= base_url() ?>frontend/js/jquery-ui.js"></script>
	<script src="<?= base_url() ?>frontend/js/popper.min.js"></script>
	<script src="<?= base_url() ?>frontend/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>frontend/js/owl.carousel.min.js"></script>
	<script src="<?= base_url() ?>frontend/js/jquery.stellar.min.js"></script>
	<script src="<?= base_url() ?>frontend/js/jquery.countdown.min.js"></script>
	<script src="<?= base_url() ?>frontend/js/bootstrap-datepicker.min.js"></script>
	<script src="<?= base_url() ?>frontend/js/jquery.easing.1.3.js"></script>
	<script src="<?= base_url() ?>frontend/js/aos.js"></script>
	<script src="<?= base_url() ?>frontend/js/jquery.fancybox.min.js"></script>
	<script src="<?= base_url() ?>frontend/js/jquery.sticky.js"></script>
	<script src="<?= base_url() ?>frontend/js/jquery.mb.YTPlayer.min.js"></script>




	<script src="<?= base_url() ?>frontend/js/main.js"></script>

</body>

</html>