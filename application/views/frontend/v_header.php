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
					<?php if ($this->session->userdata('email') == "") { ?>
						<div class="col-lg-3 text-right">
							<a href="<?= base_url('siswa/login') ?>" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
							<a href="<?= base_url('siswa/register') ?>" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
						</div>
					<?php } else { ?>
						<div class="col-lg-3 text-right">
							<a href="#" class="small mr-3"><span class="icon-unlock-alt"></span> <?= $this->session->userdata('nama_lengkap') ?></a>
							<a href="<?= base_url('siswa/logout') ?>" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Logout</a>
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
									<a href="<?= base_url() ?>" class="nav-link text-left">Home</a>
								</li>
								<?php if ($this->session->userdata('status') === '2') { ?>
									<li class="has-children">
										<a href="#" class="nav-link text-left">Pendaftaran Calon Siswa</a>
										<ul class="dropdown">
											<li><a href="<?= base_url('pendaftaran/daftar') ?>">Jalur Umum</a></li>
											<li><a href="<?= base_url('pendaftaran/prestasi') ?>">Jalur Prestasi</a></li>
											<li><a href="<?= base_url('pendaftaran/zonasi') ?>">Jalur Zonasi</a></li>
										</ul>
									</li>
									<li>
										<a href="<?= base_url('pendaftaran') ?>" class="nav-link text-left">Upload Persyaratan Pendaftaran</a>
									</li>
								<?php } elseif ($this->session->userdata('status') === '1') { ?>
									<li>
										<a href="<?= base_url('pendaftaran/status') ?>" class="nav-link text-left">Status Pendaftaran</a>
									</li>
									<li>
										<a href="<?= base_url('chatting') ?>" class="nav-link text-left">Chatting</a>
									</li>
								<?php } ?>
							</ul>
							</ul>
						</nav>

					</div>
					<div class="ml-auto">
						<div class="social-wrap">
							<a href="<?= base_url('chatting') ?>"><span class="icon-envelope-o"></span></a>
							<a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
						</div>
					</div>

				</div>
			</div>

		</header>