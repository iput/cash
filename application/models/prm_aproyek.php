<?php defined('BASEPATH')OR exit('akses ditolak');

/**
* 
*/
class Prm_aproyek extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_pm_proyek($id){
		$this->db->select('project_personil.id_project, nama_project');
		$this->db->from('project');
		$this->db->where('project_personil.id_user', $id);
		$this->db->join('project_personil','project_personil.id_level_user=3 and project_personil.id_project=project.id_project');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function add_anggaran($tabel, $data){
		$result = $this->db->insert($tabel, $data);
		return $result;
	}

	public function get_all_anggaran($id_user){
		$this->db->select('id_anggaran_pengeluaran, nama_anggaran, anggaran_pengeluaran.anggaran, project.nama_project');
		$this->db->from('anggaran_pengeluaran');
		$this->db->where('project_personil.id_user', $id_user);
		$this->db->where('project_personil.id_level_user', 3);
		$this->db->join('project_personil', 'project_personil.id_project=anggaran_pengeluaran.id_project');
		$this->db->join('project', 'project.id_project=anggaran_pengeluaran.id_project and project_personil.id_project=project.id_project');
		$query = $this->db->get();
		return $query->result_array();
	}


	public function update_anggaran_pengeluaran($tabel, $data, $param){
		$this->db->where('id_anggaran_pengeluaran', $param);
		$this->db->update($tabel, $data);
		 if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

	}

	public function get_anggaran($id){
		$query = $this->db->query('select * from anggaran_pengeluaran where id_anggaran_pengeluaran='.$id);
		return $query -> result_array();
	}

	public function delete_anggaran_pengeluaran($id){
		$this->db->where('id_anggaran_pengeluaran', $id);
		$this->db->delete('anggaran_pengeluaran');
		if ($this->db->affected_rows() > 0) {
        return TRUE;
        }
        return FALSE;

	}
}