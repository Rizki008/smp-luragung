<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-12">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4"><?= $title ?></h6>
				<!-- <a href="<?= base_url('user/add') ?>" class="btn btn-primary m-2"><i class="fa fa-plus"></i>Add</a> -->
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nama Siswa</th>
								<th scope="col">Nis</th>
								<th scope="col">Tempat, Tanggal Lahir</th>
								<th scope="col">Jenis Kelamin</th>
								<th scope="col">Email</th>
								<th scope="col">No Hp</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($calon_siswa as $key => $value) { ?>
								<tr>
									<th scope="row"><?= $no++ ?></th>
									<td><?= $value->nama_lengkap ?></td>
									<td><?= $value->nis ?></td>
									<td><?= $value->ttl ?></td>
									<td><?php if ($value->jk == 1) { ?>
											<p>Laki-Laki</p>
										<?php } elseif ($value->jk == 2) { ?>
											<p>Perempuan</p>
										<?php } ?>
									</td>
									<td><?= $value->email ?></td>
									<td><?= $value->no_hp_siswa ?></td>
									<td>
										<a href="<?= base_url('penerimaan/detail/' . $value->id_siswa) ?>" class="btn btn-warning"> <i class="fa fa-paper-plane"></i>Detail</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Table End -->