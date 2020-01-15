<script>
	$('#confirm-delete').on('show.bs.modal', function(e) {
		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
	});
</script>

<!-- Custom template | don't include it in your project! -->
<div class="custom-template">
	<div class="title">Settings</div>
	<div class="custom-content">
		<div class="switcher">
			<div class="switch-block">
				<h4>Topbar</h4>
				<div class="btnSwitch">
					<button type="button" class="changeMainHeaderColor" data-color="blue"></button>
					<button type="button" class="changeMainHeaderColor" data-color="purple"></button>
					<button type="button" class="changeMainHeaderColor" data-color="light-blue"></button>
					<button type="button" class="selected changeMainHeaderColor" data-color="green"></button>
					<button type="button" class="changeMainHeaderColor" data-color="orange"></button>
					<button type="button" class="changeMainHeaderColor" data-color="red"></button>
				</div>
			</div>
			<div class="switch-block">
				<h4>Background</h4>
				<div class="btnSwitch">
					<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
					<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
					<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
				</div>
			</div>
		</div>
	</div>
	<div class="custom-toggle">
		<i class="flaticon-settings"></i>
	</div>
</div>
<!-- End Custom template -->
</div>
</div>
<!--   Core JS Files   -->
<script src="<?= base_url() ?>assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?= base_url() ?>assets/js/core/popper.min.js"></script>
<script src="<?= base_url() ?>assets/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="<?= base_url() ?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?= base_url() ?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Moment JS -->
<script src="<?= base_url() ?>assets/js/plugin/moment/moment.min.js"></script>

<!-- Chart JS -->
<script src="<?= base_url() ?>assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="<?= base_url() ?>assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="<?= base_url() ?>assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugin/datatables/datatables.min.js"></script>
<!-- Datatables -->
<script src="<?= base_url() ?>assets/js/plugin/datatables/datatables.min.js"></script>


<!-- Bootstrap Toggle -->
<script src="<?= base_url() ?>assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="<?= base_url() ?>assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Google Maps Plugin -->
<script src="<?= base_url() ?>assets/js/plugin/gmaps/gmaps.js"></script>

<!-- Sweet Alert -->
<script src="<?= base_url() ?>assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Azzara JS -->
<script src="<?= base_url() ?>assets/js/ready.min.js"></script>

<!-- Azzara DEMO methods, don't include it in your project! -->
<script src="<?= base_url() ?>assets/js/setting-demo.js"></script>
<script src="<?= base_url() ?>assets/js/demo.js"></script>

<!-- modal hapus -->
<div class="modal fade" id="confirm-delete">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<h4 class="modal-title">Konfirmasi!</h4>
			</div>

			<div class="modal-body">
				Yakin ingin menghapus data ini ?
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				<a class="btn btn-danger btn-ok">Hapus saja</a>
			</div>
		</div>
	</div>
</div>
</body>

</html>