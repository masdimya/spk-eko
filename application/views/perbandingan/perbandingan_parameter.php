<script type="text/javascript">
$(document).ready(function () {
	$("#formcari").submit(function(e){
		e.preventDefault();
		$.ajax({
			type:'get',
			dataType:'html',
			url:"<?=base_url('Perbandingan/gethtml');?>",
			data:$(this).serialize(),
			error:function(){
				$("#matrik").html('Gagal mengambil data matrik');
			},
			beforeSend:function(){
				$("#matrik").html('Mengambil data matrik. Tunggu sebentar');
			},
			success:function(x){
				$("#matrik").html(x);
			},
		});
	});
});

function showsubdata(id_subkriteria)
{
	
    $.ajax({
			type:'get',
			dataType:'html',
			url:"<?=base_url('Perbandingan/gethtml_parameter');?>"+"/"+id_subkriteria,
			success:function(x){
				
                $("#matriksub").html(x);
			},
		});
}


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
                            <div class="col-md-3">
                                    <ul class="list-group">
                                    <?php	  
                                    if(!empty($kriteria_sub))
                                    {
                                        // <a href="javascript:;" onclick="showsubdata('.$rk->id_kriteria.');">'.$rk->nama_kriteria.'</a>  
                                        foreach($kriteria_sub as $rk)
                                        {
                                            
                                            echo '<label class="list-group-item">'.$rk['kriteria']->nama_kriteria. '</label>';
                                        ?>
                                            <ul>
                                            <?php
                                            foreach ( $rk['subkriteria'] as $i) {
                                                echo '<li> <a href="javascript:;" onclick="showsubdata('.$i->id_subkriteria.');">'.$i->nama_subkriteria.'</a></li>';
                                            }
                                            echo '</ul>';
                                            ?>                                                    
                                        <?php
                                        }
                                    }
                                        ?>
                                    </ul>
                                </div>
                                <div>
                                </div>
                                <div class="col-md-9">
                                    <div id="matriksub"></div>
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
