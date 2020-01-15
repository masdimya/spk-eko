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
            </div>
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
                                <div class="col-md-4">
                                    <?php echo anchor('Alternatif/create', 'Tambah', 'class="btn btn-primary"'); ?>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div style="margin-top: 8px" id="message">

                                    </div>
                                </div>
                                <div class="col-md-1 text-right">
                                </div>
                                <div class="col-md-3 text-right">
                                    <!-- <form action="<?php echo site_url('sekolah/index'); ?>" class="form-inline" method="get">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                                            <span class="input-group-btn">
                                                <?php
                                                if ($q <> '') {
                                                ?>
                                                        <a href="<?php echo site_url('sekolah'); ?>" class="btn btn-default">Reset</a>
                                                        <?php
                                                    }
                                                        ?>
                                            <button class="btn btn-primary" type="submit">Search</button>
                                            </span>
                                        </div>
                                    </form> -->
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="margin-bottom: 10px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pemain</th>
                                                <th>Posisi</th>
                                                <th>Tanggal Bergabung</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (!empty($data)) {
                                                $no = 1;
                                                foreach ($data as $alternatif) {
                                            ?>
                                                    <tr>
                                                        <td width="80px"><?php echo $no++ ?></td>
                                                        <td><?php echo $alternatif->nama_pemain ?></td>
                                                        <td><?php echo $alternatif->posisi ?></td>
                                                        <td><?php echo $alternatif->tgl_bergabung ?></td>
                                                    </tr>
                                                <?php }
                                            } else { ?>
                                                <tr>
                                                    <td colspan="5" align="center">Tidak Ada Data</td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary">Total Record : </a>
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