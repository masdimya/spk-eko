<!-- get alternatif -->
<script type="text/javascript">
	$(document).ready(function() {
		$("select").select2();
	});
</script>

<div class="main-panel" style="margin-top: -80px">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Kriteria Form</h4>
				<!-- <div class="btn-group btn-group-page-header ml-auto">
					<button type="button" class="btn btn-light btn-round btn-page-header-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-ellipsis-h"></i>
					</button>
					<div class="dropdown-menu">
						<div class="arrow"></div>
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Separated link</a>
					</div>
				</div> -->
			</div>


			<div class="row row-card-no-pd">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-head-row">
								<h4 class="card-title">Halaman Utama</h4>

							</div>
							<p class="card-category">
								SPK AHP</p>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<select name="id_perawat" class="form-control">
										<?php
										if (!empty($sekolah)) {
											foreach ($sekolah as $s) {
										?>
												<option value='<?php echo $s->id_perawat ?>'><?php echo $s->nama_perawat ?></option>
											<?php }
										} else { ?>
											<option class="form-control"> Semua Nama Perawat sudah terdaftar</option>
										<?php } ?>
									</select>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="">Penilaian</label>
										<div class="col-md-10">
											<table class="table table-bordered">
												<thead>
													<th>Subkriteria</th>
													<th>Nilai</th>
												</thead>
												<tbody>
													<?php
													if (!empty($subkriteria)) {
														foreach ($subkriteria as $rk) {
															$subkriteriaid = $rk->id_subkriteria;
															echo '<tr>';
															echo '<td>' . $rk->nama_subkriteria . '<input type="text" name="subkriteriaid[]"  		value=' . $subkriteriaid . ' style="visibility:hidden;"></td>';
															echo '<td> <select class="form-control"  name="nilai[]">' . $option_nilai . '</select> </td>';
															echo '</tr>';
														}
													}
													?>
												</tbody>
											</table>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">&nbsp;</label>
										<div class="col-md-6">
											<?php
											if (!empty($sekolah)) {
											?>
												<button type="submit" name="submit" class="btn btn-primary btn-flat">Tambah</button>
												<a href="javascript:history.back(-1);" class="btn btn-default btn-flat">Batal</a>
											<?php } else { ?>
												<button type="submit" name="submit" class="btn btn-primary btn-flat" disabled>Tambah</button>
												<a href="javascript:history.back(-1);" class="btn btn-default btn-flat">Batal</a>
											<?php } ?>
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