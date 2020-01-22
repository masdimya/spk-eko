<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Perbandingan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();        
        $this->load->library('Form_validation');
        $this->load->library('M_db');
		$this->load->model('Kriteria_model','mod_kriteria');
		$this->load->model('Proses_model','mod_pro');
		$this->load->library('Ion_auth');
		ceklogin();
    }
    
    function banding()
    {        
        $this->template->load('template/backend/dashboard', 'perbandingan/perbandingan_list');
	}
	function banding_parameter()
    {        
		$kriteria=$this->mod_kriteria->kriteria_data();
		
		foreach ($kriteria as $item) {
			$subkriteria 		 = $this->mod_kriteria->subkriteria_data(array("id_kriteria"=>$item->id_kriteria));
			$d['kriteria_sub'][] = array(
									'kriteria' 		=> $item,
									'subkriteria' 	=> $subkriteria										
				
			); 
			
		}

		$this->template->load('template/backend/dashboard', 'perbandingan/perbandingan_parameter',$d);
    }

    function gethtml()
    {
		$output=array();
        $dKriteria=$this->mod_kriteria->kriteria_data();
		foreach($dKriteria as $rK)
		{
			$output[$rK->id_kriteria]=$rK->nama_kriteria;
		}		
		$d['arr']=$output;
    	// $this->template->load('template/backend/dashboard', 'perbandingan/matriks/matrikutama', $d);
    	$this->load->view('perbandingan/matriks/matrikutama', $d);
	}
	
	function getsubcontainer()
	{
		$d['kriteria']=$this->mod_kriteria->kriteria_data();
		$this->load->view('perbandingan/matriks/subcontainer',$d);
	}
	
	function getsub()
	{		
		$id=$this->input->get('kriteria');
    	$namaKriteria=$this->mod_kriteria->kriteria_info($id,'nama_kriteria');
    	$dSub=$this->mod_kriteria->subkriteria_child($id,'id_nilai ASC');
    	$output=array();
    	if(!empty($dSub))
    	{					
		foreach($dSub as $rK)
		{
			$nama=field_value('subkriteria','id_subkriteria',$rK->id_subkriteria,'nama_subkriteria');
			$output[$rK->id_subkriteria]=$nama;
		}
		}
    	$d['arr']=$output;
    	$d['kriteriaid']=$id;
    	$d['namakriteria']=$namaKriteria;
    	$this->load->view('perbandingan/matriks/matriksub', $d);
	}

	function updateutama()
    {
    	$error=FALSE;
    	$msg="";
    	$s=array(
    	'id_kriteria_nilai !='=>''
    	);
    	$this->m_db->delete_row('kriteria_nilai',$s);
    	    	
		$cr=$this->input->post('crvalue');
		
    	if($cr > 0.01)
    	{
    		$msg="Gagal diupdate karena nilai CR kurang dari 0.01 ".$cr;
			$error=TRUE;
		}else{
			foreach($_POST as $k=>$v)
			{
				if($k!="crvalue" )
				{									
				foreach($v as $x=>$x2)
				{
					$d=array(
					'kriteria_id_dari'=>$k,
					'kriteria_id_tujuan'=>$x,
					'nilai'=>$x2,
					);
					$this->m_db->add_row('kriteria_nilai',$d);
				}
				}
			}
			$msg="Berhasil update nilai kriteria";
			$error=FALSE;
		}
    			
    	
    	if($error==FALSE)
    	{			
			echo json_encode(array('status'=>'ok','msg'=>$msg));
		}else{
			echo json_encode(array('status'=>'no','msg'=>$msg));
		}
		
	}

	function simpanPrioritasKriteria()
    {
		
		$prioritas=$this->input->post('pri-b');


		foreach ($prioritas as $i => $item) {
			$this->db->update('kriteria',array('prioritas'=>$item),array('id_kriteria'=>$i));
		}
		echo json_encode("dd");

	}

	function simpanPrioritasSkala($id)
    {
		
		$prioroitas=$this->input->post('pri-b');

		foreach ($prioroitas as $i => $item) {
			$data[]=array(
				'id_subkriteria' => $id,
				'skala_nilai'	 => $i+1,
				'prioritas'  	 => $item
			);
		}
		
		$this->db->delete('parameter_hasil', array('id_subkriteria ' => $id)); 
		
		$this->db->insert_batch('parameter_hasil',$data);
		
		
		echo json_encode($data);

	}

	function simpanNilaiSkala($id)
    {
		
		foreach($_POST as $k=>$v)
		{								
			foreach($v as $x=>$x2)
			{
				$data[] =array(
						'id_subkriteria'  		=>(int)$id,
						'id_parameter_dari'		=>$k,
						'id_parameter_tujuan'	=>$x,
						'nilai'					=>(int)$x2,
						);
			}
				
		}

		$this->db->delete('parameter_nilai', array('id_subkriteria' => $id));
		$this->db->insert_batch('parameter_nilai',$data);
		// foreach ($data as $item) {
		// 	$this->db->insert('parameter_nilai',$data);
		// 	echo json_encode($this->db->error());
			
		// }
		
	}

	function updatesub()
    {
    	$error=FALSE;
    	$kriteriaid=$this->input->post('kriteriaid');
    	if(!empty($kriteriaid))
    	{
    	$msg="";
    	$s=array(
    	'id_kriteria'=>$kriteriaid,
    	);
    	$this->m_db->delete_row('subkriteria_nilai',$s);
    	    	
    	$cr=$this->input->post('crvalue');
    	if($cr > 0.01)
    	{
    		$msg="Gagal diupdate karena nilai CR kurang dari 0.01";
			$error=TRUE;
		}else{
			foreach($_POST as $k=>$v)
			{
				if($k!="crvalue" && $k!="kriteriaid")
				{									
				foreach($v as $x=>$x2)
				{
					$d=array(
					'id_kriteria'=>$kriteriaid,
					'subkriteria_id_dari'=>$k,
					'subkriteria_id_tujuan'=>$x,
					'nilai'=>$x2,
					);
					$this->m_db->add_row('subkriteria_nilai',$d);
				}
				}
			}
			$msg="Berhasil update nilai subkriteria";
			$error=FALSE;
		}
    			
    	
    	if($error==FALSE)
    	{			
			echo json_encode(array('status'=>'ok','msg'=>$msg));
		}else{
			echo json_encode(array('status'=>'no','msg'=>$msg));
		}
		
		}else{
			$msg="Gagal mengubah nilai subkriteria";
			echo json_encode(array('status'=>'no','msg'=>$msg));
		}
		
	}

		function updatesubprioritas()
	{
    	$kriteriaid=$this->input->post('kriteriaid');
    	$prio=$this->input->post('prio');
    	if(!empty($prio))
    	{
			foreach($prio as $rk=>$rv)
			{
				$s=array(
				'id_subkriteria'=>$rk,
				);
				if($this->m_db->is_bof('subkriteria_hasil',$s)==TRUE)
				{
					$d=array(
					'id_subkriteria'=>$rk,
					'prioritas'=>$rv,
					);
					$this->m_db->add_row('subkriteria_hasil',$d);
				}else{
					$d=array(					
					'prioritas'=>$rv,
					);
					$this->m_db->edit_row('subkriteria_hasil',$d,$s);
				}
			}
			echo json_encode('ok');
		}else{
			echo json_encode('no');
		}
	}

	function hasil()
	{
		$data['dAlternatif']=$this->mod_pro->hasilPerhitungan();
		
		$this->template->load('template/backend/dashboard', 'perbandingan/prosesview',$data);
        
	}



	function proseshitung()
	{
		$kkm = 0.189684485;
		$data = $this->mod_pro->proseshitung($kkm);		
		if($data)
		{
			foreach ($data as $user) {
				$this->db->update('alternatif',
											   array('total'  =>$user->total,
													 'status' =>$user->status),
											   array('id_pemain' =>$user->id_pemain ));
			}
			echo json_encode(array('status'=>'ok'));
		}else{
			//set_header_message('danger','Proses Beasiswa','Beasiswa gagal diproses');
			//redirect(base_url(akses().'/beasiswa/beasiswa'));
			echo json_encode(array('status'=>'Error ☹'));
		}	
	}

	function gethtml_parameter($id_sub)
    {
		$output=array();
		
		for ($i=1; $i <=4 ; $i++) { 
			$output[$i]=$i;
		}
		$d['nama_sub'] 	=$this->mod_kriteria->get_subname($id_sub)->nama_subkriteria; 
		$d['arr']		=$output;
		$d['id_sub'] 	=$id_sub;
    	// $this->template->load('template/backend/dashboard', 'perbandingan/matriks/matrikutama', $d);
    	$this->load->view('perbandingan/matriks/matrikparameter', $d);
	}

	function getparameter()
	{		
		$id=$this->input->get('skriteria');
    	$namaKriteria=$this->mod_kriteria->kriteria_info($id,'nama_kriteria');
    	$dSub=$this->mod_kriteria->subkriteria_child($id,'id_nilai ASC');
    	$output=array();
    	if(!empty($dSub))
    	{					
		foreach($dSub as $rK)
		{
			$nama=field_value('subkriteria','id_subkriteria',$rK->id_subkriteria,'nama_subkriteria');
			$output[$rK->id_subkriteria]=$nama;
		}
		}
    	$d['arr']=$output;
    	$d['kriteriaid']=$id;
    	$d['namakriteria']=$namaKriteria;
    	$this->load->view('perbandingan/matriks/matriksub', $d);
	}
    
    
}
