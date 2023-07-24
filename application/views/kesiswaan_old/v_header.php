<body>
	<div class="container-fluid position-relative d-flex p-0">
		<!-- Spinner Start -->
		<div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
			<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
		<!-- Spinner End -->


		<!-- Sidebar Start -->
		<div class="sidebar pe-4 pb-3">
			<nav class="navbar bg-secondary navbar-dark">
				<a href="index.html" class="navbar-brand mx-4 mb-3">
					<h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>SMP 2 <br> Luragung</h3>
				</a>
				<div class="d-flex align-items-center ms-4 mb-4">
					<div class="position-relative">
						<img class="rounded-circle" src="<?= base_url() ?>backend/img/user.jpg" alt="" style="width: 40px; height: 40px;">
						<div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
					</div>
					<div class="ms-3">
						<h6 class="mb-0"><?= $this->session->userdata('nama_user'); ?></h6>
						<span>Kesiswaan</span>
					</div>
				</div>
				<div class="navbar-nav w-100">
					<a href="<?= base_url('kesiswaan') ?>" class="nav-item nav-link <?php if ($this->uri->segment(1) == 'kesiswaan' and $this->uri->segment(2) == "") {
																						echo "active";
																					} ?>"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
					<a href="<?= base_url('pembayaran') ?>" class="nav-item nav-link <?php if (
																							$this->uri->segment(1) == 'pembayaran'
																						) {
																							echo "active";
																						} ?>"><i class="fa fa-th me-2"></i>Pembayaran</a>
				</div>
			</nav>
		</div>
		<!-- Sidebar End -->