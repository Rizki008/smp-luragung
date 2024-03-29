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
			<div class="col-md-10">
				<?php
				//notifikasi form kosong
				echo validation_errors('<div class="alert alert-warning alert-st-three alert-st-bg2 alert-st-bg13" role="alert">
                                <i class="fa fa-exclamation-triangle adminpro-warning-danger admin-check-pro admin-check-pro-clr2 admin-check-pro-clr13" aria-hidden="true"></i>
                                <p class="message-mg-rt"><strong>Warning!</strong>', '</p></div>');

				?>
				<form method="post" action="<?= base_url('siswa/register') ?>" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">

					<div class="row">
						<div class="col-md-6 form-group">
							<label for="nama_lengkap">Nama Lengkap</label>
							<input type="text" id="nama_lengkap" name="nama_lengkap" value="<?= set_value('nama_lengkap') ?>" class=" form-control form-control-lg">
							<?= form_error('nama_lengkap', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="col-md-6 form-group">
							<label for="jk">Jenis Kelamin</label>
							<select name="jk" class="form-control" id="jk">
								<option>---PILIH JENIS KELAMIN---</option>
								<option value="1">Laki-Laki</option>
								<option value="2">Perempuan</option>
							</select>
							<!-- <input type="text" id="jk" name="jk" value="<?= set_value('jk') ?>" class=" form-control form-control-lg"> -->
							<?= form_error('jk', '<small class="text-danger">', '</small>') ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="no_hp_siswa">Nomor Hp Siswa</label>
							<input type="number" id="no_hp_siswa" name="no_hp_siswa" value="<?= set_value('no_hp_siswa') ?>" class=" form-control form-control-lg">
							<?= form_error('no_hp_siswa', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="col-md-6 form-group">
							<label for="status">Status</label>
							<select name="status" class="form-control" id="status">
								<option>---PILIH STATUS---</option>
								<option value="1">OrangTua</option>
								<option value="2">Calon Siswa</option>
							</select>
							<!-- <input type="text" id="status" name="status" value="<?= set_value('status') ?>" class=" form-control form-control-lg"> -->
							<?= form_error('status', '<small class="text-danger">', '</small>') ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="email">Email</label>
							<input type="email" id="email" name="email" value="<?= set_value('email') ?>" class=" form-control form-control-lg">
							<?= form_error('email', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="col-md-6 form-group">
							<label for="pword">Password</label>
							<input type="password" id="pword" name="password_siswa" value="<?= set_value('password_siswa') ?>" class=" form-control form-control-lg">
							<?= form_error('password_siswa', '<small class="text-danger">', '</small>') ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="pword2">Re-type Password</label>
							<input type="password" id="pword2" name="ulangi_password_siswa" value="<?= set_value('ulangi_password_siswa') ?>" class="form-control form-control-lg">
							<?= form_error('ulangi_password_siswa', '<small class="text-danger">', '</small>') ?>
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