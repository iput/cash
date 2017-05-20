<?php 
defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class C_proyek extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('adm_proyek');
 		date_default_timezone_set("Asia/Jakarta");
 	}

 	public function index()
 	{
 		$data['stat1']="";
		$data['stat2']="";
		$data['stat3']="";
		$data['stat4']="active";
		$data['stat5']="";
		$data['stat6']="";
		$data['stat7']="";
		$data['stat8']="";
		$data['stat9']="";
		$datax['data_project']= $this->adm_proyek->get_all_project();
		$datax['suntikan_anggaran']=$this->adm_proyek->get_all_suntikan();
		$this->load->view('attribute/header', $data);
		$this->load->view('admin/v_proyek', $datax);
		$this->load->view('attribute/footer');
 	}

 	public function add_project(){
 		$anggaran1 = $this->input->post('anggaran_proyek');
 		$anggaran2 = str_replace("Rp. ", "", $anggaran1); 
 		$namaProyek = $this->input->post('nama_proyek');
 		$anggaran = str_replace(".","", $anggaran2);
 		$tgl_mulai = $this->input->post('tgl_mulai');
 		$tgl_selesai = $this->input->post('tgl_selesai');
 		$field = array (
 			'nama_project' => $namaProyek,
 			'anggaran' => $anggaran,
 			'tanggal_mulai' => $tgl_mulai,
 			'tanggal_selesai' => $tgl_selesai
 			);
 		$result=$this->adm_proyek->add_project('project', $field);
 		$msg['success'] = FALSE;
 		if ($result){
 			$msg['success'] = TRUE;
 			redirect('c_proyek/index');
 		}
 	}

 	public function update_project(){
 		$id = $this->input->post('edit_idproyek');
 		$anggaran1 = $this->input->post('edit_anggaran_proyek');
 		$anggaran2 = str_replace("Rp. ", "", $anggaran1); 
 		$anggaran = str_replace(".","", $anggaran2);
 		$field = array (
 			'nama_project' => $this->input->post('edit_nama_proyek'),
 			'anggaran' => $anggaran,
 			'tanggal_mulai' => $this->input->post('edit_tgl_mulai'),
 			'tanggal_selesai' => $this->input->post('edit_tgl_selesai')
 			);
 		$result = $this->adm_proyek->update_project('project', $field, $id);
 		if ($result>=0){
 			redirect('c_proyek/index');
 		}
 		else{
 			redirect('c_proyek/index');
 		}
 	}

 	public function delete_project($id){
 		$result = $this->adm_proyek->delete_project($id);
 		if($result>=1){
 			redirect('c_proyek/index');
 		}

 	}

 	public function get_project(){
 		$id = $this->input->get('id');
 		$data = $this->adm_proyek->get_project($id);
 		echo json_encode($data);
 	}

 	//controller unutk suntikan anggaran proyek

 	public function add_suntikan_anggaran(){
 		$anggaran1 = $this->input->post('jumlah_anggaran');
 		$anggaran2 = str_replace("Rp. ", "", $anggaran1); 
 		$anggaran = str_replace(".","", $anggaran2);
 		$sumberAnggaran = $this->input->post('nama_anggaran');
 		$tanggal = $this->input->post('waktu_input');
 		$id_project = $this->input->post('nama_proyek');
 		$field = array(
 			'nama_tambahan' => $sumberAnggaran,
 			'jumlah_tambahan' => $anggaran,
 			'waktu_tambahan' => $tanggal,
 			'id_project' => $id_project
 			);
 		$result=$this->adm_proyek->add_suntikan_anggaran('tambahan_anggaran', $field);
 		$msg['success'] = FALSE;
 		if ($result){
 			$msg['success'] = TRUE;
 			redirect('c_proyek/index');
 		}	
 	}

 	public function get_suntikan(){
 	$id = $this->input->get('id');
 		$data = $this->adm_proyek->get_suntikan($id);
 		echo json_encode($data);	
 	}

 	public function update_suntikan(){
 	$id = $this->input->post('edit_idsuntikan');
 	$anggaran1 = $this->input->post('edit_jumlah_anggaran');
 	$anggaran2 = str_replace("Rp. ", "", $anggaran1); 
 	$anggaran = str_replace(".","", $anggaran2);
 	$nama_tambahan = $this->input->post('edit_nama_anggaran');
 	$waktu = $this->input->post('waktu_input');
 	$id_project = $this->input->post('edit_nama_proyek');
 	$field = array(
 	'nama_tambahan' => $nama_tambahan,
 	'jumlah_tambahan' => $anggaran,
 	'waktu_tambahan' => $waktu,
 	'id_project' => $id_project	
 		);
 	$result = $this->adm_proyek->update_suntikan('tambahan_anggaran', $field, $id);
 		if ($result>=0){
 			redirect('c_proyek/index');
 		}
 		else{
 			redirect('c_proyek/index');
 		}
 	}

 	public function delete_suntikan($id){
 		$result = $this->adm_proyek->delete_suntikan($id);
 		if($result>=1){
 			redirect('c_proyek/index');
 		}
 	}
 }