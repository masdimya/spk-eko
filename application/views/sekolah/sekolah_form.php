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
                                <h2 style="margin-top:0px">Pemain <?php echo $button ?></h2>
                                <form action="<?php echo $action; ?>" method="post">
                                    <div class="form-group">
                                        <label for="varchar">Nama Pemain <?php echo form_error('nama_perawat') ?></label>
                                        <input type="text" class="form-control" name="nama_perawat" id="nama_perawat" placeholder="Nama Pemain" value="<?php echo $nama_perawat; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="varchar">Posisi <?php echo form_error('dep_jabatan') ?></label>
                                        <input type="text" class="form-control" name="dep_jabatan" id="dep_jabatan" placeholder="Posisi" value="<?php echo $dep_jabatan; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="varchar">Tangal Bergabung <?php echo form_error('tgl_bergabung') ?></label>
                                        <input type="date" class="form-control" name="tgl_bergabung" id="tgl_bergabung" placeholder="Tangal Bergabung" value="<?php echo $tgl_bergabung; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="varchar">Tangal Evaluasi <?php echo form_error('tgl_evaluasi') ?></label>
                                        <input type="date" class="form-control" name="tgl_evaluasi" id="tgl_evaluasi" placeholder="Tangal Evaluasi" value="<?php echo $tgl_evaluasi; ?>" />
                                    </div>
                                    
                                    <input type="hidden" name="id_perawat" value="<?php echo $id_perawat; ?>" /> 
                                    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                                    <a href="<?php echo site_url('sekolah') ?>" class="btn btn-default">Cancel</a>
                            </form>
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