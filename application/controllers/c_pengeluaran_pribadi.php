<?php 
defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class C_pengeluaran_pribadi extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('adm_pribadi', 'adm');
 	}

 	public function index()
 	{
 		$data['stat1']="";
		$data['stat2']="";
		$data['stat3']="";
		$data['stat4']="";
		$data['stat5']="";
		$data['stat6']="active";
		$data['stat7']="";
		$data['stat8']="";
		$data['stat9']="";
		$this->load->view('attribute/header', $data);
		$this->load->view('admin/v_pribadi');
		$this->load->view('attribute/footer');
 	}

 	public function editPemasukanP()
 	{
 		$data = $this->adm->getDataPengeluaran();
 		echo json_encode($data);
 	}
 	public function updatePemasukanPribadi()
 	{
 		$anggaran = $this->input->post('edit_jumlah_ppemasukkan');
 		$nAnggaran = str_replace("Rp.", "", $anggaran);
 		$AnggaranN	= str_replace(".", "", $nAnggaran);
 		$dataIn = array(
 			'tanggal'=> $this->input->post('edit_tanggal_pemasukan'),
 			'kredit'=>'0',
 			'debit'=>$AnggaranN,
 			'keterangan'=>$this->input->post('edit_keterangan_pemasukkan'));
 		$data = $this->adm->updatePemasukanPribadi($dataIn);
 		if ($data>=0) {
 			redirect('c_pribadi');
 		}
 	}
 } ?>