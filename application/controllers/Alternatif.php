<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif extends CI_Controller
{
    function __construct()
    {
        parent::__construct();        
        $this->load->library('Form_validation');
        $this->load->library('M_db');
		$this->load->model('Sekolah_model','mod_sekolah');
		$this->load->model('Kriteria_model','mod_kriteria');
		$this->load->model('Alternatif_model','mod_alternatif');
		$this->load->library('Ion_auth');
		ceklogin();

    }
    
    function index()
    {
 
    	$sql="SELECT sekolah.* FROM sekolah INNER JOIN alternatif_nilai on sekolah.id_pemain = alternatif_nilai.id_pemain GROUP BY sekolah.id_pemain";
        $data['data']=$this->m_db->get_query_data($sql);
        $this->template->load('template/backend/dashboard', 'alternatif/alternatif_list', $data);
    }

    function create()
    {	
			
			$id_perawat=$this->input->post('id_perawat');
			$id_subkriteria=$this->input->post('subkriteriaid');
			$nilai = $this->input->post('nilai');

			
			if($id_perawat)
			{
				$listSekolah="";
				foreach ($id_subkriteria as $i => $item) {
					$data[] = array(
							  "id_pemain"      =>$id_perawat,
							  "id_subkriteria" =>$item,
							  "nilai" 		   =>$nilai[$i]
					);
				}
				
				if(!$this->mod_alternatif->insertAlternatifNilai($data))
				{
					$this->session->set_flashdata('warning', "Insert Data Alternatif Gagal ☹");
					redirect($_SERVER["HTTP_REFERER"]);
				}

				$this->session->set_flashdata('message', "Insert Data Alternatif berhasil 😀");
				redirect("Alternatif");

				
	        	
			}else{
			
	        $daftar_nilai = $this->mod_alternatif->getnilai();
			
	        $d['sekolah']=$this->mod_sekolah->sekolah_data();
	        $d['subkriteria']=$this->mod_kriteria->subkriteria_data();
	        $d['option_nilai'] = "";
	        foreach ($daftar_nilai as $item) {
	        	$d['option_nilai'].= '<option value="'.$item->nilai.'">'.$item->keterangan_nilai.'</option>';
	        }

	        $this->template->load('template/backend/dashboard', 'alternatif/alternatif_form', $d);
	    }
		
	}

	function hapus()
	{
		$id=$this->input->get('alternatif');
		if($this->mod_alternatif->alternatif_delete($id)==TRUE)
		{
			redirect('alternatif');
		}else{
			redirect('alternatif');
		}
	}
    
}
