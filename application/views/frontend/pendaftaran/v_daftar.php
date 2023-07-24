<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('<?= base_url('frontend/') ?>images/bg_1.jpg')">
	<div class="container">
		<div class="row align-items-end">
			<div class="col-lg-7">
				<h2 class="mb-0"><?= $title ?></h2>
				<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p> -->
			</div>
		</div>
	</div>
</div>


<div class="custom-breadcrumns border-bottom">
	<div class="container">
		<a href="index.html">Home</a>
		<span class="mx-3 icon-keyboard_arrow_right"></span>
		<span class="current"><?= $title ?></span>
	</div>
</div>

<div class="site-section">
	<div class="container">
		<?php
		//notifikasi form kosong
		echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fa fa-exclamation-triangle"></i>', '</h5></div>');


		echo form_open('pendaftaran/daftar') ?>
		<?php $id_pendaftaran = date('Ymd') . strtoupper(random_string('alnum', 8)); ?>
		<input name="id_pendaftaran" value="<?= $id_pendaftaran ?>" type="hidden">
		<div class="row">
			<div class="col-md-6 form-group">
				<label for="fname">Nama Ayah</label>
				<input type="text" id="fname" name="nama_ayah" class="form-control form-control-lg">
			</div>
			<div class="col-md-6 form-group">
				<label for="lname">Nama Ibu</label>
				<input type="text" id="lname" name="nama_ibu" class="form-control form-control-lg">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 form-group">
				<label for="eaddress">Jumlah Sodara</label>
				<input type="text" id="eaddress" name="jml_sdra" class="form-control form-control-lg">
			</div>
			<div class="col-md-6 form-group">
				<label for="tel">Anak Ke-</label>
				<input type="text" id="tel" name="anak_ke" class="form-control form-control-lg">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 form-group">
				<label for="tel">Tanggal Lahir</label>
				<input type="date" id="tel" name="tgl_lahir" class="form-control form-control-lg">
			</div>
			<div class="col-md-6 form-group">
				<label for="tel">Agama</label>
				<input type="text" id="tel" name="agama" class="form-control form-control-lg">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 form-group">
				<label for="eaddress">Nis</label>
				<input type="text" id="eaddress" name="nis" class="form-control form-control-lg">
			</div>
			<div class="col-md-6 form-group">
				<label for="message">Asal Sekolah</label>
				<input type="text" id="tel" name="asal_sekolah" class="form-control form-control-lg">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 form-group">
				<label for="message">Email Orang Tua</label>
				<input type="email" id="tel" name="email_orangtua" class="form-control form-control-lg">
			</div>
			<div class="col-md-6 form-group">
				<label for="message">Alamat Lengkap</label>
				<input type="text" id="tel" name="alamat" class="form-control form-control-lg">
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<input type="submit" value="Daftar" class="btn btn-primary btn-lg px-5">
			</div>
		</div>
		<?php echo form_close() ?>
	</div>
</div>