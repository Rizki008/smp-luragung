<!-- Content Start -->
<div class="content">
	<!-- Navbar Start -->
	<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
		<a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
			<h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
		</a>
		<a href="#" class="sidebar-toggler flex-shrink-0">
			<i class="fa fa-bars"></i>
		</a>
		<!-- <form class="d-none d-md-flex ms-4">
			<input class="form-control bg-dark border-0" type="search" placeholder="Search">
		</form> -->
		<div class="navbar-nav align-items-center ms-auto">
			<?php
			$jml_chatting = $this->m_chatting->jml_chatting();
			$daftar_chat = $this->m_chatting->daftar_chat();
			?>
			<div class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
					<i class="fa fa-envelope me-lg-2"></i>
					<span class="d-none d-lg-inline-flex">Message [<?= $jml_chatting ?>]</span>
				</a>
				<div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
					<?php foreach ($daftar_chat as $key => $value) { ?>
						<a href="<?= base_url('admin/view_chatting/' . $value->id_siswa) ?>" class="dropdown-item">
							<div class="d-flex align-items-center">
								<div class="ms-2">
									<h6 class="fw-normal mb-0"><?= $value->nama_lengkap ?></h6>
									<small><?= $value->time ?></small>
								</div>
							</div>
						</a>
						<hr class="dropdown-divider">
					<?php } ?>
					<!-- <a href="#" class="dropdown-item text-center">See all message</a> -->
				</div>
			</div>
			<div class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
					<img class="rounded-circle me-lg-2" src="<?= base_url() ?>backend/img/user.jpg" alt="" style="width: 40px; height: 40px;">
					<span class="d-none d-lg-inline-flex"><?= $this->session->userdata('nama_user') ?></span>
				</a>
				<div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
					<a href="<?= base_url('admin/logout') ?>" class="dropdown-item">Log Out</a>
				</div>
			</div>
		</div>
	</nav>
	<!-- Navbar End -->