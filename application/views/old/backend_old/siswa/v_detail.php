<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-sm-12 col-xl-6">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4">Detail Calon Siswa</h6>
				<table class="table table-borderless">
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
		</div>
		<div class="col-sm-12 col-xl-6">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4">Detail Kontak</h6>
				<table class="table table-borderless">
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
		<div class="col-sm-12 col-xl-12">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4">Detail Pendaftaran</h6>
				<table class="table table-borderless">
					<thead>
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
		</div>
	</div>
</div>
<!-- Table End -->