<h2 style="margin-top:0px">Subkriteria List</h2>



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
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col-md-4">

                                        </div>
                                        <div class="col-md-4 text-center">
                                            <div style="margin-top: 8px" id="message">
                                                <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-1 text-right">
                                        </div>
                                        
                                    </div>
                                    <table class="table table-bordered" style="margin-bottom: 10px">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Subkriteria</th>
                                            <th>Action</th>
                                        </tr><?php
                                                foreach ($record as $subkriteria) {
                                                ?>
                                            <tr>
                                                <td width="80px"><?php echo ++$start ?></td>
                                                <td><?php echo $subkriteria->nama_subkriteria ?></td>
                                                <td style="text-align:center" width="200px">
                                                    <?php
                                                    echo anchor(site_url('subkriteria/update/' . $subkriteria->id_subkriteria), 'Edit', array('class' => 'btn btn-danger btn-sm'));
                                                    echo ' | ';
                                                    echo anchor(site_url('subkriteria/delete/' . $subkriteria->id_subkriteria), 'Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </table>
                                    <div class="col-md-6 text-right">
                                        <!--  <?php echo $pagination ?> -->
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