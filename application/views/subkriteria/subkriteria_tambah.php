<script type="text/javascript">
	$(document).ready(function() {
		$(".opsi input").removeAttr('required');
		$(".opsi select").removeAttr('required');
		$(".tipe").each(function() {
			$(this).change(function() {
				var did = $(this).attr('data-id');
				$(".opsi").attr('style', 'display:none');
				$(".opsi input").removeAttr('required');
				$(".opsi select").removeAttr('required');
				$("#div_" + did).show();
				$("#div_" + did + " input").attr('required', 'required');
			});
		});

	});
</script>
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
								<h4 class="card-title">Halaman Subkriteria Tambah</h4>

							</div>
							<p class="card-category">
								SPK</p>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">

									<div class="row">
										<div class="col-md-6">
											<?= form_open($action . $link, array('class' => 'form-horizontal form-groups-bordered')); ?>
											<br>
											<input type="hidden" name="id_kriteria" value="<?= $kriteria; ?>" />
											<div id="div_teks" class="opsi">
												<div class="form-group required">
													<label for="field-1" class="col-sm-3 control-label">Keterangan</label>
													<div class="col-md-7">
														<input type="text" name="ket" class="form-control " autocomplete="" placeholder="keterangan" required="" "/>
				</div>
			</div>	
		</div>
		<div class=" form-group">
														<label class="col-sm-2 ">&nbsp;</label>
														<div class="col-md-6">
															<button type="submit" name="submit" class="btn btn-primary btn-flat">Tambah</button>
															<a href="javascript:history.back(-1);" class="btn btn-default btn-flat">Batal</a>
														</div>
													</div>
													<?= form_close(); ?>
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
		</div>

	</div>