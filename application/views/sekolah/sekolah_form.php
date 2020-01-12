
        <h2 style="margin-top:0px">Perawat <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
    	    <div class="form-group">
                <label for="varchar">Nama Perawat <?php echo form_error('nama_perawat') ?></label>
                <input type="text" class="form-control" name="nama_perawat" id="nama_perawat" placeholder="Nama Perawat" value="<?php echo $nama_perawat; ?>" />
            </div>
    	    <div class="form-group">
                <label for="varchar">Dep / Jabatan <?php echo form_error('dep_jabatan') ?></label>
                <input type="text" class="form-control" name="dep_jabatan" id="dep_jabatan" placeholder="Dep / Jabatan" value="<?php echo $dep_jabatan; ?>" />
            </div>
            <div class="form-group">
                <label for="varchar">Tangal Bergabung <?php echo form_error('tgl_bergabung') ?></label>
                <input type="text" class="form-control" name="tgl_bergabung" id="tgl_bergabung" placeholder="Tangal Bergabung" value="<?php echo $tgl_bergabung; ?>" />
            </div>
            <div class="form-group">
                <label for="varchar">Tangal Evaluasi <?php echo form_error('tgl_evaluasi') ?></label>
                <input type="text" class="form-control" name="tgl_evaluasi" id="tgl_evaluasi" placeholder="Tangal Evaluasi" value="<?php echo $tgl_evaluasi; ?>" />
            </div>
    	    <div class="form-group">
                <label for="visi">Hasil Evaluasi Sebelumnya <?php echo form_error('hasil_evaluasi') ?></label>
                <textarea class="form-control" rows="3" name="hasil_evaluasi" id="hasil_evaluasi" placeholder="Hasil Evaluasi Sebelumnya"><?php echo $hasil_evaluasi; ?></textarea>
            </div>
    	    <div class="form-group">
                <label for="misi">Target Selama Evaluasi <?php echo form_error('target_evaluasi') ?></label>
                <textarea class="form-control" rows="3" name="target_evaluasi" id="target_evaluasi" placeholder="Target Selama Evaluasi"><?php echo $target_evaluasi; ?></textarea>
            </div>
    	    <input type="hidden" name="id_perawat" value="<?php echo $id_perawat; ?>" /> 
    	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
    	    <a href="<?php echo site_url('sekolah') ?>" class="btn btn-default">Cancel</a>
	   </form>
