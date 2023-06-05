<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-12">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4"><?= $title ?></h6>
				<a href="<?= base_url('user/add') ?>" class="btn btn-primary m-2"><i class="fa fa-plus"></i>Add</a>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nama User</th>
								<th scope="col">No Hp</th>
								<th scope="col">Username</th>
								<th scope="col">Password</th>
								<th scope="col">Alamat</th>
								<th scope="col">Level User</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($user as $key => $value) { ?>
								<tr>
									<th scope="row"><?= $no++ ?></th>
									<td><?= $value->nama_user ?></td>
									<td><?= $value->no_hp ?></td>
									<td><?= $value->username ?></td>
									<td><?= $value->password ?></td>
									<td><?= $value->alamat ?></td>
									<td><?php if ($value->level_user == 1) { ?>
											<p>Admin</p>
										<?php } elseif ($value->level_user == 2) { ?>
											<p>Konten</p>
										<?php } elseif ($value->level_user == 3) { ?>
											<p>Kesiswaan</p>
										<?php } ?>
									</td>
									<td>
										<a href="<?= base_url('user/update/' . $value->id_user) ?>" class="btn btn-warning"> <i class="fa fa-edit"></i>Edit</a>
										<a href="<?= base_url('user/delete/' . $value->id_user) ?>" class="btn btn-danger"> <i class="fa fa-trash"></i>Hapus</a>
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