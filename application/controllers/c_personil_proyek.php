<?php 
defined('BASEPATH')OR exit('Nor direct script sccess allowed');
/**
 * 
 */
 class C_personil_proyek extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('adm_personil');
 		$this->load->model('adm_proyek');
 		$this->load->model('adm_personil_proyek');
 	}

 	public function index()
 	{
		$data['stat1']="";
		$data['stat2']="";
		$data['stat3']="active";
		$data['stat4']="";
		$data['stat5']="";
		$data['stat6']="";
		$data['stat7']="";
		$data['stat8']="";
		$data['stat9']="";

		$hasil ['nama_proyek'] = $this->adm_proyek->get_all_project();
		$hasil ['nama_user'] = $this->adm_personil->get_all_personil();
		$hasil ['level'] = $this->adm_personil_proyek->get_all_level();
		$hasil ['isi_table'] = $this->adm_personil_proyek->get_all_PP();
		$this->load->view('attribute/header', $data);
		$this->load->view('admin/v_personil_proyek', $hasil);
		$this->load->view('attribute/footer');
 	}

public function add_personil_project(){
	$field = array(
'id_project' => $this->input->post('cb_proyek'),
'id_user' => $this->input->post('cb_userpp'),
'id_level_user' => $this->input->post('cb_levelakses')
		);
	$result= $this->adm_personil_proyek->add_personil_project('project_personil', $field);
	$msg['success'] = FALSE;
 		if ($result){
 			$msg['success'] = TRUE;
 			redirect('c_proyek/index');
 		}
}

public function update_personil_project(){
$id = $this->input->post('edit_idpp');
	$field = array(
'id_project' => $this->input->post('edit_cb_proyek'),
'id_user' => $this->input->post('edit_cb_userpp'),
'id_level_user' => $this->input->post('edit_cb_levelakses')
		);
	$result = $this->adm_personil_proyek->update_personil_project('project_personil', $field, $id);
 		if ($result>=0){
 			redirect('c_personil_proyek/index');
 		}
 		else{
 			redirect('c_personil_proyek/index');
 		}
 	}
public function get_personil_project(){
$id = $this->input->get('id');
$data = $this->adm_personil_proyek->get_personil_project($id);
echo json_encode($data);	
} 

public function delete_personil_project($id){
	$result = $this->adm_personil_proyek->delete_personil_project($id);
 	if($result>=1){
 	redirect('c_proyek/index');
 		}

}	
}
