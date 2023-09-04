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
				<img src="<?= base_url() ?>frontend/images/course_3.jpg" alt="Image" class="img-fluid">
				<hr>
				<h4>Untuk Jalur Prestasi Silahkan Upload Persyaratan</h4>
				<ol class="ul-check primary list-unstyled">
					<li>Kartu Keluarga </li>
					<li>Akta Kelahiran</li>
					<li>Sertifikat Prestasi</li>
					<li>Ijazah SD</li>
					<li>Raport SD</li>
				</ol>
			</div>
			<div class="col-lg-5 ml-auto align-self-center">
				<h2 class="section-title-underline mb-5">
					<span>Persyaratan Pendaftaran Calon Peserta Baru</span>
				</h2>
				<p>Silahkan Upload persyaratan dibawah ini dengan format, JPG,JPEG,PNG atau PDF</p>
				<hr>
				<h4>Untuk Jalur UMUM silahkan Upload Persysratan</h4>
				<ol class="ul-check primary list-unstyled">
					<li>Kartu Keluarga </li>
					<li>Akta Kelahiran</li>
					<li>Surat Keterangan Lulus (SKL)</li>
					<li>Ijazah SD</li>
					<li>Raport SD</li>
				</ol>

				<h4>Untuk Jalur Zonasi Silahkan Upload Persyaratan</h4>
				<ol class="ul-check primary list-unstyled">
					<li>Kartu Keluarga </li>
					<li>Akta Kelahiran</li>
					<li>KTP Orang Tua(suami+istri)</li>
					<li>Kartu KIP</li>
					<li>Kartu PKH</li>
					<li>Ijazah SD/MI</li>
				</ol>
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
										<th>No</th>
										<th>Nama ayah</th>
										<th>Nama ibu</th>
										<th>Nama Siswa</th>
										<th>Jalur</th>
										<th>Status</th>
										<th>Jumlah Upload Persyaratan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($persyaratan as $key => $value) { ?>
										<tr class="text-center">
											<td><?= $no++; ?></td>
											<td><?= $value->nama_ayah ?></td>
											<td><?= $value->nama_ibu ?></td>
											<td><?= $value->nama_siswa ?></td>
											<td><?= $value->jalur ?></td>
											<td><?php if ($value->status === '0') { ?>
													<span class="badge badge-primary">Calon Siswa</span>
												<?php } elseif ($value->status === '1') { ?>
													<span class="badge badge-success">Lulus</span>
												<?php } elseif ($value->status === '2') { ?>
													<span class="badge badge-danger">Tidak Lulus</span>
												<?php } ?>
											</td>
											<td><span class="badge bg-success">
													<h5><?= $value->total_gambar ?></h5>
												</span></td>
											<td>
												<a href="<?= base_url('pendaftaran/add/' . $value->id_pendaftaran) ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"> Upload Persyaratan</i></a>
												<a href="<?= base_url('pendaftaran/detail/' . $value->id_pendaftaran) ?>" class="btn btn-warning btn-sm"> Deatail Persyaratan</a>
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