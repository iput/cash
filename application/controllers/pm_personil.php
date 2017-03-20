<?php defined('BASEPATH')OR exit('akses ditolak');
/**
 * 
 */
 class Pm_personil extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('prm_personil');
 		$this->load->model('adm_personil_proyek');
 		
 	}

 	public function index()
 	{
 		$data['nama_proyek'] = $this->prm_personil->get_pm_proyek(2);
 		$data['nama_personil'] = $this->prm_personil->get_all_personil();
 		$data['level']= $this->adm_personil_proyek->get_all_level();
 		$data['project_personil'] = $this->prm_personil->get_all_PP();
 		$this->load->view('attribute/header_pm');
 		$this->load->view('pmanager/pm_personil', $data);
 		$this->load->view('attribute/footer_pm'); 		
 	}

 	public function add_project_personil(){
 		$id_project = $this->input->post('nama_proyek');
 		$personil = $this->input->post('cb_personil');
 		$panjang = count($personil);
 		for ($i = 0; $i < $panjang; $i++){
 			$field = array(
 				'id_project' =>$id_project,
 				'id_user' =>$personil[$i],
 				'id_level_user' => 2
 				);
 			$result = $this->prm_personil->add_project_personil('project_personil', $field);
 		}
 		$msg['success'] = FALSE;
 		if ($result){
 			$msg['success'] = TRUE;
 			redirect('pm_personil');
 		}
 	}

 	public function get_project_personil(){
 	$id = $this->input->get('id');
	$data = $this->prm_personil->get_project_personil($id);
	echo json_encode($data);		
 	}


 	
 }