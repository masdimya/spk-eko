<!-- batas --------------------------------------------->


<div class="main-panel" style="margin-top: -80px">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Kriteria</h4>
            </div>
            <div class="row row-card-no-pd">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <h4 class="card-title">Halaman List Kriteria</h4>

                            </div>
                            <p class="card-category">
                                Kriteria</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <?php echo anchor(site_url('kriteria/create'), 'Tambah Kriteria', 'class="btn btn-primary"'); ?>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div style="margin-top: 8px" id="message">
                                            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-1 text-right">
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <form action="<?php echo site_url('kriteria/index'); ?>" class="form-inline" method="get">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                                                <span class="input-group-btn">
                                                    <?php
                                                    if ($q <> '') {
                                                    ?>
                                                        <a href="<?php echo site_url('kriteria'); ?>" class="btn btn-default">Reset</a>
                                                    <?php
                                                    }
                                                    ?>
                                                    <button class="btn btn-primary" type="submit">Search</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="table-responsive">
                                        <table id="example" class="table table-bordered">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kriteria</th>
                                                <th>Action</th>
                                            </tr><?php
                                                    foreach ($kriteria_data as $kriteria) {
                                                    ?>
                                                <tr>
                                                    <td width="80px"><?php echo ++$start ?></td>
                                                    <td><?php echo $kriteria->nama_kriteria ?></td>
                                                    <td style="text-align:center" width="300px">
                                                        <?php
                                                        echo anchor(site_url('Subkriteria/parameter?kriteria=' . $kriteria->id_kriteria), 'Paramater', array('class' => 'btn btn-danger'));
                                                        echo ' | ';
                                                        echo anchor(site_url('kriteria/update/' . $kriteria->id_kriteria), 'Edit', array('class' => 'btn btn-default'));
                                                        echo ' | ';
                                                        echo anchor(site_url('kriteria/delete/' . $kriteria->id_kriteria), 'Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </table>
                                        <div class="col-md-6">
                                            Total Record : <?php echo $total_rows ?>
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
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>