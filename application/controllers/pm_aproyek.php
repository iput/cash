<?php defined('BASEPATH')OR exit('akses ditolak');
/**
 * 
 */
 class Pm_aproyek extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('prm_aproyek');
 	}

 	public function index()
 	{
 		$data['nama_proyek']=$this->prm_aproyek->get_pm_proyek(1);
 		$data['nm_anggaran']=$this->prm_aproyek->get_all_anggaran(1);
 		$this->load->view('attribute/header_pm');
 		$this->load->view('pmanager/Pm_aproyek', $data);
 		$this->load->view('attribute/footer_pm');
 	}

 	public function add_anggaran(){
 		$id_project = $this->input->post('nama_proyek');
 		$nama_anggaran = $this->input->post('nama_anggaran');
 		$anggaran1 = $this->input->post('jumlah_anggaran');
 		$anggaran2 = str_replace("Rp. ", "", $anggaran1);
 		$anggaran = str_replace(".","", $anggaran2);
 		$field = array(
 			'id_project' => $id_project,
 			'nama_anggaran' => $nama_anggaran,
 			'anggaran' => $anggaran,
 			'sisa_anggaran' => $anggaran
 			);
 		$result = $this->prm_aproyek->add_anggaran('anggaran_pengeluaran', $field);
 		if ($result){
 			redirect('pm_aproyek');
 		}
 		else{
 			
 		}	 
 	}

 	public function get_anggaran(){
 		$id=$this->input->get('id');
 		$data = $this->prm_aproyek->get_anggaran($id);
 		echo json_encode($data);
 	}

 	public function update_anggaran_pengeluaran(){
 		$id=$this->input->post('edit_ap');
 		$anggaran1 = $this->input->post('edit_jumlah_anggaran');
 		$anggaran2 = str_replace("Rp. ", "", $anggaran1);
 		$anggaran = str_replace(".","", $anggaran2);
 		$field = array(
 			'id_project' => $this->input->post('edit_nama_proyek'),
 			'nama_anggaran' => $this->input->post('edit_nama_anggaran'),
 			'anggaran' => $anggaran
 			);
 		$result = $this->prm_aproyek->update_anggaran_pengeluaran('anggaran_pengeluaran', $field, $id);
 		if ($result>=0){
 			redirect('pm_aproyek/index');
 		}
 		else{
 			redirect('pm_index');
 		}
 	}

 	public function delete_anggaran_pengeluaran($id){
 		$result = $this->prm_aproyek->delete_anggaran_pengeluaran($id);
 		if($result>=1){
 		redirect('pm_aproyek/index');
 		}
 	}
 }