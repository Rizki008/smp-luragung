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
							<a href="<?= base_url('pembayaran/add') ?>" class="btn btn-primary m-2"><i class="fa fa-plus"></i>Add</a>
							<table class="table table-striped table-bordered zero-configuration">
								<thead class="text-center">
									<tr>
										<th scope="col">#</th>
										<th scope="col">Nama Pembayar</th>
										<th scope="col">Jumlah Bayar</th>
										<th scope="col">Tanggal Bayar</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($pembayaran as $key => $value) { ?>
										<tr>
											<th scope="row"><?= $no++ ?></th>
											<td><?= $value->nama_lengkap ?></td>
											<td>Rp. <?= number_format($value->jml_bayar, 0) ?></td>
											<td><?= $value->time ?></td>
											<!-- <td>
										<a href="<?= base_url('konten/update/' . $value->id_konten) ?>" class="btn btn-warning"> <i class="fa fa-edit"></i>Edit</a>
										<a href="<?= base_url('konten/delete/' . $value->id_konten) ?>" class="btn btn-danger"> <i class="fa fa-trash"></i>Hapus</a>
									</td> -->
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