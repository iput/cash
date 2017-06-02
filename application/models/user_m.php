<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class User_m extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
 	public function getAllDebit()
 	{
 		$data = $this->db->query("SELECT id_pengeluaran_pribadi,tanggal,debit,keterangan FROM pengeluaran_pribadi  where debit NOT IN (0)");
 		if ($data) {
 			return $data->result_array();
 		}else{
 			return false;
 		}
 	}
 	public function getCurrentDebit($id)
 	{
 		$this->db->where('id_pengeluaran_pribadi', $id);
 		$data = $this->db->get('pengeluaran_pribadi');
 		if ($data->num_rows()>0) {
 			return $data->row();
 		}else{
 			return false;
 		}
 	}

 	public function insertDebit($dataIn)
 	{
 		$this->db->insert('pengeluaran_pribadi', $dataIn);
 		if ($this->db->affected_rows()>0) {
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
 		$this->db->where('id_pengeluaran_pribadi', $Id);
 		$this->db->delete('pengeluaran_pribadi');
 		if ($this->db->affected_rows()>0) {
 			return true;
 		}else{
 			return false;
 		}
 	}

 	public function getAllKredit()
 	{
 		$data = $this->db->query("SELECT id_pengeluaran_pribadi,tanggal,kredit,keterangan FROM pengeluaran_pribadi where kredit NOT IN(0) ");
 		if ($data->result_array()) {
 			return $data->result_array();
 		}else{
 			return false;
 		}
 	}

 	public function getCurrentKredit($id)
 	{
 		$this->db->where('id_pengeluaran_pribadi', $id);
 		$data = $this->db->get('pengeluaran_pribadi');
 		if ($data->num_rows()>0) {
 			return $data->row();
 		}else{
 			return false;
 		}
 	}

 	public function insertKredit($dataIn)
 	{
 		$this->db->insert('pengeluaran_pribadi', $dataIn);
 		if ($this->db->affected_rows()>0) {
 			return true;
 		}else{
 			return false;
 		}
 	}
 	public function updateKredit($dataUp, $id)
 	{
 		$this->db->where('id_pengeluaran_pribadi', $id);
 		$update = $this->db->update('pengeluaran_pribadi',$dataUp);
 		if ($update) {
 			return $update->result_array();
 		}else{
 			return false;
 		}
 	}
 	public function deleteKredit($id)
 	{
 		$this->db->where('id_pengeluaran_pribadi', $id);
 		$this->db->delete('pengeluaran_pribadi');
 		if ($this->db->affected_rows()>0) {
 			return true;
 		}else{
 			return false;
 		}
 	}
 } ?>