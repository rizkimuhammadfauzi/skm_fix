<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class admin extends CI_Controller{

   public function __construct()
  {
    parent::__construct();
    
     $this->load->model('m_admin');
     $this->load->helper('url');
     if($this->session->userdata('level')!="admin"){
      //$this->session->sess_destroy();
      /*$message = "Anda telah login sebagai ".$this->session->userdata('level');
             echo "<script type='text/javascript'>alert('$message');</script>";*/
      redirect('','refresh');

     }
    
  }
 
  public function index()
  {

    $data['totalResponden']       = $this->m_admin->totalResponden();
    $data['totalPenilaian']       = $this->m_admin->totalPenilaian();
    $data['rataPenilaian']        = $this->m_admin->rataPenilaian();
    $data['responTerakhir']       = $this->m_admin->responTerakhir();
    $data['getDataJenisKelamin']  = $this->m_admin->getDataJenisKelamin();
    $data['getDataUsia']          = $this->m_admin->getDataUsia();
    $data['getDataPendidikan']    = $this->m_admin->getDataPendidikan();
    $this->load->view('dashboard',$data);
    
  }

}