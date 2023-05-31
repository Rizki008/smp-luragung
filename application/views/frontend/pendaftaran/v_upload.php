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
		if ($this->session->flashdata('pesan')) {
			echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fa fa-check"></i>';
			echo $this->session->flashdata('pesan');
			echo '</h5></div>';
		}
		?>

		<?php
		//notifikasi form kosong
		echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fa fa-exclamation-triangle"></i>', '</h5></div>');

		//notifikasi gagal upload gambar
		if (isset($error_upload)) {
			echo '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i>' . $error_upload . '</h5></div>';
		} ?>
		<form action="<?= base_url('pendaftaran/add/' . $persyaratan->id_pendaftaran) ?>" enctype="multipart/form-data" method="post">
			<div class="row">
				<div class="col-md-6 form-group">
					<label for="fname">Nama File</label>
					<input type="text" id="fname" name="keterangan" multiple class="form-control form-control-lg">
				</div>
				<div class="col-md-6 form-group">
					<label for="fname">Persyaratan</label>
					<input type="file" id="fname" name="gambar" id="preview_gambar" class="form-control form-control-lg">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 form-group">
					<img src="<?= base_url('assets/syarat/nopoto.jpg') ?>" id="gambar_load" width="200px">
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<input type="submit" name="fileSubmit" value="Uploads" class="btn btn-primary btn-lg px-5">
					<a href="<?= base_url('pendaftaran') ?>" class="btn btn-warning btn-lg px-5">Kembali</a>
				</div>
			</div>
		</form>
		<hr>
		<div class="row">
			<?php foreach ($gambar as $key => $value) { ?>
				<div class="col-sm-3 text-center">
					<div class="form-group">
						<img src="<?= base_url('assets/syarat/' . $value->gambar) ?>" id="gambar_load" width="250px" height="200px">
					</div>
					<p for="">keterangan : <?= $value->keterangan ?></p>
					<button data-toggle="modal" data-target="#delete<?= $value->id_persyaratan ?>" class="btn btn-danger btn-sm btn-block"><i class="fa fa-trash"></i>Hapus Gambar</button>
				</div>
			<?php } ?>
		</div>
	</div>
</div>