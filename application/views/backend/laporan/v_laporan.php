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
		<a href="#">Home</a>
		<span class="mx-3 icon-keyboard_arrow_right"></span>
		<span class="current"><?= $title ?></span>
	</div>
</div>

<div class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 form-group">
				<h4 for="fname">Kelulusan Berdasarkan Jalur</h4>
			</div>
		</div>
		<?php echo form_open('laporan/cetak_jalur') ?>
		<div class="row">
			<div class="col-md-6 form-group">
				<label for="fname">Nama Jalur Pendaftaran</label>
				<select name="jalur" id="" class="form-control">
					<option value="umum">Umum</option>
					<option value="prestasi">Prestasi</option>
					<option value="zonasi">Zonasi</option>
				</select>
			</div>
			<div class="col-md-6 form-group">
				<label for="lname">Tahun Ajaran</label>
				<span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
				<select name="tahun" class="form-control" id="">
					<?php $mulai = date('Y') - 1;
					for ($i = $mulai; $i < $mulai + 10; $i++) {
						$sel = $i == date('Y') ? 'selected="selected"' : '';
						echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
					} ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<input type="submit" value="Cetak" class="btn btn-primary btn-lg px-5">
			</div>
		</div>
		<?php echo form_close() ?>
		<br>
		<div class="row">
			<div class="col-md-12 form-group">
				<h5 for="fname">Kelulusan Berdasarkan Asal Sekolah</h5>
			</div>
		</div>
		<?php echo form_open('laporan/cetak_asal_sekolah') ?>
		<?php $asal_sekolahe = $this->m_penerimaan->asal_sekolahe(); ?>
		<div class="row">
			<div class="col-md-6 form-group">
				<label for="eaddress">Asal Sekolah</label>
				<select name="asal_sekolah" id="" class="form-control">
					<?php foreach ($asal_sekolahe as $key => $valuesa) { ?>
						<option value="<?= $valuesa->asal_sekolah ?>"><?= $valuesa->asal_sekolah ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<input type="submit" value="Cetak" class="btn btn-primary btn-lg px-5">
			</div>
		</div>
		<?php echo form_close() ?>
	</div>
</div>
