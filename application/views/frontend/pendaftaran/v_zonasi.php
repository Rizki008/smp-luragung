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


		echo form_open('pendaftaran/zonasi') ?>
		<?php $id_pendaftaran = date('Ymd') . strtoupper(random_string('alnum', 8)); ?>
		<input name="id_pendaftaran" value="<?= $id_pendaftaran ?>" type="hidden">
		<h4>Data Siswa</h4>
		<div class="row">
			<div class="col-md-6 form-group">
				<label for="fname">Nama Siswa</label>
				<input type="text" id="fname" name="nama_siswa" class="form-control form-control-lg">
			</div>
			<div class="col-md-6 form-group">
				<label for="fname">Jenis Kelamin</label>
				<input type="text" id="fname" name="jenis_kelamin" class="form-control form-control-lg">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 form-group">
				<label for="lname">NIK</label>
				<input type="text" id="lname" name="nik_siswa" class="form-control form-control-lg">
			</div>
			<div class="col-md-6 form-group">
				<label for="eaddress">NISN</label>
				<input type="text" id="eaddress" name="nisn" class="form-control form-control-lg">
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 form-group">
				<label for="tel">Tempat,</label>
				<input type="text" id="tel" name="tempat" class="form-control form-control-lg">
			</div>
			<div class="col-md-3 form-group">
				<label for="">Tanggal Lahir</label>
				<input type="date" id="tel" name="tgl_lahir" class="form-control form-control-lg">
			</div>
			<div class="col-md-6 form-group">
				<label for="tel">Agama</label>
				<input type="text" id="tel" name="agama" class="form-control form-control-lg">
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 form-group">
				<label for="tel">Kordinat Rumah</label>
				<input type="text" id="tel" name="kordinat_rumah" class="form-control form-control-lg">
			</div>
			<div class="col-md-3 form-group">
				<label for="eaddress">Jarak Rumah Ke Sekolah (M)</label>
				<input type="text" id="eaddress" name="jarak_rumah" class="form-control form-control-lg">
			</div>
			<div class="col-md-6 form-group">
				<label for="message">Satuan Pendidikan Yang Distuji</label>
				<input type="text" id="tel" name="satuan_pendidikan" class="form-control form-control-lg">
			</div>
		</div>
		<hr>
		<h3>Data Orang Tua</h3>
		<div class="row">
			<div class="col-md-6 form-group">
				<label for="message">Nama Ayah</label>
				<input type="text" id="tel" name="nama_ayah" class="form-control form-control-lg">
			</div>
			<div class="col-md-6 form-group">
				<label for="message">Nama Ibu</label>
				<input type="text" id="tel" name="nama_ibu" class="form-control form-control-lg">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 form-group">
				<label for="message">NIK Ayah</label>
				<input type="text" id="tel" name="nik_ayah" class="form-control form-control-lg">
			</div>
			<div class="col-md-6 form-group">
				<label for="message">NIK Ibu</label>
				<input type="text" id="tel" name="nik_ibu" class="form-control form-control-lg">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 form-group">
				<label for="message">Pekerjaan Ayah</label>
				<input type="text" id="tel" name="pekerjaan_ayah" class="form-control form-control-lg">
			</div>
			<div class="col-md-6 form-group">
				<label for="message">Pekerjaan Ibu</label>
				<input type="text" id="tel" name="pekerjaan_ibu" class="form-control form-control-lg">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 form-group">
				<label for="message">No HP</label>
				<input type="text" id="tel" name="no_hp" class="form-control form-control-lg">
			</div>
			<div class="col-md-6 form-group">
				<label for="message">Email</label>
				<input type="text" id="tel" name="email_orangtua" class="form-control form-control-lg">
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 form-group">
				<label for="message">Rt</label>
				<input type="text" id="tel" name="rt" class="form-control form-control-lg">
			</div>
			<div class="col-md-3 form-group">
				<label for="message">Rw</label>
				<input type="text" id="tel" name="rw" class="form-control form-control-lg">
			</div>
			<div class="col-md-6 form-group">
				<label for="message">Ligkungan</label>
				<input type="text" id="tel" name="lingkungan" class="form-control form-control-lg">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 form-group">
				<label for="message">Desa/Kelurahan</label>
				<input type="text" id="tel" name="desa" class="form-control form-control-lg">
			</div>
			<div class="col-md-6 form-group">
				<label for="message">Kecamatan</label>
				<input type="text" id="tel" name="kecamatan" class="form-control form-control-lg">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 form-group">
				<label for="message">Kabupaten</label>
				<input type="text" id="tel" name="kabupaten" class="form-control form-control-lg">
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