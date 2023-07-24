<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-sm-12 col-xl-12">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4">Basic Form</h6>
				<form action="<?= base_url('konten/add') ?>" method="POST">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Tanggal Mulai</label>
						<input type="date" name="tgl_mulai" class="form-control">
					</div>
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Tanggal Akhir</label>
						<input type="date" name="tgl_akhir" class="form-control">
					</div>
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Isi Konten</label>
						<input type="text" name="isi_konten" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Add</button>
					<a href="<?= base_url('konten/kelola') ?>" class="btn btn-warning">Back</a>
				</form>
			</div>
		</div>
	</div>
</div>