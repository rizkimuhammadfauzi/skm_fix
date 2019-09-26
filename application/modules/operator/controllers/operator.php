 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class operator extends CI_Controller{

   public function __construct()
  {
    parent::__construct();
    
     $this->load->model('m_operator');
     $this->load->helper('url');
     if($this->session->userdata('level')!="operator"){
      //$this->session->sess_destroy();
      /*$message = "Anda telah login sebagai ".$this->session->userdata('level');
             echo "<script type='text/javascript'>alert('$message');</script>";*/
      redirect('','refresh');
     }
  }
 
  public function index()
  {
  	$data['getDataJenisKelamin']  = $this->m_operator->getDataJenisKelamin();
    $data['getDataUsia']          = $this->m_operator->getDataUsia();
    $data['getDataPendidikan']    = $this->m_operator->getDataPendidikan();
    $this->load->view('dashboardOperator',$data);
    
  }


}