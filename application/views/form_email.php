<!-- <!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SMP 2 Luragung</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Kirim Pesan Lulus Ke Calon Siswa Baru</h3>
				<form method="post" action="kirimemail/send">
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input class="form-control" type="text" name="nama">
					</div>
					<div class="form-group">
						<label>Status</label>
						<input class="form-control" type="text" name="status">
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<textarea class="form-control" name="keterangan" rows="4"></textarea>
					</div>
					<div class="form-group">
						<label>Alamat Email Saya</label>
						<input class="form-control" type="text" name="email">
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-primary">Kirim ke Email Saya</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html> -->


<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-sm-12 col-xl-12">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4">Basic Form</h6>
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
	</div>
</div>