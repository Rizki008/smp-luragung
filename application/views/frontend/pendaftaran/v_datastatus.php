<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('<?= base_url('frontend/') ?>images/bg_1.jpg')">
	<div class="container">
		<div class="row align-items-end">
			<div class="col-lg-7">
				<h2 class="mb-0">Status Pendaftaran</h2>
				<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p> -->
			</div>
		</div>
	</div>
</div>


<div class="custom-breadcrumns border-bottom">
	<div class="container">
		<a href="<?= base_url() ?>">Home</a>
		<span class="mx-3 icon-keyboard_arrow_right"></span>
		<span class="current">Status Pendaftaran</span>
	</div>
</div>

<div class="site-section">
	<div class="container">

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered zero-configuration">
								<thead class="text-center">
									<tr>
										<th>No</th>
										<th>NIS</th>
										<th>Nama Calon Siswa</th>
										<th>Asal Sekolah</th>
										<th>Alamat</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($status as $key => $value) { ?>
										<tr class="text-center">
											<td><?= $no++; ?></td>
											<td><?= $value->nis ?></td>
											<td><?= $value->nama_lengkap ?></td>
											<td><?= $value->asal_sekolah ?></td>
											<td><?= $value->alamat ?></td>
											<td><?php if ($value->status === '1') { ?>
													<span class="badge badge-success">Lulus</span>
												<?php } elseif ($value->status === '2') { ?>
													<span class="badge badge-danger">Tidak Lulus</span>
												<?php } ?>
											</td>
										</tr>
									<?php } ?>
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