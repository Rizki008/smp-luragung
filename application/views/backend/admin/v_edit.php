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
		<a href="index.html">Home</a>
		<span class="mx-3 icon-keyboard_arrow_right"></span>
		<span class="current"><?= $title ?></span>
	</div>
</div>

<div class="site-section">
	<div class="container">
		<?php
		//notifikasi form kosong
		echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fa fa-exclamation-triangle"></i>', '</h5></div>');
		?>
		<form action="<?= base_url('user/update/' . $user->id_user) ?>" method="POST">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Nama User</label>
				<input type="text" name="nama_user" value="<?= $user->nama_user ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				<div id="emailHelp" class="form-text">We'll never share your email with anyone else.
				</div>
			</div>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">No Hp</label>
				<input type="text" name="no_hp" value="<?= $user->no_hp ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				<div id="emailHelp" class="form-text">We'll never share your email with anyone else.
				</div>
			</div>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Username</label>
				<input type="text" name="username" value="<?= $user->username ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				<div id="emailHelp" class="form-text">We'll never share your email with anyone else.
				</div>
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Password</label>
				<input type="password" name="password" value="<?= $user->password ?>" class="form-control" id="exampleInputPassword1">
			</div>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Alamat</label>
				<input type="text" name="alamat" value="<?= $user->alamat ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				<div id="emailHelp" class="form-text">We'll never share your email with anyone else.
				</div>
			</div>
			<div class="form-floating mb-3">
				<select class="form-select" name="level_user" id="floatingSelect" aria-label="Floating label select example">
					<option selected value="<?= $user->level_user ?>">
						<?php if ($user->level_user == 1) { ?>
							<p>Admin</p>
						<?php } elseif ($user->level_user == 2) { ?>
							<p>Konten</p>
						<?php } elseif ($user->level_user == 3) { ?>
							<p>Kesiswaan</p>
						<?php } ?>
					</option>
					<option>Pilih Level User</option>
					<option value="1">Admin</option>
					<option value="2">Konten</option>
					<option value="3">Kesiswaan</option>
				</select>
				<label for="floatingSelect">Works with selects</label>
			</div>
			<button type="submit" class="btn btn-primary">Add</button>
			<a href="<?= base_url('user') ?>" class="btn btn-warning">Back</a>
		</form>
	</div>
</div>