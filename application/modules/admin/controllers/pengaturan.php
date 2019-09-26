<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengaturan extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('m_pengaturan');
        $this->load->helper('url');
        
    }
    
    public function index()
    {
        $data['getUptd'] = $this->m_pengaturan->getDataUptd()->result();
        $data['getUser'] = $this->m_pengaturan->getDataP3d()->result();
        $this->load->view('pengaturan', $data);
        
    }
    
    //FUNCTION CRUD PERTANYAAN
    public function updateStatus()
    {
        
        $id_user = $this->input->get('id_user');
        
        
        $data = array(
            'status' => '1'
        );
        
        $where = array(
            'id_user' => $id_user
        );
        
        $this->m_pengaturan->updateDataStatus($where, $data, 't_user');
        redirect('admin/pengaturan');
    }
    
    public function updateStatusnol()
    {
        
        $id_user = $this->input->get('id_user');
        
        
        $data = array(
            'status' => '0'
        );
        
        $where = array(
            'id_user' => $id_user
        );
        
        $this->m_pengaturan->updateDataStatusnol($where, $data, 't_user');
        redirect('admin/pengaturan');
    }
    
    public function tambahP3d()
    {
        $id_user  = $this->keygen(7);
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $uptd     = $this->input->post('uptd');
        $level    = $this->input->post('level');
        
        $data = array(
            'id_user' => $id_user,
            'username' => $username,
            'password' => $password,
            'id_uptd' => $uptd,
            'level' => $level
        );
        
        $this->m_pengaturan->tambahDataP3d($data, 't_user');
        
        redirect('admin/pengaturan');
    }
    
    public function editP3d($id)
    {
        $where           = array(
            'id_user' => $id
        );
        $data['getUser'] = $this->m_pengaturan->editDataP3d($where, 't_user')->result();
        $this->m_pengaturan->editDataP3d($data, 't_user');
        
        redirect('admin/pengaturan');
    }
    
    public function updateP3d()
    {
        $id_user  = $this->input->post('id_user');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $uptd     = $this->input->post('uptd');
        $level    = $this->input->post('level');
        
        $data = array(
            'username' => $username,
            'password' => $password,
            'id_uptd' => $uptd,
            'level' => $level
        );
        
        $where = array(
            'id_user' => $id_user
        );
        
        $this->m_pengaturan->updateDataP3d($where, $data, 't_user');
        redirect('admin/pengaturan');
    }
    
    public function hapusP3d($id)
    {
        $where = array(
            'id_user' => $id
        );
        $this->m_pengaturan->hapusDataP3d($where, 't_user');
        redirect('admin/pengaturan');
    }
    //END FUNCTION CRUD PERTANYAAN
    
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