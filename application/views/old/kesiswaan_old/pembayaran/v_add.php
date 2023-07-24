<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-sm-12 col-xl-12">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4">Basic Form</h6>
				<form action="<?= base_url('pembayaran/add') ?>" method="POST">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Nama Pembayar</label>
						<input type="text" name="nama_pembayar" class="form-control">
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
	</div>
</div>