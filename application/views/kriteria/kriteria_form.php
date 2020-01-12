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
                                Service Desk</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 style="margin-top:0px">Kriteria <?php echo $button ?></h2>
                                    <form action="<?php echo $action; ?>" method="post">
                                        <div class="form-group">
                                            <label for="varchar">Nama Kriteria <?php echo form_error('nama_kriteria') ?></label>
                                            <input type="text" class="form-control" name="nama_kriteria" id="nama_kriteria" placeholder="Nama Kriteria" value="<?php echo $nama_kriteria; ?>" />
                                        </div>
                                        <input type="hidden" name="id_kriteria" value="<?php echo $id_kriteria; ?>" />
                                        <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                                        <a href="<?php echo site_url('kriteria') ?>" class="btn btn-default">Cancel</a>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>