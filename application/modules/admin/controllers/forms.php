<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forms extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('m_forms');
        $this->load->helper('url');
        
    }
    
    public function index()
    {
        $data['getOpd']        = $this->m_forms->getDataOpd()->result();
        $data['getUptd']       = $this->m_forms->getDataUptd()->result();
        $data['getPertanyaan'] = $this->m_forms->getDataPertanyaan()->result();
        $this->load->view('forms', $data);
        
    }
    
    //FUNCTION CRUD PERTANYAAN
    public function updateStatus()
    {
        
        $id_pertanyaan = $this->input->get('id_pertanyaan');
        
        
        $data = array(
            'status' => '1'
        );
        
        $where = array(
            'id_pertanyaan' => $id_pertanyaan
        );
        
        $this->m_forms->updateDataStatus($where, $data, 't_pertanyaan');
        redirect('admin/forms');
    }
    
    public function updateStatusnol()
    {
        
        $id_pertanyaan = $this->input->get('id_pertanyaan');
        
        
        $data = array(
            'status' => '0'
        );
        
        $where = array(
            'id_pertanyaan' => $id_pertanyaan
        );
        
        $this->m_forms->updateDataStatusnol($where, $data, 't_pertanyaan');
        redirect('admin/forms');
    }
    
    public function tambahPertanyaan()
    {
        $pertanyaan = $this->input->post('pertanyaan');
        $deskripsi  = $this->input->post('deskripsi');
        $opd        = $this->input->post('opd');
        
        $data = array(
            'pertanyaan' => $pertanyaan,
            'deskripsi' => $deskripsi,
            'id_opd' => $opd
        );
        
        $this->m_forms->tambahDataPertanyaan($data, 't_pertanyaan');
        
        redirect('admin/forms');
    }
    
    public function editPertanyaan($id)
    {
        $where                 = array(
            'id_pertanyaan' => $id
        );
        $data['getPertanyaan'] = $this->m_forms->editDataPertanyaan($where, 't_pertanyaan')->result();
        $this->m_forms->editDataPertanyaan($data, 't_pertanyaan');
        
        redirect('admin/forms');
    }
    
    public function updatePertanyaan()
    {
        $id_pertanyaan = $this->input->post('id_pertanyaan');
        $pertanyaan    = $this->input->post('pertanyaan');
        $deskripsi     = $this->input->post('deskripsi');
        $opd           = $this->input->post('opd');
        
        $data = array(
            'pertanyaan' => $pertanyaan,
            'deskripsi' => $deskripsi,
            'id_opd' => $opd
        );
        
        $where = array(
            'id_pertanyaan' => $id_pertanyaan
        );
        
        $this->m_forms->updateDataPertanyaan($where, $data, 't_pertanyaan');
        redirect('admin/forms');
    }
    
    public function hapusPertanyaan($id)
    {
        $where = array(
            'id_pertanyaan' => $id
        );
        $this->m_forms->hapusDataPertanyaan($where, 't_pertanyaan');
        redirect('admin/forms');
    }
    //END FUNCTION CRUD PERTANYAAN
    
    //FUNCTION CRUD OPD
    public function tambahOpd()
    {
        $id_opd   = $this->keygen(7);
        $nama_opd = $this->input->post('opd');
        
        $data = array(
            'id_opd' => $id_opd,
            'nama_opd' => $nama_opd
        );
        
        $this->m_forms->tambahDataOpd($data, 't_opd');
        
        redirect('admin/forms');
    }
    
    public function editOpd($id)
    {
        $where          = array(
            'id_opd' => $id
        );
        $data['getOpd'] = $this->m_forms->editDataOpd($where, 't_opd')->result();
        $this->m_forms->editDataOpd($data, 't_pertanyaan');
        
        redirect('admin/forms');
    }
    
    public function updateOpd()
    {
        $nama_opd = $this->input->post('nama_opd');
        $id_opd   = $this->input->post('id_opd');
        
        $data = array(
            'nama_opd' => $nama_opd
        );
        
        $where = array(
            'id_opd' => $id_opd
        );
        
        $this->m_forms->updateDataOpd($where, $data, 't_opd');
        redirect('admin/forms');
    }
    
    public function hapusOpd($id)
    {
        $where = array(
            'id_opd' => $id
        );
        $this->m_forms->hapusDataOpd($where, 't_opd');
        redirect('admin/forms');
    }
    //END FUNCTION CRUD OPD
    
    
    //FUNCTION CRUD UPTD
    public function tambahUptd()
    {
        $id_uptd   = $this->keygen(7);
        $nama_uptd = $this->input->post('uptd');
        $id_opd    = $this->input->post('opd');
        
        $data = array(
            'id_uptd' => $id_uptd,
            'nama_uptd' => $nama_uptd,
            'id_opd' => $id_opd
        );
        
        $this->m_forms->tambahDataUptd($data, 't_uptd');
        
        redirect('admin/forms');
    }
    
    public function editUptd($id)
    {
        $where           = array(
            'id_uptd' => $id
        );
        $data['getUptd'] = $this->m_forms->editDataUptd($where, 't_uptd')->result();
        $this->m_forms->editDataUptd($data, 't_uptd');
        
        redirect('admin/forms');
    }
    
    public function updateUptd()
    {
        $nama_uptd = $this->input->post('nama_uptd');
        $id_opd    = $this->input->post('opd');
        $id_uptd   = $this->input->post('id_uptd');
        
        $data = array(
            'nama_uptd' => $nama_uptd,
            'id_opd' => $id_opd
        );
        
        $where = array(
            'id_uptd' => $id_uptd
        );
        
        $this->m_forms->updateDataUptd($where, $data, 't_uptd');
        redirect('admin/forms');
    }
    
    public function hapusUptd($id)
    {
        $where = array(
            'id_uptd' => $id
        );
        $this->m_forms->hapusDataUptd($where, 't_uptd');
        redirect('admin/forms');
    }
    //END FUNCTION CRUD UPTD
    
    public function keygen($panjang)
    {
        $karakter = '123456789';
        $string   = '';
        for ($i = 0; $i < $panjang; $i++) {
            $pos = rand(0, strlen($karakter) - 1);
            $string .= $karakter{$pos};
        }
        return $string;
    }
    
}

?>