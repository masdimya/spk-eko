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
<?php
if (empty($data)) {
    redirect('');
}

foreach ($data as $row) {
}

echo validation_errors();
echo form_open('subkriteria/update_action' . $kriteria, array('class' => 'form-horizontal'));
?>
<?php
echo form_close();
?>
<script type="text/javascript">
    $(document).ready(function() {
        $("#radio-<?= $row->tipe; ?>").trigger('change');
    });
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
                                <h4 class="card-title">Halaman Alternatif</h4>

                            </div>
                            <p class="card-category">
                                SPK</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <input type="hidden" name="subkriteria" value="<?= $row->id_subkriteria; ?>" />
                                    <div class="form-group required">
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="">Kriteria Utama</label>
                                        <div class="col-md-8">
                                            <select name="id_kriteria" class="form-control" required="">
                                                <option>Pilih Kriteria Utama</option>
                                                <?php
                                                if (!empty($utama)) {
                                                    foreach ($utama as $rutama) {
                                                        $jj = '';
                                                        if ($rutama->id_kriteria == $row->id_kriteria) {
                                                            $jj = 'selected="selected"';
                                                        }
                                                        echo '<option value="' . $rutama->id_kriteria . '" ' . $jj . '>' . $rutama->nama_kriteria . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <?php
                                    $max = '';
                                    if ($row->tipe == "teks") {
                                        $max = $row->nama_subkriteria;
                                    } elseif ($row->tipe == "nilai") {
                                        $max = $row->nilai_maksimum;
                                    }
                                    ?>
                                    <div id="div_teks" class="opsi">
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="">Keterangan</label>
                                            <div class="col-md-7">
                                                <input type="text" name="ket" id="" class="form-control " autocomplete="" placeholder="keterangan" required="" value="<?php echo set_value('ket', $max); ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">&nbsp;</label>
                                        <div class="col-md-6">
                                            <button type="submit" name="submit" class="btn btn-primary btn-flat">Ubah</button>
                                            <a href="javascript:history.back(-1);" class="btn btn-default btn-flat">Batal</a>
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