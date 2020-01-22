<script type="text/javascript">
	function proseshitung() {
		$.ajax({
			type: 'get',
			dataType: 'json',
			url: "<?= base_url('Perbandingan/proseshitung'); ?>",
			error: function() {
				$("#respon").html('Proses hitung seleksi sekolah gagal');
				$("#error").show();
			},
			beforeSend: function() {
				$("#error").hide();
				$("#respon").html("Sedang bekerja, tunggu sebentar");
			},
			success: function(x) {
				if (x.status == "ok") {
					alert('Proses seleksi berhasil. Halaman akan direfresh');
					window.location = window.location;
				} else {
					$("#respon").html('Proses hitung seleksi Alternatif gagal');
					$("#error").show();
				}
			},
		});
	}
	function tampil(){
		$("#tabelhasil").show();
	}
</script>

<div id="respon" class="hidden-print"></div>
<?php
$sql = "Select COUNT(*) as m FROM alternatif";
// $c = $this->m_db->get_query_row($sql, 'm');
$c = 4;

if ($c < 1) {
	echo '<div class="alert alert-warning hidden-print" id="error">Seleksi belum diproses. Klik <a href="javascript:;" onclick="proseshitung();">di sini</a> untuk proses</div>';
} else {
?>

	<br><br>
	<div class="main-panel" style="margin-top: -80px">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Hasil Perbandingan</h4>
			</div>


			<div class="row row-card-no-pd">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-head-row">
								<h4 class="card-title">Halaman Hasil</h4>

							</div>
						</div>
						<div class="card-body">
							<div class="row">
								
							<div class="table-responsive" >
						
								<label class="col-md-4 control-label">Silahkan Klik Untuk Update Hasil Perhitungan</label><br>
								<button onclick="proseshitung()" class="btn btn-primary btn-flat">Update</button>
							
							<table class="table table-bordered " id="tabelhasil">
								<thead>
									<th>Nama Pemain</th>
									<th>Posisi</th>
									<th>Nilai Perhitungan</th>
									<th>Status</th>
								</thead>
								<?php

								
								
								if ($dAlternatif) {
									
									foreach ($dAlternatif as $rAlternatif) {
										// $alternatifID = $rAlternatif->id_alternatif;
										// $sekolahID = $rAlternatif->id_sekolah;
										// $nama_sekolah = field_value('sekolah', 'id_sekolah', $sekolahID, 'nama_sekolah');

								?>
										<tr>
											<td><?= $rAlternatif->nama_pemain; ?></td>
											<td><?= $rAlternatif->posisi; ?></td>
											<td><?= $rAlternatif->total; ?></td>
											<td><?= str_replace("_"," ",$rAlternatif->status); ?></td>

											<?php
											// $total = 0;
											// if (!empty($dKriteria)) {
											// 	foreach ($dKriteria as $rKriteria) {
											// 		$kriteriaid = $rKriteria->id_kriteria;
											// 		$subkriteria = alternatif_nilai($alternatifID, $kriteriaid);
											// 		$nilaiID = field_value('subkriteria', 'id_subkriteria', $subkriteria, 'id_nilai');
											// 		$nilai = field_value('nilai_kategori', 'id_nilai', $nilaiID, 'nama_nilai');
											// 		$prioritas = ambil_prioritas($subkriteria);
											// 		$total += $prioritas;
											// 		echo '<td>' . number_format((float) $prioritas, 2) . '</td>';
											// 	}
											// }
											?>
											<!-- <td><?= number_format($total, 2); ?></td> -->
											<!-- <td><?= ucwords($rAlternatif->status); ?></td> -->
											<!-- <td> -->
												<?php
												// if ($total >= 0.8) {
												// 	echo "Pemain unggulan";
												// } else {
												// 	echo "belum unggulan";
												// }
												?>
											<!-- </td> -->
										</tr>
							<?php

									}
								} else {
									return false;
								}
							}
							?>

							</table>
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
	
	<a href="javascript:;" onclick="proseshitung();" class="btn btn-primary btn-md"> Hitung</a>