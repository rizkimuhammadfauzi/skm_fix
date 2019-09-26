<?php

class m_statistik extends CI_Model
{
    
    function getDataJenisKelamin($id = null)
    {
        
        if (is_null($id)) {
            
            $sql = "SELECT COUNT(IF(jenis_kelamin='pria',1, NULL)) as pria,
                           COUNT(IF(jenis_kelamin='wanita',1, NULL)) as wanita
                FROM t_hasil_head";
        } else {
            
            $sql = "SELECT COUNT(IF(jenis_kelamin='pria',1, NULL)) as pria,
                           COUNT(IF(jenis_kelamin='wanita',1, NULL)) as wanita
                FROM t_hasil_head where id_uptd='$id'";
        }
        
        return $this->db->query($sql)->row();
    }
    
    function getDataUptd()
    {
        return $this->db->get('t_uptd');
    }
    
    
    function getDataUsia($id = null)
    {
        
        $this->db->select('usia,pendidikan,count(usia) as total');
        $this->db->from('t_hasil_head');
        
        if (!is_null($id)) {
            $this->db->where("id_uptd", $id);
        }
        
        $this->db->group_by("usia");
        $this->db->group_by("pendidikan");
        $this->db->order_by("pendidikan", 'asc');
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function getDataPendidikan($id = null)
    {
        
        
        $this->db->select('pendidikan,count(pendidikan) as total');
        $this->db->from('t_hasil_head');
        if (!is_null($id)) {
            $this->db->where("id_uptd", $id);
        }
        $this->db->group_by("pendidikan");
        $this->db->order_by("pendidikan", 'asc');
        $query = $this->db->get();
        
        return $query->result();
    }
    
}

?>