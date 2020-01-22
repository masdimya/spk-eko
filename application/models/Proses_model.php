<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Proses_model extends CI_Model
{	
    function __construct()
    {
    	parent::__construct(); 
        $this->load->library('m_db');
        $this->load->model('Kriteria_model','mod_kriteria');
    }
    
	
	function proseshitung($nilai_KKM)
	{
		
		$sql='SELECT tmp.id_pemain, 
		             SUM(tmp.sum_pertama * kriteria.prioritas) as total,
					 IF(SUM(tmp.sum_pertama * kriteria.prioritas) >= '.$nilai_KKM.',"LAYAK","TIDAK_LAYAK") as status
			  FROM 
					(SELECT alternatif.id_pemain,
						subkriteria.id_kriteria,
						SUM(parameter_hasil.prioritas * subkriteria_hasil.prioritas) as sum_pertama
					FROM alternatif
					LEFT JOIN alternatif_nilai ON alternatif.id_alternatif = alternatif_nilai.id_alternatif
					LEFT JOIN subkriteria ON alternatif_nilai.id_subkriteria = subkriteria.id_subkriteria
					LEFT JOIN subkriteria_hasil ON subkriteria.id_subkriteria = subkriteria_hasil.id_subkriteria
					LEFT JOIN parameter_hasil ON 
					(alternatif_nilai.id_subkriteria = parameter_hasil.id_subkriteria AND alternatif_nilai.nilai = parameter_hasil.skala_nilai)
					GROUP BY alternatif.id_pemain,subkriteria.id_kriteria) as tmp
		      LEFT JOIN kriteria on tmp.id_kriteria = kriteria.id_kriteria
			  GROUP BY tmp.id_pemain
			  ORDER BY tmp.id_pemain,tmp.id_kriteria';
		
		$q = $this->db->query($sql)->result();
		return $q;
	}

	function hasilPerhitungan(){
		$q= $this->db->select('sekolah.nama_pemain,
							   sekolah.posisi,
							   IF(alternatif.total is NULL ,0, alternatif.total) as total ,
							   IF(alternatif.status is NULL, "NONE",alternatif.status) as status')
					 ->join('sekolah','alternatif.id_pemain = sekolah.id_pemain','left')
					 ->get('alternatif')
					 ->result();
		return $q;
	}

	
}