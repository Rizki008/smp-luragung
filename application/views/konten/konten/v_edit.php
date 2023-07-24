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
		?>
		<form action="<?= base_url('konten/update/' . $konten->id_konten) ?>" method="POST">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Tanggal Mulai</label>
				<input type="date" name="tgl_mulai" value="<?= $konten->tgl_mulai ?>" class="form-control">
			</div>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">No Hp</label>
				<input type="date" name="tgl_akhir" value="<?= $konten->tgl_akhir ?>" class="form-control">
			</div>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Isi konten</label>
				<input type="text" name="isi_konten" value="<?= $konten->isi_konten ?>" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Update</button>
			<a href="<?= base_url('konten/kelola') ?>" class="btn btn-warning">Back</a>
		</form>
	</div>
</div>