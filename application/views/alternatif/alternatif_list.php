
        <h2 style="margin-top:0px">Alternatif List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor('Alternatif/create','Tambah', 'class="btn btn-primary"'); ?>
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
                                if ($q <> '')
                                {
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
                foreach ($data as $alternatif)
                {
                ?>
                <tr>
                    <td width="80px"><?php echo $no++ ?></td>
                    <td><?php echo $alternatif->nama_pemain ?></td>
                    <td><?php echo $alternatif->posisi ?></td>
                    <td><?php echo $alternatif->tgl_bergabung ?></td>
                </tr>
                <?php }}else{ ?>
                <tr>
                    <td colspan="5" align="center">Tidak Ada Data</td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : </a>
        </div>
            <div class="col-md-6 text-right">
               
            </div>
        </div>
