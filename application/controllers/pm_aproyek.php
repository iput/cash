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
 			'nama_pengeluaran' => $nama_anggaran,
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
 }