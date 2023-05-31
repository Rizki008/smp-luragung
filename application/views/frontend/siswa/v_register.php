<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('<?= base_url() ?>frontend/images/bg_1.jpg')">
	<div class="container">
		<div class="row align-items-end justify-content-center text-center">
			<div class="col-lg-7">
				<h2 class="mb-0">Register</h2>
				<p>Registrasi calon siswa baru.</p>
			</div>
		</div>
	</div>
</div>


<div class="custom-breadcrumns border-bottom">
	<div class="container">
		<a href="<?= base_url() ?>">Home</a>
		<span class="mx-3 icon-keyboard_arrow_right"></span>
		<span class="current">Register</span>
	</div>
</div>

<div class="site-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<?php
				//notifikasi form kosong
				echo validation_errors('<div class="alert alert-warning alert-st-three alert-st-bg2 alert-st-bg13" role="alert">
                                <i class="fa fa-exclamation-triangle adminpro-warning-danger admin-check-pro admin-check-pro-clr2 admin-check-pro-clr13" aria-hidden="true"></i>
                                <p class="message-mg-rt"><strong>Warning!</strong>', '</p></div>');

				?>
				<form method="post" action="<?= base_url('siswa/register') ?>" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="nama_lengkap">nama_lengkap</label>
							<input type="text" id="nama_lengkap" name="nama_lengkap" value="<?= set_value('nama_lengkap') ?>" class=" form-control form-control-lg">
							<?= form_error('nama_lengkap', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="col-md-12 form-group">
							<label for="nis">nis</label>
							<input type="text" id="nis" name="nis" value="<?= set_value('nis') ?>" class=" form-control form-control-lg">
							<?= form_error('nis', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="col-md-12 form-group">
							<label for="ttl">Tempat, Tanggal Lahir</label>
							<input type="text" id="ttl" name="ttl" value="<?= set_value('ttl') ?>" class=" form-control form-control-lg">
							<?= form_error('ttl', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="col-md-12 form-group">
							<label for="jk">Jenis Kelamin</label>
							<input type="text" id="jk" name="jk" value="<?= set_value('jk') ?>" class=" form-control form-control-lg">
							<?= form_error('jk', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="col-md-12 form-group">
							<label for="no_hp_siswa">Nomor Hp Siswa</label>
							<input type="text" id="no_hp_siswa" name="no_hp_siswa" value="<?= set_value('no_hp_siswa') ?>" class=" form-control form-control-lg">
							<?= form_error('no_hp_siswa', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="col-md-12 form-group">
							<label for="username">Username</label>
							<input type="text" id="username" name="username_siswa" value="<?= set_value('username_siswa') ?>" class=" form-control form-control-lg">
							<?= form_error('username_siswa', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="col-md-12 form-group">
							<label for="email">Email</label>
							<input type="email" id="email" name="email" value="<?= set_value('email') ?>" class=" form-control form-control-lg">
							<?= form_error('email', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="col-md-12 form-group">
							<label for="pword">Password</label>
							<input type="password" id="pword" name="password_siswa" value="<?= set_value('password_siswa') ?>" class=" form-control form-control-lg">
							<?= form_error('password_siswa', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="col-md-12 form-group">
							<label for="pword2">Re-type Password</label>
							<input type="password" id="pword2" name="ulangi_password_siswa" value="<?= set_value('ulangi_password_siswa') ?>" class="form-control form-control-lg">
							<?= form_error('ulangi_password_siswa', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="col-md-12 form-group">
							<label for="asal_sekolah">Asal Sekolah</label>
							<input type="text" id="asal_sekolah" name="asal_sekolah" value="<?= set_value('asal_sekolah') ?>" class=" form-control form-control-lg">
							<?= form_error('asal_sekolah', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="col-md-12 form-group">
							<label for="alamat">alamat</label>
							<input type="text" id="alamat" name="alamat" value="<?= set_value('alamat') ?>" class=" form-control form-control-lg">
							<?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<input type="submit" value="Register" class="btn btn-primary btn-lg px-5">
						</div>
					</div>
				</form>
			</div>
		</div>



	</div>
</div>