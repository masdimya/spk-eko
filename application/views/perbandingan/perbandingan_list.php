<script type="text/javascript">
	$(document).ready(function() {
		$("#formcari").submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: 'get',
				dataType: 'html',
				url: "<?= base_url('Perbandingan/gethtml'); ?>",
				data: $(this).serialize(),
				error: function() {
					$("#matrik").html('Gagal mengambil data matrik');
				},
				beforeSend: function() {
					$("#matrik").html('Mengambil data matrik. Tunggu sebentar');
				},
				success: function(x) {
					$("#matrik").html(x);
				},
			});
		});
	});

	function showsubdata(kriteria) {
		$.ajax({
			type: 'get',
			dataType: 'html',
			url: "<?= base_url('Perbandingan/getsub'); ?>",
			data: "kriteria=" + kriteria,
			error: function() {
				$("#matriksub").html('Gagal mengambil data matrik');
			},
			beforeSend: function() {
				$("#matriksub").html('Mengambil data matrik. Tunggu sebentar');
			},
			success: function(x) {
				$("#matriksub").html(x);
			},
		});
	}
</script>

<div class="main-panel" style="margin-top: -80px">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Kriteria Form</h4>
			</div>


			<div class="row row-card-no-pd">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-head-row">
								<h4 class="card-title">Halaman Alternatif</h4>

							</div>
							<p class="card-category">
								SPK</p>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<?php
									echo form_open('#', array('class' => 'form-horizontal', 'id' => 'formcari'));
									?>
									<div class="form-group">
										<label class="col-sm-2 control-label">Silahkan Klik Untuk Memulai</label><br>
										<button type="submit" class="btn btn-primary btn-flat">Tampilkan</button>
									</div>
									<?php
									echo form_close();
									?>
									<div id="matrik"></div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>

</div>