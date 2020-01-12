<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sekolah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sekolah_model');
        $this->load->library('Form_validation');
        $this->load->library('Ion_auth');
        ceklogin();
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'sekolah/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'sekolah/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'sekolah/index.html';
            $config['first_url'] = base_url() . 'sekolah/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Sekolah_model->total_rows($q);
        $sekolah = $this->Sekolah_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'sekolah_data' => $sekolah,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template/backend/dashboard', 'sekolah/sekolah_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Sekolah_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_perawat' => $row->id_perawat,
		'nama_perawat' => $row->nama_perawat,
		'dep_jabatan' => $row->dep_jabatan,
		'tgl_bergabung' => $row->tgl_bergabung,
		'tgl_evaluasi' => $row->tgl_evaluasi,
		'hasil_evaluasi' => $row->hasil_evaluasi,
		'target_evaluasi' => $row->target_evaluasi,
	    );
            $this->template->load('template/backend/dashboard', 'sekolah/sekolah_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('sekolah'));
        }
    }

    public function create() 
    {
        $data = array(
        'button' => 'Create',
        'action' => site_url('sekolah/create_action'),
	    'id_perawat' => set_value('id_perawat'),
	    'nama_perawat' => set_value('nama_perawat'),
	    'dep_jabatan' => set_value('dep_jabatan'),
	    'tgl_bergabung' => set_value('tgl_bergabung'),
	    'tgl_evaluasi' => set_value('tgl_evaluasi'),
	    'hasil_evaluasi' => set_value('hasil_evaluasi'),
	    'target_evaluasi' => set_value('target_evaluasi'),
	);
        $this->template->load('template/backend/dashboard', 'sekolah/sekolah_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_perawat' => $this->input->post('nama_perawat',TRUE),
		'dep_jabatan' => $this->input->post('dep_jabatan',TRUE),
		'tgl_bergabung' => $this->input->post('tgl_bergabung',TRUE),
		'tgl_evaluasi' => $this->input->post('tgl_evaluasi',TRUE),
		'hasil_evaluasi' => $this->input->post('hasil_evaluasi',TRUE),
		'target_evaluasi' => $this->input->post('target_evaluasi',TRUE),
	    );

            $this->Sekolah_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('sekolah'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Sekolah_model->get_by_id($id);

        if ($row) {
            $data = array(
            'button' => 'Update',
            'action' => site_url('sekolah/update_action'),
    		'id_perawat' => set_value('id_perawat', $row->id_perawat),
    		'nama_perawat' => set_value('nama_perawat', $row->nama_perawat),
    		'dep_jabatan' => set_value('dep_jabatan', $row->dep_jabatan),
    		'tgl_bergabung' => set_value('tgl_bergabung', $row->tgl_bergabung),
    		'tgl_evaluasi' => set_value('tgl_evaluasi', $row->tgl_evaluasi),
    		'hasil_evaluasi' => set_value('hasil_evaluasi', $row->hasil_evaluasi),
    		'target_evaluasi' => set_value('target_evaluasi', $row->target_evaluasi),
	    );
            $this->template->load('template/backend/dashboard', 'sekolah/sekolah_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('sekolah'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_perawat', TRUE));
        } else {
        $data = array(
		'nama_perawat' => $this->input->post('nama_perawat',TRUE),
		'dep_jabatan' => $this->input->post('dep_jabatan',TRUE),
		'tgl_bergabung' => $this->input->post('tgl_bergabung',TRUE),
		'tgl_evaluasi' => $this->input->post('tgl_evaluasi',TRUE),
		'hasil_evaluasi' => $this->input->post('hasil_evaluasi',TRUE),
		'target_evaluasi' => $this->input->post('target_evaluasi',TRUE),
	    );

            $this->Sekolah_model->update($this->input->post('id_perawat', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('sekolah'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Sekolah_model->get_by_id($id);

        if ($row) {
            $this->Sekolah_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('sekolah'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('sekolah'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_perawat', 'nama_perawat', 'trim|required');
	$this->form_validation->set_rules('dep_jabatan', 'dep_jabatan', 'trim|required');
	$this->form_validation->set_rules('tgl_bergabung', 'tgl_bergabung', 'trim|required');
	$this->form_validation->set_rules('tgl_evaluasi', 'tgl_evaluasi', 'trim|required');
	$this->form_validation->set_rules('hasil_evaluasi', 'hasil_evaluasi', 'trim|required');
	$this->form_validation->set_rules('target_evaluasi', 'target_evaluasi', 'trim|required');

	$this->form_validation->set_rules('id_perawat', 'id_perawat', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "sekolah.xls";
        $judul = "sekolah";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
    	xlsWriteLabel($tablehead, $kolomhead++, "Nama Perawat");
    	xlsWriteLabel($tablehead, $kolomhead++, "DEP / Jabatan");
    	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Bergabung");
    	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Evaluasi");
    	xlsWriteLabel($tablehead, $kolomhead++, "Hasil Evalusi Sebelumnya");
    	xlsWriteLabel($tablehead, $kolomhead++, "Target Selama Evaluasi");

	foreach ($this->Sekolah_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
        xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_perawat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->dep_jabatab);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_bergabung);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_evaluasi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->hasil_evaluasi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->target_evaluasi);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Sekolah.php */
/* Location: ./application/controllers/Sekolah.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-07-23 05:12:40 */
/* http://harviacode.com */