<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-12">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4"><?= $title ?></h6>
				<a href="<?= base_url('pembayaran/add') ?>" class="btn btn-primary m-2"><i class="fa fa-plus"></i>Add</a>
				<div class="table-responsive">
					<table class="table">
						<thead>
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
									<td><?= $value->nama_pembayar ?></td>
									<td>Rp. <?= number_format($value->jml_bayar), 0 ?></td>
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
			</div>
		</div>
	</div>
</div>
<!-- Table End -->