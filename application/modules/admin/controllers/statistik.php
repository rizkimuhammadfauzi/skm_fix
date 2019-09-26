<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class statistik extends CI_Controller{

   public function __construct()
  {
    parent::__construct();
    
     $this->load->model('m_statistik');
     $this->load->helper('url');
    
  }
 
  public function index()
  {

    $data['getDataJenisKelamin']  = $this->m_statistik->getDataJenisKelamin();
    $data['getDataUsia']          = $this->m_statistik->getDataUsia();
    $data['getDataPendidikan']    = $this->m_statistik->getDataPendidikan();
    $data['getUptd']              = $this->m_statistik->getDataUptd()->result();
    $this->load->view('statistik',$data);
    
  }


 public function apiStatic()
  {

    $id = $this->input->post('id');
    $data['getDataJenisKelamin']  = $this->m_statistik->getDataJenisKelamin($id);
    $data['getDataUsia']          = $this->m_statistik->getDataUsia($id);
    $data['getDataPendidikan']    = $this->m_statistik->getDataPendidikan($id);
     header('Content-Type: application/json');
    echo json_encode( $data );
    
  }

}