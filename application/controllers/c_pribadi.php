<?php 
defined('BASEPATH')OR exit('tak ada akses yang diizinkan');
/**
 * 
 */
 class C_pribadi extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('adm_pribadi');
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
		$hasil ['debit'] = $this->adm_pribadi->get_all_debit();
		$hasil ['kredit'] = $this->adm_pribadi->get_all_kredit();
		$this->load->view('attribute/header', $data);
		$this->load->view('admin/v_pribadi', $hasil);
		$this->load->view('attribute/footer');
 	}

 	public function add_pribadi($param){
 		
		if ($param=="debit"){
			$kredit ="0";
			$debit1 = $this->input->post('jumlah_pemasukkan');
			$debit2= str_replace("Rp. ", "", $debit1);
			$debit = str_replace(".","", $debit2);  
			$tanggal = $this->input->post('tgl_pemasukkan');
			$keterangan = $this->input->post('keterangan_pemasukkan');
		}
		else if ($param="kredit"){
			$debit ="0";
			$kredit1 = $this->input->post('jumlah_pengeluaran');
			$kredit2= str_replace("Rp. ", "", $kredit1);
			$kredit = str_replace(".","", $kredit2);
			$tanggal = $this->input->post('tanggal_pengeluaran');
			$keterangan = $this->input->post('keterangan_pengeluaran');
		}
		$idUser ='1';
		$field = array (
			'id_user' =>$idUser,
			'tanggal' =>$tanggal,
			'kredit' =>$kredit,
			'debit' =>$debit,
			'keterangan' => $keterangan
			);
		$result = $this->adm_pribadi->add_pribadi('pengeluaran_pribadi', $field);
		if ($result){
			redirect('C_pribadi/index');
		}
		else{
			echo "error";
		}
		}

 }