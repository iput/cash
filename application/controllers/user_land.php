<?php defined('BASEPATH')OR exit('tidak ada akses yang diizinkan');
/**
 * 

 */
 class User_land extends CI_controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		$this->load->view('attribute/header_user');
 		$this->load->view('user/home');
 		$this->load->view('attribute/footer_user');
 	}
 } ?>