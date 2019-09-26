<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class m_login extends CI_Model{

  

  public function ambillogin($username,$password)
  {
    
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $query = $this->db->get('t_user');
    if($query->num_rows()>0){
      foreach ($query->result() as $row) {
        $sess = array('username'  =>$row->username,
                      'password'  =>$row->password,
                      'id_uptd'  =>$row->id_uptd,
                      'last_login'=>date('Y-m-d H:i:s'),
                      'level'    =>$row->level,
                      'status'    =>$row->status
                     );
     }

     $this->session->get_userdata($sess);
     $this->session->set_userdata($sess);
     $cekstatus=$this->db->get_where('t_user', array('username'=>$username, 'password'=>$password ))->row();
     if($cekstatus->level == "admin" && $cekstatus->status == 1){
      $this->db->where('username',$result->username);
      $this->db->update('t_user', array('last_login'=> date('Y-m-d H:i:s')));
      redirect('admin');
     }elseif ($cekstatus->level == "operator" && $cekstatus->status == 1) {
      $this->db->where('username',$result->username);
      $this->db->update('t_user', array('last_login'=> date('Y-m-d H:i:s')));
      redirect('operator');
     }else{
      $this->db->where('username',$result->username);
      $this->db->update('t_user', array('last_login'=> date('Y-m-d H:i:s')));
      redirect('form');
     }
   
  }else{
          $this->session->set_flashdata('info','Maaf Username dan Password anda salah!');
          redirect('');
    }
  }
  public function logout($date, $username)
    {
        $this->db->where('t_user.username', $username);
        $this->db->update('t_user', $date);
    }


}

