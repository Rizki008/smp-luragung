<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('<?= base_url('frontend/') ?>images/bg_1.jpg')">
	<div class="container">
		<div class="row align-items-end">
			<div class="col-lg-7">
				<h2 class="mb-0">Persyaratan Pendaftaran</h2>
				<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p> -->
			</div>
		</div>
	</div>
</div>


<div class="custom-breadcrumns border-bottom">
	<div class="container">
		<a href="<?= base_url() ?>">Home</a>
		<span class="mx-3 icon-keyboard_arrow_right"></span>
		<span class="current">Persyaratan</span>
	</div>
</div>

<div class="site-section">
	<div class="container">
		<div class="row mb-5">

			<div class="col-lg-6 mb-lg-0 mb-4">
				<h4>Persyaratan</h4>
				<hr>
				<table class="table table-striped table-bordered zero-configuration">
					<thead>
						<tr>
							<th scope="col">Gambar</th>
							<th scope="col">Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($detail as $key => $value) { ?>
							<tr>
								<th scope="row"><img src="<?= base_url('assets/syarat/' . $value->gambar)  ?>" width="150px" alt=""></th>
								<td><?= $value->keterangan_syarat ?></td>
							</tr>

						<?php } ?>
					</tbody>
				</table>
			</div>
			<div class="col-lg-6 ml-auto align-self-center">
				<h4>Data Orang Tua / Wali</h4>
				<hr>
				<table class="table table-striped table-bordered zero-configuration">
					<thead>
						<tr>
							<th scope="col" colspan="2" class="text-center">Data Orang Tua</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Nama Ayah</td>
							<td>: <?= $value->nama_ayah ?></td>
						</tr>
						<tr>
							<td>Nama Ibu</td>
							<td>: <?= $value->nama_ibu ?></td>
						</tr>
						<tr>
							<td>NIK Ayah</td>
							<td>: <?= $value->nik_ayah ?></td>
						</tr>
						<tr>
							<td>NIK Ibu</td>
							<td>: <?= $value->nik_ibu ?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>Rt.<?= $value->rt ?> / Rw.<?= $value->rw ?>, Lingkungan <?= $value->lingkungan ?>, Desa/Kelurahan <?= $value->desa ?>, Kec.<?= $value->kecamatan ?> Kab.<?= $value->kabupaten ?></td>
						</tr>
						<tr>
							<td>No Telpon/HP</td>
							<td>: <?= $value->no_hp ?></td>
						</tr>
						<tr>
							<td>Pekerjaan Ayah</td>
							<td>: <?= $value->pekerjaan_ayah ?></td>
						</tr>
						<tr>
							<td>Pekerjaan Ibu</td>
							<td>: <?= $value->pekerjaan_ibu ?></td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
		<hr>
		<h1>Data Siswa</h1>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<?php
							if ($this->session->flashdata('pesan')) {
								echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i>';
								echo $this->session->flashdata('pesan');
								echo '</h5></div>';
							}
							?>
							<table class="table table-striped table-bordered zero-configuration">
								<thead class="text-center">
									<tr>
										<th scope="col">Tanggal Daftar</th>
										<th scope="col">Nama Lengkap Siswa</th>
										<th scope="col">Jenis Kelamin</th>
										<th scope="col">NIK</th>
										<th scope="col">NISN</th>
										<th scope="col">Tempat, Tanggal Lahir</th>
										<th scope="col">Agama</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row"><?= $value->tgl_daftar ?></th>
										<td><?= $value->nama_siswa ?></td>
										<td><?= $value->jenis_kelamin ?></td>
										<td><?= $value->nik_siswa ?></td>
										<td><?= $value->nisn ?></td>
										<td><?= $value->tempat ?>,<?= $value->tgl_lahir ?></td>
										<td><?= $value->agama ?></td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<?php
							if ($this->session->flashdata('pesan')) {
								echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i>';
								echo $this->session->flashdata('pesan');
								echo '</h5></div>';
							}
							?>
							<table class="table table-striped table-bordered zero-configuration">
								<thead class="text-center">
									<tr>
										<th scope="col">Kordinat Rumah</th>
										<th scope="col">Jarak Rumah Ke Sekolah</th>
										<th scope="col">Satuan Pendidikan Distujui</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><?= $value->kordinat_rumah ?></td>
										<td><?= $value->jarak_rumah ?> (M)</td>
										<td><?= $value->satuan_pendidikan ?></td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
		<hr>
		<h4>Status Kelulusan</h4>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<?php
							if ($this->session->flashdata('pesan')) {
								echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i>';
								echo $this->session->flashdata('pesan');
								echo '</h5></div>';
							}
							?>
							<table class="table table-striped table-bordered zero-configuration">
								<thead class="text-center">
									<tr>
										<th scope="col">Nama Calon Siswa</th>
										<th scope="col">Status Calon Siswa</th>
										<th scope="col">Email Calon Siswa</th>
										<th scope="col">Email Orang Tua</th>
										<th scope="col">Keterangan</th>
									</tr>
								</thead>
								<tbody>
									<form method="post" action="<?= base_url('kirimemail/send/' . $value->id_siswa) ?>">
										<tr>
											<th scope="row"><?= $value->nama_siswa ?></th>
											<td>
												<?php if ($value->status == 0) { ?>
													<a href="<?= base_url('penerimaan/lulus_zonasi/' . $value->id_siswa) ?>" class="btn btn-success"><i class="fa fa-check"></i>Lulus</a>
													<a href="<?= base_url('penerimaan/tidaklulus_zonasi/' . $value->id_siswa) ?>" class="btn btn-danger"><i class="fa fa-check"></i>Tidak Lulus</a>
												<?php } elseif ($value->status == 1) { ?>
													<!-- <span class="badge badge-success">Lulus</span> -->
													<input type="text" name="status" value="Lulus" class="form-control" readonly>
													<!-- <a href="<?= base_url('KirimEmail') ?>" class="btn btn-success"><i class="fa fa-envelope-o"></i>Send Email</a> -->
												<?php } elseif ($value->status == 2) { ?>
													<!-- <span class="badge badge-danger">Tidak Lulus</span> -->
													<input type="text" name="status" value="Tidak Lulus" class="form-control" readonly>
													<!-- <a href="<?= base_url('KirimEmail') ?>" class="btn btn-danger"><i class="fa fa-envelope-o"></i>Send Email</a> -->
												<?php } ?>
											</td>
											<td><?= $value->email ?></td>
											<td><?= $value->email_orangtua ?></td>
											<td>
												<?php if ($value->status == 1) { ?>
													<p>Kirim Email Lulus</p>

													<input type="email" name="email" value="<?= $value->email ?>" class="form-control">
													<br>
													<button type="submit" class="btn btn-success"></i>Send Email</button>

												<?php } elseif ($value->status == 2) { ?>
													<p>Kirim Email Tidak Lulus</p>
													<input type="email" name="email" value="<?= $value->email ?>" class="form-control">
													<br>
													<button type="submit" class="btn btn-success"></i>Send Email</button>
												<?php } ?>
											</td>
										</tr>
									</form>
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</div>
</div>
