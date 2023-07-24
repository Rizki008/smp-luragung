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
									foreach ($calon_siswa_tidaklulus as $key => $value) { ?>
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
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</div>
</div>