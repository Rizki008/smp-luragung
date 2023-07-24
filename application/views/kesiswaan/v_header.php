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
									<a href="<?= base_url('kesiswaan') ?>" class="nav-link text-left">Home</a>
								</li>
								<li>
									<a href="<?= base_url('pembayaran') ?>" class="nav-link text-left">Pembayaran</a>
								</li>
							</ul>
							</ul>
						</nav>

					</div>

				</div>
			</div>

		</header>