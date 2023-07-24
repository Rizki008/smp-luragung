<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-sm-12 col-xl-12">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4">Chatting</h6>
				<?php
				foreach ($daftar_chat as $key => $value) {

					if ($value->siswa_send != null) {
				?>
						<div class="toast-container mb-3">
							<div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
								<div class="toast-header">
									<i class="bx bx-mail-send me-2"></i>
									<div class="me-auto fw-semibold"><?= $value->nama_lengkap ?></div>
									<small><?= $value->time ?></small>
								</div>
								<div class="toast-body">
									<?= $value->siswa_send ?>
								</div>
							</div>
						</div>

					<?php
					} else if ($value->admin_send != null) {
					?>

						<div class="bs-toast toast fade show bg-white mb-3" role="alert" aria-live="assertive" aria-atomic="true">
							<div class="toast-header">
								<i class="bx bx-mail-send me-2"></i>
								<div class="me-auto fw-semibold">Admin</div>
								<small><?= $value->time ?></small>
							</div>
							<div class="toast-body">
								<?= $value->admin_send ?>
							</div>
						</div>
					<?php
					}
					?>
				<?php
				}
				?>
				<h4>Balasan Chatting</h4>
				<form action="<?= base_url('admin/balas/' . $id_siswa) ?>" method="POST">
					<textarea class="form-control" name="pesan" placeholder="Tuliskan pesan anda..."></textarea>
					<button type="submit" class="btn btn-warning mt-3">Send</button>
				</form>

			</div>
		</div>
	</div>
</div>
<!-- / Content -->