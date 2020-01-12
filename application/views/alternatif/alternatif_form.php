<!-- get alternatif -->
	<script type="text/javascript">
	$(document).ready(function () {
		$("select").select2();
	});
	</script>
<div class="row">
	<?= form_open('Alternatif/create'); ?>
	<div class="form-group required">
		<label class="col-sm-2 control-label" for="">Nama Perawat</label>
		<div class="col-md-10">
			<select name="id_perawat" class="form-control">
				<?php 
				if (!empty($sekolah)) {
					foreach ($sekolah as $s) {
			 	?>
			 	<option value='<?php echo $s->id_perawat ?>'><?php echo $s->nama_perawat ?></option>
			 	<?php }}else{ ?>
				<option class="form-control"> Semua Nama Perawat sudah terdaftar</option>
			 	<?php } ?>
			</select>
		</div>
	</div>
	<br><br><br><br>
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
				if(!empty($subkriteria))
				{
					foreach($subkriteria as $rk)
					{
						$subkriteriaid=$rk->id_subkriteria;
						echo '<tr>';
						echo '<td>'.$rk->nama_subkriteria.'<input type="text" name="subkriteriaid[]"  		value='.$subkriteriaid .' style="visibility:hidden;"></td>';
						echo '<td> <select name="nilai[]">'.$option_nilai.'</select> </td>';
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
		<?php } else{ ?>
			<button type="submit" name="submit" class="btn btn-primary btn-flat" disabled>Tambah</button>
			<a href="javascript:history.back(-1);" class="btn btn-default btn-flat">Batal</a>
		<?php } ?>
		</div>
	</div>
	<?= form_close(); ?>
</div>