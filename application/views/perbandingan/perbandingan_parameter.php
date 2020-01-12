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

function showsubdata(kriteria)
{
	$.ajax({
			type:'get',
			dataType:'html',
			url:"<?=base_url('Perbandingan/getsub');?>",
			data:"kriteria="+kriteria,
			error:function(){
				$("#matriksub").html('Gagal mengambil data matrik');
			},
			beforeSend:function(){
				$("#matriksub").html('Mengambil data matrik. Tunggu sebentar');
			},
			success:function(x){
				$("#matriksub").html(x);
			},
		});
}

</script>
<div class="row">
<div class="col-md-3">
		<ul class="list-group">
		  <?php	  
		  if(!empty($kriteria))
		  {
            // <a href="javascript:;" onclick="showsubdata('.$rk->id_kriteria.');">'.$rk->nama_kriteria.'</a>  
            foreach($kriteria as $rk)
		  	{
                echo '<li class="list-group-item">'
                        .$rk->nama_kriteria.
                        '<ol>
                            <li>coba</li>
                            <li>coba</li>
                            <li>coba</li>
                        </ol>
                      </li>';
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