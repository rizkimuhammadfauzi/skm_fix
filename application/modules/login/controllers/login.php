<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class login extends CI_Controller{

   public function __construct()
  {
    parent::__construct();
    
   
  }
 
  public function index()
  {

    $this->load->view('v_login');
    
  }

  public function ceklogin(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $this->load->model('m_login');
    $cek= $this->m_login->ambillogin($username,$password);
    if (count($cek)==1) {
      $id_uptd  = $cek['id_uptd'];
    	$username = $cek['username'];
    	$password = $cek['password'];
    	$level	  = $cek['level'];
      $status   = $cek['status'];
    }
  }

  public function logout(){
        date_default_timezone_set("ASIA/JAKARTA");
        $date     = array('last_login' => date('Y-m-d H:i:s'));
        $username = $this->session->userdata('username');
        $this->load->model('m_login');
        $this->m_login->logout($date, $username);
        $this->session->sess_destroy();
        redirect('');
  }
}