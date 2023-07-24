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
		<a href="<?= base_url('admin') ?>">Home</a>
		<span class="mx-3 icon-keyboard_arrow_right"></span>
		<span class="current"><?= $title ?></span>
	</div>
</div>

<div class="site-section">
	<div class="container">
		<form method="post" action="kirimemail/send">

			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
				<input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			<div class="form-floating mb-3">
				<select class="form-select mb-3" name="status" aria-label="Default select example">
					<option selected>Pilih Status Kelulusan</option>
					<option value="Lulus">Lulus</option>
					<option value="Tidak Lulus">Tidak Lulus</option>
				</select>
			</div>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Keterangan Lulus</label>
				<textarea type="text" name="keterangan" class="form-control"></textarea>
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Email</label>
				<input type="email" name="email" class="form-control" id="exampleInputPassword1">
			</div>

			<button type="submit" class="btn btn-primary">Kirim Pesan</button>
			<a href="<?= base_url('penerimaan') ?>" class="btn btn-warning">Kembali</a>
		</form>
	</div>
</div>