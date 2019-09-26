<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_form extends CI_Model
{
    
    function getPertanyaan()
    {
        $query = $this->db->get_where('t_pertanyaan', array(
            'status => 1'
        ));
        
        return $query->result();
    }
    
    function getJumlahPertanyaan()
    {
        $query = $this->db->get_where('t_pertanyaan', array(
            'status => 1'
        ));
        
        return $query->num_rows();
        
    }
    
    function getJawaban()
    {
        $this->db->select('*');
        $this->db->from('t_jawaban');
        $this->db->join('t_pertanyaan', 't_pertanyaan.id_pertanyaan = t_jawaban.id_pertanyaan');
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function saveHasil($dataWP, $hasilSurvey)
    {
        $this->db->insert('t_hasil_head', $dataWP);
        $this->db->insert_batch('t_hasil_child', $hasilSurvey);
        /*$this->session->sess_destroy();*/
        redirect('skm/');
    }
    
}

?>