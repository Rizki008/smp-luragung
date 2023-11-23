<div class="footer">
	<div class="container">


		<div class="row">
			<div class="col-12">
				<div class="copyright">
					<p>
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> SMP NEGERI 2 Luragung <i class="icon-heart" aria-hidden="true"></i> <a href="<?= base_url() ?>" target="_blank">Kuningan Jawabarat</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>


</div>
<!-- .site-wrap -->


<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78" />
	</svg></div>

<script src="<?= base_url() ?>frontend/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url() ?>frontend/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url() ?>frontend/js/jquery-ui.js"></script>
<script src="<?= base_url() ?>frontend/js/popper.min.js"></script>
<script src="<?= base_url() ?>frontend/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>frontend/js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>frontend/js/jquery.stellar.min.js"></script>
<script src="<?= base_url() ?>frontend/js/jquery.countdown.min.js"></script>
<script src="<?= base_url() ?>frontend/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url() ?>frontend/js/jquery.easing.1.3.js"></script>
<script src="<?= base_url() ?>frontend/js/aos.js"></script>
<script src="<?= base_url() ?>frontend/js/jquery.fancybox.min.js"></script>
<script src="<?= base_url() ?>frontend/js/jquery.sticky.js"></script>
<script src="<?= base_url() ?>frontend/js/jquery.mb.YTPlayer.min.js"></script>




<script src="<?= base_url() ?>frontend/js/main.js"></script>

<script>
	function bacaGambar(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#gambar_load').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#preview_gambar").change(function() {
		bacaGambar(this);
	});
</script>

</body>

</html>