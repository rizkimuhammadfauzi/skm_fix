<?php

class m_pengaturan extends CI_Model
{
	function getDataP3d()
	{
		return $this->db->get('t_user');
	}

	function updateDataStatus($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function updateDataStatusnol($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function getDataUptd()
	{
		return $this->db->get('t_uptd');		
	}

	//function crud pertanyaan
	function tambahDataP3d($data,$table){
		$this->db->insert($table,$data);
	}

	function editDataP3d($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	 
	function updateDataP3d($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	 
	function hapusDataP3d($where,$table)
	{
	 	$this->db->where($where);
	  	$this->db->delete($table);
	}

}

?>