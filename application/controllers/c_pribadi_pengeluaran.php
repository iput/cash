<?php defined('BASEPATH')OR exit('Tidak ada akses untuk halaman ini');
/**
* 
*/
class C_pribadi_pengeluaran extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
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
		$this->load->view('admin/v_pribadi_pengeluaran');
		$this->load->view('attribute/footer');		
	}
}
 ?>