<?php

class m_operator extends CI_Model
{
    function totalResponden()
    {
        $query = $this->db->get('t_hasil_head');
        
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    
    function totalPenilaian()
    {
        $this->db->select('SUM(bobot) as bobot');
        $this->db->from('t_hasil_child');
        $this->db->join('t_jawaban', 't_jawaban.id_jawaban=t_hasil_child.id_jawaban');
        $this->db->order_by("tgl_survei", 'DESC');
        $query = $this->db->get();
        
        return $query->row();
    }
    
    function rataPenilaian()
    {
        $this->db->select('AVG(bobot) as bobot');
        $this->db->from('t_hasil_child');
        $this->db->join('t_jawaban', 't_jawaban.id_jawaban=t_hasil_child.id_jawaban');
        $query = $this->db->get();
        
        return $query->row();
    }
    
    function getDataJenisKelamin()
    {
        $id = $this->session->userdata('id_uptd');
        
        $sql = "SELECT     COUNT(IF(jenis_kelamin='pria',1, NULL)) as pria,
                           COUNT(IF(jenis_kelamin='wanita',1, NULL)) as wanita
                FROM t_hasil_head where id_uptd='$id'";
        
        return $this->db->query($sql)->row();
    }
    
    
    function getDataUsia()
    {
        $iduptd = $this->session->userdata('id_uptd');
        
        $sql = "SELECT t_hasil_head.pendidikan,t_hasil_head.usia,COUNT(t_hasil_head.usia) as total 
                FROM
                t_hasil_head, t_user
                WHERE
                t_user.id_uptd = '$iduptd' and t_user.id_uptd=t_hasil_head.id_uptd";
        
        return $this->db->query($sql)->result();
    }
    
    function getDataPendidikan()
    {
        
        $this->db->select('pendidikan,count(pendidikan) as total');
        $this->db->from('t_hasil_head');
        $this->db->group_by("pendidikan");
        $this->db->order_by("pendidikan", 'asc');
        $query = $this->db->get();
        
        return $query->result();
    }
    
}

?>