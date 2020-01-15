<div class="main-panel" style="margin-top: -80px">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Halaman Pemain</h4>
            </div>


            <div class="row row-card-no-pd">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <h4 class="card-title">Halaman Pemain</h4>

                            </div>
                            <p class="card-category">
                                SPK</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <?php echo anchor(site_url('sekolah/create'), 'Create', 'class="btn btn-primary"'); ?>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div style="margin-top: 8px" id="message">
                                            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-1 text-right">
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <form action="<?php echo site_url('sekolah/index'); ?>" class="form-inline" method="get">
                                        </form>
                                    </div>
                                    <table class="table table-bordered" style="margin-bottom: 10px">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pemain</th>
                                            <th>Posisi</th>
                                            <th>Action</th>
                                        </tr><?php
                                                foreach ($sekolah_data as $sekolah) {
                                                ?>
                                            <tr>
                                                <td width="80px"><?php echo ++$start ?></td>
                                                <td><?php echo $sekolah->nama_pemain ?></td>
                                                <td><?php echo $sekolah->posisi ?></td>
                                                <td style="text-align:center">
                                                    <?php
                                                    echo anchor(site_url('sekolah/read/' . $sekolah->id_pemain), 'Read', array('class' => 'btn btn-primary btn-sm'));
                                                    echo ' | ';
                                                    echo anchor(site_url('sekolah/update/' . $sekolah->id_pemain), 'Update', array('class' => 'btn btn-default btn-sm'));
                                                    echo ' | ';
                                                    echo anchor(site_url('sekolah/delete/' . $sekolah->id_pemain), 'Delete', 'class="btn btn-default btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php
                                                }
                                        ?>
                                    </table>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="margin-bottom: 10px">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Pemain</th>
                                                    <th>Posisi</th>
                                                    <th>Tanggal Bergabung</th>
                                                    <th>Action</th>
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
                                                            <td><?php echo $alternatif->nama_perawat ?></td>
                                                            <td><?php echo $alternatif->dep_jabatan ?></td>
                                                            <td><?php echo $alternatif->tgl_bergabung ?></td>
                                                            <td style="text-align:center" width="200px">
                                                                <?= anchor('Alternatif/edit?alternatif=' . $alternatif->id_alternatif, 'Edit', array('class' => 'btn btn-default btn-sm')); ?>
                                                                <?= "|" ?>
                                                                <!-- <?= anchor('Alternatif/hapus?alternatif=' . $alternatif->id_alternatif, 'Hapus', array('class' => 'btn btn-danger btn-sm')); ?> -->
                                                                <?= anchor('Alternatif/hapus?alternatif=' . $alternatif->id_alternatif, 'Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); ?>
                                                            </td>
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
                                            <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
                                            <?php echo anchor(site_url('sekolah/excel'), 'Excel', 'class="btn btn-primary"'); ?>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <?php echo $pagination ?>
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