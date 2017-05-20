<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Prm_pengeluaran extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_nm_project($idUser){
		$this->db->select('project_personil.id_project, nama_project');
		$this->db->from('project');
		$this->db->where('project_personil.id_user', $idUser);
		$this->db->join('project_personil','project_personil.id_level_user=3 and project_personil.id_project=project.id_project');
		$query = $this->db->get();
		return $query->result_array();	
	}

	public function get_nm_anggaran($idProject){
		$anggaran = "<option value='0'>Pilih Project</option>";
		$this->db->select('id_anggaran_pengeluaran, nama_anggaran, sisa_anggaran');
		$this->db->from('anggaran_pengeluaran');
		$this->db->where('id_project', $idProject);
		$query = $this->db->get();
		$hasil = $query->result_array();
		foreach ($hasil as $hsl) {
            $anggaran.="<option value='$hsl[id_anggaran_pengeluaran]'>$hsl[nama_anggaran]<b>($hsl[sisa_anggaran])</b></option>";
        }
        return $anggaran;
	}

	public function add_pengeluaran($tabel, $data){
		$result = $this->db->insert($tabel, $data);
        return $result;
	}

	public function update_anggaran($tabel, $data, $param){
		$this->db->where('id_anggaran_pengeluaran', $param);
        $this->db->update($tabel, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
	}

	public function get_sisa_anggaran($id_anggaran_pengeluaran){
		$this->db->select('sisa_anggaran');
		$this->db->from('anggaran_pengeluaran');
		$this->db->where('id_anggaran_pengeluaran', $id_anggaran_pengeluaran);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getAllPengeluaran(){
		$this->db->select('nama_project, nama_anggaran, id_pengeluaran_project, nama_pengeluaran, jumlah_pengeluaran, keterangan_pengeluaran');
		$this->db->from('pengeluaran_project');
		$this->db->join('anggaran_pengeluaran', 'pengeluaran_project.id_anggaran_pengeluaran=anggaran_pengeluaran.id_anggaran_pengeluaran');
		$this->db->join('project', 'anggaran_pengeluaran.id_project=project.id_project');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_pengeluaran($id){
		$this->db->select('project.id_project, anggaran_pengeluaran.id_anggaran_pengeluaran, id_pengeluaran_project, nama_pengeluaran, jumlah_pengeluaran, keterangan_pengeluaran');
		$this->db->from('pengeluaran_project');
		$this->db->where('id_pengeluaran_project', $id);
		$this->db->join('anggaran_pengeluaran', 'pengeluaran_project.id_anggaran_pengeluaran = anggaran_pengeluaran.id_anggaran_pengeluaran');
		$this->db->join('project', 'anggaran_pengeluaran.id_project=project.id_project');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function update_pengeluaran($tabel, $data, $param){
		$this->db->where('id_anggaran_pengeluaran', $param);
        $this->db->update($tabel, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
	}

	public function delete_pengeluaran($tabel, $parameter){
		$data_delete = $this->db->delete($tabel, $parameter);
        return $data_delete;
	}



	





}