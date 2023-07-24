<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('<?= base_url('frontend/') ?>images/bg_1.jpg')">
	<div class="container">
		<div class="row align-items-end justify-content-center text-center">
			<div class="col-lg-7">
				<h2 class="mb-0"><?= $title ?></h2>
				<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p> -->
			</div>
		</div>
	</div>
</div>


<div class="custom-breadcrumns border-bottom">
	<div class="container">
		<a href="<?= base_url() ?>">Home</a>
		<span class="mx-3 icon-keyboard_arrow_right"></span>
		<span class="current">Login</span>
	</div>
</div>

<div class="site-section">
	<div class="container">


		<div class="row justify-content-center">
			<div class="col-md-5">
				<?php
				echo validation_errors('<div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fa fa-exclamation-triangle"></i> Coba Lagi</h5>', '</div>');

				if ($this->session->flashdata('error')) {
					echo '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fa fa-ban"></i> Gagal</h5>';
					echo $this->session->flashdata('error');
					echo '
    </div>';
				}

				if ($this->session->flashdata('pesan')) {
					echo '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fa fa-check"></i> Sukses</h5>';
					echo $this->session->flashdata('pesan');
					echo '</div>';
				}

				?>
				<form method="post" action="<?= base_url('siswa/login') ?>" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="email">Email</label>
							<input type="text" id="email" name="email" value="<?= set_value('email') ?>" class="form-control form-control-lg">
							<?= form_error('email', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="col-md-12 form-group">
							<label for="pword">Password</label>
							<input type="password" id="pword" name="password_siswa" value="<?= set_value('password_siswa') ?>" class="form-control form-control-lg">
							<?= form_error('password_siswa', '<small class="text-danger">', '</small>') ?>
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