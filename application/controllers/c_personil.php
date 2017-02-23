<?php 
defined('BASEPATH')OR exit('No direct scripts access allowed'); 
/**
* 
*/
class C_personil extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['stat1']="";
		$data['stat2']="active";
		$data['stat3']="";
		$data['stat4']="";
		$data['stat5']="";
		$data['stat6']="";
		$data['stat7']="";
		$data['stat8']="";
		$data['stat9']="";
		$this->load->view('attribute/header', $data);
		$this->load->view('admin/v_personil');
		$this->load->view('attribute/footer');
	}
}
?>