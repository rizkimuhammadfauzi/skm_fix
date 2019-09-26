<?php

class m_forms extends CI_Model
{

	function getDataPertanyaan()
	{
		return $this->db->get('t_pertanyaan');
	}

	function getDataOpd()
	{
		return $this->db->get('t_opd');		
	}

	function getDataUptd()
	{
		return $this->db->get('t_uptd');		
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

	function tambahDataPertanyaan($data,$table){
		$this->db->insert($table,$data);
	}

	function editDataPertanyaan($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	 
	function updateDataPertanyaan($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	 
	function hapusDataPertanyaan($where,$table)
	{
	 	$this->db->where($where);
	  	$this->db->delete($table);
	}

	//function crud OPD
	function tambahDataOpd($data,$table){
		$this->db->insert($table,$data);
	}

	function editDataOpd($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	 
	function updateDataOpd($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	 
	function hapusDataOpd($where,$table)
	{
	 	$this->db->where($where);
	  	$this->db->delete($table);
	}


	//function crud UPTD
	function tambahDataUptd($data,$table){
		$this->db->insert($table,$data);
	}

	function editDataUptd($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	 
	function updateDataUptd($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	 
	function hapusDataUptd($where,$table)
	{
	 	$this->db->where($where);
	  	$this->db->delete($table);
	}

}

?>