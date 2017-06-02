<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class User_aset extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
 	public function getAllDebit()
 	{
 		$data = $this->db->query("SELECT * FROM pengeluaran_pribadi");
 		if ($data) {
 			return $data->result_array();
 		}else{
 			return false;
 		}
 	}
 	public function getCurrentDebit($id)
 	{
 		$this->db->where('id_pengeluaran_pr', $id);
 		$data = $this->db->get('pengeluaran_pribadi');
 		if ($data->num_rows()>0) {
 			return $data->row();
 		}else{
 			return false;
 		}
 	}

 	public function insertDebit($dataIn)
 	{
 		$data = $this->db->insert('pengeluaran_pribadi', $dataIn);
 		if ($data->affected_rows()>0) {
 			return true;
 		}else{
 			return false;
 		}
 	}
 	public function updateDebit($dataUp, $id)
 	{
 		$this->db->where('id_pengeluaran_pr', $id);
 		$this->db->update('pengeluaran_pribadi', $data);
 		if ($this->db->affected_rows()>0) {
 			return true;
 		}else{
 			return false;
 		}
 	}
 	public function deleteDebit($Id)
 	{
 		$this->db->where('id_pengeluaran_pr', $Id);
 		$this->db->delete('pengeluaran_pribadi');
 		if ($this->db->affected_rows()>0) {
 			return true;
 		}else{
 			return false;
 		}
 	}
 } ?>