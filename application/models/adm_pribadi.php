<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Adm_pribadi extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();		
	}

	public function get_all_debit(){
		$query = $this->db->query("select id_pengeluaran_pribadi,tanggal, debit, keterangan from pengeluaran_pribadi where debit !=0");
		return $query->result_array();
	}

	public function get_all_kredit(){
		$query = $this->db->query("select id_pengeluaran_pribadi,tanggal, kredit, keterangan from pengeluaran_pribadi where kredit !=0");
		return $query->result_array();

	}

	public function add_pribadi($tabel, $data){
		$result = $this->db->insert($tabel, $data);
		return $result;
	}

	public function update_pribadi($tabel,$data,$param){
		$this->db->where('id_pengeluaran_pribadi', $param);
		$this->db->update($tabel,$data);
		if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

	}

	public function GetDatapengeluaran()
	{
		$id = $this->input->get('id');
		$this->db->where('id_pengeluaran_pribadi', $id);
		$data = $this->db->get('pengeluaran_pribadi');
		if ($data->num_rows()>0) {
			return $data->row();
		}else{
			return false;
		}
	}

	public function updatePemasukanPribadi($data)
	{
		$id = $this->input->post('edit_idpribadi');
		$this->db->where('id_pengeluaran_pribadi', $id);
		$this->db->update('pengeluaran_pribadi', $data);
		if ($this->db->affected_rows()>0) {
			return true;
		}else{
			return false;
		}
	}

	public function delete_pribadi($id){
		$this->db->where('id_pengeluaran_pribadi', $id);
		$this->db->delete('pengeluaran_pribadi');
		if ($this->db->affected_rows() > 0) {
        return TRUE;
        }
        else{
        return FALSE;
        }

	}
	
}