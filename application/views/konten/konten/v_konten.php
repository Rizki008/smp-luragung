<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-12">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4"><?= $title ?></h6>
				<a href="<?= base_url('konten/add') ?>" class="btn btn-primary m-2"><i class="fa fa-plus"></i>Add</a>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Tanggal Mulai</th>
								<th scope="col">Tanggal Akhir</th>
								<th scope="col">Isi Konten</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($konten as $key => $value) { ?>
								<tr>
									<th scope="row"><?= $no++ ?></th>
									<td><?= $value->tgl_mulai ?></td>
									<td><?= $value->tgl_akhir ?></td>
									<td><?= $value->isi_konten ?></td>
									<td>
										<a href="<?= base_url('konten/update/' . $value->id_konten) ?>" class="btn btn-warning"> <i class="fa fa-edit"></i>Edit</a>
										<a href="<?= base_url('konten/delete/' . $value->id_konten) ?>" class="btn btn-danger"> <i class="fa fa-trash"></i>Hapus</a>
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