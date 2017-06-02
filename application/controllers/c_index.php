<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class C_index extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$data['stat1']="active";
		$data['stat2']="";
		$data['stat3']="";
		$data['stat4']="";
		$data['stat5']="";
		$data['stat6']="";
		$data['stat7']="";
		$data['stat8']="";
		$data['stat9']="";
		$this->load->view('attribute/header', $data);
		$this->load->view('index');
		$this->load->view('attribute/footer');	
		
		
		
	}
}