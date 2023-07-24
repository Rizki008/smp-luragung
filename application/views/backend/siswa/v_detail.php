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
								<td><?= $value->keterangan ?></td>
							</tr>

						<?php } ?>
					</tbody>
				</table>
			</div>
			<div class="col-lg-6 ml-auto align-self-center">
				<table class="table table-striped table-bordered zero-configuration">
					<tbody>

						<tr>
							<td>Nama Lengkap</td>
							<td>: <?= $value->nama_lengkap ?></td>
						</tr>
						<tr>
							<td>Nis</td>
							<td>: <?= $value->nis ?></td>
						</tr>
						<tr>
							<td>Tempat, Tanggal Lahir</td>
							<td>: <?= $value->ttl ?></td>
						</tr>
						<br>
						<tr>
							<td>Jenis Kelamin</td>
							<td>: <?php if ($value->jk == 1) { ?>
									<p>Laki-Laki</p>
								<?php } elseif ($value->jk == 2) { ?>
									<p>Perempuan</p>
								<?php } ?>
							</td>
						</tr>
						<tr>
							<td>No Hp</td>
							<td>: <?= $value->no_hp_siswa ?></td>
						</tr>

						<tr>
							<td>Email</td>
							<td>: <?= $value->email ?></td>
						</tr>
						<tr>
							<td>Alamat </td>
							<td>: <?= $value->alamat ?></td>
						</tr>

						<tr>
							<td>Asal Sekolah</td>
							<td>: <?= $value->asal_sekolah ?></td>
						</tr>
						<tr>
							<td>Action</td>
							<td>:
								<?php if ($value->status == 0) { ?>
									<a href="<?= base_url('penerimaan/lulus/' . $value->id_siswa) ?>" class="btn btn-success"><i class="fa fa-check"></i>Lulus</a>
									<a href="<?= base_url('penerimaan/tidaklulus/' . $value->id_siswa) ?>" class="btn btn-danger"><i class="fa fa-check"></i>Tidak Lulus</a>
								<?php } elseif ($value->status == 1) { ?>
									<a href="<?= base_url('KirimEmail') ?>" class="btn btn-success"><i class="fa fa-envelope-o"></i>Send Email</a>
								<?php } elseif ($value->status == 2) { ?>
									<a href="<?= base_url('KirimEmail') ?>" class="btn btn-danger"><i class="fa fa-envelope-o"></i>Send Email</a>
								<?php } ?>
							</td>
						</tr>
						<!-- <tr>
							<td>Kirim Email Lulus</td>
							<td>: <a href="<?= base_url('KirimEmail') ?>" class="btn btn-success"><i class="fa fa-envelope-o"></i>Send Email</a></td>
						</tr> -->
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