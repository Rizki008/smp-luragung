<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
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
		<a href="<?= base_url() ?>">Home</a>
		<span class="mx-3 icon-keyboard_arrow_right"></span>
		<span class="current"><?= $title ?></span>
	</div>
</div>

<div class="site-section">
	<div class="container">
		<form action="<?= base_url('Chatting') ?>" method="post">
			<div class="row mb-5">
				<?php
				$id_siswa = $this->session->userdata('id_siswa');
				?>
				<div class="col-lg-6 mb-lg-0 mb-4">
					<label for="message">Message</label>
					<textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
					<input type="hidden" name="id_siswa" value="<?= $id_siswa ?>">
				</div>
				<div class="col-lg-5 ml-auto align-self-center">
					<h2 class="section-title-underline mb-5">
						<span>Chatting</span>
					</h2>
					<?php foreach ($chat as $key => $value) {
						if ($value->siswa_send != NULL) { ?>
							<p>Anda : <br> <?= $value->time ?> : <?= $value->siswa_send ?></p>
						<?php } else if ($value->admin_send != NULL) { ?>
							<p>Admin : <br> <?= $value->time ?> : <?= $value->admin_send ?></p>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<input type="submit" value="Send Message" class="btn btn-primary btn-lg px-5">
				</div>
			</div>
		</form>
	</div>
</div>