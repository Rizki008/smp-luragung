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
		<form action="<?= base_url('pembayaran/add') ?>" method="POST">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Nama Pembayar</label>
				<input type="text" name="nama_pembyar" class="form-control">
				<!-- <select name="id_siswa" id="id_siswa" class="form-control">
					<option>---Nama Pembayar---</option>
					<?php foreach ($siswa as $key => $value) { ?>
						<option value="id_siswa"><?= $value->nama_lengkap ?></option>
					<?php } ?>
				</select> -->
			</div>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Jumlah Bayar</label>
				<input type="number" name="jml_bayar" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Add</button>
			<a href="<?= base_url('pembayaran') ?>" class="btn btn-warning">Back</a>
		</form>
	</div>
</div>