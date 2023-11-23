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
				<table class="table table-striped table-bordered zero-configuration">
					<tbody>
						<form method="post" action="<?= base_url('kirimemail/send/' . $value->id_siswa) ?>">
							<tr>
								<td>Nama Lengkap</td>
								<!-- <td>: <?= $value->nama_lengkap ?></td> -->
								<td> <input type="text" name="nama" value="<?= $value->nama_lengkap ?>" class="form-control" readonly></td>
							</tr>
							<tr>
								<td>Nis</td>
								<td>: <?= $value->nisn ?></td>
							</tr>
							<tr>
								<td>Tempat, Tanggal Lahir</td>
								<td>: <?= $value->tgl_lahir ?></td>
							</tr>
							<tr>
								<td>No Hp</td>
								<td>: <?= $value->no_hp_siswa ?></td>
							</tr>

							<tr>
								<td>Email Calon Siswa</td>
								<td>: <?= $value->email ?></td>
							</tr>
							<tr>
								<td>Email Orang Tua</td>
								<td>
									<input type="text" name="email_orangtua" class="form-control" value="<?= $value->email_orangtua ?>">
								</td>
							</tr>
							<tr>
								<td>Alamat </td>
								<td>: Rt.<?= $value->rt ?> / Rw.<?= $value->rw ?>, Lingkungan <?= $value->lingkungan ?>, Desa/Kelurahan <?= $value->desa ?>, Kec.<?= $value->kecamatan ?> Kab.<?= $value->kabupaten ?></td>
							</tr>

							<tr>
								<td>Asal Sekolah</td>
								<td>: <?= $value->asal_sekolah ?></td>
							</tr>
							<tr>
								<td>Status</td>
								<td>
									<?php if ($value->status == 0) { ?>

										<button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit<?= $value->id_siswa ?>">
											Lulus
										</button>
										<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $value->id_siswa ?>">
											Tidak Lulus
										</button>

										<!-- <a href="<?= base_url('penerimaan/lulus/' . $value->id_siswa) ?>" class="btn btn-success"><i class="fa fa-check"></i>Lulus</a>
										<a href="<?= base_url('penerimaan/tidaklulus/' . $value->id_siswa) ?>" class="btn btn-danger"><i class="fa fa-check"></i>Tidak Lulus</a> -->
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
							</tr>
							<tr>
								<?php if ($value->status == 1) { ?>
									<td>Kirim Email Lulus</td>
									<td>
										<input type="email" name="email" value="<?= $value->email ?>" class="form-control">
										<br>
										<input type="text" name="alasan_lulus" value="<?= $value->alasan_lulus ?>" class="form-control">
										<br>
										<button type="submit" class="btn btn-success"></i>Send Email</button>
									</td>
								<?php } elseif ($value->status == 2) { ?>
									<td>Kirim Email Tidak Lulus</td>
									<td>
										<input type="email" name="email" value="<?= $value->email ?>" class="form-control">
										<br>
										<input type="text" name="alasan_lulus" value="<?= $value->alasan_lulus ?>" class="form-control">
										<br>
										<button type="submit" class="btn btn-success"></i>Send Email</button>
									</td>
								<?php } ?>
							</tr>
						</form>
					</tbody>
				</table>
			</div>
		</div>

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
										<th scope="col">Nama Ayah</th>
										<th scope="col">Nama Ibu</th>
										<th scope="col">Jumlah Sodara</th>
										<th scope="col">Anak Ke</th>
										<th scope="col">Agama</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row"><?= $value->tgl_daftar ?></th>
										<td><?= $value->nama_ayah ?></td>
										<td><?= $value->nama_ibu ?></td>
										<td><?= $value->jml_sdra ?></td>
										<td><?= $value->anak_ke ?></td>
										<td><?= $value->agama ?></td>
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
	</div>
</div>

<!-- Lulus -->
<?php foreach ($detail as $key => $value) { ?>
	<div class="modal fade" id="edit<?= $value->id_siswa ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Status Kelulusan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?= base_url('penerimaan/lulus/' . $value->id_siswa) ?>" method="POST">
					<div class="modal-body">
						<input type="text" name="alasan_lulus" class="form-control" placeholder="Alasan Lulus / Tidak Lulus">
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Simpan</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php } ?>
<!-- Tidak lulus -->
<?php foreach ($detail as $key => $value) { ?>
	<div class="modal fade" id="hapus<?= $value->id_siswa ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Status Kelulusan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?= base_url('penerimaan/tidaklulus/' . $value->id_siswa) ?>" method="POST">
					<div class="modal-body">
						<input type="text" name="alasan_lulus" class="form-control" placeholder="Alasan Lulus / Tidak Lulus">
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Simpan</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php } ?>