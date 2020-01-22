<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Alternatif_model extends CI_Model
{	

	private $tb_alternatif='alternatif';
    function __construct()
    {
         $this->load->library('M_db');
    }
    

	
	function alternatif_add($id_perawat,$kriteriaData=array(), $sub=array())
	{
        if($this->m_db->is_bof('sekolah')==FALSE)
        {
        	if(!empty($kriteriaData))
        	{
				$d=array(
				'id_perawat'=>$id_perawat,
				);
				if($this->m_db->add_row('alternatif',$d)==TRUE)
				{
					$alternatifID=$this->m_db->last_insert_id();
					foreach($subkriteriaData as $rK=>$rV)
					{
						$d2=array(
						'id_alternatif'=>$alternatifID,
						//'id_subkriteria'=>$rK,
						'id_nilai'=>$rV,
						);
						$this->m_db->add_row('alternatif_nilai',$d2);
					}
					redirect('Alternatif','refresh');
				}else{
					return false;
				}
			}else{
				//echo "DATA KRITERIA TAK ADA";
				return false;
			}		
		}else{
			//echo "SISWA TIDAK ADA";
			return false;
		}
	}

	 function insert($d2)
    {
        $this->db->insert($this->alternatif, $d2);
    }

	function alternatif_delete($id_alternatif)
	{
		$s=array(
		'id_alternatif'=>$id_alternatif,
		);
		if($this->m_db->delete_row($this->tb_alternatif,$s)==TRUE)
		{
			return true;
		}else{
			return false;
		}
	}

	function getnilai(){
		return $this->db->get('nilai_kategori')->result();
	}

	function insertAlternatifNilai($data){
		if($this->db->insert_batch("alternatif_nilai",$data)){
			return true;
		}
		return false;
	}

	function insertAlternatif($id_pemain){
		if($this->db->insert("alternatif",array("id_pemain" => $id_pemain))){
			return $this->db->insert_id(); 
		}
	}

	function getAlternatif(){
		$q = $this->db->select('sekolah.*')
				 ->join('alternatif','sekolah.id_pemain = alternatif.id_pemain','inner')
				 ->get('sekolah')
				 ->result();
		return $q;
	}

	function getNotInAlternatif(){
		$q = $this->db->select('sekolah.*')
				 ->join('alternatif','sekolah.id_pemain = alternatif.id_pemain','left')
				 ->where('alternatif.id_alternatif is NULL')
				 ->get('sekolah')
				 ->result();
		return $q;
	}
	


}